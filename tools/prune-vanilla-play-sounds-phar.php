#!/usr/bin/env php
<?php

declare(strict_types=1);

/**
 * Post-processing helper to trim unused VanillaPlaySounds entries from built plugin phars.
 *
 * It scans PHP files inside the phar archives to find usages of VanillaPlaySounds
 * (including aliases declared via "use ... as ...") and removes unused constants
 * and methods from the generated VanillaPlaySounds traits and class.
 *
 * Usage:
 *   php tools/prune-vanilla-play-sounds-phar.php .releases
 *   php tools/prune-vanilla-play-sounds-phar.php .releases/MyPlugin.phar
 *
 * This script is designed to be used in CI (e.g. GitHub Actions) after the plugin
 * is built and virions are infected into the phar.
 */

if (!isset($argv[1])) {
    fwrite(STDERR, "Usage: prune-vanilla-play-sounds-phar.php <phar-file-or-directory-or-glob>\n");
    exit(1);
}

$iniReadonly = ini_get('phar.readonly');
if ($iniReadonly !== false && $iniReadonly !== '0') {
    ini_set('phar.readonly', '0');
}

$target = $argv[1];
$pharPaths = [];

if (is_dir($target)) {
    $pharPaths = glob(rtrim($target, "/\\") . '/*.phar');
} elseif (str_contains($target, '*')) {
    $pharPaths = glob($target);
} elseif (is_file($target)) {
    $pharPaths = [$target];
}

if ($pharPaths === []) {
    fwrite(STDERR, "No phar files found for target: {$target}\n");
    exit(1);
}

foreach ($pharPaths as $pharPath) {
    pruneVanillaPlaySoundsInPhar($pharPath);
}

/**
 * @param string $pharPath
 */
function pruneVanillaPlaySoundsInPhar(string $pharPath) : void{
    echo "Pruning VanillaPlaySounds in {$pharPath}\n";

    $src = new Phar($pharPath);

    $usedMethods = [];
    $usedConsts = [];
    $hasVanillaPlaySounds = false;
    $vanillaFile = null;
    $files = [];

    // Compute prefix for normalizing Phar internal paths, e.g.
    // "phar://D:/.../Pouch-v1.8.8.phar/"
    $realPhar = realpath($pharPath);
    $pharPrefix = $realPhar !== false
        ? 'phar://' . str_replace('\\', '/', $realPhar) . '/'
        : null;

    // Snapshot all files and collect usage info
    foreach (new RecursiveIteratorIterator($src) as $file) {
        /** @var PharFileInfo $file */
        $fullPath = str_replace('\\', '/', $file->getPathName());
        $relativePath = $fullPath;
        if ($pharPrefix !== null && str_starts_with($fullPath, $pharPrefix)) {
            $relativePath = substr($fullPath, strlen($pharPrefix));
        }

        $code = $file->getContent();
        $files[$relativePath] = $code;

        if (str_contains($code, 'VanillaPlaySounds')) {
            $hasVanillaPlaySounds = true;
        }

        if ($vanillaFile === null && str_contains($code, 'final readonly class VanillaPlaySounds')) {
            $vanillaFile = $relativePath;
        }

        if (str_ends_with($relativePath, '.php')) {
            $usage = collectUsedVanillaPlaySoundsNames($code);
            foreach ($usage['methods'] as $name) {
                $usedMethods[$name] = true;
            }
            foreach ($usage['consts'] as $name) {
                $usedConsts[$name] = true;
            }
        }
    }

    if (!$hasVanillaPlaySounds || $vanillaFile === null) {
        echo "  No VanillaPlaySounds class detected; skipping.\n";
        return;
    }

    // Collect members from trait files and drop trait files from snapshot
    $collectedConsts = [];
    $collectedMethods = [];

    foreach ($files as $path => $code) {
        if (!str_ends_with($path, '.php')) {
            continue;
        }

        if (preg_match('/trait\s+VanillaPlaySounds[A-Za-z0-9]+Trait\b/', $code) === 1) {
            collectMembersFromTrait($code, $usedMethods, $usedConsts, $collectedConsts, $collectedMethods);
            unset($files[$path]);
        }
    }

    // Rewrite VanillaPlaySounds class in snapshot
    if (isset($files[$vanillaFile])) {
        $files[$vanillaFile] = rewriteVanillaPlaySoundsClass(
            $files[$vanillaFile],
            $collectedConsts,
            $collectedMethods
        );
    }

    // Rebuild phar to a new file then replace original
    $stub = $src->getStub();
    $meta = $src->getMetadata();
    unset($src);

    // Build into temporary phar first
    $outPath = $pharPath . '.tmp';
    if (file_exists($outPath)) {
        @unlink($outPath);
    }

    $dst = new Phar($outPath);
    $dst->setStub($stub);
    if ($meta !== null) {
        $dst->setMetadata($meta);
    }

    foreach ($files as $path => $code) {
        $dst[$path] = $code;
    }

    // Make sure Phar handle is closed before rename (important on Windows)
    unset($dst);
    clearstatcache();

    // Replace original phar atomically where possible
    if (file_exists($pharPath)) {
        @unlink($pharPath);
    }

    if (@rename($outPath, $pharPath) === false) {
        // On Windows the original phar may be locked by another process (e.g. editor/zip viewer).
        // Fall back to keeping the trimmed file alongside the original with a different name.
        $fallback = preg_replace('/\.phar$/', '.trimmed.phar', $pharPath);
        if ($fallback === null || $fallback === $pharPath) {
            $fallback = $pharPath . '.trimmed.phar';
        }
        @unlink($fallback);
        rename($outPath, $fallback);
        echo "  Could not replace original phar (probably locked). Trimmed phar saved as {$fallback}.\n";
        return;
    }

    echo "  Replaced original phar with trimmed version.\n";
}

/**
 * Collects all used VanillaPlaySounds constant/method names within given PHP code.
 *
 * It detects:
 *  - FQN: \kim\present\utils\playsound\VanillaPlaySounds::NAME
 *  - Imported name: use kim\present\utils\playsound\VanillaPlaySounds;
 *  - Aliased name: use kim\present\utils\playsound\VanillaPlaySounds as Sounds;
 *
 * @param string $code
 * @return array{methods: string[], consts: string[]}
 */
function collectUsedVanillaPlaySoundsNames(string $code) : array{
    $aliases = [];

    // Always consider the short class name and FQN as valid identifiers
    $aliases[] = 'VanillaPlaySounds';

    // 1) Scan for "use" statements that import VanillaPlaySounds (with or without alias)
    if (preg_match_all('/use\s+([^;]*VanillaPlaySounds[^;]*);/i', $code, $matches)) {
        foreach ($matches[1] as $useClause) {
            // Handle multiple imports in a single use via comma
            $parts = explode(',', $useClause);
            foreach ($parts as $part) {
                $part = trim($part);
                if ($part === '') {
                    continue;
                }

                // Normalize spaces
                $part = preg_replace('/\s+/', ' ', $part);

                // Match "...VanillaPlaySounds" or "...VanillaPlaySounds as Alias"
                if (!preg_match('/VanillaPlaySounds(?:\s+as\s+(\w+))?/i', $part, $m)) {
                    continue;
                }

                $alias = isset($m[1]) && $m[1] !== '' ? $m[1] : 'VanillaPlaySounds';
                if (!in_array($alias, $aliases, true)) {
                    $aliases[] = $alias;
                }
            }
        }
    }

    // 2) Build regex that matches any alias or the full FQN
    $escaped = array_map(static fn(string $n) => preg_quote($n, '/'), $aliases);
    $classAlternatives = implode('|', $escaped);
    $pattern = '/(?<![\\\\\w])(' . $classAlternatives . '|\\\\kim\\\\present\\\\utils\\\\playsound\\\\VanillaPlaySounds)::([A-Z0-9_]+)\s*(\(|;|,|\)|\s)/';

    $methodNames = [];
    $constNames = [];
    if (preg_match_all($pattern, $code, $m)) {
        foreach ($m[2] as $i => $name) {
            $next = $m[3][$i];
            if ($next === '(') {
                $methodNames[] = $name;
            } else {
                $constNames[] = $name;
            }
        }
    }

    return [
        'methods' => array_values(array_unique($methodNames)),
        'consts' => array_values(array_unique($constNames)),
    ];
}

/**
 * Collects constants and methods from a generated VanillaPlaySounds trait file.
 * Only members whose names are present in $usedMethods / $usedConsts are collected.
 * If both are empty, nothing is collected (result: no members inlined).
 *
 * @param string  $code
 * @param boolean[] $usedMethods
 * @param boolean[] $usedConsts
 * @param array<string,string> $collectedConsts
 * @param array<string,string> $collectedMethods
 */
function collectMembersFromTrait(string $code, array $usedMethods, array $usedConsts, array &$collectedConsts, array &$collectedMethods) : void{
    $lines = explode("\n", $code);

    foreach ($lines as $line) {
        $trimmed = ltrim($line);

        if (preg_match('/public const\s+([A-Z0-9_]+)\s*=/', $trimmed, $m) === 1) {
            $name = $m[1];
            if (!isset($usedConsts[$name])) {
                continue;
            }
            $collectedConsts[$name] = $line;
        } elseif (preg_match('/public static function\s+([A-Z0-9_]+)\s*\(/', $trimmed, $m) === 1) {
            $name = $m[1];
            if (!isset($usedMethods[$name])) {
                continue;
            }
            $collectedMethods[$name] = $line;
        }
    }
}

/**
 * Rewrites the VanillaPlaySounds main class by:
 *  - Removing imports/usages of generated traits under the defaults namespace
 *  - Inlining collected constants and methods directly into the class body
 *
 * @param string        $code
 * @param array<string,string> $collectedConsts
 * @param array<string,string> $collectedMethods
 * @return string
 */
function rewriteVanillaPlaySoundsClass(string $code, array $collectedConsts, array $collectedMethods) : string{
    // Remove "use kim\present\utils\playsound\defaults\VanillaPlaySoundsXxxTrait;" imports
    $code = preg_replace(
        '/^use\s+kim\\\\present\\\\utils\\\\playsound\\\\defaults\\\\VanillaPlaySounds[A-Za-z0-9]+Trait;\s*$/m',
        '',
        $code
    );

    // Remove "use VanillaPlaySoundsXxxTrait;" inside the class body
    $code = preg_replace(
        '/^\s*use\s+VanillaPlaySounds[A-Za-z0-9]+Trait;\s*$/m',
        '',
        $code
    );

    // Build inline members block
    $memberLines = [];
    if ($collectedConsts !== []) {
        foreach ($collectedConsts as $line) {
            $memberLines[] = $line;
        }
        $memberLines[] = ''; // blank line between consts and methods
    }
    if ($collectedMethods !== []) {
        foreach ($collectedMethods as $line) {
            $memberLines[] = $line;
        }
    }

    if ($memberLines === []) {
        // Nothing to inline; just return cleaned-up code
        return $code;
    }

    $insertBlock = implode("\n", $memberLines) . "\n\n";

    // Insert right after the class opening line
    $pattern = '/(final\s+readonly\s+class\s+VanillaPlaySounds\s*\{\s*\R)/';
    $code = preg_replace($pattern, '$1' . $insertBlock, $code, 1);

    return $code;
}


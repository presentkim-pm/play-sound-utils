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
 * The class is detected by its short name, so it also works when the library has been
 * namespace-shaded (prefixed) into the phar by the plugin's build.
 *
 * Usage (run it with phar.readonly disabled):
 *   php -d phar.readonly=0 vendor/bin/prune-vanilla-play-sounds-phar.php .releases
 *   php -d phar.readonly=0 vendor/bin/prune-vanilla-play-sounds-phar.php .releases/MyPlugin.phar
 *
 * This script is designed to be used in CI (e.g. GitHub Actions) after the plugin
 * is built and its vendored libraries are shaded into the phar.
 */

require_once __DIR__ . '/PruneVanillaPlaySounds.php';

if (!isset($argv[1])) {
    fwrite(STDERR, "Usage: php -d phar.readonly=0 prune-vanilla-play-sounds-phar.php <phar-file-or-directory-or-glob>\n");
    exit(1);
}

if (ini_get('phar.readonly') !== '0' && ini_get('phar.readonly') !== '') {
    fwrite(STDERR, "phar.readonly is enabled. Run with: php -d phar.readonly=0 " . $argv[0] . " <target>\n");
    exit(1);
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

if ($pharPaths === [] || $pharPaths === false) {
    fwrite(STDERR, "No phar files found for target: {$target}\n");
    exit(1);
}

foreach ($pharPaths as $pharPath) {
    pruneVanillaPlaySoundsInPhar($pharPath);
}

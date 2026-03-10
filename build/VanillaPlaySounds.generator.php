<?php

/**
 * Build script to generate the VanillaPlaySounds class.
 * This script automates the process of mapping Bedrock Edition sounds to PHP methods,
 * including aliases for shortened sound names.
 */

declare(strict_types=1);

const URL_SOUND_DEFS = "https://raw.githubusercontent.com/Mojang/bedrock-samples/refs/heads/main/resource_pack/sounds/sound_definitions.json";
const URL_VERSION = "https://raw.githubusercontent.com/Mojang/bedrock-samples/refs/heads/main/version.json";
const TEMPLATE_PATH = __DIR__ . "/VanillaPlaySounds.template.php";
const TRAIT_TEMPLATE_PATH = __DIR__ . "/VanillaPlaySounds.trait.template.php";
const OUTPUT_PATH = __DIR__ . "/../src/kim/present/utils/playsound/VanillaPlaySounds.php";
const TRAIT_OUTPUT_DIR = __DIR__ . "/../src/kim/present/utils/playsound/defaults";

/**
 * Generates a formatted method string with full indentation and DocBlock.
 */
function generateMethodPretty(string $soundName, string $methodName, string $category, ?string $originalMethod = null) : string {
    $seeTag = $originalMethod !== null ? "\n    * @see self::$originalMethod()" : "";
    return "    /** [$category] $soundName$seeTag */\n"
        . "    public static function $methodName() : PlaySound{\n"
        . "        /** @var PlaySound|null \$cache */\n"
        . "        static \$cache = null;\n"
        . "        return clone(\$cache ??= new PlaySound('$soundName'));\n"
        . "    }\n";
}

/**
 * Generates a compact one-liner method string.
 */
function generateMethodShort(string $soundName, string $methodName, string $category, ?string $originalMethod = null) : string {
    $seeTag = $originalMethod !== null ? " @see self::$originalMethod()" : "";
    return "    /** [$category] $soundName$seeTag */\n    "
        . "public static function $methodName() : PlaySound{"
        . " static \$cache = null; return clone(\$cache ??= new PlaySound('$soundName')); "
        . "}";
}

/**
 * Converts sound key to UpperCase method name (e.g. mob.zombie.say -> MOB_ZOMBIE_SAY)
 */
function formatMethodName(string $soundName) : string {
    $upper = strtoupper(str_replace('.', '_', $soundName));
    return (string) preg_replace('/[^A-Z0-9_]/', '_', $upper);
}

/**
 * Validates if the string is a valid PHP method name.
 * Method names must start with a letter or underscore, followed by letters, numbers, or underscores.
 */
function isValidMethodName(string $name) : bool {
    return $name !== "" && preg_match('/^[a-zA-Z_\x80-\xff][a-zA-Z0-9_\x80-\xff]*$/', $name) === 1;
}

/**
 * Converts a category name to a trait class name.
 *
 * Examples:
 *  - "ambient" => "VanillaPlaySoundsAmbientTrait"
 *  - "hostile_mob" => "VanillaPlaySoundsHostileMobTrait"
 */
function formatCategoryTraitName(string $category) : string {
    $normalized = preg_replace('/[^a-zA-Z0-9]+/', " ", $category);
    $normalized = trim((string) $normalized);
    if ($normalized === "") {
        $normalized = "Unknown";
    }
    $normalized = str_replace(" ", "", ucwords(strtolower($normalized)));
    return "VanillaPlaySounds{$normalized}Trait";
}

try {
    echo "Starting build process...\n";

    // 1. Fetch Bedrock Version
    echo "Fetching version info...\n";
    $versionJson = file_get_contents(URL_VERSION);
    if ($versionJson === false) {
        throw new RuntimeException("Could not fetch version.json");
    }

    $versionData = json_decode($versionJson, true);
    $latestVersion = $versionData['latest']['version'] ?? 'unknown';
    echo "Detected Bedrock Version: $latestVersion\n";

    // 2. Fetch Sound Definitions
    echo "Fetching sound definitions...\n";
    $soundJson = file_get_contents(URL_SOUND_DEFS);
    if ($soundJson === false) {
        throw new RuntimeException("Could not fetch sound_definitions.json");
    }

    $soundData = json_decode($soundJson, true);
    $definitions = $soundData['sound_definitions'] ?? [];

    // 3. Pre-scan for original method names to prevent collisions
    $originalMethods = []; // [soundKey => methodName]
    $usedMethodNames = []; // List of all names used to avoid duplicates

    foreach ($definitions as $soundName => $definition) {
        $methodName = formatMethodName($soundName);
        if (isValidMethodName($methodName)) {
            $originalMethods[$soundName] = $methodName;
            $usedMethodNames[$methodName] = true;
        }
    }

    // 4. Generate Method and Constant Strings (Originals and Aliases), grouped by category
    echo "Generating methods and constants for " . count($definitions) . " sounds...\n";
    $categoryMethods = []; // [category => string[]]
    $categoryConsts = []; // [category => string[]]
    $totalGeneratedMethods = 0;

    foreach ($definitions as $soundName => $definition) {
        if (!isset($originalMethods[$soundName])) {
            continue; // Skip sounds with invalid names
        }

        $category = (string) ($definition["category"] ?? "unknown");
        $originalMethodName = $originalMethods[$soundName];

        // Initialize buckets
        if (!isset($categoryMethods[$category])) {
            $categoryMethods[$category] = [];
        }
        if (!isset($categoryConsts[$category])) {
            $categoryConsts[$category] = [];
        }

        // Add original method and constant
        $categoryMethods[$category][] = generateMethodShort($soundName, $originalMethodName, $category);
        $categoryConsts[$category][] = "    public const {$originalMethodName} = '{$soundName}';";
        $totalGeneratedMethods++;

        // Try to generate alias by removing the first segment
        if (strpos($soundName, '.') !== false) {
            $parts = explode('.', $soundName);
            array_shift($parts);

            $aliasBase = implode('.', $parts);
            $aliasMethodName = formatMethodName($aliasBase);

            // Add alias only if it's a valid PHP identifier and doesn't collide
            if (isValidMethodName($aliasMethodName) && !isset($usedMethodNames[$aliasMethodName])) {
                $categoryMethods[$category][] = generateMethodShort($soundName, $aliasMethodName, $category, $originalMethodName);
                $categoryConsts[$category][] = "    public const {$aliasMethodName} = '{$soundName}';";
                $totalGeneratedMethods++;

                // Mark alias as used to prevent further collisions
                $usedMethodNames[$aliasMethodName] = true;
            }
        }
    }

    ksort($categoryMethods);

    // 5. Generate traits per category
    if (!file_exists(TRAIT_TEMPLATE_PATH)) {
        throw new RuntimeException("Trait template file missing: " . TRAIT_TEMPLATE_PATH);
    }

    $traitTemplateContent = file_get_contents(TRAIT_TEMPLATE_PATH);
    if ($traitTemplateContent === false) {
        throw new RuntimeException("Could not read trait template file: " . TRAIT_TEMPLATE_PATH);
    }

    if (!is_dir(TRAIT_OUTPUT_DIR)) {
        mkdir(TRAIT_OUTPUT_DIR, 0777, true);
    }

    $traitImportLines = [];
    $traitUseLines = [];

    foreach ($categoryMethods as $category => $methods) {
        $traitName = formatCategoryTraitName((string) $category);
        $consts = $categoryConsts[$category] ?? [];

        $methodsBlock = implode("\n", $methods);
        $constsBlock = implode("\n", $consts);

        $traitContent = str_replace(
            ['##TRAIT_NAME##', '##CATEGORY_NAME##', '##BEDROCK_VERSION##', '##GENERATED_CONSTS##', '##GENERATED_METHODS##'],
            [$traitName, (string) $category, $latestVersion, $constsBlock, $methodsBlock],
            $traitTemplateContent
        );

        $traitPath = TRAIT_OUTPUT_DIR . "/" . $traitName . ".php";
        file_put_contents($traitPath, $traitContent);

        $traitFqcn = "kim\\present\\utils\\playsound\\defaults\\{$traitName}";
        $traitImportLines[] = "use {$traitFqcn};";
        $traitUseLines[] = "    use {$traitName};";
    }

    $traitImportsBlock = implode("\n", $traitImportLines);
    $traitUsesBlock = implode("\n", $traitUseLines);

    // 6. Processing VanillaPlaySounds template
    if (!file_exists(TEMPLATE_PATH)) {
        throw new RuntimeException("Template file missing: " . TEMPLATE_PATH);
    }

    $templateContent = file_get_contents(TEMPLATE_PATH);
    $finalOutput = str_replace(
        ['##BEDROCK_VERSION##', '##GENERATED_TRAIT_IMPORTS##', '##GENERATED_TRAIT_USES##'],
        [$latestVersion, $traitImportsBlock, $traitUsesBlock],
        $templateContent
    );

    // 7. Writing VanillaPlaySounds.php
    $dir = dirname(OUTPUT_PATH);
    if (!is_dir($dir)) {
        mkdir($dir, 0777, true);
    }

    file_put_contents(OUTPUT_PATH, $finalOutput);
    echo "Build Complete! File generated at: " . realpath(OUTPUT_PATH) . "\n";
    echo "Total methods generated: " . $totalGeneratedMethods . "\n";

} catch (Exception $e) {
    echo "Build Failed: " . $e->getMessage() . "\n";
    exit(1);
}

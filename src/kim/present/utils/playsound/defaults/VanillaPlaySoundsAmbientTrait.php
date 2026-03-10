<?php

/**
 *
 *  ____                           _   _  ___
 * |  _ \ _ __ ___  ___  ___ _ __ | |_| |/ (_)_ __ ___
 * | |_) | '__/ _ \/ __|/ _ \ '_ \| __| ' /| | '_ ` _ \
 * |  __/| | |  __/\__ \  __/ | | | |_| . \| | | | | | |
 * |_|   |_|  \___||___/\___|_| |_|\__|_|\_\_|_| |_| |_|
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the MIT License. see <https://opensource.org/licenses/MIT>.
 *
 * @author       PresentKim (debe3721@gmail.com)
 * @link         https://github.com/PresentKim
 * @license      https://opensource.org/licenses/MIT MIT License
 *
 *   (\ /)
 *  ( . .) ♥
 *  c(")(")
 *
 * @noinspection PhpUnused
 * @noinspection SpellCheckingInspection
 */

declare(strict_types=1);

namespace kim\present\utils\playsound\defaults;

use kim\present\utils\playsound\PlaySound;
use kim\present\utils\playsound\VanillaPlaySounds;

/**
 * Provides vanilla play sounds and sound name constants for category "ambient".
 *
 * Last updated for 1.26.0.2.
 *
 * @internal This trait is generated automatically from {@link build/VanillaPlaySounds.generator.php}.
 * @see      VanillaPlaySounds
 */
trait VanillaPlaySoundsAmbientTrait{

    public const AMBIENT_BASALT_DELTAS_ADDITIONS = 'ambient.basalt_deltas.additions';
    public const BASALT_DELTAS_ADDITIONS = 'ambient.basalt_deltas.additions';
    public const AMBIENT_BASALT_DELTAS_LOOP = 'ambient.basalt_deltas.loop';
    public const BASALT_DELTAS_LOOP = 'ambient.basalt_deltas.loop';
    public const AMBIENT_BASALT_DELTAS_MOOD = 'ambient.basalt_deltas.mood';
    public const BASALT_DELTAS_MOOD = 'ambient.basalt_deltas.mood';
    public const AMBIENT_CAVE = 'ambient.cave';
    public const CAVE = 'ambient.cave';
    public const AMBIENT_CRIMSON_FOREST_ADDITIONS = 'ambient.crimson_forest.additions';
    public const CRIMSON_FOREST_ADDITIONS = 'ambient.crimson_forest.additions';
    public const AMBIENT_CRIMSON_FOREST_LOOP = 'ambient.crimson_forest.loop';
    public const CRIMSON_FOREST_LOOP = 'ambient.crimson_forest.loop';
    public const AMBIENT_CRIMSON_FOREST_MOOD = 'ambient.crimson_forest.mood';
    public const CRIMSON_FOREST_MOOD = 'ambient.crimson_forest.mood';
    public const AMBIENT_NETHER_WASTES_ADDITIONS = 'ambient.nether_wastes.additions';
    public const NETHER_WASTES_ADDITIONS = 'ambient.nether_wastes.additions';
    public const AMBIENT_NETHER_WASTES_LOOP = 'ambient.nether_wastes.loop';
    public const NETHER_WASTES_LOOP = 'ambient.nether_wastes.loop';
    public const AMBIENT_NETHER_WASTES_MOOD = 'ambient.nether_wastes.mood';
    public const NETHER_WASTES_MOOD = 'ambient.nether_wastes.mood';
    public const AMBIENT_SOULSAND_VALLEY_ADDITIONS = 'ambient.soulsand_valley.additions';
    public const SOULSAND_VALLEY_ADDITIONS = 'ambient.soulsand_valley.additions';
    public const AMBIENT_SOULSAND_VALLEY_LOOP = 'ambient.soulsand_valley.loop';
    public const SOULSAND_VALLEY_LOOP = 'ambient.soulsand_valley.loop';
    public const AMBIENT_SOULSAND_VALLEY_MOOD = 'ambient.soulsand_valley.mood';
    public const SOULSAND_VALLEY_MOOD = 'ambient.soulsand_valley.mood';
    public const AMBIENT_UNDERWATER_ADDITIONS = 'ambient.underwater.additions';
    public const UNDERWATER_ADDITIONS = 'ambient.underwater.additions';
    public const AMBIENT_UNDERWATER_LOOP = 'ambient.underwater.loop';
    public const UNDERWATER_LOOP = 'ambient.underwater.loop';
    public const AMBIENT_WARPED_FOREST_ADDITIONS = 'ambient.warped_forest.additions';
    public const WARPED_FOREST_ADDITIONS = 'ambient.warped_forest.additions';
    public const AMBIENT_WARPED_FOREST_LOOP = 'ambient.warped_forest.loop';
    public const WARPED_FOREST_LOOP = 'ambient.warped_forest.loop';
    public const AMBIENT_WARPED_FOREST_MOOD = 'ambient.warped_forest.mood';
    public const WARPED_FOREST_MOOD = 'ambient.warped_forest.mood';
    public const ENTITY_GENERIC_SPLASH = 'entity.generic.splash';
    public const GENERIC_SPLASH = 'entity.generic.splash';
    public const FIREWORK_BLAST = 'firework.blast';
    public const BLAST = 'firework.blast';
    public const FIREWORK_LARGE_BLAST = 'firework.large_blast';
    public const LARGE_BLAST = 'firework.large_blast';
    public const FIREWORK_LAUNCH = 'firework.launch';
    public const LAUNCH = 'firework.launch';
    public const FIREWORK_SHOOT = 'firework.shoot';
    public const FIREWORK_TWINKLE = 'firework.twinkle';
    public const TWINKLE = 'firework.twinkle';
    public const PORTAL_TRAVEL = 'portal.travel';
    public const TRAVEL = 'portal.travel';
    public const PORTAL_TRIGGER = 'portal.trigger';
    public const TRIGGER = 'portal.trigger';

    /** [ambient] ambient.basalt_deltas.additions */
    public static function AMBIENT_BASALT_DELTAS_ADDITIONS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ambient.basalt_deltas.additions')); }
    /** [ambient] ambient.basalt_deltas.additions @see self::AMBIENT_BASALT_DELTAS_ADDITIONS() */
    public static function BASALT_DELTAS_ADDITIONS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ambient.basalt_deltas.additions')); }
    /** [ambient] ambient.basalt_deltas.loop */
    public static function AMBIENT_BASALT_DELTAS_LOOP() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ambient.basalt_deltas.loop')); }
    /** [ambient] ambient.basalt_deltas.loop @see self::AMBIENT_BASALT_DELTAS_LOOP() */
    public static function BASALT_DELTAS_LOOP() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ambient.basalt_deltas.loop')); }
    /** [ambient] ambient.basalt_deltas.mood */
    public static function AMBIENT_BASALT_DELTAS_MOOD() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ambient.basalt_deltas.mood')); }
    /** [ambient] ambient.basalt_deltas.mood @see self::AMBIENT_BASALT_DELTAS_MOOD() */
    public static function BASALT_DELTAS_MOOD() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ambient.basalt_deltas.mood')); }
    /** [ambient] ambient.cave */
    public static function AMBIENT_CAVE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ambient.cave')); }
    /** [ambient] ambient.cave @see self::AMBIENT_CAVE() */
    public static function CAVE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ambient.cave')); }
    /** [ambient] ambient.crimson_forest.additions */
    public static function AMBIENT_CRIMSON_FOREST_ADDITIONS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ambient.crimson_forest.additions')); }
    /** [ambient] ambient.crimson_forest.additions @see self::AMBIENT_CRIMSON_FOREST_ADDITIONS() */
    public static function CRIMSON_FOREST_ADDITIONS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ambient.crimson_forest.additions')); }
    /** [ambient] ambient.crimson_forest.loop */
    public static function AMBIENT_CRIMSON_FOREST_LOOP() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ambient.crimson_forest.loop')); }
    /** [ambient] ambient.crimson_forest.loop @see self::AMBIENT_CRIMSON_FOREST_LOOP() */
    public static function CRIMSON_FOREST_LOOP() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ambient.crimson_forest.loop')); }
    /** [ambient] ambient.crimson_forest.mood */
    public static function AMBIENT_CRIMSON_FOREST_MOOD() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ambient.crimson_forest.mood')); }
    /** [ambient] ambient.crimson_forest.mood @see self::AMBIENT_CRIMSON_FOREST_MOOD() */
    public static function CRIMSON_FOREST_MOOD() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ambient.crimson_forest.mood')); }
    /** [ambient] ambient.nether_wastes.additions */
    public static function AMBIENT_NETHER_WASTES_ADDITIONS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ambient.nether_wastes.additions')); }
    /** [ambient] ambient.nether_wastes.additions @see self::AMBIENT_NETHER_WASTES_ADDITIONS() */
    public static function NETHER_WASTES_ADDITIONS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ambient.nether_wastes.additions')); }
    /** [ambient] ambient.nether_wastes.loop */
    public static function AMBIENT_NETHER_WASTES_LOOP() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ambient.nether_wastes.loop')); }
    /** [ambient] ambient.nether_wastes.loop @see self::AMBIENT_NETHER_WASTES_LOOP() */
    public static function NETHER_WASTES_LOOP() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ambient.nether_wastes.loop')); }
    /** [ambient] ambient.nether_wastes.mood */
    public static function AMBIENT_NETHER_WASTES_MOOD() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ambient.nether_wastes.mood')); }
    /** [ambient] ambient.nether_wastes.mood @see self::AMBIENT_NETHER_WASTES_MOOD() */
    public static function NETHER_WASTES_MOOD() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ambient.nether_wastes.mood')); }
    /** [ambient] ambient.soulsand_valley.additions */
    public static function AMBIENT_SOULSAND_VALLEY_ADDITIONS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ambient.soulsand_valley.additions')); }
    /** [ambient] ambient.soulsand_valley.additions @see self::AMBIENT_SOULSAND_VALLEY_ADDITIONS() */
    public static function SOULSAND_VALLEY_ADDITIONS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ambient.soulsand_valley.additions')); }
    /** [ambient] ambient.soulsand_valley.loop */
    public static function AMBIENT_SOULSAND_VALLEY_LOOP() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ambient.soulsand_valley.loop')); }
    /** [ambient] ambient.soulsand_valley.loop @see self::AMBIENT_SOULSAND_VALLEY_LOOP() */
    public static function SOULSAND_VALLEY_LOOP() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ambient.soulsand_valley.loop')); }
    /** [ambient] ambient.soulsand_valley.mood */
    public static function AMBIENT_SOULSAND_VALLEY_MOOD() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ambient.soulsand_valley.mood')); }
    /** [ambient] ambient.soulsand_valley.mood @see self::AMBIENT_SOULSAND_VALLEY_MOOD() */
    public static function SOULSAND_VALLEY_MOOD() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ambient.soulsand_valley.mood')); }
    /** [ambient] ambient.underwater.additions */
    public static function AMBIENT_UNDERWATER_ADDITIONS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ambient.underwater.additions')); }
    /** [ambient] ambient.underwater.additions @see self::AMBIENT_UNDERWATER_ADDITIONS() */
    public static function UNDERWATER_ADDITIONS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ambient.underwater.additions')); }
    /** [ambient] ambient.underwater.loop */
    public static function AMBIENT_UNDERWATER_LOOP() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ambient.underwater.loop')); }
    /** [ambient] ambient.underwater.loop @see self::AMBIENT_UNDERWATER_LOOP() */
    public static function UNDERWATER_LOOP() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ambient.underwater.loop')); }
    /** [ambient] ambient.warped_forest.additions */
    public static function AMBIENT_WARPED_FOREST_ADDITIONS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ambient.warped_forest.additions')); }
    /** [ambient] ambient.warped_forest.additions @see self::AMBIENT_WARPED_FOREST_ADDITIONS() */
    public static function WARPED_FOREST_ADDITIONS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ambient.warped_forest.additions')); }
    /** [ambient] ambient.warped_forest.loop */
    public static function AMBIENT_WARPED_FOREST_LOOP() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ambient.warped_forest.loop')); }
    /** [ambient] ambient.warped_forest.loop @see self::AMBIENT_WARPED_FOREST_LOOP() */
    public static function WARPED_FOREST_LOOP() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ambient.warped_forest.loop')); }
    /** [ambient] ambient.warped_forest.mood */
    public static function AMBIENT_WARPED_FOREST_MOOD() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ambient.warped_forest.mood')); }
    /** [ambient] ambient.warped_forest.mood @see self::AMBIENT_WARPED_FOREST_MOOD() */
    public static function WARPED_FOREST_MOOD() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ambient.warped_forest.mood')); }
    /** [ambient] entity.generic.splash */
    public static function ENTITY_GENERIC_SPLASH() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('entity.generic.splash')); }
    /** [ambient] entity.generic.splash @see self::ENTITY_GENERIC_SPLASH() */
    public static function GENERIC_SPLASH() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('entity.generic.splash')); }
    /** [ambient] firework.blast */
    public static function FIREWORK_BLAST() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('firework.blast')); }
    /** [ambient] firework.blast @see self::FIREWORK_BLAST() */
    public static function BLAST() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('firework.blast')); }
    /** [ambient] firework.large_blast */
    public static function FIREWORK_LARGE_BLAST() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('firework.large_blast')); }
    /** [ambient] firework.large_blast @see self::FIREWORK_LARGE_BLAST() */
    public static function LARGE_BLAST() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('firework.large_blast')); }
    /** [ambient] firework.launch */
    public static function FIREWORK_LAUNCH() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('firework.launch')); }
    /** [ambient] firework.launch @see self::FIREWORK_LAUNCH() */
    public static function LAUNCH() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('firework.launch')); }
    /** [ambient] firework.shoot */
    public static function FIREWORK_SHOOT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('firework.shoot')); }
    /** [ambient] firework.twinkle */
    public static function FIREWORK_TWINKLE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('firework.twinkle')); }
    /** [ambient] firework.twinkle @see self::FIREWORK_TWINKLE() */
    public static function TWINKLE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('firework.twinkle')); }
    /** [ambient] portal.travel */
    public static function PORTAL_TRAVEL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('portal.travel')); }
    /** [ambient] portal.travel @see self::PORTAL_TRAVEL() */
    public static function TRAVEL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('portal.travel')); }
    /** [ambient] portal.trigger */
    public static function PORTAL_TRIGGER() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('portal.trigger')); }
    /** [ambient] portal.trigger @see self::PORTAL_TRIGGER() */
    public static function TRIGGER() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('portal.trigger')); }

}


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
 * Provides vanilla play sounds and sound name constants for category "music".
 *
 * Last updated for 1.26.0.2.
 *
 * @internal This trait is generated automatically from {@link build/VanillaPlaySounds.generator.php}.
 * @see      VanillaPlaySounds
 */
trait VanillaPlaySoundsMusicTrait{

    public const MUSIC_GAME = 'music.game';
    public const GAME = 'music.game';
    public const MUSIC_GAME_BASALT_DELTAS = 'music.game.basalt_deltas';
    public const GAME_BASALT_DELTAS = 'music.game.basalt_deltas';
    public const MUSIC_GAME_CREATIVE = 'music.game.creative';
    public const GAME_CREATIVE = 'music.game.creative';
    public const MUSIC_GAME_CREDITS = 'music.game.credits';
    public const GAME_CREDITS = 'music.game.credits';
    public const MUSIC_GAME_CRIMSON_FOREST = 'music.game.crimson_forest';
    public const GAME_CRIMSON_FOREST = 'music.game.crimson_forest';
    public const MUSIC_GAME_DEEP_DARK = 'music.game.deep_dark';
    public const GAME_DEEP_DARK = 'music.game.deep_dark';
    public const MUSIC_GAME_DRIPSTONE_CAVES = 'music.game.dripstone_caves';
    public const GAME_DRIPSTONE_CAVES = 'music.game.dripstone_caves';
    public const MUSIC_GAME_END = 'music.game.end';
    public const GAME_END = 'music.game.end';
    public const MUSIC_GAME_ENDBOSS = 'music.game.endboss';
    public const GAME_ENDBOSS = 'music.game.endboss';
    public const MUSIC_GAME_FROZEN_PEAKS = 'music.game.frozen_peaks';
    public const GAME_FROZEN_PEAKS = 'music.game.frozen_peaks';
    public const MUSIC_GAME_GROVE = 'music.game.grove';
    public const GAME_GROVE = 'music.game.grove';
    public const MUSIC_GAME_JAGGED_PEAKS = 'music.game.jagged_peaks';
    public const GAME_JAGGED_PEAKS = 'music.game.jagged_peaks';
    public const MUSIC_GAME_LUSH_CAVES = 'music.game.lush_caves';
    public const GAME_LUSH_CAVES = 'music.game.lush_caves';
    public const MUSIC_GAME_MEADOW = 'music.game.meadow';
    public const GAME_MEADOW = 'music.game.meadow';
    public const MUSIC_GAME_NETHER = 'music.game.nether';
    public const GAME_NETHER = 'music.game.nether';
    public const MUSIC_GAME_NETHER_WASTES = 'music.game.nether_wastes';
    public const GAME_NETHER_WASTES = 'music.game.nether_wastes';
    public const MUSIC_GAME_SNOWY_SLOPES = 'music.game.snowy_slopes';
    public const GAME_SNOWY_SLOPES = 'music.game.snowy_slopes';
    public const MUSIC_GAME_SOULSAND_VALLEY = 'music.game.soulsand_valley';
    public const GAME_SOULSAND_VALLEY = 'music.game.soulsand_valley';
    public const MUSIC_GAME_STONY_PEAKS = 'music.game.stony_peaks';
    public const GAME_STONY_PEAKS = 'music.game.stony_peaks';
    public const MUSIC_GAME_SWAMP_MUSIC = 'music.game.swamp_music';
    public const GAME_SWAMP_MUSIC = 'music.game.swamp_music';
    public const MUSIC_GAME_WARPED_FOREST = 'music.game.warped_forest';
    public const GAME_WARPED_FOREST = 'music.game.warped_forest';
    public const MUSIC_GAME_WATER = 'music.game.water';
    public const GAME_WATER = 'music.game.water';
    public const MUSIC_GAME_AND_WILD_EQUAL_CHANCE = 'music.game_and_wild_equal_chance';
    public const GAME_AND_WILD_EQUAL_CHANCE = 'music.game_and_wild_equal_chance';
    public const MUSIC_GAME_AND_WILD_FAVOR_GAME = 'music.game_and_wild_favor_game';
    public const GAME_AND_WILD_FAVOR_GAME = 'music.game_and_wild_favor_game';
    public const MUSIC_MENU = 'music.menu';
    public const MENU = 'music.menu';
    public const MUSIC_OVERWORLD_BAMBOO_JUNGLE = 'music.overworld.bamboo_jungle';
    public const OVERWORLD_BAMBOO_JUNGLE = 'music.overworld.bamboo_jungle';
    public const MUSIC_OVERWORLD_CHERRY_GROVE = 'music.overworld.cherry_grove';
    public const OVERWORLD_CHERRY_GROVE = 'music.overworld.cherry_grove';
    public const MUSIC_OVERWORLD_DEEP_DARK = 'music.overworld.deep_dark';
    public const OVERWORLD_DEEP_DARK = 'music.overworld.deep_dark';
    public const MUSIC_OVERWORLD_DESERT = 'music.overworld.desert';
    public const OVERWORLD_DESERT = 'music.overworld.desert';
    public const MUSIC_OVERWORLD_DRIPSTONE_CAVES = 'music.overworld.dripstone_caves';
    public const OVERWORLD_DRIPSTONE_CAVES = 'music.overworld.dripstone_caves';
    public const MUSIC_OVERWORLD_FLOWER_FOREST = 'music.overworld.flower_forest';
    public const OVERWORLD_FLOWER_FOREST = 'music.overworld.flower_forest';
    public const MUSIC_OVERWORLD_FOREST = 'music.overworld.forest';
    public const OVERWORLD_FOREST = 'music.overworld.forest';
    public const MUSIC_OVERWORLD_GROVE = 'music.overworld.grove';
    public const OVERWORLD_GROVE = 'music.overworld.grove';
    public const MUSIC_OVERWORLD_JAGGED_PEAKS = 'music.overworld.jagged_peaks';
    public const OVERWORLD_JAGGED_PEAKS = 'music.overworld.jagged_peaks';
    public const MUSIC_OVERWORLD_JUNGLE = 'music.overworld.jungle';
    public const OVERWORLD_JUNGLE = 'music.overworld.jungle';
    public const MUSIC_OVERWORLD_JUNGLE_EDGE = 'music.overworld.jungle_edge';
    public const OVERWORLD_JUNGLE_EDGE = 'music.overworld.jungle_edge';
    public const MUSIC_OVERWORLD_LUSH_CAVES = 'music.overworld.lush_caves';
    public const OVERWORLD_LUSH_CAVES = 'music.overworld.lush_caves';
    public const MUSIC_OVERWORLD_MESA = 'music.overworld.mesa';
    public const OVERWORLD_MESA = 'music.overworld.mesa';
    public const MUSIC_OVERWORLD_SNOWY_SLOPES = 'music.overworld.snowy_slopes';
    public const OVERWORLD_SNOWY_SLOPES = 'music.overworld.snowy_slopes';
    public const MUSIC_OVERWORLD_STONY_PEAKS = 'music.overworld.stony_peaks';
    public const OVERWORLD_STONY_PEAKS = 'music.overworld.stony_peaks';

    /** [music] music.game */
    public static function MUSIC_GAME() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.game')); }
    /** [music] music.game @see self::MUSIC_GAME() */
    public static function GAME() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.game')); }
    /** [music] music.game.basalt_deltas */
    public static function MUSIC_GAME_BASALT_DELTAS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.game.basalt_deltas')); }
    /** [music] music.game.basalt_deltas @see self::MUSIC_GAME_BASALT_DELTAS() */
    public static function GAME_BASALT_DELTAS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.game.basalt_deltas')); }
    /** [music] music.game.creative */
    public static function MUSIC_GAME_CREATIVE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.game.creative')); }
    /** [music] music.game.creative @see self::MUSIC_GAME_CREATIVE() */
    public static function GAME_CREATIVE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.game.creative')); }
    /** [music] music.game.credits */
    public static function MUSIC_GAME_CREDITS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.game.credits')); }
    /** [music] music.game.credits @see self::MUSIC_GAME_CREDITS() */
    public static function GAME_CREDITS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.game.credits')); }
    /** [music] music.game.crimson_forest */
    public static function MUSIC_GAME_CRIMSON_FOREST() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.game.crimson_forest')); }
    /** [music] music.game.crimson_forest @see self::MUSIC_GAME_CRIMSON_FOREST() */
    public static function GAME_CRIMSON_FOREST() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.game.crimson_forest')); }
    /** [music] music.game.deep_dark */
    public static function MUSIC_GAME_DEEP_DARK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.game.deep_dark')); }
    /** [music] music.game.deep_dark @see self::MUSIC_GAME_DEEP_DARK() */
    public static function GAME_DEEP_DARK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.game.deep_dark')); }
    /** [music] music.game.dripstone_caves */
    public static function MUSIC_GAME_DRIPSTONE_CAVES() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.game.dripstone_caves')); }
    /** [music] music.game.dripstone_caves @see self::MUSIC_GAME_DRIPSTONE_CAVES() */
    public static function GAME_DRIPSTONE_CAVES() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.game.dripstone_caves')); }
    /** [music] music.game.end */
    public static function MUSIC_GAME_END() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.game.end')); }
    /** [music] music.game.end @see self::MUSIC_GAME_END() */
    public static function GAME_END() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.game.end')); }
    /** [music] music.game.endboss */
    public static function MUSIC_GAME_ENDBOSS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.game.endboss')); }
    /** [music] music.game.endboss @see self::MUSIC_GAME_ENDBOSS() */
    public static function GAME_ENDBOSS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.game.endboss')); }
    /** [music] music.game.frozen_peaks */
    public static function MUSIC_GAME_FROZEN_PEAKS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.game.frozen_peaks')); }
    /** [music] music.game.frozen_peaks @see self::MUSIC_GAME_FROZEN_PEAKS() */
    public static function GAME_FROZEN_PEAKS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.game.frozen_peaks')); }
    /** [music] music.game.grove */
    public static function MUSIC_GAME_GROVE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.game.grove')); }
    /** [music] music.game.grove @see self::MUSIC_GAME_GROVE() */
    public static function GAME_GROVE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.game.grove')); }
    /** [music] music.game.jagged_peaks */
    public static function MUSIC_GAME_JAGGED_PEAKS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.game.jagged_peaks')); }
    /** [music] music.game.jagged_peaks @see self::MUSIC_GAME_JAGGED_PEAKS() */
    public static function GAME_JAGGED_PEAKS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.game.jagged_peaks')); }
    /** [music] music.game.lush_caves */
    public static function MUSIC_GAME_LUSH_CAVES() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.game.lush_caves')); }
    /** [music] music.game.lush_caves @see self::MUSIC_GAME_LUSH_CAVES() */
    public static function GAME_LUSH_CAVES() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.game.lush_caves')); }
    /** [music] music.game.meadow */
    public static function MUSIC_GAME_MEADOW() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.game.meadow')); }
    /** [music] music.game.meadow @see self::MUSIC_GAME_MEADOW() */
    public static function GAME_MEADOW() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.game.meadow')); }
    /** [music] music.game.nether */
    public static function MUSIC_GAME_NETHER() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.game.nether')); }
    /** [music] music.game.nether @see self::MUSIC_GAME_NETHER() */
    public static function GAME_NETHER() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.game.nether')); }
    /** [music] music.game.nether_wastes */
    public static function MUSIC_GAME_NETHER_WASTES() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.game.nether_wastes')); }
    /** [music] music.game.nether_wastes @see self::MUSIC_GAME_NETHER_WASTES() */
    public static function GAME_NETHER_WASTES() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.game.nether_wastes')); }
    /** [music] music.game.snowy_slopes */
    public static function MUSIC_GAME_SNOWY_SLOPES() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.game.snowy_slopes')); }
    /** [music] music.game.snowy_slopes @see self::MUSIC_GAME_SNOWY_SLOPES() */
    public static function GAME_SNOWY_SLOPES() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.game.snowy_slopes')); }
    /** [music] music.game.soulsand_valley */
    public static function MUSIC_GAME_SOULSAND_VALLEY() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.game.soulsand_valley')); }
    /** [music] music.game.soulsand_valley @see self::MUSIC_GAME_SOULSAND_VALLEY() */
    public static function GAME_SOULSAND_VALLEY() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.game.soulsand_valley')); }
    /** [music] music.game.stony_peaks */
    public static function MUSIC_GAME_STONY_PEAKS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.game.stony_peaks')); }
    /** [music] music.game.stony_peaks @see self::MUSIC_GAME_STONY_PEAKS() */
    public static function GAME_STONY_PEAKS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.game.stony_peaks')); }
    /** [music] music.game.swamp_music */
    public static function MUSIC_GAME_SWAMP_MUSIC() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.game.swamp_music')); }
    /** [music] music.game.swamp_music @see self::MUSIC_GAME_SWAMP_MUSIC() */
    public static function GAME_SWAMP_MUSIC() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.game.swamp_music')); }
    /** [music] music.game.warped_forest */
    public static function MUSIC_GAME_WARPED_FOREST() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.game.warped_forest')); }
    /** [music] music.game.warped_forest @see self::MUSIC_GAME_WARPED_FOREST() */
    public static function GAME_WARPED_FOREST() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.game.warped_forest')); }
    /** [music] music.game.water */
    public static function MUSIC_GAME_WATER() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.game.water')); }
    /** [music] music.game.water @see self::MUSIC_GAME_WATER() */
    public static function GAME_WATER() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.game.water')); }
    /** [music] music.game_and_wild_equal_chance */
    public static function MUSIC_GAME_AND_WILD_EQUAL_CHANCE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.game_and_wild_equal_chance')); }
    /** [music] music.game_and_wild_equal_chance @see self::MUSIC_GAME_AND_WILD_EQUAL_CHANCE() */
    public static function GAME_AND_WILD_EQUAL_CHANCE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.game_and_wild_equal_chance')); }
    /** [music] music.game_and_wild_favor_game */
    public static function MUSIC_GAME_AND_WILD_FAVOR_GAME() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.game_and_wild_favor_game')); }
    /** [music] music.game_and_wild_favor_game @see self::MUSIC_GAME_AND_WILD_FAVOR_GAME() */
    public static function GAME_AND_WILD_FAVOR_GAME() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.game_and_wild_favor_game')); }
    /** [music] music.menu */
    public static function MUSIC_MENU() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.menu')); }
    /** [music] music.menu @see self::MUSIC_MENU() */
    public static function MENU() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.menu')); }
    /** [music] music.overworld.bamboo_jungle */
    public static function MUSIC_OVERWORLD_BAMBOO_JUNGLE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.overworld.bamboo_jungle')); }
    /** [music] music.overworld.bamboo_jungle @see self::MUSIC_OVERWORLD_BAMBOO_JUNGLE() */
    public static function OVERWORLD_BAMBOO_JUNGLE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.overworld.bamboo_jungle')); }
    /** [music] music.overworld.cherry_grove */
    public static function MUSIC_OVERWORLD_CHERRY_GROVE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.overworld.cherry_grove')); }
    /** [music] music.overworld.cherry_grove @see self::MUSIC_OVERWORLD_CHERRY_GROVE() */
    public static function OVERWORLD_CHERRY_GROVE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.overworld.cherry_grove')); }
    /** [music] music.overworld.deep_dark */
    public static function MUSIC_OVERWORLD_DEEP_DARK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.overworld.deep_dark')); }
    /** [music] music.overworld.deep_dark @see self::MUSIC_OVERWORLD_DEEP_DARK() */
    public static function OVERWORLD_DEEP_DARK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.overworld.deep_dark')); }
    /** [music] music.overworld.desert */
    public static function MUSIC_OVERWORLD_DESERT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.overworld.desert')); }
    /** [music] music.overworld.desert @see self::MUSIC_OVERWORLD_DESERT() */
    public static function OVERWORLD_DESERT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.overworld.desert')); }
    /** [music] music.overworld.dripstone_caves */
    public static function MUSIC_OVERWORLD_DRIPSTONE_CAVES() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.overworld.dripstone_caves')); }
    /** [music] music.overworld.dripstone_caves @see self::MUSIC_OVERWORLD_DRIPSTONE_CAVES() */
    public static function OVERWORLD_DRIPSTONE_CAVES() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.overworld.dripstone_caves')); }
    /** [music] music.overworld.flower_forest */
    public static function MUSIC_OVERWORLD_FLOWER_FOREST() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.overworld.flower_forest')); }
    /** [music] music.overworld.flower_forest @see self::MUSIC_OVERWORLD_FLOWER_FOREST() */
    public static function OVERWORLD_FLOWER_FOREST() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.overworld.flower_forest')); }
    /** [music] music.overworld.forest */
    public static function MUSIC_OVERWORLD_FOREST() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.overworld.forest')); }
    /** [music] music.overworld.forest @see self::MUSIC_OVERWORLD_FOREST() */
    public static function OVERWORLD_FOREST() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.overworld.forest')); }
    /** [music] music.overworld.grove */
    public static function MUSIC_OVERWORLD_GROVE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.overworld.grove')); }
    /** [music] music.overworld.grove @see self::MUSIC_OVERWORLD_GROVE() */
    public static function OVERWORLD_GROVE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.overworld.grove')); }
    /** [music] music.overworld.jagged_peaks */
    public static function MUSIC_OVERWORLD_JAGGED_PEAKS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.overworld.jagged_peaks')); }
    /** [music] music.overworld.jagged_peaks @see self::MUSIC_OVERWORLD_JAGGED_PEAKS() */
    public static function OVERWORLD_JAGGED_PEAKS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.overworld.jagged_peaks')); }
    /** [music] music.overworld.jungle */
    public static function MUSIC_OVERWORLD_JUNGLE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.overworld.jungle')); }
    /** [music] music.overworld.jungle @see self::MUSIC_OVERWORLD_JUNGLE() */
    public static function OVERWORLD_JUNGLE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.overworld.jungle')); }
    /** [music] music.overworld.jungle_edge */
    public static function MUSIC_OVERWORLD_JUNGLE_EDGE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.overworld.jungle_edge')); }
    /** [music] music.overworld.jungle_edge @see self::MUSIC_OVERWORLD_JUNGLE_EDGE() */
    public static function OVERWORLD_JUNGLE_EDGE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.overworld.jungle_edge')); }
    /** [music] music.overworld.lush_caves */
    public static function MUSIC_OVERWORLD_LUSH_CAVES() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.overworld.lush_caves')); }
    /** [music] music.overworld.lush_caves @see self::MUSIC_OVERWORLD_LUSH_CAVES() */
    public static function OVERWORLD_LUSH_CAVES() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.overworld.lush_caves')); }
    /** [music] music.overworld.mesa */
    public static function MUSIC_OVERWORLD_MESA() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.overworld.mesa')); }
    /** [music] music.overworld.mesa @see self::MUSIC_OVERWORLD_MESA() */
    public static function OVERWORLD_MESA() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.overworld.mesa')); }
    /** [music] music.overworld.snowy_slopes */
    public static function MUSIC_OVERWORLD_SNOWY_SLOPES() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.overworld.snowy_slopes')); }
    /** [music] music.overworld.snowy_slopes @see self::MUSIC_OVERWORLD_SNOWY_SLOPES() */
    public static function OVERWORLD_SNOWY_SLOPES() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.overworld.snowy_slopes')); }
    /** [music] music.overworld.stony_peaks */
    public static function MUSIC_OVERWORLD_STONY_PEAKS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.overworld.stony_peaks')); }
    /** [music] music.overworld.stony_peaks @see self::MUSIC_OVERWORLD_STONY_PEAKS() */
    public static function OVERWORLD_STONY_PEAKS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('music.overworld.stony_peaks')); }

}


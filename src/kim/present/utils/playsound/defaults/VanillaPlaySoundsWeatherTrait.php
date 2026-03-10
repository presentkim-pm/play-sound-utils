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
 * Provides vanilla play sounds and sound name constants for category "weather".
 *
 * Last updated for 1.26.0.2.
 *
 * @internal This trait is generated automatically from {@link build/VanillaPlaySounds.generator.php}.
 * @see      VanillaPlaySounds
 */
trait VanillaPlaySoundsWeatherTrait{

    public const AMBIENT_WEATHER_LIGHTNING_IMPACT = 'ambient.weather.lightning.impact';
    public const WEATHER_LIGHTNING_IMPACT = 'ambient.weather.lightning.impact';
    public const AMBIENT_WEATHER_RAIN = 'ambient.weather.rain';
    public const WEATHER_RAIN = 'ambient.weather.rain';
    public const AMBIENT_WEATHER_THE_END_LIGHT_FLASH = 'ambient.weather.the_end_light_flash';
    public const WEATHER_THE_END_LIGHT_FLASH = 'ambient.weather.the_end_light_flash';
    public const AMBIENT_WEATHER_THUNDER = 'ambient.weather.thunder';
    public const WEATHER_THUNDER = 'ambient.weather.thunder';

    /** [weather] ambient.weather.lightning.impact */
    public static function AMBIENT_WEATHER_LIGHTNING_IMPACT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ambient.weather.lightning.impact')); }
    /** [weather] ambient.weather.lightning.impact @see self::AMBIENT_WEATHER_LIGHTNING_IMPACT() */
    public static function WEATHER_LIGHTNING_IMPACT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ambient.weather.lightning.impact')); }
    /** [weather] ambient.weather.rain */
    public static function AMBIENT_WEATHER_RAIN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ambient.weather.rain')); }
    /** [weather] ambient.weather.rain @see self::AMBIENT_WEATHER_RAIN() */
    public static function WEATHER_RAIN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ambient.weather.rain')); }
    /** [weather] ambient.weather.the_end_light_flash */
    public static function AMBIENT_WEATHER_THE_END_LIGHT_FLASH() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ambient.weather.the_end_light_flash')); }
    /** [weather] ambient.weather.the_end_light_flash @see self::AMBIENT_WEATHER_THE_END_LIGHT_FLASH() */
    public static function WEATHER_THE_END_LIGHT_FLASH() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ambient.weather.the_end_light_flash')); }
    /** [weather] ambient.weather.thunder */
    public static function AMBIENT_WEATHER_THUNDER() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ambient.weather.thunder')); }
    /** [weather] ambient.weather.thunder @see self::AMBIENT_WEATHER_THUNDER() */
    public static function WEATHER_THUNDER() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ambient.weather.thunder')); }

}


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
 * Provides vanilla play sounds and sound name constants for category "bottle".
 *
 * Last updated for 1.26.0.2.
 *
 * @internal This trait is generated automatically from {@link build/VanillaPlaySounds.generator.php}.
 * @see      VanillaPlaySounds
 */
trait VanillaPlaySoundsBottleTrait{

    public const BOTTLE_DRAGONBREATH = 'bottle.dragonbreath';
    public const DRAGONBREATH = 'bottle.dragonbreath';
    public const BOTTLE_EMPTY = 'bottle.empty';
    public const EMPTY = 'bottle.empty';
    public const BOTTLE_FILL = 'bottle.fill';
    public const FILL = 'bottle.fill';

    /** [bottle] bottle.dragonbreath */
    public static function BOTTLE_DRAGONBREATH() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('bottle.dragonbreath')); }
    /** [bottle] bottle.dragonbreath @see self::BOTTLE_DRAGONBREATH() */
    public static function DRAGONBREATH() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('bottle.dragonbreath')); }
    /** [bottle] bottle.empty */
    public static function BOTTLE_EMPTY() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('bottle.empty')); }
    /** [bottle] bottle.empty @see self::BOTTLE_EMPTY() */
    public static function EMPTY() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('bottle.empty')); }
    /** [bottle] bottle.fill */
    public static function BOTTLE_FILL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('bottle.fill')); }
    /** [bottle] bottle.fill @see self::BOTTLE_FILL() */
    public static function FILL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('bottle.fill')); }

}


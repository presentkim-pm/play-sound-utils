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
 * Provides vanilla play sounds and sound name constants for category "unknown".
 *
 * Last updated for 1.26.0.2.
 *
 * @internal This trait is generated automatically from {@link build/VanillaPlaySounds.generator.php}.
 * @see      VanillaPlaySounds
 */
trait VanillaPlaySoundsUnknownTrait{

    public const GAME_PLAYER_ATTACK_CRITICAL = 'game.player.attack.critical';
    public const PLAYER_ATTACK_CRITICAL = 'game.player.attack.critical';
    public const SIGN_DYE_USE = 'sign.dye.use';
    public const DYE_USE = 'sign.dye.use';
    public const SIGN_INK_SAC_USE = 'sign.ink_sac.use';
    public const INK_SAC_USE = 'sign.ink_sac.use';

    /** [unknown] game.player.attack.critical */
    public static function GAME_PLAYER_ATTACK_CRITICAL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('game.player.attack.critical')); }
    /** [unknown] game.player.attack.critical @see self::GAME_PLAYER_ATTACK_CRITICAL() */
    public static function PLAYER_ATTACK_CRITICAL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('game.player.attack.critical')); }
    /** [unknown] sign.dye.use */
    public static function SIGN_DYE_USE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('sign.dye.use')); }
    /** [unknown] sign.dye.use @see self::SIGN_DYE_USE() */
    public static function DYE_USE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('sign.dye.use')); }
    /** [unknown] sign.ink_sac.use */
    public static function SIGN_INK_SAC_USE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('sign.ink_sac.use')); }
    /** [unknown] sign.ink_sac.use @see self::SIGN_INK_SAC_USE() */
    public static function INK_SAC_USE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('sign.ink_sac.use')); }

}


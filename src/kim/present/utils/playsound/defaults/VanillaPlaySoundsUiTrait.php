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
 * Provides vanilla play sounds and sound name constants for category "ui".
 *
 * Last updated for 1.26.0.2.
 *
 * @internal This trait is generated automatically from {@link build/VanillaPlaySounds.generator.php}.
 * @see      VanillaPlaySounds
 */
trait VanillaPlaySoundsUiTrait{

    public const HUD_BUBBLE_POP = 'hud.bubble.pop';
    public const ITEM_BOOK_PAGE_TURN = 'item.book.page_turn';
    public const BOOK_PAGE_TURN = 'item.book.page_turn';
    public const RANDOM_CLICK = 'random.click';
    public const RANDOM_SCREENSHOT = 'random.screenshot';
    public const SCREENSHOT = 'random.screenshot';
    public const RANDOM_TOAST = 'random.toast';
    public const TOAST = 'random.toast';
    public const RANDOM_TOAST_RECIPE_UNLOCKING_IN = 'random.toast_recipe_unlocking_in';
    public const TOAST_RECIPE_UNLOCKING_IN = 'random.toast_recipe_unlocking_in';
    public const RANDOM_TOAST_RECIPE_UNLOCKING_OUT = 'random.toast_recipe_unlocking_out';
    public const TOAST_RECIPE_UNLOCKING_OUT = 'random.toast_recipe_unlocking_out';
    public const UI_DRAWER_CLOSE = 'ui.drawer_close';
    public const DRAWER_CLOSE = 'ui.drawer_close';
    public const UI_DRAWER_OPEN = 'ui.drawer_open';
    public const DRAWER_OPEN = 'ui.drawer_open';
    public const UI_HARDCORE_DISABLE = 'ui.hardcore_disable';
    public const HARDCORE_DISABLE = 'ui.hardcore_disable';
    public const UI_HARDCORE_ENABLE = 'ui.hardcore_enable';
    public const HARDCORE_ENABLE = 'ui.hardcore_enable';
    public const UI_HARDCORE_TOGGLE_PRESS = 'ui.hardcore_toggle_press';
    public const HARDCORE_TOGGLE_PRESS = 'ui.hardcore_toggle_press';
    public const UI_REJECT = 'ui.reject';
    public const REJECT = 'ui.reject';

    /** [ui] hud.bubble.pop */
    public static function HUD_BUBBLE_POP() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('hud.bubble.pop')); }
    /** [ui] item.book.page_turn */
    public static function ITEM_BOOK_PAGE_TURN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('item.book.page_turn')); }
    /** [ui] item.book.page_turn @see self::ITEM_BOOK_PAGE_TURN() */
    public static function BOOK_PAGE_TURN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('item.book.page_turn')); }
    /** [ui] random.click */
    public static function RANDOM_CLICK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('random.click')); }
    /** [ui] random.screenshot */
    public static function RANDOM_SCREENSHOT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('random.screenshot')); }
    /** [ui] random.screenshot @see self::RANDOM_SCREENSHOT() */
    public static function SCREENSHOT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('random.screenshot')); }
    /** [ui] random.toast */
    public static function RANDOM_TOAST() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('random.toast')); }
    /** [ui] random.toast @see self::RANDOM_TOAST() */
    public static function TOAST() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('random.toast')); }
    /** [ui] random.toast_recipe_unlocking_in */
    public static function RANDOM_TOAST_RECIPE_UNLOCKING_IN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('random.toast_recipe_unlocking_in')); }
    /** [ui] random.toast_recipe_unlocking_in @see self::RANDOM_TOAST_RECIPE_UNLOCKING_IN() */
    public static function TOAST_RECIPE_UNLOCKING_IN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('random.toast_recipe_unlocking_in')); }
    /** [ui] random.toast_recipe_unlocking_out */
    public static function RANDOM_TOAST_RECIPE_UNLOCKING_OUT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('random.toast_recipe_unlocking_out')); }
    /** [ui] random.toast_recipe_unlocking_out @see self::RANDOM_TOAST_RECIPE_UNLOCKING_OUT() */
    public static function TOAST_RECIPE_UNLOCKING_OUT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('random.toast_recipe_unlocking_out')); }
    /** [ui] ui.drawer_close */
    public static function UI_DRAWER_CLOSE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ui.drawer_close')); }
    /** [ui] ui.drawer_close @see self::UI_DRAWER_CLOSE() */
    public static function DRAWER_CLOSE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ui.drawer_close')); }
    /** [ui] ui.drawer_open */
    public static function UI_DRAWER_OPEN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ui.drawer_open')); }
    /** [ui] ui.drawer_open @see self::UI_DRAWER_OPEN() */
    public static function DRAWER_OPEN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ui.drawer_open')); }
    /** [ui] ui.hardcore_disable */
    public static function UI_HARDCORE_DISABLE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ui.hardcore_disable')); }
    /** [ui] ui.hardcore_disable @see self::UI_HARDCORE_DISABLE() */
    public static function HARDCORE_DISABLE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ui.hardcore_disable')); }
    /** [ui] ui.hardcore_enable */
    public static function UI_HARDCORE_ENABLE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ui.hardcore_enable')); }
    /** [ui] ui.hardcore_enable @see self::UI_HARDCORE_ENABLE() */
    public static function HARDCORE_ENABLE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ui.hardcore_enable')); }
    /** [ui] ui.hardcore_toggle_press */
    public static function UI_HARDCORE_TOGGLE_PRESS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ui.hardcore_toggle_press')); }
    /** [ui] ui.hardcore_toggle_press @see self::UI_HARDCORE_TOGGLE_PRESS() */
    public static function HARDCORE_TOGGLE_PRESS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ui.hardcore_toggle_press')); }
    /** [ui] ui.reject */
    public static function UI_REJECT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ui.reject')); }
    /** [ui] ui.reject @see self::UI_REJECT() */
    public static function REJECT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ui.reject')); }

}


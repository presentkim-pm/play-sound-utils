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

namespace kim\present\utils\playsound;

use pocketmine\utils\CloningRegistryTrait;

/**
 * Registered only frequently used sounds.
 *
 * @see https://minecraft.fandom.com/wiki/Sounds.json/Bedrock_Edition_values for a sound list of Bedrock Edition.
 *
 * @method static PlaySound LOOM_TAKE_RESULT
 * @method static PlaySound LOOM_SELECT_PATTERN
 * @method static PlaySound CARTOGRAPHY_TABLE_TAKE_RESULT
 * @method static PlaySound STONECUTTER_TAKE_RESULT
 *
 * @method static PlaySound BLOCK_CLICK
 * @method static PlaySound BLOCK_FALSE
 *
 * @method static PlaySound BOOK_PAGE_TURN
 * @method static PlaySound BOOK_PUT
 * @method static PlaySound TRIDENT_HIT_GROUND
 * @method static PlaySound TRIDENT_RETURN
 * @method static PlaySound TRIDENT_RIPTIDE_1
 * @method static PlaySound TRIDENT_RIPTIDE_2
 * @method static PlaySound TRIDENT_RIPTIDE_3
 * @method static PlaySound TRIDENT_THROW
 * @method static PlaySound TRIDENT_THUNDER
 *
 * @method static PlaySound PLAYER_ATTACK_NODAMAGE
 * @method static PlaySound PLAYER_ATTACK_STRONG
 * @method static PlaySound PLAYER_HURT
 * @method static PlaySound PLAYER_DIE
 *
 * @method static PlaySound ANVIL_BREAK
 * @method static PlaySound ANVIL_LAND
 * @method static PlaySound ANVIL_USE
 * @method static PlaySound BOW
 * @method static PlaySound BOWHIT
 * @method static PlaySound BREAK
 * @method static PlaySound BURP
 * @method static PlaySound CHEST_CLOSED
 * @method static PlaySound CHEST_OPEN
 * @method static PlaySound SHULKER_BOX_CLOSED
 * @method static PlaySound SHULKER_BOX_OPEN
 * @method static PlaySound ENDER_CHEST_OPEN
 * @method static PlaySound ENDER_CHEST_CLOSED
 * @method static PlaySound POTION_BREWED
 * @method static PlaySound CLICK
 * @method static PlaySound DOOR_CLOSE
 * @method static PlaySound DOOR_OPEN
 * @method static PlaySound DRINK
 * @method static PlaySound EAT
 * @method static PlaySound EXPLODE
 * @method static PlaySound FIZZ
 * @method static PlaySound FUSE
 * @method static PlaySound GLASS
 * @method static PlaySound LEVELUP
 * @method static PlaySound ORB
 * @method static PlaySound POP
 * @method static PlaySound POP2
 * @method static PlaySound SCREENSHOT
 * @method static PlaySound SPLASH
 * @method static PlaySound SWIM
 * @method static PlaySound HURT
 * @method static PlaySound TOTEM
 * @method static PlaySound DRINK_HONEY
 * @method static PlaySound WOOD_CLICK
 * @method static PlaySound STONE_CLICK
 * @method static PlaySound LEVER_CLICK
 * @method static PlaySound TOAST
 * @method static PlaySound TOAST_RECIPE_UNLOCKING_IN
 * @method static PlaySound TOAST_RECIPE_UNLOCKING_OUT
 *
 * @method static PlaySound BUCKET_EMPTY_LAVA
 * @method static PlaySound BUCKET_EMPTY_WATER
 * @method static PlaySound BUCKET_FILL_LAVA
 * @method static PlaySound BUCKET_FILL_WATER
 * @method static PlaySound BUCKET_FILL_FISH
 * @method static PlaySound BUCKET_EMPTY_FISH
 * @method static PlaySound BUBBLE_POP
 * @method static PlaySound BUBBLE_UP
 * @method static PlaySound BUBBLE_UPINSIDE
 * @method static PlaySound BUBBLE_DOWN
 * @method static PlaySound BUBBLE_DOWNINSIDE
 * @method static PlaySound BUCKET_FILL_POWDER_SNOW
 * @method static PlaySound BUCKET_EMPTY_POWDER_SNOW
 * @method static PlaySound PORTAL_PORTAL
 * @method static PlaySound PORTAL_TRAVEL
 * @method static PlaySound PORTAL_TRIGGER
 * @method static PlaySound PICKUP_ENCHANTED
 * @method static PlaySound INSERT_ENCHANTED
 * @method static PlaySound RESONATE_AMETHYST_BLOCK
 * @method static PlaySound CHIME_AMETHYST_BLOCK
 * @method static PlaySound LODERSTONE_COMPASS_LINK
 * @method static PlaySound SHATTER_DECORATED_POT
 * @method static PlaySound CAMERA_TAKE_PICTURE
 * @method static PlaySound SCRAPE
 */
final readonly class VanillaPlaySounds{
    use CloningRegistryTrait;

    protected static function register($key, string $soundName) : void{
        self::_registryRegister($key, new PlaySound($soundName));
    }

    protected static function setup() : void{
        /** Register UI sounds */
        self::register("loom_take_result", "ui.loom.take_result");
        self::register("loom_select_pattern", "ui.loom.select_pattern");
        self::register("cartography_table_take_result", "ui.cartography_table.take_result");
        self::register("stonecutter_take_result", "ui.stonecutter.take_result");

        /** Register block sounds */
        self::register("block_click", "block.click");
        self::register("block_false", "block.false_permissions");

        /** Register item sounds */
        self::register("book_page_turn", "item.book.page_turn");
        self::register("book_put", "item.book.put");
        self::register("trident_hit_ground", "item.trident.hit_ground");
        self::register("trident_return", "item.trident.return");
        self::register("trident_riptide_1", "item.trident.riptide_1");
        self::register("trident_riptide_2", "item.trident.riptide_2");
        self::register("trident_riptide_3", "item.trident.riptide_3");
        self::register("trident_throw", "item.trident.throw");
        self::register("trident_thunder", "item.trident.thunder");

        /** Register player sounds */
        self::register("player_attack_nodamage", "game.player.attack.nodamage");
        self::register("player_attack_strong", "game.player.attack.strong");
        self::register("player_hurt", "game.player.hurt");
        self::register("player_die", "game.player.die");

        /** Register random categories */
        self::register("anvil_break", "random.anvil_break");
        self::register("anvil_land", "random.anvil_land");
        self::register("anvil_use", "random.anvil_use");
        self::register("bow", "random.bow");
        self::register("bowhit", "random.bowhit");
        self::register("break", "random.break");
        self::register("burp", "random.burp");
        self::register("chest_closed", "random.chestclosed");
        self::register("chest_open", "random.chestopen");
        self::register("shulker_box_closed", "random.shulkerboxclosed");
        self::register("shulker_box_open", "random.shulkerboxopen");
        self::register("ender_chest_open", "random.enderchestopen");
        self::register("ender_chest_closed", "random.enderchestclosed");
        self::register("potion_brewed", "random.potion.brewed");
        self::register("click", "random.click");
        self::register("door_close", "random.door_close");
        self::register("door_open", "random.door_open");
        self::register("drink", "random.drink");
        self::register("eat", "random.eat");
        self::register("explode", "random.explode");
        self::register("fizz", "random.fizz");
        self::register("fuse", "random.fuse");
        self::register("glass", "random.glass");
        self::register("levelup", "random.levelup");
        self::register("orb", "random.orb");
        self::register("pop", "random.pop");
        self::register("pop2", "random.pop2");
        self::register("screenshot", "random.screenshot");
        self::register("splash", "random.splash");
        self::register("swim", "random.swim");
        self::register("hurt", "random.hurt");
        self::register("totem", "random.totem");
        self::register("drink_honey", "random.drink_honey");
        self::register("wood_click", "random.wood_click");
        self::register("stone_click", "random.stone_click");
        self::register("lever_click", "random.lever_click");
        self::register("toast", "random.toast");
        self::register("toast_recipe_unlocking_in", "random.toast_recipe_unlocking_in");
        self::register("toast_recipe_unlocking_out", "random.toast_recipe_unlocking_out");

        /** Register ETC sounds */
        self::register("bucket_empty_lava", "bucket.empty_lava");
        self::register("bucket_empty_water", "bucket.empty_water");
        self::register("bucket_fill_lava", "bucket.fill_lava");
        self::register("bucket_fill_water", "bucket.fill_water");
        self::register("bucket_fill_fish", "bucket.fill_fish");
        self::register("bucket_empty_fish", "bucket.empty_fish");
        self::register("bubble_pop", "bubble.pop");
        self::register("bubble_up", "bubble.up");
        self::register("bubble_upinside", "bubble.upinside");
        self::register("bubble_down", "bubble.down");
        self::register("bubble_downinside", "bubble.downinside");
        self::register("bucket_fill_powder_snow", "bucket.fill_powder_snow");
        self::register("bucket_empty_powder_snow", "bucket.empty_powder_snow");
        self::register("portal_portal", "portal.portal");
        self::register("portal_travel", "portal.travel");
        self::register("portal_trigger", "portal.trigger");
        self::register("pickup_enchanted", "pickup_enchanted.chiseled_bookshelf");
        self::register("insert_enchanted", "insert_enchanted.chiseled_bookshelf");
        self::register("chime_amethyst_block", "chime.amethyst_block");
        self::register("resonate_amethyst_block", "resonate.amethyst_block");
        self::register("shatter_decorated_pot", "shatter.decorated_pot");
        self::register("lodestone_compass_link", "lodestone_compass.link_compass_to_lodestone");
        self::register("camera_take_picture", "camera.take_picture");
        self::register("scrape", "scrape");
    }

}

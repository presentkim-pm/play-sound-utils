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
 * Provides vanilla play sounds and sound name constants for category "block".
 *
 * Last updated for 1.26.0.2.
 *
 * @internal This trait is generated automatically from {@link build/VanillaPlaySounds.generator.php}.
 * @see      VanillaPlaySounds
 */
trait VanillaPlaySoundsBlockTrait{

    public const AMBIENT_CANDLE = 'ambient.candle';
    public const CANDLE = 'ambient.candle';
    public const BEACON_ACTIVATE = 'beacon.activate';
    public const ACTIVATE = 'beacon.activate';
    public const BEACON_AMBIENT = 'beacon.ambient';
    public const AMBIENT = 'beacon.ambient';
    public const BEACON_DEACTIVATE = 'beacon.deactivate';
    public const DEACTIVATE = 'beacon.deactivate';
    public const BEACON_POWER = 'beacon.power';
    public const POWER = 'beacon.power';
    public const BLOCK_BAMBOO_BREAK = 'block.bamboo.break';
    public const BAMBOO_BREAK = 'block.bamboo.break';
    public const BLOCK_BAMBOO_FALL = 'block.bamboo.fall';
    public const BAMBOO_FALL = 'block.bamboo.fall';
    public const BLOCK_BAMBOO_HIT = 'block.bamboo.hit';
    public const BAMBOO_HIT = 'block.bamboo.hit';
    public const BLOCK_BAMBOO_PLACE = 'block.bamboo.place';
    public const BAMBOO_PLACE = 'block.bamboo.place';
    public const BLOCK_BAMBOO_STEP = 'block.bamboo.step';
    public const BAMBOO_STEP = 'block.bamboo.step';
    public const BLOCK_BAMBOO_SAPLING_BREAK = 'block.bamboo_sapling.break';
    public const BAMBOO_SAPLING_BREAK = 'block.bamboo_sapling.break';
    public const BLOCK_BAMBOO_SAPLING_PLACE = 'block.bamboo_sapling.place';
    public const BAMBOO_SAPLING_PLACE = 'block.bamboo_sapling.place';
    public const BLOCK_BARREL_CLOSE = 'block.barrel.close';
    public const BARREL_CLOSE = 'block.barrel.close';
    public const BLOCK_BARREL_OPEN = 'block.barrel.open';
    public const BARREL_OPEN = 'block.barrel.open';
    public const BLOCK_BEEHIVE_DRIP = 'block.beehive.drip';
    public const BEEHIVE_DRIP = 'block.beehive.drip';
    public const BLOCK_BEEHIVE_ENTER = 'block.beehive.enter';
    public const BEEHIVE_ENTER = 'block.beehive.enter';
    public const BLOCK_BEEHIVE_EXIT = 'block.beehive.exit';
    public const BEEHIVE_EXIT = 'block.beehive.exit';
    public const BLOCK_BEEHIVE_SHEAR = 'block.beehive.shear';
    public const BEEHIVE_SHEAR = 'block.beehive.shear';
    public const BLOCK_BEEHIVE_WORK = 'block.beehive.work';
    public const BEEHIVE_WORK = 'block.beehive.work';
    public const BLOCK_BELL_HIT = 'block.bell.hit';
    public const BELL_HIT = 'block.bell.hit';
    public const BLOCK_BLASTFURNACE_FIRE_CRACKLE = 'block.blastfurnace.fire_crackle';
    public const BLASTFURNACE_FIRE_CRACKLE = 'block.blastfurnace.fire_crackle';
    public const BLOCK_BOWHIT = 'block.bowhit';
    public const BOWHIT = 'block.bowhit';
    public const BLOCK_CACTUS_FLOWER_BREAK = 'block.cactus_flower.break';
    public const CACTUS_FLOWER_BREAK = 'block.cactus_flower.break';
    public const BLOCK_CACTUS_FLOWER_PLACE = 'block.cactus_flower.place';
    public const CACTUS_FLOWER_PLACE = 'block.cactus_flower.place';
    public const BLOCK_CAMPFIRE_CRACKLE = 'block.campfire.crackle';
    public const CAMPFIRE_CRACKLE = 'block.campfire.crackle';
    public const BLOCK_CARTOGRAPHY_TABLE_USE = 'block.cartography_table.use';
    public const CARTOGRAPHY_TABLE_USE = 'block.cartography_table.use';
    public const BLOCK_CAVE_VINES_PLACE = 'block.cave_vines.place';
    public const CAVE_VINES_PLACE = 'block.cave_vines.place';
    public const BLOCK_CHORUSFLOWER_DEATH = 'block.chorusflower.death';
    public const CHORUSFLOWER_DEATH = 'block.chorusflower.death';
    public const BLOCK_CHORUSFLOWER_GROW = 'block.chorusflower.grow';
    public const CHORUSFLOWER_GROW = 'block.chorusflower.grow';
    public const BLOCK_CLICK = 'block.click';
    public const CLICK = 'block.click';
    public const BLOCK_COMPOSTER_EMPTY = 'block.composter.empty';
    public const COMPOSTER_EMPTY = 'block.composter.empty';
    public const BLOCK_COMPOSTER_FILL = 'block.composter.fill';
    public const COMPOSTER_FILL = 'block.composter.fill';
    public const BLOCK_COMPOSTER_FILL_SUCCESS = 'block.composter.fill_success';
    public const COMPOSTER_FILL_SUCCESS = 'block.composter.fill_success';
    public const BLOCK_COMPOSTER_READY = 'block.composter.ready';
    public const COMPOSTER_READY = 'block.composter.ready';
    public const BLOCK_COPPER_BULB_TURN_OFF = 'block.copper_bulb.turn_off';
    public const COPPER_BULB_TURN_OFF = 'block.copper_bulb.turn_off';
    public const BLOCK_COPPER_BULB_TURN_ON = 'block.copper_bulb.turn_on';
    public const COPPER_BULB_TURN_ON = 'block.copper_bulb.turn_on';
    public const BLOCK_COPPER_CHEST_CLOSED = 'block.copper_chest.closed';
    public const COPPER_CHEST_CLOSED = 'block.copper_chest.closed';
    public const BLOCK_COPPER_CHEST_OPEN = 'block.copper_chest.open';
    public const COPPER_CHEST_OPEN = 'block.copper_chest.open';
    public const BLOCK_COPPER_CHEST_OXIDIZED_CLOSED = 'block.copper_chest.oxidized.closed';
    public const COPPER_CHEST_OXIDIZED_CLOSED = 'block.copper_chest.oxidized.closed';
    public const BLOCK_COPPER_CHEST_OXIDIZED_OPEN = 'block.copper_chest.oxidized.open';
    public const COPPER_CHEST_OXIDIZED_OPEN = 'block.copper_chest.oxidized.open';
    public const BLOCK_COPPER_CHEST_WEATHERED_CLOSED = 'block.copper_chest.weathered.closed';
    public const COPPER_CHEST_WEATHERED_CLOSED = 'block.copper_chest.weathered.closed';
    public const BLOCK_COPPER_CHEST_WEATHERED_OPEN = 'block.copper_chest.weathered.open';
    public const COPPER_CHEST_WEATHERED_OPEN = 'block.copper_chest.weathered.open';
    public const BLOCK_COPPER_GOLEM_STATUE_BREAK = 'block.copper_golem_statue.break';
    public const COPPER_GOLEM_STATUE_BREAK = 'block.copper_golem_statue.break';
    public const BLOCK_COPPER_GOLEM_STATUE_HIT = 'block.copper_golem_statue.hit';
    public const COPPER_GOLEM_STATUE_HIT = 'block.copper_golem_statue.hit';
    public const BLOCK_COPPER_GOLEM_STATUE_PLACE = 'block.copper_golem_statue.place';
    public const COPPER_GOLEM_STATUE_PLACE = 'block.copper_golem_statue.place';
    public const BLOCK_CREAKING_HEART_AMBIENT = 'block.creaking_heart.ambient';
    public const CREAKING_HEART_AMBIENT = 'block.creaking_heart.ambient';
    public const BLOCK_CREAKING_HEART_BREAK = 'block.creaking_heart.break';
    public const CREAKING_HEART_BREAK = 'block.creaking_heart.break';
    public const BLOCK_CREAKING_HEART_HIT = 'block.creaking_heart.hit';
    public const CREAKING_HEART_HIT = 'block.creaking_heart.hit';
    public const BLOCK_CREAKING_HEART_PLACE = 'block.creaking_heart.place';
    public const CREAKING_HEART_PLACE = 'block.creaking_heart.place';
    public const BLOCK_CREAKING_HEART_SPAWN_MOB = 'block.creaking_heart.spawn_mob';
    public const CREAKING_HEART_SPAWN_MOB = 'block.creaking_heart.spawn_mob';
    public const BLOCK_CREAKING_HEART_TRAIL = 'block.creaking_heart.trail';
    public const CREAKING_HEART_TRAIL = 'block.creaking_heart.trail';
    public const BLOCK_DEADBUSH_AMBIENT = 'block.deadbush.ambient';
    public const DEADBUSH_AMBIENT = 'block.deadbush.ambient';
    public const BLOCK_DECORATED_POT_INSERT = 'block.decorated_pot.insert';
    public const DECORATED_POT_INSERT = 'block.decorated_pot.insert';
    public const BLOCK_DECORATED_POT_INSERT_FAIL = 'block.decorated_pot.insert_fail';
    public const DECORATED_POT_INSERT_FAIL = 'block.decorated_pot.insert_fail';
    public const BLOCK_DRIED_GHAST_AMBIENT = 'block.dried_ghast.ambient';
    public const DRIED_GHAST_AMBIENT = 'block.dried_ghast.ambient';
    public const BLOCK_DRIED_GHAST_AMBIENT_WATER = 'block.dried_ghast.ambient_water';
    public const DRIED_GHAST_AMBIENT_WATER = 'block.dried_ghast.ambient_water';
    public const BLOCK_DRIED_GHAST_BREAK = 'block.dried_ghast.break';
    public const DRIED_GHAST_BREAK = 'block.dried_ghast.break';
    public const BLOCK_DRIED_GHAST_PLACE = 'block.dried_ghast.place';
    public const DRIED_GHAST_PLACE = 'block.dried_ghast.place';
    public const BLOCK_DRIED_GHAST_PLACE_IN_WATER = 'block.dried_ghast.place_in_water';
    public const DRIED_GHAST_PLACE_IN_WATER = 'block.dried_ghast.place_in_water';
    public const BLOCK_DRIED_GHAST_STATE_CHANGE = 'block.dried_ghast.state_change';
    public const DRIED_GHAST_STATE_CHANGE = 'block.dried_ghast.state_change';
    public const BLOCK_DRY_GRASS_AMBIENT_ATTACHED = 'block.dry_grass.ambient.attached';
    public const DRY_GRASS_AMBIENT_ATTACHED = 'block.dry_grass.ambient.attached';
    public const BLOCK_ENCHANTING_TABLE_USE = 'block.enchanting_table.use';
    public const ENCHANTING_TABLE_USE = 'block.enchanting_table.use';
    public const BLOCK_END_PORTAL_SPAWN = 'block.end_portal.spawn';
    public const END_PORTAL_SPAWN = 'block.end_portal.spawn';
    public const BLOCK_END_PORTAL_FRAME_FILL = 'block.end_portal_frame.fill';
    public const END_PORTAL_FRAME_FILL = 'block.end_portal_frame.fill';
    public const BLOCK_EYEBLOSSOM_AMBIENT = 'block.eyeblossom.ambient';
    public const EYEBLOSSOM_AMBIENT = 'block.eyeblossom.ambient';
    public const BLOCK_EYEBLOSSOM_CLOSE = 'block.eyeblossom.close';
    public const EYEBLOSSOM_CLOSE = 'block.eyeblossom.close';
    public const BLOCK_EYEBLOSSOM_CLOSE_LONG = 'block.eyeblossom.close_long';
    public const EYEBLOSSOM_CLOSE_LONG = 'block.eyeblossom.close_long';
    public const BLOCK_EYEBLOSSOM_OPEN = 'block.eyeblossom.open';
    public const EYEBLOSSOM_OPEN = 'block.eyeblossom.open';
    public const BLOCK_EYEBLOSSOM_OPEN_LONG = 'block.eyeblossom.open_long';
    public const EYEBLOSSOM_OPEN_LONG = 'block.eyeblossom.open_long';
    public const BLOCK_FALSE_PERMISSIONS = 'block.false_permissions';
    public const FALSE_PERMISSIONS = 'block.false_permissions';
    public const BLOCK_FIREFLY_BUSH_AMBIENT = 'block.firefly_bush.ambient';
    public const FIREFLY_BUSH_AMBIENT = 'block.firefly_bush.ambient';
    public const BLOCK_FURNACE_LIT = 'block.furnace.lit';
    public const FURNACE_LIT = 'block.furnace.lit';
    public const BLOCK_GRINDSTONE_USE = 'block.grindstone.use';
    public const GRINDSTONE_USE = 'block.grindstone.use';
    public const BLOCK_ITEMFRAME_ADD_ITEM = 'block.itemframe.add_item';
    public const ITEMFRAME_ADD_ITEM = 'block.itemframe.add_item';
    public const BLOCK_ITEMFRAME_BREAK = 'block.itemframe.break';
    public const ITEMFRAME_BREAK = 'block.itemframe.break';
    public const BLOCK_ITEMFRAME_PLACE = 'block.itemframe.place';
    public const ITEMFRAME_PLACE = 'block.itemframe.place';
    public const BLOCK_ITEMFRAME_REMOVE_ITEM = 'block.itemframe.remove_item';
    public const ITEMFRAME_REMOVE_ITEM = 'block.itemframe.remove_item';
    public const BLOCK_ITEMFRAME_ROTATE_ITEM = 'block.itemframe.rotate_item';
    public const ITEMFRAME_ROTATE_ITEM = 'block.itemframe.rotate_item';
    public const BLOCK_LANTERN_BREAK = 'block.lantern.break';
    public const LANTERN_BREAK = 'block.lantern.break';
    public const BLOCK_LANTERN_FALL = 'block.lantern.fall';
    public const LANTERN_FALL = 'block.lantern.fall';
    public const BLOCK_LANTERN_HIT = 'block.lantern.hit';
    public const LANTERN_HIT = 'block.lantern.hit';
    public const BLOCK_LANTERN_PLACE = 'block.lantern.place';
    public const LANTERN_PLACE = 'block.lantern.place';
    public const BLOCK_LANTERN_STEP = 'block.lantern.step';
    public const LANTERN_STEP = 'block.lantern.step';
    public const BLOCK_LEAF_LITTER_BREAK = 'block.leaf_litter.break';
    public const LEAF_LITTER_BREAK = 'block.leaf_litter.break';
    public const BLOCK_LEAF_LITTER_PLACE = 'block.leaf_litter.place';
    public const LEAF_LITTER_PLACE = 'block.leaf_litter.place';
    public const BLOCK_LOOM_USE = 'block.loom.use';
    public const LOOM_USE = 'block.loom.use';
    public const BLOCK_MANGROVE_ROOTS_BREAK = 'block.mangrove_roots.break';
    public const MANGROVE_ROOTS_BREAK = 'block.mangrove_roots.break';
    public const BLOCK_MANGROVE_ROOTS_FALL = 'block.mangrove_roots.fall';
    public const MANGROVE_ROOTS_FALL = 'block.mangrove_roots.fall';
    public const BLOCK_MANGROVE_ROOTS_HIT = 'block.mangrove_roots.hit';
    public const MANGROVE_ROOTS_HIT = 'block.mangrove_roots.hit';
    public const BLOCK_MANGROVE_ROOTS_PLACE = 'block.mangrove_roots.place';
    public const MANGROVE_ROOTS_PLACE = 'block.mangrove_roots.place';
    public const BLOCK_MANGROVE_ROOTS_STEP = 'block.mangrove_roots.step';
    public const MANGROVE_ROOTS_STEP = 'block.mangrove_roots.step';
    public const BLOCK_MOB_SPAWNER_BREAK = 'block.mob_spawner.break';
    public const MOB_SPAWNER_BREAK = 'block.mob_spawner.break';
    public const BLOCK_MOB_SPAWNER_STEP = 'block.mob_spawner.step';
    public const MOB_SPAWNER_STEP = 'block.mob_spawner.step';
    public const BLOCK_MUD_BREAK = 'block.mud.break';
    public const MUD_BREAK = 'block.mud.break';
    public const BLOCK_MUD_FALL = 'block.mud.fall';
    public const MUD_FALL = 'block.mud.fall';
    public const BLOCK_MUD_HIT = 'block.mud.hit';
    public const MUD_HIT = 'block.mud.hit';
    public const BLOCK_MUD_PLACE = 'block.mud.place';
    public const MUD_PLACE = 'block.mud.place';
    public const BLOCK_MUD_STEP = 'block.mud.step';
    public const MUD_STEP = 'block.mud.step';
    public const BLOCK_MUD_BRICKS_BREAK = 'block.mud_bricks.break';
    public const MUD_BRICKS_BREAK = 'block.mud_bricks.break';
    public const BLOCK_MUD_BRICKS_FALL = 'block.mud_bricks.fall';
    public const MUD_BRICKS_FALL = 'block.mud_bricks.fall';
    public const BLOCK_MUD_BRICKS_HIT = 'block.mud_bricks.hit';
    public const MUD_BRICKS_HIT = 'block.mud_bricks.hit';
    public const BLOCK_MUD_BRICKS_PLACE = 'block.mud_bricks.place';
    public const MUD_BRICKS_PLACE = 'block.mud_bricks.place';
    public const BLOCK_MUD_BRICKS_STEP = 'block.mud_bricks.step';
    public const MUD_BRICKS_STEP = 'block.mud_bricks.step';
    public const BLOCK_MUDDY_MANGROVE_ROOTS_BREAK = 'block.muddy_mangrove_roots.break';
    public const MUDDY_MANGROVE_ROOTS_BREAK = 'block.muddy_mangrove_roots.break';
    public const BLOCK_MUDDY_MANGROVE_ROOTS_FALL = 'block.muddy_mangrove_roots.fall';
    public const MUDDY_MANGROVE_ROOTS_FALL = 'block.muddy_mangrove_roots.fall';
    public const BLOCK_MUDDY_MANGROVE_ROOTS_HIT = 'block.muddy_mangrove_roots.hit';
    public const MUDDY_MANGROVE_ROOTS_HIT = 'block.muddy_mangrove_roots.hit';
    public const BLOCK_MUDDY_MANGROVE_ROOTS_PLACE = 'block.muddy_mangrove_roots.place';
    public const MUDDY_MANGROVE_ROOTS_PLACE = 'block.muddy_mangrove_roots.place';
    public const BLOCK_MUDDY_MANGROVE_ROOTS_STEP = 'block.muddy_mangrove_roots.step';
    public const MUDDY_MANGROVE_ROOTS_STEP = 'block.muddy_mangrove_roots.step';
    public const BLOCK_PACKED_MUD_BREAK = 'block.packed_mud.break';
    public const PACKED_MUD_BREAK = 'block.packed_mud.break';
    public const BLOCK_PACKED_MUD_FALL = 'block.packed_mud.fall';
    public const PACKED_MUD_FALL = 'block.packed_mud.fall';
    public const BLOCK_PACKED_MUD_HIT = 'block.packed_mud.hit';
    public const PACKED_MUD_HIT = 'block.packed_mud.hit';
    public const BLOCK_PACKED_MUD_PLACE = 'block.packed_mud.place';
    public const PACKED_MUD_PLACE = 'block.packed_mud.place';
    public const BLOCK_PACKED_MUD_STEP = 'block.packed_mud.step';
    public const PACKED_MUD_STEP = 'block.packed_mud.step';
    public const BLOCK_PALE_HANGING_MOSS_AMBIENT = 'block.pale_hanging_moss.ambient';
    public const PALE_HANGING_MOSS_AMBIENT = 'block.pale_hanging_moss.ambient';
    public const BLOCK_RESIN_BREAK = 'block.resin.break';
    public const RESIN_BREAK = 'block.resin.break';
    public const BLOCK_RESIN_HIT = 'block.resin.hit';
    public const RESIN_HIT = 'block.resin.hit';
    public const BLOCK_RESIN_PLACE = 'block.resin.place';
    public const RESIN_PLACE = 'block.resin.place';
    public const BLOCK_RESIN_BRICK_BREAK = 'block.resin_brick.break';
    public const RESIN_BRICK_BREAK = 'block.resin_brick.break';
    public const BLOCK_RESIN_BRICK_HIT = 'block.resin_brick.hit';
    public const RESIN_BRICK_HIT = 'block.resin_brick.hit';
    public const BLOCK_RESIN_BRICK_PLACE = 'block.resin_brick.place';
    public const RESIN_BRICK_PLACE = 'block.resin_brick.place';
    public const BLOCK_SAND_AMBIENT = 'block.sand.ambient';
    public const SAND_AMBIENT = 'block.sand.ambient';
    public const BLOCK_SCAFFOLDING_BREAK = 'block.scaffolding.break';
    public const SCAFFOLDING_BREAK = 'block.scaffolding.break';
    public const BLOCK_SCAFFOLDING_CLIMB = 'block.scaffolding.climb';
    public const SCAFFOLDING_CLIMB = 'block.scaffolding.climb';
    public const BLOCK_SCAFFOLDING_FALL = 'block.scaffolding.fall';
    public const SCAFFOLDING_FALL = 'block.scaffolding.fall';
    public const BLOCK_SCAFFOLDING_HIT = 'block.scaffolding.hit';
    public const SCAFFOLDING_HIT = 'block.scaffolding.hit';
    public const BLOCK_SCAFFOLDING_PLACE = 'block.scaffolding.place';
    public const SCAFFOLDING_PLACE = 'block.scaffolding.place';
    public const BLOCK_SCAFFOLDING_STEP = 'block.scaffolding.step';
    public const SCAFFOLDING_STEP = 'block.scaffolding.step';
    public const BLOCK_SHELF_ACTIVATE = 'block.shelf.activate';
    public const SHELF_ACTIVATE = 'block.shelf.activate';
    public const BLOCK_SHELF_BREAK = 'block.shelf.break';
    public const SHELF_BREAK = 'block.shelf.break';
    public const BLOCK_SHELF_DEACTIVATE = 'block.shelf.deactivate';
    public const SHELF_DEACTIVATE = 'block.shelf.deactivate';
    public const BLOCK_SHELF_MULTI_SWAP = 'block.shelf.multi_swap';
    public const SHELF_MULTI_SWAP = 'block.shelf.multi_swap';
    public const BLOCK_SHELF_OPEN = 'block.shelf.open';
    public const SHELF_OPEN = 'block.shelf.open';
    public const BLOCK_SHELF_PLACE_ITEM = 'block.shelf.place_item';
    public const SHELF_PLACE_ITEM = 'block.shelf.place_item';
    public const BLOCK_SHELF_SINGLE_SWAP = 'block.shelf.single_swap';
    public const SHELF_SINGLE_SWAP = 'block.shelf.single_swap';
    public const BLOCK_SIGN_WAXED_INTERACT_FAIL = 'block.sign.waxed_interact_fail';
    public const SIGN_WAXED_INTERACT_FAIL = 'block.sign.waxed_interact_fail';
    public const BLOCK_SMOKER_SMOKE = 'block.smoker.smoke';
    public const SMOKER_SMOKE = 'block.smoker.smoke';
    public const BLOCK_SNIFFER_EGG_CRACK = 'block.sniffer_egg.crack';
    public const SNIFFER_EGG_CRACK = 'block.sniffer_egg.crack';
    public const BLOCK_SNIFFER_EGG_HATCH = 'block.sniffer_egg.hatch';
    public const SNIFFER_EGG_HATCH = 'block.sniffer_egg.hatch';
    public const BLOCK_STONECUTTER_USE = 'block.stonecutter.use';
    public const STONECUTTER_USE = 'block.stonecutter.use';
    public const BLOCK_SWEET_BERRY_BUSH_BREAK = 'block.sweet_berry_bush.break';
    public const SWEET_BERRY_BUSH_BREAK = 'block.sweet_berry_bush.break';
    public const BLOCK_SWEET_BERRY_BUSH_HURT = 'block.sweet_berry_bush.hurt';
    public const SWEET_BERRY_BUSH_HURT = 'block.sweet_berry_bush.hurt';
    public const BLOCK_SWEET_BERRY_BUSH_PICK = 'block.sweet_berry_bush.pick';
    public const SWEET_BERRY_BUSH_PICK = 'block.sweet_berry_bush.pick';
    public const BLOCK_SWEET_BERRY_BUSH_PLACE = 'block.sweet_berry_bush.place';
    public const SWEET_BERRY_BUSH_PLACE = 'block.sweet_berry_bush.place';
    public const BLOCK_TURTLE_EGG_BREAK = 'block.turtle_egg.break';
    public const TURTLE_EGG_BREAK = 'block.turtle_egg.break';
    public const BLOCK_TURTLE_EGG_CRACK = 'block.turtle_egg.crack';
    public const TURTLE_EGG_CRACK = 'block.turtle_egg.crack';
    public const BLOCK_TURTLE_EGG_DROP = 'block.turtle_egg.drop';
    public const TURTLE_EGG_DROP = 'block.turtle_egg.drop';
    public const BLOCK_WEEPING_VINES_BREAK = 'block.weeping_vines.break';
    public const WEEPING_VINES_BREAK = 'block.weeping_vines.break';
    public const BLOCK_WEEPING_VINES_HIT = 'block.weeping_vines.hit';
    public const WEEPING_VINES_HIT = 'block.weeping_vines.hit';
    public const BLOCK_WEEPING_VINES_PLACE = 'block.weeping_vines.place';
    public const WEEPING_VINES_PLACE = 'block.weeping_vines.place';
    public const BLOCK_WEEPING_VINES_USE = 'block.weeping_vines.use';
    public const WEEPING_VINES_USE = 'block.weeping_vines.use';
    public const BLOOM_SCULK_CATALYST = 'bloom.sculk_catalyst';
    public const SCULK_CATALYST = 'bloom.sculk_catalyst';
    public const BREAK_AMETHYST_BLOCK = 'break.amethyst_block';
    public const AMETHYST_BLOCK = 'break.amethyst_block';
    public const BREAK_AMETHYST_CLUSTER = 'break.amethyst_cluster';
    public const AMETHYST_CLUSTER = 'break.amethyst_cluster';
    public const BREAK_AZALEA = 'break.azalea';
    public const AZALEA = 'break.azalea';
    public const BREAK_BAMBOO_WOOD = 'break.bamboo_wood';
    public const BAMBOO_WOOD = 'break.bamboo_wood';
    public const BREAK_BAMBOO_WOOD_HANGING_SIGN = 'break.bamboo_wood_hanging_sign';
    public const BAMBOO_WOOD_HANGING_SIGN = 'break.bamboo_wood_hanging_sign';
    public const BREAK_BIG_DRIPLEAF = 'break.big_dripleaf';
    public const BIG_DRIPLEAF = 'break.big_dripleaf';
    public const BREAK_CALCITE = 'break.calcite';
    public const CALCITE = 'break.calcite';
    public const BREAK_CHERRY_LEAVES = 'break.cherry_leaves';
    public const CHERRY_LEAVES = 'break.cherry_leaves';
    public const BREAK_CHERRY_WOOD = 'break.cherry_wood';
    public const CHERRY_WOOD = 'break.cherry_wood';
    public const BREAK_CHERRY_WOOD_HANGING_SIGN = 'break.cherry_wood_hanging_sign';
    public const CHERRY_WOOD_HANGING_SIGN = 'break.cherry_wood_hanging_sign';
    public const BREAK_CHISELED_BOOKSHELF = 'break.chiseled_bookshelf';
    public const CHISELED_BOOKSHELF = 'break.chiseled_bookshelf';
    public const BREAK_COPPER_BULB = 'break.copper_bulb';
    public const COPPER_BULB = 'break.copper_bulb';
    public const BREAK_COPPER_GRATE = 'break.copper_grate';
    public const COPPER_GRATE = 'break.copper_grate';
    public const BREAK_DECORATED_POT = 'break.decorated_pot';
    public const DECORATED_POT = 'break.decorated_pot';
    public const BREAK_DIRT_WITH_ROOTS = 'break.dirt_with_roots';
    public const DIRT_WITH_ROOTS = 'break.dirt_with_roots';
    public const BREAK_DRIPSTONE_BLOCK = 'break.dripstone_block';
    public const DRIPSTONE_BLOCK = 'break.dripstone_block';
    public const BREAK_FROG_SPAWN = 'break.frog_spawn';
    public const FROG_SPAWN = 'break.frog_spawn';
    public const BREAK_FROGLIGHT = 'break.froglight';
    public const FROGLIGHT = 'break.froglight';
    public const BREAK_HANGING_ROOTS = 'break.hanging_roots';
    public const HANGING_ROOTS = 'break.hanging_roots';
    public const BREAK_HANGING_SIGN = 'break.hanging_sign';
    public const HANGING_SIGN = 'break.hanging_sign';
    public const BREAK_HEAVY_CORE = 'break.heavy_core';
    public const HEAVY_CORE = 'break.heavy_core';
    public const BREAK_IRON = 'break.iron';
    public const IRON = 'break.iron';
    public const BREAK_LARGE_AMETHYST_BUD = 'break.large_amethyst_bud';
    public const LARGE_AMETHYST_BUD = 'break.large_amethyst_bud';
    public const BREAK_MEDIUM_AMETHYST_BUD = 'break.medium_amethyst_bud';
    public const MEDIUM_AMETHYST_BUD = 'break.medium_amethyst_bud';
    public const BREAK_NETHER_WOOD = 'break.nether_wood';
    public const NETHER_WOOD = 'break.nether_wood';
    public const BREAK_NETHER_WOOD_HANGING_SIGN = 'break.nether_wood_hanging_sign';
    public const NETHER_WOOD_HANGING_SIGN = 'break.nether_wood_hanging_sign';
    public const BREAK_PINK_PETALS = 'break.pink_petals';
    public const PINK_PETALS = 'break.pink_petals';
    public const BREAK_POINTED_DRIPSTONE = 'break.pointed_dripstone';
    public const POINTED_DRIPSTONE = 'break.pointed_dripstone';
    public const BREAK_SCULK = 'break.sculk';
    public const SCULK = 'break.sculk';
    public const BREAK_SCULK_CATALYST = 'break.sculk_catalyst';
    public const BREAK_SCULK_SENSOR = 'break.sculk_sensor';
    public const SCULK_SENSOR = 'break.sculk_sensor';
    public const BREAK_SCULK_SHRIEKER = 'break.sculk_shrieker';
    public const SCULK_SHRIEKER = 'break.sculk_shrieker';
    public const BREAK_SCULK_VEIN = 'break.sculk_vein';
    public const SCULK_VEIN = 'break.sculk_vein';
    public const BREAK_SMALL_AMETHYST_BUD = 'break.small_amethyst_bud';
    public const SMALL_AMETHYST_BUD = 'break.small_amethyst_bud';
    public const BREAK_SPONGE = 'break.sponge';
    public const SPONGE = 'break.sponge';
    public const BREAK_SPORE_BLOSSOM = 'break.spore_blossom';
    public const SPORE_BLOSSOM = 'break.spore_blossom';
    public const BREAK_SUSPICIOUS_GRAVEL = 'break.suspicious_gravel';
    public const SUSPICIOUS_GRAVEL = 'break.suspicious_gravel';
    public const BREAK_SUSPICIOUS_SAND = 'break.suspicious_sand';
    public const SUSPICIOUS_SAND = 'break.suspicious_sand';
    public const BREAK_TUFF = 'break.tuff';
    public const TUFF = 'break.tuff';
    public const BREAK_WEB = 'break.web';
    public const WEB = 'break.web';
    public const BREAK_WET_SPONGE = 'break.wet_sponge';
    public const WET_SPONGE = 'break.wet_sponge';
    public const BUBBLE_DOWN = 'bubble.down';
    public const DOWN = 'bubble.down';
    public const BUBBLE_DOWNINSIDE = 'bubble.downinside';
    public const DOWNINSIDE = 'bubble.downinside';
    public const BUBBLE_POP = 'bubble.pop';
    public const POP = 'bubble.pop';
    public const BUBBLE_UP = 'bubble.up';
    public const UP = 'bubble.up';
    public const BUBBLE_UPINSIDE = 'bubble.upinside';
    public const UPINSIDE = 'bubble.upinside';
    public const BUCKET_EMPTY_FISH = 'bucket.empty_fish';
    public const EMPTY_FISH = 'bucket.empty_fish';
    public const BUCKET_EMPTY_LAVA = 'bucket.empty_lava';
    public const EMPTY_LAVA = 'bucket.empty_lava';
    public const BUCKET_EMPTY_POWDER_SNOW = 'bucket.empty_powder_snow';
    public const EMPTY_POWDER_SNOW = 'bucket.empty_powder_snow';
    public const BUCKET_EMPTY_WATER = 'bucket.empty_water';
    public const EMPTY_WATER = 'bucket.empty_water';
    public const BUCKET_FILL_FISH = 'bucket.fill_fish';
    public const FILL_FISH = 'bucket.fill_fish';
    public const BUCKET_FILL_LAVA = 'bucket.fill_lava';
    public const FILL_LAVA = 'bucket.fill_lava';
    public const BUCKET_FILL_WATER = 'bucket.fill_water';
    public const FILL_WATER = 'bucket.fill_water';
    public const CAKE_ADD_CANDLE = 'cake.add_candle';
    public const ADD_CANDLE = 'cake.add_candle';
    public const CAULDRON_ADDDYE = 'cauldron.adddye';
    public const ADDDYE = 'cauldron.adddye';
    public const CAULDRON_CLEANARMOR = 'cauldron.cleanarmor';
    public const CLEANARMOR = 'cauldron.cleanarmor';
    public const CAULDRON_CLEANBANNER = 'cauldron.cleanbanner';
    public const CLEANBANNER = 'cauldron.cleanbanner';
    public const CAULDRON_DYEARMOR = 'cauldron.dyearmor';
    public const DYEARMOR = 'cauldron.dyearmor';
    public const CAULDRON_EXPLODE = 'cauldron.explode';
    public const EXPLODE = 'cauldron.explode';
    public const CAULDRON_FILLPOTION = 'cauldron.fillpotion';
    public const FILLPOTION = 'cauldron.fillpotion';
    public const CAULDRON_FILLWATER = 'cauldron.fillwater';
    public const FILLWATER = 'cauldron.fillwater';
    public const CAULDRON_TAKEPOTION = 'cauldron.takepotion';
    public const TAKEPOTION = 'cauldron.takepotion';
    public const CAULDRON_TAKEWATER = 'cauldron.takewater';
    public const TAKEWATER = 'cauldron.takewater';
    public const CAULDRON_DRIP_LAVA_POINTED_DRIPSTONE = 'cauldron_drip.lava.pointed_dripstone';
    public const LAVA_POINTED_DRIPSTONE = 'cauldron_drip.lava.pointed_dripstone';
    public const CAULDRON_DRIP_WATER_POINTED_DRIPSTONE = 'cauldron_drip.water.pointed_dripstone';
    public const WATER_POINTED_DRIPSTONE = 'cauldron_drip.water.pointed_dripstone';
    public const CHIME_AMETHYST_BLOCK = 'chime.amethyst_block';
    public const CLICK_OFF_BAMBOO_WOOD_BUTTON = 'click_off.bamboo_wood_button';
    public const BAMBOO_WOOD_BUTTON = 'click_off.bamboo_wood_button';
    public const CLICK_OFF_BAMBOO_WOOD_PRESSURE_PLATE = 'click_off.bamboo_wood_pressure_plate';
    public const BAMBOO_WOOD_PRESSURE_PLATE = 'click_off.bamboo_wood_pressure_plate';
    public const CLICK_OFF_CHERRY_WOOD_BUTTON = 'click_off.cherry_wood_button';
    public const CHERRY_WOOD_BUTTON = 'click_off.cherry_wood_button';
    public const CLICK_OFF_CHERRY_WOOD_PRESSURE_PLATE = 'click_off.cherry_wood_pressure_plate';
    public const CHERRY_WOOD_PRESSURE_PLATE = 'click_off.cherry_wood_pressure_plate';
    public const CLICK_OFF_METAL_PRESSURE_PLATE = 'click_off.metal_pressure_plate';
    public const METAL_PRESSURE_PLATE = 'click_off.metal_pressure_plate';
    public const CLICK_OFF_NETHER_WOOD_BUTTON = 'click_off.nether_wood_button';
    public const NETHER_WOOD_BUTTON = 'click_off.nether_wood_button';
    public const CLICK_OFF_NETHER_WOOD_PRESSURE_PLATE = 'click_off.nether_wood_pressure_plate';
    public const NETHER_WOOD_PRESSURE_PLATE = 'click_off.nether_wood_pressure_plate';
    public const CLICK_OFF_STONE_PRESSURE_PLATE = 'click_off.stone_pressure_plate';
    public const STONE_PRESSURE_PLATE = 'click_off.stone_pressure_plate';
    public const CLICK_OFF_WOODEN_PRESSURE_PLATE = 'click_off.wooden_pressure_plate';
    public const WOODEN_PRESSURE_PLATE = 'click_off.wooden_pressure_plate';
    public const CLICK_ON_BAMBOO_WOOD_BUTTON = 'click_on.bamboo_wood_button';
    public const CLICK_ON_BAMBOO_WOOD_PRESSURE_PLATE = 'click_on.bamboo_wood_pressure_plate';
    public const CLICK_ON_CHERRY_WOOD_BUTTON = 'click_on.cherry_wood_button';
    public const CLICK_ON_CHERRY_WOOD_PRESSURE_PLATE = 'click_on.cherry_wood_pressure_plate';
    public const CLICK_ON_METAL_PRESSURE_PLATE = 'click_on.metal_pressure_plate';
    public const CLICK_ON_NETHER_WOOD_BUTTON = 'click_on.nether_wood_button';
    public const CLICK_ON_NETHER_WOOD_PRESSURE_PLATE = 'click_on.nether_wood_pressure_plate';
    public const CLICK_ON_STONE_PRESSURE_PLATE = 'click_on.stone_pressure_plate';
    public const CLICK_ON_WOODEN_PRESSURE_PLATE = 'click_on.wooden_pressure_plate';
    public const CLOSE_BAMBOO_WOOD_DOOR = 'close.bamboo_wood_door';
    public const BAMBOO_WOOD_DOOR = 'close.bamboo_wood_door';
    public const CLOSE_BAMBOO_WOOD_FENCE_GATE = 'close.bamboo_wood_fence_gate';
    public const BAMBOO_WOOD_FENCE_GATE = 'close.bamboo_wood_fence_gate';
    public const CLOSE_BAMBOO_WOOD_TRAPDOOR = 'close.bamboo_wood_trapdoor';
    public const BAMBOO_WOOD_TRAPDOOR = 'close.bamboo_wood_trapdoor';
    public const CLOSE_CHERRY_WOOD_DOOR = 'close.cherry_wood_door';
    public const CHERRY_WOOD_DOOR = 'close.cherry_wood_door';
    public const CLOSE_CHERRY_WOOD_FENCE_GATE = 'close.cherry_wood_fence_gate';
    public const CHERRY_WOOD_FENCE_GATE = 'close.cherry_wood_fence_gate';
    public const CLOSE_CHERRY_WOOD_TRAPDOOR = 'close.cherry_wood_trapdoor';
    public const CHERRY_WOOD_TRAPDOOR = 'close.cherry_wood_trapdoor';
    public const CLOSE_FENCE_GATE = 'close.fence_gate';
    public const FENCE_GATE = 'close.fence_gate';
    public const CLOSE_IRON_DOOR = 'close.iron_door';
    public const IRON_DOOR = 'close.iron_door';
    public const CLOSE_IRON_TRAPDOOR = 'close.iron_trapdoor';
    public const IRON_TRAPDOOR = 'close.iron_trapdoor';
    public const CLOSE_NETHER_WOOD_DOOR = 'close.nether_wood_door';
    public const NETHER_WOOD_DOOR = 'close.nether_wood_door';
    public const CLOSE_NETHER_WOOD_FENCE_GATE = 'close.nether_wood_fence_gate';
    public const NETHER_WOOD_FENCE_GATE = 'close.nether_wood_fence_gate';
    public const CLOSE_NETHER_WOOD_TRAPDOOR = 'close.nether_wood_trapdoor';
    public const NETHER_WOOD_TRAPDOOR = 'close.nether_wood_trapdoor';
    public const CLOSE_WOODEN_DOOR = 'close.wooden_door';
    public const WOODEN_DOOR = 'close.wooden_door';
    public const CLOSE_WOODEN_TRAPDOOR = 'close.wooden_trapdoor';
    public const WOODEN_TRAPDOOR = 'close.wooden_trapdoor';
    public const CLOSE_DOOR_COPPER = 'close_door.copper';
    public const COPPER = 'close_door.copper';
    public const CONDUIT_ACTIVATE = 'conduit.activate';
    public const CONDUIT_AMBIENT = 'conduit.ambient';
    public const CONDUIT_ATTACK = 'conduit.attack';
    public const ATTACK = 'conduit.attack';
    public const CONDUIT_DEACTIVATE = 'conduit.deactivate';
    public const CONDUIT_SHORT = 'conduit.short';
    public const SHORT = 'conduit.short';
    public const CRAFTER_CRAFT = 'crafter.craft';
    public const CRAFT = 'crafter.craft';
    public const CRAFTER_DISABLE_SLOT = 'crafter.disable_slot';
    public const DISABLE_SLOT = 'crafter.disable_slot';
    public const CRAFTER_FAIL = 'crafter.fail';
    public const FAIL = 'crafter.fail';
    public const DIG_ANCIENT_DEBRIS = 'dig.ancient_debris';
    public const ANCIENT_DEBRIS = 'dig.ancient_debris';
    public const DIG_AZALEA_LEAVES = 'dig.azalea_leaves';
    public const AZALEA_LEAVES = 'dig.azalea_leaves';
    public const DIG_BASALT = 'dig.basalt';
    public const BASALT = 'dig.basalt';
    public const DIG_BONE_BLOCK = 'dig.bone_block';
    public const BONE_BLOCK = 'dig.bone_block';
    public const DIG_CANDLE = 'dig.candle';
    public const DIG_CAVE_VINES = 'dig.cave_vines';
    public const CAVE_VINES = 'dig.cave_vines';
    public const DIG_CHAIN = 'dig.chain';
    public const CHAIN = 'dig.chain';
    public const DIG_CLOTH = 'dig.cloth';
    public const CLOTH = 'dig.cloth';
    public const DIG_COPPER = 'dig.copper';
    public const DIG_CORAL = 'dig.coral';
    public const CORAL = 'dig.coral';
    public const DIG_DEEPSLATE = 'dig.deepslate';
    public const DEEPSLATE = 'dig.deepslate';
    public const DIG_DEEPSLATE_BRICKS = 'dig.deepslate_bricks';
    public const DEEPSLATE_BRICKS = 'dig.deepslate_bricks';
    public const DIG_FUNGUS = 'dig.fungus';
    public const FUNGUS = 'dig.fungus';
    public const DIG_GRASS = 'dig.grass';
    public const GRASS = 'dig.grass';
    public const DIG_GRAVEL = 'dig.gravel';
    public const GRAVEL = 'dig.gravel';
    public const DIG_HONEY_BLOCK = 'dig.honey_block';
    public const HONEY_BLOCK = 'dig.honey_block';
    public const DIG_LODESTONE = 'dig.lodestone';
    public const LODESTONE = 'dig.lodestone';
    public const DIG_MOSS = 'dig.moss';
    public const MOSS = 'dig.moss';
    public const DIG_NETHER_BRICK = 'dig.nether_brick';
    public const NETHER_BRICK = 'dig.nether_brick';
    public const DIG_NETHER_GOLD_ORE = 'dig.nether_gold_ore';
    public const NETHER_GOLD_ORE = 'dig.nether_gold_ore';
    public const DIG_NETHER_SPROUTS = 'dig.nether_sprouts';
    public const NETHER_SPROUTS = 'dig.nether_sprouts';
    public const DIG_NETHER_WART = 'dig.nether_wart';
    public const NETHER_WART = 'dig.nether_wart';
    public const DIG_NETHERITE = 'dig.netherite';
    public const NETHERITE = 'dig.netherite';
    public const DIG_NETHERRACK = 'dig.netherrack';
    public const NETHERRACK = 'dig.netherrack';
    public const DIG_NYLIUM = 'dig.nylium';
    public const NYLIUM = 'dig.nylium';
    public const DIG_POWDER_SNOW = 'dig.powder_snow';
    public const POWDER_SNOW = 'dig.powder_snow';
    public const DIG_ROOTS = 'dig.roots';
    public const ROOTS = 'dig.roots';
    public const DIG_SAND = 'dig.sand';
    public const SAND = 'dig.sand';
    public const DIG_SHROOMLIGHT = 'dig.shroomlight';
    public const SHROOMLIGHT = 'dig.shroomlight';
    public const DIG_SNOW = 'dig.snow';
    public const SNOW = 'dig.snow';
    public const DIG_SOUL_SAND = 'dig.soul_sand';
    public const SOUL_SAND = 'dig.soul_sand';
    public const DIG_SOUL_SOIL = 'dig.soul_soil';
    public const SOUL_SOIL = 'dig.soul_soil';
    public const DIG_STEM = 'dig.stem';
    public const STEM = 'dig.stem';
    public const DIG_STONE = 'dig.stone';
    public const STONE = 'dig.stone';
    public const DIG_VINES = 'dig.vines';
    public const VINES = 'dig.vines';
    public const DIG_WOOD = 'dig.wood';
    public const WOOD = 'dig.wood';
    public const DRIP_LAVA_POINTED_DRIPSTONE = 'drip.lava.pointed_dripstone';
    public const DRIP_WATER_POINTED_DRIPSTONE = 'drip.water.pointed_dripstone';
    public const EXTINGUISH_CANDLE = 'extinguish.candle';
    public const FALL_COPPER_BULB = 'fall.copper_bulb';
    public const FIRE_FIRE = 'fire.fire';
    public const FIRE = 'fire.fire';
    public const FIRE_IGNITE = 'fire.ignite';
    public const IGNITE = 'fire.ignite';
    public const HATCH_FROG_SPAWN = 'hatch.frog_spawn';
    public const HIT_AMETHYST_BLOCK = 'hit.amethyst_block';
    public const HIT_AMETHYST_CLUSTER = 'hit.amethyst_cluster';
    public const HIT_ANCIENT_DEBRIS = 'hit.ancient_debris';
    public const HIT_ANVIL = 'hit.anvil';
    public const ANVIL = 'hit.anvil';
    public const HIT_AZALEA = 'hit.azalea';
    public const HIT_AZALEA_LEAVES = 'hit.azalea_leaves';
    public const HIT_BAMBOO_WOOD = 'hit.bamboo_wood';
    public const HIT_BASALT = 'hit.basalt';
    public const HIT_BIG_DRIPLEAF = 'hit.big_dripleaf';
    public const HIT_BONE_BLOCK = 'hit.bone_block';
    public const HIT_CALCITE = 'hit.calcite';
    public const HIT_CANDLE = 'hit.candle';
    public const HIT_CAVE_VINES = 'hit.cave_vines';
    public const HIT_CHAIN = 'hit.chain';
    public const HIT_CHERRY_LEAVES = 'hit.cherry_leaves';
    public const HIT_CHERRY_WOOD = 'hit.cherry_wood';
    public const HIT_CHISELED_BOOKSHELF = 'hit.chiseled_bookshelf';
    public const HIT_CLOTH = 'hit.cloth';
    public const HIT_COPPER = 'hit.copper';
    public const HIT_COPPER_BULB = 'hit.copper_bulb';
    public const HIT_CORAL = 'hit.coral';
    public const HIT_DEEPSLATE = 'hit.deepslate';
    public const HIT_DEEPSLATE_BRICKS = 'hit.deepslate_bricks';
    public const HIT_DIRT_WITH_ROOTS = 'hit.dirt_with_roots';
    public const HIT_DRIPSTONE_BLOCK = 'hit.dripstone_block';
    public const HIT_GRASS = 'hit.grass';
    public const HIT_GRAVEL = 'hit.gravel';
    public const HIT_HANGING_ROOTS = 'hit.hanging_roots';
    public const HIT_HONEY_BLOCK = 'hit.honey_block';
    public const HIT_IRON = 'hit.iron';
    public const HIT_LADDER = 'hit.ladder';
    public const HIT_MOSS = 'hit.moss';
    public const HIT_NETHER_BRICK = 'hit.nether_brick';
    public const HIT_NETHER_GOLD_ORE = 'hit.nether_gold_ore';
    public const HIT_NETHER_SPROUTS = 'hit.nether_sprouts';
    public const HIT_NETHER_WART = 'hit.nether_wart';
    public const HIT_NETHER_WOOD = 'hit.nether_wood';
    public const HIT_NETHERITE = 'hit.netherite';
    public const HIT_NETHERRACK = 'hit.netherrack';
    public const HIT_NYLIUM = 'hit.nylium';
    public const HIT_PINK_PETALS = 'hit.pink_petals';
    public const HIT_POINTED_DRIPSTONE = 'hit.pointed_dripstone';
    public const HIT_POWDER_SNOW = 'hit.powder_snow';
    public const HIT_ROOTS = 'hit.roots';
    public const HIT_SAND = 'hit.sand';
    public const HIT_SCULK = 'hit.sculk';
    public const HIT_SCULK_CATALYST = 'hit.sculk_catalyst';
    public const HIT_SCULK_SENSOR = 'hit.sculk_sensor';
    public const HIT_SCULK_SHRIEKER = 'hit.sculk_shrieker';
    public const HIT_SHROOMLIGHT = 'hit.shroomlight';
    public const HIT_SLIME = 'hit.slime';
    public const HIT_SNOW = 'hit.snow';
    public const HIT_SOUL_SAND = 'hit.soul_sand';
    public const HIT_SOUL_SOIL = 'hit.soul_soil';
    public const HIT_SPONGE = 'hit.sponge';
    public const HIT_SPORE_BLOSSOM = 'hit.spore_blossom';
    public const HIT_STEM = 'hit.stem';
    public const HIT_STONE = 'hit.stone';
    public const HIT_SUSPICIOUS_GRAVEL = 'hit.suspicious_gravel';
    public const HIT_SUSPICIOUS_SAND = 'hit.suspicious_sand';
    public const HIT_TUFF = 'hit.tuff';
    public const HIT_VINES = 'hit.vines';
    public const HIT_WET_SPONGE = 'hit.wet_sponge';
    public const HIT_WOOD = 'hit.wood';
    public const INSERT_CHISELED_BOOKSHELF = 'insert.chiseled_bookshelf';
    public const INSERT_ENCHANTED_CHISELED_BOOKSHELF = 'insert_enchanted.chiseled_bookshelf';
    public const ITEM_BONE_MEAL_USE = 'item.bone_meal.use';
    public const BONE_MEAL_USE = 'item.bone_meal.use';
    public const ITEM_BOOK_PUT = 'item.book.put';
    public const BOOK_PUT = 'item.book.put';
    public const JUMP_ANCIENT_DEBRIS = 'jump.ancient_debris';
    public const JUMP_BASALT = 'jump.basalt';
    public const JUMP_BONE_BLOCK = 'jump.bone_block';
    public const JUMP_CHAIN = 'jump.chain';
    public const JUMP_CLOTH = 'jump.cloth';
    public const JUMP_CORAL = 'jump.coral';
    public const JUMP_GRASS = 'jump.grass';
    public const JUMP_GRAVEL = 'jump.gravel';
    public const JUMP_HONEY_BLOCK = 'jump.honey_block';
    public const JUMP_NETHER_BRICK = 'jump.nether_brick';
    public const JUMP_NETHER_GOLD_ORE = 'jump.nether_gold_ore';
    public const JUMP_NETHER_SPROUTS = 'jump.nether_sprouts';
    public const JUMP_NETHER_WART = 'jump.nether_wart';
    public const JUMP_NETHERITE = 'jump.netherite';
    public const JUMP_NETHERRACK = 'jump.netherrack';
    public const JUMP_NYLIUM = 'jump.nylium';
    public const JUMP_ROOTS = 'jump.roots';
    public const JUMP_SAND = 'jump.sand';
    public const JUMP_SHROOMLIGHT = 'jump.shroomlight';
    public const JUMP_SLIME = 'jump.slime';
    public const JUMP_SNOW = 'jump.snow';
    public const JUMP_SOUL_SAND = 'jump.soul_sand';
    public const JUMP_SOUL_SOIL = 'jump.soul_soil';
    public const JUMP_STEM = 'jump.stem';
    public const JUMP_STONE = 'jump.stone';
    public const JUMP_VINES = 'jump.vines';
    public const JUMP_WOOD = 'jump.wood';
    public const LAND_ANCIENT_DEBRIS = 'land.ancient_debris';
    public const LAND_BASALT = 'land.basalt';
    public const LAND_BONE_BLOCK = 'land.bone_block';
    public const LAND_CHAIN = 'land.chain';
    public const LAND_CLOTH = 'land.cloth';
    public const LAND_CORAL = 'land.coral';
    public const LAND_GRASS = 'land.grass';
    public const LAND_GRAVEL = 'land.gravel';
    public const LAND_HONEY_BLOCK = 'land.honey_block';
    public const LAND_NETHER_BRICK = 'land.nether_brick';
    public const LAND_NETHER_GOLD_ORE = 'land.nether_gold_ore';
    public const LAND_NETHER_SPROUTS = 'land.nether_sprouts';
    public const LAND_NETHER_WART = 'land.nether_wart';
    public const LAND_NETHERITE = 'land.netherite';
    public const LAND_NETHERRACK = 'land.netherrack';
    public const LAND_NYLIUM = 'land.nylium';
    public const LAND_ROOTS = 'land.roots';
    public const LAND_SAND = 'land.sand';
    public const LAND_SHROOMLIGHT = 'land.shroomlight';
    public const LAND_SLIME = 'land.slime';
    public const LAND_SNOW = 'land.snow';
    public const LAND_SOUL_SAND = 'land.soul_sand';
    public const LAND_SOUL_SOIL = 'land.soul_soil';
    public const LAND_STEM = 'land.stem';
    public const LAND_STONE = 'land.stone';
    public const LAND_VINES = 'land.vines';
    public const LAND_WOOD = 'land.wood';
    public const LIQUID_LAVA = 'liquid.lava';
    public const LAVA = 'liquid.lava';
    public const LIQUID_LAVAPOP = 'liquid.lavapop';
    public const LAVAPOP = 'liquid.lavapop';
    public const LIQUID_WATER = 'liquid.water';
    public const WATER = 'liquid.water';
    public const LODESTONE_COMPASS_LINK_COMPASS_TO_LODESTONE = 'lodestone_compass.link_compass_to_lodestone';
    public const LINK_COMPASS_TO_LODESTONE = 'lodestone_compass.link_compass_to_lodestone';
    public const OMINOUS_BOTTLE_END_USE = 'ominous_bottle.end_use';
    public const END_USE = 'ominous_bottle.end_use';
    public const OMINOUS_ITEM_SPAWNER_ABOUT_TO_SPAWN_ITEM = 'ominous_item_spawner.about_to_spawn_item';
    public const ABOUT_TO_SPAWN_ITEM = 'ominous_item_spawner.about_to_spawn_item';
    public const OMINOUS_ITEM_SPAWNER_SPAWN_ITEM = 'ominous_item_spawner.spawn_item';
    public const SPAWN_ITEM = 'ominous_item_spawner.spawn_item';
    public const OMINOUS_ITEM_SPAWNER_SPAWN_ITEM_BEGIN = 'ominous_item_spawner.spawn_item_begin';
    public const SPAWN_ITEM_BEGIN = 'ominous_item_spawner.spawn_item_begin';
    public const OPEN_BAMBOO_WOOD_DOOR = 'open.bamboo_wood_door';
    public const OPEN_BAMBOO_WOOD_FENCE_GATE = 'open.bamboo_wood_fence_gate';
    public const OPEN_BAMBOO_WOOD_TRAPDOOR = 'open.bamboo_wood_trapdoor';
    public const OPEN_CHERRY_WOOD_DOOR = 'open.cherry_wood_door';
    public const OPEN_CHERRY_WOOD_FENCE_GATE = 'open.cherry_wood_fence_gate';
    public const OPEN_CHERRY_WOOD_TRAPDOOR = 'open.cherry_wood_trapdoor';
    public const OPEN_FENCE_GATE = 'open.fence_gate';
    public const OPEN_IRON_DOOR = 'open.iron_door';
    public const OPEN_IRON_TRAPDOOR = 'open.iron_trapdoor';
    public const OPEN_NETHER_WOOD_DOOR = 'open.nether_wood_door';
    public const OPEN_NETHER_WOOD_FENCE_GATE = 'open.nether_wood_fence_gate';
    public const OPEN_NETHER_WOOD_TRAPDOOR = 'open.nether_wood_trapdoor';
    public const OPEN_WOODEN_DOOR = 'open.wooden_door';
    public const OPEN_WOODEN_TRAPDOOR = 'open.wooden_trapdoor';
    public const OPEN_DOOR_COPPER = 'open_door.copper';
    public const OPEN_TRAPDOOR_COPPER = 'open_trapdoor.copper';
    public const PICK_BERRIES_CAVE_VINES = 'pick_berries.cave_vines';
    public const PICKUP_CHISELED_BOOKSHELF = 'pickup.chiseled_bookshelf';
    public const PICKUP_ENCHANTED_CHISELED_BOOKSHELF = 'pickup_enchanted.chiseled_bookshelf';
    public const PLACE_AMETHYST_BLOCK = 'place.amethyst_block';
    public const PLACE_AMETHYST_CLUSTER = 'place.amethyst_cluster';
    public const PLACE_AZALEA = 'place.azalea';
    public const PLACE_AZALEA_LEAVES = 'place.azalea_leaves';
    public const PLACE_BAMBOO_WOOD = 'place.bamboo_wood';
    public const PLACE_BIG_DRIPLEAF = 'place.big_dripleaf';
    public const PLACE_CALCITE = 'place.calcite';
    public const PLACE_CHERRY_LEAVES = 'place.cherry_leaves';
    public const PLACE_CHERRY_WOOD = 'place.cherry_wood';
    public const PLACE_CHISELED_BOOKSHELF = 'place.chiseled_bookshelf';
    public const PLACE_COPPER = 'place.copper';
    public const PLACE_COPPER_BULB = 'place.copper_bulb';
    public const PLACE_DEEPSLATE = 'place.deepslate';
    public const PLACE_DEEPSLATE_BRICKS = 'place.deepslate_bricks';
    public const PLACE_DIRT_WITH_ROOTS = 'place.dirt_with_roots';
    public const PLACE_DRIPSTONE_BLOCK = 'place.dripstone_block';
    public const PLACE_HANGING_ROOTS = 'place.hanging_roots';
    public const PLACE_IRON = 'place.iron';
    public const PLACE_LARGE_AMETHYST_BUD = 'place.large_amethyst_bud';
    public const PLACE_MEDIUM_AMETHYST_BUD = 'place.medium_amethyst_bud';
    public const PLACE_MOSS = 'place.moss';
    public const PLACE_NETHER_WOOD = 'place.nether_wood';
    public const PLACE_PINK_PETALS = 'place.pink_petals';
    public const PLACE_POINTED_DRIPSTONE = 'place.pointed_dripstone';
    public const PLACE_POWDER_SNOW = 'place.powder_snow';
    public const PLACE_SCULK = 'place.sculk';
    public const PLACE_SCULK_CATALYST = 'place.sculk_catalyst';
    public const PLACE_SCULK_SENSOR = 'place.sculk_sensor';
    public const PLACE_SCULK_SHRIEKER = 'place.sculk_shrieker';
    public const PLACE_SMALL_AMETHYST_BUD = 'place.small_amethyst_bud';
    public const PLACE_SPONGE = 'place.sponge';
    public const PLACE_SPORE_BLOSSOM = 'place.spore_blossom';
    public const PLACE_SUSPICIOUS_GRAVEL = 'place.suspicious_gravel';
    public const PLACE_SUSPICIOUS_SAND = 'place.suspicious_sand';
    public const PLACE_TUFF = 'place.tuff';
    public const PLACE_TUFF_BRICKS = 'place.tuff_bricks';
    public const TUFF_BRICKS = 'place.tuff_bricks';
    public const PLACE_WET_SPONGE = 'place.wet_sponge';
    public const PORTAL_PORTAL = 'portal.portal';
    public const PORTAL = 'portal.portal';
    public const POWER_OFF_SCULK_SENSOR = 'power.off.sculk_sensor';
    public const OFF_SCULK_SENSOR = 'power.off.sculk_sensor';
    public const POWER_ON_SCULK_SENSOR = 'power.on.sculk_sensor';
    public const ON_SCULK_SENSOR = 'power.on.sculk_sensor';
    public const PUMPKIN_CARVE = 'pumpkin.carve';
    public const CARVE = 'pumpkin.carve';
    public const RANDOM_ANVIL_BREAK = 'random.anvil_break';
    public const ANVIL_BREAK = 'random.anvil_break';
    public const RANDOM_ANVIL_LAND = 'random.anvil_land';
    public const ANVIL_LAND = 'random.anvil_land';
    public const RANDOM_ANVIL_USE = 'random.anvil_use';
    public const ANVIL_USE = 'random.anvil_use';
    public const RANDOM_CHESTCLOSED = 'random.chestclosed';
    public const CHESTCLOSED = 'random.chestclosed';
    public const RANDOM_CHESTOPEN = 'random.chestopen';
    public const CHESTOPEN = 'random.chestopen';
    public const RANDOM_DOOR_CLOSE = 'random.door_close';
    public const DOOR_CLOSE = 'random.door_close';
    public const RANDOM_DOOR_OPEN = 'random.door_open';
    public const DOOR_OPEN = 'random.door_open';
    public const RANDOM_ENDERCHESTCLOSED = 'random.enderchestclosed';
    public const ENDERCHESTCLOSED = 'random.enderchestclosed';
    public const RANDOM_ENDERCHESTOPEN = 'random.enderchestopen';
    public const ENDERCHESTOPEN = 'random.enderchestopen';
    public const RANDOM_EXPLODE = 'random.explode';
    public const RANDOM_FIZZ = 'random.fizz';
    public const FIZZ = 'random.fizz';
    public const RANDOM_FUSE = 'random.fuse';
    public const RANDOM_GLASS = 'random.glass';
    public const GLASS = 'random.glass';
    public const RANDOM_LEVER_CLICK = 'random.lever_click';
    public const LEVER_CLICK = 'random.lever_click';
    public const RANDOM_POTION_BREWED = 'random.potion.brewed';
    public const POTION_BREWED = 'random.potion.brewed';
    public const RANDOM_SHULKERBOXCLOSED = 'random.shulkerboxclosed';
    public const SHULKERBOXCLOSED = 'random.shulkerboxclosed';
    public const RANDOM_SHULKERBOXOPEN = 'random.shulkerboxopen';
    public const SHULKERBOXOPEN = 'random.shulkerboxopen';
    public const RANDOM_STONE_CLICK = 'random.stone_click';
    public const STONE_CLICK = 'random.stone_click';
    public const RANDOM_WOOD_CLICK = 'random.wood_click';
    public const WOOD_CLICK = 'random.wood_click';
    public const RESONATE_AMETHYST_BLOCK = 'resonate.amethyst_block';
    public const RESPAWN_ANCHOR_AMBIENT = 'respawn_anchor.ambient';
    public const RESPAWN_ANCHOR_CHARGE = 'respawn_anchor.charge';
    public const CHARGE = 'respawn_anchor.charge';
    public const RESPAWN_ANCHOR_DEPLETE = 'respawn_anchor.deplete';
    public const DEPLETE = 'respawn_anchor.deplete';
    public const RESPAWN_ANCHOR_SET_SPAWN = 'respawn_anchor.set_spawn';
    public const SET_SPAWN = 'respawn_anchor.set_spawn';
    public const SHATTER_DECORATED_POT = 'shatter.decorated_pot';
    public const SHRIEK_SCULK_SHRIEKER = 'shriek.sculk_shrieker';
    public const SMITHING_TABLE_USE = 'smithing_table.use';
    public const USE = 'smithing_table.use';
    public const SPONGE_ABSORB = 'sponge.absorb';
    public const ABSORB = 'sponge.absorb';
    public const STEP_CANDLE = 'step.candle';
    public const STEP_CHERRY_LEAVES = 'step.cherry_leaves';
    public const STEP_COPPER_BULB = 'step.copper_bulb';
    public const STEP_COPPER_GRATE = 'step.copper_grate';
    public const STEP_DECORATED_POT = 'step.decorated_pot';
    public const STEP_FROG_SPAWN = 'step.frog_spawn';
    public const STEP_FROGLIGHT = 'step.froglight';
    public const STEP_SCULK_SHRIEKER = 'step.sculk_shrieker';
    public const STEP_SCULK_VEIN = 'step.sculk_vein';
    public const STEP_TUFF_BRICKS = 'step.tuff_bricks';
    public const STEP_WEB = 'step.web';
    public const TILE_PISTON_IN = 'tile.piston.in';
    public const PISTON_IN = 'tile.piston.in';
    public const TILE_PISTON_OUT = 'tile.piston.out';
    public const PISTON_OUT = 'tile.piston.out';
    public const TILT_DOWN_BIG_DRIPLEAF = 'tilt_down.big_dripleaf';
    public const TILT_UP_BIG_DRIPLEAF = 'tilt_up.big_dripleaf';
    public const TRIAL_SPAWNER_AMBIENT = 'trial_spawner.ambient';
    public const TRIAL_SPAWNER_AMBIENT_OMINOUS = 'trial_spawner.ambient_ominous';
    public const AMBIENT_OMINOUS = 'trial_spawner.ambient_ominous';
    public const TRIAL_SPAWNER_BREAK = 'trial_spawner.break';
    public const TRIAL_SPAWNER_CHARGE_ACTIVATE = 'trial_spawner.charge_activate';
    public const CHARGE_ACTIVATE = 'trial_spawner.charge_activate';
    public const TRIAL_SPAWNER_CLOSE_SHUTTER = 'trial_spawner.close_shutter';
    public const CLOSE_SHUTTER = 'trial_spawner.close_shutter';
    public const TRIAL_SPAWNER_DETECT_PLAYER = 'trial_spawner.detect_player';
    public const DETECT_PLAYER = 'trial_spawner.detect_player';
    public const TRIAL_SPAWNER_EJECT_ITEM = 'trial_spawner.eject_item';
    public const EJECT_ITEM = 'trial_spawner.eject_item';
    public const TRIAL_SPAWNER_HIT = 'trial_spawner.hit';
    public const HIT = 'trial_spawner.hit';
    public const TRIAL_SPAWNER_OPEN_SHUTTER = 'trial_spawner.open_shutter';
    public const OPEN_SHUTTER = 'trial_spawner.open_shutter';
    public const TRIAL_SPAWNER_PLACE = 'trial_spawner.place';
    public const TRIAL_SPAWNER_SPAWN_MOB = 'trial_spawner.spawn_mob';
    public const SPAWN_MOB = 'trial_spawner.spawn_mob';
    public const TRIAL_SPAWNER_STEP = 'trial_spawner.step';
    public const STEP = 'trial_spawner.step';
    public const UI_CARTOGRAPHY_TABLE_TAKE_RESULT = 'ui.cartography_table.take_result';
    public const CARTOGRAPHY_TABLE_TAKE_RESULT = 'ui.cartography_table.take_result';
    public const UI_LOOM_SELECT_PATTERN = 'ui.loom.select_pattern';
    public const LOOM_SELECT_PATTERN = 'ui.loom.select_pattern';
    public const UI_LOOM_TAKE_RESULT = 'ui.loom.take_result';
    public const LOOM_TAKE_RESULT = 'ui.loom.take_result';
    public const UI_STONECUTTER_TAKE_RESULT = 'ui.stonecutter.take_result';
    public const STONECUTTER_TAKE_RESULT = 'ui.stonecutter.take_result';
    public const USE_ANCIENT_DEBRIS = 'use.ancient_debris';
    public const USE_BASALT = 'use.basalt';
    public const USE_BONE_BLOCK = 'use.bone_block';
    public const USE_CANDLE = 'use.candle';
    public const USE_CAVE_VINES = 'use.cave_vines';
    public const USE_CHAIN = 'use.chain';
    public const USE_CLOTH = 'use.cloth';
    public const USE_COPPER = 'use.copper';
    public const USE_CORAL = 'use.coral';
    public const USE_DEEPSLATE = 'use.deepslate';
    public const USE_DEEPSLATE_BRICKS = 'use.deepslate_bricks';
    public const USE_DIRT_WITH_ROOTS = 'use.dirt_with_roots';
    public const USE_DRIPSTONE_BLOCK = 'use.dripstone_block';
    public const USE_GRASS = 'use.grass';
    public const USE_GRAVEL = 'use.gravel';
    public const USE_HANGING_ROOTS = 'use.hanging_roots';
    public const USE_HONEY_BLOCK = 'use.honey_block';
    public const USE_LADDER = 'use.ladder';
    public const USE_MOSS = 'use.moss';
    public const USE_NETHER_BRICK = 'use.nether_brick';
    public const USE_NETHER_GOLD_ORE = 'use.nether_gold_ore';
    public const USE_NETHER_SPROUTS = 'use.nether_sprouts';
    public const USE_NETHER_WART = 'use.nether_wart';
    public const USE_NETHERITE = 'use.netherite';
    public const USE_NETHERRACK = 'use.netherrack';
    public const USE_NYLIUM = 'use.nylium';
    public const USE_POINTED_DRIPSTONE = 'use.pointed_dripstone';
    public const USE_ROOTS = 'use.roots';
    public const USE_SAND = 'use.sand';
    public const USE_SCULK_SENSOR = 'use.sculk_sensor';
    public const USE_SHROOMLIGHT = 'use.shroomlight';
    public const USE_SLIME = 'use.slime';
    public const USE_SNOW = 'use.snow';
    public const USE_SOUL_SAND = 'use.soul_sand';
    public const USE_SOUL_SOIL = 'use.soul_soil';
    public const USE_SPORE_BLOSSOM = 'use.spore_blossom';
    public const USE_STEM = 'use.stem';
    public const USE_STONE = 'use.stone';
    public const USE_VINES = 'use.vines';
    public const USE_WOOD = 'use.wood';
    public const VAULT_ACTIVATE = 'vault.activate';
    public const VAULT_AMBIENT = 'vault.ambient';
    public const VAULT_BREAK = 'vault.break';
    public const VAULT_CLOSE_SHUTTER = 'vault.close_shutter';
    public const VAULT_DEACTIVATE = 'vault.deactivate';
    public const VAULT_EJECT_ITEM = 'vault.eject_item';
    public const VAULT_HIT = 'vault.hit';
    public const VAULT_INSERT_ITEM = 'vault.insert_item';
    public const INSERT_ITEM = 'vault.insert_item';
    public const VAULT_INSERT_ITEM_FAIL = 'vault.insert_item_fail';
    public const INSERT_ITEM_FAIL = 'vault.insert_item_fail';
    public const VAULT_OPEN_SHUTTER = 'vault.open_shutter';
    public const VAULT_PLACE = 'vault.place';
    public const VAULT_REJECT_REWARDED_PLAYER = 'vault.reject_rewarded_player';
    public const REJECT_REWARDED_PLAYER = 'vault.reject_rewarded_player';
    public const VAULT_STEP = 'vault.step';

    /** [block] ambient.candle */
    public static function AMBIENT_CANDLE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ambient.candle')); }
    /** [block] ambient.candle @see self::AMBIENT_CANDLE() */
    public static function CANDLE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ambient.candle')); }
    /** [block] beacon.activate */
    public static function BEACON_ACTIVATE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('beacon.activate')); }
    /** [block] beacon.activate @see self::BEACON_ACTIVATE() */
    public static function ACTIVATE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('beacon.activate')); }
    /** [block] beacon.ambient */
    public static function BEACON_AMBIENT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('beacon.ambient')); }
    /** [block] beacon.ambient @see self::BEACON_AMBIENT() */
    public static function AMBIENT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('beacon.ambient')); }
    /** [block] beacon.deactivate */
    public static function BEACON_DEACTIVATE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('beacon.deactivate')); }
    /** [block] beacon.deactivate @see self::BEACON_DEACTIVATE() */
    public static function DEACTIVATE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('beacon.deactivate')); }
    /** [block] beacon.power */
    public static function BEACON_POWER() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('beacon.power')); }
    /** [block] beacon.power @see self::BEACON_POWER() */
    public static function POWER() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('beacon.power')); }
    /** [block] block.bamboo.break */
    public static function BLOCK_BAMBOO_BREAK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.bamboo.break')); }
    /** [block] block.bamboo.break @see self::BLOCK_BAMBOO_BREAK() */
    public static function BAMBOO_BREAK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.bamboo.break')); }
    /** [block] block.bamboo.fall */
    public static function BLOCK_BAMBOO_FALL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.bamboo.fall')); }
    /** [block] block.bamboo.fall @see self::BLOCK_BAMBOO_FALL() */
    public static function BAMBOO_FALL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.bamboo.fall')); }
    /** [block] block.bamboo.hit */
    public static function BLOCK_BAMBOO_HIT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.bamboo.hit')); }
    /** [block] block.bamboo.hit @see self::BLOCK_BAMBOO_HIT() */
    public static function BAMBOO_HIT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.bamboo.hit')); }
    /** [block] block.bamboo.place */
    public static function BLOCK_BAMBOO_PLACE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.bamboo.place')); }
    /** [block] block.bamboo.place @see self::BLOCK_BAMBOO_PLACE() */
    public static function BAMBOO_PLACE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.bamboo.place')); }
    /** [block] block.bamboo.step */
    public static function BLOCK_BAMBOO_STEP() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.bamboo.step')); }
    /** [block] block.bamboo.step @see self::BLOCK_BAMBOO_STEP() */
    public static function BAMBOO_STEP() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.bamboo.step')); }
    /** [block] block.bamboo_sapling.break */
    public static function BLOCK_BAMBOO_SAPLING_BREAK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.bamboo_sapling.break')); }
    /** [block] block.bamboo_sapling.break @see self::BLOCK_BAMBOO_SAPLING_BREAK() */
    public static function BAMBOO_SAPLING_BREAK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.bamboo_sapling.break')); }
    /** [block] block.bamboo_sapling.place */
    public static function BLOCK_BAMBOO_SAPLING_PLACE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.bamboo_sapling.place')); }
    /** [block] block.bamboo_sapling.place @see self::BLOCK_BAMBOO_SAPLING_PLACE() */
    public static function BAMBOO_SAPLING_PLACE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.bamboo_sapling.place')); }
    /** [block] block.barrel.close */
    public static function BLOCK_BARREL_CLOSE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.barrel.close')); }
    /** [block] block.barrel.close @see self::BLOCK_BARREL_CLOSE() */
    public static function BARREL_CLOSE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.barrel.close')); }
    /** [block] block.barrel.open */
    public static function BLOCK_BARREL_OPEN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.barrel.open')); }
    /** [block] block.barrel.open @see self::BLOCK_BARREL_OPEN() */
    public static function BARREL_OPEN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.barrel.open')); }
    /** [block] block.beehive.drip */
    public static function BLOCK_BEEHIVE_DRIP() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.beehive.drip')); }
    /** [block] block.beehive.drip @see self::BLOCK_BEEHIVE_DRIP() */
    public static function BEEHIVE_DRIP() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.beehive.drip')); }
    /** [block] block.beehive.enter */
    public static function BLOCK_BEEHIVE_ENTER() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.beehive.enter')); }
    /** [block] block.beehive.enter @see self::BLOCK_BEEHIVE_ENTER() */
    public static function BEEHIVE_ENTER() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.beehive.enter')); }
    /** [block] block.beehive.exit */
    public static function BLOCK_BEEHIVE_EXIT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.beehive.exit')); }
    /** [block] block.beehive.exit @see self::BLOCK_BEEHIVE_EXIT() */
    public static function BEEHIVE_EXIT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.beehive.exit')); }
    /** [block] block.beehive.shear */
    public static function BLOCK_BEEHIVE_SHEAR() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.beehive.shear')); }
    /** [block] block.beehive.shear @see self::BLOCK_BEEHIVE_SHEAR() */
    public static function BEEHIVE_SHEAR() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.beehive.shear')); }
    /** [block] block.beehive.work */
    public static function BLOCK_BEEHIVE_WORK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.beehive.work')); }
    /** [block] block.beehive.work @see self::BLOCK_BEEHIVE_WORK() */
    public static function BEEHIVE_WORK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.beehive.work')); }
    /** [block] block.bell.hit */
    public static function BLOCK_BELL_HIT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.bell.hit')); }
    /** [block] block.bell.hit @see self::BLOCK_BELL_HIT() */
    public static function BELL_HIT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.bell.hit')); }
    /** [block] block.blastfurnace.fire_crackle */
    public static function BLOCK_BLASTFURNACE_FIRE_CRACKLE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.blastfurnace.fire_crackle')); }
    /** [block] block.blastfurnace.fire_crackle @see self::BLOCK_BLASTFURNACE_FIRE_CRACKLE() */
    public static function BLASTFURNACE_FIRE_CRACKLE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.blastfurnace.fire_crackle')); }
    /** [block] block.bowhit */
    public static function BLOCK_BOWHIT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.bowhit')); }
    /** [block] block.bowhit @see self::BLOCK_BOWHIT() */
    public static function BOWHIT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.bowhit')); }
    /** [block] block.cactus_flower.break */
    public static function BLOCK_CACTUS_FLOWER_BREAK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.cactus_flower.break')); }
    /** [block] block.cactus_flower.break @see self::BLOCK_CACTUS_FLOWER_BREAK() */
    public static function CACTUS_FLOWER_BREAK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.cactus_flower.break')); }
    /** [block] block.cactus_flower.place */
    public static function BLOCK_CACTUS_FLOWER_PLACE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.cactus_flower.place')); }
    /** [block] block.cactus_flower.place @see self::BLOCK_CACTUS_FLOWER_PLACE() */
    public static function CACTUS_FLOWER_PLACE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.cactus_flower.place')); }
    /** [block] block.campfire.crackle */
    public static function BLOCK_CAMPFIRE_CRACKLE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.campfire.crackle')); }
    /** [block] block.campfire.crackle @see self::BLOCK_CAMPFIRE_CRACKLE() */
    public static function CAMPFIRE_CRACKLE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.campfire.crackle')); }
    /** [block] block.cartography_table.use */
    public static function BLOCK_CARTOGRAPHY_TABLE_USE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.cartography_table.use')); }
    /** [block] block.cartography_table.use @see self::BLOCK_CARTOGRAPHY_TABLE_USE() */
    public static function CARTOGRAPHY_TABLE_USE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.cartography_table.use')); }
    /** [block] block.cave_vines.place */
    public static function BLOCK_CAVE_VINES_PLACE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.cave_vines.place')); }
    /** [block] block.cave_vines.place @see self::BLOCK_CAVE_VINES_PLACE() */
    public static function CAVE_VINES_PLACE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.cave_vines.place')); }
    /** [block] block.chorusflower.death */
    public static function BLOCK_CHORUSFLOWER_DEATH() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.chorusflower.death')); }
    /** [block] block.chorusflower.death @see self::BLOCK_CHORUSFLOWER_DEATH() */
    public static function CHORUSFLOWER_DEATH() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.chorusflower.death')); }
    /** [block] block.chorusflower.grow */
    public static function BLOCK_CHORUSFLOWER_GROW() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.chorusflower.grow')); }
    /** [block] block.chorusflower.grow @see self::BLOCK_CHORUSFLOWER_GROW() */
    public static function CHORUSFLOWER_GROW() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.chorusflower.grow')); }
    /** [block] block.click */
    public static function BLOCK_CLICK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.click')); }
    /** [block] block.click @see self::BLOCK_CLICK() */
    public static function CLICK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.click')); }
    /** [block] block.composter.empty */
    public static function BLOCK_COMPOSTER_EMPTY() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.composter.empty')); }
    /** [block] block.composter.empty @see self::BLOCK_COMPOSTER_EMPTY() */
    public static function COMPOSTER_EMPTY() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.composter.empty')); }
    /** [block] block.composter.fill */
    public static function BLOCK_COMPOSTER_FILL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.composter.fill')); }
    /** [block] block.composter.fill @see self::BLOCK_COMPOSTER_FILL() */
    public static function COMPOSTER_FILL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.composter.fill')); }
    /** [block] block.composter.fill_success */
    public static function BLOCK_COMPOSTER_FILL_SUCCESS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.composter.fill_success')); }
    /** [block] block.composter.fill_success @see self::BLOCK_COMPOSTER_FILL_SUCCESS() */
    public static function COMPOSTER_FILL_SUCCESS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.composter.fill_success')); }
    /** [block] block.composter.ready */
    public static function BLOCK_COMPOSTER_READY() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.composter.ready')); }
    /** [block] block.composter.ready @see self::BLOCK_COMPOSTER_READY() */
    public static function COMPOSTER_READY() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.composter.ready')); }
    /** [block] block.copper_bulb.turn_off */
    public static function BLOCK_COPPER_BULB_TURN_OFF() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.copper_bulb.turn_off')); }
    /** [block] block.copper_bulb.turn_off @see self::BLOCK_COPPER_BULB_TURN_OFF() */
    public static function COPPER_BULB_TURN_OFF() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.copper_bulb.turn_off')); }
    /** [block] block.copper_bulb.turn_on */
    public static function BLOCK_COPPER_BULB_TURN_ON() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.copper_bulb.turn_on')); }
    /** [block] block.copper_bulb.turn_on @see self::BLOCK_COPPER_BULB_TURN_ON() */
    public static function COPPER_BULB_TURN_ON() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.copper_bulb.turn_on')); }
    /** [block] block.copper_chest.closed */
    public static function BLOCK_COPPER_CHEST_CLOSED() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.copper_chest.closed')); }
    /** [block] block.copper_chest.closed @see self::BLOCK_COPPER_CHEST_CLOSED() */
    public static function COPPER_CHEST_CLOSED() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.copper_chest.closed')); }
    /** [block] block.copper_chest.open */
    public static function BLOCK_COPPER_CHEST_OPEN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.copper_chest.open')); }
    /** [block] block.copper_chest.open @see self::BLOCK_COPPER_CHEST_OPEN() */
    public static function COPPER_CHEST_OPEN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.copper_chest.open')); }
    /** [block] block.copper_chest.oxidized.closed */
    public static function BLOCK_COPPER_CHEST_OXIDIZED_CLOSED() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.copper_chest.oxidized.closed')); }
    /** [block] block.copper_chest.oxidized.closed @see self::BLOCK_COPPER_CHEST_OXIDIZED_CLOSED() */
    public static function COPPER_CHEST_OXIDIZED_CLOSED() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.copper_chest.oxidized.closed')); }
    /** [block] block.copper_chest.oxidized.open */
    public static function BLOCK_COPPER_CHEST_OXIDIZED_OPEN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.copper_chest.oxidized.open')); }
    /** [block] block.copper_chest.oxidized.open @see self::BLOCK_COPPER_CHEST_OXIDIZED_OPEN() */
    public static function COPPER_CHEST_OXIDIZED_OPEN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.copper_chest.oxidized.open')); }
    /** [block] block.copper_chest.weathered.closed */
    public static function BLOCK_COPPER_CHEST_WEATHERED_CLOSED() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.copper_chest.weathered.closed')); }
    /** [block] block.copper_chest.weathered.closed @see self::BLOCK_COPPER_CHEST_WEATHERED_CLOSED() */
    public static function COPPER_CHEST_WEATHERED_CLOSED() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.copper_chest.weathered.closed')); }
    /** [block] block.copper_chest.weathered.open */
    public static function BLOCK_COPPER_CHEST_WEATHERED_OPEN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.copper_chest.weathered.open')); }
    /** [block] block.copper_chest.weathered.open @see self::BLOCK_COPPER_CHEST_WEATHERED_OPEN() */
    public static function COPPER_CHEST_WEATHERED_OPEN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.copper_chest.weathered.open')); }
    /** [block] block.copper_golem_statue.break */
    public static function BLOCK_COPPER_GOLEM_STATUE_BREAK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.copper_golem_statue.break')); }
    /** [block] block.copper_golem_statue.break @see self::BLOCK_COPPER_GOLEM_STATUE_BREAK() */
    public static function COPPER_GOLEM_STATUE_BREAK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.copper_golem_statue.break')); }
    /** [block] block.copper_golem_statue.hit */
    public static function BLOCK_COPPER_GOLEM_STATUE_HIT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.copper_golem_statue.hit')); }
    /** [block] block.copper_golem_statue.hit @see self::BLOCK_COPPER_GOLEM_STATUE_HIT() */
    public static function COPPER_GOLEM_STATUE_HIT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.copper_golem_statue.hit')); }
    /** [block] block.copper_golem_statue.place */
    public static function BLOCK_COPPER_GOLEM_STATUE_PLACE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.copper_golem_statue.place')); }
    /** [block] block.copper_golem_statue.place @see self::BLOCK_COPPER_GOLEM_STATUE_PLACE() */
    public static function COPPER_GOLEM_STATUE_PLACE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.copper_golem_statue.place')); }
    /** [block] block.creaking_heart.ambient */
    public static function BLOCK_CREAKING_HEART_AMBIENT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.creaking_heart.ambient')); }
    /** [block] block.creaking_heart.ambient @see self::BLOCK_CREAKING_HEART_AMBIENT() */
    public static function CREAKING_HEART_AMBIENT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.creaking_heart.ambient')); }
    /** [block] block.creaking_heart.break */
    public static function BLOCK_CREAKING_HEART_BREAK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.creaking_heart.break')); }
    /** [block] block.creaking_heart.break @see self::BLOCK_CREAKING_HEART_BREAK() */
    public static function CREAKING_HEART_BREAK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.creaking_heart.break')); }
    /** [block] block.creaking_heart.hit */
    public static function BLOCK_CREAKING_HEART_HIT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.creaking_heart.hit')); }
    /** [block] block.creaking_heart.hit @see self::BLOCK_CREAKING_HEART_HIT() */
    public static function CREAKING_HEART_HIT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.creaking_heart.hit')); }
    /** [block] block.creaking_heart.place */
    public static function BLOCK_CREAKING_HEART_PLACE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.creaking_heart.place')); }
    /** [block] block.creaking_heart.place @see self::BLOCK_CREAKING_HEART_PLACE() */
    public static function CREAKING_HEART_PLACE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.creaking_heart.place')); }
    /** [block] block.creaking_heart.spawn_mob */
    public static function BLOCK_CREAKING_HEART_SPAWN_MOB() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.creaking_heart.spawn_mob')); }
    /** [block] block.creaking_heart.spawn_mob @see self::BLOCK_CREAKING_HEART_SPAWN_MOB() */
    public static function CREAKING_HEART_SPAWN_MOB() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.creaking_heart.spawn_mob')); }
    /** [block] block.creaking_heart.trail */
    public static function BLOCK_CREAKING_HEART_TRAIL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.creaking_heart.trail')); }
    /** [block] block.creaking_heart.trail @see self::BLOCK_CREAKING_HEART_TRAIL() */
    public static function CREAKING_HEART_TRAIL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.creaking_heart.trail')); }
    /** [block] block.deadbush.ambient */
    public static function BLOCK_DEADBUSH_AMBIENT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.deadbush.ambient')); }
    /** [block] block.deadbush.ambient @see self::BLOCK_DEADBUSH_AMBIENT() */
    public static function DEADBUSH_AMBIENT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.deadbush.ambient')); }
    /** [block] block.decorated_pot.insert */
    public static function BLOCK_DECORATED_POT_INSERT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.decorated_pot.insert')); }
    /** [block] block.decorated_pot.insert @see self::BLOCK_DECORATED_POT_INSERT() */
    public static function DECORATED_POT_INSERT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.decorated_pot.insert')); }
    /** [block] block.decorated_pot.insert_fail */
    public static function BLOCK_DECORATED_POT_INSERT_FAIL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.decorated_pot.insert_fail')); }
    /** [block] block.decorated_pot.insert_fail @see self::BLOCK_DECORATED_POT_INSERT_FAIL() */
    public static function DECORATED_POT_INSERT_FAIL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.decorated_pot.insert_fail')); }
    /** [block] block.dried_ghast.ambient */
    public static function BLOCK_DRIED_GHAST_AMBIENT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.dried_ghast.ambient')); }
    /** [block] block.dried_ghast.ambient @see self::BLOCK_DRIED_GHAST_AMBIENT() */
    public static function DRIED_GHAST_AMBIENT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.dried_ghast.ambient')); }
    /** [block] block.dried_ghast.ambient_water */
    public static function BLOCK_DRIED_GHAST_AMBIENT_WATER() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.dried_ghast.ambient_water')); }
    /** [block] block.dried_ghast.ambient_water @see self::BLOCK_DRIED_GHAST_AMBIENT_WATER() */
    public static function DRIED_GHAST_AMBIENT_WATER() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.dried_ghast.ambient_water')); }
    /** [block] block.dried_ghast.break */
    public static function BLOCK_DRIED_GHAST_BREAK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.dried_ghast.break')); }
    /** [block] block.dried_ghast.break @see self::BLOCK_DRIED_GHAST_BREAK() */
    public static function DRIED_GHAST_BREAK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.dried_ghast.break')); }
    /** [block] block.dried_ghast.place */
    public static function BLOCK_DRIED_GHAST_PLACE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.dried_ghast.place')); }
    /** [block] block.dried_ghast.place @see self::BLOCK_DRIED_GHAST_PLACE() */
    public static function DRIED_GHAST_PLACE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.dried_ghast.place')); }
    /** [block] block.dried_ghast.place_in_water */
    public static function BLOCK_DRIED_GHAST_PLACE_IN_WATER() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.dried_ghast.place_in_water')); }
    /** [block] block.dried_ghast.place_in_water @see self::BLOCK_DRIED_GHAST_PLACE_IN_WATER() */
    public static function DRIED_GHAST_PLACE_IN_WATER() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.dried_ghast.place_in_water')); }
    /** [block] block.dried_ghast.state_change */
    public static function BLOCK_DRIED_GHAST_STATE_CHANGE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.dried_ghast.state_change')); }
    /** [block] block.dried_ghast.state_change @see self::BLOCK_DRIED_GHAST_STATE_CHANGE() */
    public static function DRIED_GHAST_STATE_CHANGE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.dried_ghast.state_change')); }
    /** [block] block.dry_grass.ambient.attached */
    public static function BLOCK_DRY_GRASS_AMBIENT_ATTACHED() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.dry_grass.ambient.attached')); }
    /** [block] block.dry_grass.ambient.attached @see self::BLOCK_DRY_GRASS_AMBIENT_ATTACHED() */
    public static function DRY_GRASS_AMBIENT_ATTACHED() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.dry_grass.ambient.attached')); }
    /** [block] block.enchanting_table.use */
    public static function BLOCK_ENCHANTING_TABLE_USE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.enchanting_table.use')); }
    /** [block] block.enchanting_table.use @see self::BLOCK_ENCHANTING_TABLE_USE() */
    public static function ENCHANTING_TABLE_USE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.enchanting_table.use')); }
    /** [block] block.end_portal.spawn */
    public static function BLOCK_END_PORTAL_SPAWN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.end_portal.spawn')); }
    /** [block] block.end_portal.spawn @see self::BLOCK_END_PORTAL_SPAWN() */
    public static function END_PORTAL_SPAWN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.end_portal.spawn')); }
    /** [block] block.end_portal_frame.fill */
    public static function BLOCK_END_PORTAL_FRAME_FILL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.end_portal_frame.fill')); }
    /** [block] block.end_portal_frame.fill @see self::BLOCK_END_PORTAL_FRAME_FILL() */
    public static function END_PORTAL_FRAME_FILL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.end_portal_frame.fill')); }
    /** [block] block.eyeblossom.ambient */
    public static function BLOCK_EYEBLOSSOM_AMBIENT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.eyeblossom.ambient')); }
    /** [block] block.eyeblossom.ambient @see self::BLOCK_EYEBLOSSOM_AMBIENT() */
    public static function EYEBLOSSOM_AMBIENT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.eyeblossom.ambient')); }
    /** [block] block.eyeblossom.close */
    public static function BLOCK_EYEBLOSSOM_CLOSE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.eyeblossom.close')); }
    /** [block] block.eyeblossom.close @see self::BLOCK_EYEBLOSSOM_CLOSE() */
    public static function EYEBLOSSOM_CLOSE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.eyeblossom.close')); }
    /** [block] block.eyeblossom.close_long */
    public static function BLOCK_EYEBLOSSOM_CLOSE_LONG() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.eyeblossom.close_long')); }
    /** [block] block.eyeblossom.close_long @see self::BLOCK_EYEBLOSSOM_CLOSE_LONG() */
    public static function EYEBLOSSOM_CLOSE_LONG() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.eyeblossom.close_long')); }
    /** [block] block.eyeblossom.open */
    public static function BLOCK_EYEBLOSSOM_OPEN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.eyeblossom.open')); }
    /** [block] block.eyeblossom.open @see self::BLOCK_EYEBLOSSOM_OPEN() */
    public static function EYEBLOSSOM_OPEN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.eyeblossom.open')); }
    /** [block] block.eyeblossom.open_long */
    public static function BLOCK_EYEBLOSSOM_OPEN_LONG() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.eyeblossom.open_long')); }
    /** [block] block.eyeblossom.open_long @see self::BLOCK_EYEBLOSSOM_OPEN_LONG() */
    public static function EYEBLOSSOM_OPEN_LONG() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.eyeblossom.open_long')); }
    /** [block] block.false_permissions */
    public static function BLOCK_FALSE_PERMISSIONS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.false_permissions')); }
    /** [block] block.false_permissions @see self::BLOCK_FALSE_PERMISSIONS() */
    public static function FALSE_PERMISSIONS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.false_permissions')); }
    /** [block] block.firefly_bush.ambient */
    public static function BLOCK_FIREFLY_BUSH_AMBIENT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.firefly_bush.ambient')); }
    /** [block] block.firefly_bush.ambient @see self::BLOCK_FIREFLY_BUSH_AMBIENT() */
    public static function FIREFLY_BUSH_AMBIENT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.firefly_bush.ambient')); }
    /** [block] block.furnace.lit */
    public static function BLOCK_FURNACE_LIT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.furnace.lit')); }
    /** [block] block.furnace.lit @see self::BLOCK_FURNACE_LIT() */
    public static function FURNACE_LIT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.furnace.lit')); }
    /** [block] block.grindstone.use */
    public static function BLOCK_GRINDSTONE_USE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.grindstone.use')); }
    /** [block] block.grindstone.use @see self::BLOCK_GRINDSTONE_USE() */
    public static function GRINDSTONE_USE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.grindstone.use')); }
    /** [block] block.itemframe.add_item */
    public static function BLOCK_ITEMFRAME_ADD_ITEM() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.itemframe.add_item')); }
    /** [block] block.itemframe.add_item @see self::BLOCK_ITEMFRAME_ADD_ITEM() */
    public static function ITEMFRAME_ADD_ITEM() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.itemframe.add_item')); }
    /** [block] block.itemframe.break */
    public static function BLOCK_ITEMFRAME_BREAK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.itemframe.break')); }
    /** [block] block.itemframe.break @see self::BLOCK_ITEMFRAME_BREAK() */
    public static function ITEMFRAME_BREAK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.itemframe.break')); }
    /** [block] block.itemframe.place */
    public static function BLOCK_ITEMFRAME_PLACE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.itemframe.place')); }
    /** [block] block.itemframe.place @see self::BLOCK_ITEMFRAME_PLACE() */
    public static function ITEMFRAME_PLACE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.itemframe.place')); }
    /** [block] block.itemframe.remove_item */
    public static function BLOCK_ITEMFRAME_REMOVE_ITEM() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.itemframe.remove_item')); }
    /** [block] block.itemframe.remove_item @see self::BLOCK_ITEMFRAME_REMOVE_ITEM() */
    public static function ITEMFRAME_REMOVE_ITEM() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.itemframe.remove_item')); }
    /** [block] block.itemframe.rotate_item */
    public static function BLOCK_ITEMFRAME_ROTATE_ITEM() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.itemframe.rotate_item')); }
    /** [block] block.itemframe.rotate_item @see self::BLOCK_ITEMFRAME_ROTATE_ITEM() */
    public static function ITEMFRAME_ROTATE_ITEM() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.itemframe.rotate_item')); }
    /** [block] block.lantern.break */
    public static function BLOCK_LANTERN_BREAK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.lantern.break')); }
    /** [block] block.lantern.break @see self::BLOCK_LANTERN_BREAK() */
    public static function LANTERN_BREAK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.lantern.break')); }
    /** [block] block.lantern.fall */
    public static function BLOCK_LANTERN_FALL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.lantern.fall')); }
    /** [block] block.lantern.fall @see self::BLOCK_LANTERN_FALL() */
    public static function LANTERN_FALL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.lantern.fall')); }
    /** [block] block.lantern.hit */
    public static function BLOCK_LANTERN_HIT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.lantern.hit')); }
    /** [block] block.lantern.hit @see self::BLOCK_LANTERN_HIT() */
    public static function LANTERN_HIT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.lantern.hit')); }
    /** [block] block.lantern.place */
    public static function BLOCK_LANTERN_PLACE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.lantern.place')); }
    /** [block] block.lantern.place @see self::BLOCK_LANTERN_PLACE() */
    public static function LANTERN_PLACE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.lantern.place')); }
    /** [block] block.lantern.step */
    public static function BLOCK_LANTERN_STEP() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.lantern.step')); }
    /** [block] block.lantern.step @see self::BLOCK_LANTERN_STEP() */
    public static function LANTERN_STEP() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.lantern.step')); }
    /** [block] block.leaf_litter.break */
    public static function BLOCK_LEAF_LITTER_BREAK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.leaf_litter.break')); }
    /** [block] block.leaf_litter.break @see self::BLOCK_LEAF_LITTER_BREAK() */
    public static function LEAF_LITTER_BREAK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.leaf_litter.break')); }
    /** [block] block.leaf_litter.place */
    public static function BLOCK_LEAF_LITTER_PLACE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.leaf_litter.place')); }
    /** [block] block.leaf_litter.place @see self::BLOCK_LEAF_LITTER_PLACE() */
    public static function LEAF_LITTER_PLACE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.leaf_litter.place')); }
    /** [block] block.loom.use */
    public static function BLOCK_LOOM_USE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.loom.use')); }
    /** [block] block.loom.use @see self::BLOCK_LOOM_USE() */
    public static function LOOM_USE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.loom.use')); }
    /** [block] block.mangrove_roots.break */
    public static function BLOCK_MANGROVE_ROOTS_BREAK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.mangrove_roots.break')); }
    /** [block] block.mangrove_roots.break @see self::BLOCK_MANGROVE_ROOTS_BREAK() */
    public static function MANGROVE_ROOTS_BREAK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.mangrove_roots.break')); }
    /** [block] block.mangrove_roots.fall */
    public static function BLOCK_MANGROVE_ROOTS_FALL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.mangrove_roots.fall')); }
    /** [block] block.mangrove_roots.fall @see self::BLOCK_MANGROVE_ROOTS_FALL() */
    public static function MANGROVE_ROOTS_FALL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.mangrove_roots.fall')); }
    /** [block] block.mangrove_roots.hit */
    public static function BLOCK_MANGROVE_ROOTS_HIT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.mangrove_roots.hit')); }
    /** [block] block.mangrove_roots.hit @see self::BLOCK_MANGROVE_ROOTS_HIT() */
    public static function MANGROVE_ROOTS_HIT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.mangrove_roots.hit')); }
    /** [block] block.mangrove_roots.place */
    public static function BLOCK_MANGROVE_ROOTS_PLACE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.mangrove_roots.place')); }
    /** [block] block.mangrove_roots.place @see self::BLOCK_MANGROVE_ROOTS_PLACE() */
    public static function MANGROVE_ROOTS_PLACE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.mangrove_roots.place')); }
    /** [block] block.mangrove_roots.step */
    public static function BLOCK_MANGROVE_ROOTS_STEP() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.mangrove_roots.step')); }
    /** [block] block.mangrove_roots.step @see self::BLOCK_MANGROVE_ROOTS_STEP() */
    public static function MANGROVE_ROOTS_STEP() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.mangrove_roots.step')); }
    /** [block] block.mob_spawner.break */
    public static function BLOCK_MOB_SPAWNER_BREAK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.mob_spawner.break')); }
    /** [block] block.mob_spawner.break @see self::BLOCK_MOB_SPAWNER_BREAK() */
    public static function MOB_SPAWNER_BREAK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.mob_spawner.break')); }
    /** [block] block.mob_spawner.step */
    public static function BLOCK_MOB_SPAWNER_STEP() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.mob_spawner.step')); }
    /** [block] block.mob_spawner.step @see self::BLOCK_MOB_SPAWNER_STEP() */
    public static function MOB_SPAWNER_STEP() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.mob_spawner.step')); }
    /** [block] block.mud.break */
    public static function BLOCK_MUD_BREAK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.mud.break')); }
    /** [block] block.mud.break @see self::BLOCK_MUD_BREAK() */
    public static function MUD_BREAK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.mud.break')); }
    /** [block] block.mud.fall */
    public static function BLOCK_MUD_FALL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.mud.fall')); }
    /** [block] block.mud.fall @see self::BLOCK_MUD_FALL() */
    public static function MUD_FALL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.mud.fall')); }
    /** [block] block.mud.hit */
    public static function BLOCK_MUD_HIT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.mud.hit')); }
    /** [block] block.mud.hit @see self::BLOCK_MUD_HIT() */
    public static function MUD_HIT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.mud.hit')); }
    /** [block] block.mud.place */
    public static function BLOCK_MUD_PLACE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.mud.place')); }
    /** [block] block.mud.place @see self::BLOCK_MUD_PLACE() */
    public static function MUD_PLACE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.mud.place')); }
    /** [block] block.mud.step */
    public static function BLOCK_MUD_STEP() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.mud.step')); }
    /** [block] block.mud.step @see self::BLOCK_MUD_STEP() */
    public static function MUD_STEP() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.mud.step')); }
    /** [block] block.mud_bricks.break */
    public static function BLOCK_MUD_BRICKS_BREAK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.mud_bricks.break')); }
    /** [block] block.mud_bricks.break @see self::BLOCK_MUD_BRICKS_BREAK() */
    public static function MUD_BRICKS_BREAK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.mud_bricks.break')); }
    /** [block] block.mud_bricks.fall */
    public static function BLOCK_MUD_BRICKS_FALL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.mud_bricks.fall')); }
    /** [block] block.mud_bricks.fall @see self::BLOCK_MUD_BRICKS_FALL() */
    public static function MUD_BRICKS_FALL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.mud_bricks.fall')); }
    /** [block] block.mud_bricks.hit */
    public static function BLOCK_MUD_BRICKS_HIT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.mud_bricks.hit')); }
    /** [block] block.mud_bricks.hit @see self::BLOCK_MUD_BRICKS_HIT() */
    public static function MUD_BRICKS_HIT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.mud_bricks.hit')); }
    /** [block] block.mud_bricks.place */
    public static function BLOCK_MUD_BRICKS_PLACE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.mud_bricks.place')); }
    /** [block] block.mud_bricks.place @see self::BLOCK_MUD_BRICKS_PLACE() */
    public static function MUD_BRICKS_PLACE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.mud_bricks.place')); }
    /** [block] block.mud_bricks.step */
    public static function BLOCK_MUD_BRICKS_STEP() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.mud_bricks.step')); }
    /** [block] block.mud_bricks.step @see self::BLOCK_MUD_BRICKS_STEP() */
    public static function MUD_BRICKS_STEP() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.mud_bricks.step')); }
    /** [block] block.muddy_mangrove_roots.break */
    public static function BLOCK_MUDDY_MANGROVE_ROOTS_BREAK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.muddy_mangrove_roots.break')); }
    /** [block] block.muddy_mangrove_roots.break @see self::BLOCK_MUDDY_MANGROVE_ROOTS_BREAK() */
    public static function MUDDY_MANGROVE_ROOTS_BREAK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.muddy_mangrove_roots.break')); }
    /** [block] block.muddy_mangrove_roots.fall */
    public static function BLOCK_MUDDY_MANGROVE_ROOTS_FALL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.muddy_mangrove_roots.fall')); }
    /** [block] block.muddy_mangrove_roots.fall @see self::BLOCK_MUDDY_MANGROVE_ROOTS_FALL() */
    public static function MUDDY_MANGROVE_ROOTS_FALL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.muddy_mangrove_roots.fall')); }
    /** [block] block.muddy_mangrove_roots.hit */
    public static function BLOCK_MUDDY_MANGROVE_ROOTS_HIT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.muddy_mangrove_roots.hit')); }
    /** [block] block.muddy_mangrove_roots.hit @see self::BLOCK_MUDDY_MANGROVE_ROOTS_HIT() */
    public static function MUDDY_MANGROVE_ROOTS_HIT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.muddy_mangrove_roots.hit')); }
    /** [block] block.muddy_mangrove_roots.place */
    public static function BLOCK_MUDDY_MANGROVE_ROOTS_PLACE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.muddy_mangrove_roots.place')); }
    /** [block] block.muddy_mangrove_roots.place @see self::BLOCK_MUDDY_MANGROVE_ROOTS_PLACE() */
    public static function MUDDY_MANGROVE_ROOTS_PLACE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.muddy_mangrove_roots.place')); }
    /** [block] block.muddy_mangrove_roots.step */
    public static function BLOCK_MUDDY_MANGROVE_ROOTS_STEP() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.muddy_mangrove_roots.step')); }
    /** [block] block.muddy_mangrove_roots.step @see self::BLOCK_MUDDY_MANGROVE_ROOTS_STEP() */
    public static function MUDDY_MANGROVE_ROOTS_STEP() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.muddy_mangrove_roots.step')); }
    /** [block] block.packed_mud.break */
    public static function BLOCK_PACKED_MUD_BREAK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.packed_mud.break')); }
    /** [block] block.packed_mud.break @see self::BLOCK_PACKED_MUD_BREAK() */
    public static function PACKED_MUD_BREAK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.packed_mud.break')); }
    /** [block] block.packed_mud.fall */
    public static function BLOCK_PACKED_MUD_FALL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.packed_mud.fall')); }
    /** [block] block.packed_mud.fall @see self::BLOCK_PACKED_MUD_FALL() */
    public static function PACKED_MUD_FALL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.packed_mud.fall')); }
    /** [block] block.packed_mud.hit */
    public static function BLOCK_PACKED_MUD_HIT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.packed_mud.hit')); }
    /** [block] block.packed_mud.hit @see self::BLOCK_PACKED_MUD_HIT() */
    public static function PACKED_MUD_HIT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.packed_mud.hit')); }
    /** [block] block.packed_mud.place */
    public static function BLOCK_PACKED_MUD_PLACE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.packed_mud.place')); }
    /** [block] block.packed_mud.place @see self::BLOCK_PACKED_MUD_PLACE() */
    public static function PACKED_MUD_PLACE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.packed_mud.place')); }
    /** [block] block.packed_mud.step */
    public static function BLOCK_PACKED_MUD_STEP() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.packed_mud.step')); }
    /** [block] block.packed_mud.step @see self::BLOCK_PACKED_MUD_STEP() */
    public static function PACKED_MUD_STEP() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.packed_mud.step')); }
    /** [block] block.pale_hanging_moss.ambient */
    public static function BLOCK_PALE_HANGING_MOSS_AMBIENT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.pale_hanging_moss.ambient')); }
    /** [block] block.pale_hanging_moss.ambient @see self::BLOCK_PALE_HANGING_MOSS_AMBIENT() */
    public static function PALE_HANGING_MOSS_AMBIENT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.pale_hanging_moss.ambient')); }
    /** [block] block.resin.break */
    public static function BLOCK_RESIN_BREAK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.resin.break')); }
    /** [block] block.resin.break @see self::BLOCK_RESIN_BREAK() */
    public static function RESIN_BREAK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.resin.break')); }
    /** [block] block.resin.hit */
    public static function BLOCK_RESIN_HIT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.resin.hit')); }
    /** [block] block.resin.hit @see self::BLOCK_RESIN_HIT() */
    public static function RESIN_HIT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.resin.hit')); }
    /** [block] block.resin.place */
    public static function BLOCK_RESIN_PLACE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.resin.place')); }
    /** [block] block.resin.place @see self::BLOCK_RESIN_PLACE() */
    public static function RESIN_PLACE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.resin.place')); }
    /** [block] block.resin_brick.break */
    public static function BLOCK_RESIN_BRICK_BREAK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.resin_brick.break')); }
    /** [block] block.resin_brick.break @see self::BLOCK_RESIN_BRICK_BREAK() */
    public static function RESIN_BRICK_BREAK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.resin_brick.break')); }
    /** [block] block.resin_brick.hit */
    public static function BLOCK_RESIN_BRICK_HIT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.resin_brick.hit')); }
    /** [block] block.resin_brick.hit @see self::BLOCK_RESIN_BRICK_HIT() */
    public static function RESIN_BRICK_HIT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.resin_brick.hit')); }
    /** [block] block.resin_brick.place */
    public static function BLOCK_RESIN_BRICK_PLACE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.resin_brick.place')); }
    /** [block] block.resin_brick.place @see self::BLOCK_RESIN_BRICK_PLACE() */
    public static function RESIN_BRICK_PLACE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.resin_brick.place')); }
    /** [block] block.sand.ambient */
    public static function BLOCK_SAND_AMBIENT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.sand.ambient')); }
    /** [block] block.sand.ambient @see self::BLOCK_SAND_AMBIENT() */
    public static function SAND_AMBIENT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.sand.ambient')); }
    /** [block] block.scaffolding.break */
    public static function BLOCK_SCAFFOLDING_BREAK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.scaffolding.break')); }
    /** [block] block.scaffolding.break @see self::BLOCK_SCAFFOLDING_BREAK() */
    public static function SCAFFOLDING_BREAK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.scaffolding.break')); }
    /** [block] block.scaffolding.climb */
    public static function BLOCK_SCAFFOLDING_CLIMB() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.scaffolding.climb')); }
    /** [block] block.scaffolding.climb @see self::BLOCK_SCAFFOLDING_CLIMB() */
    public static function SCAFFOLDING_CLIMB() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.scaffolding.climb')); }
    /** [block] block.scaffolding.fall */
    public static function BLOCK_SCAFFOLDING_FALL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.scaffolding.fall')); }
    /** [block] block.scaffolding.fall @see self::BLOCK_SCAFFOLDING_FALL() */
    public static function SCAFFOLDING_FALL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.scaffolding.fall')); }
    /** [block] block.scaffolding.hit */
    public static function BLOCK_SCAFFOLDING_HIT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.scaffolding.hit')); }
    /** [block] block.scaffolding.hit @see self::BLOCK_SCAFFOLDING_HIT() */
    public static function SCAFFOLDING_HIT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.scaffolding.hit')); }
    /** [block] block.scaffolding.place */
    public static function BLOCK_SCAFFOLDING_PLACE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.scaffolding.place')); }
    /** [block] block.scaffolding.place @see self::BLOCK_SCAFFOLDING_PLACE() */
    public static function SCAFFOLDING_PLACE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.scaffolding.place')); }
    /** [block] block.scaffolding.step */
    public static function BLOCK_SCAFFOLDING_STEP() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.scaffolding.step')); }
    /** [block] block.scaffolding.step @see self::BLOCK_SCAFFOLDING_STEP() */
    public static function SCAFFOLDING_STEP() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.scaffolding.step')); }
    /** [block] block.shelf.activate */
    public static function BLOCK_SHELF_ACTIVATE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.shelf.activate')); }
    /** [block] block.shelf.activate @see self::BLOCK_SHELF_ACTIVATE() */
    public static function SHELF_ACTIVATE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.shelf.activate')); }
    /** [block] block.shelf.break */
    public static function BLOCK_SHELF_BREAK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.shelf.break')); }
    /** [block] block.shelf.break @see self::BLOCK_SHELF_BREAK() */
    public static function SHELF_BREAK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.shelf.break')); }
    /** [block] block.shelf.deactivate */
    public static function BLOCK_SHELF_DEACTIVATE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.shelf.deactivate')); }
    /** [block] block.shelf.deactivate @see self::BLOCK_SHELF_DEACTIVATE() */
    public static function SHELF_DEACTIVATE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.shelf.deactivate')); }
    /** [block] block.shelf.multi_swap */
    public static function BLOCK_SHELF_MULTI_SWAP() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.shelf.multi_swap')); }
    /** [block] block.shelf.multi_swap @see self::BLOCK_SHELF_MULTI_SWAP() */
    public static function SHELF_MULTI_SWAP() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.shelf.multi_swap')); }
    /** [block] block.shelf.open */
    public static function BLOCK_SHELF_OPEN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.shelf.open')); }
    /** [block] block.shelf.open @see self::BLOCK_SHELF_OPEN() */
    public static function SHELF_OPEN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.shelf.open')); }
    /** [block] block.shelf.place_item */
    public static function BLOCK_SHELF_PLACE_ITEM() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.shelf.place_item')); }
    /** [block] block.shelf.place_item @see self::BLOCK_SHELF_PLACE_ITEM() */
    public static function SHELF_PLACE_ITEM() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.shelf.place_item')); }
    /** [block] block.shelf.single_swap */
    public static function BLOCK_SHELF_SINGLE_SWAP() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.shelf.single_swap')); }
    /** [block] block.shelf.single_swap @see self::BLOCK_SHELF_SINGLE_SWAP() */
    public static function SHELF_SINGLE_SWAP() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.shelf.single_swap')); }
    /** [block] block.sign.waxed_interact_fail */
    public static function BLOCK_SIGN_WAXED_INTERACT_FAIL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.sign.waxed_interact_fail')); }
    /** [block] block.sign.waxed_interact_fail @see self::BLOCK_SIGN_WAXED_INTERACT_FAIL() */
    public static function SIGN_WAXED_INTERACT_FAIL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.sign.waxed_interact_fail')); }
    /** [block] block.smoker.smoke */
    public static function BLOCK_SMOKER_SMOKE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.smoker.smoke')); }
    /** [block] block.smoker.smoke @see self::BLOCK_SMOKER_SMOKE() */
    public static function SMOKER_SMOKE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.smoker.smoke')); }
    /** [block] block.sniffer_egg.crack */
    public static function BLOCK_SNIFFER_EGG_CRACK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.sniffer_egg.crack')); }
    /** [block] block.sniffer_egg.crack @see self::BLOCK_SNIFFER_EGG_CRACK() */
    public static function SNIFFER_EGG_CRACK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.sniffer_egg.crack')); }
    /** [block] block.sniffer_egg.hatch */
    public static function BLOCK_SNIFFER_EGG_HATCH() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.sniffer_egg.hatch')); }
    /** [block] block.sniffer_egg.hatch @see self::BLOCK_SNIFFER_EGG_HATCH() */
    public static function SNIFFER_EGG_HATCH() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.sniffer_egg.hatch')); }
    /** [block] block.stonecutter.use */
    public static function BLOCK_STONECUTTER_USE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.stonecutter.use')); }
    /** [block] block.stonecutter.use @see self::BLOCK_STONECUTTER_USE() */
    public static function STONECUTTER_USE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.stonecutter.use')); }
    /** [block] block.sweet_berry_bush.break */
    public static function BLOCK_SWEET_BERRY_BUSH_BREAK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.sweet_berry_bush.break')); }
    /** [block] block.sweet_berry_bush.break @see self::BLOCK_SWEET_BERRY_BUSH_BREAK() */
    public static function SWEET_BERRY_BUSH_BREAK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.sweet_berry_bush.break')); }
    /** [block] block.sweet_berry_bush.hurt */
    public static function BLOCK_SWEET_BERRY_BUSH_HURT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.sweet_berry_bush.hurt')); }
    /** [block] block.sweet_berry_bush.hurt @see self::BLOCK_SWEET_BERRY_BUSH_HURT() */
    public static function SWEET_BERRY_BUSH_HURT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.sweet_berry_bush.hurt')); }
    /** [block] block.sweet_berry_bush.pick */
    public static function BLOCK_SWEET_BERRY_BUSH_PICK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.sweet_berry_bush.pick')); }
    /** [block] block.sweet_berry_bush.pick @see self::BLOCK_SWEET_BERRY_BUSH_PICK() */
    public static function SWEET_BERRY_BUSH_PICK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.sweet_berry_bush.pick')); }
    /** [block] block.sweet_berry_bush.place */
    public static function BLOCK_SWEET_BERRY_BUSH_PLACE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.sweet_berry_bush.place')); }
    /** [block] block.sweet_berry_bush.place @see self::BLOCK_SWEET_BERRY_BUSH_PLACE() */
    public static function SWEET_BERRY_BUSH_PLACE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.sweet_berry_bush.place')); }
    /** [block] block.turtle_egg.break */
    public static function BLOCK_TURTLE_EGG_BREAK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.turtle_egg.break')); }
    /** [block] block.turtle_egg.break @see self::BLOCK_TURTLE_EGG_BREAK() */
    public static function TURTLE_EGG_BREAK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.turtle_egg.break')); }
    /** [block] block.turtle_egg.crack */
    public static function BLOCK_TURTLE_EGG_CRACK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.turtle_egg.crack')); }
    /** [block] block.turtle_egg.crack @see self::BLOCK_TURTLE_EGG_CRACK() */
    public static function TURTLE_EGG_CRACK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.turtle_egg.crack')); }
    /** [block] block.turtle_egg.drop */
    public static function BLOCK_TURTLE_EGG_DROP() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.turtle_egg.drop')); }
    /** [block] block.turtle_egg.drop @see self::BLOCK_TURTLE_EGG_DROP() */
    public static function TURTLE_EGG_DROP() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.turtle_egg.drop')); }
    /** [block] block.weeping_vines.break */
    public static function BLOCK_WEEPING_VINES_BREAK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.weeping_vines.break')); }
    /** [block] block.weeping_vines.break @see self::BLOCK_WEEPING_VINES_BREAK() */
    public static function WEEPING_VINES_BREAK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.weeping_vines.break')); }
    /** [block] block.weeping_vines.hit */
    public static function BLOCK_WEEPING_VINES_HIT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.weeping_vines.hit')); }
    /** [block] block.weeping_vines.hit @see self::BLOCK_WEEPING_VINES_HIT() */
    public static function WEEPING_VINES_HIT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.weeping_vines.hit')); }
    /** [block] block.weeping_vines.place */
    public static function BLOCK_WEEPING_VINES_PLACE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.weeping_vines.place')); }
    /** [block] block.weeping_vines.place @see self::BLOCK_WEEPING_VINES_PLACE() */
    public static function WEEPING_VINES_PLACE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.weeping_vines.place')); }
    /** [block] block.weeping_vines.use */
    public static function BLOCK_WEEPING_VINES_USE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.weeping_vines.use')); }
    /** [block] block.weeping_vines.use @see self::BLOCK_WEEPING_VINES_USE() */
    public static function WEEPING_VINES_USE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.weeping_vines.use')); }
    /** [block] bloom.sculk_catalyst */
    public static function BLOOM_SCULK_CATALYST() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('bloom.sculk_catalyst')); }
    /** [block] bloom.sculk_catalyst @see self::BLOOM_SCULK_CATALYST() */
    public static function SCULK_CATALYST() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('bloom.sculk_catalyst')); }
    /** [block] break.amethyst_block */
    public static function BREAK_AMETHYST_BLOCK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.amethyst_block')); }
    /** [block] break.amethyst_block @see self::BREAK_AMETHYST_BLOCK() */
    public static function AMETHYST_BLOCK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.amethyst_block')); }
    /** [block] break.amethyst_cluster */
    public static function BREAK_AMETHYST_CLUSTER() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.amethyst_cluster')); }
    /** [block] break.amethyst_cluster @see self::BREAK_AMETHYST_CLUSTER() */
    public static function AMETHYST_CLUSTER() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.amethyst_cluster')); }
    /** [block] break.azalea */
    public static function BREAK_AZALEA() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.azalea')); }
    /** [block] break.azalea @see self::BREAK_AZALEA() */
    public static function AZALEA() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.azalea')); }
    /** [block] break.bamboo_wood */
    public static function BREAK_BAMBOO_WOOD() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.bamboo_wood')); }
    /** [block] break.bamboo_wood @see self::BREAK_BAMBOO_WOOD() */
    public static function BAMBOO_WOOD() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.bamboo_wood')); }
    /** [block] break.bamboo_wood_hanging_sign */
    public static function BREAK_BAMBOO_WOOD_HANGING_SIGN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.bamboo_wood_hanging_sign')); }
    /** [block] break.bamboo_wood_hanging_sign @see self::BREAK_BAMBOO_WOOD_HANGING_SIGN() */
    public static function BAMBOO_WOOD_HANGING_SIGN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.bamboo_wood_hanging_sign')); }
    /** [block] break.big_dripleaf */
    public static function BREAK_BIG_DRIPLEAF() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.big_dripleaf')); }
    /** [block] break.big_dripleaf @see self::BREAK_BIG_DRIPLEAF() */
    public static function BIG_DRIPLEAF() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.big_dripleaf')); }
    /** [block] break.calcite */
    public static function BREAK_CALCITE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.calcite')); }
    /** [block] break.calcite @see self::BREAK_CALCITE() */
    public static function CALCITE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.calcite')); }
    /** [block] break.cherry_leaves */
    public static function BREAK_CHERRY_LEAVES() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.cherry_leaves')); }
    /** [block] break.cherry_leaves @see self::BREAK_CHERRY_LEAVES() */
    public static function CHERRY_LEAVES() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.cherry_leaves')); }
    /** [block] break.cherry_wood */
    public static function BREAK_CHERRY_WOOD() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.cherry_wood')); }
    /** [block] break.cherry_wood @see self::BREAK_CHERRY_WOOD() */
    public static function CHERRY_WOOD() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.cherry_wood')); }
    /** [block] break.cherry_wood_hanging_sign */
    public static function BREAK_CHERRY_WOOD_HANGING_SIGN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.cherry_wood_hanging_sign')); }
    /** [block] break.cherry_wood_hanging_sign @see self::BREAK_CHERRY_WOOD_HANGING_SIGN() */
    public static function CHERRY_WOOD_HANGING_SIGN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.cherry_wood_hanging_sign')); }
    /** [block] break.chiseled_bookshelf */
    public static function BREAK_CHISELED_BOOKSHELF() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.chiseled_bookshelf')); }
    /** [block] break.chiseled_bookshelf @see self::BREAK_CHISELED_BOOKSHELF() */
    public static function CHISELED_BOOKSHELF() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.chiseled_bookshelf')); }
    /** [block] break.copper_bulb */
    public static function BREAK_COPPER_BULB() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.copper_bulb')); }
    /** [block] break.copper_bulb @see self::BREAK_COPPER_BULB() */
    public static function COPPER_BULB() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.copper_bulb')); }
    /** [block] break.copper_grate */
    public static function BREAK_COPPER_GRATE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.copper_grate')); }
    /** [block] break.copper_grate @see self::BREAK_COPPER_GRATE() */
    public static function COPPER_GRATE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.copper_grate')); }
    /** [block] break.decorated_pot */
    public static function BREAK_DECORATED_POT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.decorated_pot')); }
    /** [block] break.decorated_pot @see self::BREAK_DECORATED_POT() */
    public static function DECORATED_POT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.decorated_pot')); }
    /** [block] break.dirt_with_roots */
    public static function BREAK_DIRT_WITH_ROOTS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.dirt_with_roots')); }
    /** [block] break.dirt_with_roots @see self::BREAK_DIRT_WITH_ROOTS() */
    public static function DIRT_WITH_ROOTS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.dirt_with_roots')); }
    /** [block] break.dripstone_block */
    public static function BREAK_DRIPSTONE_BLOCK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.dripstone_block')); }
    /** [block] break.dripstone_block @see self::BREAK_DRIPSTONE_BLOCK() */
    public static function DRIPSTONE_BLOCK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.dripstone_block')); }
    /** [block] break.frog_spawn */
    public static function BREAK_FROG_SPAWN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.frog_spawn')); }
    /** [block] break.frog_spawn @see self::BREAK_FROG_SPAWN() */
    public static function FROG_SPAWN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.frog_spawn')); }
    /** [block] break.froglight */
    public static function BREAK_FROGLIGHT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.froglight')); }
    /** [block] break.froglight @see self::BREAK_FROGLIGHT() */
    public static function FROGLIGHT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.froglight')); }
    /** [block] break.hanging_roots */
    public static function BREAK_HANGING_ROOTS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.hanging_roots')); }
    /** [block] break.hanging_roots @see self::BREAK_HANGING_ROOTS() */
    public static function HANGING_ROOTS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.hanging_roots')); }
    /** [block] break.hanging_sign */
    public static function BREAK_HANGING_SIGN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.hanging_sign')); }
    /** [block] break.hanging_sign @see self::BREAK_HANGING_SIGN() */
    public static function HANGING_SIGN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.hanging_sign')); }
    /** [block] break.heavy_core */
    public static function BREAK_HEAVY_CORE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.heavy_core')); }
    /** [block] break.heavy_core @see self::BREAK_HEAVY_CORE() */
    public static function HEAVY_CORE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.heavy_core')); }
    /** [block] break.iron */
    public static function BREAK_IRON() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.iron')); }
    /** [block] break.iron @see self::BREAK_IRON() */
    public static function IRON() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.iron')); }
    /** [block] break.large_amethyst_bud */
    public static function BREAK_LARGE_AMETHYST_BUD() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.large_amethyst_bud')); }
    /** [block] break.large_amethyst_bud @see self::BREAK_LARGE_AMETHYST_BUD() */
    public static function LARGE_AMETHYST_BUD() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.large_amethyst_bud')); }
    /** [block] break.medium_amethyst_bud */
    public static function BREAK_MEDIUM_AMETHYST_BUD() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.medium_amethyst_bud')); }
    /** [block] break.medium_amethyst_bud @see self::BREAK_MEDIUM_AMETHYST_BUD() */
    public static function MEDIUM_AMETHYST_BUD() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.medium_amethyst_bud')); }
    /** [block] break.nether_wood */
    public static function BREAK_NETHER_WOOD() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.nether_wood')); }
    /** [block] break.nether_wood @see self::BREAK_NETHER_WOOD() */
    public static function NETHER_WOOD() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.nether_wood')); }
    /** [block] break.nether_wood_hanging_sign */
    public static function BREAK_NETHER_WOOD_HANGING_SIGN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.nether_wood_hanging_sign')); }
    /** [block] break.nether_wood_hanging_sign @see self::BREAK_NETHER_WOOD_HANGING_SIGN() */
    public static function NETHER_WOOD_HANGING_SIGN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.nether_wood_hanging_sign')); }
    /** [block] break.pink_petals */
    public static function BREAK_PINK_PETALS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.pink_petals')); }
    /** [block] break.pink_petals @see self::BREAK_PINK_PETALS() */
    public static function PINK_PETALS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.pink_petals')); }
    /** [block] break.pointed_dripstone */
    public static function BREAK_POINTED_DRIPSTONE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.pointed_dripstone')); }
    /** [block] break.pointed_dripstone @see self::BREAK_POINTED_DRIPSTONE() */
    public static function POINTED_DRIPSTONE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.pointed_dripstone')); }
    /** [block] break.sculk */
    public static function BREAK_SCULK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.sculk')); }
    /** [block] break.sculk @see self::BREAK_SCULK() */
    public static function SCULK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.sculk')); }
    /** [block] break.sculk_catalyst */
    public static function BREAK_SCULK_CATALYST() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.sculk_catalyst')); }
    /** [block] break.sculk_sensor */
    public static function BREAK_SCULK_SENSOR() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.sculk_sensor')); }
    /** [block] break.sculk_sensor @see self::BREAK_SCULK_SENSOR() */
    public static function SCULK_SENSOR() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.sculk_sensor')); }
    /** [block] break.sculk_shrieker */
    public static function BREAK_SCULK_SHRIEKER() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.sculk_shrieker')); }
    /** [block] break.sculk_shrieker @see self::BREAK_SCULK_SHRIEKER() */
    public static function SCULK_SHRIEKER() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.sculk_shrieker')); }
    /** [block] break.sculk_vein */
    public static function BREAK_SCULK_VEIN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.sculk_vein')); }
    /** [block] break.sculk_vein @see self::BREAK_SCULK_VEIN() */
    public static function SCULK_VEIN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.sculk_vein')); }
    /** [block] break.small_amethyst_bud */
    public static function BREAK_SMALL_AMETHYST_BUD() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.small_amethyst_bud')); }
    /** [block] break.small_amethyst_bud @see self::BREAK_SMALL_AMETHYST_BUD() */
    public static function SMALL_AMETHYST_BUD() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.small_amethyst_bud')); }
    /** [block] break.sponge */
    public static function BREAK_SPONGE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.sponge')); }
    /** [block] break.sponge @see self::BREAK_SPONGE() */
    public static function SPONGE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.sponge')); }
    /** [block] break.spore_blossom */
    public static function BREAK_SPORE_BLOSSOM() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.spore_blossom')); }
    /** [block] break.spore_blossom @see self::BREAK_SPORE_BLOSSOM() */
    public static function SPORE_BLOSSOM() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.spore_blossom')); }
    /** [block] break.suspicious_gravel */
    public static function BREAK_SUSPICIOUS_GRAVEL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.suspicious_gravel')); }
    /** [block] break.suspicious_gravel @see self::BREAK_SUSPICIOUS_GRAVEL() */
    public static function SUSPICIOUS_GRAVEL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.suspicious_gravel')); }
    /** [block] break.suspicious_sand */
    public static function BREAK_SUSPICIOUS_SAND() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.suspicious_sand')); }
    /** [block] break.suspicious_sand @see self::BREAK_SUSPICIOUS_SAND() */
    public static function SUSPICIOUS_SAND() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.suspicious_sand')); }
    /** [block] break.tuff */
    public static function BREAK_TUFF() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.tuff')); }
    /** [block] break.tuff @see self::BREAK_TUFF() */
    public static function TUFF() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.tuff')); }
    /** [block] break.web */
    public static function BREAK_WEB() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.web')); }
    /** [block] break.web @see self::BREAK_WEB() */
    public static function WEB() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.web')); }
    /** [block] break.wet_sponge */
    public static function BREAK_WET_SPONGE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.wet_sponge')); }
    /** [block] break.wet_sponge @see self::BREAK_WET_SPONGE() */
    public static function WET_SPONGE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('break.wet_sponge')); }
    /** [block] bubble.down */
    public static function BUBBLE_DOWN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('bubble.down')); }
    /** [block] bubble.down @see self::BUBBLE_DOWN() */
    public static function DOWN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('bubble.down')); }
    /** [block] bubble.downinside */
    public static function BUBBLE_DOWNINSIDE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('bubble.downinside')); }
    /** [block] bubble.downinside @see self::BUBBLE_DOWNINSIDE() */
    public static function DOWNINSIDE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('bubble.downinside')); }
    /** [block] bubble.pop */
    public static function BUBBLE_POP() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('bubble.pop')); }
    /** [block] bubble.pop @see self::BUBBLE_POP() */
    public static function POP() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('bubble.pop')); }
    /** [block] bubble.up */
    public static function BUBBLE_UP() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('bubble.up')); }
    /** [block] bubble.up @see self::BUBBLE_UP() */
    public static function UP() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('bubble.up')); }
    /** [block] bubble.upinside */
    public static function BUBBLE_UPINSIDE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('bubble.upinside')); }
    /** [block] bubble.upinside @see self::BUBBLE_UPINSIDE() */
    public static function UPINSIDE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('bubble.upinside')); }
    /** [block] bucket.empty_fish */
    public static function BUCKET_EMPTY_FISH() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('bucket.empty_fish')); }
    /** [block] bucket.empty_fish @see self::BUCKET_EMPTY_FISH() */
    public static function EMPTY_FISH() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('bucket.empty_fish')); }
    /** [block] bucket.empty_lava */
    public static function BUCKET_EMPTY_LAVA() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('bucket.empty_lava')); }
    /** [block] bucket.empty_lava @see self::BUCKET_EMPTY_LAVA() */
    public static function EMPTY_LAVA() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('bucket.empty_lava')); }
    /** [block] bucket.empty_powder_snow */
    public static function BUCKET_EMPTY_POWDER_SNOW() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('bucket.empty_powder_snow')); }
    /** [block] bucket.empty_powder_snow @see self::BUCKET_EMPTY_POWDER_SNOW() */
    public static function EMPTY_POWDER_SNOW() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('bucket.empty_powder_snow')); }
    /** [block] bucket.empty_water */
    public static function BUCKET_EMPTY_WATER() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('bucket.empty_water')); }
    /** [block] bucket.empty_water @see self::BUCKET_EMPTY_WATER() */
    public static function EMPTY_WATER() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('bucket.empty_water')); }
    /** [block] bucket.fill_fish */
    public static function BUCKET_FILL_FISH() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('bucket.fill_fish')); }
    /** [block] bucket.fill_fish @see self::BUCKET_FILL_FISH() */
    public static function FILL_FISH() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('bucket.fill_fish')); }
    /** [block] bucket.fill_lava */
    public static function BUCKET_FILL_LAVA() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('bucket.fill_lava')); }
    /** [block] bucket.fill_lava @see self::BUCKET_FILL_LAVA() */
    public static function FILL_LAVA() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('bucket.fill_lava')); }
    /** [block] bucket.fill_water */
    public static function BUCKET_FILL_WATER() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('bucket.fill_water')); }
    /** [block] bucket.fill_water @see self::BUCKET_FILL_WATER() */
    public static function FILL_WATER() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('bucket.fill_water')); }
    /** [block] cake.add_candle */
    public static function CAKE_ADD_CANDLE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('cake.add_candle')); }
    /** [block] cake.add_candle @see self::CAKE_ADD_CANDLE() */
    public static function ADD_CANDLE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('cake.add_candle')); }
    /** [block] cauldron.adddye */
    public static function CAULDRON_ADDDYE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('cauldron.adddye')); }
    /** [block] cauldron.adddye @see self::CAULDRON_ADDDYE() */
    public static function ADDDYE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('cauldron.adddye')); }
    /** [block] cauldron.cleanarmor */
    public static function CAULDRON_CLEANARMOR() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('cauldron.cleanarmor')); }
    /** [block] cauldron.cleanarmor @see self::CAULDRON_CLEANARMOR() */
    public static function CLEANARMOR() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('cauldron.cleanarmor')); }
    /** [block] cauldron.cleanbanner */
    public static function CAULDRON_CLEANBANNER() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('cauldron.cleanbanner')); }
    /** [block] cauldron.cleanbanner @see self::CAULDRON_CLEANBANNER() */
    public static function CLEANBANNER() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('cauldron.cleanbanner')); }
    /** [block] cauldron.dyearmor */
    public static function CAULDRON_DYEARMOR() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('cauldron.dyearmor')); }
    /** [block] cauldron.dyearmor @see self::CAULDRON_DYEARMOR() */
    public static function DYEARMOR() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('cauldron.dyearmor')); }
    /** [block] cauldron.explode */
    public static function CAULDRON_EXPLODE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('cauldron.explode')); }
    /** [block] cauldron.explode @see self::CAULDRON_EXPLODE() */
    public static function EXPLODE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('cauldron.explode')); }
    /** [block] cauldron.fillpotion */
    public static function CAULDRON_FILLPOTION() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('cauldron.fillpotion')); }
    /** [block] cauldron.fillpotion @see self::CAULDRON_FILLPOTION() */
    public static function FILLPOTION() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('cauldron.fillpotion')); }
    /** [block] cauldron.fillwater */
    public static function CAULDRON_FILLWATER() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('cauldron.fillwater')); }
    /** [block] cauldron.fillwater @see self::CAULDRON_FILLWATER() */
    public static function FILLWATER() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('cauldron.fillwater')); }
    /** [block] cauldron.takepotion */
    public static function CAULDRON_TAKEPOTION() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('cauldron.takepotion')); }
    /** [block] cauldron.takepotion @see self::CAULDRON_TAKEPOTION() */
    public static function TAKEPOTION() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('cauldron.takepotion')); }
    /** [block] cauldron.takewater */
    public static function CAULDRON_TAKEWATER() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('cauldron.takewater')); }
    /** [block] cauldron.takewater @see self::CAULDRON_TAKEWATER() */
    public static function TAKEWATER() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('cauldron.takewater')); }
    /** [block] cauldron_drip.lava.pointed_dripstone */
    public static function CAULDRON_DRIP_LAVA_POINTED_DRIPSTONE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('cauldron_drip.lava.pointed_dripstone')); }
    /** [block] cauldron_drip.lava.pointed_dripstone @see self::CAULDRON_DRIP_LAVA_POINTED_DRIPSTONE() */
    public static function LAVA_POINTED_DRIPSTONE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('cauldron_drip.lava.pointed_dripstone')); }
    /** [block] cauldron_drip.water.pointed_dripstone */
    public static function CAULDRON_DRIP_WATER_POINTED_DRIPSTONE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('cauldron_drip.water.pointed_dripstone')); }
    /** [block] cauldron_drip.water.pointed_dripstone @see self::CAULDRON_DRIP_WATER_POINTED_DRIPSTONE() */
    public static function WATER_POINTED_DRIPSTONE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('cauldron_drip.water.pointed_dripstone')); }
    /** [block] chime.amethyst_block */
    public static function CHIME_AMETHYST_BLOCK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('chime.amethyst_block')); }
    /** [block] click_off.bamboo_wood_button */
    public static function CLICK_OFF_BAMBOO_WOOD_BUTTON() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('click_off.bamboo_wood_button')); }
    /** [block] click_off.bamboo_wood_button @see self::CLICK_OFF_BAMBOO_WOOD_BUTTON() */
    public static function BAMBOO_WOOD_BUTTON() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('click_off.bamboo_wood_button')); }
    /** [block] click_off.bamboo_wood_pressure_plate */
    public static function CLICK_OFF_BAMBOO_WOOD_PRESSURE_PLATE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('click_off.bamboo_wood_pressure_plate')); }
    /** [block] click_off.bamboo_wood_pressure_plate @see self::CLICK_OFF_BAMBOO_WOOD_PRESSURE_PLATE() */
    public static function BAMBOO_WOOD_PRESSURE_PLATE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('click_off.bamboo_wood_pressure_plate')); }
    /** [block] click_off.cherry_wood_button */
    public static function CLICK_OFF_CHERRY_WOOD_BUTTON() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('click_off.cherry_wood_button')); }
    /** [block] click_off.cherry_wood_button @see self::CLICK_OFF_CHERRY_WOOD_BUTTON() */
    public static function CHERRY_WOOD_BUTTON() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('click_off.cherry_wood_button')); }
    /** [block] click_off.cherry_wood_pressure_plate */
    public static function CLICK_OFF_CHERRY_WOOD_PRESSURE_PLATE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('click_off.cherry_wood_pressure_plate')); }
    /** [block] click_off.cherry_wood_pressure_plate @see self::CLICK_OFF_CHERRY_WOOD_PRESSURE_PLATE() */
    public static function CHERRY_WOOD_PRESSURE_PLATE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('click_off.cherry_wood_pressure_plate')); }
    /** [block] click_off.metal_pressure_plate */
    public static function CLICK_OFF_METAL_PRESSURE_PLATE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('click_off.metal_pressure_plate')); }
    /** [block] click_off.metal_pressure_plate @see self::CLICK_OFF_METAL_PRESSURE_PLATE() */
    public static function METAL_PRESSURE_PLATE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('click_off.metal_pressure_plate')); }
    /** [block] click_off.nether_wood_button */
    public static function CLICK_OFF_NETHER_WOOD_BUTTON() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('click_off.nether_wood_button')); }
    /** [block] click_off.nether_wood_button @see self::CLICK_OFF_NETHER_WOOD_BUTTON() */
    public static function NETHER_WOOD_BUTTON() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('click_off.nether_wood_button')); }
    /** [block] click_off.nether_wood_pressure_plate */
    public static function CLICK_OFF_NETHER_WOOD_PRESSURE_PLATE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('click_off.nether_wood_pressure_plate')); }
    /** [block] click_off.nether_wood_pressure_plate @see self::CLICK_OFF_NETHER_WOOD_PRESSURE_PLATE() */
    public static function NETHER_WOOD_PRESSURE_PLATE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('click_off.nether_wood_pressure_plate')); }
    /** [block] click_off.stone_pressure_plate */
    public static function CLICK_OFF_STONE_PRESSURE_PLATE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('click_off.stone_pressure_plate')); }
    /** [block] click_off.stone_pressure_plate @see self::CLICK_OFF_STONE_PRESSURE_PLATE() */
    public static function STONE_PRESSURE_PLATE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('click_off.stone_pressure_plate')); }
    /** [block] click_off.wooden_pressure_plate */
    public static function CLICK_OFF_WOODEN_PRESSURE_PLATE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('click_off.wooden_pressure_plate')); }
    /** [block] click_off.wooden_pressure_plate @see self::CLICK_OFF_WOODEN_PRESSURE_PLATE() */
    public static function WOODEN_PRESSURE_PLATE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('click_off.wooden_pressure_plate')); }
    /** [block] click_on.bamboo_wood_button */
    public static function CLICK_ON_BAMBOO_WOOD_BUTTON() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('click_on.bamboo_wood_button')); }
    /** [block] click_on.bamboo_wood_pressure_plate */
    public static function CLICK_ON_BAMBOO_WOOD_PRESSURE_PLATE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('click_on.bamboo_wood_pressure_plate')); }
    /** [block] click_on.cherry_wood_button */
    public static function CLICK_ON_CHERRY_WOOD_BUTTON() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('click_on.cherry_wood_button')); }
    /** [block] click_on.cherry_wood_pressure_plate */
    public static function CLICK_ON_CHERRY_WOOD_PRESSURE_PLATE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('click_on.cherry_wood_pressure_plate')); }
    /** [block] click_on.metal_pressure_plate */
    public static function CLICK_ON_METAL_PRESSURE_PLATE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('click_on.metal_pressure_plate')); }
    /** [block] click_on.nether_wood_button */
    public static function CLICK_ON_NETHER_WOOD_BUTTON() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('click_on.nether_wood_button')); }
    /** [block] click_on.nether_wood_pressure_plate */
    public static function CLICK_ON_NETHER_WOOD_PRESSURE_PLATE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('click_on.nether_wood_pressure_plate')); }
    /** [block] click_on.stone_pressure_plate */
    public static function CLICK_ON_STONE_PRESSURE_PLATE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('click_on.stone_pressure_plate')); }
    /** [block] click_on.wooden_pressure_plate */
    public static function CLICK_ON_WOODEN_PRESSURE_PLATE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('click_on.wooden_pressure_plate')); }
    /** [block] close.bamboo_wood_door */
    public static function CLOSE_BAMBOO_WOOD_DOOR() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('close.bamboo_wood_door')); }
    /** [block] close.bamboo_wood_door @see self::CLOSE_BAMBOO_WOOD_DOOR() */
    public static function BAMBOO_WOOD_DOOR() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('close.bamboo_wood_door')); }
    /** [block] close.bamboo_wood_fence_gate */
    public static function CLOSE_BAMBOO_WOOD_FENCE_GATE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('close.bamboo_wood_fence_gate')); }
    /** [block] close.bamboo_wood_fence_gate @see self::CLOSE_BAMBOO_WOOD_FENCE_GATE() */
    public static function BAMBOO_WOOD_FENCE_GATE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('close.bamboo_wood_fence_gate')); }
    /** [block] close.bamboo_wood_trapdoor */
    public static function CLOSE_BAMBOO_WOOD_TRAPDOOR() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('close.bamboo_wood_trapdoor')); }
    /** [block] close.bamboo_wood_trapdoor @see self::CLOSE_BAMBOO_WOOD_TRAPDOOR() */
    public static function BAMBOO_WOOD_TRAPDOOR() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('close.bamboo_wood_trapdoor')); }
    /** [block] close.cherry_wood_door */
    public static function CLOSE_CHERRY_WOOD_DOOR() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('close.cherry_wood_door')); }
    /** [block] close.cherry_wood_door @see self::CLOSE_CHERRY_WOOD_DOOR() */
    public static function CHERRY_WOOD_DOOR() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('close.cherry_wood_door')); }
    /** [block] close.cherry_wood_fence_gate */
    public static function CLOSE_CHERRY_WOOD_FENCE_GATE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('close.cherry_wood_fence_gate')); }
    /** [block] close.cherry_wood_fence_gate @see self::CLOSE_CHERRY_WOOD_FENCE_GATE() */
    public static function CHERRY_WOOD_FENCE_GATE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('close.cherry_wood_fence_gate')); }
    /** [block] close.cherry_wood_trapdoor */
    public static function CLOSE_CHERRY_WOOD_TRAPDOOR() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('close.cherry_wood_trapdoor')); }
    /** [block] close.cherry_wood_trapdoor @see self::CLOSE_CHERRY_WOOD_TRAPDOOR() */
    public static function CHERRY_WOOD_TRAPDOOR() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('close.cherry_wood_trapdoor')); }
    /** [block] close.fence_gate */
    public static function CLOSE_FENCE_GATE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('close.fence_gate')); }
    /** [block] close.fence_gate @see self::CLOSE_FENCE_GATE() */
    public static function FENCE_GATE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('close.fence_gate')); }
    /** [block] close.iron_door */
    public static function CLOSE_IRON_DOOR() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('close.iron_door')); }
    /** [block] close.iron_door @see self::CLOSE_IRON_DOOR() */
    public static function IRON_DOOR() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('close.iron_door')); }
    /** [block] close.iron_trapdoor */
    public static function CLOSE_IRON_TRAPDOOR() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('close.iron_trapdoor')); }
    /** [block] close.iron_trapdoor @see self::CLOSE_IRON_TRAPDOOR() */
    public static function IRON_TRAPDOOR() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('close.iron_trapdoor')); }
    /** [block] close.nether_wood_door */
    public static function CLOSE_NETHER_WOOD_DOOR() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('close.nether_wood_door')); }
    /** [block] close.nether_wood_door @see self::CLOSE_NETHER_WOOD_DOOR() */
    public static function NETHER_WOOD_DOOR() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('close.nether_wood_door')); }
    /** [block] close.nether_wood_fence_gate */
    public static function CLOSE_NETHER_WOOD_FENCE_GATE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('close.nether_wood_fence_gate')); }
    /** [block] close.nether_wood_fence_gate @see self::CLOSE_NETHER_WOOD_FENCE_GATE() */
    public static function NETHER_WOOD_FENCE_GATE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('close.nether_wood_fence_gate')); }
    /** [block] close.nether_wood_trapdoor */
    public static function CLOSE_NETHER_WOOD_TRAPDOOR() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('close.nether_wood_trapdoor')); }
    /** [block] close.nether_wood_trapdoor @see self::CLOSE_NETHER_WOOD_TRAPDOOR() */
    public static function NETHER_WOOD_TRAPDOOR() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('close.nether_wood_trapdoor')); }
    /** [block] close.wooden_door */
    public static function CLOSE_WOODEN_DOOR() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('close.wooden_door')); }
    /** [block] close.wooden_door @see self::CLOSE_WOODEN_DOOR() */
    public static function WOODEN_DOOR() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('close.wooden_door')); }
    /** [block] close.wooden_trapdoor */
    public static function CLOSE_WOODEN_TRAPDOOR() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('close.wooden_trapdoor')); }
    /** [block] close.wooden_trapdoor @see self::CLOSE_WOODEN_TRAPDOOR() */
    public static function WOODEN_TRAPDOOR() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('close.wooden_trapdoor')); }
    /** [block] close_door.copper */
    public static function CLOSE_DOOR_COPPER() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('close_door.copper')); }
    /** [block] close_door.copper @see self::CLOSE_DOOR_COPPER() */
    public static function COPPER() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('close_door.copper')); }
    /** [block] conduit.activate */
    public static function CONDUIT_ACTIVATE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('conduit.activate')); }
    /** [block] conduit.ambient */
    public static function CONDUIT_AMBIENT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('conduit.ambient')); }
    /** [block] conduit.attack */
    public static function CONDUIT_ATTACK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('conduit.attack')); }
    /** [block] conduit.attack @see self::CONDUIT_ATTACK() */
    public static function ATTACK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('conduit.attack')); }
    /** [block] conduit.deactivate */
    public static function CONDUIT_DEACTIVATE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('conduit.deactivate')); }
    /** [block] conduit.short */
    public static function CONDUIT_SHORT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('conduit.short')); }
    /** [block] conduit.short @see self::CONDUIT_SHORT() */
    public static function SHORT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('conduit.short')); }
    /** [block] crafter.craft */
    public static function CRAFTER_CRAFT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('crafter.craft')); }
    /** [block] crafter.craft @see self::CRAFTER_CRAFT() */
    public static function CRAFT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('crafter.craft')); }
    /** [block] crafter.disable_slot */
    public static function CRAFTER_DISABLE_SLOT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('crafter.disable_slot')); }
    /** [block] crafter.disable_slot @see self::CRAFTER_DISABLE_SLOT() */
    public static function DISABLE_SLOT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('crafter.disable_slot')); }
    /** [block] crafter.fail */
    public static function CRAFTER_FAIL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('crafter.fail')); }
    /** [block] crafter.fail @see self::CRAFTER_FAIL() */
    public static function FAIL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('crafter.fail')); }
    /** [block] dig.ancient_debris */
    public static function DIG_ANCIENT_DEBRIS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('dig.ancient_debris')); }
    /** [block] dig.ancient_debris @see self::DIG_ANCIENT_DEBRIS() */
    public static function ANCIENT_DEBRIS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('dig.ancient_debris')); }
    /** [block] dig.azalea_leaves */
    public static function DIG_AZALEA_LEAVES() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('dig.azalea_leaves')); }
    /** [block] dig.azalea_leaves @see self::DIG_AZALEA_LEAVES() */
    public static function AZALEA_LEAVES() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('dig.azalea_leaves')); }
    /** [block] dig.basalt */
    public static function DIG_BASALT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('dig.basalt')); }
    /** [block] dig.basalt @see self::DIG_BASALT() */
    public static function BASALT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('dig.basalt')); }
    /** [block] dig.bone_block */
    public static function DIG_BONE_BLOCK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('dig.bone_block')); }
    /** [block] dig.bone_block @see self::DIG_BONE_BLOCK() */
    public static function BONE_BLOCK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('dig.bone_block')); }
    /** [block] dig.candle */
    public static function DIG_CANDLE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('dig.candle')); }
    /** [block] dig.cave_vines */
    public static function DIG_CAVE_VINES() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('dig.cave_vines')); }
    /** [block] dig.cave_vines @see self::DIG_CAVE_VINES() */
    public static function CAVE_VINES() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('dig.cave_vines')); }
    /** [block] dig.chain */
    public static function DIG_CHAIN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('dig.chain')); }
    /** [block] dig.chain @see self::DIG_CHAIN() */
    public static function CHAIN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('dig.chain')); }
    /** [block] dig.cloth */
    public static function DIG_CLOTH() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('dig.cloth')); }
    /** [block] dig.cloth @see self::DIG_CLOTH() */
    public static function CLOTH() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('dig.cloth')); }
    /** [block] dig.copper */
    public static function DIG_COPPER() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('dig.copper')); }
    /** [block] dig.coral */
    public static function DIG_CORAL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('dig.coral')); }
    /** [block] dig.coral @see self::DIG_CORAL() */
    public static function CORAL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('dig.coral')); }
    /** [block] dig.deepslate */
    public static function DIG_DEEPSLATE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('dig.deepslate')); }
    /** [block] dig.deepslate @see self::DIG_DEEPSLATE() */
    public static function DEEPSLATE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('dig.deepslate')); }
    /** [block] dig.deepslate_bricks */
    public static function DIG_DEEPSLATE_BRICKS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('dig.deepslate_bricks')); }
    /** [block] dig.deepslate_bricks @see self::DIG_DEEPSLATE_BRICKS() */
    public static function DEEPSLATE_BRICKS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('dig.deepslate_bricks')); }
    /** [block] dig.fungus */
    public static function DIG_FUNGUS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('dig.fungus')); }
    /** [block] dig.fungus @see self::DIG_FUNGUS() */
    public static function FUNGUS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('dig.fungus')); }
    /** [block] dig.grass */
    public static function DIG_GRASS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('dig.grass')); }
    /** [block] dig.grass @see self::DIG_GRASS() */
    public static function GRASS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('dig.grass')); }
    /** [block] dig.gravel */
    public static function DIG_GRAVEL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('dig.gravel')); }
    /** [block] dig.gravel @see self::DIG_GRAVEL() */
    public static function GRAVEL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('dig.gravel')); }
    /** [block] dig.honey_block */
    public static function DIG_HONEY_BLOCK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('dig.honey_block')); }
    /** [block] dig.honey_block @see self::DIG_HONEY_BLOCK() */
    public static function HONEY_BLOCK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('dig.honey_block')); }
    /** [block] dig.lodestone */
    public static function DIG_LODESTONE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('dig.lodestone')); }
    /** [block] dig.lodestone @see self::DIG_LODESTONE() */
    public static function LODESTONE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('dig.lodestone')); }
    /** [block] dig.moss */
    public static function DIG_MOSS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('dig.moss')); }
    /** [block] dig.moss @see self::DIG_MOSS() */
    public static function MOSS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('dig.moss')); }
    /** [block] dig.nether_brick */
    public static function DIG_NETHER_BRICK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('dig.nether_brick')); }
    /** [block] dig.nether_brick @see self::DIG_NETHER_BRICK() */
    public static function NETHER_BRICK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('dig.nether_brick')); }
    /** [block] dig.nether_gold_ore */
    public static function DIG_NETHER_GOLD_ORE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('dig.nether_gold_ore')); }
    /** [block] dig.nether_gold_ore @see self::DIG_NETHER_GOLD_ORE() */
    public static function NETHER_GOLD_ORE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('dig.nether_gold_ore')); }
    /** [block] dig.nether_sprouts */
    public static function DIG_NETHER_SPROUTS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('dig.nether_sprouts')); }
    /** [block] dig.nether_sprouts @see self::DIG_NETHER_SPROUTS() */
    public static function NETHER_SPROUTS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('dig.nether_sprouts')); }
    /** [block] dig.nether_wart */
    public static function DIG_NETHER_WART() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('dig.nether_wart')); }
    /** [block] dig.nether_wart @see self::DIG_NETHER_WART() */
    public static function NETHER_WART() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('dig.nether_wart')); }
    /** [block] dig.netherite */
    public static function DIG_NETHERITE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('dig.netherite')); }
    /** [block] dig.netherite @see self::DIG_NETHERITE() */
    public static function NETHERITE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('dig.netherite')); }
    /** [block] dig.netherrack */
    public static function DIG_NETHERRACK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('dig.netherrack')); }
    /** [block] dig.netherrack @see self::DIG_NETHERRACK() */
    public static function NETHERRACK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('dig.netherrack')); }
    /** [block] dig.nylium */
    public static function DIG_NYLIUM() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('dig.nylium')); }
    /** [block] dig.nylium @see self::DIG_NYLIUM() */
    public static function NYLIUM() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('dig.nylium')); }
    /** [block] dig.powder_snow */
    public static function DIG_POWDER_SNOW() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('dig.powder_snow')); }
    /** [block] dig.powder_snow @see self::DIG_POWDER_SNOW() */
    public static function POWDER_SNOW() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('dig.powder_snow')); }
    /** [block] dig.roots */
    public static function DIG_ROOTS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('dig.roots')); }
    /** [block] dig.roots @see self::DIG_ROOTS() */
    public static function ROOTS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('dig.roots')); }
    /** [block] dig.sand */
    public static function DIG_SAND() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('dig.sand')); }
    /** [block] dig.sand @see self::DIG_SAND() */
    public static function SAND() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('dig.sand')); }
    /** [block] dig.shroomlight */
    public static function DIG_SHROOMLIGHT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('dig.shroomlight')); }
    /** [block] dig.shroomlight @see self::DIG_SHROOMLIGHT() */
    public static function SHROOMLIGHT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('dig.shroomlight')); }
    /** [block] dig.snow */
    public static function DIG_SNOW() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('dig.snow')); }
    /** [block] dig.snow @see self::DIG_SNOW() */
    public static function SNOW() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('dig.snow')); }
    /** [block] dig.soul_sand */
    public static function DIG_SOUL_SAND() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('dig.soul_sand')); }
    /** [block] dig.soul_sand @see self::DIG_SOUL_SAND() */
    public static function SOUL_SAND() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('dig.soul_sand')); }
    /** [block] dig.soul_soil */
    public static function DIG_SOUL_SOIL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('dig.soul_soil')); }
    /** [block] dig.soul_soil @see self::DIG_SOUL_SOIL() */
    public static function SOUL_SOIL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('dig.soul_soil')); }
    /** [block] dig.stem */
    public static function DIG_STEM() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('dig.stem')); }
    /** [block] dig.stem @see self::DIG_STEM() */
    public static function STEM() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('dig.stem')); }
    /** [block] dig.stone */
    public static function DIG_STONE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('dig.stone')); }
    /** [block] dig.stone @see self::DIG_STONE() */
    public static function STONE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('dig.stone')); }
    /** [block] dig.vines */
    public static function DIG_VINES() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('dig.vines')); }
    /** [block] dig.vines @see self::DIG_VINES() */
    public static function VINES() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('dig.vines')); }
    /** [block] dig.wood */
    public static function DIG_WOOD() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('dig.wood')); }
    /** [block] dig.wood @see self::DIG_WOOD() */
    public static function WOOD() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('dig.wood')); }
    /** [block] drip.lava.pointed_dripstone */
    public static function DRIP_LAVA_POINTED_DRIPSTONE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('drip.lava.pointed_dripstone')); }
    /** [block] drip.water.pointed_dripstone */
    public static function DRIP_WATER_POINTED_DRIPSTONE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('drip.water.pointed_dripstone')); }
    /** [block] extinguish.candle */
    public static function EXTINGUISH_CANDLE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('extinguish.candle')); }
    /** [block] fall.copper_bulb */
    public static function FALL_COPPER_BULB() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('fall.copper_bulb')); }
    /** [block] fire.fire */
    public static function FIRE_FIRE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('fire.fire')); }
    /** [block] fire.fire @see self::FIRE_FIRE() */
    public static function FIRE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('fire.fire')); }
    /** [block] fire.ignite */
    public static function FIRE_IGNITE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('fire.ignite')); }
    /** [block] fire.ignite @see self::FIRE_IGNITE() */
    public static function IGNITE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('fire.ignite')); }
    /** [block] hatch.frog_spawn */
    public static function HATCH_FROG_SPAWN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('hatch.frog_spawn')); }
    /** [block] hit.amethyst_block */
    public static function HIT_AMETHYST_BLOCK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('hit.amethyst_block')); }
    /** [block] hit.amethyst_cluster */
    public static function HIT_AMETHYST_CLUSTER() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('hit.amethyst_cluster')); }
    /** [block] hit.ancient_debris */
    public static function HIT_ANCIENT_DEBRIS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('hit.ancient_debris')); }
    /** [block] hit.anvil */
    public static function HIT_ANVIL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('hit.anvil')); }
    /** [block] hit.anvil @see self::HIT_ANVIL() */
    public static function ANVIL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('hit.anvil')); }
    /** [block] hit.azalea */
    public static function HIT_AZALEA() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('hit.azalea')); }
    /** [block] hit.azalea_leaves */
    public static function HIT_AZALEA_LEAVES() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('hit.azalea_leaves')); }
    /** [block] hit.bamboo_wood */
    public static function HIT_BAMBOO_WOOD() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('hit.bamboo_wood')); }
    /** [block] hit.basalt */
    public static function HIT_BASALT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('hit.basalt')); }
    /** [block] hit.big_dripleaf */
    public static function HIT_BIG_DRIPLEAF() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('hit.big_dripleaf')); }
    /** [block] hit.bone_block */
    public static function HIT_BONE_BLOCK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('hit.bone_block')); }
    /** [block] hit.calcite */
    public static function HIT_CALCITE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('hit.calcite')); }
    /** [block] hit.candle */
    public static function HIT_CANDLE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('hit.candle')); }
    /** [block] hit.cave_vines */
    public static function HIT_CAVE_VINES() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('hit.cave_vines')); }
    /** [block] hit.chain */
    public static function HIT_CHAIN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('hit.chain')); }
    /** [block] hit.cherry_leaves */
    public static function HIT_CHERRY_LEAVES() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('hit.cherry_leaves')); }
    /** [block] hit.cherry_wood */
    public static function HIT_CHERRY_WOOD() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('hit.cherry_wood')); }
    /** [block] hit.chiseled_bookshelf */
    public static function HIT_CHISELED_BOOKSHELF() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('hit.chiseled_bookshelf')); }
    /** [block] hit.cloth */
    public static function HIT_CLOTH() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('hit.cloth')); }
    /** [block] hit.copper */
    public static function HIT_COPPER() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('hit.copper')); }
    /** [block] hit.copper_bulb */
    public static function HIT_COPPER_BULB() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('hit.copper_bulb')); }
    /** [block] hit.coral */
    public static function HIT_CORAL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('hit.coral')); }
    /** [block] hit.deepslate */
    public static function HIT_DEEPSLATE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('hit.deepslate')); }
    /** [block] hit.deepslate_bricks */
    public static function HIT_DEEPSLATE_BRICKS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('hit.deepslate_bricks')); }
    /** [block] hit.dirt_with_roots */
    public static function HIT_DIRT_WITH_ROOTS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('hit.dirt_with_roots')); }
    /** [block] hit.dripstone_block */
    public static function HIT_DRIPSTONE_BLOCK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('hit.dripstone_block')); }
    /** [block] hit.grass */
    public static function HIT_GRASS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('hit.grass')); }
    /** [block] hit.gravel */
    public static function HIT_GRAVEL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('hit.gravel')); }
    /** [block] hit.hanging_roots */
    public static function HIT_HANGING_ROOTS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('hit.hanging_roots')); }
    /** [block] hit.honey_block */
    public static function HIT_HONEY_BLOCK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('hit.honey_block')); }
    /** [block] hit.iron */
    public static function HIT_IRON() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('hit.iron')); }
    /** [block] hit.ladder */
    public static function HIT_LADDER() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('hit.ladder')); }
    /** [block] hit.moss */
    public static function HIT_MOSS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('hit.moss')); }
    /** [block] hit.nether_brick */
    public static function HIT_NETHER_BRICK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('hit.nether_brick')); }
    /** [block] hit.nether_gold_ore */
    public static function HIT_NETHER_GOLD_ORE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('hit.nether_gold_ore')); }
    /** [block] hit.nether_sprouts */
    public static function HIT_NETHER_SPROUTS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('hit.nether_sprouts')); }
    /** [block] hit.nether_wart */
    public static function HIT_NETHER_WART() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('hit.nether_wart')); }
    /** [block] hit.nether_wood */
    public static function HIT_NETHER_WOOD() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('hit.nether_wood')); }
    /** [block] hit.netherite */
    public static function HIT_NETHERITE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('hit.netherite')); }
    /** [block] hit.netherrack */
    public static function HIT_NETHERRACK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('hit.netherrack')); }
    /** [block] hit.nylium */
    public static function HIT_NYLIUM() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('hit.nylium')); }
    /** [block] hit.pink_petals */
    public static function HIT_PINK_PETALS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('hit.pink_petals')); }
    /** [block] hit.pointed_dripstone */
    public static function HIT_POINTED_DRIPSTONE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('hit.pointed_dripstone')); }
    /** [block] hit.powder_snow */
    public static function HIT_POWDER_SNOW() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('hit.powder_snow')); }
    /** [block] hit.roots */
    public static function HIT_ROOTS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('hit.roots')); }
    /** [block] hit.sand */
    public static function HIT_SAND() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('hit.sand')); }
    /** [block] hit.sculk */
    public static function HIT_SCULK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('hit.sculk')); }
    /** [block] hit.sculk_catalyst */
    public static function HIT_SCULK_CATALYST() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('hit.sculk_catalyst')); }
    /** [block] hit.sculk_sensor */
    public static function HIT_SCULK_SENSOR() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('hit.sculk_sensor')); }
    /** [block] hit.sculk_shrieker */
    public static function HIT_SCULK_SHRIEKER() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('hit.sculk_shrieker')); }
    /** [block] hit.shroomlight */
    public static function HIT_SHROOMLIGHT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('hit.shroomlight')); }
    /** [block] hit.slime */
    public static function HIT_SLIME() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('hit.slime')); }
    /** [block] hit.snow */
    public static function HIT_SNOW() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('hit.snow')); }
    /** [block] hit.soul_sand */
    public static function HIT_SOUL_SAND() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('hit.soul_sand')); }
    /** [block] hit.soul_soil */
    public static function HIT_SOUL_SOIL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('hit.soul_soil')); }
    /** [block] hit.sponge */
    public static function HIT_SPONGE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('hit.sponge')); }
    /** [block] hit.spore_blossom */
    public static function HIT_SPORE_BLOSSOM() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('hit.spore_blossom')); }
    /** [block] hit.stem */
    public static function HIT_STEM() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('hit.stem')); }
    /** [block] hit.stone */
    public static function HIT_STONE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('hit.stone')); }
    /** [block] hit.suspicious_gravel */
    public static function HIT_SUSPICIOUS_GRAVEL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('hit.suspicious_gravel')); }
    /** [block] hit.suspicious_sand */
    public static function HIT_SUSPICIOUS_SAND() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('hit.suspicious_sand')); }
    /** [block] hit.tuff */
    public static function HIT_TUFF() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('hit.tuff')); }
    /** [block] hit.vines */
    public static function HIT_VINES() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('hit.vines')); }
    /** [block] hit.wet_sponge */
    public static function HIT_WET_SPONGE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('hit.wet_sponge')); }
    /** [block] hit.wood */
    public static function HIT_WOOD() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('hit.wood')); }
    /** [block] insert.chiseled_bookshelf */
    public static function INSERT_CHISELED_BOOKSHELF() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('insert.chiseled_bookshelf')); }
    /** [block] insert_enchanted.chiseled_bookshelf */
    public static function INSERT_ENCHANTED_CHISELED_BOOKSHELF() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('insert_enchanted.chiseled_bookshelf')); }
    /** [block] item.bone_meal.use */
    public static function ITEM_BONE_MEAL_USE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('item.bone_meal.use')); }
    /** [block] item.bone_meal.use @see self::ITEM_BONE_MEAL_USE() */
    public static function BONE_MEAL_USE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('item.bone_meal.use')); }
    /** [block] item.book.put */
    public static function ITEM_BOOK_PUT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('item.book.put')); }
    /** [block] item.book.put @see self::ITEM_BOOK_PUT() */
    public static function BOOK_PUT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('item.book.put')); }
    /** [block] jump.ancient_debris */
    public static function JUMP_ANCIENT_DEBRIS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('jump.ancient_debris')); }
    /** [block] jump.basalt */
    public static function JUMP_BASALT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('jump.basalt')); }
    /** [block] jump.bone_block */
    public static function JUMP_BONE_BLOCK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('jump.bone_block')); }
    /** [block] jump.chain */
    public static function JUMP_CHAIN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('jump.chain')); }
    /** [block] jump.cloth */
    public static function JUMP_CLOTH() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('jump.cloth')); }
    /** [block] jump.coral */
    public static function JUMP_CORAL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('jump.coral')); }
    /** [block] jump.grass */
    public static function JUMP_GRASS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('jump.grass')); }
    /** [block] jump.gravel */
    public static function JUMP_GRAVEL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('jump.gravel')); }
    /** [block] jump.honey_block */
    public static function JUMP_HONEY_BLOCK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('jump.honey_block')); }
    /** [block] jump.nether_brick */
    public static function JUMP_NETHER_BRICK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('jump.nether_brick')); }
    /** [block] jump.nether_gold_ore */
    public static function JUMP_NETHER_GOLD_ORE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('jump.nether_gold_ore')); }
    /** [block] jump.nether_sprouts */
    public static function JUMP_NETHER_SPROUTS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('jump.nether_sprouts')); }
    /** [block] jump.nether_wart */
    public static function JUMP_NETHER_WART() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('jump.nether_wart')); }
    /** [block] jump.netherite */
    public static function JUMP_NETHERITE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('jump.netherite')); }
    /** [block] jump.netherrack */
    public static function JUMP_NETHERRACK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('jump.netherrack')); }
    /** [block] jump.nylium */
    public static function JUMP_NYLIUM() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('jump.nylium')); }
    /** [block] jump.roots */
    public static function JUMP_ROOTS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('jump.roots')); }
    /** [block] jump.sand */
    public static function JUMP_SAND() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('jump.sand')); }
    /** [block] jump.shroomlight */
    public static function JUMP_SHROOMLIGHT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('jump.shroomlight')); }
    /** [block] jump.slime */
    public static function JUMP_SLIME() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('jump.slime')); }
    /** [block] jump.snow */
    public static function JUMP_SNOW() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('jump.snow')); }
    /** [block] jump.soul_sand */
    public static function JUMP_SOUL_SAND() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('jump.soul_sand')); }
    /** [block] jump.soul_soil */
    public static function JUMP_SOUL_SOIL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('jump.soul_soil')); }
    /** [block] jump.stem */
    public static function JUMP_STEM() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('jump.stem')); }
    /** [block] jump.stone */
    public static function JUMP_STONE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('jump.stone')); }
    /** [block] jump.vines */
    public static function JUMP_VINES() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('jump.vines')); }
    /** [block] jump.wood */
    public static function JUMP_WOOD() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('jump.wood')); }
    /** [block] land.ancient_debris */
    public static function LAND_ANCIENT_DEBRIS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('land.ancient_debris')); }
    /** [block] land.basalt */
    public static function LAND_BASALT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('land.basalt')); }
    /** [block] land.bone_block */
    public static function LAND_BONE_BLOCK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('land.bone_block')); }
    /** [block] land.chain */
    public static function LAND_CHAIN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('land.chain')); }
    /** [block] land.cloth */
    public static function LAND_CLOTH() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('land.cloth')); }
    /** [block] land.coral */
    public static function LAND_CORAL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('land.coral')); }
    /** [block] land.grass */
    public static function LAND_GRASS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('land.grass')); }
    /** [block] land.gravel */
    public static function LAND_GRAVEL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('land.gravel')); }
    /** [block] land.honey_block */
    public static function LAND_HONEY_BLOCK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('land.honey_block')); }
    /** [block] land.nether_brick */
    public static function LAND_NETHER_BRICK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('land.nether_brick')); }
    /** [block] land.nether_gold_ore */
    public static function LAND_NETHER_GOLD_ORE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('land.nether_gold_ore')); }
    /** [block] land.nether_sprouts */
    public static function LAND_NETHER_SPROUTS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('land.nether_sprouts')); }
    /** [block] land.nether_wart */
    public static function LAND_NETHER_WART() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('land.nether_wart')); }
    /** [block] land.netherite */
    public static function LAND_NETHERITE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('land.netherite')); }
    /** [block] land.netherrack */
    public static function LAND_NETHERRACK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('land.netherrack')); }
    /** [block] land.nylium */
    public static function LAND_NYLIUM() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('land.nylium')); }
    /** [block] land.roots */
    public static function LAND_ROOTS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('land.roots')); }
    /** [block] land.sand */
    public static function LAND_SAND() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('land.sand')); }
    /** [block] land.shroomlight */
    public static function LAND_SHROOMLIGHT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('land.shroomlight')); }
    /** [block] land.slime */
    public static function LAND_SLIME() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('land.slime')); }
    /** [block] land.snow */
    public static function LAND_SNOW() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('land.snow')); }
    /** [block] land.soul_sand */
    public static function LAND_SOUL_SAND() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('land.soul_sand')); }
    /** [block] land.soul_soil */
    public static function LAND_SOUL_SOIL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('land.soul_soil')); }
    /** [block] land.stem */
    public static function LAND_STEM() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('land.stem')); }
    /** [block] land.stone */
    public static function LAND_STONE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('land.stone')); }
    /** [block] land.vines */
    public static function LAND_VINES() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('land.vines')); }
    /** [block] land.wood */
    public static function LAND_WOOD() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('land.wood')); }
    /** [block] liquid.lava */
    public static function LIQUID_LAVA() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('liquid.lava')); }
    /** [block] liquid.lava @see self::LIQUID_LAVA() */
    public static function LAVA() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('liquid.lava')); }
    /** [block] liquid.lavapop */
    public static function LIQUID_LAVAPOP() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('liquid.lavapop')); }
    /** [block] liquid.lavapop @see self::LIQUID_LAVAPOP() */
    public static function LAVAPOP() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('liquid.lavapop')); }
    /** [block] liquid.water */
    public static function LIQUID_WATER() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('liquid.water')); }
    /** [block] liquid.water @see self::LIQUID_WATER() */
    public static function WATER() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('liquid.water')); }
    /** [block] lodestone_compass.link_compass_to_lodestone */
    public static function LODESTONE_COMPASS_LINK_COMPASS_TO_LODESTONE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('lodestone_compass.link_compass_to_lodestone')); }
    /** [block] lodestone_compass.link_compass_to_lodestone @see self::LODESTONE_COMPASS_LINK_COMPASS_TO_LODESTONE() */
    public static function LINK_COMPASS_TO_LODESTONE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('lodestone_compass.link_compass_to_lodestone')); }
    /** [block] ominous_bottle.end_use */
    public static function OMINOUS_BOTTLE_END_USE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ominous_bottle.end_use')); }
    /** [block] ominous_bottle.end_use @see self::OMINOUS_BOTTLE_END_USE() */
    public static function END_USE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ominous_bottle.end_use')); }
    /** [block] ominous_item_spawner.about_to_spawn_item */
    public static function OMINOUS_ITEM_SPAWNER_ABOUT_TO_SPAWN_ITEM() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ominous_item_spawner.about_to_spawn_item')); }
    /** [block] ominous_item_spawner.about_to_spawn_item @see self::OMINOUS_ITEM_SPAWNER_ABOUT_TO_SPAWN_ITEM() */
    public static function ABOUT_TO_SPAWN_ITEM() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ominous_item_spawner.about_to_spawn_item')); }
    /** [block] ominous_item_spawner.spawn_item */
    public static function OMINOUS_ITEM_SPAWNER_SPAWN_ITEM() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ominous_item_spawner.spawn_item')); }
    /** [block] ominous_item_spawner.spawn_item @see self::OMINOUS_ITEM_SPAWNER_SPAWN_ITEM() */
    public static function SPAWN_ITEM() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ominous_item_spawner.spawn_item')); }
    /** [block] ominous_item_spawner.spawn_item_begin */
    public static function OMINOUS_ITEM_SPAWNER_SPAWN_ITEM_BEGIN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ominous_item_spawner.spawn_item_begin')); }
    /** [block] ominous_item_spawner.spawn_item_begin @see self::OMINOUS_ITEM_SPAWNER_SPAWN_ITEM_BEGIN() */
    public static function SPAWN_ITEM_BEGIN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ominous_item_spawner.spawn_item_begin')); }
    /** [block] open.bamboo_wood_door */
    public static function OPEN_BAMBOO_WOOD_DOOR() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('open.bamboo_wood_door')); }
    /** [block] open.bamboo_wood_fence_gate */
    public static function OPEN_BAMBOO_WOOD_FENCE_GATE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('open.bamboo_wood_fence_gate')); }
    /** [block] open.bamboo_wood_trapdoor */
    public static function OPEN_BAMBOO_WOOD_TRAPDOOR() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('open.bamboo_wood_trapdoor')); }
    /** [block] open.cherry_wood_door */
    public static function OPEN_CHERRY_WOOD_DOOR() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('open.cherry_wood_door')); }
    /** [block] open.cherry_wood_fence_gate */
    public static function OPEN_CHERRY_WOOD_FENCE_GATE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('open.cherry_wood_fence_gate')); }
    /** [block] open.cherry_wood_trapdoor */
    public static function OPEN_CHERRY_WOOD_TRAPDOOR() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('open.cherry_wood_trapdoor')); }
    /** [block] open.fence_gate */
    public static function OPEN_FENCE_GATE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('open.fence_gate')); }
    /** [block] open.iron_door */
    public static function OPEN_IRON_DOOR() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('open.iron_door')); }
    /** [block] open.iron_trapdoor */
    public static function OPEN_IRON_TRAPDOOR() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('open.iron_trapdoor')); }
    /** [block] open.nether_wood_door */
    public static function OPEN_NETHER_WOOD_DOOR() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('open.nether_wood_door')); }
    /** [block] open.nether_wood_fence_gate */
    public static function OPEN_NETHER_WOOD_FENCE_GATE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('open.nether_wood_fence_gate')); }
    /** [block] open.nether_wood_trapdoor */
    public static function OPEN_NETHER_WOOD_TRAPDOOR() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('open.nether_wood_trapdoor')); }
    /** [block] open.wooden_door */
    public static function OPEN_WOODEN_DOOR() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('open.wooden_door')); }
    /** [block] open.wooden_trapdoor */
    public static function OPEN_WOODEN_TRAPDOOR() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('open.wooden_trapdoor')); }
    /** [block] open_door.copper */
    public static function OPEN_DOOR_COPPER() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('open_door.copper')); }
    /** [block] open_trapdoor.copper */
    public static function OPEN_TRAPDOOR_COPPER() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('open_trapdoor.copper')); }
    /** [block] pick_berries.cave_vines */
    public static function PICK_BERRIES_CAVE_VINES() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('pick_berries.cave_vines')); }
    /** [block] pickup.chiseled_bookshelf */
    public static function PICKUP_CHISELED_BOOKSHELF() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('pickup.chiseled_bookshelf')); }
    /** [block] pickup_enchanted.chiseled_bookshelf */
    public static function PICKUP_ENCHANTED_CHISELED_BOOKSHELF() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('pickup_enchanted.chiseled_bookshelf')); }
    /** [block] place.amethyst_block */
    public static function PLACE_AMETHYST_BLOCK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('place.amethyst_block')); }
    /** [block] place.amethyst_cluster */
    public static function PLACE_AMETHYST_CLUSTER() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('place.amethyst_cluster')); }
    /** [block] place.azalea */
    public static function PLACE_AZALEA() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('place.azalea')); }
    /** [block] place.azalea_leaves */
    public static function PLACE_AZALEA_LEAVES() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('place.azalea_leaves')); }
    /** [block] place.bamboo_wood */
    public static function PLACE_BAMBOO_WOOD() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('place.bamboo_wood')); }
    /** [block] place.big_dripleaf */
    public static function PLACE_BIG_DRIPLEAF() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('place.big_dripleaf')); }
    /** [block] place.calcite */
    public static function PLACE_CALCITE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('place.calcite')); }
    /** [block] place.cherry_leaves */
    public static function PLACE_CHERRY_LEAVES() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('place.cherry_leaves')); }
    /** [block] place.cherry_wood */
    public static function PLACE_CHERRY_WOOD() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('place.cherry_wood')); }
    /** [block] place.chiseled_bookshelf */
    public static function PLACE_CHISELED_BOOKSHELF() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('place.chiseled_bookshelf')); }
    /** [block] place.copper */
    public static function PLACE_COPPER() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('place.copper')); }
    /** [block] place.copper_bulb */
    public static function PLACE_COPPER_BULB() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('place.copper_bulb')); }
    /** [block] place.deepslate */
    public static function PLACE_DEEPSLATE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('place.deepslate')); }
    /** [block] place.deepslate_bricks */
    public static function PLACE_DEEPSLATE_BRICKS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('place.deepslate_bricks')); }
    /** [block] place.dirt_with_roots */
    public static function PLACE_DIRT_WITH_ROOTS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('place.dirt_with_roots')); }
    /** [block] place.dripstone_block */
    public static function PLACE_DRIPSTONE_BLOCK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('place.dripstone_block')); }
    /** [block] place.hanging_roots */
    public static function PLACE_HANGING_ROOTS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('place.hanging_roots')); }
    /** [block] place.iron */
    public static function PLACE_IRON() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('place.iron')); }
    /** [block] place.large_amethyst_bud */
    public static function PLACE_LARGE_AMETHYST_BUD() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('place.large_amethyst_bud')); }
    /** [block] place.medium_amethyst_bud */
    public static function PLACE_MEDIUM_AMETHYST_BUD() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('place.medium_amethyst_bud')); }
    /** [block] place.moss */
    public static function PLACE_MOSS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('place.moss')); }
    /** [block] place.nether_wood */
    public static function PLACE_NETHER_WOOD() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('place.nether_wood')); }
    /** [block] place.pink_petals */
    public static function PLACE_PINK_PETALS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('place.pink_petals')); }
    /** [block] place.pointed_dripstone */
    public static function PLACE_POINTED_DRIPSTONE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('place.pointed_dripstone')); }
    /** [block] place.powder_snow */
    public static function PLACE_POWDER_SNOW() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('place.powder_snow')); }
    /** [block] place.sculk */
    public static function PLACE_SCULK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('place.sculk')); }
    /** [block] place.sculk_catalyst */
    public static function PLACE_SCULK_CATALYST() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('place.sculk_catalyst')); }
    /** [block] place.sculk_sensor */
    public static function PLACE_SCULK_SENSOR() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('place.sculk_sensor')); }
    /** [block] place.sculk_shrieker */
    public static function PLACE_SCULK_SHRIEKER() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('place.sculk_shrieker')); }
    /** [block] place.small_amethyst_bud */
    public static function PLACE_SMALL_AMETHYST_BUD() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('place.small_amethyst_bud')); }
    /** [block] place.sponge */
    public static function PLACE_SPONGE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('place.sponge')); }
    /** [block] place.spore_blossom */
    public static function PLACE_SPORE_BLOSSOM() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('place.spore_blossom')); }
    /** [block] place.suspicious_gravel */
    public static function PLACE_SUSPICIOUS_GRAVEL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('place.suspicious_gravel')); }
    /** [block] place.suspicious_sand */
    public static function PLACE_SUSPICIOUS_SAND() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('place.suspicious_sand')); }
    /** [block] place.tuff */
    public static function PLACE_TUFF() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('place.tuff')); }
    /** [block] place.tuff_bricks */
    public static function PLACE_TUFF_BRICKS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('place.tuff_bricks')); }
    /** [block] place.tuff_bricks @see self::PLACE_TUFF_BRICKS() */
    public static function TUFF_BRICKS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('place.tuff_bricks')); }
    /** [block] place.wet_sponge */
    public static function PLACE_WET_SPONGE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('place.wet_sponge')); }
    /** [block] portal.portal */
    public static function PORTAL_PORTAL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('portal.portal')); }
    /** [block] portal.portal @see self::PORTAL_PORTAL() */
    public static function PORTAL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('portal.portal')); }
    /** [block] power.off.sculk_sensor */
    public static function POWER_OFF_SCULK_SENSOR() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('power.off.sculk_sensor')); }
    /** [block] power.off.sculk_sensor @see self::POWER_OFF_SCULK_SENSOR() */
    public static function OFF_SCULK_SENSOR() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('power.off.sculk_sensor')); }
    /** [block] power.on.sculk_sensor */
    public static function POWER_ON_SCULK_SENSOR() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('power.on.sculk_sensor')); }
    /** [block] power.on.sculk_sensor @see self::POWER_ON_SCULK_SENSOR() */
    public static function ON_SCULK_SENSOR() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('power.on.sculk_sensor')); }
    /** [block] pumpkin.carve */
    public static function PUMPKIN_CARVE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('pumpkin.carve')); }
    /** [block] pumpkin.carve @see self::PUMPKIN_CARVE() */
    public static function CARVE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('pumpkin.carve')); }
    /** [block] random.anvil_break */
    public static function RANDOM_ANVIL_BREAK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('random.anvil_break')); }
    /** [block] random.anvil_break @see self::RANDOM_ANVIL_BREAK() */
    public static function ANVIL_BREAK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('random.anvil_break')); }
    /** [block] random.anvil_land */
    public static function RANDOM_ANVIL_LAND() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('random.anvil_land')); }
    /** [block] random.anvil_land @see self::RANDOM_ANVIL_LAND() */
    public static function ANVIL_LAND() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('random.anvil_land')); }
    /** [block] random.anvil_use */
    public static function RANDOM_ANVIL_USE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('random.anvil_use')); }
    /** [block] random.anvil_use @see self::RANDOM_ANVIL_USE() */
    public static function ANVIL_USE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('random.anvil_use')); }
    /** [block] random.chestclosed */
    public static function RANDOM_CHESTCLOSED() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('random.chestclosed')); }
    /** [block] random.chestclosed @see self::RANDOM_CHESTCLOSED() */
    public static function CHESTCLOSED() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('random.chestclosed')); }
    /** [block] random.chestopen */
    public static function RANDOM_CHESTOPEN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('random.chestopen')); }
    /** [block] random.chestopen @see self::RANDOM_CHESTOPEN() */
    public static function CHESTOPEN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('random.chestopen')); }
    /** [block] random.door_close */
    public static function RANDOM_DOOR_CLOSE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('random.door_close')); }
    /** [block] random.door_close @see self::RANDOM_DOOR_CLOSE() */
    public static function DOOR_CLOSE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('random.door_close')); }
    /** [block] random.door_open */
    public static function RANDOM_DOOR_OPEN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('random.door_open')); }
    /** [block] random.door_open @see self::RANDOM_DOOR_OPEN() */
    public static function DOOR_OPEN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('random.door_open')); }
    /** [block] random.enderchestclosed */
    public static function RANDOM_ENDERCHESTCLOSED() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('random.enderchestclosed')); }
    /** [block] random.enderchestclosed @see self::RANDOM_ENDERCHESTCLOSED() */
    public static function ENDERCHESTCLOSED() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('random.enderchestclosed')); }
    /** [block] random.enderchestopen */
    public static function RANDOM_ENDERCHESTOPEN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('random.enderchestopen')); }
    /** [block] random.enderchestopen @see self::RANDOM_ENDERCHESTOPEN() */
    public static function ENDERCHESTOPEN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('random.enderchestopen')); }
    /** [block] random.explode */
    public static function RANDOM_EXPLODE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('random.explode')); }
    /** [block] random.fizz */
    public static function RANDOM_FIZZ() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('random.fizz')); }
    /** [block] random.fizz @see self::RANDOM_FIZZ() */
    public static function FIZZ() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('random.fizz')); }
    /** [block] random.fuse */
    public static function RANDOM_FUSE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('random.fuse')); }
    /** [block] random.glass */
    public static function RANDOM_GLASS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('random.glass')); }
    /** [block] random.glass @see self::RANDOM_GLASS() */
    public static function GLASS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('random.glass')); }
    /** [block] random.lever_click */
    public static function RANDOM_LEVER_CLICK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('random.lever_click')); }
    /** [block] random.lever_click @see self::RANDOM_LEVER_CLICK() */
    public static function LEVER_CLICK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('random.lever_click')); }
    /** [block] random.potion.brewed */
    public static function RANDOM_POTION_BREWED() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('random.potion.brewed')); }
    /** [block] random.potion.brewed @see self::RANDOM_POTION_BREWED() */
    public static function POTION_BREWED() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('random.potion.brewed')); }
    /** [block] random.shulkerboxclosed */
    public static function RANDOM_SHULKERBOXCLOSED() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('random.shulkerboxclosed')); }
    /** [block] random.shulkerboxclosed @see self::RANDOM_SHULKERBOXCLOSED() */
    public static function SHULKERBOXCLOSED() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('random.shulkerboxclosed')); }
    /** [block] random.shulkerboxopen */
    public static function RANDOM_SHULKERBOXOPEN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('random.shulkerboxopen')); }
    /** [block] random.shulkerboxopen @see self::RANDOM_SHULKERBOXOPEN() */
    public static function SHULKERBOXOPEN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('random.shulkerboxopen')); }
    /** [block] random.stone_click */
    public static function RANDOM_STONE_CLICK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('random.stone_click')); }
    /** [block] random.stone_click @see self::RANDOM_STONE_CLICK() */
    public static function STONE_CLICK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('random.stone_click')); }
    /** [block] random.wood_click */
    public static function RANDOM_WOOD_CLICK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('random.wood_click')); }
    /** [block] random.wood_click @see self::RANDOM_WOOD_CLICK() */
    public static function WOOD_CLICK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('random.wood_click')); }
    /** [block] resonate.amethyst_block */
    public static function RESONATE_AMETHYST_BLOCK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('resonate.amethyst_block')); }
    /** [block] respawn_anchor.ambient */
    public static function RESPAWN_ANCHOR_AMBIENT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('respawn_anchor.ambient')); }
    /** [block] respawn_anchor.charge */
    public static function RESPAWN_ANCHOR_CHARGE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('respawn_anchor.charge')); }
    /** [block] respawn_anchor.charge @see self::RESPAWN_ANCHOR_CHARGE() */
    public static function CHARGE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('respawn_anchor.charge')); }
    /** [block] respawn_anchor.deplete */
    public static function RESPAWN_ANCHOR_DEPLETE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('respawn_anchor.deplete')); }
    /** [block] respawn_anchor.deplete @see self::RESPAWN_ANCHOR_DEPLETE() */
    public static function DEPLETE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('respawn_anchor.deplete')); }
    /** [block] respawn_anchor.set_spawn */
    public static function RESPAWN_ANCHOR_SET_SPAWN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('respawn_anchor.set_spawn')); }
    /** [block] respawn_anchor.set_spawn @see self::RESPAWN_ANCHOR_SET_SPAWN() */
    public static function SET_SPAWN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('respawn_anchor.set_spawn')); }
    /** [block] shatter.decorated_pot */
    public static function SHATTER_DECORATED_POT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('shatter.decorated_pot')); }
    /** [block] shriek.sculk_shrieker */
    public static function SHRIEK_SCULK_SHRIEKER() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('shriek.sculk_shrieker')); }
    /** [block] smithing_table.use */
    public static function SMITHING_TABLE_USE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('smithing_table.use')); }
    /** [block] smithing_table.use @see self::SMITHING_TABLE_USE() */
    public static function USE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('smithing_table.use')); }
    /** [block] sponge.absorb */
    public static function SPONGE_ABSORB() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('sponge.absorb')); }
    /** [block] sponge.absorb @see self::SPONGE_ABSORB() */
    public static function ABSORB() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('sponge.absorb')); }
    /** [block] step.candle */
    public static function STEP_CANDLE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.candle')); }
    /** [block] step.cherry_leaves */
    public static function STEP_CHERRY_LEAVES() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.cherry_leaves')); }
    /** [block] step.copper_bulb */
    public static function STEP_COPPER_BULB() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.copper_bulb')); }
    /** [block] step.copper_grate */
    public static function STEP_COPPER_GRATE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.copper_grate')); }
    /** [block] step.decorated_pot */
    public static function STEP_DECORATED_POT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.decorated_pot')); }
    /** [block] step.frog_spawn */
    public static function STEP_FROG_SPAWN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.frog_spawn')); }
    /** [block] step.froglight */
    public static function STEP_FROGLIGHT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.froglight')); }
    /** [block] step.sculk_shrieker */
    public static function STEP_SCULK_SHRIEKER() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.sculk_shrieker')); }
    /** [block] step.sculk_vein */
    public static function STEP_SCULK_VEIN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.sculk_vein')); }
    /** [block] step.tuff_bricks */
    public static function STEP_TUFF_BRICKS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.tuff_bricks')); }
    /** [block] step.web */
    public static function STEP_WEB() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.web')); }
    /** [block] tile.piston.in */
    public static function TILE_PISTON_IN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('tile.piston.in')); }
    /** [block] tile.piston.in @see self::TILE_PISTON_IN() */
    public static function PISTON_IN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('tile.piston.in')); }
    /** [block] tile.piston.out */
    public static function TILE_PISTON_OUT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('tile.piston.out')); }
    /** [block] tile.piston.out @see self::TILE_PISTON_OUT() */
    public static function PISTON_OUT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('tile.piston.out')); }
    /** [block] tilt_down.big_dripleaf */
    public static function TILT_DOWN_BIG_DRIPLEAF() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('tilt_down.big_dripleaf')); }
    /** [block] tilt_up.big_dripleaf */
    public static function TILT_UP_BIG_DRIPLEAF() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('tilt_up.big_dripleaf')); }
    /** [block] trial_spawner.ambient */
    public static function TRIAL_SPAWNER_AMBIENT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('trial_spawner.ambient')); }
    /** [block] trial_spawner.ambient_ominous */
    public static function TRIAL_SPAWNER_AMBIENT_OMINOUS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('trial_spawner.ambient_ominous')); }
    /** [block] trial_spawner.ambient_ominous @see self::TRIAL_SPAWNER_AMBIENT_OMINOUS() */
    public static function AMBIENT_OMINOUS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('trial_spawner.ambient_ominous')); }
    /** [block] trial_spawner.break */
    public static function TRIAL_SPAWNER_BREAK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('trial_spawner.break')); }
    /** [block] trial_spawner.charge_activate */
    public static function TRIAL_SPAWNER_CHARGE_ACTIVATE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('trial_spawner.charge_activate')); }
    /** [block] trial_spawner.charge_activate @see self::TRIAL_SPAWNER_CHARGE_ACTIVATE() */
    public static function CHARGE_ACTIVATE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('trial_spawner.charge_activate')); }
    /** [block] trial_spawner.close_shutter */
    public static function TRIAL_SPAWNER_CLOSE_SHUTTER() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('trial_spawner.close_shutter')); }
    /** [block] trial_spawner.close_shutter @see self::TRIAL_SPAWNER_CLOSE_SHUTTER() */
    public static function CLOSE_SHUTTER() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('trial_spawner.close_shutter')); }
    /** [block] trial_spawner.detect_player */
    public static function TRIAL_SPAWNER_DETECT_PLAYER() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('trial_spawner.detect_player')); }
    /** [block] trial_spawner.detect_player @see self::TRIAL_SPAWNER_DETECT_PLAYER() */
    public static function DETECT_PLAYER() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('trial_spawner.detect_player')); }
    /** [block] trial_spawner.eject_item */
    public static function TRIAL_SPAWNER_EJECT_ITEM() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('trial_spawner.eject_item')); }
    /** [block] trial_spawner.eject_item @see self::TRIAL_SPAWNER_EJECT_ITEM() */
    public static function EJECT_ITEM() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('trial_spawner.eject_item')); }
    /** [block] trial_spawner.hit */
    public static function TRIAL_SPAWNER_HIT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('trial_spawner.hit')); }
    /** [block] trial_spawner.hit @see self::TRIAL_SPAWNER_HIT() */
    public static function HIT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('trial_spawner.hit')); }
    /** [block] trial_spawner.open_shutter */
    public static function TRIAL_SPAWNER_OPEN_SHUTTER() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('trial_spawner.open_shutter')); }
    /** [block] trial_spawner.open_shutter @see self::TRIAL_SPAWNER_OPEN_SHUTTER() */
    public static function OPEN_SHUTTER() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('trial_spawner.open_shutter')); }
    /** [block] trial_spawner.place */
    public static function TRIAL_SPAWNER_PLACE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('trial_spawner.place')); }
    /** [block] trial_spawner.spawn_mob */
    public static function TRIAL_SPAWNER_SPAWN_MOB() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('trial_spawner.spawn_mob')); }
    /** [block] trial_spawner.spawn_mob @see self::TRIAL_SPAWNER_SPAWN_MOB() */
    public static function SPAWN_MOB() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('trial_spawner.spawn_mob')); }
    /** [block] trial_spawner.step */
    public static function TRIAL_SPAWNER_STEP() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('trial_spawner.step')); }
    /** [block] trial_spawner.step @see self::TRIAL_SPAWNER_STEP() */
    public static function STEP() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('trial_spawner.step')); }
    /** [block] ui.cartography_table.take_result */
    public static function UI_CARTOGRAPHY_TABLE_TAKE_RESULT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ui.cartography_table.take_result')); }
    /** [block] ui.cartography_table.take_result @see self::UI_CARTOGRAPHY_TABLE_TAKE_RESULT() */
    public static function CARTOGRAPHY_TABLE_TAKE_RESULT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ui.cartography_table.take_result')); }
    /** [block] ui.loom.select_pattern */
    public static function UI_LOOM_SELECT_PATTERN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ui.loom.select_pattern')); }
    /** [block] ui.loom.select_pattern @see self::UI_LOOM_SELECT_PATTERN() */
    public static function LOOM_SELECT_PATTERN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ui.loom.select_pattern')); }
    /** [block] ui.loom.take_result */
    public static function UI_LOOM_TAKE_RESULT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ui.loom.take_result')); }
    /** [block] ui.loom.take_result @see self::UI_LOOM_TAKE_RESULT() */
    public static function LOOM_TAKE_RESULT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ui.loom.take_result')); }
    /** [block] ui.stonecutter.take_result */
    public static function UI_STONECUTTER_TAKE_RESULT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ui.stonecutter.take_result')); }
    /** [block] ui.stonecutter.take_result @see self::UI_STONECUTTER_TAKE_RESULT() */
    public static function STONECUTTER_TAKE_RESULT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ui.stonecutter.take_result')); }
    /** [block] use.ancient_debris */
    public static function USE_ANCIENT_DEBRIS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('use.ancient_debris')); }
    /** [block] use.basalt */
    public static function USE_BASALT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('use.basalt')); }
    /** [block] use.bone_block */
    public static function USE_BONE_BLOCK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('use.bone_block')); }
    /** [block] use.candle */
    public static function USE_CANDLE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('use.candle')); }
    /** [block] use.cave_vines */
    public static function USE_CAVE_VINES() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('use.cave_vines')); }
    /** [block] use.chain */
    public static function USE_CHAIN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('use.chain')); }
    /** [block] use.cloth */
    public static function USE_CLOTH() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('use.cloth')); }
    /** [block] use.copper */
    public static function USE_COPPER() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('use.copper')); }
    /** [block] use.coral */
    public static function USE_CORAL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('use.coral')); }
    /** [block] use.deepslate */
    public static function USE_DEEPSLATE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('use.deepslate')); }
    /** [block] use.deepslate_bricks */
    public static function USE_DEEPSLATE_BRICKS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('use.deepslate_bricks')); }
    /** [block] use.dirt_with_roots */
    public static function USE_DIRT_WITH_ROOTS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('use.dirt_with_roots')); }
    /** [block] use.dripstone_block */
    public static function USE_DRIPSTONE_BLOCK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('use.dripstone_block')); }
    /** [block] use.grass */
    public static function USE_GRASS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('use.grass')); }
    /** [block] use.gravel */
    public static function USE_GRAVEL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('use.gravel')); }
    /** [block] use.hanging_roots */
    public static function USE_HANGING_ROOTS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('use.hanging_roots')); }
    /** [block] use.honey_block */
    public static function USE_HONEY_BLOCK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('use.honey_block')); }
    /** [block] use.ladder */
    public static function USE_LADDER() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('use.ladder')); }
    /** [block] use.moss */
    public static function USE_MOSS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('use.moss')); }
    /** [block] use.nether_brick */
    public static function USE_NETHER_BRICK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('use.nether_brick')); }
    /** [block] use.nether_gold_ore */
    public static function USE_NETHER_GOLD_ORE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('use.nether_gold_ore')); }
    /** [block] use.nether_sprouts */
    public static function USE_NETHER_SPROUTS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('use.nether_sprouts')); }
    /** [block] use.nether_wart */
    public static function USE_NETHER_WART() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('use.nether_wart')); }
    /** [block] use.netherite */
    public static function USE_NETHERITE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('use.netherite')); }
    /** [block] use.netherrack */
    public static function USE_NETHERRACK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('use.netherrack')); }
    /** [block] use.nylium */
    public static function USE_NYLIUM() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('use.nylium')); }
    /** [block] use.pointed_dripstone */
    public static function USE_POINTED_DRIPSTONE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('use.pointed_dripstone')); }
    /** [block] use.roots */
    public static function USE_ROOTS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('use.roots')); }
    /** [block] use.sand */
    public static function USE_SAND() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('use.sand')); }
    /** [block] use.sculk_sensor */
    public static function USE_SCULK_SENSOR() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('use.sculk_sensor')); }
    /** [block] use.shroomlight */
    public static function USE_SHROOMLIGHT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('use.shroomlight')); }
    /** [block] use.slime */
    public static function USE_SLIME() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('use.slime')); }
    /** [block] use.snow */
    public static function USE_SNOW() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('use.snow')); }
    /** [block] use.soul_sand */
    public static function USE_SOUL_SAND() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('use.soul_sand')); }
    /** [block] use.soul_soil */
    public static function USE_SOUL_SOIL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('use.soul_soil')); }
    /** [block] use.spore_blossom */
    public static function USE_SPORE_BLOSSOM() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('use.spore_blossom')); }
    /** [block] use.stem */
    public static function USE_STEM() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('use.stem')); }
    /** [block] use.stone */
    public static function USE_STONE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('use.stone')); }
    /** [block] use.vines */
    public static function USE_VINES() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('use.vines')); }
    /** [block] use.wood */
    public static function USE_WOOD() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('use.wood')); }
    /** [block] vault.activate */
    public static function VAULT_ACTIVATE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('vault.activate')); }
    /** [block] vault.ambient */
    public static function VAULT_AMBIENT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('vault.ambient')); }
    /** [block] vault.break */
    public static function VAULT_BREAK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('vault.break')); }
    /** [block] vault.close_shutter */
    public static function VAULT_CLOSE_SHUTTER() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('vault.close_shutter')); }
    /** [block] vault.deactivate */
    public static function VAULT_DEACTIVATE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('vault.deactivate')); }
    /** [block] vault.eject_item */
    public static function VAULT_EJECT_ITEM() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('vault.eject_item')); }
    /** [block] vault.hit */
    public static function VAULT_HIT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('vault.hit')); }
    /** [block] vault.insert_item */
    public static function VAULT_INSERT_ITEM() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('vault.insert_item')); }
    /** [block] vault.insert_item @see self::VAULT_INSERT_ITEM() */
    public static function INSERT_ITEM() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('vault.insert_item')); }
    /** [block] vault.insert_item_fail */
    public static function VAULT_INSERT_ITEM_FAIL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('vault.insert_item_fail')); }
    /** [block] vault.insert_item_fail @see self::VAULT_INSERT_ITEM_FAIL() */
    public static function INSERT_ITEM_FAIL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('vault.insert_item_fail')); }
    /** [block] vault.open_shutter */
    public static function VAULT_OPEN_SHUTTER() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('vault.open_shutter')); }
    /** [block] vault.place */
    public static function VAULT_PLACE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('vault.place')); }
    /** [block] vault.reject_rewarded_player */
    public static function VAULT_REJECT_REWARDED_PLAYER() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('vault.reject_rewarded_player')); }
    /** [block] vault.reject_rewarded_player @see self::VAULT_REJECT_REWARDED_PLAYER() */
    public static function REJECT_REWARDED_PLAYER() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('vault.reject_rewarded_player')); }
    /** [block] vault.step */
    public static function VAULT_STEP() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('vault.step')); }

}


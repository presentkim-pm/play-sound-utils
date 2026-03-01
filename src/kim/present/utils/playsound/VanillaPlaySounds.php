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
 * Registered vanilla play sounds from sound_definitions.json (Bedrock 1.21.70).
 *
 * @see https://wiki.bedrock.dev/documentation/sound-definitions.html for the full sound list.
 *
 * --- ambient ---
 * @method static PlaySound AMBIENT_BASALT_DELTAS_ADDITIONS()
 * @method static PlaySound AMBIENT_BASALT_DELTAS_LOOP()
 * @method static PlaySound AMBIENT_BASALT_DELTAS_MOOD()
 * @method static PlaySound AMBIENT_CANDLE()
 * @method static PlaySound AMBIENT_CAVE()
 * @method static PlaySound AMBIENT_CRIMSON_FOREST_ADDITIONS()
 * @method static PlaySound AMBIENT_CRIMSON_FOREST_LOOP()
 * @method static PlaySound AMBIENT_CRIMSON_FOREST_MOOD()
 * @method static PlaySound AMBIENT_NETHER_WASTES_ADDITIONS()
 * @method static PlaySound AMBIENT_NETHER_WASTES_LOOP()
 * @method static PlaySound AMBIENT_NETHER_WASTES_MOOD()
 * @method static PlaySound AMBIENT_SOULSAND_VALLEY_ADDITIONS()
 * @method static PlaySound AMBIENT_SOULSAND_VALLEY_LOOP()
 * @method static PlaySound AMBIENT_SOULSAND_VALLEY_MOOD()
 * @method static PlaySound AMBIENT_UNDERWATER_ENTER()
 * @method static PlaySound AMBIENT_UNDERWATER_EXIT()
 * @method static PlaySound AMBIENT_WARPED_FOREST_ADDITIONS()
 * @method static PlaySound AMBIENT_WARPED_FOREST_LOOP()
 * @method static PlaySound AMBIENT_WARPED_FOREST_MOOD()
 * @method static PlaySound AMBIENT_WEATHER_LIGHTNING_IMPACT()
 * @method static PlaySound AMBIENT_WEATHER_RAIN()
 * @method static PlaySound AMBIENT_WEATHER_THUNDER()
 * --- apply_effect ---
 * @method static PlaySound APPLY_EFFECT_BAD_OMEN()
 * @method static PlaySound APPLY_EFFECT_RAID_OMEN()
 * @method static PlaySound APPLY_EFFECT_TRIAL_OMEN()
 * --- armor ---
 * @method static PlaySound ARMOR_BREAK_WOLF()
 * @method static PlaySound ARMOR_CRACK_WOLF()
 * @method static PlaySound ARMOR_DAMAGE_WOLF()
 * @method static PlaySound ARMOR_EQUIP_CHAIN()
 * @method static PlaySound ARMOR_EQUIP_DIAMOND()
 * @method static PlaySound ARMOR_EQUIP_GENERIC()
 * @method static PlaySound ARMOR_EQUIP_GOLD()
 * @method static PlaySound ARMOR_EQUIP_IRON()
 * @method static PlaySound ARMOR_EQUIP_LEATHER()
 * @method static PlaySound ARMOR_EQUIP_NETHERITE()
 * @method static PlaySound ARMOR_EQUIP_WOLF()
 * @method static PlaySound ARMOR_REPAIR_WOLF()
 * @method static PlaySound ARMOR_UNEQUIP_WOLF()
 * --- beacon ---
 * @method static PlaySound BEACON_ACTIVATE()
 * @method static PlaySound BEACON_AMBIENT()
 * @method static PlaySound BEACON_DEACTIVATE()
 * @method static PlaySound BEACON_POWER()
 * --- block ---
 * @method static PlaySound BLOCK_BAMBOO_BREAK()
 * @method static PlaySound BLOCK_BAMBOO_FALL()
 * @method static PlaySound BLOCK_BAMBOO_HIT()
 * @method static PlaySound BLOCK_BAMBOO_PLACE()
 * @method static PlaySound BLOCK_BAMBOO_STEP()
 * @method static PlaySound BLOCK_BAMBOO_SAPLING_BREAK()
 * @method static PlaySound BLOCK_BAMBOO_SAPLING_PLACE()
 * @method static PlaySound BLOCK_BARREL_CLOSE()
 * @method static PlaySound BLOCK_BARREL_OPEN()
 * @method static PlaySound BLOCK_BEEHIVE_DRIP()
 * @method static PlaySound BLOCK_BEEHIVE_ENTER()
 * @method static PlaySound BLOCK_BEEHIVE_EXIT()
 * @method static PlaySound BLOCK_BEEHIVE_SHEAR()
 * @method static PlaySound BLOCK_BEEHIVE_WORK()
 * @method static PlaySound BLOCK_BELL_HIT()
 * @method static PlaySound BLOCK_BLASTFURNACE_FIRE_CRACKLE()
 * @method static PlaySound BLOCK_BOWHIT()
 * @method static PlaySound BLOCK_CAMPFIRE_CRACKLE()
 * @method static PlaySound BLOCK_CARTOGRAPHY_TABLE_USE()
 * @method static PlaySound BLOCK_CAVE_VINES_PLACE()
 * @method static PlaySound BLOCK_CHORUSFLOWER_DEATH()
 * @method static PlaySound BLOCK_CHORUSFLOWER_GROW()
 * @method static PlaySound BLOCK_CLICK()
 * @method static PlaySound BLOCK_COMPOSTER_EMPTY()
 * @method static PlaySound BLOCK_COMPOSTER_FILL()
 * @method static PlaySound BLOCK_COMPOSTER_FILL_SUCCESS()
 * @method static PlaySound BLOCK_COMPOSTER_READY()
 * @method static PlaySound BLOCK_COPPER_BULB_TURN_OFF()
 * @method static PlaySound BLOCK_COPPER_BULB_TURN_ON()
 * @method static PlaySound BLOCK_CREAKING_HEART_AMBIENT()
 * @method static PlaySound BLOCK_CREAKING_HEART_BREAK()
 * @method static PlaySound BLOCK_CREAKING_HEART_FALL()
 * @method static PlaySound BLOCK_CREAKING_HEART_HIT()
 * @method static PlaySound BLOCK_CREAKING_HEART_PLACE()
 * @method static PlaySound BLOCK_CREAKING_HEART_SPAWN_MOB()
 * @method static PlaySound BLOCK_CREAKING_HEART_STEP()
 * @method static PlaySound BLOCK_CREAKING_HEART_TRAIL()
 * @method static PlaySound BLOCK_DECORATED_POT_INSERT()
 * @method static PlaySound BLOCK_DECORATED_POT_INSERT_FAIL()
 * @method static PlaySound BLOCK_ENCHANTING_TABLE_USE()
 * @method static PlaySound BLOCK_END_PORTAL_SPAWN()
 * @method static PlaySound BLOCK_END_PORTAL_FRAME_FILL()
 * @method static PlaySound BLOCK_EYEBLOSSOM_AMBIENT()
 * @method static PlaySound BLOCK_EYEBLOSSOM_CLOSE()
 * @method static PlaySound BLOCK_EYEBLOSSOM_CLOSE_LONG()
 * @method static PlaySound BLOCK_EYEBLOSSOM_OPEN()
 * @method static PlaySound BLOCK_EYEBLOSSOM_OPEN_LONG()
 * @method static PlaySound BLOCK_FALSE()
 * @method static PlaySound BLOCK_FURNACE_LIT()
 * @method static PlaySound BLOCK_GRINDSTONE_USE()
 * @method static PlaySound BLOCK_ITEMFRAME_ADD_ITEM()
 * @method static PlaySound BLOCK_ITEMFRAME_BREAK()
 * @method static PlaySound BLOCK_ITEMFRAME_PLACE()
 * @method static PlaySound BLOCK_ITEMFRAME_REMOVE_ITEM()
 * @method static PlaySound BLOCK_ITEMFRAME_ROTATE_ITEM()
 * @method static PlaySound BLOCK_LANTERN_BREAK()
 * @method static PlaySound BLOCK_LANTERN_FALL()
 * @method static PlaySound BLOCK_LANTERN_HIT()
 * @method static PlaySound BLOCK_LANTERN_PLACE()
 * @method static PlaySound BLOCK_LANTERN_STEP()
 * @method static PlaySound BLOCK_LOOM_USE()
 * @method static PlaySound BLOCK_MANGROVE_ROOTS_BREAK()
 * @method static PlaySound BLOCK_MANGROVE_ROOTS_FALL()
 * @method static PlaySound BLOCK_MANGROVE_ROOTS_HIT()
 * @method static PlaySound BLOCK_MANGROVE_ROOTS_PLACE()
 * @method static PlaySound BLOCK_MANGROVE_ROOTS_STEP()
 * @method static PlaySound BLOCK_MOB_SPAWNER_BREAK()
 * @method static PlaySound BLOCK_MOB_SPAWNER_STEP()
 * @method static PlaySound BLOCK_MUD_BREAK()
 * @method static PlaySound BLOCK_MUD_FALL()
 * @method static PlaySound BLOCK_MUD_HIT()
 * @method static PlaySound BLOCK_MUD_PLACE()
 * @method static PlaySound BLOCK_MUD_STEP()
 * @method static PlaySound BLOCK_MUD_BRICKS_BREAK()
 * @method static PlaySound BLOCK_MUD_BRICKS_FALL()
 * @method static PlaySound BLOCK_MUD_BRICKS_HIT()
 * @method static PlaySound BLOCK_MUD_BRICKS_PLACE()
 * @method static PlaySound BLOCK_MUD_BRICKS_STEP()
 * @method static PlaySound BLOCK_MUDDY_MANGROVE_ROOTS_BREAK()
 * @method static PlaySound BLOCK_MUDDY_MANGROVE_ROOTS_FALL()
 * @method static PlaySound BLOCK_MUDDY_MANGROVE_ROOTS_HIT()
 * @method static PlaySound BLOCK_MUDDY_MANGROVE_ROOTS_PLACE()
 * @method static PlaySound BLOCK_MUDDY_MANGROVE_ROOTS_STEP()
 * @method static PlaySound BLOCK_PACKED_MUD_BREAK()
 * @method static PlaySound BLOCK_PACKED_MUD_FALL()
 * @method static PlaySound BLOCK_PACKED_MUD_HIT()
 * @method static PlaySound BLOCK_PACKED_MUD_PLACE()
 * @method static PlaySound BLOCK_PACKED_MUD_STEP()
 * @method static PlaySound BLOCK_PALE_HANGING_MOSS_AMBIENT()
 * @method static PlaySound BLOCK_RESIN_BREAK()
 * @method static PlaySound BLOCK_RESIN_FALL()
 * @method static PlaySound BLOCK_RESIN_HIT()
 * @method static PlaySound BLOCK_RESIN_PLACE()
 * @method static PlaySound BLOCK_RESIN_STEP()
 * @method static PlaySound BLOCK_RESIN_BRICK_BREAK()
 * @method static PlaySound BLOCK_RESIN_BRICK_FALL()
 * @method static PlaySound BLOCK_RESIN_BRICK_HIT()
 * @method static PlaySound BLOCK_RESIN_BRICK_PLACE()
 * @method static PlaySound BLOCK_RESIN_BRICK_STEP()
 * @method static PlaySound BLOCK_SCAFFOLDING_BREAK()
 * @method static PlaySound BLOCK_SCAFFOLDING_CLIMB()
 * @method static PlaySound BLOCK_SCAFFOLDING_FALL()
 * @method static PlaySound BLOCK_SCAFFOLDING_HIT()
 * @method static PlaySound BLOCK_SCAFFOLDING_PLACE()
 * @method static PlaySound BLOCK_SCAFFOLDING_STEP()
 * @method static PlaySound BLOCK_SIGN_WAXED_INTERACT_FAIL()
 * @method static PlaySound BLOCK_SMOKER_SMOKE()
 * @method static PlaySound BLOCK_SNIFFER_EGG_CRACK()
 * @method static PlaySound BLOCK_SNIFFER_EGG_HATCH()
 * @method static PlaySound BLOCK_STONECUTTER_USE()
 * @method static PlaySound BLOCK_SWEET_BERRY_BUSH_BREAK()
 * @method static PlaySound BLOCK_SWEET_BERRY_BUSH_HURT()
 * @method static PlaySound BLOCK_SWEET_BERRY_BUSH_PICK()
 * @method static PlaySound BLOCK_SWEET_BERRY_BUSH_PLACE()
 * @method static PlaySound BLOCK_TURTLE_EGG_BREAK()
 * @method static PlaySound BLOCK_TURTLE_EGG_CRACK()
 * @method static PlaySound BLOCK_TURTLE_EGG_DROP()
 * @method static PlaySound BLOCK_WEEPING_VINES_BREAK()
 * @method static PlaySound BLOCK_WEEPING_VINES_FALL()
 * @method static PlaySound BLOCK_WEEPING_VINES_HIT()
 * @method static PlaySound BLOCK_WEEPING_VINES_JUMP()
 * @method static PlaySound BLOCK_WEEPING_VINES_LAND()
 * @method static PlaySound BLOCK_WEEPING_VINES_PLACE()
 * @method static PlaySound BLOCK_WEEPING_VINES_STEP()
 * @method static PlaySound BLOCK_WEEPING_VINES_USE()
 * --- bloom ---
 * @method static PlaySound BLOOM_SCULK_CATALYST()
 * --- bottle ---
 * @method static PlaySound BOTTLE_DRAGONBREATH()
 * @method static PlaySound BOTTLE_EMPTY()
 * @method static PlaySound BOTTLE_FILL()
 * --- break ---
 * @method static PlaySound BREAK_AMETHYST_BLOCK()
 * @method static PlaySound BREAK_AMETHYST_CLUSTER()
 * @method static PlaySound BREAK_AZALEA()
 * @method static PlaySound BREAK_BAMBOO_WOOD()
 * @method static PlaySound BREAK_BAMBOO_WOOD_HANGING_SIGN()
 * @method static PlaySound BREAK_BIG_DRIPLEAF()
 * @method static PlaySound BREAK_CALCITE()
 * @method static PlaySound BREAK_CHERRY_LEAVES()
 * @method static PlaySound BREAK_CHERRY_WOOD()
 * @method static PlaySound BREAK_CHERRY_WOOD_HANGING_SIGN()
 * @method static PlaySound BREAK_CHISELED_BOOKSHELF()
 * @method static PlaySound BREAK_COPPER_BULB()
 * @method static PlaySound BREAK_COPPER_GRATE()
 * @method static PlaySound BREAK_DECORATED_POT()
 * @method static PlaySound BREAK_DIRT_WITH_ROOTS()
 * @method static PlaySound BREAK_DRIPSTONE_BLOCK()
 * @method static PlaySound BREAK_FROG_SPAWN()
 * @method static PlaySound BREAK_FROGLIGHT()
 * @method static PlaySound BREAK_HANGING_ROOTS()
 * @method static PlaySound BREAK_HANGING_SIGN()
 * @method static PlaySound BREAK_HEAVY_CORE()
 * @method static PlaySound BREAK_IRON()
 * @method static PlaySound BREAK_LARGE_AMETHYST_BUD()
 * @method static PlaySound BREAK_MEDIUM_AMETHYST_BUD()
 * @method static PlaySound BREAK_NETHER_WOOD()
 * @method static PlaySound BREAK_NETHER_WOOD_HANGING_SIGN()
 * @method static PlaySound BREAK_PINK_PETALS()
 * @method static PlaySound BREAK_POINTED_DRIPSTONE()
 * @method static PlaySound BREAK_SCULK()
 * @method static PlaySound BREAK_SCULK_CATALYST()
 * @method static PlaySound BREAK_SCULK_SENSOR()
 * @method static PlaySound BREAK_SCULK_SHRIEKER()
 * @method static PlaySound BREAK_SCULK_VEIN()
 * @method static PlaySound BREAK_SMALL_AMETHYST_BUD()
 * @method static PlaySound BREAK_SPONGE()
 * @method static PlaySound BREAK_SPORE_BLOSSOM()
 * @method static PlaySound BREAK_SUSPICIOUS_GRAVEL()
 * @method static PlaySound BREAK_SUSPICIOUS_SAND()
 * @method static PlaySound BREAK_TUFF()
 * @method static PlaySound BREAK_WEB()
 * @method static PlaySound BREAK_WET_SPONGE()
 * --- breeze_wind_charge ---
 * @method static PlaySound BREEZE_WIND_CHARGE_BURST()
 * --- brush ---
 * @method static PlaySound BRUSH_GENERIC()
 * @method static PlaySound BRUSH_SUSPICIOUS_GRAVEL()
 * @method static PlaySound BRUSH_SUSPICIOUS_SAND()
 * --- brush_completed ---
 * @method static PlaySound BRUSH_COMPLETED_SUSPICIOUS_GRAVEL()
 * @method static PlaySound BRUSH_COMPLETED_SUSPICIOUS_SAND()
 * --- bubble ---
 * @method static PlaySound BUBBLE_DOWN()
 * @method static PlaySound BUBBLE_DOWNINSIDE()
 * @method static PlaySound BUBBLE_POP()
 * @method static PlaySound BUBBLE_UP()
 * @method static PlaySound BUBBLE_UPINSIDE()
 * --- bucket ---
 * @method static PlaySound BUCKET_EMPTY_FISH()
 * @method static PlaySound BUCKET_EMPTY_LAVA()
 * @method static PlaySound BUCKET_EMPTY_POWDER_SNOW()
 * @method static PlaySound BUCKET_EMPTY_WATER()
 * @method static PlaySound BUCKET_FILL_FISH()
 * @method static PlaySound BUCKET_FILL_LAVA()
 * @method static PlaySound BUCKET_FILL_POWDER_SNOW()
 * @method static PlaySound BUCKET_FILL_WATER()
 * --- bundle ---
 * @method static PlaySound BUNDLE_DROP_CONTENTS()
 * @method static PlaySound BUNDLE_INSERT()
 * @method static PlaySound BUNDLE_INSERT_FAIL()
 * @method static PlaySound BUNDLE_REMOVE_ONE()
 * --- cake ---
 * @method static PlaySound CAKE_ADD_CANDLE()
 * --- camera ---
 * @method static PlaySound CAMERA_TAKE_PICTURE()
 * --- cauldron ---
 * @method static PlaySound CAULDRON_ADDDYE()
 * @method static PlaySound CAULDRON_CLEANARMOR()
 * @method static PlaySound CAULDRON_CLEANBANNER()
 * @method static PlaySound CAULDRON_DYEARMOR()
 * @method static PlaySound CAULDRON_EXPLODE()
 * @method static PlaySound CAULDRON_FILLPOTION()
 * @method static PlaySound CAULDRON_FILLWATER()
 * @method static PlaySound CAULDRON_TAKEPOTION()
 * @method static PlaySound CAULDRON_TAKEWATER()
 * --- cauldron_drip ---
 * @method static PlaySound CAULDRON_DRIP_LAVA_POINTED_DRIPSTONE()
 * @method static PlaySound CAULDRON_DRIP_WATER_POINTED_DRIPSTONE()
 * --- charge ---
 * @method static PlaySound CHARGE_SCULK()
 * --- chime ---
 * @method static PlaySound CHIME_AMETHYST_BLOCK()
 * --- click_off ---
 * @method static PlaySound CLICK_OFF_BAMBOO_WOOD_BUTTON()
 * @method static PlaySound CLICK_OFF_BAMBOO_WOOD_PRESSURE_PLATE()
 * @method static PlaySound CLICK_OFF_CHERRY_WOOD_BUTTON()
 * @method static PlaySound CLICK_OFF_CHERRY_WOOD_PRESSURE_PLATE()
 * @method static PlaySound CLICK_OFF_METAL_PRESSURE_PLATE()
 * @method static PlaySound CLICK_OFF_NETHER_WOOD_BUTTON()
 * @method static PlaySound CLICK_OFF_NETHER_WOOD_PRESSURE_PLATE()
 * @method static PlaySound CLICK_OFF_STONE_PRESSURE_PLATE()
 * @method static PlaySound CLICK_OFF_WOODEN_PRESSURE_PLATE()
 * --- click_on ---
 * @method static PlaySound CLICK_ON_BAMBOO_WOOD_BUTTON()
 * @method static PlaySound CLICK_ON_BAMBOO_WOOD_PRESSURE_PLATE()
 * @method static PlaySound CLICK_ON_CHERRY_WOOD_BUTTON()
 * @method static PlaySound CLICK_ON_CHERRY_WOOD_PRESSURE_PLATE()
 * @method static PlaySound CLICK_ON_METAL_PRESSURE_PLATE()
 * @method static PlaySound CLICK_ON_NETHER_WOOD_BUTTON()
 * @method static PlaySound CLICK_ON_NETHER_WOOD_PRESSURE_PLATE()
 * @method static PlaySound CLICK_ON_STONE_PRESSURE_PLATE()
 * @method static PlaySound CLICK_ON_WOODEN_PRESSURE_PLATE()
 * --- close ---
 * @method static PlaySound CLOSE_BAMBOO_WOOD_DOOR()
 * @method static PlaySound CLOSE_BAMBOO_WOOD_FENCE_GATE()
 * @method static PlaySound CLOSE_BAMBOO_WOOD_TRAPDOOR()
 * @method static PlaySound CLOSE_CHERRY_WOOD_DOOR()
 * @method static PlaySound CLOSE_CHERRY_WOOD_FENCE_GATE()
 * @method static PlaySound CLOSE_CHERRY_WOOD_TRAPDOOR()
 * @method static PlaySound CLOSE_FENCE_GATE()
 * @method static PlaySound CLOSE_IRON_DOOR()
 * @method static PlaySound CLOSE_IRON_TRAPDOOR()
 * @method static PlaySound CLOSE_NETHER_WOOD_DOOR()
 * @method static PlaySound CLOSE_NETHER_WOOD_FENCE_GATE()
 * @method static PlaySound CLOSE_NETHER_WOOD_TRAPDOOR()
 * @method static PlaySound CLOSE_WOODEN_DOOR()
 * @method static PlaySound CLOSE_WOODEN_TRAPDOOR()
 * --- close_door ---
 * @method static PlaySound CLOSE_DOOR_COPPER()
 * --- component ---
 * @method static PlaySound COMPONENT_JUMP_TO_BLOCK()
 * --- conduit ---
 * @method static PlaySound CONDUIT_ACTIVATE()
 * @method static PlaySound CONDUIT_AMBIENT()
 * @method static PlaySound CONDUIT_ATTACK()
 * @method static PlaySound CONDUIT_DEACTIVATE()
 * @method static PlaySound CONDUIT_SHORT()
 * --- copper ---
 * @method static PlaySound COPPER_WAX_OFF()
 * @method static PlaySound COPPER_WAX_ON()
 * --- crafter ---
 * @method static PlaySound CRAFTER_CRAFT()
 * @method static PlaySound CRAFTER_DISABLE_SLOT()
 * @method static PlaySound CRAFTER_FAIL()
 * --- crossbow ---
 * @method static PlaySound CROSSBOW_LOADING_END()
 * @method static PlaySound CROSSBOW_LOADING_MIDDLE()
 * @method static PlaySound CROSSBOW_LOADING_START()
 * @method static PlaySound CROSSBOW_QUICK_CHARGE_END()
 * @method static PlaySound CROSSBOW_QUICK_CHARGE_MIDDLE()
 * @method static PlaySound CROSSBOW_QUICK_CHARGE_START()
 * @method static PlaySound CROSSBOW_SHOOT()
 * --- damage ---
 * @method static PlaySound DAMAGE_FALLBIG()
 * @method static PlaySound DAMAGE_FALLSMALL()
 * @method static PlaySound DAMAGE_THORNS()
 * --- dig ---
 * @method static PlaySound DIG_ANCIENT_DEBRIS()
 * @method static PlaySound DIG_AZALEA_LEAVES()
 * @method static PlaySound DIG_BASALT()
 * @method static PlaySound DIG_BONE_BLOCK()
 * @method static PlaySound DIG_CANDLE()
 * @method static PlaySound DIG_CAVE_VINES()
 * @method static PlaySound DIG_CHAIN()
 * @method static PlaySound DIG_CLOTH()
 * @method static PlaySound DIG_COPPER()
 * @method static PlaySound DIG_CORAL()
 * @method static PlaySound DIG_DEEPSLATE()
 * @method static PlaySound DIG_DEEPSLATE_BRICKS()
 * @method static PlaySound DIG_FUNGUS()
 * @method static PlaySound DIG_GRASS()
 * @method static PlaySound DIG_GRAVEL()
 * @method static PlaySound DIG_HONEY_BLOCK()
 * @method static PlaySound DIG_LODESTONE()
 * @method static PlaySound DIG_MOSS()
 * @method static PlaySound DIG_NETHER_BRICK()
 * @method static PlaySound DIG_NETHER_GOLD_ORE()
 * @method static PlaySound DIG_NETHER_SPROUTS()
 * @method static PlaySound DIG_NETHER_WART()
 * @method static PlaySound DIG_NETHERITE()
 * @method static PlaySound DIG_NETHERRACK()
 * @method static PlaySound DIG_NYLIUM()
 * @method static PlaySound DIG_POWDER_SNOW()
 * @method static PlaySound DIG_ROOTS()
 * @method static PlaySound DIG_SAND()
 * @method static PlaySound DIG_SHROOMLIGHT()
 * @method static PlaySound DIG_SNOW()
 * @method static PlaySound DIG_SOUL_SAND()
 * @method static PlaySound DIG_SOUL_SOIL()
 * @method static PlaySound DIG_STEM()
 * @method static PlaySound DIG_STONE()
 * @method static PlaySound DIG_VINES()
 * @method static PlaySound DIG_WOOD()
 * --- drip ---
 * @method static PlaySound DRIP_LAVA_POINTED_DRIPSTONE()
 * @method static PlaySound DRIP_WATER_POINTED_DRIPSTONE()
 * --- elytra ---
 * @method static PlaySound ELYTRA_LOOP()
 * --- entity ---
 * @method static PlaySound ENTITY_GENERIC_SPLASH()
 * @method static PlaySound ENTITY_WITHER_SKELETON_AMBIENT()
 * @method static PlaySound ENTITY_WITHER_SKELETON_DEATH()
 * @method static PlaySound ENTITY_WITHER_SKELETON_HURT()
 * @method static PlaySound ENTITY_WITHER_SKELETON_STEP()
 * @method static PlaySound ENTITY_ZOMBIE_CONVERTED_TO_DROWNED()
 * --- extinguish ---
 * @method static PlaySound EXTINGUISH_CANDLE()
 * --- fall ---
 * @method static PlaySound FALL_AMETHYST_BLOCK()
 * @method static PlaySound FALL_AMETHYST_CLUSTER()
 * @method static PlaySound FALL_ANCIENT_DEBRIS()
 * @method static PlaySound FALL_AZALEA()
 * @method static PlaySound FALL_AZALEA_LEAVES()
 * @method static PlaySound FALL_BAMBOO_WOOD()
 * @method static PlaySound FALL_BASALT()
 * @method static PlaySound FALL_BIG_DRIPLEAF()
 * @method static PlaySound FALL_BONE_BLOCK()
 * @method static PlaySound FALL_CALCITE()
 * @method static PlaySound FALL_CAVE_VINES()
 * @method static PlaySound FALL_CHAIN()
 * @method static PlaySound FALL_CHERRY_LEAVES()
 * @method static PlaySound FALL_CHERRY_WOOD()
 * @method static PlaySound FALL_CLOTH()
 * @method static PlaySound FALL_COPPER()
 * @method static PlaySound FALL_COPPER_BULB()
 * @method static PlaySound FALL_CORAL()
 * @method static PlaySound FALL_DEEPSLATE()
 * @method static PlaySound FALL_DEEPSLATE_BRICKS()
 * @method static PlaySound FALL_DIRT_WITH_ROOTS()
 * @method static PlaySound FALL_DRIPSTONE_BLOCK()
 * @method static PlaySound FALL_EGG()
 * @method static PlaySound FALL_GRASS()
 * @method static PlaySound FALL_GRAVEL()
 * @method static PlaySound FALL_HANGING_ROOTS()
 * @method static PlaySound FALL_HONEY_BLOCK()
 * @method static PlaySound FALL_LADDER()
 * @method static PlaySound FALL_MOSS()
 * @method static PlaySound FALL_NETHER_BRICK()
 * @method static PlaySound FALL_NETHER_GOLD_ORE()
 * @method static PlaySound FALL_NETHER_SPROUTS()
 * @method static PlaySound FALL_NETHER_WART()
 * @method static PlaySound FALL_NETHER_WOOD()
 * @method static PlaySound FALL_NETHERITE()
 * @method static PlaySound FALL_NETHERRACK()
 * @method static PlaySound FALL_NYLIUM()
 * @method static PlaySound FALL_PINK_PETALS()
 * @method static PlaySound FALL_POINTED_DRIPSTONE()
 * @method static PlaySound FALL_POWDER_SNOW()
 * @method static PlaySound FALL_ROOTS()
 * @method static PlaySound FALL_SAND()
 * @method static PlaySound FALL_SCULK_SENSOR()
 * @method static PlaySound FALL_SCULK_SHRIEKER()
 * @method static PlaySound FALL_SHROOMLIGHT()
 * @method static PlaySound FALL_SLIME()
 * @method static PlaySound FALL_SNOW()
 * @method static PlaySound FALL_SOUL_SAND()
 * @method static PlaySound FALL_SOUL_SOIL()
 * @method static PlaySound FALL_SPORE_BLOSSOM()
 * @method static PlaySound FALL_STEM()
 * @method static PlaySound FALL_STONE()
 * @method static PlaySound FALL_TUFF()
 * @method static PlaySound FALL_VINES()
 * @method static PlaySound FALL_WOOD()
 * --- fire ---
 * @method static PlaySound FIRE_FIRE()
 * @method static PlaySound FIRE_IGNITE()
 * --- firework ---
 * @method static PlaySound FIREWORK_BLAST()
 * @method static PlaySound FIREWORK_LARGE_BLAST()
 * @method static PlaySound FIREWORK_LAUNCH()
 * @method static PlaySound FIREWORK_SHOOT()
 * @method static PlaySound FIREWORK_TWINKLE()
 * --- game ---
 * @method static PlaySound PLAYER_ATTACK_NODAMAGE()
 * @method static PlaySound PLAYER_ATTACK_STRONG()
 * @method static PlaySound PLAYER_DIE()
 * @method static PlaySound PLAYER_HURT()
 * --- hatch ---
 * @method static PlaySound HATCH_FROG_SPAWN()
 * --- hit ---
 * @method static PlaySound HIT_AMETHYST_BLOCK()
 * @method static PlaySound HIT_AMETHYST_CLUSTER()
 * @method static PlaySound HIT_ANCIENT_DEBRIS()
 * @method static PlaySound HIT_ANVIL()
 * @method static PlaySound HIT_AZALEA()
 * @method static PlaySound HIT_AZALEA_LEAVES()
 * @method static PlaySound HIT_BAMBOO_WOOD()
 * @method static PlaySound HIT_BASALT()
 * @method static PlaySound HIT_BIG_DRIPLEAF()
 * @method static PlaySound HIT_BONE_BLOCK()
 * @method static PlaySound HIT_CALCITE()
 * @method static PlaySound HIT_CANDLE()
 * @method static PlaySound HIT_CAVE_VINES()
 * @method static PlaySound HIT_CHAIN()
 * @method static PlaySound HIT_CHERRY_LEAVES()
 * @method static PlaySound HIT_CHERRY_WOOD()
 * @method static PlaySound HIT_CHISELED_BOOKSHELF()
 * @method static PlaySound HIT_CLOTH()
 * @method static PlaySound HIT_COPPER()
 * @method static PlaySound HIT_COPPER_BULB()
 * @method static PlaySound HIT_CORAL()
 * @method static PlaySound HIT_DEEPSLATE()
 * @method static PlaySound HIT_DEEPSLATE_BRICKS()
 * @method static PlaySound HIT_DIRT_WITH_ROOTS()
 * @method static PlaySound HIT_DRIPSTONE_BLOCK()
 * @method static PlaySound HIT_GRASS()
 * @method static PlaySound HIT_GRAVEL()
 * @method static PlaySound HIT_HANGING_ROOTS()
 * @method static PlaySound HIT_HONEY_BLOCK()
 * @method static PlaySound HIT_IRON()
 * @method static PlaySound HIT_LADDER()
 * @method static PlaySound HIT_MOSS()
 * @method static PlaySound HIT_NETHER_BRICK()
 * @method static PlaySound HIT_NETHER_GOLD_ORE()
 * @method static PlaySound HIT_NETHER_SPROUTS()
 * @method static PlaySound HIT_NETHER_WART()
 * @method static PlaySound HIT_NETHER_WOOD()
 * @method static PlaySound HIT_NETHERITE()
 * @method static PlaySound HIT_NETHERRACK()
 * @method static PlaySound HIT_NYLIUM()
 * @method static PlaySound HIT_PINK_PETALS()
 * @method static PlaySound HIT_POINTED_DRIPSTONE()
 * @method static PlaySound HIT_POWDER_SNOW()
 * @method static PlaySound HIT_ROOTS()
 * @method static PlaySound HIT_SAND()
 * @method static PlaySound HIT_SCULK()
 * @method static PlaySound HIT_SCULK_CATALYST()
 * @method static PlaySound HIT_SCULK_SENSOR()
 * @method static PlaySound HIT_SCULK_SHRIEKER()
 * @method static PlaySound HIT_SHROOMLIGHT()
 * @method static PlaySound HIT_SLIME()
 * @method static PlaySound HIT_SNOW()
 * @method static PlaySound HIT_SOUL_SAND()
 * @method static PlaySound HIT_SOUL_SOIL()
 * @method static PlaySound HIT_SPONGE()
 * @method static PlaySound HIT_SPORE_BLOSSOM()
 * @method static PlaySound HIT_STEM()
 * @method static PlaySound HIT_STONE()
 * @method static PlaySound HIT_SUSPICIOUS_GRAVEL()
 * @method static PlaySound HIT_SUSPICIOUS_SAND()
 * @method static PlaySound HIT_TUFF()
 * @method static PlaySound HIT_VINES()
 * @method static PlaySound HIT_WET_SPONGE()
 * @method static PlaySound HIT_WOOD()
 * --- horn ---
 * @method static PlaySound HORN_CALL_0()
 * @method static PlaySound HORN_CALL_1()
 * @method static PlaySound HORN_CALL_2()
 * @method static PlaySound HORN_CALL_3()
 * @method static PlaySound HORN_CALL_4()
 * @method static PlaySound HORN_CALL_5()
 * @method static PlaySound HORN_CALL_6()
 * @method static PlaySound HORN_CALL_7()
 * --- hud ---
 * @method static PlaySound HUD_BUBBLE_POP()
 * --- insert ---
 * @method static PlaySound INSERT_CHISELED_BOOKSHELF()
 * --- insert_enchanted ---
 * @method static PlaySound INSERT_ENCHANTED()
 * --- item ---
 * @method static PlaySound ITEM_BONE_MEAL_USE()
 * @method static PlaySound BOOK_PAGE_TURN()
 * @method static PlaySound BOOK_PUT()
 * @method static PlaySound ITEM_SHIELD_BLOCK()
 * @method static PlaySound ITEM_SPYGLASS_STOP_USING()
 * @method static PlaySound ITEM_SPYGLASS_USE()
 * @method static PlaySound ITEM_TRIDENT_HIT()
 * @method static PlaySound TRIDENT_HIT_GROUND()
 * @method static PlaySound TRIDENT_RETURN()
 * @method static PlaySound TRIDENT_RIPTIDE_1()
 * @method static PlaySound TRIDENT_RIPTIDE_2()
 * @method static PlaySound TRIDENT_RIPTIDE_3()
 * @method static PlaySound TRIDENT_THROW()
 * @method static PlaySound TRIDENT_THUNDER()
 * --- jump ---
 * @method static PlaySound JUMP_ANCIENT_DEBRIS()
 * @method static PlaySound JUMP_AZALEA()
 * @method static PlaySound JUMP_BASALT()
 * @method static PlaySound JUMP_BIG_DRIPLEAF()
 * @method static PlaySound JUMP_BONE_BLOCK()
 * @method static PlaySound JUMP_CAVE_VINES()
 * @method static PlaySound JUMP_CHAIN()
 * @method static PlaySound JUMP_CLOTH()
 * @method static PlaySound JUMP_CORAL()
 * @method static PlaySound JUMP_DEEPSLATE()
 * @method static PlaySound JUMP_DEEPSLATE_BRICKS()
 * @method static PlaySound JUMP_DIRT_WITH_ROOTS()
 * @method static PlaySound JUMP_DRIPSTONE_BLOCK()
 * @method static PlaySound JUMP_GRASS()
 * @method static PlaySound JUMP_GRAVEL()
 * @method static PlaySound JUMP_HANGING_ROOTS()
 * @method static PlaySound JUMP_HONEY_BLOCK()
 * @method static PlaySound JUMP_MOSS()
 * @method static PlaySound JUMP_NETHER_BRICK()
 * @method static PlaySound JUMP_NETHER_GOLD_ORE()
 * @method static PlaySound JUMP_NETHER_SPROUTS()
 * @method static PlaySound JUMP_NETHER_WART()
 * @method static PlaySound JUMP_NETHERITE()
 * @method static PlaySound JUMP_NETHERRACK()
 * @method static PlaySound JUMP_NYLIUM()
 * @method static PlaySound JUMP_POINTED_DRIPSTONE()
 * @method static PlaySound JUMP_ROOTS()
 * @method static PlaySound JUMP_SAND()
 * @method static PlaySound JUMP_SCULK_SENSOR()
 * @method static PlaySound JUMP_SHROOMLIGHT()
 * @method static PlaySound JUMP_SLIME()
 * @method static PlaySound JUMP_SNOW()
 * @method static PlaySound JUMP_SOUL_SAND()
 * @method static PlaySound JUMP_SOUL_SOIL()
 * @method static PlaySound JUMP_SPORE_BLOSSOM()
 * @method static PlaySound JUMP_STEM()
 * @method static PlaySound JUMP_STONE()
 * @method static PlaySound JUMP_VINES()
 * @method static PlaySound JUMP_WOOD()
 * --- land ---
 * @method static PlaySound LAND_ANCIENT_DEBRIS()
 * @method static PlaySound LAND_AZALEA()
 * @method static PlaySound LAND_BASALT()
 * @method static PlaySound LAND_BIG_DRIPLEAF()
 * @method static PlaySound LAND_BONE_BLOCK()
 * @method static PlaySound LAND_CAVE_VINES()
 * @method static PlaySound LAND_CHAIN()
 * @method static PlaySound LAND_CLOTH()
 * @method static PlaySound LAND_CORAL()
 * @method static PlaySound LAND_DEEPSLATE()
 * @method static PlaySound LAND_DEEPSLATE_BRICKS()
 * @method static PlaySound LAND_DIRT_WITH_ROOTS()
 * @method static PlaySound LAND_DRIPSTONE_BLOCK()
 * @method static PlaySound LAND_GRASS()
 * @method static PlaySound LAND_GRAVEL()
 * @method static PlaySound LAND_HANGING_ROOTS()
 * @method static PlaySound LAND_HONEY_BLOCK()
 * @method static PlaySound LAND_MOSS()
 * @method static PlaySound LAND_NETHER_BRICK()
 * @method static PlaySound LAND_NETHER_GOLD_ORE()
 * @method static PlaySound LAND_NETHER_SPROUTS()
 * @method static PlaySound LAND_NETHER_WART()
 * @method static PlaySound LAND_NETHERITE()
 * @method static PlaySound LAND_NETHERRACK()
 * @method static PlaySound LAND_NYLIUM()
 * @method static PlaySound LAND_POINTED_DRIPSTONE()
 * @method static PlaySound LAND_ROOTS()
 * @method static PlaySound LAND_SAND()
 * @method static PlaySound LAND_SCULK_SENSOR()
 * @method static PlaySound LAND_SHROOMLIGHT()
 * @method static PlaySound LAND_SLIME()
 * @method static PlaySound LAND_SNOW()
 * @method static PlaySound LAND_SOUL_SAND()
 * @method static PlaySound LAND_SOUL_SOIL()
 * @method static PlaySound LAND_SPORE_BLOSSOM()
 * @method static PlaySound LAND_STEM()
 * @method static PlaySound LAND_STONE()
 * @method static PlaySound LAND_VINES()
 * @method static PlaySound LAND_WOOD()
 * --- leashknot ---
 * @method static PlaySound LEASHKNOT_BREAK()
 * @method static PlaySound LEASHKNOT_PLACE()
 * --- liquid ---
 * @method static PlaySound LIQUID_LAVA()
 * @method static PlaySound LIQUID_LAVAPOP()
 * @method static PlaySound LIQUID_WATER()
 * --- lodestone_compass ---
 * @method static PlaySound LODESTONE_COMPASS_LINK()
 * --- mace ---
 * @method static PlaySound MACE_HEAVY_SMASH_GROUND()
 * @method static PlaySound MACE_SMASH_AIR()
 * @method static PlaySound MACE_SMASH_GROUND()
 * --- minecart ---
 * @method static PlaySound MINECART_BASE()
 * @method static PlaySound MINECART_INSIDE()
 * --- mob ---
 * @method static PlaySound MOB_AGENT_SPAWN()
 * @method static PlaySound MOB_ALLAY_DEATH()
 * @method static PlaySound MOB_ALLAY_HURT()
 * @method static PlaySound MOB_ALLAY_IDLE()
 * @method static PlaySound MOB_ALLAY_IDLE_HOLDING()
 * @method static PlaySound MOB_ALLAY_ITEM_GIVEN()
 * @method static PlaySound MOB_ALLAY_ITEM_TAKEN()
 * @method static PlaySound MOB_ALLAY_ITEM_THROWN()
 * @method static PlaySound MOB_ARMADILLO_AMBIENT()
 * @method static PlaySound MOB_ARMADILLO_BRUSH()
 * @method static PlaySound MOB_ARMADILLO_DEATH()
 * @method static PlaySound MOB_ARMADILLO_EAT()
 * @method static PlaySound MOB_ARMADILLO_HURT()
 * @method static PlaySound MOB_ARMADILLO_HURT_REDUCED()
 * @method static PlaySound MOB_ARMADILLO_LAND()
 * @method static PlaySound MOB_ARMADILLO_PEEK()
 * @method static PlaySound MOB_ARMADILLO_ROLL()
 * @method static PlaySound MOB_ARMADILLO_SCUTE_DROP()
 * @method static PlaySound MOB_ARMADILLO_STEP()
 * @method static PlaySound MOB_ARMADILLO_UNROLL_FINISH()
 * @method static PlaySound MOB_ARMADILLO_UNROLL_START()
 * @method static PlaySound MOB_ARMOR_STAND_BREAK()
 * @method static PlaySound MOB_ARMOR_STAND_HIT()
 * @method static PlaySound MOB_ARMOR_STAND_LAND()
 * @method static PlaySound MOB_ARMOR_STAND_PLACE()
 * @method static PlaySound MOB_AXOLOTL_ATTACK()
 * @method static PlaySound MOB_AXOLOTL_DEATH()
 * @method static PlaySound MOB_AXOLOTL_HURT()
 * @method static PlaySound MOB_AXOLOTL_IDLE()
 * @method static PlaySound MOB_AXOLOTL_IDLE_WATER()
 * @method static PlaySound MOB_AXOLOTL_SPLASH()
 * @method static PlaySound MOB_AXOLOTL_SWIM()
 * @method static PlaySound MOB_BAT_DEATH()
 * @method static PlaySound MOB_BAT_HURT()
 * @method static PlaySound MOB_BAT_IDLE()
 * @method static PlaySound MOB_BAT_TAKEOFF()
 * @method static PlaySound MOB_BEE_AGGRESSIVE()
 * @method static PlaySound MOB_BEE_DEATH()
 * @method static PlaySound MOB_BEE_HURT()
 * @method static PlaySound MOB_BEE_LOOP()
 * @method static PlaySound MOB_BEE_POLLINATE()
 * @method static PlaySound MOB_BEE_STING()
 * @method static PlaySound MOB_BLAZE_BREATHE()
 * @method static PlaySound MOB_BLAZE_DEATH()
 * @method static PlaySound MOB_BLAZE_HIT()
 * @method static PlaySound MOB_BLAZE_SHOOT()
 * @method static PlaySound MOB_BOGGED_AMBIENT()
 * @method static PlaySound MOB_BOGGED_DEATH()
 * @method static PlaySound MOB_BOGGED_HURT()
 * @method static PlaySound MOB_BOGGED_STEP()
 * @method static PlaySound MOB_BREEZE_CHARGE()
 * @method static PlaySound MOB_BREEZE_DEATH()
 * @method static PlaySound MOB_BREEZE_DEFLECT()
 * @method static PlaySound MOB_BREEZE_HURT()
 * @method static PlaySound MOB_BREEZE_IDLE_AIR()
 * @method static PlaySound MOB_BREEZE_IDLE_GROUND()
 * @method static PlaySound MOB_BREEZE_INHALE()
 * @method static PlaySound MOB_BREEZE_JUMP()
 * @method static PlaySound MOB_BREEZE_LAND()
 * @method static PlaySound MOB_BREEZE_SHOOT()
 * @method static PlaySound MOB_BREEZE_SLIDE()
 * @method static PlaySound MOB_BREEZE_WHIRL()
 * @method static PlaySound MOB_CAMEL_AMBIENT()
 * @method static PlaySound MOB_CAMEL_DASH()
 * @method static PlaySound MOB_CAMEL_DASH_READY()
 * @method static PlaySound MOB_CAMEL_DEATH()
 * @method static PlaySound MOB_CAMEL_EAT()
 * @method static PlaySound MOB_CAMEL_HURT()
 * @method static PlaySound MOB_CAMEL_SIT()
 * @method static PlaySound MOB_CAMEL_STAND()
 * @method static PlaySound MOB_CAMEL_STEP()
 * @method static PlaySound MOB_CAMEL_STEP_SAND()
 * @method static PlaySound MOB_CAT_BEG()
 * @method static PlaySound MOB_CAT_BEG_FOR_FOOD()
 * @method static PlaySound MOB_CAT_EAT()
 * @method static PlaySound MOB_CAT_HISS()
 * @method static PlaySound MOB_CAT_HIT()
 * @method static PlaySound MOB_CAT_MEOW()
 * @method static PlaySound MOB_CAT_PURR()
 * @method static PlaySound MOB_CAT_PURREOW()
 * @method static PlaySound MOB_CAT_STRAYMEOW()
 * @method static PlaySound MOB_CHICKEN_HURT()
 * @method static PlaySound MOB_CHICKEN_PLOP()
 * @method static PlaySound MOB_CHICKEN_SAY()
 * @method static PlaySound MOB_CHICKEN_STEP()
 * @method static PlaySound MOB_COW_HURT()
 * @method static PlaySound MOB_COW_MILK()
 * @method static PlaySound MOB_COW_SAY()
 * @method static PlaySound MOB_COW_STEP()
 * @method static PlaySound MOB_CREAKING_ACTIVATE()
 * @method static PlaySound MOB_CREAKING_AMBIENT()
 * @method static PlaySound MOB_CREAKING_ATTACK()
 * @method static PlaySound MOB_CREAKING_DEACTIVATE()
 * @method static PlaySound MOB_CREAKING_DEATH()
 * @method static PlaySound MOB_CREAKING_FREEZE()
 * @method static PlaySound MOB_CREAKING_SPAWN()
 * @method static PlaySound MOB_CREAKING_STEP()
 * @method static PlaySound MOB_CREAKING_SWAY()
 * @method static PlaySound MOB_CREAKING_TWITCH()
 * @method static PlaySound MOB_CREAKING_UNFREEZE()
 * @method static PlaySound MOB_CREEPER_DEATH()
 * @method static PlaySound MOB_CREEPER_SAY()
 * @method static PlaySound MOB_DOLPHIN_ATTACK()
 * @method static PlaySound MOB_DOLPHIN_BLOWHOLE()
 * @method static PlaySound MOB_DOLPHIN_DEATH()
 * @method static PlaySound MOB_DOLPHIN_EAT()
 * @method static PlaySound MOB_DOLPHIN_HURT()
 * @method static PlaySound MOB_DOLPHIN_IDLE()
 * @method static PlaySound MOB_DOLPHIN_IDLE_WATER()
 * @method static PlaySound MOB_DOLPHIN_JUMP()
 * @method static PlaySound MOB_DOLPHIN_PLAY()
 * @method static PlaySound MOB_DOLPHIN_SPLASH()
 * @method static PlaySound MOB_DOLPHIN_SWIM()
 * @method static PlaySound MOB_DROWNED_DEATH()
 * @method static PlaySound MOB_DROWNED_DEATH_WATER()
 * @method static PlaySound MOB_DROWNED_HURT()
 * @method static PlaySound MOB_DROWNED_HURT_WATER()
 * @method static PlaySound MOB_DROWNED_SAY()
 * @method static PlaySound MOB_DROWNED_SAY_WATER()
 * @method static PlaySound MOB_DROWNED_SHOOT()
 * @method static PlaySound MOB_DROWNED_STEP()
 * @method static PlaySound MOB_DROWNED_SWIM()
 * @method static PlaySound MOB_ELDERGUARDIAN_CURSE()
 * @method static PlaySound MOB_ELDERGUARDIAN_DEATH()
 * @method static PlaySound MOB_ELDERGUARDIAN_HIT()
 * @method static PlaySound MOB_ELDERGUARDIAN_IDLE()
 * @method static PlaySound MOB_ENDERDRAGON_DEATH()
 * @method static PlaySound MOB_ENDERDRAGON_FLAP()
 * @method static PlaySound MOB_ENDERDRAGON_GROWL()
 * @method static PlaySound MOB_ENDERDRAGON_HIT()
 * @method static PlaySound MOB_ENDERMEN_DEATH()
 * @method static PlaySound MOB_ENDERMEN_HIT()
 * @method static PlaySound MOB_ENDERMEN_IDLE()
 * @method static PlaySound MOB_ENDERMEN_PORTAL()
 * @method static PlaySound MOB_ENDERMEN_SCREAM()
 * @method static PlaySound MOB_ENDERMEN_STARE()
 * @method static PlaySound MOB_ENDERMITE_HIT()
 * @method static PlaySound MOB_ENDERMITE_KILL()
 * @method static PlaySound MOB_ENDERMITE_SAY()
 * @method static PlaySound MOB_ENDERMITE_STEP()
 * @method static PlaySound MOB_EVOCATION_FANGS_ATTACK()
 * @method static PlaySound MOB_EVOCATION_ILLAGER_AMBIENT()
 * @method static PlaySound MOB_EVOCATION_ILLAGER_CAST_SPELL()
 * @method static PlaySound MOB_EVOCATION_ILLAGER_CELEBRATE()
 * @method static PlaySound MOB_EVOCATION_ILLAGER_DEATH()
 * @method static PlaySound MOB_EVOCATION_ILLAGER_HURT()
 * @method static PlaySound MOB_EVOCATION_ILLAGER_PREPARE_ATTACK()
 * @method static PlaySound MOB_EVOCATION_ILLAGER_PREPARE_SUMMON()
 * @method static PlaySound MOB_EVOCATION_ILLAGER_PREPARE_WOLOLO()
 * @method static PlaySound MOB_FISH_FLOP()
 * @method static PlaySound MOB_FISH_HURT()
 * @method static PlaySound MOB_FISH_STEP()
 * @method static PlaySound MOB_FOX_AGGRO()
 * @method static PlaySound MOB_FOX_AMBIENT()
 * @method static PlaySound MOB_FOX_BITE()
 * @method static PlaySound MOB_FOX_DEATH()
 * @method static PlaySound MOB_FOX_EAT()
 * @method static PlaySound MOB_FOX_HURT()
 * @method static PlaySound MOB_FOX_SCREECH()
 * @method static PlaySound MOB_FOX_SLEEP()
 * @method static PlaySound MOB_FOX_SNIFF()
 * @method static PlaySound MOB_FOX_SPIT()
 * @method static PlaySound MOB_FROG_AMBIENT()
 * @method static PlaySound MOB_FROG_DEATH()
 * @method static PlaySound MOB_FROG_EAT()
 * @method static PlaySound MOB_FROG_HURT()
 * @method static PlaySound MOB_FROG_JUMP_TO_BLOCK()
 * @method static PlaySound MOB_FROG_LAY_SPAWN()
 * @method static PlaySound MOB_FROG_STEP()
 * @method static PlaySound MOB_FROG_TONGUE()
 * @method static PlaySound MOB_GHAST_AFFECTIONATE_SCREAM()
 * @method static PlaySound MOB_GHAST_CHARGE()
 * @method static PlaySound MOB_GHAST_DEATH()
 * @method static PlaySound MOB_GHAST_FIREBALL()
 * @method static PlaySound MOB_GHAST_MOAN()
 * @method static PlaySound MOB_GHAST_SCREAM()
 * @method static PlaySound MOB_GLOW_SQUID_AMBIENT()
 * @method static PlaySound MOB_GLOW_SQUID_DEATH()
 * @method static PlaySound MOB_GLOW_SQUID_HURT()
 * @method static PlaySound MOB_GLOW_SQUID_INK_SQUIRT()
 * @method static PlaySound MOB_GOAT_AMBIENT()
 * @method static PlaySound MOB_GOAT_AMBIENT_SCREAMER()
 * @method static PlaySound MOB_GOAT_DEATH()
 * @method static PlaySound MOB_GOAT_DEATH_SCREAMER()
 * @method static PlaySound MOB_GOAT_EAT()
 * @method static PlaySound MOB_GOAT_HORN_BREAK()
 * @method static PlaySound MOB_GOAT_HURT()
 * @method static PlaySound MOB_GOAT_HURT_SCREAMER()
 * @method static PlaySound MOB_GOAT_MILK_SCREAMER()
 * @method static PlaySound MOB_GOAT_PREPARE_RAM()
 * @method static PlaySound MOB_GOAT_PREPARE_RAM_SCREAMER()
 * @method static PlaySound MOB_GOAT_RAM_IMPACT()
 * @method static PlaySound MOB_GOAT_RAM_IMPACT_SCREAMER()
 * @method static PlaySound MOB_GOAT_STEP()
 * @method static PlaySound MOB_GUARDIAN_AMBIENT()
 * @method static PlaySound MOB_GUARDIAN_ATTACK_LOOP()
 * @method static PlaySound MOB_GUARDIAN_DEATH()
 * @method static PlaySound MOB_GUARDIAN_FLOP()
 * @method static PlaySound MOB_GUARDIAN_HIT()
 * @method static PlaySound MOB_GUARDIAN_LAND_DEATH()
 * @method static PlaySound MOB_GUARDIAN_LAND_HIT()
 * @method static PlaySound MOB_GUARDIAN_LAND_IDLE()
 * @method static PlaySound MOB_HOGLIN_AMBIENT()
 * @method static PlaySound MOB_HOGLIN_ANGRY()
 * @method static PlaySound MOB_HOGLIN_ATTACK()
 * @method static PlaySound MOB_HOGLIN_CONVERTED_TO_ZOMBIFIED()
 * @method static PlaySound MOB_HOGLIN_DEATH()
 * @method static PlaySound MOB_HOGLIN_HOWL()
 * @method static PlaySound MOB_HOGLIN_HURT()
 * @method static PlaySound MOB_HOGLIN_RETREAT()
 * @method static PlaySound MOB_HOGLIN_STEP()
 * @method static PlaySound MOB_HORSE_ANGRY()
 * @method static PlaySound MOB_HORSE_ARMOR()
 * @method static PlaySound MOB_HORSE_BREATHE()
 * @method static PlaySound MOB_HORSE_DEATH()
 * @method static PlaySound MOB_HORSE_DONKEY_ANGRY()
 * @method static PlaySound MOB_HORSE_DONKEY_DEATH()
 * @method static PlaySound MOB_HORSE_DONKEY_HIT()
 * @method static PlaySound MOB_HORSE_DONKEY_IDLE()
 * @method static PlaySound MOB_HORSE_EAT()
 * @method static PlaySound MOB_HORSE_GALLOP()
 * @method static PlaySound MOB_HORSE_HIT()
 * @method static PlaySound MOB_HORSE_IDLE()
 * @method static PlaySound MOB_HORSE_JUMP()
 * @method static PlaySound MOB_HORSE_LAND()
 * @method static PlaySound MOB_HORSE_LEATHER()
 * @method static PlaySound MOB_HORSE_SKELETON_DEATH()
 * @method static PlaySound MOB_HORSE_SKELETON_HIT()
 * @method static PlaySound MOB_HORSE_SKELETON_IDLE()
 * @method static PlaySound MOB_HORSE_SOFT()
 * @method static PlaySound MOB_HORSE_WOOD()
 * @method static PlaySound MOB_HORSE_ZOMBIE_DEATH()
 * @method static PlaySound MOB_HORSE_ZOMBIE_HIT()
 * @method static PlaySound MOB_HORSE_ZOMBIE_IDLE()
 * @method static PlaySound MOB_HUSK_AMBIENT()
 * @method static PlaySound MOB_HUSK_CONVERT_TO_ZOMBIE()
 * @method static PlaySound MOB_HUSK_DEATH()
 * @method static PlaySound MOB_HUSK_HURT()
 * @method static PlaySound MOB_HUSK_STEP()
 * @method static PlaySound MOB_IRONGOLEM_CRACK()
 * @method static PlaySound MOB_IRONGOLEM_DEATH()
 * @method static PlaySound MOB_IRONGOLEM_HIT()
 * @method static PlaySound MOB_IRONGOLEM_REPAIR()
 * @method static PlaySound MOB_IRONGOLEM_THROW()
 * @method static PlaySound MOB_IRONGOLEM_WALK()
 * @method static PlaySound MOB_LLAMA_ANGRY()
 * @method static PlaySound MOB_LLAMA_DEATH()
 * @method static PlaySound MOB_LLAMA_EAT()
 * @method static PlaySound MOB_LLAMA_HURT()
 * @method static PlaySound MOB_LLAMA_IDLE()
 * @method static PlaySound MOB_LLAMA_SPIT()
 * @method static PlaySound MOB_LLAMA_STEP()
 * @method static PlaySound MOB_LLAMA_SWAG()
 * @method static PlaySound MOB_MAGMACUBE_BIG()
 * @method static PlaySound MOB_MAGMACUBE_JUMP()
 * @method static PlaySound MOB_MAGMACUBE_SMALL()
 * @method static PlaySound MOB_MOOSHROOM_CONVERT()
 * @method static PlaySound MOB_MOOSHROOM_EAT()
 * @method static PlaySound MOB_MOOSHROOM_SUSPICIOUS_MILK()
 * @method static PlaySound MOB_OCELOT_DEATH()
 * @method static PlaySound MOB_OCELOT_IDLE()
 * @method static PlaySound MOB_PANDA_BITE()
 * @method static PlaySound MOB_PANDA_CANT_BREED()
 * @method static PlaySound MOB_PANDA_DEATH()
 * @method static PlaySound MOB_PANDA_EAT()
 * @method static PlaySound MOB_PANDA_HURT()
 * @method static PlaySound MOB_PANDA_IDLE()
 * @method static PlaySound MOB_PANDA_IDLE_AGGRESSIVE()
 * @method static PlaySound MOB_PANDA_IDLE_WORRIED()
 * @method static PlaySound MOB_PANDA_PRESNEEZE()
 * @method static PlaySound MOB_PANDA_SNEEZE()
 * @method static PlaySound MOB_PANDA_STEP()
 * @method static PlaySound MOB_PANDA_BABY_IDLE()
 * @method static PlaySound MOB_PARROT_DEATH()
 * @method static PlaySound MOB_PARROT_EAT()
 * @method static PlaySound MOB_PARROT_FLY()
 * @method static PlaySound MOB_PARROT_HURT()
 * @method static PlaySound MOB_PARROT_IDLE()
 * @method static PlaySound MOB_PARROT_IMITATE_CREAKING()
 * @method static PlaySound MOB_PARROT_STEP()
 * @method static PlaySound MOB_PHANTOM_BITE()
 * @method static PlaySound MOB_PHANTOM_DEATH()
 * @method static PlaySound MOB_PHANTOM_FLAP()
 * @method static PlaySound MOB_PHANTOM_HURT()
 * @method static PlaySound MOB_PHANTOM_IDLE()
 * @method static PlaySound MOB_PHANTOM_SWOOP()
 * @method static PlaySound MOB_PIG_BOOST()
 * @method static PlaySound MOB_PIG_DEATH()
 * @method static PlaySound MOB_PIG_SAY()
 * @method static PlaySound MOB_PIG_STEP()
 * @method static PlaySound MOB_PIGLIN_ADMIRING_ITEM()
 * @method static PlaySound MOB_PIGLIN_AMBIENT()
 * @method static PlaySound MOB_PIGLIN_ANGRY()
 * @method static PlaySound MOB_PIGLIN_CELEBRATE()
 * @method static PlaySound MOB_PIGLIN_CONVERTED_TO_ZOMBIFIED()
 * @method static PlaySound MOB_PIGLIN_DEATH()
 * @method static PlaySound MOB_PIGLIN_HURT()
 * @method static PlaySound MOB_PIGLIN_JEALOUS()
 * @method static PlaySound MOB_PIGLIN_RETREAT()
 * @method static PlaySound MOB_PIGLIN_STEP()
 * @method static PlaySound MOB_PIGLIN_BRUTE_AMBIENT()
 * @method static PlaySound MOB_PIGLIN_BRUTE_ANGRY()
 * @method static PlaySound MOB_PIGLIN_BRUTE_CONVERTED_TO_ZOMBIFIED()
 * @method static PlaySound MOB_PIGLIN_BRUTE_DEATH()
 * @method static PlaySound MOB_PIGLIN_BRUTE_HURT()
 * @method static PlaySound MOB_PIGLIN_BRUTE_STEP()
 * @method static PlaySound MOB_PILLAGER_CELEBRATE()
 * @method static PlaySound MOB_PILLAGER_DEATH()
 * @method static PlaySound MOB_PILLAGER_HURT()
 * @method static PlaySound MOB_PILLAGER_IDLE()
 * @method static PlaySound MOB_PLAYER_HURT_DROWN()
 * @method static PlaySound MOB_PLAYER_HURT_FREEZE()
 * @method static PlaySound MOB_PLAYER_HURT_ON_FIRE()
 * @method static PlaySound MOB_POLARBEAR_DEATH()
 * @method static PlaySound MOB_POLARBEAR_HURT()
 * @method static PlaySound MOB_POLARBEAR_IDLE()
 * @method static PlaySound MOB_POLARBEAR_STEP()
 * @method static PlaySound MOB_POLARBEAR_WARNING()
 * @method static PlaySound MOB_POLARBEAR_BABY_IDLE()
 * @method static PlaySound MOB_RABBIT_DEATH()
 * @method static PlaySound MOB_RABBIT_HOP()
 * @method static PlaySound MOB_RABBIT_HURT()
 * @method static PlaySound MOB_RABBIT_IDLE()
 * @method static PlaySound MOB_RAVAGER_AMBIENT()
 * @method static PlaySound MOB_RAVAGER_BITE()
 * @method static PlaySound MOB_RAVAGER_CELEBRATE()
 * @method static PlaySound MOB_RAVAGER_DEATH()
 * @method static PlaySound MOB_RAVAGER_HURT()
 * @method static PlaySound MOB_RAVAGER_ROAR()
 * @method static PlaySound MOB_RAVAGER_STEP()
 * @method static PlaySound MOB_RAVAGER_STUN()
 * @method static PlaySound MOB_SHEEP_SAY()
 * @method static PlaySound MOB_SHEEP_SHEAR()
 * @method static PlaySound MOB_SHEEP_STEP()
 * @method static PlaySound MOB_SHULKER_AMBIENT()
 * @method static PlaySound MOB_SHULKER_BULLET_HIT()
 * @method static PlaySound MOB_SHULKER_CLOSE()
 * @method static PlaySound MOB_SHULKER_CLOSE_HURT()
 * @method static PlaySound MOB_SHULKER_DEATH()
 * @method static PlaySound MOB_SHULKER_HURT()
 * @method static PlaySound MOB_SHULKER_OPEN()
 * @method static PlaySound MOB_SHULKER_SHOOT()
 * @method static PlaySound MOB_SHULKER_TELEPORT()
 * @method static PlaySound MOB_SILVERFISH_HIT()
 * @method static PlaySound MOB_SILVERFISH_KILL()
 * @method static PlaySound MOB_SILVERFISH_SAY()
 * @method static PlaySound MOB_SILVERFISH_STEP()
 * @method static PlaySound MOB_SKELETON_CONVERT_TO_STRAY()
 * @method static PlaySound MOB_SKELETON_DEATH()
 * @method static PlaySound MOB_SKELETON_HURT()
 * @method static PlaySound MOB_SKELETON_SAY()
 * @method static PlaySound MOB_SKELETON_STEP()
 * @method static PlaySound MOB_SLIME_ATTACK()
 * @method static PlaySound MOB_SLIME_BIG()
 * @method static PlaySound MOB_SLIME_DEATH()
 * @method static PlaySound MOB_SLIME_HURT()
 * @method static PlaySound MOB_SLIME_JUMP()
 * @method static PlaySound MOB_SLIME_SMALL()
 * @method static PlaySound MOB_SLIME_SQUISH()
 * @method static PlaySound MOB_SNIFFER_DEATH()
 * @method static PlaySound MOB_SNIFFER_DIGGING()
 * @method static PlaySound MOB_SNIFFER_DROP_SEED()
 * @method static PlaySound MOB_SNIFFER_EAT()
 * @method static PlaySound MOB_SNIFFER_HAPPY()
 * @method static PlaySound MOB_SNIFFER_HURT()
 * @method static PlaySound MOB_SNIFFER_IDLE()
 * @method static PlaySound MOB_SNIFFER_LONG_SNIFF()
 * @method static PlaySound MOB_SNIFFER_PLOP()
 * @method static PlaySound MOB_SNIFFER_SEARCHING()
 * @method static PlaySound MOB_SNIFFER_SNIFFSNIFF()
 * @method static PlaySound MOB_SNIFFER_STAND_UP()
 * @method static PlaySound MOB_SNIFFER_STEP()
 * @method static PlaySound MOB_SNOWGOLEM_DEATH()
 * @method static PlaySound MOB_SNOWGOLEM_HURT()
 * @method static PlaySound MOB_SNOWGOLEM_SHOOT()
 * @method static PlaySound MOB_SPIDER_DEATH()
 * @method static PlaySound MOB_SPIDER_SAY()
 * @method static PlaySound MOB_SPIDER_STEP()
 * @method static PlaySound MOB_SQUID_AMBIENT()
 * @method static PlaySound MOB_SQUID_DEATH()
 * @method static PlaySound MOB_SQUID_HURT()
 * @method static PlaySound MOB_SQUID_INK_SQUIRT()
 * @method static PlaySound MOB_STRAY_AMBIENT()
 * @method static PlaySound MOB_STRAY_DEATH()
 * @method static PlaySound MOB_STRAY_HURT()
 * @method static PlaySound MOB_STRAY_STEP()
 * @method static PlaySound MOB_STRIDER_DEATH()
 * @method static PlaySound MOB_STRIDER_EAT()
 * @method static PlaySound MOB_STRIDER_HURT()
 * @method static PlaySound MOB_STRIDER_IDLE()
 * @method static PlaySound MOB_STRIDER_PANIC()
 * @method static PlaySound MOB_STRIDER_STEP()
 * @method static PlaySound MOB_STRIDER_STEP_LAVA()
 * @method static PlaySound MOB_STRIDER_TEMPT()
 * @method static PlaySound MOB_TADPOLE_CONVERT_TO_FROG()
 * @method static PlaySound MOB_TADPOLE_DEATH()
 * @method static PlaySound MOB_TADPOLE_HURT()
 * @method static PlaySound MOB_TURTLE_AMBIENT()
 * @method static PlaySound MOB_TURTLE_DEATH()
 * @method static PlaySound MOB_TURTLE_HURT()
 * @method static PlaySound MOB_TURTLE_STEP()
 * @method static PlaySound MOB_TURTLE_SWIM()
 * @method static PlaySound MOB_TURTLE_BABY_BORN()
 * @method static PlaySound MOB_TURTLE_BABY_DEATH()
 * @method static PlaySound MOB_TURTLE_BABY_HURT()
 * @method static PlaySound MOB_TURTLE_BABY_STEP()
 * @method static PlaySound MOB_VEX_AMBIENT()
 * @method static PlaySound MOB_VEX_CHARGE()
 * @method static PlaySound MOB_VEX_DEATH()
 * @method static PlaySound MOB_VEX_HURT()
 * @method static PlaySound MOB_VILLAGER_DEATH()
 * @method static PlaySound MOB_VILLAGER_HAGGLE()
 * @method static PlaySound MOB_VILLAGER_HIT()
 * @method static PlaySound MOB_VILLAGER_IDLE()
 * @method static PlaySound MOB_VILLAGER_NO()
 * @method static PlaySound MOB_VILLAGER_YES()
 * @method static PlaySound MOB_VINDICATOR_CELEBRATE()
 * @method static PlaySound MOB_VINDICATOR_DEATH()
 * @method static PlaySound MOB_VINDICATOR_HURT()
 * @method static PlaySound MOB_VINDICATOR_IDLE()
 * @method static PlaySound MOB_WANDERINGTRADER_DEATH()
 * @method static PlaySound MOB_WANDERINGTRADER_DISAPPEARED()
 * @method static PlaySound MOB_WANDERINGTRADER_DRINK_MILK()
 * @method static PlaySound MOB_WANDERINGTRADER_DRINK_POTION()
 * @method static PlaySound MOB_WANDERINGTRADER_HAGGLE()
 * @method static PlaySound MOB_WANDERINGTRADER_HURT()
 * @method static PlaySound MOB_WANDERINGTRADER_IDLE()
 * @method static PlaySound MOB_WANDERINGTRADER_NO()
 * @method static PlaySound MOB_WANDERINGTRADER_REAPPEARED()
 * @method static PlaySound MOB_WANDERINGTRADER_YES()
 * @method static PlaySound MOB_WARDEN_AGITATED()
 * @method static PlaySound MOB_WARDEN_ANGRY()
 * @method static PlaySound MOB_WARDEN_ATTACK()
 * @method static PlaySound MOB_WARDEN_CLICKING()
 * @method static PlaySound MOB_WARDEN_DEATH()
 * @method static PlaySound MOB_WARDEN_DIG()
 * @method static PlaySound MOB_WARDEN_EMERGE()
 * @method static PlaySound MOB_WARDEN_HEARTBEAT()
 * @method static PlaySound MOB_WARDEN_HURT()
 * @method static PlaySound MOB_WARDEN_IDLE()
 * @method static PlaySound MOB_WARDEN_LISTENING()
 * @method static PlaySound MOB_WARDEN_LISTENING_ANGRY()
 * @method static PlaySound MOB_WARDEN_NEARBY_CLOSE()
 * @method static PlaySound MOB_WARDEN_NEARBY_CLOSER()
 * @method static PlaySound MOB_WARDEN_NEARBY_CLOSEST()
 * @method static PlaySound MOB_WARDEN_ROAR()
 * @method static PlaySound MOB_WARDEN_SNIFF()
 * @method static PlaySound MOB_WARDEN_SONIC_BOOM()
 * @method static PlaySound MOB_WARDEN_SONIC_CHARGE()
 * @method static PlaySound MOB_WARDEN_STEP()
 * @method static PlaySound MOB_WITCH_AMBIENT()
 * @method static PlaySound MOB_WITCH_CELEBRATE()
 * @method static PlaySound MOB_WITCH_DEATH()
 * @method static PlaySound MOB_WITCH_DRINK()
 * @method static PlaySound MOB_WITCH_HURT()
 * @method static PlaySound MOB_WITCH_THROW()
 * @method static PlaySound MOB_WITHER_AMBIENT()
 * @method static PlaySound MOB_WITHER_BREAK_BLOCK()
 * @method static PlaySound MOB_WITHER_DEATH()
 * @method static PlaySound MOB_WITHER_HURT()
 * @method static PlaySound MOB_WITHER_SHOOT()
 * @method static PlaySound MOB_WITHER_SPAWN()
 * @method static PlaySound MOB_WOLF_BARK()
 * @method static PlaySound MOB_WOLF_DEATH()
 * @method static PlaySound MOB_WOLF_GROWL()
 * @method static PlaySound MOB_WOLF_HURT()
 * @method static PlaySound MOB_WOLF_PANTING()
 * @method static PlaySound MOB_WOLF_SHAKE()
 * @method static PlaySound MOB_WOLF_STEP()
 * @method static PlaySound MOB_WOLF_WHINE()
 * @method static PlaySound MOB_ZOGLIN_ANGRY()
 * @method static PlaySound MOB_ZOGLIN_ATTACK()
 * @method static PlaySound MOB_ZOGLIN_DEATH()
 * @method static PlaySound MOB_ZOGLIN_HURT()
 * @method static PlaySound MOB_ZOGLIN_IDLE()
 * @method static PlaySound MOB_ZOGLIN_STEP()
 * @method static PlaySound MOB_ZOMBIE_DEATH()
 * @method static PlaySound MOB_ZOMBIE_HURT()
 * @method static PlaySound MOB_ZOMBIE_REMEDY()
 * @method static PlaySound MOB_ZOMBIE_SAY()
 * @method static PlaySound MOB_ZOMBIE_STEP()
 * @method static PlaySound MOB_ZOMBIE_UNFECT()
 * @method static PlaySound MOB_ZOMBIE_WOOD()
 * @method static PlaySound MOB_ZOMBIE_WOODBREAK()
 * @method static PlaySound MOB_ZOMBIE_VILLAGER_DEATH()
 * @method static PlaySound MOB_ZOMBIE_VILLAGER_HURT()
 * @method static PlaySound MOB_ZOMBIE_VILLAGER_SAY()
 * @method static PlaySound MOB_ZOMBIEPIG_ZPIG()
 * @method static PlaySound MOB_ZOMBIEPIG_ZPIGANGRY()
 * @method static PlaySound MOB_ZOMBIEPIG_ZPIGDEATH()
 * @method static PlaySound MOB_ZOMBIEPIG_ZPIGHURT()
 * --- music ---
 * @method static PlaySound MUSIC_GAME()
 * @method static PlaySound MUSIC_GAME_BASALT_DELTAS()
 * @method static PlaySound MUSIC_GAME_CREATIVE()
 * @method static PlaySound MUSIC_GAME_CREDITS()
 * @method static PlaySound MUSIC_GAME_CRIMSON_FOREST()
 * @method static PlaySound MUSIC_GAME_DEEP_DARK()
 * @method static PlaySound MUSIC_GAME_DRIPSTONE_CAVES()
 * @method static PlaySound MUSIC_GAME_END()
 * @method static PlaySound MUSIC_GAME_ENDBOSS()
 * @method static PlaySound MUSIC_GAME_FROZEN_PEAKS()
 * @method static PlaySound MUSIC_GAME_GROVE()
 * @method static PlaySound MUSIC_GAME_JAGGED_PEAKS()
 * @method static PlaySound MUSIC_GAME_LUSH_CAVES()
 * @method static PlaySound MUSIC_GAME_MEADOW()
 * @method static PlaySound MUSIC_GAME_NETHER()
 * @method static PlaySound MUSIC_GAME_NETHER_WASTES()
 * @method static PlaySound MUSIC_GAME_SNOWY_SLOPES()
 * @method static PlaySound MUSIC_GAME_SOUL_SAND_VALLEY()
 * @method static PlaySound MUSIC_GAME_SOULSAND_VALLEY()
 * @method static PlaySound MUSIC_GAME_STONY_PEAKS()
 * @method static PlaySound MUSIC_GAME_SWAMP_MUSIC()
 * @method static PlaySound MUSIC_GAME_WARPED_FOREST()
 * @method static PlaySound MUSIC_GAME_WATER()
 * @method static PlaySound MUSIC_GAME_AND_WILD_EQUAL_CHANCE()
 * @method static PlaySound MUSIC_GAME_AND_WILD_FAVOR_GAME()
 * @method static PlaySound MUSIC_MENU()
 * @method static PlaySound MUSIC_OVERWORLD_BAMBOO_JUNGLE()
 * @method static PlaySound MUSIC_OVERWORLD_CHERRY_GROVE()
 * @method static PlaySound MUSIC_OVERWORLD_DEEP_DARK()
 * @method static PlaySound MUSIC_OVERWORLD_DESERT()
 * @method static PlaySound MUSIC_OVERWORLD_DRIPSTONE_CAVES()
 * @method static PlaySound MUSIC_OVERWORLD_FLOWER_FOREST()
 * @method static PlaySound MUSIC_OVERWORLD_GROVE()
 * @method static PlaySound MUSIC_OVERWORLD_JAGGED_PEAKS()
 * @method static PlaySound MUSIC_OVERWORLD_JUNGLE()
 * @method static PlaySound MUSIC_OVERWORLD_JUNGLE_EDGE()
 * @method static PlaySound MUSIC_OVERWORLD_LUSH_CAVES()
 * @method static PlaySound MUSIC_OVERWORLD_MESA()
 * @method static PlaySound MUSIC_OVERWORLD_SNOWY_SLOPES()
 * @method static PlaySound MUSIC_OVERWORLD_STONY_PEAKS()
 * --- note ---
 * @method static PlaySound NOTE_BANJO()
 * @method static PlaySound NOTE_BASS()
 * @method static PlaySound NOTE_BASSATTACK()
 * @method static PlaySound NOTE_BD()
 * @method static PlaySound NOTE_BELL()
 * @method static PlaySound NOTE_BIT()
 * @method static PlaySound NOTE_CHIME()
 * @method static PlaySound NOTE_COW_BELL()
 * @method static PlaySound NOTE_CREEPER()
 * @method static PlaySound NOTE_DIDGERIDOO()
 * @method static PlaySound NOTE_ENDERDRAGON()
 * @method static PlaySound NOTE_FLUTE()
 * @method static PlaySound NOTE_GUITAR()
 * @method static PlaySound NOTE_HARP()
 * @method static PlaySound NOTE_HAT()
 * @method static PlaySound NOTE_IRON_XYLOPHONE()
 * @method static PlaySound NOTE_PIGLIN()
 * @method static PlaySound NOTE_PLING()
 * @method static PlaySound NOTE_SKELETON()
 * @method static PlaySound NOTE_SNARE()
 * @method static PlaySound NOTE_WITHERSKELETON()
 * @method static PlaySound NOTE_XYLOPHONE()
 * @method static PlaySound NOTE_ZOMBIE()
 * --- ominous_bottle ---
 * @method static PlaySound OMINOUS_BOTTLE_END_USE()
 * --- ominous_item_spawner ---
 * @method static PlaySound OMINOUS_ITEM_SPAWNER_ABOUT_TO_SPAWN_ITEM()
 * @method static PlaySound OMINOUS_ITEM_SPAWNER_SPAWN_ITEM()
 * @method static PlaySound OMINOUS_ITEM_SPAWNER_SPAWN_ITEM_BEGIN()
 * --- open ---
 * @method static PlaySound OPEN_BAMBOO_WOOD_DOOR()
 * @method static PlaySound OPEN_BAMBOO_WOOD_FENCE_GATE()
 * @method static PlaySound OPEN_BAMBOO_WOOD_TRAPDOOR()
 * @method static PlaySound OPEN_CHERRY_WOOD_DOOR()
 * @method static PlaySound OPEN_CHERRY_WOOD_FENCE_GATE()
 * @method static PlaySound OPEN_CHERRY_WOOD_TRAPDOOR()
 * @method static PlaySound OPEN_FENCE_GATE()
 * @method static PlaySound OPEN_IRON_DOOR()
 * @method static PlaySound OPEN_IRON_TRAPDOOR()
 * @method static PlaySound OPEN_NETHER_WOOD_DOOR()
 * @method static PlaySound OPEN_NETHER_WOOD_FENCE_GATE()
 * @method static PlaySound OPEN_NETHER_WOOD_TRAPDOOR()
 * @method static PlaySound OPEN_WOODEN_DOOR()
 * @method static PlaySound OPEN_WOODEN_TRAPDOOR()
 * --- open_door ---
 * @method static PlaySound OPEN_DOOR_COPPER()
 * --- open_trapdoor ---
 * @method static PlaySound OPEN_TRAPDOOR_COPPER()
 * --- particle ---
 * @method static PlaySound PARTICLE_SOUL_ESCAPE()
 * --- pick_berries ---
 * @method static PlaySound PICK_BERRIES_CAVE_VINES()
 * --- pickup ---
 * @method static PlaySound PICKUP_CHISELED_BOOKSHELF()
 * --- pickup_enchanted ---
 * @method static PlaySound PICKUP_ENCHANTED()
 * --- place ---
 * @method static PlaySound PLACE_AMETHYST_BLOCK()
 * @method static PlaySound PLACE_AMETHYST_CLUSTER()
 * @method static PlaySound PLACE_AZALEA()
 * @method static PlaySound PLACE_AZALEA_LEAVES()
 * @method static PlaySound PLACE_BAMBOO_WOOD()
 * @method static PlaySound PLACE_BIG_DRIPLEAF()
 * @method static PlaySound PLACE_CALCITE()
 * @method static PlaySound PLACE_CHERRY_LEAVES()
 * @method static PlaySound PLACE_CHERRY_WOOD()
 * @method static PlaySound PLACE_CHISELED_BOOKSHELF()
 * @method static PlaySound PLACE_COPPER()
 * @method static PlaySound PLACE_COPPER_BULB()
 * @method static PlaySound PLACE_DEEPSLATE()
 * @method static PlaySound PLACE_DEEPSLATE_BRICKS()
 * @method static PlaySound PLACE_DIRT_WITH_ROOTS()
 * @method static PlaySound PLACE_DRIPSTONE_BLOCK()
 * @method static PlaySound PLACE_HANGING_ROOTS()
 * @method static PlaySound PLACE_IRON()
 * @method static PlaySound PLACE_LARGE_AMETHYST_BUD()
 * @method static PlaySound PLACE_MEDIUM_AMETHYST_BUD()
 * @method static PlaySound PLACE_MOSS()
 * @method static PlaySound PLACE_NETHER_WOOD()
 * @method static PlaySound PLACE_PINK_PETALS()
 * @method static PlaySound PLACE_POINTED_DRIPSTONE()
 * @method static PlaySound PLACE_POWDER_SNOW()
 * @method static PlaySound PLACE_SCULK()
 * @method static PlaySound PLACE_SCULK_CATALYST()
 * @method static PlaySound PLACE_SCULK_SENSOR()
 * @method static PlaySound PLACE_SCULK_SHRIEKER()
 * @method static PlaySound PLACE_SMALL_AMETHYST_BUD()
 * @method static PlaySound PLACE_SPONGE()
 * @method static PlaySound PLACE_SPORE_BLOSSOM()
 * @method static PlaySound PLACE_SUSPICIOUS_GRAVEL()
 * @method static PlaySound PLACE_SUSPICIOUS_SAND()
 * @method static PlaySound PLACE_TUFF()
 * @method static PlaySound PLACE_TUFF_BRICKS()
 * @method static PlaySound PLACE_WET_SPONGE()
 * --- portal ---
 * @method static PlaySound PORTAL_PORTAL()
 * @method static PlaySound PORTAL_TRAVEL()
 * @method static PlaySound PORTAL_TRIGGER()
 * --- power ---
 * @method static PlaySound POWER_OFF_SCULK_SENSOR()
 * @method static PlaySound POWER_ON_SCULK_SENSOR()
 * --- pumpkin ---
 * @method static PlaySound PUMPKIN_CARVE()
 * --- raid ---
 * @method static PlaySound RAID_HORN()
 * --- random ---
 * @method static PlaySound ANVIL_BREAK()
 * @method static PlaySound ANVIL_LAND()
 * @method static PlaySound ANVIL_USE()
 * @method static PlaySound BOW()
 * @method static PlaySound BOWHIT()
 * @method static PlaySound BREAK()
 * @method static PlaySound BURP()
 * @method static PlaySound CHEST_CLOSED()
 * @method static PlaySound CHEST_OPEN()
 * @method static PlaySound CLICK()
 * @method static PlaySound DOOR_CLOSE()
 * @method static PlaySound DOOR_OPEN()
 * @method static PlaySound DRINK()
 * @method static PlaySound DRINK_HONEY()
 * @method static PlaySound EAT()
 * @method static PlaySound ENDER_CHEST_CLOSED()
 * @method static PlaySound ENDER_CHEST_OPEN()
 * @method static PlaySound EXPLODE()
 * @method static PlaySound FIZZ()
 * @method static PlaySound FUSE()
 * @method static PlaySound GLASS()
 * @method static PlaySound HURT()
 * @method static PlaySound LEVELUP()
 * @method static PlaySound LEVER_CLICK()
 * @method static PlaySound ORB()
 * @method static PlaySound POP()
 * @method static PlaySound POP2()
 * @method static PlaySound POTION_BREWED()
 * @method static PlaySound SCREENSHOT()
 * @method static PlaySound SHULKER_BOX_CLOSED()
 * @method static PlaySound SHULKER_BOX_OPEN()
 * @method static PlaySound SPLASH()
 * @method static PlaySound STONE_CLICK()
 * @method static PlaySound SWIM()
 * @method static PlaySound TOAST()
 * @method static PlaySound TOAST_RECIPE_UNLOCKING_IN()
 * @method static PlaySound TOAST_RECIPE_UNLOCKING_OUT()
 * @method static PlaySound TOTEM()
 * @method static PlaySound WOOD_CLICK()
 * --- record ---
 * @method static PlaySound RECORD_11()
 * @method static PlaySound RECORD_13()
 * @method static PlaySound RECORD_5()
 * @method static PlaySound RECORD_BLOCKS()
 * @method static PlaySound RECORD_CAT()
 * @method static PlaySound RECORD_CHIRP()
 * @method static PlaySound RECORD_CREATOR()
 * @method static PlaySound RECORD_CREATOR_MUSIC_BOX()
 * @method static PlaySound RECORD_FAR()
 * @method static PlaySound RECORD_MALL()
 * @method static PlaySound RECORD_MELLOHI()
 * @method static PlaySound RECORD_OTHERSIDE()
 * @method static PlaySound RECORD_PIGSTEP()
 * @method static PlaySound RECORD_PRECIPICE()
 * @method static PlaySound RECORD_RELIC()
 * @method static PlaySound RECORD_STAL()
 * @method static PlaySound RECORD_STRAD()
 * @method static PlaySound RECORD_WAIT()
 * @method static PlaySound RECORD_WARD()
 * --- resonate ---
 * @method static PlaySound RESONATE_AMETHYST_BLOCK()
 * --- respawn_anchor ---
 * @method static PlaySound RESPAWN_ANCHOR_AMBIENT()
 * @method static PlaySound RESPAWN_ANCHOR_CHARGE()
 * @method static PlaySound RESPAWN_ANCHOR_DEPLETE()
 * @method static PlaySound RESPAWN_ANCHOR_SET_SPAWN()
 * --- shatter ---
 * @method static PlaySound SHATTER_DECORATED_POT()
 * --- shriek ---
 * @method static PlaySound SHRIEK_SCULK_SHRIEKER()
 * --- sign ---
 * @method static PlaySound SIGN_DYE_USE()
 * @method static PlaySound SIGN_INK_SAC_USE()
 * --- smithing_table ---
 * @method static PlaySound SMITHING_TABLE_USE()
 * --- sponge ---
 * @method static PlaySound SPONGE_ABSORB()
 * --- spread ---
 * @method static PlaySound SPREAD_SCULK()
 * --- step ---
 * @method static PlaySound STEP_AMETHYST_BLOCK()
 * @method static PlaySound STEP_AMETHYST_CLUSTER()
 * @method static PlaySound STEP_ANCIENT_DEBRIS()
 * @method static PlaySound STEP_AZALEA()
 * @method static PlaySound STEP_AZALEA_LEAVES()
 * @method static PlaySound STEP_BAMBOO_WOOD()
 * @method static PlaySound STEP_BAMBOO_WOOD_HANGING_SIGN()
 * @method static PlaySound STEP_BASALT()
 * @method static PlaySound STEP_BIG_DRIPLEAF()
 * @method static PlaySound STEP_BONE_BLOCK()
 * @method static PlaySound STEP_CALCITE()
 * @method static PlaySound STEP_CANDLE()
 * @method static PlaySound STEP_CAVE_VINES()
 * @method static PlaySound STEP_CHAIN()
 * @method static PlaySound STEP_CHERRY_LEAVES()
 * @method static PlaySound STEP_CHERRY_WOOD()
 * @method static PlaySound STEP_CHERRY_WOOD_HANGING_SIGN()
 * @method static PlaySound STEP_CHISELED_BOOKSHELF()
 * @method static PlaySound STEP_CLOTH()
 * @method static PlaySound STEP_COPPER()
 * @method static PlaySound STEP_COPPER_BULB()
 * @method static PlaySound STEP_COPPER_GRATE()
 * @method static PlaySound STEP_CORAL()
 * @method static PlaySound STEP_DECORATED_POT()
 * @method static PlaySound STEP_DEEPSLATE()
 * @method static PlaySound STEP_DEEPSLATE_BRICKS()
 * @method static PlaySound STEP_DIRT_WITH_ROOTS()
 * @method static PlaySound STEP_DRIPSTONE_BLOCK()
 * @method static PlaySound STEP_FROG_SPAWN()
 * @method static PlaySound STEP_FROGLIGHT()
 * @method static PlaySound STEP_GRASS()
 * @method static PlaySound STEP_GRAVEL()
 * @method static PlaySound STEP_HANGING_ROOTS()
 * @method static PlaySound STEP_HANGING_SIGN()
 * @method static PlaySound STEP_HEAVY_CORE()
 * @method static PlaySound STEP_HONEY_BLOCK()
 * @method static PlaySound STEP_IRON()
 * @method static PlaySound STEP_LADDER()
 * @method static PlaySound STEP_MOSS()
 * @method static PlaySound STEP_NETHER_BRICK()
 * @method static PlaySound STEP_NETHER_GOLD_ORE()
 * @method static PlaySound STEP_NETHER_SPROUTS()
 * @method static PlaySound STEP_NETHER_WART()
 * @method static PlaySound STEP_NETHER_WOOD()
 * @method static PlaySound STEP_NETHER_WOOD_HANGING_SIGN()
 * @method static PlaySound STEP_NETHERITE()
 * @method static PlaySound STEP_NETHERRACK()
 * @method static PlaySound STEP_NYLIUM()
 * @method static PlaySound STEP_PINK_PETALS()
 * @method static PlaySound STEP_POINTED_DRIPSTONE()
 * @method static PlaySound STEP_POWDER_SNOW()
 * @method static PlaySound STEP_ROOTS()
 * @method static PlaySound STEP_SAND()
 * @method static PlaySound STEP_SCULK()
 * @method static PlaySound STEP_SCULK_CATALYST()
 * @method static PlaySound STEP_SCULK_SENSOR()
 * @method static PlaySound STEP_SCULK_SHRIEKER()
 * @method static PlaySound STEP_SCULK_VEIN()
 * @method static PlaySound STEP_SHROOMLIGHT()
 * @method static PlaySound STEP_SLIME()
 * @method static PlaySound STEP_SNOW()
 * @method static PlaySound STEP_SOUL_SAND()
 * @method static PlaySound STEP_SOUL_SOIL()
 * @method static PlaySound STEP_SPONGE()
 * @method static PlaySound STEP_SPORE_BLOSSOM()
 * @method static PlaySound STEP_STEM()
 * @method static PlaySound STEP_STONE()
 * @method static PlaySound STEP_SUSPICIOUS_GRAVEL()
 * @method static PlaySound STEP_SUSPICIOUS_SAND()
 * @method static PlaySound STEP_TUFF()
 * @method static PlaySound STEP_TUFF_BRICKS()
 * @method static PlaySound STEP_VINES()
 * @method static PlaySound STEP_WEB()
 * @method static PlaySound STEP_WET_SPONGE()
 * @method static PlaySound STEP_WOOD()
 * --- tile ---
 * @method static PlaySound TILE_PISTON_IN()
 * @method static PlaySound TILE_PISTON_OUT()
 * --- tilt_down ---
 * @method static PlaySound TILT_DOWN_BIG_DRIPLEAF()
 * --- tilt_up ---
 * @method static PlaySound TILT_UP_BIG_DRIPLEAF()
 * --- trial_spawner ---
 * @method static PlaySound TRIAL_SPAWNER_AMBIENT()
 * @method static PlaySound TRIAL_SPAWNER_AMBIENT_OMINOUS()
 * @method static PlaySound TRIAL_SPAWNER_BREAK()
 * @method static PlaySound TRIAL_SPAWNER_CHARGE_ACTIVATE()
 * @method static PlaySound TRIAL_SPAWNER_CLOSE_SHUTTER()
 * @method static PlaySound TRIAL_SPAWNER_DETECT_PLAYER()
 * @method static PlaySound TRIAL_SPAWNER_EJECT_ITEM()
 * @method static PlaySound TRIAL_SPAWNER_HIT()
 * @method static PlaySound TRIAL_SPAWNER_OPEN_SHUTTER()
 * @method static PlaySound TRIAL_SPAWNER_PLACE()
 * @method static PlaySound TRIAL_SPAWNER_SPAWN_MOB()
 * @method static PlaySound TRIAL_SPAWNER_STEP()
 * --- ui ---
 * @method static PlaySound CARTOGRAPHY_TABLE_TAKE_RESULT()
 * @method static PlaySound UI_DRAWER_CLOSE()
 * @method static PlaySound UI_DRAWER_OPEN()
 * @method static PlaySound UI_HARDCORE_DISABLE()
 * @method static PlaySound UI_HARDCORE_ENABLE()
 * @method static PlaySound UI_HARDCORE_TOGGLE_PRESS()
 * @method static PlaySound LOOM_SELECT_PATTERN()
 * @method static PlaySound LOOM_TAKE_RESULT()
 * @method static PlaySound STONECUTTER_TAKE_RESULT()
 * --- use ---
 * @method static PlaySound USE_ANCIENT_DEBRIS()
 * @method static PlaySound USE_BASALT()
 * @method static PlaySound USE_BONE_BLOCK()
 * @method static PlaySound USE_CANDLE()
 * @method static PlaySound USE_CAVE_VINES()
 * @method static PlaySound USE_CHAIN()
 * @method static PlaySound USE_CLOTH()
 * @method static PlaySound USE_COPPER()
 * @method static PlaySound USE_CORAL()
 * @method static PlaySound USE_DEEPSLATE()
 * @method static PlaySound USE_DEEPSLATE_BRICKS()
 * @method static PlaySound USE_DIRT_WITH_ROOTS()
 * @method static PlaySound USE_DRIPSTONE_BLOCK()
 * @method static PlaySound USE_GRASS()
 * @method static PlaySound USE_GRAVEL()
 * @method static PlaySound USE_HANGING_ROOTS()
 * @method static PlaySound USE_HONEY_BLOCK()
 * @method static PlaySound USE_LADDER()
 * @method static PlaySound USE_MOSS()
 * @method static PlaySound USE_NETHER_BRICK()
 * @method static PlaySound USE_NETHER_GOLD_ORE()
 * @method static PlaySound USE_NETHER_SPROUTS()
 * @method static PlaySound USE_NETHER_WART()
 * @method static PlaySound USE_NETHERITE()
 * @method static PlaySound USE_NETHERRACK()
 * @method static PlaySound USE_NYLIUM()
 * @method static PlaySound USE_POINTED_DRIPSTONE()
 * @method static PlaySound USE_ROOTS()
 * @method static PlaySound USE_SAND()
 * @method static PlaySound USE_SCULK_SENSOR()
 * @method static PlaySound USE_SHROOMLIGHT()
 * @method static PlaySound USE_SLIME()
 * @method static PlaySound USE_SNOW()
 * @method static PlaySound USE_SOUL_SAND()
 * @method static PlaySound USE_SOUL_SOIL()
 * @method static PlaySound USE_SPORE_BLOSSOM()
 * @method static PlaySound USE_STEM()
 * @method static PlaySound USE_STONE()
 * @method static PlaySound USE_VINES()
 * @method static PlaySound USE_WOOD()
 * --- vault ---
 * @method static PlaySound VAULT_ACTIVATE()
 * @method static PlaySound VAULT_AMBIENT()
 * @method static PlaySound VAULT_BREAK()
 * @method static PlaySound VAULT_CLOSE_SHUTTER()
 * @method static PlaySound VAULT_DEACTIVATE()
 * @method static PlaySound VAULT_EJECT_ITEM()
 * @method static PlaySound VAULT_HIT()
 * @method static PlaySound VAULT_INSERT_ITEM()
 * @method static PlaySound VAULT_INSERT_ITEM_FAIL()
 * @method static PlaySound VAULT_OPEN_SHUTTER()
 * @method static PlaySound VAULT_PLACE()
 * @method static PlaySound VAULT_REJECT_REWARDED_PLAYER()
 * @method static PlaySound VAULT_STEP()
 * --- vr ---
 * @method static PlaySound VR_STUTTERTURN()
 * --- wind_charge ---
 * @method static PlaySound WIND_CHARGE_BURST()
 * --- other ---
 * @method static PlaySound SCRAPE()
 */

final class VanillaPlaySounds{
    use CloningRegistryTrait;

    protected static function register(string $key, string $soundName) : void{
        self::_registryRegister($key, new PlaySound($soundName));
    }

    protected static function setup() : void{
        /** Register ambient sounds */
        self::register("ambient_basalt_deltas_additions", "ambient.basalt_deltas.additions");
        self::register("ambient_basalt_deltas_loop", "ambient.basalt_deltas.loop");
        self::register("ambient_basalt_deltas_mood", "ambient.basalt_deltas.mood");
        self::register("ambient_candle", "ambient.candle");
        self::register("ambient_cave", "ambient.cave");
        self::register("ambient_crimson_forest_additions", "ambient.crimson_forest.additions");
        self::register("ambient_crimson_forest_loop", "ambient.crimson_forest.loop");
        self::register("ambient_crimson_forest_mood", "ambient.crimson_forest.mood");
        self::register("ambient_nether_wastes_additions", "ambient.nether_wastes.additions");
        self::register("ambient_nether_wastes_loop", "ambient.nether_wastes.loop");
        self::register("ambient_nether_wastes_mood", "ambient.nether_wastes.mood");
        self::register("ambient_soulsand_valley_additions", "ambient.soulsand_valley.additions");
        self::register("ambient_soulsand_valley_loop", "ambient.soulsand_valley.loop");
        self::register("ambient_soulsand_valley_mood", "ambient.soulsand_valley.mood");
        self::register("ambient_underwater_enter", "ambient.underwater.enter");
        self::register("ambient_underwater_exit", "ambient.underwater.exit");
        self::register("ambient_warped_forest_additions", "ambient.warped_forest.additions");
        self::register("ambient_warped_forest_loop", "ambient.warped_forest.loop");
        self::register("ambient_warped_forest_mood", "ambient.warped_forest.mood");
        self::register("ambient_weather_lightning_impact", "ambient.weather.lightning.impact");
        self::register("ambient_weather_rain", "ambient.weather.rain");
        self::register("ambient_weather_thunder", "ambient.weather.thunder");
        /** Register apply_effect sounds */
        self::register("apply_effect_bad_omen", "apply_effect.bad_omen");
        self::register("apply_effect_raid_omen", "apply_effect.raid_omen");
        self::register("apply_effect_trial_omen", "apply_effect.trial_omen");
        /** Register armor sounds */
        self::register("armor_break_wolf", "armor.break_wolf");
        self::register("armor_crack_wolf", "armor.crack_wolf");
        self::register("armor_damage_wolf", "armor.damage_wolf");
        self::register("armor_equip_chain", "armor.equip_chain");
        self::register("armor_equip_diamond", "armor.equip_diamond");
        self::register("armor_equip_generic", "armor.equip_generic");
        self::register("armor_equip_gold", "armor.equip_gold");
        self::register("armor_equip_iron", "armor.equip_iron");
        self::register("armor_equip_leather", "armor.equip_leather");
        self::register("armor_equip_netherite", "armor.equip_netherite");
        self::register("armor_equip_wolf", "armor.equip_wolf");
        self::register("armor_repair_wolf", "armor.repair_wolf");
        self::register("armor_unequip_wolf", "armor.unequip_wolf");
        /** Register beacon sounds */
        self::register("beacon_activate", "beacon.activate");
        self::register("beacon_ambient", "beacon.ambient");
        self::register("beacon_deactivate", "beacon.deactivate");
        self::register("beacon_power", "beacon.power");
        /** Register block sounds */
        self::register("block_bamboo_break", "block.bamboo.break");
        self::register("block_bamboo_fall", "block.bamboo.fall");
        self::register("block_bamboo_hit", "block.bamboo.hit");
        self::register("block_bamboo_place", "block.bamboo.place");
        self::register("block_bamboo_step", "block.bamboo.step");
        self::register("block_bamboo_sapling_break", "block.bamboo_sapling.break");
        self::register("block_bamboo_sapling_place", "block.bamboo_sapling.place");
        self::register("block_barrel_close", "block.barrel.close");
        self::register("block_barrel_open", "block.barrel.open");
        self::register("block_beehive_drip", "block.beehive.drip");
        self::register("block_beehive_enter", "block.beehive.enter");
        self::register("block_beehive_exit", "block.beehive.exit");
        self::register("block_beehive_shear", "block.beehive.shear");
        self::register("block_beehive_work", "block.beehive.work");
        self::register("block_bell_hit", "block.bell.hit");
        self::register("block_blastfurnace_fire_crackle", "block.blastfurnace.fire_crackle");
        self::register("block_bowhit", "block.bowhit");
        self::register("block_campfire_crackle", "block.campfire.crackle");
        self::register("block_cartography_table_use", "block.cartography_table.use");
        self::register("block_cave_vines_place", "block.cave_vines.place");
        self::register("block_chorusflower_death", "block.chorusflower.death");
        self::register("block_chorusflower_grow", "block.chorusflower.grow");
        self::register("block_click", "block.click");
        self::register("block_composter_empty", "block.composter.empty");
        self::register("block_composter_fill", "block.composter.fill");
        self::register("block_composter_fill_success", "block.composter.fill_success");
        self::register("block_composter_ready", "block.composter.ready");
        self::register("block_copper_bulb_turn_off", "block.copper_bulb.turn_off");
        self::register("block_copper_bulb_turn_on", "block.copper_bulb.turn_on");
        self::register("block_creaking_heart_ambient", "block.creaking_heart.ambient");
        self::register("block_creaking_heart_break", "block.creaking_heart.break");
        self::register("block_creaking_heart_fall", "block.creaking_heart.fall");
        self::register("block_creaking_heart_hit", "block.creaking_heart.hit");
        self::register("block_creaking_heart_place", "block.creaking_heart.place");
        self::register("block_creaking_heart_spawn_mob", "block.creaking_heart.spawn_mob");
        self::register("block_creaking_heart_step", "block.creaking_heart.step");
        self::register("block_creaking_heart_trail", "block.creaking_heart.trail");
        self::register("block_decorated_pot_insert", "block.decorated_pot.insert");
        self::register("block_decorated_pot_insert_fail", "block.decorated_pot.insert_fail");
        self::register("block_enchanting_table_use", "block.enchanting_table.use");
        self::register("block_end_portal_spawn", "block.end_portal.spawn");
        self::register("block_end_portal_frame_fill", "block.end_portal_frame.fill");
        self::register("block_eyeblossom_ambient", "block.eyeblossom.ambient");
        self::register("block_eyeblossom_close", "block.eyeblossom.close");
        self::register("block_eyeblossom_close_long", "block.eyeblossom.close_long");
        self::register("block_eyeblossom_open", "block.eyeblossom.open");
        self::register("block_eyeblossom_open_long", "block.eyeblossom.open_long");
        self::register("block_false", "block.false_permissions");
        self::register("block_furnace_lit", "block.furnace.lit");
        self::register("block_grindstone_use", "block.grindstone.use");
        self::register("block_itemframe_add_item", "block.itemframe.add_item");
        self::register("block_itemframe_break", "block.itemframe.break");
        self::register("block_itemframe_place", "block.itemframe.place");
        self::register("block_itemframe_remove_item", "block.itemframe.remove_item");
        self::register("block_itemframe_rotate_item", "block.itemframe.rotate_item");
        self::register("block_lantern_break", "block.lantern.break");
        self::register("block_lantern_fall", "block.lantern.fall");
        self::register("block_lantern_hit", "block.lantern.hit");
        self::register("block_lantern_place", "block.lantern.place");
        self::register("block_lantern_step", "block.lantern.step");
        self::register("block_loom_use", "block.loom.use");
        self::register("block_mangrove_roots_break", "block.mangrove_roots.break");
        self::register("block_mangrove_roots_fall", "block.mangrove_roots.fall");
        self::register("block_mangrove_roots_hit", "block.mangrove_roots.hit");
        self::register("block_mangrove_roots_place", "block.mangrove_roots.place");
        self::register("block_mangrove_roots_step", "block.mangrove_roots.step");
        self::register("block_mob_spawner_break", "block.mob_spawner.break");
        self::register("block_mob_spawner_step", "block.mob_spawner.step");
        self::register("block_mud_break", "block.mud.break");
        self::register("block_mud_fall", "block.mud.fall");
        self::register("block_mud_hit", "block.mud.hit");
        self::register("block_mud_place", "block.mud.place");
        self::register("block_mud_step", "block.mud.step");
        self::register("block_mud_bricks_break", "block.mud_bricks.break");
        self::register("block_mud_bricks_fall", "block.mud_bricks.fall");
        self::register("block_mud_bricks_hit", "block.mud_bricks.hit");
        self::register("block_mud_bricks_place", "block.mud_bricks.place");
        self::register("block_mud_bricks_step", "block.mud_bricks.step");
        self::register("block_muddy_mangrove_roots_break", "block.muddy_mangrove_roots.break");
        self::register("block_muddy_mangrove_roots_fall", "block.muddy_mangrove_roots.fall");
        self::register("block_muddy_mangrove_roots_hit", "block.muddy_mangrove_roots.hit");
        self::register("block_muddy_mangrove_roots_place", "block.muddy_mangrove_roots.place");
        self::register("block_muddy_mangrove_roots_step", "block.muddy_mangrove_roots.step");
        self::register("block_packed_mud_break", "block.packed_mud.break");
        self::register("block_packed_mud_fall", "block.packed_mud.fall");
        self::register("block_packed_mud_hit", "block.packed_mud.hit");
        self::register("block_packed_mud_place", "block.packed_mud.place");
        self::register("block_packed_mud_step", "block.packed_mud.step");
        self::register("block_pale_hanging_moss_ambient", "block.pale_hanging_moss.ambient");
        self::register("block_resin_break", "block.resin.break");
        self::register("block_resin_fall", "block.resin.fall");
        self::register("block_resin_hit", "block.resin.hit");
        self::register("block_resin_place", "block.resin.place");
        self::register("block_resin_step", "block.resin.step");
        self::register("block_resin_brick_break", "block.resin_brick.break");
        self::register("block_resin_brick_fall", "block.resin_brick.fall");
        self::register("block_resin_brick_hit", "block.resin_brick.hit");
        self::register("block_resin_brick_place", "block.resin_brick.place");
        self::register("block_resin_brick_step", "block.resin_brick.step");
        self::register("block_scaffolding_break", "block.scaffolding.break");
        self::register("block_scaffolding_climb", "block.scaffolding.climb");
        self::register("block_scaffolding_fall", "block.scaffolding.fall");
        self::register("block_scaffolding_hit", "block.scaffolding.hit");
        self::register("block_scaffolding_place", "block.scaffolding.place");
        self::register("block_scaffolding_step", "block.scaffolding.step");
        self::register("block_sign_waxed_interact_fail", "block.sign.waxed_interact_fail");
        self::register("block_smoker_smoke", "block.smoker.smoke");
        self::register("block_sniffer_egg_crack", "block.sniffer_egg.crack");
        self::register("block_sniffer_egg_hatch", "block.sniffer_egg.hatch");
        self::register("block_stonecutter_use", "block.stonecutter.use");
        self::register("block_sweet_berry_bush_break", "block.sweet_berry_bush.break");
        self::register("block_sweet_berry_bush_hurt", "block.sweet_berry_bush.hurt");
        self::register("block_sweet_berry_bush_pick", "block.sweet_berry_bush.pick");
        self::register("block_sweet_berry_bush_place", "block.sweet_berry_bush.place");
        self::register("block_turtle_egg_break", "block.turtle_egg.break");
        self::register("block_turtle_egg_crack", "block.turtle_egg.crack");
        self::register("block_turtle_egg_drop", "block.turtle_egg.drop");
        self::register("block_weeping_vines_break", "block.weeping_vines.break");
        self::register("block_weeping_vines_fall", "block.weeping_vines.fall");
        self::register("block_weeping_vines_hit", "block.weeping_vines.hit");
        self::register("block_weeping_vines_jump", "block.weeping_vines.jump");
        self::register("block_weeping_vines_land", "block.weeping_vines.land");
        self::register("block_weeping_vines_place", "block.weeping_vines.place");
        self::register("block_weeping_vines_step", "block.weeping_vines.step");
        self::register("block_weeping_vines_use", "block.weeping_vines.use");
        /** Register bloom sounds */
        self::register("bloom_sculk_catalyst", "bloom.sculk_catalyst");
        /** Register bottle sounds */
        self::register("bottle_dragonbreath", "bottle.dragonbreath");
        self::register("bottle_empty", "bottle.empty");
        self::register("bottle_fill", "bottle.fill");
        /** Register break sounds */
        self::register("break_amethyst_block", "break.amethyst_block");
        self::register("break_amethyst_cluster", "break.amethyst_cluster");
        self::register("break_azalea", "break.azalea");
        self::register("break_bamboo_wood", "break.bamboo_wood");
        self::register("break_bamboo_wood_hanging_sign", "break.bamboo_wood_hanging_sign");
        self::register("break_big_dripleaf", "break.big_dripleaf");
        self::register("break_calcite", "break.calcite");
        self::register("break_cherry_leaves", "break.cherry_leaves");
        self::register("break_cherry_wood", "break.cherry_wood");
        self::register("break_cherry_wood_hanging_sign", "break.cherry_wood_hanging_sign");
        self::register("break_chiseled_bookshelf", "break.chiseled_bookshelf");
        self::register("break_copper_bulb", "break.copper_bulb");
        self::register("break_copper_grate", "break.copper_grate");
        self::register("break_decorated_pot", "break.decorated_pot");
        self::register("break_dirt_with_roots", "break.dirt_with_roots");
        self::register("break_dripstone_block", "break.dripstone_block");
        self::register("break_frog_spawn", "break.frog_spawn");
        self::register("break_froglight", "break.froglight");
        self::register("break_hanging_roots", "break.hanging_roots");
        self::register("break_hanging_sign", "break.hanging_sign");
        self::register("break_heavy_core", "break.heavy_core");
        self::register("break_iron", "break.iron");
        self::register("break_large_amethyst_bud", "break.large_amethyst_bud");
        self::register("break_medium_amethyst_bud", "break.medium_amethyst_bud");
        self::register("break_nether_wood", "break.nether_wood");
        self::register("break_nether_wood_hanging_sign", "break.nether_wood_hanging_sign");
        self::register("break_pink_petals", "break.pink_petals");
        self::register("break_pointed_dripstone", "break.pointed_dripstone");
        self::register("break_sculk", "break.sculk");
        self::register("break_sculk_catalyst", "break.sculk_catalyst");
        self::register("break_sculk_sensor", "break.sculk_sensor");
        self::register("break_sculk_shrieker", "break.sculk_shrieker");
        self::register("break_sculk_vein", "break.sculk_vein");
        self::register("break_small_amethyst_bud", "break.small_amethyst_bud");
        self::register("break_sponge", "break.sponge");
        self::register("break_spore_blossom", "break.spore_blossom");
        self::register("break_suspicious_gravel", "break.suspicious_gravel");
        self::register("break_suspicious_sand", "break.suspicious_sand");
        self::register("break_tuff", "break.tuff");
        self::register("break_web", "break.web");
        self::register("break_wet_sponge", "break.wet_sponge");
        /** Register breeze_wind_charge sounds */
        self::register("breeze_wind_charge_burst", "breeze_wind_charge.burst");
        /** Register brush sounds */
        self::register("brush_generic", "brush.generic");
        self::register("brush_suspicious_gravel", "brush.suspicious_gravel");
        self::register("brush_suspicious_sand", "brush.suspicious_sand");
        /** Register brush_completed sounds */
        self::register("brush_completed_suspicious_gravel", "brush_completed.suspicious_gravel");
        self::register("brush_completed_suspicious_sand", "brush_completed.suspicious_sand");
        /** Register bubble sounds */
        self::register("bubble_down", "bubble.down");
        self::register("bubble_downinside", "bubble.downinside");
        self::register("bubble_pop", "bubble.pop");
        self::register("bubble_up", "bubble.up");
        self::register("bubble_upinside", "bubble.upinside");
        /** Register bucket sounds */
        self::register("bucket_empty_fish", "bucket.empty_fish");
        self::register("bucket_empty_lava", "bucket.empty_lava");
        self::register("bucket_empty_powder_snow", "bucket.empty_powder_snow");
        self::register("bucket_empty_water", "bucket.empty_water");
        self::register("bucket_fill_fish", "bucket.fill_fish");
        self::register("bucket_fill_lava", "bucket.fill_lava");
        self::register("bucket_fill_powder_snow", "bucket.fill_powder_snow");
        self::register("bucket_fill_water", "bucket.fill_water");
        /** Register bundle sounds */
        self::register("bundle_drop_contents", "bundle.drop_contents");
        self::register("bundle_insert", "bundle.insert");
        self::register("bundle_insert_fail", "bundle.insert_fail");
        self::register("bundle_remove_one", "bundle.remove_one");
        /** Register cake sounds */
        self::register("cake_add_candle", "cake.add_candle");
        /** Register camera sounds */
        self::register("camera_take_picture", "camera.take_picture");
        /** Register cauldron sounds */
        self::register("cauldron_adddye", "cauldron.adddye");
        self::register("cauldron_cleanarmor", "cauldron.cleanarmor");
        self::register("cauldron_cleanbanner", "cauldron.cleanbanner");
        self::register("cauldron_dyearmor", "cauldron.dyearmor");
        self::register("cauldron_explode", "cauldron.explode");
        self::register("cauldron_fillpotion", "cauldron.fillpotion");
        self::register("cauldron_fillwater", "cauldron.fillwater");
        self::register("cauldron_takepotion", "cauldron.takepotion");
        self::register("cauldron_takewater", "cauldron.takewater");
        /** Register cauldron_drip sounds */
        self::register("cauldron_drip_lava_pointed_dripstone", "cauldron_drip.lava.pointed_dripstone");
        self::register("cauldron_drip_water_pointed_dripstone", "cauldron_drip.water.pointed_dripstone");
        /** Register charge sounds */
        self::register("charge_sculk", "charge.sculk");
        /** Register chime sounds */
        self::register("chime_amethyst_block", "chime.amethyst_block");
        /** Register click_off sounds */
        self::register("click_off_bamboo_wood_button", "click_off.bamboo_wood_button");
        self::register("click_off_bamboo_wood_pressure_plate", "click_off.bamboo_wood_pressure_plate");
        self::register("click_off_cherry_wood_button", "click_off.cherry_wood_button");
        self::register("click_off_cherry_wood_pressure_plate", "click_off.cherry_wood_pressure_plate");
        self::register("click_off_metal_pressure_plate", "click_off.metal_pressure_plate");
        self::register("click_off_nether_wood_button", "click_off.nether_wood_button");
        self::register("click_off_nether_wood_pressure_plate", "click_off.nether_wood_pressure_plate");
        self::register("click_off_stone_pressure_plate", "click_off.stone_pressure_plate");
        self::register("click_off_wooden_pressure_plate", "click_off.wooden_pressure_plate");
        /** Register click_on sounds */
        self::register("click_on_bamboo_wood_button", "click_on.bamboo_wood_button");
        self::register("click_on_bamboo_wood_pressure_plate", "click_on.bamboo_wood_pressure_plate");
        self::register("click_on_cherry_wood_button", "click_on.cherry_wood_button");
        self::register("click_on_cherry_wood_pressure_plate", "click_on.cherry_wood_pressure_plate");
        self::register("click_on_metal_pressure_plate", "click_on.metal_pressure_plate");
        self::register("click_on_nether_wood_button", "click_on.nether_wood_button");
        self::register("click_on_nether_wood_pressure_plate", "click_on.nether_wood_pressure_plate");
        self::register("click_on_stone_pressure_plate", "click_on.stone_pressure_plate");
        self::register("click_on_wooden_pressure_plate", "click_on.wooden_pressure_plate");
        /** Register close sounds */
        self::register("close_bamboo_wood_door", "close.bamboo_wood_door");
        self::register("close_bamboo_wood_fence_gate", "close.bamboo_wood_fence_gate");
        self::register("close_bamboo_wood_trapdoor", "close.bamboo_wood_trapdoor");
        self::register("close_cherry_wood_door", "close.cherry_wood_door");
        self::register("close_cherry_wood_fence_gate", "close.cherry_wood_fence_gate");
        self::register("close_cherry_wood_trapdoor", "close.cherry_wood_trapdoor");
        self::register("close_fence_gate", "close.fence_gate");
        self::register("close_iron_door", "close.iron_door");
        self::register("close_iron_trapdoor", "close.iron_trapdoor");
        self::register("close_nether_wood_door", "close.nether_wood_door");
        self::register("close_nether_wood_fence_gate", "close.nether_wood_fence_gate");
        self::register("close_nether_wood_trapdoor", "close.nether_wood_trapdoor");
        self::register("close_wooden_door", "close.wooden_door");
        self::register("close_wooden_trapdoor", "close.wooden_trapdoor");
        /** Register close_door sounds */
        self::register("close_door_copper", "close_door.copper");
        /** Register component sounds */
        self::register("component_jump_to_block", "component.jump_to_block");
        /** Register conduit sounds */
        self::register("conduit_activate", "conduit.activate");
        self::register("conduit_ambient", "conduit.ambient");
        self::register("conduit_attack", "conduit.attack");
        self::register("conduit_deactivate", "conduit.deactivate");
        self::register("conduit_short", "conduit.short");
        /** Register copper sounds */
        self::register("copper_wax_off", "copper.wax.off");
        self::register("copper_wax_on", "copper.wax.on");
        /** Register crafter sounds */
        self::register("crafter_craft", "crafter.craft");
        self::register("crafter_disable_slot", "crafter.disable_slot");
        self::register("crafter_fail", "crafter.fail");
        /** Register crossbow sounds */
        self::register("crossbow_loading_end", "crossbow.loading.end");
        self::register("crossbow_loading_middle", "crossbow.loading.middle");
        self::register("crossbow_loading_start", "crossbow.loading.start");
        self::register("crossbow_quick_charge_end", "crossbow.quick_charge.end");
        self::register("crossbow_quick_charge_middle", "crossbow.quick_charge.middle");
        self::register("crossbow_quick_charge_start", "crossbow.quick_charge.start");
        self::register("crossbow_shoot", "crossbow.shoot");
        /** Register damage sounds */
        self::register("damage_fallbig", "damage.fallbig");
        self::register("damage_fallsmall", "damage.fallsmall");
        self::register("damage_thorns", "damage.thorns");
        /** Register dig sounds */
        self::register("dig_ancient_debris", "dig.ancient_debris");
        self::register("dig_azalea_leaves", "dig.azalea_leaves");
        self::register("dig_basalt", "dig.basalt");
        self::register("dig_bone_block", "dig.bone_block");
        self::register("dig_candle", "dig.candle");
        self::register("dig_cave_vines", "dig.cave_vines");
        self::register("dig_chain", "dig.chain");
        self::register("dig_cloth", "dig.cloth");
        self::register("dig_copper", "dig.copper");
        self::register("dig_coral", "dig.coral");
        self::register("dig_deepslate", "dig.deepslate");
        self::register("dig_deepslate_bricks", "dig.deepslate_bricks");
        self::register("dig_fungus", "dig.fungus");
        self::register("dig_grass", "dig.grass");
        self::register("dig_gravel", "dig.gravel");
        self::register("dig_honey_block", "dig.honey_block");
        self::register("dig_lodestone", "dig.lodestone");
        self::register("dig_moss", "dig.moss");
        self::register("dig_nether_brick", "dig.nether_brick");
        self::register("dig_nether_gold_ore", "dig.nether_gold_ore");
        self::register("dig_nether_sprouts", "dig.nether_sprouts");
        self::register("dig_nether_wart", "dig.nether_wart");
        self::register("dig_netherite", "dig.netherite");
        self::register("dig_netherrack", "dig.netherrack");
        self::register("dig_nylium", "dig.nylium");
        self::register("dig_powder_snow", "dig.powder_snow");
        self::register("dig_roots", "dig.roots");
        self::register("dig_sand", "dig.sand");
        self::register("dig_shroomlight", "dig.shroomlight");
        self::register("dig_snow", "dig.snow");
        self::register("dig_soul_sand", "dig.soul_sand");
        self::register("dig_soul_soil", "dig.soul_soil");
        self::register("dig_stem", "dig.stem");
        self::register("dig_stone", "dig.stone");
        self::register("dig_vines", "dig.vines");
        self::register("dig_wood", "dig.wood");
        /** Register drip sounds */
        self::register("drip_lava_pointed_dripstone", "drip.lava.pointed_dripstone");
        self::register("drip_water_pointed_dripstone", "drip.water.pointed_dripstone");
        /** Register elytra sounds */
        self::register("elytra_loop", "elytra.loop");
        /** Register entity sounds */
        self::register("entity_generic_splash", "entity.generic.splash");
        self::register("entity_wither_skeleton_ambient", "entity.wither_skeleton.ambient");
        self::register("entity_wither_skeleton_death", "entity.wither_skeleton.death");
        self::register("entity_wither_skeleton_hurt", "entity.wither_skeleton.hurt");
        self::register("entity_wither_skeleton_step", "entity.wither_skeleton.step");
        self::register("entity_zombie_converted_to_drowned", "entity.zombie.converted_to_drowned");
        /** Register extinguish sounds */
        self::register("extinguish_candle", "extinguish.candle");
        /** Register fall sounds */
        self::register("fall_amethyst_block", "fall.amethyst_block");
        self::register("fall_amethyst_cluster", "fall.amethyst_cluster");
        self::register("fall_ancient_debris", "fall.ancient_debris");
        self::register("fall_azalea", "fall.azalea");
        self::register("fall_azalea_leaves", "fall.azalea_leaves");
        self::register("fall_bamboo_wood", "fall.bamboo_wood");
        self::register("fall_basalt", "fall.basalt");
        self::register("fall_big_dripleaf", "fall.big_dripleaf");
        self::register("fall_bone_block", "fall.bone_block");
        self::register("fall_calcite", "fall.calcite");
        self::register("fall_cave_vines", "fall.cave_vines");
        self::register("fall_chain", "fall.chain");
        self::register("fall_cherry_leaves", "fall.cherry_leaves");
        self::register("fall_cherry_wood", "fall.cherry_wood");
        self::register("fall_cloth", "fall.cloth");
        self::register("fall_copper", "fall.copper");
        self::register("fall_copper_bulb", "fall.copper_bulb");
        self::register("fall_coral", "fall.coral");
        self::register("fall_deepslate", "fall.deepslate");
        self::register("fall_deepslate_bricks", "fall.deepslate_bricks");
        self::register("fall_dirt_with_roots", "fall.dirt_with_roots");
        self::register("fall_dripstone_block", "fall.dripstone_block");
        self::register("fall_egg", "fall.egg");
        self::register("fall_grass", "fall.grass");
        self::register("fall_gravel", "fall.gravel");
        self::register("fall_hanging_roots", "fall.hanging_roots");
        self::register("fall_honey_block", "fall.honey_block");
        self::register("fall_ladder", "fall.ladder");
        self::register("fall_moss", "fall.moss");
        self::register("fall_nether_brick", "fall.nether_brick");
        self::register("fall_nether_gold_ore", "fall.nether_gold_ore");
        self::register("fall_nether_sprouts", "fall.nether_sprouts");
        self::register("fall_nether_wart", "fall.nether_wart");
        self::register("fall_nether_wood", "fall.nether_wood");
        self::register("fall_netherite", "fall.netherite");
        self::register("fall_netherrack", "fall.netherrack");
        self::register("fall_nylium", "fall.nylium");
        self::register("fall_pink_petals", "fall.pink_petals");
        self::register("fall_pointed_dripstone", "fall.pointed_dripstone");
        self::register("fall_powder_snow", "fall.powder_snow");
        self::register("fall_roots", "fall.roots");
        self::register("fall_sand", "fall.sand");
        self::register("fall_sculk_sensor", "fall.sculk_sensor");
        self::register("fall_sculk_shrieker", "fall.sculk_shrieker");
        self::register("fall_shroomlight", "fall.shroomlight");
        self::register("fall_slime", "fall.slime");
        self::register("fall_snow", "fall.snow");
        self::register("fall_soul_sand", "fall.soul_sand");
        self::register("fall_soul_soil", "fall.soul_soil");
        self::register("fall_spore_blossom", "fall.spore_blossom");
        self::register("fall_stem", "fall.stem");
        self::register("fall_stone", "fall.stone");
        self::register("fall_tuff", "fall.tuff");
        self::register("fall_vines", "fall.vines");
        self::register("fall_wood", "fall.wood");
        /** Register fire sounds */
        self::register("fire_fire", "fire.fire");
        self::register("fire_ignite", "fire.ignite");
        /** Register firework sounds */
        self::register("firework_blast", "firework.blast");
        self::register("firework_large_blast", "firework.large_blast");
        self::register("firework_launch", "firework.launch");
        self::register("firework_shoot", "firework.shoot");
        self::register("firework_twinkle", "firework.twinkle");
        /** Register game sounds */
        self::register("player_attack_nodamage", "game.player.attack.nodamage");
        self::register("player_attack_strong", "game.player.attack.strong");
        self::register("player_die", "game.player.die");
        self::register("player_hurt", "game.player.hurt");
        /** Register hatch sounds */
        self::register("hatch_frog_spawn", "hatch.frog_spawn");
        /** Register hit sounds */
        self::register("hit_amethyst_block", "hit.amethyst_block");
        self::register("hit_amethyst_cluster", "hit.amethyst_cluster");
        self::register("hit_ancient_debris", "hit.ancient_debris");
        self::register("hit_anvil", "hit.anvil");
        self::register("hit_azalea", "hit.azalea");
        self::register("hit_azalea_leaves", "hit.azalea_leaves");
        self::register("hit_bamboo_wood", "hit.bamboo_wood");
        self::register("hit_basalt", "hit.basalt");
        self::register("hit_big_dripleaf", "hit.big_dripleaf");
        self::register("hit_bone_block", "hit.bone_block");
        self::register("hit_calcite", "hit.calcite");
        self::register("hit_candle", "hit.candle");
        self::register("hit_cave_vines", "hit.cave_vines");
        self::register("hit_chain", "hit.chain");
        self::register("hit_cherry_leaves", "hit.cherry_leaves");
        self::register("hit_cherry_wood", "hit.cherry_wood");
        self::register("hit_chiseled_bookshelf", "hit.chiseled_bookshelf");
        self::register("hit_cloth", "hit.cloth");
        self::register("hit_copper", "hit.copper");
        self::register("hit_copper_bulb", "hit.copper_bulb");
        self::register("hit_coral", "hit.coral");
        self::register("hit_deepslate", "hit.deepslate");
        self::register("hit_deepslate_bricks", "hit.deepslate_bricks");
        self::register("hit_dirt_with_roots", "hit.dirt_with_roots");
        self::register("hit_dripstone_block", "hit.dripstone_block");
        self::register("hit_grass", "hit.grass");
        self::register("hit_gravel", "hit.gravel");
        self::register("hit_hanging_roots", "hit.hanging_roots");
        self::register("hit_honey_block", "hit.honey_block");
        self::register("hit_iron", "hit.iron");
        self::register("hit_ladder", "hit.ladder");
        self::register("hit_moss", "hit.moss");
        self::register("hit_nether_brick", "hit.nether_brick");
        self::register("hit_nether_gold_ore", "hit.nether_gold_ore");
        self::register("hit_nether_sprouts", "hit.nether_sprouts");
        self::register("hit_nether_wart", "hit.nether_wart");
        self::register("hit_nether_wood", "hit.nether_wood");
        self::register("hit_netherite", "hit.netherite");
        self::register("hit_netherrack", "hit.netherrack");
        self::register("hit_nylium", "hit.nylium");
        self::register("hit_pink_petals", "hit.pink_petals");
        self::register("hit_pointed_dripstone", "hit.pointed_dripstone");
        self::register("hit_powder_snow", "hit.powder_snow");
        self::register("hit_roots", "hit.roots");
        self::register("hit_sand", "hit.sand");
        self::register("hit_sculk", "hit.sculk");
        self::register("hit_sculk_catalyst", "hit.sculk_catalyst");
        self::register("hit_sculk_sensor", "hit.sculk_sensor");
        self::register("hit_sculk_shrieker", "hit.sculk_shrieker");
        self::register("hit_shroomlight", "hit.shroomlight");
        self::register("hit_slime", "hit.slime");
        self::register("hit_snow", "hit.snow");
        self::register("hit_soul_sand", "hit.soul_sand");
        self::register("hit_soul_soil", "hit.soul_soil");
        self::register("hit_sponge", "hit.sponge");
        self::register("hit_spore_blossom", "hit.spore_blossom");
        self::register("hit_stem", "hit.stem");
        self::register("hit_stone", "hit.stone");
        self::register("hit_suspicious_gravel", "hit.suspicious_gravel");
        self::register("hit_suspicious_sand", "hit.suspicious_sand");
        self::register("hit_tuff", "hit.tuff");
        self::register("hit_vines", "hit.vines");
        self::register("hit_wet_sponge", "hit.wet_sponge");
        self::register("hit_wood", "hit.wood");
        /** Register horn sounds */
        self::register("horn_call_0", "horn.call.0");
        self::register("horn_call_1", "horn.call.1");
        self::register("horn_call_2", "horn.call.2");
        self::register("horn_call_3", "horn.call.3");
        self::register("horn_call_4", "horn.call.4");
        self::register("horn_call_5", "horn.call.5");
        self::register("horn_call_6", "horn.call.6");
        self::register("horn_call_7", "horn.call.7");
        /** Register hud sounds */
        self::register("hud_bubble_pop", "hud.bubble.pop");
        /** Register insert sounds */
        self::register("insert_chiseled_bookshelf", "insert.chiseled_bookshelf");
        /** Register insert_enchanted sounds */
        self::register("insert_enchanted", "insert_enchanted.chiseled_bookshelf");
        /** Register item sounds */
        self::register("item_bone_meal_use", "item.bone_meal.use");
        self::register("book_page_turn", "item.book.page_turn");
        self::register("book_put", "item.book.put");
        self::register("item_shield_block", "item.shield.block");
        self::register("item_spyglass_stop_using", "item.spyglass.stop_using");
        self::register("item_spyglass_use", "item.spyglass.use");
        self::register("item_trident_hit", "item.trident.hit");
        self::register("trident_hit_ground", "item.trident.hit_ground");
        self::register("trident_return", "item.trident.return");
        self::register("trident_riptide_1", "item.trident.riptide_1");
        self::register("trident_riptide_2", "item.trident.riptide_2");
        self::register("trident_riptide_3", "item.trident.riptide_3");
        self::register("trident_throw", "item.trident.throw");
        self::register("trident_thunder", "item.trident.thunder");
        /** Register jump sounds */
        self::register("jump_ancient_debris", "jump.ancient_debris");
        self::register("jump_azalea", "jump.azalea");
        self::register("jump_basalt", "jump.basalt");
        self::register("jump_big_dripleaf", "jump.big_dripleaf");
        self::register("jump_bone_block", "jump.bone_block");
        self::register("jump_cave_vines", "jump.cave_vines");
        self::register("jump_chain", "jump.chain");
        self::register("jump_cloth", "jump.cloth");
        self::register("jump_coral", "jump.coral");
        self::register("jump_deepslate", "jump.deepslate");
        self::register("jump_deepslate_bricks", "jump.deepslate_bricks");
        self::register("jump_dirt_with_roots", "jump.dirt_with_roots");
        self::register("jump_dripstone_block", "jump.dripstone_block");
        self::register("jump_grass", "jump.grass");
        self::register("jump_gravel", "jump.gravel");
        self::register("jump_hanging_roots", "jump.hanging_roots");
        self::register("jump_honey_block", "jump.honey_block");
        self::register("jump_moss", "jump.moss");
        self::register("jump_nether_brick", "jump.nether_brick");
        self::register("jump_nether_gold_ore", "jump.nether_gold_ore");
        self::register("jump_nether_sprouts", "jump.nether_sprouts");
        self::register("jump_nether_wart", "jump.nether_wart");
        self::register("jump_netherite", "jump.netherite");
        self::register("jump_netherrack", "jump.netherrack");
        self::register("jump_nylium", "jump.nylium");
        self::register("jump_pointed_dripstone", "jump.pointed_dripstone");
        self::register("jump_roots", "jump.roots");
        self::register("jump_sand", "jump.sand");
        self::register("jump_sculk_sensor", "jump.sculk_sensor");
        self::register("jump_shroomlight", "jump.shroomlight");
        self::register("jump_slime", "jump.slime");
        self::register("jump_snow", "jump.snow");
        self::register("jump_soul_sand", "jump.soul_sand");
        self::register("jump_soul_soil", "jump.soul_soil");
        self::register("jump_spore_blossom", "jump.spore_blossom");
        self::register("jump_stem", "jump.stem");
        self::register("jump_stone", "jump.stone");
        self::register("jump_vines", "jump.vines");
        self::register("jump_wood", "jump.wood");
        /** Register land sounds */
        self::register("land_ancient_debris", "land.ancient_debris");
        self::register("land_azalea", "land.azalea");
        self::register("land_basalt", "land.basalt");
        self::register("land_big_dripleaf", "land.big_dripleaf");
        self::register("land_bone_block", "land.bone_block");
        self::register("land_cave_vines", "land.cave_vines");
        self::register("land_chain", "land.chain");
        self::register("land_cloth", "land.cloth");
        self::register("land_coral", "land.coral");
        self::register("land_deepslate", "land.deepslate");
        self::register("land_deepslate_bricks", "land.deepslate_bricks");
        self::register("land_dirt_with_roots", "land.dirt_with_roots");
        self::register("land_dripstone_block", "land.dripstone_block");
        self::register("land_grass", "land.grass");
        self::register("land_gravel", "land.gravel");
        self::register("land_hanging_roots", "land.hanging_roots");
        self::register("land_honey_block", "land.honey_block");
        self::register("land_moss", "land.moss");
        self::register("land_nether_brick", "land.nether_brick");
        self::register("land_nether_gold_ore", "land.nether_gold_ore");
        self::register("land_nether_sprouts", "land.nether_sprouts");
        self::register("land_nether_wart", "land.nether_wart");
        self::register("land_netherite", "land.netherite");
        self::register("land_netherrack", "land.netherrack");
        self::register("land_nylium", "land.nylium");
        self::register("land_pointed_dripstone", "land.pointed_dripstone");
        self::register("land_roots", "land.roots");
        self::register("land_sand", "land.sand");
        self::register("land_sculk_sensor", "land.sculk_sensor");
        self::register("land_shroomlight", "land.shroomlight");
        self::register("land_slime", "land.slime");
        self::register("land_snow", "land.snow");
        self::register("land_soul_sand", "land.soul_sand");
        self::register("land_soul_soil", "land.soul_soil");
        self::register("land_spore_blossom", "land.spore_blossom");
        self::register("land_stem", "land.stem");
        self::register("land_stone", "land.stone");
        self::register("land_vines", "land.vines");
        self::register("land_wood", "land.wood");
        /** Register leashknot sounds */
        self::register("leashknot_break", "leashknot.break");
        self::register("leashknot_place", "leashknot.place");
        /** Register liquid sounds */
        self::register("liquid_lava", "liquid.lava");
        self::register("liquid_lavapop", "liquid.lavapop");
        self::register("liquid_water", "liquid.water");
        /** Register lodestone_compass sounds */
        self::register("lodestone_compass_link", "lodestone_compass.link_compass_to_lodestone");
        /** Register mace sounds */
        self::register("mace_heavy_smash_ground", "mace.heavy_smash_ground");
        self::register("mace_smash_air", "mace.smash_air");
        self::register("mace_smash_ground", "mace.smash_ground");
        /** Register minecart sounds */
        self::register("minecart_base", "minecart.base");
        self::register("minecart_inside", "minecart.inside");
        /** Register mob sounds */
        self::register("mob_agent_spawn", "mob.agent.spawn");
        self::register("mob_allay_death", "mob.allay.death");
        self::register("mob_allay_hurt", "mob.allay.hurt");
        self::register("mob_allay_idle", "mob.allay.idle");
        self::register("mob_allay_idle_holding", "mob.allay.idle_holding");
        self::register("mob_allay_item_given", "mob.allay.item_given");
        self::register("mob_allay_item_taken", "mob.allay.item_taken");
        self::register("mob_allay_item_thrown", "mob.allay.item_thrown");
        self::register("mob_armadillo_ambient", "mob.armadillo.ambient");
        self::register("mob_armadillo_brush", "mob.armadillo.brush");
        self::register("mob_armadillo_death", "mob.armadillo.death");
        self::register("mob_armadillo_eat", "mob.armadillo.eat");
        self::register("mob_armadillo_hurt", "mob.armadillo.hurt");
        self::register("mob_armadillo_hurt_reduced", "mob.armadillo.hurt_reduced");
        self::register("mob_armadillo_land", "mob.armadillo.land");
        self::register("mob_armadillo_peek", "mob.armadillo.peek");
        self::register("mob_armadillo_roll", "mob.armadillo.roll");
        self::register("mob_armadillo_scute_drop", "mob.armadillo.scute_drop");
        self::register("mob_armadillo_step", "mob.armadillo.step");
        self::register("mob_armadillo_unroll_finish", "mob.armadillo.unroll_finish");
        self::register("mob_armadillo_unroll_start", "mob.armadillo.unroll_start");
        self::register("mob_armor_stand_break", "mob.armor_stand.break");
        self::register("mob_armor_stand_hit", "mob.armor_stand.hit");
        self::register("mob_armor_stand_land", "mob.armor_stand.land");
        self::register("mob_armor_stand_place", "mob.armor_stand.place");
        self::register("mob_axolotl_attack", "mob.axolotl.attack");
        self::register("mob_axolotl_death", "mob.axolotl.death");
        self::register("mob_axolotl_hurt", "mob.axolotl.hurt");
        self::register("mob_axolotl_idle", "mob.axolotl.idle");
        self::register("mob_axolotl_idle_water", "mob.axolotl.idle_water");
        self::register("mob_axolotl_splash", "mob.axolotl.splash");
        self::register("mob_axolotl_swim", "mob.axolotl.swim");
        self::register("mob_bat_death", "mob.bat.death");
        self::register("mob_bat_hurt", "mob.bat.hurt");
        self::register("mob_bat_idle", "mob.bat.idle");
        self::register("mob_bat_takeoff", "mob.bat.takeoff");
        self::register("mob_bee_aggressive", "mob.bee.aggressive");
        self::register("mob_bee_death", "mob.bee.death");
        self::register("mob_bee_hurt", "mob.bee.hurt");
        self::register("mob_bee_loop", "mob.bee.loop");
        self::register("mob_bee_pollinate", "mob.bee.pollinate");
        self::register("mob_bee_sting", "mob.bee.sting");
        self::register("mob_blaze_breathe", "mob.blaze.breathe");
        self::register("mob_blaze_death", "mob.blaze.death");
        self::register("mob_blaze_hit", "mob.blaze.hit");
        self::register("mob_blaze_shoot", "mob.blaze.shoot");
        self::register("mob_bogged_ambient", "mob.bogged.ambient");
        self::register("mob_bogged_death", "mob.bogged.death");
        self::register("mob_bogged_hurt", "mob.bogged.hurt");
        self::register("mob_bogged_step", "mob.bogged.step");
        self::register("mob_breeze_charge", "mob.breeze.charge");
        self::register("mob_breeze_death", "mob.breeze.death");
        self::register("mob_breeze_deflect", "mob.breeze.deflect");
        self::register("mob_breeze_hurt", "mob.breeze.hurt");
        self::register("mob_breeze_idle_air", "mob.breeze.idle_air");
        self::register("mob_breeze_idle_ground", "mob.breeze.idle_ground");
        self::register("mob_breeze_inhale", "mob.breeze.inhale");
        self::register("mob_breeze_jump", "mob.breeze.jump");
        self::register("mob_breeze_land", "mob.breeze.land");
        self::register("mob_breeze_shoot", "mob.breeze.shoot");
        self::register("mob_breeze_slide", "mob.breeze.slide");
        self::register("mob_breeze_whirl", "mob.breeze.whirl");
        self::register("mob_camel_ambient", "mob.camel.ambient");
        self::register("mob_camel_dash", "mob.camel.dash");
        self::register("mob_camel_dash_ready", "mob.camel.dash_ready");
        self::register("mob_camel_death", "mob.camel.death");
        self::register("mob_camel_eat", "mob.camel.eat");
        self::register("mob_camel_hurt", "mob.camel.hurt");
        self::register("mob_camel_sit", "mob.camel.sit");
        self::register("mob_camel_stand", "mob.camel.stand");
        self::register("mob_camel_step", "mob.camel.step");
        self::register("mob_camel_step_sand", "mob.camel.step_sand");
        self::register("mob_cat_beg", "mob.cat.beg");
        self::register("mob_cat_beg_for_food", "mob.cat.beg_for_food");
        self::register("mob_cat_eat", "mob.cat.eat");
        self::register("mob_cat_hiss", "mob.cat.hiss");
        self::register("mob_cat_hit", "mob.cat.hit");
        self::register("mob_cat_meow", "mob.cat.meow");
        self::register("mob_cat_purr", "mob.cat.purr");
        self::register("mob_cat_purreow", "mob.cat.purreow");
        self::register("mob_cat_straymeow", "mob.cat.straymeow");
        self::register("mob_chicken_hurt", "mob.chicken.hurt");
        self::register("mob_chicken_plop", "mob.chicken.plop");
        self::register("mob_chicken_say", "mob.chicken.say");
        self::register("mob_chicken_step", "mob.chicken.step");
        self::register("mob_cow_hurt", "mob.cow.hurt");
        self::register("mob_cow_milk", "mob.cow.milk");
        self::register("mob_cow_say", "mob.cow.say");
        self::register("mob_cow_step", "mob.cow.step");
        self::register("mob_creaking_activate", "mob.creaking.activate");
        self::register("mob_creaking_ambient", "mob.creaking.ambient");
        self::register("mob_creaking_attack", "mob.creaking.attack");
        self::register("mob_creaking_deactivate", "mob.creaking.deactivate");
        self::register("mob_creaking_death", "mob.creaking.death");
        self::register("mob_creaking_freeze", "mob.creaking.freeze");
        self::register("mob_creaking_spawn", "mob.creaking.spawn");
        self::register("mob_creaking_step", "mob.creaking.step");
        self::register("mob_creaking_sway", "mob.creaking.sway");
        self::register("mob_creaking_twitch", "mob.creaking.twitch");
        self::register("mob_creaking_unfreeze", "mob.creaking.unfreeze");
        self::register("mob_creeper_death", "mob.creeper.death");
        self::register("mob_creeper_say", "mob.creeper.say");
        self::register("mob_dolphin_attack", "mob.dolphin.attack");
        self::register("mob_dolphin_blowhole", "mob.dolphin.blowhole");
        self::register("mob_dolphin_death", "mob.dolphin.death");
        self::register("mob_dolphin_eat", "mob.dolphin.eat");
        self::register("mob_dolphin_hurt", "mob.dolphin.hurt");
        self::register("mob_dolphin_idle", "mob.dolphin.idle");
        self::register("mob_dolphin_idle_water", "mob.dolphin.idle_water");
        self::register("mob_dolphin_jump", "mob.dolphin.jump");
        self::register("mob_dolphin_play", "mob.dolphin.play");
        self::register("mob_dolphin_splash", "mob.dolphin.splash");
        self::register("mob_dolphin_swim", "mob.dolphin.swim");
        self::register("mob_drowned_death", "mob.drowned.death");
        self::register("mob_drowned_death_water", "mob.drowned.death_water");
        self::register("mob_drowned_hurt", "mob.drowned.hurt");
        self::register("mob_drowned_hurt_water", "mob.drowned.hurt_water");
        self::register("mob_drowned_say", "mob.drowned.say");
        self::register("mob_drowned_say_water", "mob.drowned.say_water");
        self::register("mob_drowned_shoot", "mob.drowned.shoot");
        self::register("mob_drowned_step", "mob.drowned.step");
        self::register("mob_drowned_swim", "mob.drowned.swim");
        self::register("mob_elderguardian_curse", "mob.elderguardian.curse");
        self::register("mob_elderguardian_death", "mob.elderguardian.death");
        self::register("mob_elderguardian_hit", "mob.elderguardian.hit");
        self::register("mob_elderguardian_idle", "mob.elderguardian.idle");
        self::register("mob_enderdragon_death", "mob.enderdragon.death");
        self::register("mob_enderdragon_flap", "mob.enderdragon.flap");
        self::register("mob_enderdragon_growl", "mob.enderdragon.growl");
        self::register("mob_enderdragon_hit", "mob.enderdragon.hit");
        self::register("mob_endermen_death", "mob.endermen.death");
        self::register("mob_endermen_hit", "mob.endermen.hit");
        self::register("mob_endermen_idle", "mob.endermen.idle");
        self::register("mob_endermen_portal", "mob.endermen.portal");
        self::register("mob_endermen_scream", "mob.endermen.scream");
        self::register("mob_endermen_stare", "mob.endermen.stare");
        self::register("mob_endermite_hit", "mob.endermite.hit");
        self::register("mob_endermite_kill", "mob.endermite.kill");
        self::register("mob_endermite_say", "mob.endermite.say");
        self::register("mob_endermite_step", "mob.endermite.step");
        self::register("mob_evocation_fangs_attack", "mob.evocation_fangs.attack");
        self::register("mob_evocation_illager_ambient", "mob.evocation_illager.ambient");
        self::register("mob_evocation_illager_cast_spell", "mob.evocation_illager.cast_spell");
        self::register("mob_evocation_illager_celebrate", "mob.evocation_illager.celebrate");
        self::register("mob_evocation_illager_death", "mob.evocation_illager.death");
        self::register("mob_evocation_illager_hurt", "mob.evocation_illager.hurt");
        self::register("mob_evocation_illager_prepare_attack", "mob.evocation_illager.prepare_attack");
        self::register("mob_evocation_illager_prepare_summon", "mob.evocation_illager.prepare_summon");
        self::register("mob_evocation_illager_prepare_wololo", "mob.evocation_illager.prepare_wololo");
        self::register("mob_fish_flop", "mob.fish.flop");
        self::register("mob_fish_hurt", "mob.fish.hurt");
        self::register("mob_fish_step", "mob.fish.step");
        self::register("mob_fox_aggro", "mob.fox.aggro");
        self::register("mob_fox_ambient", "mob.fox.ambient");
        self::register("mob_fox_bite", "mob.fox.bite");
        self::register("mob_fox_death", "mob.fox.death");
        self::register("mob_fox_eat", "mob.fox.eat");
        self::register("mob_fox_hurt", "mob.fox.hurt");
        self::register("mob_fox_screech", "mob.fox.screech");
        self::register("mob_fox_sleep", "mob.fox.sleep");
        self::register("mob_fox_sniff", "mob.fox.sniff");
        self::register("mob_fox_spit", "mob.fox.spit");
        self::register("mob_frog_ambient", "mob.frog.ambient");
        self::register("mob_frog_death", "mob.frog.death");
        self::register("mob_frog_eat", "mob.frog.eat");
        self::register("mob_frog_hurt", "mob.frog.hurt");
        self::register("mob_frog_jump_to_block", "mob.frog.jump_to_block");
        self::register("mob_frog_lay_spawn", "mob.frog.lay_spawn");
        self::register("mob_frog_step", "mob.frog.step");
        self::register("mob_frog_tongue", "mob.frog.tongue");
        self::register("mob_ghast_affectionate_scream", "mob.ghast.affectionate_scream");
        self::register("mob_ghast_charge", "mob.ghast.charge");
        self::register("mob_ghast_death", "mob.ghast.death");
        self::register("mob_ghast_fireball", "mob.ghast.fireball");
        self::register("mob_ghast_moan", "mob.ghast.moan");
        self::register("mob_ghast_scream", "mob.ghast.scream");
        self::register("mob_glow_squid_ambient", "mob.glow_squid.ambient");
        self::register("mob_glow_squid_death", "mob.glow_squid.death");
        self::register("mob_glow_squid_hurt", "mob.glow_squid.hurt");
        self::register("mob_glow_squid_ink_squirt", "mob.glow_squid.ink_squirt");
        self::register("mob_goat_ambient", "mob.goat.ambient");
        self::register("mob_goat_ambient_screamer", "mob.goat.ambient.screamer");
        self::register("mob_goat_death", "mob.goat.death");
        self::register("mob_goat_death_screamer", "mob.goat.death.screamer");
        self::register("mob_goat_eat", "mob.goat.eat");
        self::register("mob_goat_horn_break", "mob.goat.horn_break");
        self::register("mob_goat_hurt", "mob.goat.hurt");
        self::register("mob_goat_hurt_screamer", "mob.goat.hurt.screamer");
        self::register("mob_goat_milk_screamer", "mob.goat.milk.screamer");
        self::register("mob_goat_prepare_ram", "mob.goat.prepare_ram");
        self::register("mob_goat_prepare_ram_screamer", "mob.goat.prepare_ram.screamer");
        self::register("mob_goat_ram_impact", "mob.goat.ram_impact");
        self::register("mob_goat_ram_impact_screamer", "mob.goat.ram_impact.screamer");
        self::register("mob_goat_step", "mob.goat.step");
        self::register("mob_guardian_ambient", "mob.guardian.ambient");
        self::register("mob_guardian_attack_loop", "mob.guardian.attack_loop");
        self::register("mob_guardian_death", "mob.guardian.death");
        self::register("mob_guardian_flop", "mob.guardian.flop");
        self::register("mob_guardian_hit", "mob.guardian.hit");
        self::register("mob_guardian_land_death", "mob.guardian.land_death");
        self::register("mob_guardian_land_hit", "mob.guardian.land_hit");
        self::register("mob_guardian_land_idle", "mob.guardian.land_idle");
        self::register("mob_hoglin_ambient", "mob.hoglin.ambient");
        self::register("mob_hoglin_angry", "mob.hoglin.angry");
        self::register("mob_hoglin_attack", "mob.hoglin.attack");
        self::register("mob_hoglin_converted_to_zombified", "mob.hoglin.converted_to_zombified");
        self::register("mob_hoglin_death", "mob.hoglin.death");
        self::register("mob_hoglin_howl", "mob.hoglin.howl");
        self::register("mob_hoglin_hurt", "mob.hoglin.hurt");
        self::register("mob_hoglin_retreat", "mob.hoglin.retreat");
        self::register("mob_hoglin_step", "mob.hoglin.step");
        self::register("mob_horse_angry", "mob.horse.angry");
        self::register("mob_horse_armor", "mob.horse.armor");
        self::register("mob_horse_breathe", "mob.horse.breathe");
        self::register("mob_horse_death", "mob.horse.death");
        self::register("mob_horse_donkey_angry", "mob.horse.donkey.angry");
        self::register("mob_horse_donkey_death", "mob.horse.donkey.death");
        self::register("mob_horse_donkey_hit", "mob.horse.donkey.hit");
        self::register("mob_horse_donkey_idle", "mob.horse.donkey.idle");
        self::register("mob_horse_eat", "mob.horse.eat");
        self::register("mob_horse_gallop", "mob.horse.gallop");
        self::register("mob_horse_hit", "mob.horse.hit");
        self::register("mob_horse_idle", "mob.horse.idle");
        self::register("mob_horse_jump", "mob.horse.jump");
        self::register("mob_horse_land", "mob.horse.land");
        self::register("mob_horse_leather", "mob.horse.leather");
        self::register("mob_horse_skeleton_death", "mob.horse.skeleton.death");
        self::register("mob_horse_skeleton_hit", "mob.horse.skeleton.hit");
        self::register("mob_horse_skeleton_idle", "mob.horse.skeleton.idle");
        self::register("mob_horse_soft", "mob.horse.soft");
        self::register("mob_horse_wood", "mob.horse.wood");
        self::register("mob_horse_zombie_death", "mob.horse.zombie.death");
        self::register("mob_horse_zombie_hit", "mob.horse.zombie.hit");
        self::register("mob_horse_zombie_idle", "mob.horse.zombie.idle");
        self::register("mob_husk_ambient", "mob.husk.ambient");
        self::register("mob_husk_convert_to_zombie", "mob.husk.convert_to_zombie");
        self::register("mob_husk_death", "mob.husk.death");
        self::register("mob_husk_hurt", "mob.husk.hurt");
        self::register("mob_husk_step", "mob.husk.step");
        self::register("mob_irongolem_crack", "mob.irongolem.crack");
        self::register("mob_irongolem_death", "mob.irongolem.death");
        self::register("mob_irongolem_hit", "mob.irongolem.hit");
        self::register("mob_irongolem_repair", "mob.irongolem.repair");
        self::register("mob_irongolem_throw", "mob.irongolem.throw");
        self::register("mob_irongolem_walk", "mob.irongolem.walk");
        self::register("mob_llama_angry", "mob.llama.angry");
        self::register("mob_llama_death", "mob.llama.death");
        self::register("mob_llama_eat", "mob.llama.eat");
        self::register("mob_llama_hurt", "mob.llama.hurt");
        self::register("mob_llama_idle", "mob.llama.idle");
        self::register("mob_llama_spit", "mob.llama.spit");
        self::register("mob_llama_step", "mob.llama.step");
        self::register("mob_llama_swag", "mob.llama.swag");
        self::register("mob_magmacube_big", "mob.magmacube.big");
        self::register("mob_magmacube_jump", "mob.magmacube.jump");
        self::register("mob_magmacube_small", "mob.magmacube.small");
        self::register("mob_mooshroom_convert", "mob.mooshroom.convert");
        self::register("mob_mooshroom_eat", "mob.mooshroom.eat");
        self::register("mob_mooshroom_suspicious_milk", "mob.mooshroom.suspicious_milk");
        self::register("mob_ocelot_death", "mob.ocelot.death");
        self::register("mob_ocelot_idle", "mob.ocelot.idle");
        self::register("mob_panda_bite", "mob.panda.bite");
        self::register("mob_panda_cant_breed", "mob.panda.cant_breed");
        self::register("mob_panda_death", "mob.panda.death");
        self::register("mob_panda_eat", "mob.panda.eat");
        self::register("mob_panda_hurt", "mob.panda.hurt");
        self::register("mob_panda_idle", "mob.panda.idle");
        self::register("mob_panda_idle_aggressive", "mob.panda.idle.aggressive");
        self::register("mob_panda_idle_worried", "mob.panda.idle.worried");
        self::register("mob_panda_presneeze", "mob.panda.presneeze");
        self::register("mob_panda_sneeze", "mob.panda.sneeze");
        self::register("mob_panda_step", "mob.panda.step");
        self::register("mob_panda_baby_idle", "mob.panda_baby.idle");
        self::register("mob_parrot_death", "mob.parrot.death");
        self::register("mob_parrot_eat", "mob.parrot.eat");
        self::register("mob_parrot_fly", "mob.parrot.fly");
        self::register("mob_parrot_hurt", "mob.parrot.hurt");
        self::register("mob_parrot_idle", "mob.parrot.idle");
        self::register("mob_parrot_imitate_creaking", "mob.parrot.imitate_creaking");
        self::register("mob_parrot_step", "mob.parrot.step");
        self::register("mob_phantom_bite", "mob.phantom.bite");
        self::register("mob_phantom_death", "mob.phantom.death");
        self::register("mob_phantom_flap", "mob.phantom.flap");
        self::register("mob_phantom_hurt", "mob.phantom.hurt");
        self::register("mob_phantom_idle", "mob.phantom.idle");
        self::register("mob_phantom_swoop", "mob.phantom.swoop");
        self::register("mob_pig_boost", "mob.pig.boost");
        self::register("mob_pig_death", "mob.pig.death");
        self::register("mob_pig_say", "mob.pig.say");
        self::register("mob_pig_step", "mob.pig.step");
        self::register("mob_piglin_admiring_item", "mob.piglin.admiring_item");
        self::register("mob_piglin_ambient", "mob.piglin.ambient");
        self::register("mob_piglin_angry", "mob.piglin.angry");
        self::register("mob_piglin_celebrate", "mob.piglin.celebrate");
        self::register("mob_piglin_converted_to_zombified", "mob.piglin.converted_to_zombified");
        self::register("mob_piglin_death", "mob.piglin.death");
        self::register("mob_piglin_hurt", "mob.piglin.hurt");
        self::register("mob_piglin_jealous", "mob.piglin.jealous");
        self::register("mob_piglin_retreat", "mob.piglin.retreat");
        self::register("mob_piglin_step", "mob.piglin.step");
        self::register("mob_piglin_brute_ambient", "mob.piglin_brute.ambient");
        self::register("mob_piglin_brute_angry", "mob.piglin_brute.angry");
        self::register("mob_piglin_brute_converted_to_zombified", "mob.piglin_brute.converted_to_zombified");
        self::register("mob_piglin_brute_death", "mob.piglin_brute.death");
        self::register("mob_piglin_brute_hurt", "mob.piglin_brute.hurt");
        self::register("mob_piglin_brute_step", "mob.piglin_brute.step");
        self::register("mob_pillager_celebrate", "mob.pillager.celebrate");
        self::register("mob_pillager_death", "mob.pillager.death");
        self::register("mob_pillager_hurt", "mob.pillager.hurt");
        self::register("mob_pillager_idle", "mob.pillager.idle");
        self::register("mob_player_hurt_drown", "mob.player.hurt_drown");
        self::register("mob_player_hurt_freeze", "mob.player.hurt_freeze");
        self::register("mob_player_hurt_on_fire", "mob.player.hurt_on_fire");
        self::register("mob_polarbear_death", "mob.polarbear.death");
        self::register("mob_polarbear_hurt", "mob.polarbear.hurt");
        self::register("mob_polarbear_idle", "mob.polarbear.idle");
        self::register("mob_polarbear_step", "mob.polarbear.step");
        self::register("mob_polarbear_warning", "mob.polarbear.warning");
        self::register("mob_polarbear_baby_idle", "mob.polarbear_baby.idle");
        self::register("mob_rabbit_death", "mob.rabbit.death");
        self::register("mob_rabbit_hop", "mob.rabbit.hop");
        self::register("mob_rabbit_hurt", "mob.rabbit.hurt");
        self::register("mob_rabbit_idle", "mob.rabbit.idle");
        self::register("mob_ravager_ambient", "mob.ravager.ambient");
        self::register("mob_ravager_bite", "mob.ravager.bite");
        self::register("mob_ravager_celebrate", "mob.ravager.celebrate");
        self::register("mob_ravager_death", "mob.ravager.death");
        self::register("mob_ravager_hurt", "mob.ravager.hurt");
        self::register("mob_ravager_roar", "mob.ravager.roar");
        self::register("mob_ravager_step", "mob.ravager.step");
        self::register("mob_ravager_stun", "mob.ravager.stun");
        self::register("mob_sheep_say", "mob.sheep.say");
        self::register("mob_sheep_shear", "mob.sheep.shear");
        self::register("mob_sheep_step", "mob.sheep.step");
        self::register("mob_shulker_ambient", "mob.shulker.ambient");
        self::register("mob_shulker_bullet_hit", "mob.shulker.bullet.hit");
        self::register("mob_shulker_close", "mob.shulker.close");
        self::register("mob_shulker_close_hurt", "mob.shulker.close.hurt");
        self::register("mob_shulker_death", "mob.shulker.death");
        self::register("mob_shulker_hurt", "mob.shulker.hurt");
        self::register("mob_shulker_open", "mob.shulker.open");
        self::register("mob_shulker_shoot", "mob.shulker.shoot");
        self::register("mob_shulker_teleport", "mob.shulker.teleport");
        self::register("mob_silverfish_hit", "mob.silverfish.hit");
        self::register("mob_silverfish_kill", "mob.silverfish.kill");
        self::register("mob_silverfish_say", "mob.silverfish.say");
        self::register("mob_silverfish_step", "mob.silverfish.step");
        self::register("mob_skeleton_convert_to_stray", "mob.skeleton.convert_to_stray");
        self::register("mob_skeleton_death", "mob.skeleton.death");
        self::register("mob_skeleton_hurt", "mob.skeleton.hurt");
        self::register("mob_skeleton_say", "mob.skeleton.say");
        self::register("mob_skeleton_step", "mob.skeleton.step");
        self::register("mob_slime_attack", "mob.slime.attack");
        self::register("mob_slime_big", "mob.slime.big");
        self::register("mob_slime_death", "mob.slime.death");
        self::register("mob_slime_hurt", "mob.slime.hurt");
        self::register("mob_slime_jump", "mob.slime.jump");
        self::register("mob_slime_small", "mob.slime.small");
        self::register("mob_slime_squish", "mob.slime.squish");
        self::register("mob_sniffer_death", "mob.sniffer.death");
        self::register("mob_sniffer_digging", "mob.sniffer.digging");
        self::register("mob_sniffer_drop_seed", "mob.sniffer.drop_seed");
        self::register("mob_sniffer_eat", "mob.sniffer.eat");
        self::register("mob_sniffer_happy", "mob.sniffer.happy");
        self::register("mob_sniffer_hurt", "mob.sniffer.hurt");
        self::register("mob_sniffer_idle", "mob.sniffer.idle");
        self::register("mob_sniffer_long_sniff", "mob.sniffer.long_sniff");
        self::register("mob_sniffer_plop", "mob.sniffer.plop");
        self::register("mob_sniffer_searching", "mob.sniffer.searching");
        self::register("mob_sniffer_sniffsniff", "mob.sniffer.sniffsniff");
        self::register("mob_sniffer_stand_up", "mob.sniffer.stand_up");
        self::register("mob_sniffer_step", "mob.sniffer.step");
        self::register("mob_snowgolem_death", "mob.snowgolem.death");
        self::register("mob_snowgolem_hurt", "mob.snowgolem.hurt");
        self::register("mob_snowgolem_shoot", "mob.snowgolem.shoot");
        self::register("mob_spider_death", "mob.spider.death");
        self::register("mob_spider_say", "mob.spider.say");
        self::register("mob_spider_step", "mob.spider.step");
        self::register("mob_squid_ambient", "mob.squid.ambient");
        self::register("mob_squid_death", "mob.squid.death");
        self::register("mob_squid_hurt", "mob.squid.hurt");
        self::register("mob_squid_ink_squirt", "mob.squid.ink_squirt");
        self::register("mob_stray_ambient", "mob.stray.ambient");
        self::register("mob_stray_death", "mob.stray.death");
        self::register("mob_stray_hurt", "mob.stray.hurt");
        self::register("mob_stray_step", "mob.stray.step");
        self::register("mob_strider_death", "mob.strider.death");
        self::register("mob_strider_eat", "mob.strider.eat");
        self::register("mob_strider_hurt", "mob.strider.hurt");
        self::register("mob_strider_idle", "mob.strider.idle");
        self::register("mob_strider_panic", "mob.strider.panic");
        self::register("mob_strider_step", "mob.strider.step");
        self::register("mob_strider_step_lava", "mob.strider.step_lava");
        self::register("mob_strider_tempt", "mob.strider.tempt");
        self::register("mob_tadpole_convert_to_frog", "mob.tadpole.convert_to_frog");
        self::register("mob_tadpole_death", "mob.tadpole.death");
        self::register("mob_tadpole_hurt", "mob.tadpole.hurt");
        self::register("mob_turtle_ambient", "mob.turtle.ambient");
        self::register("mob_turtle_death", "mob.turtle.death");
        self::register("mob_turtle_hurt", "mob.turtle.hurt");
        self::register("mob_turtle_step", "mob.turtle.step");
        self::register("mob_turtle_swim", "mob.turtle.swim");
        self::register("mob_turtle_baby_born", "mob.turtle_baby.born");
        self::register("mob_turtle_baby_death", "mob.turtle_baby.death");
        self::register("mob_turtle_baby_hurt", "mob.turtle_baby.hurt");
        self::register("mob_turtle_baby_step", "mob.turtle_baby.step");
        self::register("mob_vex_ambient", "mob.vex.ambient");
        self::register("mob_vex_charge", "mob.vex.charge");
        self::register("mob_vex_death", "mob.vex.death");
        self::register("mob_vex_hurt", "mob.vex.hurt");
        self::register("mob_villager_death", "mob.villager.death");
        self::register("mob_villager_haggle", "mob.villager.haggle");
        self::register("mob_villager_hit", "mob.villager.hit");
        self::register("mob_villager_idle", "mob.villager.idle");
        self::register("mob_villager_no", "mob.villager.no");
        self::register("mob_villager_yes", "mob.villager.yes");
        self::register("mob_vindicator_celebrate", "mob.vindicator.celebrate");
        self::register("mob_vindicator_death", "mob.vindicator.death");
        self::register("mob_vindicator_hurt", "mob.vindicator.hurt");
        self::register("mob_vindicator_idle", "mob.vindicator.idle");
        self::register("mob_wanderingtrader_death", "mob.wanderingtrader.death");
        self::register("mob_wanderingtrader_disappeared", "mob.wanderingtrader.disappeared");
        self::register("mob_wanderingtrader_drink_milk", "mob.wanderingtrader.drink_milk");
        self::register("mob_wanderingtrader_drink_potion", "mob.wanderingtrader.drink_potion");
        self::register("mob_wanderingtrader_haggle", "mob.wanderingtrader.haggle");
        self::register("mob_wanderingtrader_hurt", "mob.wanderingtrader.hurt");
        self::register("mob_wanderingtrader_idle", "mob.wanderingtrader.idle");
        self::register("mob_wanderingtrader_no", "mob.wanderingtrader.no");
        self::register("mob_wanderingtrader_reappeared", "mob.wanderingtrader.reappeared");
        self::register("mob_wanderingtrader_yes", "mob.wanderingtrader.yes");
        self::register("mob_warden_agitated", "mob.warden.agitated");
        self::register("mob_warden_angry", "mob.warden.angry");
        self::register("mob_warden_attack", "mob.warden.attack");
        self::register("mob_warden_clicking", "mob.warden.clicking");
        self::register("mob_warden_death", "mob.warden.death");
        self::register("mob_warden_dig", "mob.warden.dig");
        self::register("mob_warden_emerge", "mob.warden.emerge");
        self::register("mob_warden_heartbeat", "mob.warden.heartbeat");
        self::register("mob_warden_hurt", "mob.warden.hurt");
        self::register("mob_warden_idle", "mob.warden.idle");
        self::register("mob_warden_listening", "mob.warden.listening");
        self::register("mob_warden_listening_angry", "mob.warden.listening_angry");
        self::register("mob_warden_nearby_close", "mob.warden.nearby_close");
        self::register("mob_warden_nearby_closer", "mob.warden.nearby_closer");
        self::register("mob_warden_nearby_closest", "mob.warden.nearby_closest");
        self::register("mob_warden_roar", "mob.warden.roar");
        self::register("mob_warden_sniff", "mob.warden.sniff");
        self::register("mob_warden_sonic_boom", "mob.warden.sonic_boom");
        self::register("mob_warden_sonic_charge", "mob.warden.sonic_charge");
        self::register("mob_warden_step", "mob.warden.step");
        self::register("mob_witch_ambient", "mob.witch.ambient");
        self::register("mob_witch_celebrate", "mob.witch.celebrate");
        self::register("mob_witch_death", "mob.witch.death");
        self::register("mob_witch_drink", "mob.witch.drink");
        self::register("mob_witch_hurt", "mob.witch.hurt");
        self::register("mob_witch_throw", "mob.witch.throw");
        self::register("mob_wither_ambient", "mob.wither.ambient");
        self::register("mob_wither_break_block", "mob.wither.break_block");
        self::register("mob_wither_death", "mob.wither.death");
        self::register("mob_wither_hurt", "mob.wither.hurt");
        self::register("mob_wither_shoot", "mob.wither.shoot");
        self::register("mob_wither_spawn", "mob.wither.spawn");
        self::register("mob_wolf_bark", "mob.wolf.bark");
        self::register("mob_wolf_death", "mob.wolf.death");
        self::register("mob_wolf_growl", "mob.wolf.growl");
        self::register("mob_wolf_hurt", "mob.wolf.hurt");
        self::register("mob_wolf_panting", "mob.wolf.panting");
        self::register("mob_wolf_shake", "mob.wolf.shake");
        self::register("mob_wolf_step", "mob.wolf.step");
        self::register("mob_wolf_whine", "mob.wolf.whine");
        self::register("mob_zoglin_angry", "mob.zoglin.angry");
        self::register("mob_zoglin_attack", "mob.zoglin.attack");
        self::register("mob_zoglin_death", "mob.zoglin.death");
        self::register("mob_zoglin_hurt", "mob.zoglin.hurt");
        self::register("mob_zoglin_idle", "mob.zoglin.idle");
        self::register("mob_zoglin_step", "mob.zoglin.step");
        self::register("mob_zombie_death", "mob.zombie.death");
        self::register("mob_zombie_hurt", "mob.zombie.hurt");
        self::register("mob_zombie_remedy", "mob.zombie.remedy");
        self::register("mob_zombie_say", "mob.zombie.say");
        self::register("mob_zombie_step", "mob.zombie.step");
        self::register("mob_zombie_unfect", "mob.zombie.unfect");
        self::register("mob_zombie_wood", "mob.zombie.wood");
        self::register("mob_zombie_woodbreak", "mob.zombie.woodbreak");
        self::register("mob_zombie_villager_death", "mob.zombie_villager.death");
        self::register("mob_zombie_villager_hurt", "mob.zombie_villager.hurt");
        self::register("mob_zombie_villager_say", "mob.zombie_villager.say");
        self::register("mob_zombiepig_zpig", "mob.zombiepig.zpig");
        self::register("mob_zombiepig_zpigangry", "mob.zombiepig.zpigangry");
        self::register("mob_zombiepig_zpigdeath", "mob.zombiepig.zpigdeath");
        self::register("mob_zombiepig_zpighurt", "mob.zombiepig.zpighurt");
        /** Register music sounds */
        self::register("music_game", "music.game");
        self::register("music_game_basalt_deltas", "music.game.basalt_deltas");
        self::register("music_game_creative", "music.game.creative");
        self::register("music_game_credits", "music.game.credits");
        self::register("music_game_crimson_forest", "music.game.crimson_forest");
        self::register("music_game_deep_dark", "music.game.deep_dark");
        self::register("music_game_dripstone_caves", "music.game.dripstone_caves");
        self::register("music_game_end", "music.game.end");
        self::register("music_game_endboss", "music.game.endboss");
        self::register("music_game_frozen_peaks", "music.game.frozen_peaks");
        self::register("music_game_grove", "music.game.grove");
        self::register("music_game_jagged_peaks", "music.game.jagged_peaks");
        self::register("music_game_lush_caves", "music.game.lush_caves");
        self::register("music_game_meadow", "music.game.meadow");
        self::register("music_game_nether", "music.game.nether");
        self::register("music_game_nether_wastes", "music.game.nether_wastes");
        self::register("music_game_snowy_slopes", "music.game.snowy_slopes");
        self::register("music_game_soul_sand_valley", "music.game.soul_sand_valley");
        self::register("music_game_soulsand_valley", "music.game.soulsand_valley");
        self::register("music_game_stony_peaks", "music.game.stony_peaks");
        self::register("music_game_swamp_music", "music.game.swamp_music");
        self::register("music_game_warped_forest", "music.game.warped_forest");
        self::register("music_game_water", "music.game.water");
        self::register("music_game_and_wild_equal_chance", "music.game_and_wild_equal_chance");
        self::register("music_game_and_wild_favor_game", "music.game_and_wild_favor_game");
        self::register("music_menu", "music.menu");
        self::register("music_overworld_bamboo_jungle", "music.overworld.bamboo_jungle");
        self::register("music_overworld_cherry_grove", "music.overworld.cherry_grove");
        self::register("music_overworld_deep_dark", "music.overworld.deep_dark");
        self::register("music_overworld_desert", "music.overworld.desert");
        self::register("music_overworld_dripstone_caves", "music.overworld.dripstone_caves");
        self::register("music_overworld_flower_forest", "music.overworld.flower_forest");
        self::register("music_overworld_grove", "music.overworld.grove");
        self::register("music_overworld_jagged_peaks", "music.overworld.jagged_peaks");
        self::register("music_overworld_jungle", "music.overworld.jungle");
        self::register("music_overworld_jungle_edge", "music.overworld.jungle_edge");
        self::register("music_overworld_lush_caves", "music.overworld.lush_caves");
        self::register("music_overworld_mesa", "music.overworld.mesa");
        self::register("music_overworld_snowy_slopes", "music.overworld.snowy_slopes");
        self::register("music_overworld_stony_peaks", "music.overworld.stony_peaks");
        /** Register note sounds */
        self::register("note_banjo", "note.banjo");
        self::register("note_bass", "note.bass");
        self::register("note_bassattack", "note.bassattack");
        self::register("note_bd", "note.bd");
        self::register("note_bell", "note.bell");
        self::register("note_bit", "note.bit");
        self::register("note_chime", "note.chime");
        self::register("note_cow_bell", "note.cow_bell");
        self::register("note_creeper", "note.creeper");
        self::register("note_didgeridoo", "note.didgeridoo");
        self::register("note_enderdragon", "note.enderdragon");
        self::register("note_flute", "note.flute");
        self::register("note_guitar", "note.guitar");
        self::register("note_harp", "note.harp");
        self::register("note_hat", "note.hat");
        self::register("note_iron_xylophone", "note.iron_xylophone");
        self::register("note_piglin", "note.piglin");
        self::register("note_pling", "note.pling");
        self::register("note_skeleton", "note.skeleton");
        self::register("note_snare", "note.snare");
        self::register("note_witherskeleton", "note.witherskeleton");
        self::register("note_xylophone", "note.xylophone");
        self::register("note_zombie", "note.zombie");
        /** Register ominous_bottle sounds */
        self::register("ominous_bottle_end_use", "ominous_bottle.end_use");
        /** Register ominous_item_spawner sounds */
        self::register("ominous_item_spawner_about_to_spawn_item", "ominous_item_spawner.about_to_spawn_item");
        self::register("ominous_item_spawner_spawn_item", "ominous_item_spawner.spawn_item");
        self::register("ominous_item_spawner_spawn_item_begin", "ominous_item_spawner.spawn_item_begin");
        /** Register open sounds */
        self::register("open_bamboo_wood_door", "open.bamboo_wood_door");
        self::register("open_bamboo_wood_fence_gate", "open.bamboo_wood_fence_gate");
        self::register("open_bamboo_wood_trapdoor", "open.bamboo_wood_trapdoor");
        self::register("open_cherry_wood_door", "open.cherry_wood_door");
        self::register("open_cherry_wood_fence_gate", "open.cherry_wood_fence_gate");
        self::register("open_cherry_wood_trapdoor", "open.cherry_wood_trapdoor");
        self::register("open_fence_gate", "open.fence_gate");
        self::register("open_iron_door", "open.iron_door");
        self::register("open_iron_trapdoor", "open.iron_trapdoor");
        self::register("open_nether_wood_door", "open.nether_wood_door");
        self::register("open_nether_wood_fence_gate", "open.nether_wood_fence_gate");
        self::register("open_nether_wood_trapdoor", "open.nether_wood_trapdoor");
        self::register("open_wooden_door", "open.wooden_door");
        self::register("open_wooden_trapdoor", "open.wooden_trapdoor");
        /** Register open_door sounds */
        self::register("open_door_copper", "open_door.copper");
        /** Register open_trapdoor sounds */
        self::register("open_trapdoor_copper", "open_trapdoor.copper");
        /** Register particle sounds */
        self::register("particle_soul_escape", "particle.soul_escape");
        /** Register pick_berries sounds */
        self::register("pick_berries_cave_vines", "pick_berries.cave_vines");
        /** Register pickup sounds */
        self::register("pickup_chiseled_bookshelf", "pickup.chiseled_bookshelf");
        /** Register pickup_enchanted sounds */
        self::register("pickup_enchanted", "pickup_enchanted.chiseled_bookshelf");
        /** Register place sounds */
        self::register("place_amethyst_block", "place.amethyst_block");
        self::register("place_amethyst_cluster", "place.amethyst_cluster");
        self::register("place_azalea", "place.azalea");
        self::register("place_azalea_leaves", "place.azalea_leaves");
        self::register("place_bamboo_wood", "place.bamboo_wood");
        self::register("place_big_dripleaf", "place.big_dripleaf");
        self::register("place_calcite", "place.calcite");
        self::register("place_cherry_leaves", "place.cherry_leaves");
        self::register("place_cherry_wood", "place.cherry_wood");
        self::register("place_chiseled_bookshelf", "place.chiseled_bookshelf");
        self::register("place_copper", "place.copper");
        self::register("place_copper_bulb", "place.copper_bulb");
        self::register("place_deepslate", "place.deepslate");
        self::register("place_deepslate_bricks", "place.deepslate_bricks");
        self::register("place_dirt_with_roots", "place.dirt_with_roots");
        self::register("place_dripstone_block", "place.dripstone_block");
        self::register("place_hanging_roots", "place.hanging_roots");
        self::register("place_iron", "place.iron");
        self::register("place_large_amethyst_bud", "place.large_amethyst_bud");
        self::register("place_medium_amethyst_bud", "place.medium_amethyst_bud");
        self::register("place_moss", "place.moss");
        self::register("place_nether_wood", "place.nether_wood");
        self::register("place_pink_petals", "place.pink_petals");
        self::register("place_pointed_dripstone", "place.pointed_dripstone");
        self::register("place_powder_snow", "place.powder_snow");
        self::register("place_sculk", "place.sculk");
        self::register("place_sculk_catalyst", "place.sculk_catalyst");
        self::register("place_sculk_sensor", "place.sculk_sensor");
        self::register("place_sculk_shrieker", "place.sculk_shrieker");
        self::register("place_small_amethyst_bud", "place.small_amethyst_bud");
        self::register("place_sponge", "place.sponge");
        self::register("place_spore_blossom", "place.spore_blossom");
        self::register("place_suspicious_gravel", "place.suspicious_gravel");
        self::register("place_suspicious_sand", "place.suspicious_sand");
        self::register("place_tuff", "place.tuff");
        self::register("place_tuff_bricks", "place.tuff_bricks");
        self::register("place_wet_sponge", "place.wet_sponge");
        /** Register portal sounds */
        self::register("portal_portal", "portal.portal");
        self::register("portal_travel", "portal.travel");
        self::register("portal_trigger", "portal.trigger");
        /** Register power sounds */
        self::register("power_off_sculk_sensor", "power.off.sculk_sensor");
        self::register("power_on_sculk_sensor", "power.on.sculk_sensor");
        /** Register pumpkin sounds */
        self::register("pumpkin_carve", "pumpkin.carve");
        /** Register raid sounds */
        self::register("raid_horn", "raid.horn");
        /** Register random sounds */
        self::register("anvil_break", "random.anvil_break");
        self::register("anvil_land", "random.anvil_land");
        self::register("anvil_use", "random.anvil_use");
        self::register("bow", "random.bow");
        self::register("bowhit", "random.bowhit");
        self::register("break", "random.break");
        self::register("burp", "random.burp");
        self::register("chest_closed", "random.chestclosed");
        self::register("chest_open", "random.chestopen");
        self::register("click", "random.click");
        self::register("door_close", "random.door_close");
        self::register("door_open", "random.door_open");
        self::register("drink", "random.drink");
        self::register("drink_honey", "random.drink_honey");
        self::register("eat", "random.eat");
        self::register("ender_chest_closed", "random.enderchestclosed");
        self::register("ender_chest_open", "random.enderchestopen");
        self::register("explode", "random.explode");
        self::register("fizz", "random.fizz");
        self::register("fuse", "random.fuse");
        self::register("glass", "random.glass");
        self::register("hurt", "random.hurt");
        self::register("levelup", "random.levelup");
        self::register("lever_click", "random.lever_click");
        self::register("orb", "random.orb");
        self::register("pop", "random.pop");
        self::register("pop2", "random.pop2");
        self::register("potion_brewed", "random.potion.brewed");
        self::register("screenshot", "random.screenshot");
        self::register("shulker_box_closed", "random.shulkerboxclosed");
        self::register("shulker_box_open", "random.shulkerboxopen");
        self::register("splash", "random.splash");
        self::register("stone_click", "random.stone_click");
        self::register("swim", "random.swim");
        self::register("toast", "random.toast");
        self::register("toast_recipe_unlocking_in", "random.toast_recipe_unlocking_in");
        self::register("toast_recipe_unlocking_out", "random.toast_recipe_unlocking_out");
        self::register("totem", "random.totem");
        self::register("wood_click", "random.wood_click");
        /** Register record sounds */
        self::register("record_11", "record.11");
        self::register("record_13", "record.13");
        self::register("record_5", "record.5");
        self::register("record_blocks", "record.blocks");
        self::register("record_cat", "record.cat");
        self::register("record_chirp", "record.chirp");
        self::register("record_creator", "record.creator");
        self::register("record_creator_music_box", "record.creator_music_box");
        self::register("record_far", "record.far");
        self::register("record_mall", "record.mall");
        self::register("record_mellohi", "record.mellohi");
        self::register("record_otherside", "record.otherside");
        self::register("record_pigstep", "record.pigstep");
        self::register("record_precipice", "record.precipice");
        self::register("record_relic", "record.relic");
        self::register("record_stal", "record.stal");
        self::register("record_strad", "record.strad");
        self::register("record_wait", "record.wait");
        self::register("record_ward", "record.ward");
        /** Register resonate sounds */
        self::register("resonate_amethyst_block", "resonate.amethyst_block");
        /** Register respawn_anchor sounds */
        self::register("respawn_anchor_ambient", "respawn_anchor.ambient");
        self::register("respawn_anchor_charge", "respawn_anchor.charge");
        self::register("respawn_anchor_deplete", "respawn_anchor.deplete");
        self::register("respawn_anchor_set_spawn", "respawn_anchor.set_spawn");
        /** Register shatter sounds */
        self::register("shatter_decorated_pot", "shatter.decorated_pot");
        /** Register shriek sounds */
        self::register("shriek_sculk_shrieker", "shriek.sculk_shrieker");
        /** Register sign sounds */
        self::register("sign_dye_use", "sign.dye.use");
        self::register("sign_ink_sac_use", "sign.ink_sac.use");
        /** Register smithing_table sounds */
        self::register("smithing_table_use", "smithing_table.use");
        /** Register sponge sounds */
        self::register("sponge_absorb", "sponge.absorb");
        /** Register spread sounds */
        self::register("spread_sculk", "spread.sculk");
        /** Register step sounds */
        self::register("step_amethyst_block", "step.amethyst_block");
        self::register("step_amethyst_cluster", "step.amethyst_cluster");
        self::register("step_ancient_debris", "step.ancient_debris");
        self::register("step_azalea", "step.azalea");
        self::register("step_azalea_leaves", "step.azalea_leaves");
        self::register("step_bamboo_wood", "step.bamboo_wood");
        self::register("step_bamboo_wood_hanging_sign", "step.bamboo_wood_hanging_sign");
        self::register("step_basalt", "step.basalt");
        self::register("step_big_dripleaf", "step.big_dripleaf");
        self::register("step_bone_block", "step.bone_block");
        self::register("step_calcite", "step.calcite");
        self::register("step_candle", "step.candle");
        self::register("step_cave_vines", "step.cave_vines");
        self::register("step_chain", "step.chain");
        self::register("step_cherry_leaves", "step.cherry_leaves");
        self::register("step_cherry_wood", "step.cherry_wood");
        self::register("step_cherry_wood_hanging_sign", "step.cherry_wood_hanging_sign");
        self::register("step_chiseled_bookshelf", "step.chiseled_bookshelf");
        self::register("step_cloth", "step.cloth");
        self::register("step_copper", "step.copper");
        self::register("step_copper_bulb", "step.copper_bulb");
        self::register("step_copper_grate", "step.copper_grate");
        self::register("step_coral", "step.coral");
        self::register("step_decorated_pot", "step.decorated_pot");
        self::register("step_deepslate", "step.deepslate");
        self::register("step_deepslate_bricks", "step.deepslate_bricks");
        self::register("step_dirt_with_roots", "step.dirt_with_roots");
        self::register("step_dripstone_block", "step.dripstone_block");
        self::register("step_frog_spawn", "step.frog_spawn");
        self::register("step_froglight", "step.froglight");
        self::register("step_grass", "step.grass");
        self::register("step_gravel", "step.gravel");
        self::register("step_hanging_roots", "step.hanging_roots");
        self::register("step_hanging_sign", "step.hanging_sign");
        self::register("step_heavy_core", "step.heavy_core");
        self::register("step_honey_block", "step.honey_block");
        self::register("step_iron", "step.iron");
        self::register("step_ladder", "step.ladder");
        self::register("step_moss", "step.moss");
        self::register("step_nether_brick", "step.nether_brick");
        self::register("step_nether_gold_ore", "step.nether_gold_ore");
        self::register("step_nether_sprouts", "step.nether_sprouts");
        self::register("step_nether_wart", "step.nether_wart");
        self::register("step_nether_wood", "step.nether_wood");
        self::register("step_nether_wood_hanging_sign", "step.nether_wood_hanging_sign");
        self::register("step_netherite", "step.netherite");
        self::register("step_netherrack", "step.netherrack");
        self::register("step_nylium", "step.nylium");
        self::register("step_pink_petals", "step.pink_petals");
        self::register("step_pointed_dripstone", "step.pointed_dripstone");
        self::register("step_powder_snow", "step.powder_snow");
        self::register("step_roots", "step.roots");
        self::register("step_sand", "step.sand");
        self::register("step_sculk", "step.sculk");
        self::register("step_sculk_catalyst", "step.sculk_catalyst");
        self::register("step_sculk_sensor", "step.sculk_sensor");
        self::register("step_sculk_shrieker", "step.sculk_shrieker");
        self::register("step_sculk_vein", "step.sculk_vein");
        self::register("step_shroomlight", "step.shroomlight");
        self::register("step_slime", "step.slime");
        self::register("step_snow", "step.snow");
        self::register("step_soul_sand", "step.soul_sand");
        self::register("step_soul_soil", "step.soul_soil");
        self::register("step_sponge", "step.sponge");
        self::register("step_spore_blossom", "step.spore_blossom");
        self::register("step_stem", "step.stem");
        self::register("step_stone", "step.stone");
        self::register("step_suspicious_gravel", "step.suspicious_gravel");
        self::register("step_suspicious_sand", "step.suspicious_sand");
        self::register("step_tuff", "step.tuff");
        self::register("step_tuff_bricks", "step.tuff_bricks");
        self::register("step_vines", "step.vines");
        self::register("step_web", "step.web");
        self::register("step_wet_sponge", "step.wet_sponge");
        self::register("step_wood", "step.wood");
        /** Register tile sounds */
        self::register("tile_piston_in", "tile.piston.in");
        self::register("tile_piston_out", "tile.piston.out");
        /** Register tilt_down sounds */
        self::register("tilt_down_big_dripleaf", "tilt_down.big_dripleaf");
        /** Register tilt_up sounds */
        self::register("tilt_up_big_dripleaf", "tilt_up.big_dripleaf");
        /** Register trial_spawner sounds */
        self::register("trial_spawner_ambient", "trial_spawner.ambient");
        self::register("trial_spawner_ambient_ominous", "trial_spawner.ambient_ominous");
        self::register("trial_spawner_break", "trial_spawner.break");
        self::register("trial_spawner_charge_activate", "trial_spawner.charge_activate");
        self::register("trial_spawner_close_shutter", "trial_spawner.close_shutter");
        self::register("trial_spawner_detect_player", "trial_spawner.detect_player");
        self::register("trial_spawner_eject_item", "trial_spawner.eject_item");
        self::register("trial_spawner_hit", "trial_spawner.hit");
        self::register("trial_spawner_open_shutter", "trial_spawner.open_shutter");
        self::register("trial_spawner_place", "trial_spawner.place");
        self::register("trial_spawner_spawn_mob", "trial_spawner.spawn_mob");
        self::register("trial_spawner_step", "trial_spawner.step");
        /** Register ui sounds */
        self::register("cartography_table_take_result", "ui.cartography_table.take_result");
        self::register("ui_drawer_close", "ui.drawer_close");
        self::register("ui_drawer_open", "ui.drawer_open");
        self::register("ui_hardcore_disable", "ui.hardcore_disable");
        self::register("ui_hardcore_enable", "ui.hardcore_enable");
        self::register("ui_hardcore_toggle_press", "ui.hardcore_toggle_press");
        self::register("loom_select_pattern", "ui.loom.select_pattern");
        self::register("loom_take_result", "ui.loom.take_result");
        self::register("stonecutter_take_result", "ui.stonecutter.take_result");
        /** Register use sounds */
        self::register("use_ancient_debris", "use.ancient_debris");
        self::register("use_basalt", "use.basalt");
        self::register("use_bone_block", "use.bone_block");
        self::register("use_candle", "use.candle");
        self::register("use_cave_vines", "use.cave_vines");
        self::register("use_chain", "use.chain");
        self::register("use_cloth", "use.cloth");
        self::register("use_copper", "use.copper");
        self::register("use_coral", "use.coral");
        self::register("use_deepslate", "use.deepslate");
        self::register("use_deepslate_bricks", "use.deepslate_bricks");
        self::register("use_dirt_with_roots", "use.dirt_with_roots");
        self::register("use_dripstone_block", "use.dripstone_block");
        self::register("use_grass", "use.grass");
        self::register("use_gravel", "use.gravel");
        self::register("use_hanging_roots", "use.hanging_roots");
        self::register("use_honey_block", "use.honey_block");
        self::register("use_ladder", "use.ladder");
        self::register("use_moss", "use.moss");
        self::register("use_nether_brick", "use.nether_brick");
        self::register("use_nether_gold_ore", "use.nether_gold_ore");
        self::register("use_nether_sprouts", "use.nether_sprouts");
        self::register("use_nether_wart", "use.nether_wart");
        self::register("use_netherite", "use.netherite");
        self::register("use_netherrack", "use.netherrack");
        self::register("use_nylium", "use.nylium");
        self::register("use_pointed_dripstone", "use.pointed_dripstone");
        self::register("use_roots", "use.roots");
        self::register("use_sand", "use.sand");
        self::register("use_sculk_sensor", "use.sculk_sensor");
        self::register("use_shroomlight", "use.shroomlight");
        self::register("use_slime", "use.slime");
        self::register("use_snow", "use.snow");
        self::register("use_soul_sand", "use.soul_sand");
        self::register("use_soul_soil", "use.soul_soil");
        self::register("use_spore_blossom", "use.spore_blossom");
        self::register("use_stem", "use.stem");
        self::register("use_stone", "use.stone");
        self::register("use_vines", "use.vines");
        self::register("use_wood", "use.wood");
        /** Register vault sounds */
        self::register("vault_activate", "vault.activate");
        self::register("vault_ambient", "vault.ambient");
        self::register("vault_break", "vault.break");
        self::register("vault_close_shutter", "vault.close_shutter");
        self::register("vault_deactivate", "vault.deactivate");
        self::register("vault_eject_item", "vault.eject_item");
        self::register("vault_hit", "vault.hit");
        self::register("vault_insert_item", "vault.insert_item");
        self::register("vault_insert_item_fail", "vault.insert_item_fail");
        self::register("vault_open_shutter", "vault.open_shutter");
        self::register("vault_place", "vault.place");
        self::register("vault_reject_rewarded_player", "vault.reject_rewarded_player");
        self::register("vault_step", "vault.step");
        /** Register vr sounds */
        self::register("vr_stutterturn", "vr.stutterturn");
        /** Register wind_charge sounds */
        self::register("wind_charge_burst", "wind_charge.burst");
        /** Register other sounds */
        self::register("scrape", "scrape");
    }

}

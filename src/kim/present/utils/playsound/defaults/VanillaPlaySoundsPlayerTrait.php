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
 * Provides vanilla play sounds and sound name constants for category "player".
 *
 * Last updated for 1.26.0.2.
 *
 * @internal This trait is generated automatically from {@link build/VanillaPlaySounds.generator.php}.
 * @see      VanillaPlaySounds
 */
trait VanillaPlaySoundsPlayerTrait{

    public const AMBIENT_UNDERWATER_ENTER = 'ambient.underwater.enter';
    public const UNDERWATER_ENTER = 'ambient.underwater.enter';
    public const AMBIENT_UNDERWATER_EXIT = 'ambient.underwater.exit';
    public const UNDERWATER_EXIT = 'ambient.underwater.exit';
    public const APPLY_EFFECT_BAD_OMEN = 'apply_effect.bad_omen';
    public const BAD_OMEN = 'apply_effect.bad_omen';
    public const APPLY_EFFECT_RAID_OMEN = 'apply_effect.raid_omen';
    public const RAID_OMEN = 'apply_effect.raid_omen';
    public const APPLY_EFFECT_TRIAL_OMEN = 'apply_effect.trial_omen';
    public const TRIAL_OMEN = 'apply_effect.trial_omen';
    public const ARMOR_EQUIP_CHAIN = 'armor.equip_chain';
    public const EQUIP_CHAIN = 'armor.equip_chain';
    public const ARMOR_EQUIP_DIAMOND = 'armor.equip_diamond';
    public const EQUIP_DIAMOND = 'armor.equip_diamond';
    public const ARMOR_EQUIP_GENERIC = 'armor.equip_generic';
    public const EQUIP_GENERIC = 'armor.equip_generic';
    public const ARMOR_EQUIP_GOLD = 'armor.equip_gold';
    public const EQUIP_GOLD = 'armor.equip_gold';
    public const ARMOR_EQUIP_IRON = 'armor.equip_iron';
    public const EQUIP_IRON = 'armor.equip_iron';
    public const ARMOR_EQUIP_LEATHER = 'armor.equip_leather';
    public const EQUIP_LEATHER = 'armor.equip_leather';
    public const ARMOR_EQUIP_NETHERITE = 'armor.equip_netherite';
    public const EQUIP_NETHERITE = 'armor.equip_netherite';
    public const BLOCK_CREAKING_HEART_FALL = 'block.creaking_heart.fall';
    public const CREAKING_HEART_FALL = 'block.creaking_heart.fall';
    public const BLOCK_CREAKING_HEART_STEP = 'block.creaking_heart.step';
    public const CREAKING_HEART_STEP = 'block.creaking_heart.step';
    public const BLOCK_DRIED_GHAST_FALL = 'block.dried_ghast.fall';
    public const DRIED_GHAST_FALL = 'block.dried_ghast.fall';
    public const BLOCK_DRIED_GHAST_STEP = 'block.dried_ghast.step';
    public const DRIED_GHAST_STEP = 'block.dried_ghast.step';
    public const BLOCK_LEAF_LITTER_STEP = 'block.leaf_litter.step';
    public const LEAF_LITTER_STEP = 'block.leaf_litter.step';
    public const BLOCK_RESIN_FALL = 'block.resin.fall';
    public const RESIN_FALL = 'block.resin.fall';
    public const BLOCK_RESIN_STEP = 'block.resin.step';
    public const RESIN_STEP = 'block.resin.step';
    public const BLOCK_RESIN_BRICK_FALL = 'block.resin_brick.fall';
    public const RESIN_BRICK_FALL = 'block.resin_brick.fall';
    public const BLOCK_RESIN_BRICK_STEP = 'block.resin_brick.step';
    public const RESIN_BRICK_STEP = 'block.resin_brick.step';
    public const BLOCK_WEEPING_VINES_FALL = 'block.weeping_vines.fall';
    public const WEEPING_VINES_FALL = 'block.weeping_vines.fall';
    public const BLOCK_WEEPING_VINES_JUMP = 'block.weeping_vines.jump';
    public const WEEPING_VINES_JUMP = 'block.weeping_vines.jump';
    public const BLOCK_WEEPING_VINES_LAND = 'block.weeping_vines.land';
    public const WEEPING_VINES_LAND = 'block.weeping_vines.land';
    public const BLOCK_WEEPING_VINES_STEP = 'block.weeping_vines.step';
    public const WEEPING_VINES_STEP = 'block.weeping_vines.step';
    public const BRUSH_GENERIC = 'brush.generic';
    public const GENERIC = 'brush.generic';
    public const BRUSH_SUSPICIOUS_GRAVEL = 'brush.suspicious_gravel';
    public const BRUSH_SUSPICIOUS_SAND = 'brush.suspicious_sand';
    public const BRUSH_COMPLETED_SUSPICIOUS_GRAVEL = 'brush_completed.suspicious_gravel';
    public const BRUSH_COMPLETED_SUSPICIOUS_SAND = 'brush_completed.suspicious_sand';
    public const BUCKET_FILL_POWDER_SNOW = 'bucket.fill_powder_snow';
    public const FILL_POWDER_SNOW = 'bucket.fill_powder_snow';
    public const BUNDLE_DROP_CONTENTS = 'bundle.drop_contents';
    public const DROP_CONTENTS = 'bundle.drop_contents';
    public const BUNDLE_INSERT = 'bundle.insert';
    public const INSERT = 'bundle.insert';
    public const BUNDLE_INSERT_FAIL = 'bundle.insert_fail';
    public const INSERT_FAIL = 'bundle.insert_fail';
    public const BUNDLE_REMOVE_ONE = 'bundle.remove_one';
    public const REMOVE_ONE = 'bundle.remove_one';
    public const CAMERA_TAKE_PICTURE = 'camera.take_picture';
    public const TAKE_PICTURE = 'camera.take_picture';
    public const CROSSBOW_LOADING_END = 'crossbow.loading.end';
    public const LOADING_END = 'crossbow.loading.end';
    public const CROSSBOW_LOADING_MIDDLE = 'crossbow.loading.middle';
    public const LOADING_MIDDLE = 'crossbow.loading.middle';
    public const CROSSBOW_LOADING_START = 'crossbow.loading.start';
    public const LOADING_START = 'crossbow.loading.start';
    public const CROSSBOW_QUICK_CHARGE_END = 'crossbow.quick_charge.end';
    public const QUICK_CHARGE_END = 'crossbow.quick_charge.end';
    public const CROSSBOW_QUICK_CHARGE_MIDDLE = 'crossbow.quick_charge.middle';
    public const QUICK_CHARGE_MIDDLE = 'crossbow.quick_charge.middle';
    public const CROSSBOW_QUICK_CHARGE_START = 'crossbow.quick_charge.start';
    public const QUICK_CHARGE_START = 'crossbow.quick_charge.start';
    public const CROSSBOW_SHOOT = 'crossbow.shoot';
    public const SHOOT = 'crossbow.shoot';
    public const DAMAGE_FALLBIG = 'damage.fallbig';
    public const FALLBIG = 'damage.fallbig';
    public const DAMAGE_FALLSMALL = 'damage.fallsmall';
    public const FALLSMALL = 'damage.fallsmall';
    public const DAMAGE_THORNS = 'damage.thorns';
    public const THORNS = 'damage.thorns';
    public const ELYTRA_LOOP = 'elytra.loop';
    public const LOOP = 'elytra.loop';
    public const FALL_AMETHYST_BLOCK = 'fall.amethyst_block';
    public const FALL_AMETHYST_CLUSTER = 'fall.amethyst_cluster';
    public const FALL_ANCIENT_DEBRIS = 'fall.ancient_debris';
    public const FALL_AZALEA = 'fall.azalea';
    public const FALL_AZALEA_LEAVES = 'fall.azalea_leaves';
    public const FALL_BAMBOO_WOOD = 'fall.bamboo_wood';
    public const FALL_BASALT = 'fall.basalt';
    public const FALL_BIG_DRIPLEAF = 'fall.big_dripleaf';
    public const FALL_BONE_BLOCK = 'fall.bone_block';
    public const FALL_CALCITE = 'fall.calcite';
    public const FALL_CAVE_VINES = 'fall.cave_vines';
    public const FALL_CHAIN = 'fall.chain';
    public const FALL_CHERRY_LEAVES = 'fall.cherry_leaves';
    public const FALL_CHERRY_WOOD = 'fall.cherry_wood';
    public const FALL_CLOTH = 'fall.cloth';
    public const FALL_COPPER = 'fall.copper';
    public const FALL_CORAL = 'fall.coral';
    public const FALL_DEEPSLATE = 'fall.deepslate';
    public const FALL_DEEPSLATE_BRICKS = 'fall.deepslate_bricks';
    public const FALL_DIRT_WITH_ROOTS = 'fall.dirt_with_roots';
    public const FALL_DRIPSTONE_BLOCK = 'fall.dripstone_block';
    public const FALL_EGG = 'fall.egg';
    public const EGG = 'fall.egg';
    public const FALL_GRASS = 'fall.grass';
    public const FALL_GRAVEL = 'fall.gravel';
    public const FALL_HANGING_ROOTS = 'fall.hanging_roots';
    public const FALL_HONEY_BLOCK = 'fall.honey_block';
    public const FALL_LADDER = 'fall.ladder';
    public const LADDER = 'fall.ladder';
    public const FALL_MOSS = 'fall.moss';
    public const FALL_NETHER_BRICK = 'fall.nether_brick';
    public const FALL_NETHER_GOLD_ORE = 'fall.nether_gold_ore';
    public const FALL_NETHER_SPROUTS = 'fall.nether_sprouts';
    public const FALL_NETHER_WART = 'fall.nether_wart';
    public const FALL_NETHER_WOOD = 'fall.nether_wood';
    public const FALL_NETHERITE = 'fall.netherite';
    public const FALL_NETHERRACK = 'fall.netherrack';
    public const FALL_NYLIUM = 'fall.nylium';
    public const FALL_PINK_PETALS = 'fall.pink_petals';
    public const FALL_POINTED_DRIPSTONE = 'fall.pointed_dripstone';
    public const FALL_POWDER_SNOW = 'fall.powder_snow';
    public const FALL_ROOTS = 'fall.roots';
    public const FALL_SAND = 'fall.sand';
    public const FALL_SCULK_SENSOR = 'fall.sculk_sensor';
    public const FALL_SHROOMLIGHT = 'fall.shroomlight';
    public const FALL_SLIME = 'fall.slime';
    public const SLIME = 'fall.slime';
    public const FALL_SNOW = 'fall.snow';
    public const FALL_SOUL_SAND = 'fall.soul_sand';
    public const FALL_SOUL_SOIL = 'fall.soul_soil';
    public const FALL_SPORE_BLOSSOM = 'fall.spore_blossom';
    public const FALL_STEM = 'fall.stem';
    public const FALL_STONE = 'fall.stone';
    public const FALL_TUFF = 'fall.tuff';
    public const FALL_VINES = 'fall.vines';
    public const FALL_WOOD = 'fall.wood';
    public const GAME_PLAYER_ATTACK_NODAMAGE = 'game.player.attack.nodamage';
    public const PLAYER_ATTACK_NODAMAGE = 'game.player.attack.nodamage';
    public const GAME_PLAYER_ATTACK_STRONG = 'game.player.attack.strong';
    public const PLAYER_ATTACK_STRONG = 'game.player.attack.strong';
    public const GAME_PLAYER_DIE = 'game.player.die';
    public const PLAYER_DIE = 'game.player.die';
    public const GAME_PLAYER_HURT = 'game.player.hurt';
    public const PLAYER_HURT = 'game.player.hurt';
    public const ITEM_ENCHANT_LUNGE1 = 'item.enchant.lunge1';
    public const ENCHANT_LUNGE1 = 'item.enchant.lunge1';
    public const ITEM_ENCHANT_LUNGE2 = 'item.enchant.lunge2';
    public const ENCHANT_LUNGE2 = 'item.enchant.lunge2';
    public const ITEM_ENCHANT_LUNGE3 = 'item.enchant.lunge3';
    public const ENCHANT_LUNGE3 = 'item.enchant.lunge3';
    public const ITEM_SHIELD_BLOCK = 'item.shield.block';
    public const SHIELD_BLOCK = 'item.shield.block';
    public const ITEM_SPEAR_ATTACK_HIT = 'item.spear.attack_hit';
    public const SPEAR_ATTACK_HIT = 'item.spear.attack_hit';
    public const ITEM_SPEAR_ATTACK_MISS = 'item.spear.attack_miss';
    public const SPEAR_ATTACK_MISS = 'item.spear.attack_miss';
    public const ITEM_SPEAR_HIT = 'item.spear.hit';
    public const SPEAR_HIT = 'item.spear.hit';
    public const ITEM_SPEAR_USE = 'item.spear.use';
    public const SPEAR_USE = 'item.spear.use';
    public const ITEM_SPYGLASS_STOP_USING = 'item.spyglass.stop_using';
    public const SPYGLASS_STOP_USING = 'item.spyglass.stop_using';
    public const ITEM_SPYGLASS_USE = 'item.spyglass.use';
    public const SPYGLASS_USE = 'item.spyglass.use';
    public const ITEM_TRIDENT_HIT = 'item.trident.hit';
    public const TRIDENT_HIT = 'item.trident.hit';
    public const ITEM_TRIDENT_HIT_GROUND = 'item.trident.hit_ground';
    public const TRIDENT_HIT_GROUND = 'item.trident.hit_ground';
    public const ITEM_TRIDENT_RETURN = 'item.trident.return';
    public const TRIDENT_RETURN = 'item.trident.return';
    public const ITEM_TRIDENT_RIPTIDE_1 = 'item.trident.riptide_1';
    public const TRIDENT_RIPTIDE_1 = 'item.trident.riptide_1';
    public const ITEM_TRIDENT_RIPTIDE_2 = 'item.trident.riptide_2';
    public const TRIDENT_RIPTIDE_2 = 'item.trident.riptide_2';
    public const ITEM_TRIDENT_RIPTIDE_3 = 'item.trident.riptide_3';
    public const TRIDENT_RIPTIDE_3 = 'item.trident.riptide_3';
    public const ITEM_TRIDENT_THROW = 'item.trident.throw';
    public const TRIDENT_THROW = 'item.trident.throw';
    public const ITEM_TRIDENT_THUNDER = 'item.trident.thunder';
    public const TRIDENT_THUNDER = 'item.trident.thunder';
    public const ITEM_WOODEN_SPEAR_ATTACK_HIT = 'item.wooden_spear.attack_hit';
    public const WOODEN_SPEAR_ATTACK_HIT = 'item.wooden_spear.attack_hit';
    public const ITEM_WOODEN_SPEAR_ATTACK_MISS = 'item.wooden_spear.attack_miss';
    public const WOODEN_SPEAR_ATTACK_MISS = 'item.wooden_spear.attack_miss';
    public const ITEM_WOODEN_SPEAR_HIT = 'item.wooden_spear.hit';
    public const WOODEN_SPEAR_HIT = 'item.wooden_spear.hit';
    public const ITEM_WOODEN_SPEAR_USE = 'item.wooden_spear.use';
    public const WOODEN_SPEAR_USE = 'item.wooden_spear.use';
    public const JUMP_AZALEA = 'jump.azalea';
    public const JUMP_BIG_DRIPLEAF = 'jump.big_dripleaf';
    public const JUMP_CAVE_VINES = 'jump.cave_vines';
    public const JUMP_DEEPSLATE = 'jump.deepslate';
    public const JUMP_DEEPSLATE_BRICKS = 'jump.deepslate_bricks';
    public const JUMP_DIRT_WITH_ROOTS = 'jump.dirt_with_roots';
    public const JUMP_DRIPSTONE_BLOCK = 'jump.dripstone_block';
    public const JUMP_HANGING_ROOTS = 'jump.hanging_roots';
    public const JUMP_MOSS = 'jump.moss';
    public const JUMP_POINTED_DRIPSTONE = 'jump.pointed_dripstone';
    public const JUMP_SCULK_SENSOR = 'jump.sculk_sensor';
    public const JUMP_SPORE_BLOSSOM = 'jump.spore_blossom';
    public const LAND_AZALEA = 'land.azalea';
    public const LAND_BIG_DRIPLEAF = 'land.big_dripleaf';
    public const LAND_CAVE_VINES = 'land.cave_vines';
    public const LAND_DEEPSLATE = 'land.deepslate';
    public const LAND_DEEPSLATE_BRICKS = 'land.deepslate_bricks';
    public const LAND_DIRT_WITH_ROOTS = 'land.dirt_with_roots';
    public const LAND_DRIPSTONE_BLOCK = 'land.dripstone_block';
    public const LAND_HANGING_ROOTS = 'land.hanging_roots';
    public const LAND_MOSS = 'land.moss';
    public const LAND_POINTED_DRIPSTONE = 'land.pointed_dripstone';
    public const LAND_SCULK_SENSOR = 'land.sculk_sensor';
    public const LAND_SPORE_BLOSSOM = 'land.spore_blossom';
    public const MACE_HEAVY_SMASH_GROUND = 'mace.heavy_smash_ground';
    public const HEAVY_SMASH_GROUND = 'mace.heavy_smash_ground';
    public const MACE_SMASH_AIR = 'mace.smash_air';
    public const SMASH_AIR = 'mace.smash_air';
    public const MACE_SMASH_GROUND = 'mace.smash_ground';
    public const SMASH_GROUND = 'mace.smash_ground';
    public const MOB_PLAYER_HURT_DROWN = 'mob.player.hurt_drown';
    public const PLAYER_HURT_DROWN = 'mob.player.hurt_drown';
    public const MOB_PLAYER_HURT_FREEZE = 'mob.player.hurt_freeze';
    public const PLAYER_HURT_FREEZE = 'mob.player.hurt_freeze';
    public const MOB_PLAYER_HURT_ON_FIRE = 'mob.player.hurt_on_fire';
    public const PLAYER_HURT_ON_FIRE = 'mob.player.hurt_on_fire';
    public const MOB_SHEEP_SHEAR = 'mob.sheep.shear';
    public const SHEEP_SHEAR = 'mob.sheep.shear';
    public const PARTICLE_SOUL_ESCAPE = 'particle.soul_escape';
    public const SOUL_ESCAPE = 'particle.soul_escape';
    public const RANDOM_BOW = 'random.bow';
    public const BOW = 'random.bow';
    public const RANDOM_BOWHIT = 'random.bowhit';
    public const RANDOM_BREAK = 'random.break';
    public const RANDOM_BURP = 'random.burp';
    public const BURP = 'random.burp';
    public const RANDOM_DRINK = 'random.drink';
    public const DRINK = 'random.drink';
    public const RANDOM_DRINK_HONEY = 'random.drink_honey';
    public const DRINK_HONEY = 'random.drink_honey';
    public const RANDOM_EAT = 'random.eat';
    public const EAT = 'random.eat';
    public const RANDOM_HURT = 'random.hurt';
    public const HURT = 'random.hurt';
    public const RANDOM_LEVELUP = 'random.levelup';
    public const LEVELUP = 'random.levelup';
    public const RANDOM_ORB = 'random.orb';
    public const ORB = 'random.orb';
    public const RANDOM_POP = 'random.pop';
    public const RANDOM_POP2 = 'random.pop2';
    public const POP2 = 'random.pop2';
    public const RANDOM_SPLASH = 'random.splash';
    public const SPLASH = 'random.splash';
    public const RANDOM_SWIM = 'random.swim';
    public const SWIM = 'random.swim';
    public const RANDOM_TOTEM = 'random.totem';
    public const TOTEM = 'random.totem';
    public const STEP_AMETHYST_BLOCK = 'step.amethyst_block';
    public const STEP_AMETHYST_CLUSTER = 'step.amethyst_cluster';
    public const STEP_ANCIENT_DEBRIS = 'step.ancient_debris';
    public const STEP_AZALEA = 'step.azalea';
    public const STEP_AZALEA_LEAVES = 'step.azalea_leaves';
    public const STEP_BAMBOO_WOOD = 'step.bamboo_wood';
    public const STEP_BAMBOO_WOOD_HANGING_SIGN = 'step.bamboo_wood_hanging_sign';
    public const STEP_BASALT = 'step.basalt';
    public const STEP_BIG_DRIPLEAF = 'step.big_dripleaf';
    public const STEP_BONE_BLOCK = 'step.bone_block';
    public const STEP_CALCITE = 'step.calcite';
    public const STEP_CAVE_VINES = 'step.cave_vines';
    public const STEP_CHAIN = 'step.chain';
    public const STEP_CHERRY_WOOD = 'step.cherry_wood';
    public const STEP_CHERRY_WOOD_HANGING_SIGN = 'step.cherry_wood_hanging_sign';
    public const STEP_CHISELED_BOOKSHELF = 'step.chiseled_bookshelf';
    public const STEP_CLOTH = 'step.cloth';
    public const STEP_COPPER = 'step.copper';
    public const STEP_CORAL = 'step.coral';
    public const STEP_DEEPSLATE = 'step.deepslate';
    public const STEP_DEEPSLATE_BRICKS = 'step.deepslate_bricks';
    public const STEP_DIRT_WITH_ROOTS = 'step.dirt_with_roots';
    public const STEP_DRIPSTONE_BLOCK = 'step.dripstone_block';
    public const STEP_GRASS = 'step.grass';
    public const STEP_GRAVEL = 'step.gravel';
    public const STEP_HANGING_ROOTS = 'step.hanging_roots';
    public const STEP_HANGING_SIGN = 'step.hanging_sign';
    public const STEP_HEAVY_CORE = 'step.heavy_core';
    public const STEP_HONEY_BLOCK = 'step.honey_block';
    public const STEP_IRON = 'step.iron';
    public const STEP_LADDER = 'step.ladder';
    public const STEP_MOSS = 'step.moss';
    public const STEP_NETHER_BRICK = 'step.nether_brick';
    public const STEP_NETHER_GOLD_ORE = 'step.nether_gold_ore';
    public const STEP_NETHER_SPROUTS = 'step.nether_sprouts';
    public const STEP_NETHER_WART = 'step.nether_wart';
    public const STEP_NETHER_WOOD = 'step.nether_wood';
    public const STEP_NETHER_WOOD_HANGING_SIGN = 'step.nether_wood_hanging_sign';
    public const STEP_NETHERITE = 'step.netherite';
    public const STEP_NETHERRACK = 'step.netherrack';
    public const STEP_NYLIUM = 'step.nylium';
    public const STEP_PINK_PETALS = 'step.pink_petals';
    public const STEP_POINTED_DRIPSTONE = 'step.pointed_dripstone';
    public const STEP_POWDER_SNOW = 'step.powder_snow';
    public const STEP_ROOTS = 'step.roots';
    public const STEP_SAND = 'step.sand';
    public const STEP_SCULK_SENSOR = 'step.sculk_sensor';
    public const STEP_SHROOMLIGHT = 'step.shroomlight';
    public const STEP_SLIME = 'step.slime';
    public const STEP_SNOW = 'step.snow';
    public const STEP_SOUL_SAND = 'step.soul_sand';
    public const STEP_SOUL_SOIL = 'step.soul_soil';
    public const STEP_SPONGE = 'step.sponge';
    public const STEP_SPORE_BLOSSOM = 'step.spore_blossom';
    public const STEP_STEM = 'step.stem';
    public const STEP_STONE = 'step.stone';
    public const STEP_SUSPICIOUS_GRAVEL = 'step.suspicious_gravel';
    public const STEP_SUSPICIOUS_SAND = 'step.suspicious_sand';
    public const STEP_TUFF = 'step.tuff';
    public const STEP_VINES = 'step.vines';
    public const STEP_WET_SPONGE = 'step.wet_sponge';
    public const STEP_WOOD = 'step.wood';
    public const VR_STUTTERTURN = 'vr.stutterturn';
    public const STUTTERTURN = 'vr.stutterturn';
    public const WIND_CHARGE_BURST = 'wind_charge.burst';

    /** [player] ambient.underwater.enter */
    public static function AMBIENT_UNDERWATER_ENTER() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ambient.underwater.enter')); }
    /** [player] ambient.underwater.enter @see self::AMBIENT_UNDERWATER_ENTER() */
    public static function UNDERWATER_ENTER() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ambient.underwater.enter')); }
    /** [player] ambient.underwater.exit */
    public static function AMBIENT_UNDERWATER_EXIT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ambient.underwater.exit')); }
    /** [player] ambient.underwater.exit @see self::AMBIENT_UNDERWATER_EXIT() */
    public static function UNDERWATER_EXIT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('ambient.underwater.exit')); }
    /** [player] apply_effect.bad_omen */
    public static function APPLY_EFFECT_BAD_OMEN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('apply_effect.bad_omen')); }
    /** [player] apply_effect.bad_omen @see self::APPLY_EFFECT_BAD_OMEN() */
    public static function BAD_OMEN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('apply_effect.bad_omen')); }
    /** [player] apply_effect.raid_omen */
    public static function APPLY_EFFECT_RAID_OMEN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('apply_effect.raid_omen')); }
    /** [player] apply_effect.raid_omen @see self::APPLY_EFFECT_RAID_OMEN() */
    public static function RAID_OMEN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('apply_effect.raid_omen')); }
    /** [player] apply_effect.trial_omen */
    public static function APPLY_EFFECT_TRIAL_OMEN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('apply_effect.trial_omen')); }
    /** [player] apply_effect.trial_omen @see self::APPLY_EFFECT_TRIAL_OMEN() */
    public static function TRIAL_OMEN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('apply_effect.trial_omen')); }
    /** [player] armor.equip_chain */
    public static function ARMOR_EQUIP_CHAIN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('armor.equip_chain')); }
    /** [player] armor.equip_chain @see self::ARMOR_EQUIP_CHAIN() */
    public static function EQUIP_CHAIN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('armor.equip_chain')); }
    /** [player] armor.equip_diamond */
    public static function ARMOR_EQUIP_DIAMOND() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('armor.equip_diamond')); }
    /** [player] armor.equip_diamond @see self::ARMOR_EQUIP_DIAMOND() */
    public static function EQUIP_DIAMOND() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('armor.equip_diamond')); }
    /** [player] armor.equip_generic */
    public static function ARMOR_EQUIP_GENERIC() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('armor.equip_generic')); }
    /** [player] armor.equip_generic @see self::ARMOR_EQUIP_GENERIC() */
    public static function EQUIP_GENERIC() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('armor.equip_generic')); }
    /** [player] armor.equip_gold */
    public static function ARMOR_EQUIP_GOLD() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('armor.equip_gold')); }
    /** [player] armor.equip_gold @see self::ARMOR_EQUIP_GOLD() */
    public static function EQUIP_GOLD() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('armor.equip_gold')); }
    /** [player] armor.equip_iron */
    public static function ARMOR_EQUIP_IRON() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('armor.equip_iron')); }
    /** [player] armor.equip_iron @see self::ARMOR_EQUIP_IRON() */
    public static function EQUIP_IRON() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('armor.equip_iron')); }
    /** [player] armor.equip_leather */
    public static function ARMOR_EQUIP_LEATHER() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('armor.equip_leather')); }
    /** [player] armor.equip_leather @see self::ARMOR_EQUIP_LEATHER() */
    public static function EQUIP_LEATHER() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('armor.equip_leather')); }
    /** [player] armor.equip_netherite */
    public static function ARMOR_EQUIP_NETHERITE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('armor.equip_netherite')); }
    /** [player] armor.equip_netherite @see self::ARMOR_EQUIP_NETHERITE() */
    public static function EQUIP_NETHERITE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('armor.equip_netherite')); }
    /** [player] block.creaking_heart.fall */
    public static function BLOCK_CREAKING_HEART_FALL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.creaking_heart.fall')); }
    /** [player] block.creaking_heart.fall @see self::BLOCK_CREAKING_HEART_FALL() */
    public static function CREAKING_HEART_FALL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.creaking_heart.fall')); }
    /** [player] block.creaking_heart.step */
    public static function BLOCK_CREAKING_HEART_STEP() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.creaking_heart.step')); }
    /** [player] block.creaking_heart.step @see self::BLOCK_CREAKING_HEART_STEP() */
    public static function CREAKING_HEART_STEP() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.creaking_heart.step')); }
    /** [player] block.dried_ghast.fall */
    public static function BLOCK_DRIED_GHAST_FALL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.dried_ghast.fall')); }
    /** [player] block.dried_ghast.fall @see self::BLOCK_DRIED_GHAST_FALL() */
    public static function DRIED_GHAST_FALL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.dried_ghast.fall')); }
    /** [player] block.dried_ghast.step */
    public static function BLOCK_DRIED_GHAST_STEP() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.dried_ghast.step')); }
    /** [player] block.dried_ghast.step @see self::BLOCK_DRIED_GHAST_STEP() */
    public static function DRIED_GHAST_STEP() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.dried_ghast.step')); }
    /** [player] block.leaf_litter.step */
    public static function BLOCK_LEAF_LITTER_STEP() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.leaf_litter.step')); }
    /** [player] block.leaf_litter.step @see self::BLOCK_LEAF_LITTER_STEP() */
    public static function LEAF_LITTER_STEP() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.leaf_litter.step')); }
    /** [player] block.resin.fall */
    public static function BLOCK_RESIN_FALL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.resin.fall')); }
    /** [player] block.resin.fall @see self::BLOCK_RESIN_FALL() */
    public static function RESIN_FALL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.resin.fall')); }
    /** [player] block.resin.step */
    public static function BLOCK_RESIN_STEP() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.resin.step')); }
    /** [player] block.resin.step @see self::BLOCK_RESIN_STEP() */
    public static function RESIN_STEP() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.resin.step')); }
    /** [player] block.resin_brick.fall */
    public static function BLOCK_RESIN_BRICK_FALL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.resin_brick.fall')); }
    /** [player] block.resin_brick.fall @see self::BLOCK_RESIN_BRICK_FALL() */
    public static function RESIN_BRICK_FALL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.resin_brick.fall')); }
    /** [player] block.resin_brick.step */
    public static function BLOCK_RESIN_BRICK_STEP() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.resin_brick.step')); }
    /** [player] block.resin_brick.step @see self::BLOCK_RESIN_BRICK_STEP() */
    public static function RESIN_BRICK_STEP() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.resin_brick.step')); }
    /** [player] block.weeping_vines.fall */
    public static function BLOCK_WEEPING_VINES_FALL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.weeping_vines.fall')); }
    /** [player] block.weeping_vines.fall @see self::BLOCK_WEEPING_VINES_FALL() */
    public static function WEEPING_VINES_FALL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.weeping_vines.fall')); }
    /** [player] block.weeping_vines.jump */
    public static function BLOCK_WEEPING_VINES_JUMP() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.weeping_vines.jump')); }
    /** [player] block.weeping_vines.jump @see self::BLOCK_WEEPING_VINES_JUMP() */
    public static function WEEPING_VINES_JUMP() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.weeping_vines.jump')); }
    /** [player] block.weeping_vines.land */
    public static function BLOCK_WEEPING_VINES_LAND() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.weeping_vines.land')); }
    /** [player] block.weeping_vines.land @see self::BLOCK_WEEPING_VINES_LAND() */
    public static function WEEPING_VINES_LAND() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.weeping_vines.land')); }
    /** [player] block.weeping_vines.step */
    public static function BLOCK_WEEPING_VINES_STEP() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.weeping_vines.step')); }
    /** [player] block.weeping_vines.step @see self::BLOCK_WEEPING_VINES_STEP() */
    public static function WEEPING_VINES_STEP() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('block.weeping_vines.step')); }
    /** [player] brush.generic */
    public static function BRUSH_GENERIC() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('brush.generic')); }
    /** [player] brush.generic @see self::BRUSH_GENERIC() */
    public static function GENERIC() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('brush.generic')); }
    /** [player] brush.suspicious_gravel */
    public static function BRUSH_SUSPICIOUS_GRAVEL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('brush.suspicious_gravel')); }
    /** [player] brush.suspicious_sand */
    public static function BRUSH_SUSPICIOUS_SAND() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('brush.suspicious_sand')); }
    /** [player] brush_completed.suspicious_gravel */
    public static function BRUSH_COMPLETED_SUSPICIOUS_GRAVEL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('brush_completed.suspicious_gravel')); }
    /** [player] brush_completed.suspicious_sand */
    public static function BRUSH_COMPLETED_SUSPICIOUS_SAND() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('brush_completed.suspicious_sand')); }
    /** [player] bucket.fill_powder_snow */
    public static function BUCKET_FILL_POWDER_SNOW() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('bucket.fill_powder_snow')); }
    /** [player] bucket.fill_powder_snow @see self::BUCKET_FILL_POWDER_SNOW() */
    public static function FILL_POWDER_SNOW() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('bucket.fill_powder_snow')); }
    /** [player] bundle.drop_contents */
    public static function BUNDLE_DROP_CONTENTS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('bundle.drop_contents')); }
    /** [player] bundle.drop_contents @see self::BUNDLE_DROP_CONTENTS() */
    public static function DROP_CONTENTS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('bundle.drop_contents')); }
    /** [player] bundle.insert */
    public static function BUNDLE_INSERT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('bundle.insert')); }
    /** [player] bundle.insert @see self::BUNDLE_INSERT() */
    public static function INSERT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('bundle.insert')); }
    /** [player] bundle.insert_fail */
    public static function BUNDLE_INSERT_FAIL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('bundle.insert_fail')); }
    /** [player] bundle.insert_fail @see self::BUNDLE_INSERT_FAIL() */
    public static function INSERT_FAIL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('bundle.insert_fail')); }
    /** [player] bundle.remove_one */
    public static function BUNDLE_REMOVE_ONE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('bundle.remove_one')); }
    /** [player] bundle.remove_one @see self::BUNDLE_REMOVE_ONE() */
    public static function REMOVE_ONE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('bundle.remove_one')); }
    /** [player] camera.take_picture */
    public static function CAMERA_TAKE_PICTURE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('camera.take_picture')); }
    /** [player] camera.take_picture @see self::CAMERA_TAKE_PICTURE() */
    public static function TAKE_PICTURE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('camera.take_picture')); }
    /** [player] crossbow.loading.end */
    public static function CROSSBOW_LOADING_END() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('crossbow.loading.end')); }
    /** [player] crossbow.loading.end @see self::CROSSBOW_LOADING_END() */
    public static function LOADING_END() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('crossbow.loading.end')); }
    /** [player] crossbow.loading.middle */
    public static function CROSSBOW_LOADING_MIDDLE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('crossbow.loading.middle')); }
    /** [player] crossbow.loading.middle @see self::CROSSBOW_LOADING_MIDDLE() */
    public static function LOADING_MIDDLE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('crossbow.loading.middle')); }
    /** [player] crossbow.loading.start */
    public static function CROSSBOW_LOADING_START() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('crossbow.loading.start')); }
    /** [player] crossbow.loading.start @see self::CROSSBOW_LOADING_START() */
    public static function LOADING_START() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('crossbow.loading.start')); }
    /** [player] crossbow.quick_charge.end */
    public static function CROSSBOW_QUICK_CHARGE_END() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('crossbow.quick_charge.end')); }
    /** [player] crossbow.quick_charge.end @see self::CROSSBOW_QUICK_CHARGE_END() */
    public static function QUICK_CHARGE_END() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('crossbow.quick_charge.end')); }
    /** [player] crossbow.quick_charge.middle */
    public static function CROSSBOW_QUICK_CHARGE_MIDDLE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('crossbow.quick_charge.middle')); }
    /** [player] crossbow.quick_charge.middle @see self::CROSSBOW_QUICK_CHARGE_MIDDLE() */
    public static function QUICK_CHARGE_MIDDLE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('crossbow.quick_charge.middle')); }
    /** [player] crossbow.quick_charge.start */
    public static function CROSSBOW_QUICK_CHARGE_START() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('crossbow.quick_charge.start')); }
    /** [player] crossbow.quick_charge.start @see self::CROSSBOW_QUICK_CHARGE_START() */
    public static function QUICK_CHARGE_START() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('crossbow.quick_charge.start')); }
    /** [player] crossbow.shoot */
    public static function CROSSBOW_SHOOT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('crossbow.shoot')); }
    /** [player] crossbow.shoot @see self::CROSSBOW_SHOOT() */
    public static function SHOOT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('crossbow.shoot')); }
    /** [player] damage.fallbig */
    public static function DAMAGE_FALLBIG() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('damage.fallbig')); }
    /** [player] damage.fallbig @see self::DAMAGE_FALLBIG() */
    public static function FALLBIG() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('damage.fallbig')); }
    /** [player] damage.fallsmall */
    public static function DAMAGE_FALLSMALL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('damage.fallsmall')); }
    /** [player] damage.fallsmall @see self::DAMAGE_FALLSMALL() */
    public static function FALLSMALL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('damage.fallsmall')); }
    /** [player] damage.thorns */
    public static function DAMAGE_THORNS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('damage.thorns')); }
    /** [player] damage.thorns @see self::DAMAGE_THORNS() */
    public static function THORNS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('damage.thorns')); }
    /** [player] elytra.loop */
    public static function ELYTRA_LOOP() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('elytra.loop')); }
    /** [player] elytra.loop @see self::ELYTRA_LOOP() */
    public static function LOOP() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('elytra.loop')); }
    /** [player] fall.amethyst_block */
    public static function FALL_AMETHYST_BLOCK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('fall.amethyst_block')); }
    /** [player] fall.amethyst_cluster */
    public static function FALL_AMETHYST_CLUSTER() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('fall.amethyst_cluster')); }
    /** [player] fall.ancient_debris */
    public static function FALL_ANCIENT_DEBRIS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('fall.ancient_debris')); }
    /** [player] fall.azalea */
    public static function FALL_AZALEA() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('fall.azalea')); }
    /** [player] fall.azalea_leaves */
    public static function FALL_AZALEA_LEAVES() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('fall.azalea_leaves')); }
    /** [player] fall.bamboo_wood */
    public static function FALL_BAMBOO_WOOD() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('fall.bamboo_wood')); }
    /** [player] fall.basalt */
    public static function FALL_BASALT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('fall.basalt')); }
    /** [player] fall.big_dripleaf */
    public static function FALL_BIG_DRIPLEAF() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('fall.big_dripleaf')); }
    /** [player] fall.bone_block */
    public static function FALL_BONE_BLOCK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('fall.bone_block')); }
    /** [player] fall.calcite */
    public static function FALL_CALCITE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('fall.calcite')); }
    /** [player] fall.cave_vines */
    public static function FALL_CAVE_VINES() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('fall.cave_vines')); }
    /** [player] fall.chain */
    public static function FALL_CHAIN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('fall.chain')); }
    /** [player] fall.cherry_leaves */
    public static function FALL_CHERRY_LEAVES() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('fall.cherry_leaves')); }
    /** [player] fall.cherry_wood */
    public static function FALL_CHERRY_WOOD() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('fall.cherry_wood')); }
    /** [player] fall.cloth */
    public static function FALL_CLOTH() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('fall.cloth')); }
    /** [player] fall.copper */
    public static function FALL_COPPER() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('fall.copper')); }
    /** [player] fall.coral */
    public static function FALL_CORAL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('fall.coral')); }
    /** [player] fall.deepslate */
    public static function FALL_DEEPSLATE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('fall.deepslate')); }
    /** [player] fall.deepslate_bricks */
    public static function FALL_DEEPSLATE_BRICKS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('fall.deepslate_bricks')); }
    /** [player] fall.dirt_with_roots */
    public static function FALL_DIRT_WITH_ROOTS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('fall.dirt_with_roots')); }
    /** [player] fall.dripstone_block */
    public static function FALL_DRIPSTONE_BLOCK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('fall.dripstone_block')); }
    /** [player] fall.egg */
    public static function FALL_EGG() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('fall.egg')); }
    /** [player] fall.egg @see self::FALL_EGG() */
    public static function EGG() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('fall.egg')); }
    /** [player] fall.grass */
    public static function FALL_GRASS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('fall.grass')); }
    /** [player] fall.gravel */
    public static function FALL_GRAVEL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('fall.gravel')); }
    /** [player] fall.hanging_roots */
    public static function FALL_HANGING_ROOTS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('fall.hanging_roots')); }
    /** [player] fall.honey_block */
    public static function FALL_HONEY_BLOCK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('fall.honey_block')); }
    /** [player] fall.ladder */
    public static function FALL_LADDER() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('fall.ladder')); }
    /** [player] fall.ladder @see self::FALL_LADDER() */
    public static function LADDER() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('fall.ladder')); }
    /** [player] fall.moss */
    public static function FALL_MOSS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('fall.moss')); }
    /** [player] fall.nether_brick */
    public static function FALL_NETHER_BRICK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('fall.nether_brick')); }
    /** [player] fall.nether_gold_ore */
    public static function FALL_NETHER_GOLD_ORE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('fall.nether_gold_ore')); }
    /** [player] fall.nether_sprouts */
    public static function FALL_NETHER_SPROUTS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('fall.nether_sprouts')); }
    /** [player] fall.nether_wart */
    public static function FALL_NETHER_WART() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('fall.nether_wart')); }
    /** [player] fall.nether_wood */
    public static function FALL_NETHER_WOOD() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('fall.nether_wood')); }
    /** [player] fall.netherite */
    public static function FALL_NETHERITE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('fall.netherite')); }
    /** [player] fall.netherrack */
    public static function FALL_NETHERRACK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('fall.netherrack')); }
    /** [player] fall.nylium */
    public static function FALL_NYLIUM() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('fall.nylium')); }
    /** [player] fall.pink_petals */
    public static function FALL_PINK_PETALS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('fall.pink_petals')); }
    /** [player] fall.pointed_dripstone */
    public static function FALL_POINTED_DRIPSTONE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('fall.pointed_dripstone')); }
    /** [player] fall.powder_snow */
    public static function FALL_POWDER_SNOW() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('fall.powder_snow')); }
    /** [player] fall.roots */
    public static function FALL_ROOTS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('fall.roots')); }
    /** [player] fall.sand */
    public static function FALL_SAND() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('fall.sand')); }
    /** [player] fall.sculk_sensor */
    public static function FALL_SCULK_SENSOR() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('fall.sculk_sensor')); }
    /** [player] fall.shroomlight */
    public static function FALL_SHROOMLIGHT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('fall.shroomlight')); }
    /** [player] fall.slime */
    public static function FALL_SLIME() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('fall.slime')); }
    /** [player] fall.slime @see self::FALL_SLIME() */
    public static function SLIME() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('fall.slime')); }
    /** [player] fall.snow */
    public static function FALL_SNOW() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('fall.snow')); }
    /** [player] fall.soul_sand */
    public static function FALL_SOUL_SAND() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('fall.soul_sand')); }
    /** [player] fall.soul_soil */
    public static function FALL_SOUL_SOIL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('fall.soul_soil')); }
    /** [player] fall.spore_blossom */
    public static function FALL_SPORE_BLOSSOM() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('fall.spore_blossom')); }
    /** [player] fall.stem */
    public static function FALL_STEM() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('fall.stem')); }
    /** [player] fall.stone */
    public static function FALL_STONE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('fall.stone')); }
    /** [player] fall.tuff */
    public static function FALL_TUFF() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('fall.tuff')); }
    /** [player] fall.vines */
    public static function FALL_VINES() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('fall.vines')); }
    /** [player] fall.wood */
    public static function FALL_WOOD() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('fall.wood')); }
    /** [player] game.player.attack.nodamage */
    public static function GAME_PLAYER_ATTACK_NODAMAGE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('game.player.attack.nodamage')); }
    /** [player] game.player.attack.nodamage @see self::GAME_PLAYER_ATTACK_NODAMAGE() */
    public static function PLAYER_ATTACK_NODAMAGE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('game.player.attack.nodamage')); }
    /** [player] game.player.attack.strong */
    public static function GAME_PLAYER_ATTACK_STRONG() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('game.player.attack.strong')); }
    /** [player] game.player.attack.strong @see self::GAME_PLAYER_ATTACK_STRONG() */
    public static function PLAYER_ATTACK_STRONG() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('game.player.attack.strong')); }
    /** [player] game.player.die */
    public static function GAME_PLAYER_DIE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('game.player.die')); }
    /** [player] game.player.die @see self::GAME_PLAYER_DIE() */
    public static function PLAYER_DIE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('game.player.die')); }
    /** [player] game.player.hurt */
    public static function GAME_PLAYER_HURT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('game.player.hurt')); }
    /** [player] game.player.hurt @see self::GAME_PLAYER_HURT() */
    public static function PLAYER_HURT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('game.player.hurt')); }
    /** [player] item.enchant.lunge1 */
    public static function ITEM_ENCHANT_LUNGE1() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('item.enchant.lunge1')); }
    /** [player] item.enchant.lunge1 @see self::ITEM_ENCHANT_LUNGE1() */
    public static function ENCHANT_LUNGE1() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('item.enchant.lunge1')); }
    /** [player] item.enchant.lunge2 */
    public static function ITEM_ENCHANT_LUNGE2() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('item.enchant.lunge2')); }
    /** [player] item.enchant.lunge2 @see self::ITEM_ENCHANT_LUNGE2() */
    public static function ENCHANT_LUNGE2() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('item.enchant.lunge2')); }
    /** [player] item.enchant.lunge3 */
    public static function ITEM_ENCHANT_LUNGE3() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('item.enchant.lunge3')); }
    /** [player] item.enchant.lunge3 @see self::ITEM_ENCHANT_LUNGE3() */
    public static function ENCHANT_LUNGE3() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('item.enchant.lunge3')); }
    /** [player] item.shield.block */
    public static function ITEM_SHIELD_BLOCK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('item.shield.block')); }
    /** [player] item.shield.block @see self::ITEM_SHIELD_BLOCK() */
    public static function SHIELD_BLOCK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('item.shield.block')); }
    /** [player] item.spear.attack_hit */
    public static function ITEM_SPEAR_ATTACK_HIT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('item.spear.attack_hit')); }
    /** [player] item.spear.attack_hit @see self::ITEM_SPEAR_ATTACK_HIT() */
    public static function SPEAR_ATTACK_HIT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('item.spear.attack_hit')); }
    /** [player] item.spear.attack_miss */
    public static function ITEM_SPEAR_ATTACK_MISS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('item.spear.attack_miss')); }
    /** [player] item.spear.attack_miss @see self::ITEM_SPEAR_ATTACK_MISS() */
    public static function SPEAR_ATTACK_MISS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('item.spear.attack_miss')); }
    /** [player] item.spear.hit */
    public static function ITEM_SPEAR_HIT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('item.spear.hit')); }
    /** [player] item.spear.hit @see self::ITEM_SPEAR_HIT() */
    public static function SPEAR_HIT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('item.spear.hit')); }
    /** [player] item.spear.use */
    public static function ITEM_SPEAR_USE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('item.spear.use')); }
    /** [player] item.spear.use @see self::ITEM_SPEAR_USE() */
    public static function SPEAR_USE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('item.spear.use')); }
    /** [player] item.spyglass.stop_using */
    public static function ITEM_SPYGLASS_STOP_USING() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('item.spyglass.stop_using')); }
    /** [player] item.spyglass.stop_using @see self::ITEM_SPYGLASS_STOP_USING() */
    public static function SPYGLASS_STOP_USING() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('item.spyglass.stop_using')); }
    /** [player] item.spyglass.use */
    public static function ITEM_SPYGLASS_USE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('item.spyglass.use')); }
    /** [player] item.spyglass.use @see self::ITEM_SPYGLASS_USE() */
    public static function SPYGLASS_USE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('item.spyglass.use')); }
    /** [player] item.trident.hit */
    public static function ITEM_TRIDENT_HIT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('item.trident.hit')); }
    /** [player] item.trident.hit @see self::ITEM_TRIDENT_HIT() */
    public static function TRIDENT_HIT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('item.trident.hit')); }
    /** [player] item.trident.hit_ground */
    public static function ITEM_TRIDENT_HIT_GROUND() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('item.trident.hit_ground')); }
    /** [player] item.trident.hit_ground @see self::ITEM_TRIDENT_HIT_GROUND() */
    public static function TRIDENT_HIT_GROUND() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('item.trident.hit_ground')); }
    /** [player] item.trident.return */
    public static function ITEM_TRIDENT_RETURN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('item.trident.return')); }
    /** [player] item.trident.return @see self::ITEM_TRIDENT_RETURN() */
    public static function TRIDENT_RETURN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('item.trident.return')); }
    /** [player] item.trident.riptide_1 */
    public static function ITEM_TRIDENT_RIPTIDE_1() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('item.trident.riptide_1')); }
    /** [player] item.trident.riptide_1 @see self::ITEM_TRIDENT_RIPTIDE_1() */
    public static function TRIDENT_RIPTIDE_1() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('item.trident.riptide_1')); }
    /** [player] item.trident.riptide_2 */
    public static function ITEM_TRIDENT_RIPTIDE_2() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('item.trident.riptide_2')); }
    /** [player] item.trident.riptide_2 @see self::ITEM_TRIDENT_RIPTIDE_2() */
    public static function TRIDENT_RIPTIDE_2() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('item.trident.riptide_2')); }
    /** [player] item.trident.riptide_3 */
    public static function ITEM_TRIDENT_RIPTIDE_3() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('item.trident.riptide_3')); }
    /** [player] item.trident.riptide_3 @see self::ITEM_TRIDENT_RIPTIDE_3() */
    public static function TRIDENT_RIPTIDE_3() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('item.trident.riptide_3')); }
    /** [player] item.trident.throw */
    public static function ITEM_TRIDENT_THROW() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('item.trident.throw')); }
    /** [player] item.trident.throw @see self::ITEM_TRIDENT_THROW() */
    public static function TRIDENT_THROW() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('item.trident.throw')); }
    /** [player] item.trident.thunder */
    public static function ITEM_TRIDENT_THUNDER() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('item.trident.thunder')); }
    /** [player] item.trident.thunder @see self::ITEM_TRIDENT_THUNDER() */
    public static function TRIDENT_THUNDER() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('item.trident.thunder')); }
    /** [player] item.wooden_spear.attack_hit */
    public static function ITEM_WOODEN_SPEAR_ATTACK_HIT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('item.wooden_spear.attack_hit')); }
    /** [player] item.wooden_spear.attack_hit @see self::ITEM_WOODEN_SPEAR_ATTACK_HIT() */
    public static function WOODEN_SPEAR_ATTACK_HIT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('item.wooden_spear.attack_hit')); }
    /** [player] item.wooden_spear.attack_miss */
    public static function ITEM_WOODEN_SPEAR_ATTACK_MISS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('item.wooden_spear.attack_miss')); }
    /** [player] item.wooden_spear.attack_miss @see self::ITEM_WOODEN_SPEAR_ATTACK_MISS() */
    public static function WOODEN_SPEAR_ATTACK_MISS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('item.wooden_spear.attack_miss')); }
    /** [player] item.wooden_spear.hit */
    public static function ITEM_WOODEN_SPEAR_HIT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('item.wooden_spear.hit')); }
    /** [player] item.wooden_spear.hit @see self::ITEM_WOODEN_SPEAR_HIT() */
    public static function WOODEN_SPEAR_HIT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('item.wooden_spear.hit')); }
    /** [player] item.wooden_spear.use */
    public static function ITEM_WOODEN_SPEAR_USE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('item.wooden_spear.use')); }
    /** [player] item.wooden_spear.use @see self::ITEM_WOODEN_SPEAR_USE() */
    public static function WOODEN_SPEAR_USE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('item.wooden_spear.use')); }
    /** [player] jump.azalea */
    public static function JUMP_AZALEA() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('jump.azalea')); }
    /** [player] jump.big_dripleaf */
    public static function JUMP_BIG_DRIPLEAF() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('jump.big_dripleaf')); }
    /** [player] jump.cave_vines */
    public static function JUMP_CAVE_VINES() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('jump.cave_vines')); }
    /** [player] jump.deepslate */
    public static function JUMP_DEEPSLATE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('jump.deepslate')); }
    /** [player] jump.deepslate_bricks */
    public static function JUMP_DEEPSLATE_BRICKS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('jump.deepslate_bricks')); }
    /** [player] jump.dirt_with_roots */
    public static function JUMP_DIRT_WITH_ROOTS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('jump.dirt_with_roots')); }
    /** [player] jump.dripstone_block */
    public static function JUMP_DRIPSTONE_BLOCK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('jump.dripstone_block')); }
    /** [player] jump.hanging_roots */
    public static function JUMP_HANGING_ROOTS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('jump.hanging_roots')); }
    /** [player] jump.moss */
    public static function JUMP_MOSS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('jump.moss')); }
    /** [player] jump.pointed_dripstone */
    public static function JUMP_POINTED_DRIPSTONE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('jump.pointed_dripstone')); }
    /** [player] jump.sculk_sensor */
    public static function JUMP_SCULK_SENSOR() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('jump.sculk_sensor')); }
    /** [player] jump.spore_blossom */
    public static function JUMP_SPORE_BLOSSOM() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('jump.spore_blossom')); }
    /** [player] land.azalea */
    public static function LAND_AZALEA() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('land.azalea')); }
    /** [player] land.big_dripleaf */
    public static function LAND_BIG_DRIPLEAF() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('land.big_dripleaf')); }
    /** [player] land.cave_vines */
    public static function LAND_CAVE_VINES() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('land.cave_vines')); }
    /** [player] land.deepslate */
    public static function LAND_DEEPSLATE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('land.deepslate')); }
    /** [player] land.deepslate_bricks */
    public static function LAND_DEEPSLATE_BRICKS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('land.deepslate_bricks')); }
    /** [player] land.dirt_with_roots */
    public static function LAND_DIRT_WITH_ROOTS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('land.dirt_with_roots')); }
    /** [player] land.dripstone_block */
    public static function LAND_DRIPSTONE_BLOCK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('land.dripstone_block')); }
    /** [player] land.hanging_roots */
    public static function LAND_HANGING_ROOTS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('land.hanging_roots')); }
    /** [player] land.moss */
    public static function LAND_MOSS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('land.moss')); }
    /** [player] land.pointed_dripstone */
    public static function LAND_POINTED_DRIPSTONE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('land.pointed_dripstone')); }
    /** [player] land.sculk_sensor */
    public static function LAND_SCULK_SENSOR() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('land.sculk_sensor')); }
    /** [player] land.spore_blossom */
    public static function LAND_SPORE_BLOSSOM() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('land.spore_blossom')); }
    /** [player] mace.heavy_smash_ground */
    public static function MACE_HEAVY_SMASH_GROUND() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('mace.heavy_smash_ground')); }
    /** [player] mace.heavy_smash_ground @see self::MACE_HEAVY_SMASH_GROUND() */
    public static function HEAVY_SMASH_GROUND() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('mace.heavy_smash_ground')); }
    /** [player] mace.smash_air */
    public static function MACE_SMASH_AIR() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('mace.smash_air')); }
    /** [player] mace.smash_air @see self::MACE_SMASH_AIR() */
    public static function SMASH_AIR() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('mace.smash_air')); }
    /** [player] mace.smash_ground */
    public static function MACE_SMASH_GROUND() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('mace.smash_ground')); }
    /** [player] mace.smash_ground @see self::MACE_SMASH_GROUND() */
    public static function SMASH_GROUND() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('mace.smash_ground')); }
    /** [player] mob.player.hurt_drown */
    public static function MOB_PLAYER_HURT_DROWN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('mob.player.hurt_drown')); }
    /** [player] mob.player.hurt_drown @see self::MOB_PLAYER_HURT_DROWN() */
    public static function PLAYER_HURT_DROWN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('mob.player.hurt_drown')); }
    /** [player] mob.player.hurt_freeze */
    public static function MOB_PLAYER_HURT_FREEZE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('mob.player.hurt_freeze')); }
    /** [player] mob.player.hurt_freeze @see self::MOB_PLAYER_HURT_FREEZE() */
    public static function PLAYER_HURT_FREEZE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('mob.player.hurt_freeze')); }
    /** [player] mob.player.hurt_on_fire */
    public static function MOB_PLAYER_HURT_ON_FIRE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('mob.player.hurt_on_fire')); }
    /** [player] mob.player.hurt_on_fire @see self::MOB_PLAYER_HURT_ON_FIRE() */
    public static function PLAYER_HURT_ON_FIRE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('mob.player.hurt_on_fire')); }
    /** [player] mob.sheep.shear */
    public static function MOB_SHEEP_SHEAR() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('mob.sheep.shear')); }
    /** [player] mob.sheep.shear @see self::MOB_SHEEP_SHEAR() */
    public static function SHEEP_SHEAR() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('mob.sheep.shear')); }
    /** [player] particle.soul_escape */
    public static function PARTICLE_SOUL_ESCAPE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('particle.soul_escape')); }
    /** [player] particle.soul_escape @see self::PARTICLE_SOUL_ESCAPE() */
    public static function SOUL_ESCAPE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('particle.soul_escape')); }
    /** [player] random.bow */
    public static function RANDOM_BOW() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('random.bow')); }
    /** [player] random.bow @see self::RANDOM_BOW() */
    public static function BOW() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('random.bow')); }
    /** [player] random.bowhit */
    public static function RANDOM_BOWHIT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('random.bowhit')); }
    /** [player] random.break */
    public static function RANDOM_BREAK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('random.break')); }
    /** [player] random.burp */
    public static function RANDOM_BURP() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('random.burp')); }
    /** [player] random.burp @see self::RANDOM_BURP() */
    public static function BURP() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('random.burp')); }
    /** [player] random.drink */
    public static function RANDOM_DRINK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('random.drink')); }
    /** [player] random.drink @see self::RANDOM_DRINK() */
    public static function DRINK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('random.drink')); }
    /** [player] random.drink_honey */
    public static function RANDOM_DRINK_HONEY() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('random.drink_honey')); }
    /** [player] random.drink_honey @see self::RANDOM_DRINK_HONEY() */
    public static function DRINK_HONEY() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('random.drink_honey')); }
    /** [player] random.eat */
    public static function RANDOM_EAT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('random.eat')); }
    /** [player] random.eat @see self::RANDOM_EAT() */
    public static function EAT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('random.eat')); }
    /** [player] random.hurt */
    public static function RANDOM_HURT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('random.hurt')); }
    /** [player] random.hurt @see self::RANDOM_HURT() */
    public static function HURT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('random.hurt')); }
    /** [player] random.levelup */
    public static function RANDOM_LEVELUP() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('random.levelup')); }
    /** [player] random.levelup @see self::RANDOM_LEVELUP() */
    public static function LEVELUP() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('random.levelup')); }
    /** [player] random.orb */
    public static function RANDOM_ORB() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('random.orb')); }
    /** [player] random.orb @see self::RANDOM_ORB() */
    public static function ORB() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('random.orb')); }
    /** [player] random.pop */
    public static function RANDOM_POP() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('random.pop')); }
    /** [player] random.pop2 */
    public static function RANDOM_POP2() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('random.pop2')); }
    /** [player] random.pop2 @see self::RANDOM_POP2() */
    public static function POP2() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('random.pop2')); }
    /** [player] random.splash */
    public static function RANDOM_SPLASH() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('random.splash')); }
    /** [player] random.splash @see self::RANDOM_SPLASH() */
    public static function SPLASH() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('random.splash')); }
    /** [player] random.swim */
    public static function RANDOM_SWIM() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('random.swim')); }
    /** [player] random.swim @see self::RANDOM_SWIM() */
    public static function SWIM() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('random.swim')); }
    /** [player] random.totem */
    public static function RANDOM_TOTEM() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('random.totem')); }
    /** [player] random.totem @see self::RANDOM_TOTEM() */
    public static function TOTEM() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('random.totem')); }
    /** [player] step.amethyst_block */
    public static function STEP_AMETHYST_BLOCK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.amethyst_block')); }
    /** [player] step.amethyst_cluster */
    public static function STEP_AMETHYST_CLUSTER() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.amethyst_cluster')); }
    /** [player] step.ancient_debris */
    public static function STEP_ANCIENT_DEBRIS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.ancient_debris')); }
    /** [player] step.azalea */
    public static function STEP_AZALEA() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.azalea')); }
    /** [player] step.azalea_leaves */
    public static function STEP_AZALEA_LEAVES() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.azalea_leaves')); }
    /** [player] step.bamboo_wood */
    public static function STEP_BAMBOO_WOOD() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.bamboo_wood')); }
    /** [player] step.bamboo_wood_hanging_sign */
    public static function STEP_BAMBOO_WOOD_HANGING_SIGN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.bamboo_wood_hanging_sign')); }
    /** [player] step.basalt */
    public static function STEP_BASALT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.basalt')); }
    /** [player] step.big_dripleaf */
    public static function STEP_BIG_DRIPLEAF() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.big_dripleaf')); }
    /** [player] step.bone_block */
    public static function STEP_BONE_BLOCK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.bone_block')); }
    /** [player] step.calcite */
    public static function STEP_CALCITE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.calcite')); }
    /** [player] step.cave_vines */
    public static function STEP_CAVE_VINES() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.cave_vines')); }
    /** [player] step.chain */
    public static function STEP_CHAIN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.chain')); }
    /** [player] step.cherry_wood */
    public static function STEP_CHERRY_WOOD() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.cherry_wood')); }
    /** [player] step.cherry_wood_hanging_sign */
    public static function STEP_CHERRY_WOOD_HANGING_SIGN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.cherry_wood_hanging_sign')); }
    /** [player] step.chiseled_bookshelf */
    public static function STEP_CHISELED_BOOKSHELF() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.chiseled_bookshelf')); }
    /** [player] step.cloth */
    public static function STEP_CLOTH() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.cloth')); }
    /** [player] step.copper */
    public static function STEP_COPPER() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.copper')); }
    /** [player] step.coral */
    public static function STEP_CORAL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.coral')); }
    /** [player] step.deepslate */
    public static function STEP_DEEPSLATE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.deepslate')); }
    /** [player] step.deepslate_bricks */
    public static function STEP_DEEPSLATE_BRICKS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.deepslate_bricks')); }
    /** [player] step.dirt_with_roots */
    public static function STEP_DIRT_WITH_ROOTS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.dirt_with_roots')); }
    /** [player] step.dripstone_block */
    public static function STEP_DRIPSTONE_BLOCK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.dripstone_block')); }
    /** [player] step.grass */
    public static function STEP_GRASS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.grass')); }
    /** [player] step.gravel */
    public static function STEP_GRAVEL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.gravel')); }
    /** [player] step.hanging_roots */
    public static function STEP_HANGING_ROOTS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.hanging_roots')); }
    /** [player] step.hanging_sign */
    public static function STEP_HANGING_SIGN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.hanging_sign')); }
    /** [player] step.heavy_core */
    public static function STEP_HEAVY_CORE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.heavy_core')); }
    /** [player] step.honey_block */
    public static function STEP_HONEY_BLOCK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.honey_block')); }
    /** [player] step.iron */
    public static function STEP_IRON() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.iron')); }
    /** [player] step.ladder */
    public static function STEP_LADDER() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.ladder')); }
    /** [player] step.moss */
    public static function STEP_MOSS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.moss')); }
    /** [player] step.nether_brick */
    public static function STEP_NETHER_BRICK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.nether_brick')); }
    /** [player] step.nether_gold_ore */
    public static function STEP_NETHER_GOLD_ORE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.nether_gold_ore')); }
    /** [player] step.nether_sprouts */
    public static function STEP_NETHER_SPROUTS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.nether_sprouts')); }
    /** [player] step.nether_wart */
    public static function STEP_NETHER_WART() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.nether_wart')); }
    /** [player] step.nether_wood */
    public static function STEP_NETHER_WOOD() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.nether_wood')); }
    /** [player] step.nether_wood_hanging_sign */
    public static function STEP_NETHER_WOOD_HANGING_SIGN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.nether_wood_hanging_sign')); }
    /** [player] step.netherite */
    public static function STEP_NETHERITE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.netherite')); }
    /** [player] step.netherrack */
    public static function STEP_NETHERRACK() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.netherrack')); }
    /** [player] step.nylium */
    public static function STEP_NYLIUM() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.nylium')); }
    /** [player] step.pink_petals */
    public static function STEP_PINK_PETALS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.pink_petals')); }
    /** [player] step.pointed_dripstone */
    public static function STEP_POINTED_DRIPSTONE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.pointed_dripstone')); }
    /** [player] step.powder_snow */
    public static function STEP_POWDER_SNOW() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.powder_snow')); }
    /** [player] step.roots */
    public static function STEP_ROOTS() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.roots')); }
    /** [player] step.sand */
    public static function STEP_SAND() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.sand')); }
    /** [player] step.sculk_sensor */
    public static function STEP_SCULK_SENSOR() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.sculk_sensor')); }
    /** [player] step.shroomlight */
    public static function STEP_SHROOMLIGHT() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.shroomlight')); }
    /** [player] step.slime */
    public static function STEP_SLIME() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.slime')); }
    /** [player] step.snow */
    public static function STEP_SNOW() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.snow')); }
    /** [player] step.soul_sand */
    public static function STEP_SOUL_SAND() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.soul_sand')); }
    /** [player] step.soul_soil */
    public static function STEP_SOUL_SOIL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.soul_soil')); }
    /** [player] step.sponge */
    public static function STEP_SPONGE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.sponge')); }
    /** [player] step.spore_blossom */
    public static function STEP_SPORE_BLOSSOM() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.spore_blossom')); }
    /** [player] step.stem */
    public static function STEP_STEM() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.stem')); }
    /** [player] step.stone */
    public static function STEP_STONE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.stone')); }
    /** [player] step.suspicious_gravel */
    public static function STEP_SUSPICIOUS_GRAVEL() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.suspicious_gravel')); }
    /** [player] step.suspicious_sand */
    public static function STEP_SUSPICIOUS_SAND() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.suspicious_sand')); }
    /** [player] step.tuff */
    public static function STEP_TUFF() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.tuff')); }
    /** [player] step.vines */
    public static function STEP_VINES() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.vines')); }
    /** [player] step.wet_sponge */
    public static function STEP_WET_SPONGE() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.wet_sponge')); }
    /** [player] step.wood */
    public static function STEP_WOOD() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('step.wood')); }
    /** [player] vr.stutterturn */
    public static function VR_STUTTERTURN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('vr.stutterturn')); }
    /** [player] vr.stutterturn @see self::VR_STUTTERTURN() */
    public static function STUTTERTURN() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('vr.stutterturn')); }
    /** [player] wind_charge.burst */
    public static function WIND_CHARGE_BURST() : PlaySound{ static $cache = null; return clone($cache ??= new PlaySound('wind_charge.burst')); }

}


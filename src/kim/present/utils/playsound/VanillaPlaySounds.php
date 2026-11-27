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

use kim\present\utils\playsound\defaults\VanillaPlaySoundsAmbientTrait;
use kim\present\utils\playsound\defaults\VanillaPlaySoundsBlockTrait;
use kim\present\utils\playsound\defaults\VanillaPlaySoundsBottleTrait;
use kim\present\utils\playsound\defaults\VanillaPlaySoundsHostileTrait;
use kim\present\utils\playsound\defaults\VanillaPlaySoundsMusicTrait;
use kim\present\utils\playsound\defaults\VanillaPlaySoundsNeutralTrait;
use kim\present\utils\playsound\defaults\VanillaPlaySoundsPlayerTrait;
use kim\present\utils\playsound\defaults\VanillaPlaySoundsRecordTrait;
use kim\present\utils\playsound\defaults\VanillaPlaySoundsUiTrait;
use kim\present\utils\playsound\defaults\VanillaPlaySoundsUnknownTrait;
use kim\present\utils\playsound\defaults\VanillaPlaySoundsWeatherTrait;

/**
 * Allows getting a new instance of all vanilla sounds. Last updated for 1.26.60.5.
 *
 * @note  This class is generated automatically from {@link build/VanillaPlaySounds.generator.php}.
 *
 * @usage Category traits are generated under the {@see \kim\present\utils\playsound\defaults} namespace
 *        and follow the naming rule: category "ui" =>
 *        {@see \kim\present\utils\playsound\defaults\VanillaPlaySoundsUiTrait}. Each trait provides both string
 *        constants (for raw sound names) and static methods (for {@see PlaySound} instances). Use constants when you
 *        only need the sound name string, and use methods when you need a {@see PlaySound} object that can be passed
 *        to {@see \pocketmine\world\World::addSound()}.
 *
 * @see   https://github.com/Mojang/bedrock-samples/blob/main/resource_pack/sounds/sound_definitions.json
 */
final readonly class VanillaPlaySounds{

    use VanillaPlaySoundsAmbientTrait;
    use VanillaPlaySoundsBlockTrait;
    use VanillaPlaySoundsBottleTrait;
    use VanillaPlaySoundsHostileTrait;
    use VanillaPlaySoundsMusicTrait;
    use VanillaPlaySoundsNeutralTrait;
    use VanillaPlaySoundsPlayerTrait;
    use VanillaPlaySoundsRecordTrait;
    use VanillaPlaySoundsUiTrait;
    use VanillaPlaySoundsUnknownTrait;
    use VanillaPlaySoundsWeatherTrait;

    private function __construct(){}

}

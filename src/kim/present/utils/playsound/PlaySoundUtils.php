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
 */

declare(strict_types=1);

namespace kim\present\utils\playsound;

use pocketmine\math\Vector3;
use pocketmine\network\mcpe\protocol\PlaySoundPacket;
use pocketmine\player\Player;

final class PlaySoundUtils{

    public static function sendTo(Player $player, string $soundName, float $volume = 1.0, float $pitch = 1.0) : void{
        $player->getNetworkSession()->sendDataPacket(
            self::createPacket($player->getPosition(), $soundName, $volume, $pitch)
        );
    }

    /** @param Player[] $recipients */
    public static function broadcastTo(
        array $recipients, string $soundName, float $volume = 1.0, float $pitch = 1.0
    ) : void{
        foreach($recipients as $recipient){
            self::sendTo($recipient, $soundName, $volume, $pitch);
        }
    }

    public static function createPacket(
        Vector3 $vec, string $soundName, float $volume = 1.0, float $pitch = 1.0
    ) : PlaySoundPacket{
        return PlaySoundPacket::create($soundName, $vec->x, $vec->y, $vec->z, $volume, $pitch);
    }
}

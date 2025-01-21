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
use pocketmine\network\mcpe\NetworkBroadcastUtils;
use pocketmine\network\mcpe\protocol\ClientboundPacket;
use pocketmine\network\mcpe\protocol\PlaySoundPacket;
use pocketmine\player\Player;
use pocketmine\world\sound\Sound;

final class PlaySound implements Sound{

    /**
     * @param string $soundName The name of the sound to play
     * @param float  $volume    The volume of the sound, based on 1.0
     * @param float  $pitch     The pitch of the sound, based on 1.0
     */
    public function __construct(
        private string $soundName,
        private float $volume = 1.0,
        private float $pitch = 1.0
    ){}

    public function getSoundName() : string{
        return $this->soundName;
    }

    public function setSoundName(string $soundName) : self{
        $this->soundName = $soundName;
        return $this;
    }

    public function getVolume() : float{
        return $this->volume;
    }

    public function setVolume(float $volume) : self{
        $this->volume = $volume;
        return $this;
    }

    public function getPitch() : float{
        return $this->pitch;
    }

    public function setPitch(float $pitch) : self{
        $this->pitch = $pitch;
        return $this;
    }

    /** @return ClientboundPacket[] */
    public function encode(Vector3 $pos) : array{
        return [self::createPacket($pos, $this->soundName, $this->volume, $this->pitch)];
    }

    /**
     * @param Player|Player[] $recipients The player to send the sound to
     * @param Vector3|null    $vec        The position to play the sound, or null to play at the player's position
     */
    public function send(Player|array $recipients, ?Vector3 $vec = null) : void{
        /** @var Player[] $recipients */
        $recipients = (array) $recipients;
        if($vec === null){
            foreach($recipients as $recipient){
                foreach($this->encode($recipient->getPosition()) as $packet){
                    $recipient->getNetworkSession()->sendDataPacket($packet);
                }
            }
        }else{
            NetworkBroadcastUtils::broadcastPackets($recipients, $this->encode($vec));
        }
    }

    /**
     * @param Player $player    The player to send the sound to
     * @param string $soundName The name of the sound to play
     * @param float  $volume    The volume of the sound, based on 1.0
     * @param float  $pitch     The pitch of the sound, based on 1.0
     */
    public static function sendTo(Player $player, string $soundName, float $volume = 1.0, float $pitch = 1.0) : void{
        $player->getNetworkSession()->sendDataPacket(
            self::createPacket($player->getPosition(), $soundName, $volume, $pitch)
        );
    }

    /**
     * @param Player[] $recipients The players to send the sound to
     * @param string   $soundName  The name of the sound to play
     * @param float    $volume     The volume of the sound, based on 1.0
     * @param float    $pitch      The pitch of the sound, based on 1.0
     */
    public static function broadcastTo(
        array $recipients,
        string $soundName,
        float $volume = 1.0,
        float $pitch = 1.0
    ) : void{
        foreach($recipients as $recipient){
            self::sendTo($recipient, $soundName, $volume, $pitch);
        }
    }

    /**
     * @param Vector3 $vec       The position to play the sound
     * @param string  $soundName The name of the sound to play
     * @param float   $volume    The volume of the sound, based on 1.0
     * @param float   $pitch     The pitch of the sound, based on 1.0
     */
    public static function createPacket(
        Vector3 $vec, string $soundName, float $volume = 1.0, float $pitch = 1.0
    ) : PlaySoundPacket{
        return PlaySoundPacket::create($soundName, $vec->x, $vec->y, $vec->z, $volume, $pitch);
    }

}

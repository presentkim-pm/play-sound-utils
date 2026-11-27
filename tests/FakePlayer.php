<?php

declare(strict_types=1);

namespace kim\present\utils\playsound\tests;

use pocketmine\network\mcpe\NetworkSession;
use pocketmine\player\Player;
use pocketmine\world\Position;

/**
 * A Player that skips the heavy constructor and destructor, backed by fixed values.
 * Mock objects cannot be used because Player::__destruct() fails on a player that was never constructed.
 */
final class FakePlayer extends Player{

    public function __construct(
        private readonly NetworkSession $fakeSession,
        private readonly Position $fakePosition,
        private readonly bool $fakeConnected = true
    ){}

    public function __destruct(){}

    public function isConnected() : bool{
        return $this->fakeConnected;
    }

    public function getNetworkSession() : NetworkSession{
        return $this->fakeSession;
    }

    public function getPosition() : Position{
        return $this->fakePosition;
    }
}

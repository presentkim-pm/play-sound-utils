<?php

declare(strict_types=1);

namespace kim\present\utils\playsound\tests;

use kim\present\utils\playsound\PlaySound;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use pocketmine\math\Vector3;
use pocketmine\network\mcpe\NetworkSession;
use pocketmine\network\mcpe\PacketBroadcaster;
use pocketmine\network\mcpe\protocol\PlaySoundPacket;
use pocketmine\timings\Timings;
use pocketmine\world\Position;

use function array_map;
use function count;

#[CoversClass(PlaySound::class)]
final class PlaySoundTest extends TestCase{

    public function testDefaults() : void{
        $sound = new PlaySound('random.pop');
        self::assertSame('random.pop', $sound->getSoundName());
        self::assertSame(1.0, $sound->getVolume());
        self::assertSame(1.0, $sound->getPitch());
        self::assertNull($sound->getServerSoundHandle());
        self::assertSame(0, $sound->getLoopCount());
        self::assertFalse($sound->isBypassListenerRangeCheck());
        self::assertNull($sound->getPlaybackPositionSeconds());
    }

    public function testFluentSetters() : void{
        $sound = new PlaySound('a');
        $result = $sound->setSoundName('b')
            ->setVolume(0.5)
            ->setPitch(2.0)
            ->setServerSoundHandle(7)
            ->setLoopCount(3)
            ->setBypassListenerRangeCheck(true)
            ->setPlaybackPositionSeconds(1.5);

        self::assertSame($sound, $result);
        self::assertSame('b', $sound->getSoundName());
        self::assertSame(0.5, $sound->getVolume());
        self::assertSame(2.0, $sound->getPitch());
        self::assertSame(7, $sound->getServerSoundHandle());
        self::assertSame(3, $sound->getLoopCount());
        self::assertTrue($sound->isBypassListenerRangeCheck());
        self::assertSame(1.5, $sound->getPlaybackPositionSeconds());
    }

    public function testCloneIsolation() : void{
        $original = new PlaySound('a', 1.0, 1.0, 1, 1, true, 2.0);
        $copy = clone $original;
        $copy->setSoundName('b')->setVolume(0.1)->setLoopCount(9)->setPlaybackPositionSeconds(null);

        self::assertSame('a', $original->getSoundName());
        self::assertSame(1.0, $original->getVolume());
        self::assertSame(1, $original->getLoopCount());
        self::assertSame(2.0, $original->getPlaybackPositionSeconds());
    }

    public function testCreatePacketLegacyCallSite() : void{
        $packet = PlaySound::createPacket(new Vector3(1.5, 2.5, 3.5), 'random.pop', 0.5, 1.5, 4);

        self::assertSame('random.pop', $packet->soundName);
        self::assertSame(1.5, $packet->x);
        self::assertSame(2.5, $packet->y);
        self::assertSame(3.5, $packet->z);
        self::assertSame(0.5, $packet->volume);
        self::assertSame(1.5, $packet->pitch);
        self::assertSame(4, $packet->serverSoundHandle);
        self::assertSame(0, $packet->loopCount);
        self::assertFalse($packet->bypassListenerRangeCheck);
        self::assertNull($packet->playbackPositionSeconds);
    }

    public function testCreatePacketExtendedFields() : void{
        $packet = PlaySound::createPacket(new Vector3(0, 0, 0), 'x', 1.0, 1.0, null, 2, true, 3.25);

        self::assertNull($packet->serverSoundHandle);
        self::assertSame(2, $packet->loopCount);
        self::assertTrue($packet->bypassListenerRangeCheck);
        self::assertSame(3.25, $packet->playbackPositionSeconds);
    }

    public function testEncodeUsesBuilderValues() : void{
        $sound = new PlaySound('mob.cat.meow', 0.25, 0.75, 5, 1, true, 0.5);
        $packets = $sound->encode(new Vector3(8, 9, 10));

        self::assertCount(1, $packets);
        $packet = $packets[0];
        self::assertInstanceOf(PlaySoundPacket::class, $packet);
        self::assertSame('mob.cat.meow', $packet->soundName);
        self::assertSame(8.0, $packet->x);
        self::assertSame(0.25, $packet->volume);
        self::assertSame(0.75, $packet->pitch);
        self::assertSame(5, $packet->serverSoundHandle);
        self::assertSame(1, $packet->loopCount);
        self::assertTrue($packet->bypassListenerRangeCheck);
        self::assertSame(0.5, $packet->playbackPositionSeconds);
    }

    public function testSendToPlayerAtOwnPosition() : void{
        [$player, $received] = $this->mockPlayer(new Vector3(4, 5, 6));

        (new PlaySound('random.pop', 0.5))->send($player);

        self::assertCount(1, $received);
        self::assertSame(4.0, $received[0]->x);
        self::assertSame(5.0, $received[0]->y);
        self::assertSame(6.0, $received[0]->z);
        self::assertSame(0.5, $received[0]->volume);
    }

    public function testSendSkipsDisconnectedPlayers() : void{
        [$online, $onlineReceived] = $this->mockPlayer(new Vector3(0, 0, 0));
        [$offline, $offlineReceived] = $this->mockPlayer(new Vector3(0, 0, 0), false);

        (new PlaySound('random.pop'))->send([$offline, $online]);

        self::assertCount(1, $onlineReceived);
        self::assertCount(0, $offlineReceived);
    }

    public function testSendAtPositionBroadcastsOnceToConnectedPlayers() : void{
        Timings::init();
        $broadcaster = $this->createMock(PacketBroadcaster::class);
        $broadcaster->expects(self::once())->method('broadcastPackets')->with(
            self::callback(static fn(array $sessions) : bool => count($sessions) === 1),
            self::callback(static fn(array $packets) : bool => count($packets) === 1
                && $packets[0] instanceof PlaySoundPacket
                && $packets[0]->x === 10.0 && $packets[0]->soundName === 'random.pop')
        );

        $session = $this->createStub(NetworkSession::class);
        $session->method('getBroadcaster')->willReturn($broadcaster);
        $online = new FakePlayer($session, new Position(0, 0, 0, null));
        $offline = new FakePlayer($session, new Position(0, 0, 0, null), false);

        (new PlaySound('random.pop'))->send([$online, $offline], new Vector3(10, 20, 30));
    }

    public function testSendWithEmptyRecipientsDoesNothing() : void{
        (new PlaySound('random.pop'))->send([]);
        (new PlaySound('random.pop'))->send([], new Vector3(0, 0, 0));
        $this->expectNotToPerformAssertions();
    }

    public function testStaticSendToAndBroadcastTo() : void{
        [$a, $aReceived] = $this->mockPlayer(new Vector3(1, 2, 3));
        [$b, $bReceived] = $this->mockPlayer(new Vector3(4, 5, 6));
        [$offline, $offlineReceived] = $this->mockPlayer(new Vector3(0, 0, 0), false);

        PlaySound::sendTo($a, 'random.pop', 0.5, 2.0);
        PlaySound::broadcastTo([$a, $b, $offline], 'random.click');

        self::assertSame(['random.pop', 'random.click'], array_map(static fn(PlaySoundPacket $p) => $p->soundName, $aReceived->getArrayCopy()));
        self::assertSame(0.5, $aReceived[0]->volume);
        self::assertSame(2.0, $aReceived[0]->pitch);
        self::assertSame(['random.click'], array_map(static fn(PlaySoundPacket $p) => $p->soundName, $bReceived->getArrayCopy()));
        self::assertSame(4.0, $bReceived[0]->x);
        self::assertCount(0, $offlineReceived);
    }

    /**
     * @return array{Player, \ArrayObject<int, PlaySoundPacket>} The mocked player and the packets it receives
     */
    private function mockPlayer(Vector3 $position, bool $connected = true) : array{
        $received = new \ArrayObject();

        $session = $this->createStub(NetworkSession::class);
        $session->method('sendDataPacket')->willReturnCallback(static function($packet) use ($received) : bool{
            $received[] = $packet;
            return true;
        });

        $player = new FakePlayer($session, new Position($position->x, $position->y, $position->z, null), $connected);

        return [$player, $received];
    }
}

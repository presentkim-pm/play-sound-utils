<?php

declare(strict_types=1);

namespace kim\present\utils\playsound\tests;

use kim\present\utils\playsound\PlaySound;
use kim\present\utils\playsound\VanillaPlaySounds;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use ReflectionClass;
use ReflectionMethod;

use function array_keys;
use function count;
use function is_string;
use function strtolower;

#[CoversClass(VanillaPlaySounds::class)]
final class VanillaPlaySoundsTest extends TestCase{

    public function testConstantsAreNonEmptyStrings() : void{
        $constants = (new ReflectionClass(VanillaPlaySounds::class))->getConstants();
        self::assertNotEmpty($constants);
        foreach($constants as $name => $value){
            self::assertTrue(is_string($value) && $value !== '', "Constant $name must be a non-empty string");
        }
    }

    public function testEveryConstantHasMatchingMethod() : void{
        $reflection = new ReflectionClass(VanillaPlaySounds::class);
        $constants = $reflection->getConstants();

        $methods = [];
        foreach($reflection->getMethods(ReflectionMethod::IS_PUBLIC) as $method){
            if($method->isStatic()){
                $methods[$method->getName()] = $method;
            }
        }
        self::assertCount(count($constants), $methods);

        foreach($constants as $name => $value){
            self::assertArrayHasKey($name, $methods, "Missing method for constant $name");
            $sound = $methods[$name]->invoke(null);
            self::assertInstanceOf(PlaySound::class, $sound);
            self::assertSame($value, $sound->getSoundName(), "Method $name returns a different sound");
        }
    }

    public function testNoCaseInsensitiveDuplicates() : void{
        $seen = [];
        foreach(array_keys((new ReflectionClass(VanillaPlaySounds::class))->getConstants()) as $name){
            $lower = strtolower($name);
            self::assertArrayNotHasKey($lower, $seen, "Duplicate name $name");
            $seen[$lower] = true;
        }
    }

    public function testMethodReturnsIndependentInstances() : void{
        $a = VanillaPlaySounds::RANDOM_POP();
        $a->setVolume(0.1)->setLoopCount(5);
        $b = VanillaPlaySounds::RANDOM_POP();

        self::assertNotSame($a, $b);
        self::assertSame(1.0, $b->getVolume());
        self::assertSame(0, $b->getLoopCount());
        self::assertSame(VanillaPlaySounds::RANDOM_POP, $b->getSoundName());
    }
}

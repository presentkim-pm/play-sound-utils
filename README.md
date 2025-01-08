<!-- PROJECT BADGES -->
<div align="center">

[![Poggit CI][poggit-ci-badge]][poggit-ci-url]
[![Stars][stars-badge]][stars-url]
[![License][license-badge]][license-url]

</div>


<!-- PROJECT LOGO -->
<br />
<div align="center">
  <img src="https://raw.githubusercontent.com/presentkim-pm/play-sound-utils/main/assets/icon.png" alt="Logo" width="80" height="80"/>
  <h3>play-sound-utils</h3>
  <p align="center">
    Provides utils for send `PlaySoundPacket` shorter and easier!

[View in Poggit][poggit-ci-url] · [Report a bug][issues-url] · [Request a feature][issues-url]

  </p>
</div>


<!-- ABOUT THE PROJECT -->

## About The Project
This virion was developed to streamline the boilerplate code required to send sounds by their string names using `PlaySoundPacket`.
It supports implementations of the `Sound` interface that can be used with `World::addSound()`, 
and also provides utility methods for sending packets directly.

-----

## How to use?

### 1. Create `PlaySound` object for `World::addSound()`

```php
use pocketmine\math\Vector3;
use pocketmine\world\World;
use kim\present\utils\playsound\PlaySound;

function sendLevelUpSound(World $world, Vector3 $vec) : void{
    $world->addSound($vec, new PlaySound("random.levelup"));
}
```


### 2. Create `PlaySoundPacket` object for `Player::sendDataPacket()`

```php
use pocketmine\math\Vector3;
use pocketmine\player\Player;
use kim\present\utils\playsound\PlaySound;

function sendLevelUpSound(Player $player, Vector3 $vec) : void{
    $player->getNetworkSession()->sendDataPacket(
        PlaySound::createPacket($vec, "random.levelup")
    );
}
```


### 3. Send `PlaySoundPacket` via static util method

```php
use pocketmine\math\Vector3;
use pocketmine\player\Player;
use kim\present\utils\playsound\PlaySound;

function sendLevelUpSound(Player $player, Vector3 $vec) : void{
    PlaySound::sendTo($player, "random.levelup");
}
```


### 4. Using `VanillaPlaySounds` for `World::addSound()`

```php
use pocketmine\math\Vector3;
use pocketmine\world\World;
use kim\present\utils\playsound\VanillaPlaySounds;

function sendLevelUpSound(World $world, Vector3 $vec) : void{
    $world->addSound($vec, VanillaPlaySounds::LEVELUP());
}
```

-----

## Installation

See [Official Poggit Virion Documentation](https://github.com/poggit/support/blob/master/virion.md)

-----

## License

Distributed under the **MIT**. See [LICENSE][license-url] for more information


[poggit-ci-badge]: https://poggit.pmmp.io/ci.shield/presentkim-pm/play-sound-utils/play-sound-utils?style=for-the-badge

[stars-badge]: https://img.shields.io/github/stars/presentkim-pm/play-sound-utils.svg?style=for-the-badge

[license-badge]: https://img.shields.io/github/license/presentkim-pm/play-sound-utils.svg?style=for-the-badge

[poggit-ci-url]: https://poggit.pmmp.io/ci/presentkim-pm/play-sound-utils/play-sound-utils

[stars-url]: https://github.com/presentkim-pm/play-sound-utils/stargazers

[issues-url]: https://github.com/presentkim-pm/play-sound-utils/issues

[license-url]: https://github.com/presentkim-pm/play-sound-utils/blob/main/LICENSE

[project-icon]: https://raw.githubusercontent.com/presentkim-pm/play-sound-utils/main/assets/icon.png

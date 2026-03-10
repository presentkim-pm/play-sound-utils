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

#### Notes about `VanillaPlaySounds` traits and constants

- Category-based traits are generated under the `kim\present\utils\playsound\defaults` namespace.  
  - Example: category `"ui"` -> `kim\present\utils\playsound\defaults\VanillaPlaySoundsUiTrait`.
- Each trait provides:
  - `public const` constants for sound name **strings** (e.g. `VanillaPlaySounds::LEVELUP`).
  - `public static` methods for `PlaySound` instances (e.g. `VanillaPlaySounds::LEVELUP()`).
- Use **constants** when you only need the raw sound name string, and use **methods** when you need a `PlaySound` object for `World::addSound()` or similar APIs.


### 5. Trimming unused `VanillaPlaySounds` entries from built phars

This virion provides an optional build-time tool that can reduce the final plugin phar size by
removing unused `VanillaPlaySounds` members from the infected code.

- Tool script (in this repository):  
  `tools/prune-vanilla-play-sounds-phar.php`
- Intended usage:
  - Run it **after** virion infection, on the **built plugin phar**.
  - It scans all PHP files in the target phar, detects how `VanillaPlaySounds` is used, and then:
    - Removes unused generated trait files for `VanillaPlaySounds*Trait`.
    - Inlines only the **actually used** constants and methods directly into the `VanillaPlaySounds` class
      inside the infected namespace.

Because virions are infected into plugin source trees and are not always present in the plugin
repository itself, the recommended way to use this tool is to **download it dynamically from GitHub**
in your CI pipeline.

#### GitHub Actions example (recommended)

After you run your usual virion-infecting build step, you can download and run the pruning script:

```yaml
      - name: Build plugin with virion infecting
        run: php -dphar.readonly=0 .github/workflows/pmmp-plugin-build.php .

      - name: Download PresentKim/play-sound-utils prune script
        run: wget -O .github/workflows/prune-vanilla-play-sounds-phar.php https://raw.githubusercontent.com/presentkim-pm/play-sound-utils/main/tools/prune-vanilla-play-sounds-phar.php

      - name: Prune unused VanillaPlaySounds entries
        run: php .github/workflows/prune-vanilla-play-sounds-phar.php .releases
```

This pattern works for any plugin repository without requiring the virion source tree to be checked
into the plugin repo.

#### Basic CLI usage (if you have the script locally)

If you have cloned this repository or otherwise placed `prune-vanilla-play-sounds-phar.php` in your
project, you can also run it directly. For example, from your plugin project root (where your release
phars are stored, e.g. in `.releases/`):

```bash
php tools/prune-vanilla-play-sounds-phar.php .releases/MyPlugin.phar
```

Notes:

- You can also pass a directory or a glob:
  - `php tools/prune-vanilla-play-sounds-phar.php .releases`
  - `php tools/prune-vanilla-play-sounds-phar.php ".releases/*.phar"`
- The script tries to **replace the original phar in-place**.
  - On platforms where direct replacement is not possible (e.g. locked file on Windows),
    it falls back to writing a new file named like `MyPlugin.trimmed.phar`.

#### GitHub Actions example

After you run your usual virion-infecting build step, you can add a pruning step like this:

```yaml
      - name: Build plugin with virion infecting
        run: php -dphar.readonly=0 .github/workflows/pmmp-plugin-build.php .

      - name: Prune unused VanillaPlaySounds entries
        run: php virions/play-sound-utils/tools/prune-vanilla-play-sounds-phar.php .releases
```

This makes it easy for plugin authors to keep the convenient `VanillaPlaySounds` API during
development while shipping a much smaller phar that only contains the sounds they actually use.

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

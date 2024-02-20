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
    Provides utils for send PlaySoundPacket more shorter and easier!

[View in Poggit][poggit-ci-url] · [Report a bug][issues-url] · [Request a feature][issues-url]

  </p>
</div>


<!-- ABOUT THE PROJECT -->
## About The Project
:heavy_check_mark: Provides util function for create sound packet
- `kim\present\utils\playsound\PlaySoundUtils::createPacket(Vector3 $vec, string $soundName, float $volume = 1.0, float $pitch = 1.0) : PlaySoundPacket`

:heavy_check_mark: Provides util function for send sound packet
- `kim\present\utils\playsound\PlaySoundUtils::sendTo(Player $player, string $soundName, float $volume = 1.0, float $pitch = 1.0) : void`

:heavy_check_mark: Provides util function for broadcast sound packet
- `kim\present\utils\playsound\PlaySoundUtils::broadcastTo(array $recipients, string $soundName, float $volume = 1.0, float $pitch = 1.0) : void`

-----

## Installation
See [Official Poggit Virion Documentation](https://github.com/poggit/support/blob/master/virion.md)

-----

## How to use?
See [Main Document](https://github.com/presentkim-pm/play-sound-utils/blob/main/docs/README.md)

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

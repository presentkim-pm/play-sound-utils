# Changelog

## 4.0.0 (2026-11-27)

The Poggit virion version for the original [pmmp/PocketMine-MP](https://github.com/pmmp/PocketMine-MP) 5.x is kept on the
[`legacy/pmmp-5.44`](https://github.com/presentkim-pm/play-sound-utils/tree/legacy/pmmp-5.44) branch.

### ⚠️ Breaking changes
- Targets [axolotl-pm/PocketMine-MP](https://github.com/axolotl-pm/PocketMine-MP) and **PHP 8.4+**.
- Distributed with Composer (`presentkim/play-sound-utils`): the Poggit virion files (`.poggit.yml`, `virion.yml`) are removed.
- Built for the Bedrock 1.26.60 `PlaySoundPacket`. The old packet constructor call failed with an
  `ArgumentCountError` on bedrock-protocol 64, so this version no longer works with older protocol versions.
- The prune tool now needs `php -d phar.readonly=0` and is exposed as the Composer bin
  `vendor/bin/prune-vanilla-play-sounds-phar.php`.

### ✨ Features
- `PlaySound` options `loopCount`, `bypassListenerRangeCheck` and `playbackPositionSeconds`: constructor arguments,
  fluent setters (`setLoopCount()`, `setBypassListenerRangeCheck()`, `setPlaybackPositionSeconds()`) and getters.
  `createPacket()` takes them as optional trailing parameters.
- `VanillaPlaySounds` regenerated for Bedrock 1.26.60.5 (previously 1.26.0.2): 356 sounds added, none removed.
- Prune tool (`tools/prune-vanilla-play-sounds-phar.php`):
  - works on namespace-shaded phars (the class is found by its short name)
  - handles `use ... as Alias;` imports and constant uses (`VanillaPlaySounds::LEVELUP`)

### 🐛 Fixes
- `PlaySoundPacket` creation failed with `ArgumentCountError` on bedrock-protocol 64.
- `send()`, `sendTo()` and `broadcastTo()` skip disconnected players instead of failing.

### 🧪 Development
- PHPUnit tests for `PlaySound`, `VanillaPlaySounds` and the prune tool, and GitHub Actions CI on PHP 8.4 / 8.5.

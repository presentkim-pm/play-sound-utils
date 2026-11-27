<?php

declare(strict_types=1);

namespace kim\present\utils\playsound\tests;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

use function array_diff;
use function array_map;
use function json_decode;
use function json_encode;
use function str_ends_with;
use function class_exists;
use function dirname;
use function escapeshellarg;
use function exec;
use function file_get_contents;
use function file_put_contents;
use function function_exists;
use function implode;
use function is_dir;
use function mkdir;
use function rmdir;
use function scandir;
use function sort;
use function str_replace;
use function sys_get_temp_dir;
use function uniqid;
use function unlink;

use const JSON_THROW_ON_ERROR;
use const PHP_BINARY;

final class PruneVanillaPlaySoundsTest extends TestCase{

    private const TOOLS = __DIR__ . '/../tools';
    private const SRC = __DIR__ . '/../src/kim/present/utils/playsound';

    private string $tmp = '';

    public static function setUpBeforeClass() : void{
        require_once self::TOOLS . '/PruneVanillaPlaySounds.php';
    }

    protected function tearDown() : void{
        if($this->tmp !== ''){
            self::removeRecursive($this->tmp);
        }
    }

    /** @return array<string, array{string, string[], string[]}> */
    public static function usageProvider() : array{
        return [
            'short name' => [
                'use kim\present\utils\playsound\VanillaPlaySounds;' . "\n" . '$a = VanillaPlaySounds::RANDOM_POP(); $b = VanillaPlaySounds::MOB_CAT_MEOW;',
                ['RANDOM_POP'], ['MOB_CAT_MEOW'],
            ],
            'shaded import' => [
                'use Shaded\libs\kim\present\utils\playsound\VanillaPlaySounds;' . "\n" . 'VanillaPlaySounds::RANDOM_CLICK()->send($p);',
                ['RANDOM_CLICK'], [],
            ],
            'alias' => [
                'use Shaded\libs\kim\present\utils\playsound\VanillaPlaySounds as Sounds;' . "\n" . 'Sounds::NOTE_HARP(); $x = [Sounds::NOTE_BASS];',
                ['NOTE_HARP'], ['NOTE_BASS'],
            ],
            'fully qualified shaded' => [
                '$a = \Shaded\libs\kim\present\utils\playsound\VanillaPlaySounds::RANDOM_POP ();',
                ['RANDOM_POP'], [],
            ],
            'constant in expressions' => [
                'use kim\present\utils\playsound\VanillaPlaySounds;' . "\n" . '$m = [VanillaPlaySounds::A_B => 1]; $s = VanillaPlaySounds::C_D . "x"; if($n === VanillaPlaySounds::E_F){}',
                [], ['A_B', 'C_D', 'E_F'],
            ],
            'unrelated class ignored' => [
                'use Other\Sounds; Sounds::RANDOM_POP(); Foo::BAR; VanillaPlaySounds::class;',
                [], [],
            ],
        ];
    }

    /**
     * @param string[] $methods
     * @param string[] $consts
     */
    #[DataProvider('usageProvider')]
    public function testCollectUsedNames(string $code, array $methods, array $consts) : void{
        $usage = collectUsedVanillaPlaySoundsNames($code);
        sort($usage['methods']);
        sort($usage['consts']);
        sort($methods);
        sort($consts);
        self::assertSame($methods, $usage['methods']);
        self::assertSame($consts, $usage['consts']);
    }

    public function testRewriteClassWithShadedTraitImports() : void{
        $code = <<<'PHP'
<?php
namespace Shaded\libs\kim\present\utils\playsound;

use Shaded\libs\kim\present\utils\playsound\defaults\VanillaPlaySoundsUiTrait;
use Shaded\libs\kim\present\utils\playsound\defaults\VanillaPlaySoundsBlockTrait;

final readonly class VanillaPlaySounds{

    use VanillaPlaySoundsUiTrait;
    use VanillaPlaySoundsBlockTrait;

    private function __construct(){}
}
PHP;
        $result = rewriteVanillaPlaySoundsClass($code, ['A' => "    public const A = 'a';"], ['A' => '    public static function A() : PlaySound{ return 1; }']);

        self::assertStringNotContainsString('Trait', $result);
        self::assertStringContainsString("public const A = 'a';", $result);
        self::assertStringContainsString('public static function A()', $result);
    }

    public function testPrunesShadedPhar() : void{
        if(!class_exists(\Phar::class)){
            self::markTestSkipped('The phar extension is not available.');
        }
        if(!function_exists('exec')){
            self::markTestSkipped('exec() is disabled, cannot run the tool in a subprocess.');
        }

        $this->tmp = sys_get_temp_dir() . '/pvps-' . uniqid();
        mkdir($this->tmp);
        $phar = $this->tmp . '/Plugin.phar';
        $shaded = 'Shaded\\libs\\kim\\present\\utils\\playsound';

        $files = [];
        foreach(['VanillaPlaySounds.php', 'PlaySound.php'] as $name){
            $files["src/Shaded/libs/kim/present/utils/playsound/$name"] = $this->shade(self::SRC . "/$name", $shaded);
        }
        foreach(scandir(self::SRC . '/defaults') as $name){
            if(str_ends_with($name, '.php')){
                $files["src/Shaded/libs/kim/present/utils/playsound/defaults/$name"] = $this->shade(self::SRC . "/defaults/$name", $shaded);
            }
        }
        $files['src/Main.php'] = <<<'PHP'
<?php
namespace MyPlugin;

use Shaded\libs\kim\present\utils\playsound\VanillaPlaySounds as Sounds;

final class Main{
    public static function run() : array{
        return [Sounds::RANDOM_POP()->getSoundName(), Sounds::NOTE_HARP];
    }
}
PHP;

        $build = $this->tmp . '/build.php';
        file_put_contents($build, '<?php $p = new Phar($argv[1]); $p->setStub("<?php __HALT_COMPILER();");'
            . ' foreach(json_decode(file_get_contents($argv[2]), true) as $n => $c){ $p[$n] = $c; }');
        file_put_contents($this->tmp . '/files.json', json_encode($files, JSON_THROW_ON_ERROR));
        $this->exec([PHP_BINARY, '-d', 'phar.readonly=0', $build, $phar, $this->tmp . '/files.json']);

        $tool = self::TOOLS . '/prune-vanilla-play-sounds-phar.php';
        $this->exec([PHP_BINARY, '-d', 'phar.readonly=0', $tool, $phar]);

        $check = $this->tmp . '/check.php';
        file_put_contents($check, <<<'PHP'
<?php
require $argv[2];
$base = 'phar://' . $argv[1] . '/src/';
require $base . 'Shaded/libs/kim/present/utils/playsound/PlaySound.php';
require $base . 'Shaded/libs/kim/present/utils/playsound/VanillaPlaySounds.php';
$c = new ReflectionClass('Shaded\libs\kim\present\utils\playsound\VanillaPlaySounds');
$methods = array_map(fn($m) => $m->getName(), $c->getMethods(ReflectionMethod::IS_PUBLIC));
sort($methods);
$consts = array_keys($c->getConstants());
sort($consts);
echo json_encode([$methods, $consts, $c->getMethod('RANDOM_POP')->invoke(null)->getSoundName()]);
PHP);
        $out = $this->exec([PHP_BINARY, $check, $phar, dirname(__DIR__) . '/vendor/autoload.php']);
        [$methods, $consts, $name] = json_decode($out, true, 512, JSON_THROW_ON_ERROR);

        self::assertSame(['RANDOM_POP'], $methods);
        self::assertSame(['NOTE_HARP'], $consts);
        self::assertSame('random.pop', $name);
    }

    private function shade(string $file, string $namespace) : string{
        return str_replace('kim\\present\\utils\\playsound', $namespace, (string) file_get_contents($file));
    }

    /** @param string[] $command */
    private function exec(array $command) : string{
        $output = [];
        $code = 0;
        \exec(implode(' ', array_map(escapeshellarg(...), $command)) . ' 2>&1', $output, $code);
        self::assertSame(0, $code, implode("\n", $output));
        return implode("\n", $output);
    }

    private static function removeRecursive(string $path) : void{
        if(!is_dir($path)){
            @unlink($path);
            return;
        }
        foreach(array_diff(scandir($path), ['.', '..']) as $entry){
            self::removeRecursive($path . '/' . $entry);
        }
        @rmdir($path);
    }
}

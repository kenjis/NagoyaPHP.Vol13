<?php
namespace Ttskch\Nagoyaphp13;

use PHPUnit\Framework\TestCase;

class CommandTest extends TestCase
{
    /**
     * @var Command
     */
    protected $command;

    protected function setUp()
    {
        $this->command = new Command('abc');
    }

    public function test_インスタンス化できる()
    {
        $this->assertInstanceOf(Command::class, $this->command);
    }

    public function test_コマンド文字列を配列にできる()
    {
        $array = $this->command->convertToArray();
        $this->assertSame(['a', 'b', 'c'], $array);
    }

    public function test_コマンドaを解釈できる()
    {
        list($direction, $position, $reverse) = $this->command->interpret('a');
        $this->assertSame('row', $direction);
        $this->assertSame(0, $position);
        $this->assertFalse($reverse);
    }

    public function test_コマンドiを解釈できる()
    {
        list($direction, $position, $reverse) = $this->command->interpret('i');
        $this->assertSame('row', $direction);
        $this->assertSame(0, $position);
        $this->assertTrue($reverse);
    }

    public function test_コマンドlを解釈できる()
    {
        list($direction, $position, $reverse) = $this->command->interpret('l');
        $this->assertSame('column', $direction);
        $this->assertSame(0, $position);
        $this->assertFalse($reverse);
    }
}

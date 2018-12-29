<?php
namespace Ttskch\Nagoyaphp13;

use PHPUnit\Framework\TestCase;

class RotatorTest extends TestCase
{
    /**
     * @var Rotator
     */
    protected $rotator;

    protected function setUp()
    {
        $this->rotator = new Rotator();
    }

    public function test_インスタンス化できる()
    {
        $this->assertInstanceOf(Rotator::class, $this->rotator);
    }

    public function test_配列をローテートできる()
    {
        $array = [1, 2, 3];
        $test = $this->rotator->rotate($array);
        $this->assertSame([2, 3, 1], $test);
    }

    public function test_配列を逆にローテートできる()
    {
        $array = [1, 2, 3];
        $test = $this->rotator->rotate($array, true);
        $this->assertSame([3, 1, 2], $test);
    }
}

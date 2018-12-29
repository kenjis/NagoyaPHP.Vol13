<?php
namespace Ttskch\Nagoyaphp13;

use PHPUnit\Framework\TestCase;

class MagicSqureTest extends TestCase
{
    /**
     * @var MagicSquare
     */
    protected $magicSqure;

    protected function setUp()
    {
        $numbers = [
            [1, 2, 3],
            [4, 5, 6],
            [7, 8, 9],
        ];
        $this->magicSqure = new MagicSquare($numbers);
    }

    public function test_インスタンス化できる()
    {
        $this->assertInstanceOf(MagicSquare::class, $this->magicSqure);
    }

    public function test_0行目の数字を取得できる()
    {
        $test = $this->magicSqure->getRow(0);
        $this->assertSame([1, 2, 3], $test);
    }

    public function test_2行目の数字を取得できる()
    {
        $test = $this->magicSqure->getRow(2);
        $this->assertSame([7, 8, 9], $test);
    }

    public function test_0行目の数字を設定できる()
    {
        $this->magicSqure->setRow(0, [2, 3, 1]);
        $this->assertSame([2, 3, 1], $this->magicSqure->getRow(0));
    }

    public function test_0列目の数字を取得できる()
    {
        $test = $this->magicSqure->getColumn(0);
        $this->assertSame([1, 4, 7], $test);
    }

    public function test_2列目の数字を取得できる()
    {
        $test = $this->magicSqure->getColumn(2);
        $this->assertSame([3, 6, 9], $test);
    }

    public function test_0列目の数字を設定できる()
    {
        $this->magicSqure->setColumn(0, [7, 1, 4]);
        $this->assertSame([7, 1, 4], $this->magicSqure->getColumn(0));
    }

    public function test_状態を文字列で出力できる()
    {
        $this->assertSame('123/456/789', (string) $this->magicSqure);
    }
}

<?php
namespace Ttskch\Nagoyaphp13;

class MagicSquare
{
    private $numbers = [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9],
    ];

    public function __toString() : string
    {
        $string = '';
        foreach ($this->numbers as $row) {
            $string .= implode('', $row) . '/';
        }

        $string = rtrim($string, '/');

        return $string;
    }

    public function getRow(int $nth) : array
    {
        return $this->numbers[$nth];
    }

    public function setRow(int $nth, array $array)
    {
        $this->numbers[$nth] = $array;
    }

    public function getColumn(int $nth) : array
    {
        $array = [];

        foreach ($this->numbers as $row) {
            $array[] = $row[$nth];
        }

        return $array;
    }

    public function setColumn(int $nth, array $array)
    {
        $row = 0;
        foreach ($array as $item) {
            $this->numbers[$row][$nth] = $item;
            $row++;
        }
    }
}

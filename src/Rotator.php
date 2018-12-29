<?php
namespace Ttskch\Nagoyaphp13;

class Rotator
{
    public function rotate(array $array, bool $revese = false) : array
    {
        if ($revese) {
            array_unshift($array, array_pop($array));

            return $array;
        }

        array_push($array, array_shift($array));

        return $array;
    }
}

<?php
namespace Ttskch\Nagoyaphp13;

class Nagoyaphp13
{
    public function run(string $input) : string
    {
        $commnad = new Command($input);
        $numbers = [
            [1, 2, 3],
            [4, 5, 6],
            [7, 8, 9],
        ];
        $magicSquare = new MagicSquare($numbers);
        $rotator = new Rotator();

        $commandArray = $commnad->convertToArray();

        foreach ($commandArray as $commnadString) {
            list($direction, $position, $reverse) = $commnad->interpret($commnadString);

            $method = 'get' . $direction;
            $items = $magicSquare->$method($position);

            $newItems = $rotator->rotate($items, $reverse);

            $method = 'set' . $direction;
            $magicSquare->$method($position, $newItems);
        }

        return $magicSquare;
    }
}

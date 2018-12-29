<?php
namespace Ttskch\Nagoyaphp13;

class Nagoyaphp13
{
    public function run(string $input) : string
    {
        $commnad = new Command($input);
        $magicSqure = new MagicSquare();
        $rotator = new Rotator();

        $commandArray = $commnad->convertToArray();

        foreach ($commandArray as $commnadString) {
            list($direction, $position, $reverse) = $commnad->interpret($commnadString);

            $method = 'get' . $direction;
            $items = $magicSqure->$method($position);

            $newItems = $rotator->rotate($items, $reverse);

            $method = 'set' . $direction;
            $magicSqure->$method($position, $newItems);
        }

        return $magicSqure;
    }
}

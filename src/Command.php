<?php
namespace Ttskch\Nagoyaphp13;

class Command
{
    /**
     * @var string
     */
    private $commandString;

    /**
     * @var array
     */
    private $map = [
        'a' => ['row', 0, false],
        'b' => ['row', 1, false],
        'c' => ['row', 2, false],
        'i' => ['row', 0, true],
        'h' => ['row', 1, true],
        'g' => ['row', 2, true],
        'l' => ['column', 0, false],
        'k' => ['column', 1, false],
        'j' => ['column', 2, false],
        'd' => ['column', 0, true],
        'e' => ['column', 1, true],
        'f' => ['column', 2, true],
    ];

    public function __construct(string $commandString)
    {
        $this->commandString = $commandString;
    }

    public function convertToArray() : array
    {
        return str_split($this->commandString);
    }

    public function interpret(string $string) : array
    {
        return $this->map[$string];
    }
}

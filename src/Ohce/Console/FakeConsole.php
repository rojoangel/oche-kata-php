<?php


namespace Ohce\Console;


use Ohce\Console;

class FakeConsole implements Console
{

    /** @var string */
    private $line;

    /**
     * @param string $text
     */
    public function writeLine($text)
    {
        $this->line = $text;
    }

    /**
     * @return string
     */
    public function getLine()
    {
        return $this->line;
    }


}
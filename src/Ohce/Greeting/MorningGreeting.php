<?php


namespace Ohce\Greeting;


use Ohce\Console;
use Ohce\Greeting;

class MorningGreeting implements Greeting
{
    /**
     * @param string $userName
     * @param Console $console
     */
    public function greet($userName, Console $console)
    {
        $console->writeLine(sprintf('¡Buenas días %s!', $userName));
    }
}
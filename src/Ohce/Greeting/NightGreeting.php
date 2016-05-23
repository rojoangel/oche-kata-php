<?php


namespace Ohce\Greeting;


use Ohce\Console;
use Ohce\Greeting;

class NightGreeting implements Greeting
{
    /**
     * @param string $userName
     * @param Console $console
     */
    public function greet($userName, Console $console)
    {
        $console->writeLine(sprintf('¡Buenas noches %s!', $userName));
    }
}
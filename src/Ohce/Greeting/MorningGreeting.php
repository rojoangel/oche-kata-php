<?php


namespace Ohce\Greeting;


use Ohce\Greeting;

class MorningGreeting implements Greeting
{
    /**
     * @param string $userName
     * @return string
     */
    public function greet($userName)
    {
        return sprintf('¡Buenas días %s!', $userName);
    }
}
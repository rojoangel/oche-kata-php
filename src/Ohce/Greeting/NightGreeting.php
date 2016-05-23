<?php


namespace Ohce\Greeting;


use Ohce\Greeting;

class NightGreeting implements Greeting
{
    /**
     * @param string $userName
     * @return string
     */
    public function greet($userName)
    {
        return sprintf('¡Buenas noches %s!', $userName);
    }
}
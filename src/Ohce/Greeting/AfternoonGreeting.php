<?php


namespace Ohce\Greeting;


use Ohce\Greeting;

class AfternoonGreeting implements Greeting
{

    /**
     * @param string $userName
     * @return string
     */
    public function greet($userName)
    {
        return sprintf('¡Buenas tardes %s!', $userName);
    }
}
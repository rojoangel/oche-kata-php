<?php


namespace Ohce\Greeting;


use Ohce\Greeting;

class MorningGreeting implements Greeting
{
    private $userName;

    /**
     * @param $userName
     */
    public function __construct($userName)
    {
        $this->userName = $userName;
    }

    /**
     * @return string
     */
    public function greet()
    {
        return sprintf('¡Buenas días %s!', $this->userName);
    }
}
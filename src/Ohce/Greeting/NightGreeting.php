<?php


namespace Ohce\Greeting;


use Ohce\Greeting;

class NightGreeting implements Greeting
{
    /** @var string */
    private $userName;

    /**
     * @param string $userName
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
        return sprintf('¡Buenas noches %s!', $this->userName);
    }
}
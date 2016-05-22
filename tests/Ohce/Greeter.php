<?php


namespace Ohce;


class Greeter
{
    /**
     * @var Clock
     */
    private $clock;

    /**
     * @param Clock $clock
     */
    public function __construct(Clock $clock)
    {
        $this->clock = $clock;
    }

    /**
     * @param string $userName
     * @return string
     */
    public function greetUser($userName)
    {
        return sprintf('¡Buenas días %s!', $userName);
    }
}
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
        $time = $this->clock->getTime();
        if ($this->isMorning($time)) {
            return sprintf('¡Buenas días %s!', $userName);
        }

        return sprintf('¡Buenas tardes %s!', $userName);
    }

    /**
     * @param int $time
     * @return bool
     */
    private function isMorning($time)
    {
        return $time >= 6 && $time < 12;
    }

}
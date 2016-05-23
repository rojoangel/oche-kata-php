<?php


namespace Ohce;


use Ohce\Greeting\MorningGreeting;
use Ohce\Greeting\NightGreeting;

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
            return (new MorningGreeting($userName))->greet();
        }

        if ($this->isNight($time)) {
            return(new NightGreeting($userName))->greet();
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

    /**
     * @param int $time
     * @return bool
     */
    private function isNight($time)
    {
        return $time >= 20 || $time < 6;
    }

}
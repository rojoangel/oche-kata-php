<?php


namespace Ohce;


use Ohce\Greeting\AfternoonGreeting;
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
        return $this->greetingFrom($time)->greet($userName);
    }

    /**
     * @param $time
     * @return Greeting
     */
    private function greetingFrom($time)
    {
        if ($this->isMorning($time)) {
            return new MorningGreeting();
        }

        if ($this->isNight($time)) {
            return new NightGreeting();
        }
        return new AfternoonGreeting();
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
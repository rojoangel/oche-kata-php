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
     * @var Console
     */
    private $console;

    /**
     * @param Clock $clock
     * @param Console $console
     */
    public function __construct(Clock $clock, Console $console)
    {
        $this->clock = $clock;
        $this->console = $console;
    }

    /**
     * @param string $userName
     * @return string
     */
    public function greetUser($userName)
    {

        $time = $this->clock->getTime();
        $this->console->writeLine(
            $this->greetingFor($time)->greet($userName)
        );
    }

    /**
     * @param $time
     * @return Greeting
     */
    private function greetingFor($time)
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
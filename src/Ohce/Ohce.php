<?php


namespace Ohce;


class Ohce
{
    /** @var string */
    private $name;

    /**
     * @var Console
     */
    private $output;

    /** @var Input  */
    private $input;
    
    /** @var Clock */
    private $clock;

    /**
     * @param string $name
     * @param Console $output
     * @param Input $input
     * @param Clock $clock
     */
    public function __construct($name, Console $output, Input $input, Clock $clock)
    {
        $this->name = $name;
        $this->output = $output;
        $this->input = $input;
        $this->clock = $clock;
    }

    public function run()
    {
        $this->greetUser();
        $inputLine = $this->readInput();
        while(!$this->isStop($inputLine)) {
            $this->writeReversedInput($inputLine);
            $inputLine = $this->readInput();
        }
        $this->waveOffUser();
    }

    /**
     * @param string $inputLine
     * @return string
     */
    private function reverse($inputLine)
    {
        return strrev($inputLine);
    }

    /**
     * @return string
     */
    private function readInput()
    {
        $inputLine = $this->input->readLine();
        return $inputLine;
    }

    /**
     * @param string $reversed
     */
    private function writeOutput($reversed)
    {
        $this->output->writeLine($reversed);
    }

    /**
     * @param string $inputLine
     * @param string $reversed
     * @return bool
     */
    private function isPalindrome($inputLine, $reversed)
    {
        return $inputLine === $reversed;
    }

    /**
     * @param string $inputLine
     * @return bool
     */
    private function isStop($inputLine)
    {
        return $inputLine === 'Stop!';
    }

    private function greetUser()
    {
        $time = $this->clock->getTime();

        if ($this->isMorning($time)) {
            $this->greetInTheMorning();
            return;
        }

        if ($this->isNight($time)) {
            $this->greetInTheAfternoon();
            return;
        }

        $this->greetInTheEvening();
    }

    private function waveOffUser()
    {
        $this->writeOutput(sprintf('Adios %s', $this->name));
    }

    /**
     * @param string $inputLine
     */
    private function writeReversedInput($inputLine)
    {
        $reversed = $this->reverse($inputLine);
        $this->writeOutput($reversed);
        if ($this->isPalindrome($inputLine, $reversed)) {
            $this->writeOutput('¡Bonita palabra!');
        }
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

    private function greetInTheMorning()
    {
        $greeting = 'Buenas días';
        $this->output->writeLine(sprintf('¡%s %s!', $greeting, $this->name));
    }

    private function greetInTheAfternoon()
    {
        $greeting = 'Buenas noches';
        $this->output->writeLine(sprintf('¡%s %s!', $greeting, $this->name));
    }

    private function greetInTheEvening()
    {
        $greeting = 'Buenas tardes';
        $this->output->writeLine(sprintf('¡%s %s!', $greeting, $this->name));
    }
}
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

    /**
     * @param string $name
     * @param Console $output
     * @param Input $input
     */
    public function __construct($name, Console $output, Input $input)
    {
        $this->name = $name;
        $this->output = $output;
        $this->input = $input;
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
        $this->output->writeLine(sprintf('¡Buenas días %s!', $this->name));
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
}
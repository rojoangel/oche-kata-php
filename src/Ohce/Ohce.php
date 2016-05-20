<?php


namespace Ohce;


class Ohce
{
    /**
     * @var string
     */
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
        $this->output->writeLine(sprintf('¡Buenas días %s!', $this->name));

        $inputLine = $this->readInput();
        while(!$this->hasStopBeenRequested($inputLine)) {
            $reversed = $this->reverse($inputLine);
            $this->writeOutput($reversed);
            if ($this->isPalindrome($inputLine, $reversed)) {
                $this->writeOutput('¡Bonita palabra!');
            }
            $inputLine = $this->readInput();
        }
        $this->writeOutput(sprintf('Adios %s', $this->name));

    }

    /**
     * @param string $inputLine
     * @return string mixed
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
     * @param $reversed
     */
    private function writeOutput($reversed)
    {
        $this->output->writeLine($reversed);
    }

    /**
     * @param $inputLine
     * @param $reversed
     * @return bool
     */
    private function isPalindrome($inputLine, $reversed)
    {
        return $inputLine === $reversed;
    }

    /**
     * @param $inputLine
     * @return bool
     */
    private function hasStopBeenRequested($inputLine)
    {
        return $inputLine === 'Stop!';
    }
}
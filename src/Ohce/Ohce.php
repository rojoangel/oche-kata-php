<?php


namespace Ohce;


class Ohce
{
    /** @var string */
    private $name;

    /** @var Console */
    private $output;

    /** @var Input */
    private $input;
    
    /** @var Greeter */
    private $greeter;

    /**
     * @param string $name
     * @param Console $output
     * @param Input $input
     * @param Greeter $greeter
     */
    public function __construct($name, Console $output, Input $input, Greeter $greeter)
    {
        $this->name = $name;
        $this->output = $output;
        $this->input = $input;
        $this->greeter = $greeter;
    }

    public function run()
    {
        $this->greetUser();
        $inputPhrase = $this->readInput();
        while (!$inputPhrase->isStop()) {
            $this->writeReversedInput($inputPhrase);
            $inputPhrase = $this->readInput();
        }
        $this->waveOffUser();
    }

    /**
     * @return Phrase
     */
    private function readInput()
    {
        return new Phrase($this->input->readLine());
    }

    /**
     * @param string $output
     */
    private function writeOutput($output)
    {
        $this->output->writeLine($output);
    }

    private function greetUser()
    {
        $this->greeter->greetUser($this->name);
    }

    private function waveOffUser()
    {
        $this->greeter->waveOffUser($this->name);
    }

    /**
     * @param Phrase $inputPhrase
     */
    private function writeReversedInput(Phrase $inputPhrase)
    {
        $this->writeOutput($inputPhrase->reverse()->getText());
        if ($inputPhrase->isPalindrome()) {
            $this->writeOutput('¡Bonita palabra!');
        }
    }
}

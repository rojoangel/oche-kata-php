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

    /** @var Input */
    private $input;

    /** @var Clock */
    private $clock;

    /** @var Greeter */
    private $greeter;

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
        $this->greeter = new Greeter($clock);
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
        $this->output->writeLine($this->greeter->greetUser($this->name));
    }

    private function waveOffUser()
    {
        $this->writeOutput(sprintf('Adios %s', $this->name));
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

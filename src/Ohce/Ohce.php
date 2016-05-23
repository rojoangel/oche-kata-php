<?php


namespace Ohce;


class Ohce
{
    /** @var string */
    private $name;

    /** @var Console */
    private $console;

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
        $this->console = $output;
        $this->input = $input;
        $this->greeter = $greeter;
    }

    public function run()
    {
        $this->greetUser();
        $inputPhrase = $this->readPhrase();
        while (!$inputPhrase->isStop()) {
            $this->writeReversedPhrase($inputPhrase);
            $inputPhrase = $this->readPhrase();
        }
        $this->waveOffUser();
    }

    /**
     * @return Phrase
     */
    private function readPhrase()
    {
        return new Phrase($this->input->readLine());
    }

    /**
     * @param string $output
     */
    private function writeOutput($output)
    {
        $this->console->writeLine($output);
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
    private function writeReversedPhrase(Phrase $inputPhrase)
    {
        $this->writeOutput($inputPhrase->reverse()->getText());
        if ($inputPhrase->isPalindrome()) {
            $this->writeOutput('¡Bonita palabra!');
        }
    }
}

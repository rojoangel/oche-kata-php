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
        $this->phrasesReverser = new PhrasesReverser($input, $output);
    }

    public function run()
    {
        $this->greetUser();
        $this->reversePhrases();
        $this->waveOffUser();
    }

    private function greetUser()
    {
        $this->greeter->greetUser($this->name);
    }

    private function waveOffUser()
    {
        $this->greeter->waveOffUser($this->name);
    }

    private function reversePhrases()
    {
        $this->phrasesReverser->reversePhrases();
    }
}

<?php


namespace Ohce;


class Ohce
{
    /** @var string */
    private $name;

    /** @var Greeter */
    private $greeter;

    /** @var PhrasesReverser */
    private $phrasesReverser;

    /**
     * @param string $name
     * @param Greeter $greeter
     * @param PhrasesReverser $phrasesReverser
     * @internal param Console $output
     * @internal param Input $input
     */
    public function __construct($name, Greeter $greeter, PhrasesReverser $phrasesReverser)
    {
        $this->name = $name;
        $this->greeter = $greeter;
        $this->phrasesReverser = $phrasesReverser;
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

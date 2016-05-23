<?php


namespace Ohce;


class Ohce
{
    /** @var string */
    private $name;

    /** @var Greeter */
    private $greeter;

    /** @var PhrasesEchoer */
    private $phrasesReverser;

    /**
     * @param string $name
     * @param Greeter $greeter
     * @param PhrasesEchoer $phrasesReverser
     */
    public function __construct($name, Greeter $greeter, PhrasesEchoer $phrasesReverser)
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
        $this->phrasesReverser->echoPhrases();
    }
}

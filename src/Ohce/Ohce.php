<?php


namespace Ohce;


class Ohce
{
    /** @var string */
    private $name;

    /** @var Greeter */
    private $greeter;

    /** @var PhrasesEchoer */
    private $phrasesEchoer;

    /**
     * @param string $name
     * @param Greeter $greeter
     * @param PhrasesEchoer $phrasesEchoer
     */
    public function __construct($name, Greeter $greeter, PhrasesEchoer $phrasesEchoer)
    {
        $this->name = $name;
        $this->greeter = $greeter;
        $this->phrasesEchoer = $phrasesEchoer;
    }

    public function run()
    {
        $this->greetUser();
        $this->echoPhrases();
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

    private function echoPhrases()
    {
        $this->phrasesEchoer->echoPhrases();
    }
}

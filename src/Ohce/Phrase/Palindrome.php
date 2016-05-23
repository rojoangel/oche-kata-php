<?php


namespace Ohce\Phrase;


use Ohce\Console;
use Ohce\Phrase;

class Palindrome implements Phrase
{
    /**
     * @var StandardPhrase
     */
    private $standardPhrase;

    /**
     * @param StandardPhrase $standardPhrase
     */
    public function __construct(StandardPhrase $standardPhrase)
    {
        $this->standardPhrase = $standardPhrase;
    }
    
    /**
     * @param Console $console
     */
    public function notifyEcho(Console $console)
    {
        $this->standardPhrase->notifyEcho($console);
        $console->writeLine('¡Bonita palabra!');
    }
}
<?php


namespace Ohce\Phrase;


use Ohce\Console;
use Ohce\Phrase;

class Palindrome implements Phrase
{
    /**
     * @var Phrase
     */
    private $phrase;

    /**
     * @param Phrase $phrase
     */
    public function __construct($phrase)
    {
        $this->phrase = $phrase;
    }

    /**
     * @return Phrase
     */
    public function reverse()
    {
        return $this->phrase->reverse();
    }

    /**
     * @return bool
     */
    public function isPalindrome()
    {
        return $this->phrase->isPalindrome();
    }

    /**
     * @return bool
     */
    public function isStop()
    {
        return $this->phrase->isStop();
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->phrase->getText();
    }

    /**
     * @param Console $console
     */
    public function notifyEcho(Console $console)
    {
        $this->phrase->notifyEcho($console);
        $console->writeLine('¡Bonita palabra!');
    }
}
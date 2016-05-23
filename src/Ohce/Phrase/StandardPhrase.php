<?php


namespace Ohce\Phrase;


use Ohce\Console;
use Ohce\Phrase;

class StandardPhrase implements Phrase
{
    /**
     * @var string
     */
    private $text;

    /**
     * @param string $text
     */
    public function __construct($text)
    {
        $this->text = $text;
    }

    /**
     * @return StandardPhrase
     */
    public function reverse()
    {
        return new StandardPhrase(strrev($this->text));
    }


    function __toString()
    {
        return sprintf("StandardPhrase { 'text': %s }, $this->text");
    }

    /**
     * @return bool
     */
    public function isPalindrome()
    {
        return $this->reverse() == $this;
    }
    
    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param Console $console
     */
    public function notifyEcho(Console $console)
    {
        $console->writeLine($this->reverse()->getText());
    }
}
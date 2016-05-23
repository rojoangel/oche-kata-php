<?php


namespace Ohce;


class StandardPhrase
{
    const STOP_WORD = 'Stop!';

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

    public function reverse()
    {
        return new StandardPhrase(strrev($this->text));
    }


    function __toString()
    {
        return sprintf("StandardPhrase { 'text': %s }, $this->text");
    }

    public function isPalindrome()
    {
        return $this->reverse() == $this;
    }

    /**
     * @return bool
     */
    public function isStop()
    {
        return $this->text === self::STOP_WORD;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }
}
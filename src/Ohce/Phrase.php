<?php


namespace Ohce;


class Phrase
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

    public function reverse()
    {
        return new Phrase(strrev($this->text));
    }


    function __toString()
    {
        return sprintf("Phrase { 'text': %s }, $this->text");
    }
}
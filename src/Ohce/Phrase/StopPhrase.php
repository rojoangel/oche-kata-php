<?php


namespace Ohce\Phrase;

use Ohce\Console;
use Ohce\Phrase;

class StopPhrase implements Phrase
{
    private $text;

    /**
     * StopPhrase constructor.
     */
    public function __construct()
    {
        $this->text = 'Stop!';
    }

    /**
     * @param Console $console
     */
    public function notifyEcho(Console $console)
    {
        // do nothing
    }

    /**
     * @return bool
     */
    public function isStop()
    {
        return true;
    }
}
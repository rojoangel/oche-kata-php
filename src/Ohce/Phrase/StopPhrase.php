<?php


namespace Ohce\Phrase;

use Ohce\Console;
use Ohce\Phrase;

class StopPhrase implements Phrase
{

    const STOP_WORD = 'Stop!';

    /** @var string */
    private $text = 'Stop!';

    /**
     * @param Console $console
     */
    public function notifyEcho(Console $console)
    {
        // do nothing
    }
}
<?php


namespace Ohce\Phrase;

use Ohce\Console;
use Ohce\Phrase;

class StopPhrase implements Phrase
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
        // do nothing
    }

    /**
     * @return bool
     */
    public function isStop()
    {
        return $this->standardPhrase->isStop();
    }
}
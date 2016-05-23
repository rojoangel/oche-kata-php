<?php
namespace Ohce;

interface Phrase
{
    /**
     * @param Console $console
     */
    public function notifyEcho(Console $console);
}
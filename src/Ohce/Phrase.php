<?php
namespace Ohce;

interface Phrase
{

    /**
     * @param Console $console
     */
    public function notifyEcho(Console $console);
    
    /**
     * @return bool
     */
    public function isStop();

    /**
     * @return string
     */
    public function getText();
}
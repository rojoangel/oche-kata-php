<?php
namespace Ohce;

interface Phrase
{

    /**
     * @param Console $console
     */
    public function notifyEcho(Console $console);
    
    /**
     * @return Phrase
     */
    public function reverse();

    /**
     * @return bool
     */
    public function isPalindrome();

    /**
     * @return bool
     */
    public function isStop();

    /**
     * @return string
     */
    public function getText();
}
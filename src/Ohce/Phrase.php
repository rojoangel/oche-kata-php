<?php
namespace Ohce;

interface Phrase
{
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
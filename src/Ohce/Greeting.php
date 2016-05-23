<?php


namespace Ohce;


interface Greeting
{

    /**
     * @param string $userName
     * @return string
     */
    public function greet($userName);
}
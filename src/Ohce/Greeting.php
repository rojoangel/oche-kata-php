<?php


namespace Ohce;


interface Greeting
{

    /**
     * @param string $userName
     * @param Console $console
     */
    public function greet($userName, Console $console);
}
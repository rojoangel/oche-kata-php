<?php


namespace Ohce;


class Ohce
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var Console
     */
    private $output;

    /**
     * @param string $name
     * @param Console $output
     */
    public function __construct($name, $output)
    {
        $this->name = $name;
        $this->output = $output;
    }

    public function run()
    {
        $this->output->writeLine(sprintf('¡Buenas días %s!', $this->name));
    }
}
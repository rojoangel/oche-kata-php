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

    /** @var Input  */
    private $input;

    /**
     * @param string $name
     * @param Console $output
     * @param Input $input
     */
    public function __construct($name, Console $output, Input $input)
    {
        $this->name = $name;
        $this->output = $output;
        $this->input = $input;
    }

    public function run()
    {
        $this->output->writeLine(sprintf('¡Buenas días %s!', $this->name));
        $inputLine = $this->input->readLine();
        $reversed = strrev($inputLine);
        $this->output->writeLine($reversed);

    }
}
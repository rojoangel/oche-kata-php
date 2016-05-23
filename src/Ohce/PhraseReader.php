<?php


namespace Ohce;


class PhraseReader
{
    /** @var Input */
    private $input;

    /**
     * @param Input $input
     */
    public function __construct(Input $input)
    {
        $this->input = $input;
    }

    /**
     * @return StandardPhrase
     */
    public function read()
    {
        return new StandardPhrase($this->input->readLine());
    }
}
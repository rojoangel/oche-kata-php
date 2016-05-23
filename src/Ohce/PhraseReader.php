<?php


namespace Ohce;


use Ohce\Phrase\Palindrome;
use Ohce\Phrase\StandardPhrase;
use Ohce\Phrase\StopPhrase;

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
     * @return Phrase
     */
    public function read()
    {
        $phrase = new StandardPhrase($this->input->readLine());
        if ($phrase->isStop()) {
            return new StopPhrase($phrase);
        }
        if ($phrase->isPalindrome()) {
            return new Palindrome($phrase);
        }
        return $phrase;
    }
}
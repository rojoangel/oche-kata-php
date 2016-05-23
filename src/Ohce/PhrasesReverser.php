<?php


namespace Ohce;


class PhrasesReverser
{
    /** @var Input */
    private $input;

    /** @var Console */
    private $console;

    /**
     * @param Input $input
     * @param Console $console
     */
    public function __construct(Input $input, Console $console)
    {
        $this->input = $input;
        $this->console = $console;
    }


    public function reversePhrases()
    {
        $inputPhrase = $this->readPhrase();
        while (!$inputPhrase->isStop()) {
            $this->writeReversedPhrase($inputPhrase);
            $inputPhrase = $this->readPhrase();
        }
    }

    /**
     * @return Phrase
     */
    private function readPhrase()
    {
        return new Phrase($this->input->readLine());
    }

    /**
     * @param Phrase $inputPhrase
     */
    private function writeReversedPhrase(Phrase $inputPhrase)
    {
        $this->writeOutput($inputPhrase->reverse()->getText());
        if ($inputPhrase->isPalindrome()) {
            $this->writeOutput('¡Bonita palabra!');
        }
    }

    /**
     * @param string $output
     */
    private function writeOutput($output)
    {
        $this->console->writeLine($output);
    }
}
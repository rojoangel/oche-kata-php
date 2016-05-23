<?php


namespace Ohce;


class PhrasesReverser
{
    /** @var Input */
    private $input;

    /** @var Console */
    private $console;

    /** @var PhraseReader */
    private $phraseReader;

    /**
     * @param Input $input
     * @param Console $console
     */
    public function __construct(Input $input, Console $console)
    {
        $this->input = $input;
        $this->console = $console;
        $this->phraseReader = new PhraseReader($input);
    }


    public function reversePhrases()
    {
        while ($inputPhrase = $this->readPhrase()) {
            if($inputPhrase->isStop()) {
                break;
            }
            $this->writeReversedPhrase($inputPhrase);
        }
    }

    /**
     * @return Phrase
     */
    private function readPhrase()
    {
        return $this->phraseReader->read();
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
<?php


namespace Ohce;


class PhrasesReverser
{

    /** @var Console */
    private $console;

    /** @var PhraseReader */
    private $phraseReader;

    /**
     * @param Console $console
     * @param PhraseReader $phraseReader
     */
    public function __construct(Console $console, PhraseReader $phraseReader)
    {
        $this->console = $console;
        $this->phraseReader = $phraseReader;
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
     * @return StandardPhrase
     */
    private function readPhrase()
    {
        return $this->phraseReader->read();
    }

    /**
     * @param StandardPhrase $inputPhrase
     */
    private function writeReversedPhrase(StandardPhrase $inputPhrase)
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
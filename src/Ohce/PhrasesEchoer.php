<?php


namespace Ohce;


class PhrasesEchoer
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


    public function echoPhrases()
    {
        do {
            $inputPhrase = $this->readPhrase();
            $this->echoPhrase($inputPhrase);
        } while (!$inputPhrase->isStop());
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
    private function echoPhrase(Phrase $inputPhrase)
    {
        $inputPhrase->notifyEcho($this->console);
    }
}
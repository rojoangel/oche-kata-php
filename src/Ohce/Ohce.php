<?php


namespace Ohce;


class Ohce
{
    /** @var string */
    private $name;

    /**
     * @var Console
     */
    private $output;

    /** @var Input */
    private $input;

    /** @var Clock */
    private $clock;

    /**
     * @param string $name
     * @param Console $output
     * @param Input $input
     * @param Clock $clock
     */
    public function __construct($name, Console $output, Input $input, Clock $clock)
    {
        $this->name = $name;
        $this->output = $output;
        $this->input = $input;
        $this->clock = $clock;
    }

    public function run()
    {
        $this->greetUser();
        $inputPhrase = $this->readInput();
        while (!$inputPhrase->isStop()) {
            $this->writeReversedInput($inputPhrase);
            $inputPhrase = $this->readInput();
        }
        $this->waveOffUser();
    }

    /**
     * @return Phrase
     */
    private function readInput()
    {
        return new Phrase($this->input->readLine());
    }

    /**
     * @param string $output
     */
    private function writeOutput($output)
    {
        $this->output->writeLine($output);
    }

    private function greetUser()
    {
        $greeting = $this->calculateGreeting($this->clock->getTime());
        $this->output->writeLine(sprintf('¡%s %s!', $greeting, $this->name));
    }

    private function waveOffUser()
    {
        $this->writeOutput(sprintf('Adios %s', $this->name));
    }

    /**
     * @param Phrase $inputPhrase
     */
    private function writeReversedInput(Phrase $inputPhrase)
    {
        $this->writeOutput($inputPhrase->reverse()->getText());
        if ($inputPhrase->isPalindrome()) {
            $this->writeOutput('¡Bonita palabra!');
        }
    }

    /**
     * @param int $time
     * @return bool
     */
    private function isMorning($time)
    {
        return $time >= 6 && $time < 12;
    }

    /**
     * @param int $time
     * @return bool
     */
    private function isNight($time)
    {
        return $time >= 20 || $time < 6;
    }

    /**
     * @param int $time
     * @return string
     */
    private function calculateGreeting($time)
    {
        if ($this->isMorning($time)) {
            return 'Buenas días';
        }

        if ($this->isNight($time)) {
            return 'Buenas noches';
        }

        return 'Buenas tardes';
    }
}

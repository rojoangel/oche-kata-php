<?php


namespace Ohce\Phrase;


use Ohce\Console\FakeConsole;

class StandardPhraseTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @dataProvider isPalindromeProvider
     * @param string $text
     * @param bool $expectedIsPalindrome
     */
    public function testIsPalindrome($text, $expectedIsPalindrome)
    {
        $phrase = new StandardPhrase($text);
        $this->assertEquals($expectedIsPalindrome, $phrase->isPalindrome());
    }

    /**
     * @return array
     */
    public function isPalindromeProvider() {
        return [
            ['abcdef', false],
            ['oto', true]
        ];
    }


    /**
     * @dataProvider notifyEchoProvider
     * @param $text
     */
    public function testNotifyEcho($text)
    {
        $console = new FakeConsole();

        $phrase = new StandardPhrase($text);
        $phrase->notifyEcho($console);

        $this->assertEquals(strrev($text), $console->getLine());
    }

    /**
     * @return array
     */
    public function notifyEchoProvider()
    {
        return [
            ['abcdef'],
            ['obecaxa']
        ];
    }
}

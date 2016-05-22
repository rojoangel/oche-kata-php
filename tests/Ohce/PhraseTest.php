<?php


namespace Ohce;


class PhraseTest extends \PHPUnit_Framework_TestCase
{


    public function testReverse()
    {
        $phrase = new Phrase('abcdef');
        $this->assertEquals(new Phrase('fedcba'), $phrase->reverse());
    }

    /**
     * @dataProvider isPalindromeProvider
     * @param string $text
     * @param bool $expectedIsPalindrome
     */
    public function testIsPalindrome($text, $expectedIsPalindrome)
    {
        $phrase = new Phrase($text);
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
     * @dataProvider isStopProvider
     * @param $text
     * @param $expectedIsStop
     */
    public function testIsStop($text, $expectedIsStop)
    {
        $phrase = new Phrase($text);
        $this->assertEquals($expectedIsStop, $phrase->isStop());
    }

    /**
     * @return array
     */
    public function isStopProvider() {
        return [
            ['Stop!', true],
        ];
    }

}

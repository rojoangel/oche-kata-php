<?php


namespace Ohce\Phrase;


class StandardPhraseTest extends \PHPUnit_Framework_TestCase
{


    public function testReverse()
    {
        $phrase = new StandardPhrase('abcdef');
        $this->assertEquals(new StandardPhrase('fedcba'), $phrase->reverse());
    }

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
     * @return array
     */
    public function isStopProvider() {
        return [
            ['Stop!', true],
            ['stop', false]
        ];
    }
}

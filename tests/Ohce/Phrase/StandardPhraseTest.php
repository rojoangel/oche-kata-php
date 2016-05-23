<?php


namespace Ohce\Phrase;


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
}

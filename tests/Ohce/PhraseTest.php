<?php


namespace Ohce;


class PhraseTest extends \PHPUnit_Framework_TestCase
{


    public function testReverse()
    {
        $phrase = new Phrase('abcdef');
        $this->assertEquals(new Phrase('fedcba'), $phrase->reverse());
    }

    public function testIsPalindrome()
    {
        $phrase = new Phrase('abcdef');
        $this->assertTrue($phrase->isPalindrome());
    }


}

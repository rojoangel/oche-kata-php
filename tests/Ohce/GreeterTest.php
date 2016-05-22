<?php


namespace Ohce;

use PHPUnit_Framework_MockObject_MockObject as MockObject;

class GreeterTest extends \PHPUnit_Framework_TestCase
{


    /**
     * @dataProvider greetingsProvider
     * @param int $time
     * @param string $userName
     * @param string $expectedGreeting
     */
    public function testGreetsUserInTheMorning($time, $userName, $expectedGreeting)
    {
        /** @var Clock|MockObject $clock */
        $clock = $this->getMockBuilder(Clock::class)->getMock();

        $greeter = new Greeter($clock);
        $this->assertEquals($expectedGreeting, $greeter->greetUser($userName));
    }

    /**
     * @return array
     */
    public function greetingsProvider() {
        return [
            [9, 'Pedro', '¡Buenas días Pedro!'],
        ];
    }

}

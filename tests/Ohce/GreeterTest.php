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
    public function testGreetsUserAccordingToTime($time, $userName, $expectedGreeting)
    {
        /** @var Clock|MockObject $clock */
        $clock = $this->getMockBuilder(Clock::class)->getMock();
        $clock->expects($this->once())
            ->method('getTime')
            ->willReturn($time);

        $greeter = new Greeter($clock);
        $this->assertEquals($expectedGreeting, $greeter->greetUser($userName));
    }

    /**
     * @return array
     */
    public function greetingsProvider() {
        return [
            '6' => [6, 'Pedro', '¡Buenas días Pedro!'],
            '9' => [9, 'Pedro', '¡Buenas días Pedro!'],
            '11' => [11, 'Pedro', '¡Buenas días Pedro!'],
            '12' => [12, 'Juan', '¡Buenas tardes Juan!'],
            '13' => [13, 'Juan', '¡Buenas tardes Juan!'],
            '19' => [19, 'Juan', '¡Buenas tardes Juan!'],
            '20' => [20, 'Antonio', '¡Buenas noches Antonio!'],
            '22' => [22, 'Antonio', '¡Buenas noches Antonio!'],
            '5' => [5, 'Antonio', '¡Buenas noches Antonio!'],
        ];
    }
}

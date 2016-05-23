<?php


namespace Ohce;

use Ohce\Console\FakeConsole;
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

        $console = new FakeConsole();

        $greeter = new Greeter($clock, $console);
        $greeter->greetUser($userName);

        $this->assertEquals($expectedGreeting, $console->getLine());
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

    /**
     * @dataProvider waveOffsProvider
     * @param string$userName
     */
    public function testWavesOffUser($userName)
    {
        /** @var Clock|MockObject $dummyClock */
        $dummyClock = $this->getMockBuilder(Clock::class)->getMock();

        $console = new FakeConsole();

        $greeter = new Greeter($dummyClock, $console);
        $greeter->waveOffUser($userName);

        $this->assertEquals(sprintf('Adios %s', $userName), $console->getLine());

    }

    /**
     * @return array
     */
    public function waveOffsProvider() {
        return [
            'Pedro' => ['Pedro'],
            'Juan' => ['Juan'],
            'Antonio' => ['Antonio'],
        ];
    }
}

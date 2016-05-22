<?php


namespace Ohce;


use PHPUnit_Framework_MockObject_MockObject as MockObject;

class OhceTest extends \PHPUnit_Framework_TestCase
{


    public function testMorningOhce()
    {
        $name = 'Pedro';

        /** @var Input|MockObject $input */
        $input = $this->getMockBuilder(Input::class)->getMock();
        $input->expects($this->exactly(4))
            ->method('readLine')
            ->willReturnOnConsecutiveCalls(
                'hola',
                'oto',
                'stop',
                'Stop!'
            );

        /** @var Console|MockObject $output */
        $output = $this->getMockBuilder(Console::class)->getMock();
        $output->expects($this->exactly(6))
            ->method("writeLine")
            ->withConsecutive(
                [$this->equalTo(sprintf("¡Buenas días %s!", $name))],
                [$this->equalTo("aloh")],
                [$this->equalTo("oto")],
                [$this->equalTo("¡Bonita palabra!")],
                [$this->equalTo("pots")],
                [$this->equalTo("Adios Pedro")]
            );

        /** @var Clock|MockObject $clock */
        $clock = $this->getMockBuilder(Clock::class)->getMock();
        $clock->expects($this->once())
            ->method('getTime')
            ->willReturn(9);
        $greeter = new Greeter($clock);

        $ohce = new Ohce($name, $output, $input, $greeter);
        $ohce->run();

    }

    public function testAfternoonOhce()
    {
        $name = 'Pedro';

        /** @var Input|MockObject $input */
        $input = $this->getMockBuilder(Input::class)->getMock();
        $input->expects($this->exactly(5))
            ->method('readLine')
            ->willReturnOnConsecutiveCalls(
                'hello',
                'abad',
                'arroz a zorra',
                'pots',
                'Stop!'
            );

        /** @var Console|MockObject $output */
        $output = $this->getMockBuilder(Console::class)->getMock();
        $output->expects($this->exactly(7))
            ->method("writeLine")
            ->withConsecutive(
                [$this->equalTo(sprintf("¡Buenas tardes %s!", $name))],
                [$this->equalTo("olleh")],
                [$this->equalTo("daba")],
                [$this->equalTo("arroz a zorra")],
                [$this->equalTo("¡Bonita palabra!")],
                [$this->equalTo("stop")],
                [$this->equalTo("Adios Pedro")]
            );

        /** @var Clock|MockObject $clock */
        $clock = $this->getMockBuilder(Clock::class)->getMock();
        $clock->expects($this->once())
            ->method('getTime')
            ->willReturn(13);
        $greeter = new Greeter($clock);

        $ohce = new Ohce($name, $output, $input, $greeter);
        $ohce->run();

    }

    public function testNightOhce()
    {
        $name = 'Pedro';

        /** @var Input|MockObject $input */
        $input = $this->getMockBuilder(Input::class)->getMock();
        $input->expects($this->exactly(5))
            ->method('readLine')
            ->willReturnOnConsecutiveCalls(
                'hello',
                'abad',
                'arroz a zorra',
                'pots',
                'Stop!'
            );

        /** @var Console|MockObject $output */
        $output = $this->getMockBuilder(Console::class)->getMock();
        $output->expects($this->exactly(7))
            ->method("writeLine")
            ->withConsecutive(
                [$this->equalTo(sprintf("¡Buenas noches %s!", $name))],
                [$this->equalTo("olleh")],
                [$this->equalTo("daba")],
                [$this->equalTo("arroz a zorra")],
                [$this->equalTo("¡Bonita palabra!")],
                [$this->equalTo("stop")],
                [$this->equalTo("Adios Pedro")]
            );

        /** @var Clock|MockObject $clock */
        $clock = $this->getMockBuilder(Clock::class)->getMock();
        $clock->expects($this->once())
            ->method('getTime')
            ->willReturn(22);
        $greeter = new Greeter($clock);

        $ohce = new Ohce($name, $output, $input, $greeter);
        $ohce->run();
    }

}

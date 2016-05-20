<?php


namespace Ohce;


use PHPUnit_Framework_MockObject_MockObject as MockObject;

class OhceTest extends \PHPUnit_Framework_TestCase
{


    public function testOhce()
    {
        $name = 'Pedro';

        /** @var Input|MockObject $input */
        $input = $this->getMockBuilder(Input::class)->getMock();
        $input->method('readLine')->willReturn('hola');

        /** @var Console|MockObject $output */
        $output = $this->getMockBuilder(Console::class)->getMock();
        $output->expects($this->exactly(2))
            ->method("writeLine")
            ->withConsecutive(
                [$this->equalTo(sprintf("¡Buenas días %s!", $name))],
                [$this->equalTo("aloh")]
            );

        $ohce = new Ohce($name, $output, $input);
        $ohce->run();

    }
}

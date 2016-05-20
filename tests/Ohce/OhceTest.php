<?php


namespace Ohce;


use PHPUnit_Framework_MockObject_MockObject as MockObject;

class OhceTest extends \PHPUnit_Framework_TestCase
{


    public function testOhce()
    {
        /** @var Console|MockObject $output */
        $output = $this->getMockBuilder(Console::class)->getMock();
        $output->expects($this->once())->method("writeLine")->with("¡Buenas días Pedro!");
        $ohce = new Ohce('Pedro', $output);
        $ohce->run();

    }
}

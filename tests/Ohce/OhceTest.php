<?php


namespace Ohce;


use PHPUnit_Framework_MockObject_MockObject as MockObject;

class OhceTest extends \PHPUnit_Framework_TestCase
{


    public function testOhce()
    {
        $name = 'Pedro';

        /** @var Console|MockObject $output */
        $output = $this->getMockBuilder(Console::class)->getMock();
        $output->expects($this->once())->method("writeLine")->with(sprintf("¡Buenas días %s!", $name));

        $ohce = new Ohce($name, $output);
        $ohce->run();

    }
}

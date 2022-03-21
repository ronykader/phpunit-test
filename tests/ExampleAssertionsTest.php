<?php 

class ExampleAssertiosTest extends \PHPUnit\Framework\TestCase
{
    
    public function testThatStringsMatch()
    {
        $string = "testing";
        $string1 = "testing";
        $this->assertSame($string,$string1);
    }


    public function testThatNumberAddUp()
    {
        $this->assertEquals(10,5+5);
    }
}

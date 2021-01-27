<?php
namespace App\Tests\Util;

use App\Util\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testAdd()
    {
        $calculator = new Calculator();
        $result = $calculator->add(30, 12);
        $this->assertEquals(42, $result);
    }
    public function testSub()
    {
        $calculator = new Calculator();
        $result = $calculator->sub(30, 10);
        $this->assertEquals(20, $result);
    }
    public function testMul()
    {
        $calculator = new Calculator();
        $result = $calculator->mul(30, 10);
        $this->assertEquals(300, $result);
    }
    public function testDiv()
    {
        $calculator = new Calculator();
        $result = $calculator->div(30, 10);
        $this->assertEquals(3, $result);
    }
    public function testSqr()
    {
        $calculator = new Calculator();
        $result = $calculator->sqr(30);
        $this->assertEquals(900, $result);
    }

        

      
}

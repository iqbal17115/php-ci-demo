<?php
namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Calculator;

require __DIR__ . '/../vendor/autoload.php';

class CalculatorTest extends TestCase
{
    public function testAdd()
    {
        $calc = new Calculator();
        $this->assertEquals(5, $calc->add(2, 3));
    }

    public function testSubtract()
    {
        $calc = new Calculator();
        $this->assertEquals(3, $calc->subtract(5, 2));
    }

    public function testMultiply()
    {
        $calc = new Calculator();
        $this->assertEquals(12, $calc->multiply(3, 4));
    }

    public function testDivide()
    {
        $calc = new Calculator();
        $this->assertEquals(5, $calc->divide(10, 2));
    }

    public function testDivideByZero()
    {
        $this->expectException(\InvalidArgumentException::class);
        $calc = new Calculator();
        $calc->divide(5, 0);
    }
}

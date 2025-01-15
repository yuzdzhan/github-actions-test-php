<?php

namespace Tests;

use App\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
	private $calculator;

	protected function setUp(): void
	{
		$this->calculator = new Calculator();
	}

	public function testAdd()
	{
		$this->assertEquals(4.0, $this->calculator->add(2, 2));
		$this->assertEquals(0.0, $this->calculator->add(-2, 2));
		$this->assertEquals(0.3, $this->calculator->add(0.1, 0.2), '', 0.0001);
	}

	public function testSubtract()
	{
		$this->assertEquals(0.0, $this->calculator->subtract(2, 2));
		$this->assertEquals(-4.0, $this->calculator->subtract(-2, 2));
	}

	public function testMultiply()
	{
		$this->assertEquals(4.0, $this->calculator->multiply(2, 2));
		$this->assertEquals(-4.0, $this->calculator->multiply(-2, 2));
	}

	public function testDivide()
	{
		$this->assertEquals(1.0, $this->calculator->divide(2, 2));
		$this->assertEquals(-1.0, $this->calculator->divide(-2, 2));
	}

	public function testDivideByZero()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->calculator->divide(2, 0);
	}
}
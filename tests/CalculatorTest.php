<?php

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testInstanceOfCalculator()
    {
        $calculator = new \revision6\calculator\Calculator();
        $this->assertInstanceOf(
            '\revision6\calculator\Calculator',
            $calculator
        );
    }

    public function testAddition()
    {
        $calculator = new \revision6\calculator\Calculator();
        $this->assertEquals(
            2,
            $calculator
                ->addValue(1)
                ->addValue(1)
                ->setOperand('+')
                ->calculate()
        );
    }

    public function testSubstractionMultiple()
    {
        $calculator = new \revision6\calculator\Calculator();;

        $this->assertEquals(
            -2,
            $calculator
                ->setOperand('-')
                ->addValue(2)
                ->addValue(1)
                ->addValue(3)
                ->calculate()
        );
    }

    public function testError()
    {
        $calculator = new \revision6\calculator\Calculator();
        $this->assertEquals(false, $calculator->addValue(1)->addValue(1)->setOperand('*')->calculate());
    }
}

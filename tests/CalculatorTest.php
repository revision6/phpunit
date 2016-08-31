<?php

/**
 * UnitTests for Calculator
 *
 * PHP version 5
 *
 * @package    phpunit
 * @subpackage CalculatorTest
 * @author     Christopher Bölter
 * @copyright  revision6
 * @license    LGPL.
 */


use PHPUnit\Framework\TestCase;


/**
 * Class CalculatorTest
 *
 * Do the UnitTest for Calculator
 *
 * @package    phpunit
 * @subpackage Calculator
 * @author     Christopher Bölter & Max Schiller
 */
class CalculatorTest extends TestCase
{
    /**
     * Tests if the Instance of Calculator equals to a new Instance of the Calculator
     */
    public function testInstanceOfCalculator()
    {
        $calculator = new \revision6\calculator\Calculator();
        $this->assertInstanceOf(
            '\revision6\calculator\Calculator',
            $calculator
        );
    }

    /**
     * Do a simple Addition and tests if it is equals to a expected value (given)
     */
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

    /**
     * Do a simple Subtraction and tests if it is equals to a expected value (given)
     */
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

    /**
     * Tests the Calculation with an unexpected Multiplication which is not implemented yet
     */
    public function testError()
    {
        $calculator = new \revision6\calculator\Calculator();
        $this->assertEquals(
            false,
            $calculator
                ->addValue(1)
                ->addValue(1)
                ->setOperand('*')
                ->calculate());
    }

    /**
     * Do a simple Addition and tests if it is equals to an expected value (given)
     */
    public function testAdditionFiveValues()
    {
        $calculator = new \revision6\calculator\Calculator();
        $this->assertEquals(
            15,
            $calculator
                ->addValue(1)
                ->addValue(2)
                ->addValue(3)
                ->addValue(4)
                ->addValue(5)
                ->setOperand("+")
                ->calculate()
        );
    }

    /**
     * Tests if number of Indexes in values Array of Calculator equals an expected number
     */
    public function testInsert()
    {
        $calculator = new \revision6\calculator\Calculator();
        $calculator
            ->addValue(2)
            ->addValue(3)
            ->addValue(1);

        //$this->assertEquals(3, sizeof($calculator->getValues()));
        $this->assertCount(3, $calculator->getValues());
    }

    /**
     * Tests if specified numbers are contained in values Array of Calculator
     */
    public function testValue(){
        $calculator = new \revision6\calculator\Calculator();
        $calculator
            ->addValue(0)
            ->addValue(2);
        $this->assertContains(2, $calculator->getValues());
        $this->assertContains(0, $calculator->getValues());

    }

}


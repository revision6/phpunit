<?php

/**
 * Simple and lightweight calculator
 *
 * PHP version 5
 *
 * @package phpunit
 * @subpackage Calculator
 * @author     Christopher Bölter
 * @copyright  revision6
 * @license    LGPL.
 */


namespace revision6\calculator;


/**
 * Class Calculator
 *
 * Do the calculation for the given input
 *
 * @package phpunit
 * @subpackage Calculator
 * @author     Christopher Bölter
 */
class Calculator
{
    /**
     * Stores the operand
     *
     * @var string
     */
    protected $operand;

    /**
     * Stores the values for the operations
     *
     * @var array
     */
    protected $values = [];

    /**
     * Stores the calculation result
     *
     * @var mixed
     */
    protected $result = 0;

    /**
     * Set the Operand
     *
     * @return Calculator
     */
    public function setOperand($operand)
    {
        $this->operand = $operand;

        return $this;
    }

    /**
     * Adds a value the the values array
     *
     * @return Calculator
     */
    public function addValue($value)
    {
        $this->values[] = $value;

        return $this;
    }

    /**
     * Return values for operation
     *
     * @return array
     */
    public function getValues() {
        return $this->values;
    }

    /**
     * Returns the calculation operand
     *
     * @return string
     */
    public function getOperand() {
        return $this->operand;
    }

    /**
     * Do the calculation and returns the result. If an error was detected return is false
     *
     * @return bool|int
     */
    public function calculate()
    {
        if (!count($this->values) > 1) {
            return false;
        }

        $values       = $this->values;
        $this->result = $values[0];
        unset($values[0]);

        foreach ($values as $value) {
            switch ($this->operand) {
                case '+':
                    $this->result = $this->result + $value;
                    break;
                case '-':
                    $this->result = $this->result - $value;
                    break;
                default:
                    return false;
            }
        }

        return $this->result;
    }
}
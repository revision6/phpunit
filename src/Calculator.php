<?php

namespace revision6\calculator;

class Calculator
{
    protected $operand;

    protected $values = [];

    protected $result = 0;

    public function setOperand($operand)
    {
        $this->operand = $operand;

        return $this;
    }

    public function addValue($value)
    {
        $this->values[] = $value;

        return $this;
    }

    public function getValues() {
        return $this->values;
    }

    public function getOperand() {
        return $this->operand;
    }

    public function calculate()
    {
        if (!count($this->values) >= 2) {
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
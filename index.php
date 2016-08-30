<?php

include_once 'src/autoload.php';

$calculator = new \revision6\calculator\Calculator();

$result = $calculator
    ->setOperand('-')
    ->addValue(2)
    ->addValue(1)
    ->addValue(3)
    ->calculate();

if ($result == false) {
    echo "ERROR DURING CALCULATION";
    exit;
}

echo "RESULT: ".$result."<br>";
echo "OPERATION EXECUTED: ".implode(' '.$calculator->getOperand().' ', $calculator->getValues());
<?php
require __DIR__ . '/vendor/autoload.php';

use App\Calculator;

$calc = new Calculator();

echo "Add: " . $calc->add(10, 5) . "<br>";
echo "Subtract: " . $calc->subtract(10, 5) . "<br>";
echo "Multiply: " . $calc->multiply(10, 5) . "<br>";
echo "Divide: " . $calc->divide(10, 5) . "<br>";

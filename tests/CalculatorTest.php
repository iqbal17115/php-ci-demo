<?php

require_once __DIR__ . '/../src/Calculator.php';

use App\Calculator;

$calc = new Calculator();

try {
    assert($calc->add(2, 3) === 5);
    assert($calc->subtract(5, 2) === 3);
    assert($calc->multiply(3, 4) === 12);
    assert($calc->divide(10, 2) === 5);

    echo "All tests passed successfully!\n";
} catch (AssertionError $e) {
    echo "Test failed: " . $e->getMessage() . "\n";
    exit(1);
}

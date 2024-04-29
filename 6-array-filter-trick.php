<?php

// Problem
$numbers = [1, null, 6, null, 7, null, 95, 23, 54];

foreach ($numbers as $number) {
    if (!is_null($number)) {
        // Some code ...
    }
}

// Solution 1
$numbers = [1, null, 6, null, 7, null, 95, 23, 54];

$isInt = function ($number) {
    return is_int($number);
};

foreach (array_filter($numbers, $isInt) as $number) {
    // Some code ...
}

// NOTE: array_filter remove all values include (0, [], '', false), so how to keep integer values?
$isInt = function ($number) {
    return is_int($number);
};

array_filter($numbers, $isInt); // keep integer values

// Solution 2
function filterIntegers($numbers): array
{
    return array_filter($numbers, function ($number) {
        return is_int($number);
    });
}

$numbers = [1, null, 6, null, 7, null, 95, 23, 54];

foreach (filterIntegers($numbers) as $number) {
    // Some code ...
}

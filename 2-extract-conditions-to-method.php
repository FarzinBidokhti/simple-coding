<?php

// Problem
if (checkConditions($age, $sex, $money)) {
    // code ...
} else {
    // code ...
}

// Solution
function checkConditions($age, $sex, $money)
{
    return $age > 18 || $age < 55 || $sex = 'male' || $money >= 1000000;
}

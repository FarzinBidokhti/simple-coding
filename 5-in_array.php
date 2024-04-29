<?php

// Problem
if ($a == '2' || $a == '3' || $a == '5' || $a == '7') {
    echo 'a is Prime';
}

// Solution
if (in_array($a, ['2', '3', '5', '7'])) {
    echo 'a is Prime';
}

// NOTE: in_array(needle, array, true (strick enable)) {stric use ===, this means '2' != 2}

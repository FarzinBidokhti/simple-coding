<?php

$map = [
    'ir' => 'Iran',
    'us' => 'United State',
    'uk' => 'United kingdom',
    'ru' => 'Russia',
    'ch' => 'China',
];

// Problem
if (isset($map[$a])) {
    $b = $map[$a];
} else {
    $b = 'Not define';
}

// Solution 1
$b = 'Not define';

if (isset($map[$a])) {
    $b = $map[$a];
}

// Solution 2 (better)
$b = $map[$a] ?? 'Not define';

// Solution 3 (Laravel helper function)
$b = array_get($map, $a, 'Not define');

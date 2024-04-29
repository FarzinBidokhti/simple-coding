<?php

// Problem
if ($a == 'ir') {
    $b = 'Iran';
} elseif ($a == 'us') {
    $b = 'United State';
} elseif ($a == 'uk') {
    $b = 'United kingdom';
} elseif ($a == 'ru') {
    $b = 'Russia';
} elseif ($a == 'ch') {
    $b = 'China';
} else {
    $b = 'Not define';
}

// Solution
$map = [
    'ir' => 'Iran',
    'us' => 'United State',
    'uk' => 'United kingdom',
    'ru' => 'Russia',
    'ch' => 'China',
];

if (isset($map[$a])) {
    $b = $map[$a];
} else {
    $b = 'Not define';
}

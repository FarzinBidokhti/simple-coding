<?php

function myFunction($a)
{
    // Problem
    if ($a > 11) {
        echo 'some code ...';
        echo 'some code ...';
        echo 'some code ...';
        echo 'some code ...';
        if ($a > 14) {
            echo "some code ...";
            echo "some code ...";
            echo "some code ...";
        }
        echo 'some code ...';
        echo 'some code ...';
        echo 'some code ...';
    }

    // Solution
    if ($a <= 11) {
        return null;
    }

    echo 'some code ...';
    echo 'some code ...';
    echo 'some code ...';
    echo 'some code ...';
    if ($a > 14) {
        echo "some code ...";
        echo "some code ...";
        echo "some code ...";
    }
    echo 'some code ...';
    echo 'some code ...';
    echo 'some code ...';
}

// NOTE: When we don't specific return for function, the function by default return null.

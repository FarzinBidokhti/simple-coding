<?php

function submit($item)
{
    // Problem
    if ($item > 1) {
        echo "item 1";
        echo "item 2";
        echo "item 3";
        echo "item 4";
        echo "item 5";
        echo "item 6";
        echo "item 7";
        echo "item 8";

        return true;
    } else {
        return false;
    }

    // solution (this work called flip if)
    if ($item <= 1) {
        return false;
    }

    echo "item 1";
    echo "item 2";
    echo "item 3";
    echo "item 4";
    echo "item 5";
    echo "item 6";
    echo "item 7";
    echo "item 8";

    return true;
}

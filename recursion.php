<?php
function factorial($n)
{
    if ($n == 0) {
        return 1;
    } else {
        return $fact = $n * factorial($n - 1);
    }

}
echo factorial(5);

// n! = 1 * 2 * 3 * ... * n
<?php
// Порівняння без врахування регистру символів рядків
function my_cmp($a, $b) {
    $a = strtoupper($a); // переведення до верхнього регистру $a
    $b = strtoupper($b);// переведення до верхнього регистру $b
    if ($a > $b)
        return 1;
    if ($a == $b)
        return 0;
    else
        return -1;
}

$arr = array("M", "a", "r", "y");
uasort($arr, "my_cmp"); // Сортування без урахування регістру символів. 
print_r($arr);

function my_walk($a) {
    echo strtoupper($a);// Застосовується до кожного елемента
}

array_walk($arr, "my_walk");

function my_case($a) {
    return strtoupper($a);
}


$new_arr = array_map("my_case", $arr);
print_r($new_arr);
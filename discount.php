<?php

function discount1($price) {
    return $price - 20;
}

function discount2($price) {
    return $price / 2;
}

function getPrice($discount = null) {
    $price = 100;
    if (isset($discount))
        $price = call_user_func($discount, $price);
    return $price;
}

echo "Ціна: \$" . getPrice() . "\n";
echo "Ціна зі знижкою: \$" . getPrice('discount1') . "\n";
echo "Ціна зі знижкою по акції: \$" . getPrice('discount2') . "\n";
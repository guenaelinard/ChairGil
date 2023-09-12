<?php


function addTVA($price)
{
    return $price * 1.2;
}

function discountedPrice($price, $discount)
{
    return addTVA($price) - ((addTVA($price) * $discount) / 100);
}

function priceExcludingVAT($ttc)
{
    $ht = (100 * $ttc) / (100 + 20);
    return ($ht);
}

function total($price, $quantity)
{
    return $price * $quantity;
}


function formatPrice($price)
{
    return (number_format($price * 0.01, 2, ",", ""));
}

// function weightDelivery($weight, $delivery){
//     if ($delivery === $deliveryID){

//     }
// }
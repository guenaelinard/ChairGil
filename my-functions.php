<?php

function formatPrice($price){
    return(number_format($price * 0.01, 2, ",", ""));
}

function addTVA($price):string{
    return formatPrice($price) * 1.2;
}

function discountedPrice($price,$discount){
    return addTVA($price) - ((addTVA($price) * $discount)/100);
}

function priceExcludingVAT( $ttc){
    $ht = (100 * formatPrice($ttc))/(100 + 20);
    return($ht);
}

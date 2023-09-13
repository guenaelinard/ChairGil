<?php
function getDeliveries()
{
    return [
        [
            "id" => "0",
            "name" => "Massimo Express",
        ],
        [
            "id" => "1",
            "name" => "JB Parcels",
        ],
        [
            "id" => "2",
            "name" => "Rayane Air",
        ],
    ];
}

function getDelivery($deliveryID)
{
    $deliveries= getDeliveries();
    foreach ($deliveries as $delivery)
        if ($delivery['id'] === $deliveryID) {
            return $delivery;
        }
}


function weightDelivery($delivery, $product, $quantity, $total)
{
    if ($delivery["id"] === "0") {
        if ($product['weight'] * $quantity <= 2) {
            return  5;
        } elseif ($product['weight'] * $quantity <= 5) {
            return  $total * 0.10;
        }
        else {
            return 0;
        }
    } elseif ($delivery["id"] === "1") {
        if ($product['weight'] * $quantity <= 2) {
            return  4.99;
        } elseif ($product['weight'] * $quantity <= 5) {
            return  $total * 0.5;
        } else {
            return 40000;
        }
    } elseif ($delivery["id"] === "2") {
        if ($product['weight'] * $quantity <= 2) {
            return  1990;
        } elseif ($product['weight'] * $quantity <= 5) {
            return  $total * 0.8;
        } else {
            return  $total * 4;
        }
    }
}

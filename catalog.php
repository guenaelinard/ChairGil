<?php
function getProducts()
{
    return [
        [
            "id" => "0",
            "name" => "Chaise de Jardin",
            "price" => 12500,
            "weight" => 300,
            "discount" => 50,
            "picture_url" => "https://action.com/hostedassets/CMSArticleImages/17/29/3009923_8711268678628-111_02.png",
        ],
        [
            "id" => "1",
            "name" => "Chaise de Gaming",
            "price" => 10000,
            "weight" => 450,
            "discount" => null,
            "picture_url" => "https://spiritofgamer.com/281-thickbox_default/demon.jpg",
        ],
        [
            "id" => "2",
            "name" => "Chaise de Bureau",
            "price" => 15000,
            "weight" => 400,
            "discount" => 5,
            "picture_url" => "https://selsey.fr/public/upload/sellasist_cache/thumb_large_eff6ae30d50c7bc8016de3bb68f86245.png"
        ],
        [
            "id" => "3",
            "name" => "Chaise de Camping",
            "price" => 7500,
            "weight" => 150,
            "discount" => 1,
            "picture_url" => "https://fbr.etailercdn.de/media/pimg/12/122737/640530_101_122737_A.png",
        ],
        [
            "id" => "4",
            "name" => "Chaise de Repos",
            "price" => 50000,
            "weight" => 15000,
            "discount" => 30,
            "picture_url" => "https://ae01.alicdn.com/kf/S1af6f763491f43f39ece975c2f4de610r.jpg?width=729&height=624&hash=1353",
        ],
        [
            "id" => "5",
            "name" => "Chaise Home Cinéma",
            "price" => 999900,
            "weight" => 10000,
            "discount" => null,
            "picture_url" => "https://val-meubles.com/wp-content/uploads/2022/06/IMG_5555.png",
        ],
    ];
}

function getProduct($id)
{
    $products = getProducts();
    foreach ($products as $product) {
        if ($product['id'] === $id) {
            return $product;
        }
    }
}

<?php
// Souvent on identifie cet objet par la variable $conn ou $db
try {
    $mysqlConnection = new PDO(
        'mysql:host=localhost;dbname=ecommercedb;charset=utf8',
        'guena.ina',
        'password'
    );
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$addProducts1 = $mysqlConnection->prepare("UPDATE `products` SET `quantity` = `quantity`+100 WHERE `id`= 1");

$listProducts = $mysqlConnection->prepare('SELECT * from products');

$checkOrders = $mysqlConnection->prepare('SELECT number, SUM(products.price*order_product.quantity)
                            FROM orders
                            INNER JOIN order_product ON order_product.order_id = orders.id
                            INNER JOIN products ON order_product.product_id = products.id
                            GROUP BY order_id');

$checkOrders->execute();
$orders = $checkOrders->fetchAll();
foreach ($orders as $order) {
    echo 'commande n° ', $order['number'], '<br>';
}

echo '<br>';

$listProducts->execute();
$addProducts1->execute();
$products = $listProducts->fetchAll();
foreach($products as $product){
    echo $product['name'], ' ', $product['price'], ' €', '<br>';
    echo 'le  stock du produit '. $product['name']. ' est de : '. $product['quantity']. '<br>';
}

echo '<br>';


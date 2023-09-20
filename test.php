<?php
// Souvent on identifie cet objet par la variable $conn ou $db
try {
    $mysqlConnection = new PDO(
        'mysql:host=localhost;dbname=ecommercedb;charset=utf8',
        'guena.ina',
        'Shiney-galopa-ponyta-38@'
    );
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$addTabouret = $mysqlConnection->prepare("INSERT INTO `products`(`id`, `name`, `description`, `price`, `weight`, `available`, `quantity`, `url`, `categories_id`) VALUES ('7','Tabouet','le siège qui fait mal au fessier.','25','700','1','49','https://www.tabouret-bois.fr/images/stories/virtuemart/product/Tabourets_ronds__4f9a86de35aaa.png','1'");
$addTabouret->execute();

$deleteTabouret = $mysqlConnection->prepare('DELETE FROM "products" WHERE "name" ="tabouret"');
foreach($products as $product){
    if($product['id']=== 7){
        $deleteTabouret->execute();
    }
}

// SELECT last_insert_id() //


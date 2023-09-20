<?php
include 'my-functions.php';
include 'header.php';
include 'catalog.php';

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

// $addTabouret = $mysqlConnection->prepare("INSERT INTO `products`(`id`, `name`, `description`, `price`, `weight`, `available`, `quantity`, `url`, `categories_id`) VALUES ('7','Tabouet','le siège qui fait mal au fessier.','25','700','1','49','https://www.tabouret-bois.fr/images/stories/virtuemart/product/Tabourets_ronds__4f9a86de35aaa.png','1'");
// $addTabouret->execute();

// $deleteTabouret = $mysqlConnection->prepare('DELETE FROM "products" WHERE "name" ="tabouret"');
// foreach($products as $product){
//     if($product['id']=== 7){
//         $deleteTabouret->execute();
// }
// }

// SELECT last_insert_id() //


class Item
{
    public int $id;
    public string $name;
    public string $description;
    public string $price;
    public int $weight;
    public int $available;
    public int $quantity;
    public string $url;
    public int $categories_id;
    public int $discount;
    public function __construct(int $id, string $name, string $description, int $price, int $weight, int $available, int $quantity, string $url, int $categories_id, int $discount)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->weight = $weight;
        $this->available = $available;
        $this->quantity = $quantity;
        $this->url = $url;
        $this->categories_id = $categories_id;
        $this->discount = $discount;
    }
}

$item = new Item(1, 'test', 'miaou', 5, 500, 0, 0, 'https://staticdelivery.nexusmods.com/mods/2751/images/thumbnails/798/798-1600863312-1511229545.jpeg', 3, 100);

function displayItem($item)
{
    echo $item->name. '<br>';
    echo $item->price. '<br>';
    echo $item->weight. '<br>';
    echo $item->available. '<br>';
    echo $item->quantity. '<br>';?>
    <img src=<?php echo $item->url ?> alt="">
    <?php echo $item->discount;
}
displayItem($item);

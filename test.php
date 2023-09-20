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
    protected int $id;
    protected string $name;
    protected string $description;
    protected string $price;
    protected int $weight;
    protected int $available;
    protected int $quantity;
    protected string $url;
    protected int $categories_id;
    protected int $discount;
//     protected function __construct(int $id, string $name, string $description, int $price, int $weight, int $available, int $quantity, string $url, int $categories_id, int $discount)
//     {
//         $this->id = $id;
//         $this->name = $name;
//         $this->description = $description;
//         $this->price = $price;
//         $this->weight = $weight;
//         $this->available = $available;
//         $this->quantity = $quantity;
//         $this->url = $url;
//         $this->categories_id = $categories_id;
//         $this->discount = $discount;
//     }


    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id_)
    {
        $this->id = $id_;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name_)
    {
        $this->name = $name_;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description_)
    {
        $this->description = $description_;

        return $this;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($price_)
    {
        $this->price = $price_;

        return $this;
    }

    /**
     * Get the value of weight
     */ 
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set the value of weight
     *
     * @return  self
     */ 
    public function setWeight($weight_)
    {
        $this->weight = $weight_;

        return $this;
    }

    /**
     * Get the value of available
     */ 
    public function getAvailable()
    {
        return $this->available;
    }

    /**
     * Set the value of available
     *
     * @return  self
     */ 
    public function setAvailable($available_)
    {
        $this->available = $available_;

        return $this;
    }

    /**
     * Get the value of quantity
     */ 
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set the value of quantity
     *
     * @return  self
     */ 
    public function setQuantity($quantity_)
    {
        $this->quantity = $quantity_;

        return $this;
    }


    /**
     * Get the value of url
     */ 
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set the value of url
     *
     * @return  self
     */ 
    public function setUrl($url_)
    {
        $this->url = $url_;

        return $this;
    }

    /**
     * Get the value of categories_id
     */ 
    public function getCategories_id()
    {
        return $this->categories_id;
    }

    /**
     * Set the value of categories_id
     *
     * @return  self
     */ 
    public function setCategories_id($categories_id_)
    {
        $this->categories_id = $categories_id_;

        return $this;
    }

    /**
     * Get the value of discount
     */ 
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Set the value of discount
     *
     * @return  self
     */ 
    public function setDiscount($discount_)
    {
        $this->discount = $discount_;

        return $this;
    }
}

$item = new Item(1, 'test', 'miaou', 5, 500, 1, 2, 'https://staticdelivery.nexusmods.com/mods/2751/images/thumbnails/798/798-1600863312-1511229545.jpeg', 3, 100);

function displayItem($item)
{
    echo $item->name. '<br>';
    echo $item->price. '<br>';
    echo $item->weight. '<br>';
    echo $item->available. '<br>';
    echo $item->quantity. '<br>';?>
    <img src=<?php echo $item->url ?> alt="">
    <?php echo $item->discount;
    var_dump($item);
}
displayItem($item);
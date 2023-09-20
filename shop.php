<?php
include 'my-functions.php';
include 'header.php';
include 'catalog.php'
?>

<div class="shop">
    <?php if (isset($_POST['inscription'])) {
        extract($_POST);
        echo 'Bienvenue ' . $first_name . " " . $last_name;
        $addCustomers = $mysqlConnection->prepare('INSERT INTO customers VALUES(0, :first_name, :last_name, :address, :zipcode, :city)');
        $addCustomers->execute(
            array(
                "first_name" => $first_name,
                "last_name" => $last_name,
                "address" => $address,
                "zipcode" => $zipcode,
                "city" => $city

            )
        );
        $reponse = $addCustomers->fetchAll(PDO::FETCH_ASSOC);
    }

    foreach (getProducts($mysqlConnection) as $product) : ?>
        <?php $priceTTC = (float) addTVA($product['price']);
        $priceDiscount = (float)discountedPrice($product['price'], $product['discount']);
        $priceHT = (float) priceExcludingVAT($product['price']); ?>
        <div class="product">
            <div>
                <h2><?php echo $product['name'];
                    ?>
                </h2>
                <p> Prix TTC : <?php echo formatPrice($priceTTC) . "€";
                                ?>
                </p>
                <p> Prix HT : <?php echo formatPrice($priceHT) . "€";
                                ?>
                </p>
                <p class="discount">
                    <?php if ($product["discount"] !== null) :
                        echo "Promo de " . $product['discount'] . "% : " . formatPrice($priceDiscount) . "€";
                    ?>
                    <?php endif; ?>
                </p>
                <form action="cart.php" method="POST">
                    <label for="quantity">Quantité</label>
                    <select class="buy_num" name="quantity" id="quantity">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    <input type="hidden" name="id" value="<?php echo $product['id'] ?>">
                    <button class="buy_button" type="submit">Ajouter au Panier</button>
                </form>
            </div>
            <img src="<?php echo $product["url"] ?>">
        </div>
    <?php endforeach; ?>
</div>
<?php include 'footer.php' ?>
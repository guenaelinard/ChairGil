<?php include 'my-functions.php';
include 'catalog.php';
include 'header.php' ?>

<div class="shop">

    <?php foreach ($products as $product) : ?>
        <?php $priceTTC = addTVA($product['price']);
        $priceDiscount = discountedPrice($product['price'], $product['discount']);
        $priceHT = priceExcludingVAT($product['price']); ?>
        <div class="product">
            <div>
                <h2><?php echo $product['name'];
                    ?>
                </h2>
                <p> Prix TTC : <?php echo $priceTTC . "€";
                                ?>
                </p>
                <p> Prix HT : <?php echo $priceHT . "€";
                                ?>
                </p>
                <p class="discount">
                    <?php if ($product["discount"] !== null) :
                        echo "Promo de " . $product['discount'] . "% : " . $priceDiscount . "€";
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
                    <input type="hidden" name="productID" id="productID" value="<?php echo $product['id'] ?>">
                    <button class="buy_button" type="submit">Ajouter au Panier</button>
                </form>
            </div>
            <img src="<?php echo $product["picture_url"] ?>">
        </div>
    <?php endforeach; ?>
</div>
<?php include 'footer.php' ?>
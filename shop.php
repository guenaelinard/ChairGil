<?php include 'my-functions.php';

$products = [
    [
        "name" => "Chaise de Jardin",
        "price" => 12500,
        "weight" => 300,
        "discount" => 50,
        "picture_url" => "https://action.com/hostedassets/CMSArticleImages/17/29/3009923_8711268678628-111_02.png",
    ],
    [
        "name" => "Chaise de Gaming",
        "price" => 10000,
        "weight" => 450,
        "discount" => null,
        "picture_url" => "https://spiritofgamer.com/281-thickbox_default/demon.jpg",
    ],
    [
        "name" => "Chaise de Bureau",
        "price" => 15000,
        "weight" => 400,
        "discount" => 5,
        "picture_url" => "https://selsey.fr/public/upload/sellasist_cache/thumb_large_eff6ae30d50c7bc8016de3bb68f86245.png"
    ],
    [
        "name" => "Chaise de Camping",
        "price" => 7500,
        "discount" => 1,
        "picture_url" => "https://fbr.etailercdn.de/media/pimg/12/122737/640530_101_122737_A.png",
    ],
    [
        "name" => "Chaise de Repos",
        "price" => 50000,
        "discount" => 30,
        "picture_url" => "https://ae01.alicdn.com/kf/S1af6f763491f43f39ece975c2f4de610r.jpg?width=729&height=624&hash=1353",
    ],
    [
        "name" => "Chaise Home Cinéma",
        "price" => 999900,
        "discount" => null,
        "picture_url" => "https://val-meubles.com/wp-content/uploads/2022/06/IMG_5555.png",
    ],
];
?>



<?php include 'header.php' ?>

<div class="shop">

    <?php foreach ($products as $product) : ?>
        <div class="product">
            <div>
                <h2><?php echo $product['name'];
                    ?>
                </h2>
                <p> Prix TTC : <?php echo number_format(addTVA($product['price']), 2, ",", '') . "€";
                                ?>
                </p>
                <p> Prix HT : <?php echo number_format(priceExcludingVAT($product['price']), 2, ",", '') . "€";
                                ?>
                </p>
                <p>
                    <?php if ($product["discount"] !== null) :
                        echo "Promo de " . $product['discount'] . "% : " . number_format(discountedPrice($product['price'], $product['discount']), 2, ",", '') . "€";
                    ?>
                    <?php endif; ?>
                </p>
                <form action="cart.php" method="POST">
                <label for="quantity">Quantité</label>
                <select class="buy_num" name="quantity" id="quan">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <button class="buy_button">Ajouter au Panier</button>
                </form>
            </div>
            <img src="<?php echo $product["picture_url"] ?>">
        </div>
    <?php endforeach; ?>
</div>
<?php include 'footer.php' ?>
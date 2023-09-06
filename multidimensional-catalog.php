<?php include 'my-functions.php';

$products = [
    [
        "name" => "Chaise de Jardin",
        "price" => 12500,
        "weight" => 300,
        "discount" => 50,
        "picture_url" => "https://www.wadiga.com/28951-thickbox_default/fauteuil-de-jardin-en-plastique-gris-anthracite-55x60x81cm.jpg",
    ],
    [
        "name" => "Chaise de Gaming",
        "price" => 10000,
        "weight" => 450,
        "discount" => null,
        "picture_url" => "https://m.media-amazon.com/images/I/412xdJMZVrL.jpg",
    ],
    [
        "name" => "Chaise de Bureau",
        "price" => 15000,
        "weight" => 400,
        "discount" => 5,
        "picture_url" => "https://stefanodesign.fr/wp-content/uploads/2021/10/chaise-de-bureau-eames-ergonomique-confortable-dossier-haut-design-cuir-noir-replica-chaise-de-bureau-soft-pad-ea219-a-roulette2-.jpg"
    ],
];
?>



<?php include 'header.php' ?>

<div class="shop">
    <ul>
        <?php foreach ($products as $product) : ?>
            <li>
                <h2><?php echo $product['name'];
                    ?>
                </h2>
                <p> Prix TTC : <?php echo number_format(addTVA($product['price']), 2, ",", ''), "€";
                                ?>
                </p>
                <p> Prix HT : <?php echo number_format(priceExcludingVAT($product['price']), 2, ",", ''), "€";
                                ?>
                </p>
                <p>
                    <?php if ($product["discount"] !== null) :
                        echo "Promo de ", $product['discount'], "% : ", number_format(discountedPrice($product['price'], $product['discount']), 2, ",", ''), "€";
                    ?>
                    <?php endif; ?>
                </p>
                <img src="<?php echo $product["picture_url"] ?>" alt="Image chaise jardin plastique noire">
            </li>

        <?php endforeach; ?>
    </ul>
</div>
<?php include 'footer.php' ?>
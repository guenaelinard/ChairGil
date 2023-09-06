<?php include 'my-functions.php';

$products = [
    "name" => "Chaise de Jardin",
    "price" => 12500,
    "weight" => 300,
    "discount" => null,
    "picture_url" => "https://www.wadiga.com/28951-thickbox_default/fauteuil-de-jardin-en-plastique-gris-anthracite-55x60x81cm.jpg",
];

include 'header.php' ?>
<h2> <?php echo $products['name'];
        ?>
</h2>
<p> Prix TTC : <?php echo number_format(addTVA($products['price']), 2, ",", ''), "€";
                            ?>
            </p>
            <p> Prix HT : <?php echo number_format(priceExcludingVAT($products['price']), 2, ",", ''), "€";
                            ?>
            </p>
<img src="<?php echo $products["picture_url"] ?>" alt="Image chaise jardin plastique noire">
<footer class="footer"> <?php include 'footer.php' ?>
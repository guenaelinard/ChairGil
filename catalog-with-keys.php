<?php
$products = [
    "name" => "Chaise de Jardin",
    "price" => 125,
    "weight" => 300,
    "discount" => null,
    "picture_url" => "https://www.wadiga.com/28951-thickbox_default/fauteuil-de-jardin-en-plastique-gris-anthracite-55x60x81cm.jpg",
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos Produits</title>
    <link rel="stylesheet" href="styles.css">

</head>

<body>
    <header> <?php include 'header.php' ?></header>
    <h2> <?php echo $products['name'];
            ?>
    </h2>
    <p>Prix : <?php echo $products["price"];
                ?> €
    </p>
    <img src="<?php echo $products["picture_url"] ?>" alt="Image chaise jardin plastique noire">
    <footer> <?php include 'footer.php' ?></footer>
</body>

</html>
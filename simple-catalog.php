<?php $products = ["Chaise de Jardin", "Chaise de Gaming", "Chaise de Bureau"];
sort($products);
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
    <? echo $products[0] ."\r"; // le \r ou \n permet un retour à la ligne
    echo $products[2];
    ?>
    <footer> <?php include 'footer.php' ?></footer>

</body>

</html>
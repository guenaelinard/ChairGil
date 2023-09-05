<?php $products = ["Chaise de Jardin", "Chaise de Gaming", "Chaise de Bureau"];
asort($products);
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
    <? echo $products[0] ."\r";
    echo $products[2];
    ?>
    <footer> <?php include 'footer.php' ?></footer>

</body>

</html>
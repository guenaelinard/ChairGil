<?php $products = ["Chaise de Jardin", "Chaise de Gaming", "Chaise de Bureau"];
sort($products);
?>

<header> <?php include 'header.php' ?></header>
<? echo $products[0] . "\r"; // le \r ou \n permet un retour à la ligne
echo $products[2];
?>
<footer> <?php include 'footer.php' ?></footer>
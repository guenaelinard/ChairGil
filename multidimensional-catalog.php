<?php $products = [
    [
        "name" => "Chaise de Jardin",
        "price" => 125,
        "weight" => 300,
        "discount" => null,
        "picture_url" => "https://www.wadiga.com/28951-thickbox_default/fauteuil-de-jardin-en-plastique-gris-anthracite-55x60x81cm.jpg",
    ],
    [
        "name" => "Chaise de Gaming",
        "price" => 100,
        "weight" => 450,
        "discount" => null,
        "picture_url" => "https://m.media-amazon.com/images/I/412xdJMZVrL.jpg",
    ],
    [
        "name" => "Chaise de Bureau",
        "price" => 150,
        "weight" => 400,
        "discount" => null,
        "picture_url" => "https://stefanodesign.fr/wp-content/uploads/2021/10/chaise-de-bureau-eames-ergonomique-confortable-dossier-haut-design-cuir-noir-replica-chaise-de-bureau-soft-pad-ea219-a-roulette2-.jpg"
    ],
];
?>



<?php include 'header.php' ?>

<?php foreach ($products as $product) {
    echo $product["name"], " ";
    echo $product["price"], "€ ";
} ?>

<?php for ($i = 0; $i <= 2; $i++) {
    echo $products[$i]["name"], " ";
} ?>

<?php $i = 0;
while ($i <= 2) {
    echo $products[$i]["name"], " ";
    echo $products[$i]["price"], " ";
    $i++;
} ?>

<?php 
$i = 0;
do{
    echo $products[$i]["name"], " ";
    echo $products[$i]["price"], " ";
    $i++;
}
while($i <=2);
?>
 <?php foreach ($products as $product): ?>
<div>
    <h2> <?php echo $product['name'];
            ?>
    </h2>
    <p>Prix : <?php echo $product["price"];
                ?> €
    </p>
    <img src="<?php echo $product["picture_url"] ?>" alt="Image chaise jardin plastique noire">


</div>
<?php endforeach; ?>
<?php include 'footer.php' ?>
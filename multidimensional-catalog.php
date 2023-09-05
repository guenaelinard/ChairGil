<?php $products = [
    "chaise_jardin" => [
        "name" => "Chaise de Jardin",
        "price" => 125,
        "weight" => 300,
        "discount" => null,
        "picture_url" => "https://www.wadiga.com/28951-thickbox_default/fauteuil-de-jardin-en-plastique-gris-anthracite-55x60x81cm.jpg",
    ],
    "chaise_gaming" => [
        "name" => "Chaise de Gaming",
        "price" => 100,
        "weight" => 450,
        "discount" => null,
        "picture_url" => "https://m.media-amazon.com/images/I/412xdJMZVrL.jpg",
    ],
    "chaise_bureau" => [
        "name" => "Chaise de Bureau",
        "price" => 150,
        "weight" => 400,
        "discount" => null,
        "picture_url" => "https://stefanodesign.fr/wp-content/uploads/2021/10/chaise-de-bureau-eames-ergonomique-confortable-dossier-haut-design-cuir-noir-replica-chaise-de-bureau-soft-pad-ea219-a-roulette2-.jpg"
    ],
];
?>


    <header> <?php include 'header.php' ?></header>
    <h2> <?php echo $products["chaise_jardin"]['name'];
            ?>
    </h2>
    <p>Prix : <?php echo $products["chaise_jardin"]["price"];
                ?> €
    </p>
    <img src="<?php echo $products["chaise_jardin"]["picture_url"] ?>" alt="Image chaise jardin plastique noire">
 
    <h3> <?php echo $products["chaise_gaming"]['name'];
            ?>
    </h3>
    <p>Prix : <?php echo $products["chaise_gaming"]["price"];
                ?> €
    </p>
    <img src="<?php echo $products["chaise_gaming"]["picture_url"] ?>" alt="Image chaise jardin gaming monster hunter">

    <h4> <?php echo $products["chaise_bureau"]['name'];
            ?>
    </h4>
    <p>Prix : <?php echo $products["chaise_bureau"]["price"];
                ?> €
    </p>
    <img src="<?php echo $products["chaise_bureau"]["picture_url"] ?>" alt="Image chaise bureau noire pro">

    <footer> <?php include 'footer.php' ?>

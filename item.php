<?php
$Nom = "Chaise de jardin"; //nom de l'objet
$Prix = 125; //Prix de l'objet
$photo = "library/chaise_jardin_black.jpg"; //chemin de la photo de l'objet
?>

<header> <?php include 'header.php' ?></header>
<body>
    <h1>Ceci est un test</h1>

    <?php echo $Nom; ?>

    <?php echo $Prix;
    echo "€"; ?>

    <img src="<?php echo $photo ?>" alt="Image chaise jardin plastique noire" />
    <footer> <?php include 'footer.php' ?></footer>

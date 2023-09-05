<?php
$Nom = "Chaise de jardin"; //nom de l'objet
$Prix = 125; //Prix de l'objet
$photo = "library/chaise_jardin_black.jpg"; //chemin de la photo de l'objet
?>

<?php include 'header.php' ?>
    <h1>Ceci est un test</h1>

    <?php echo $Nom; ?>

    <?php echo $Prix;
    echo "€"; ?>

    <img src="<?php echo $photo ?>" alt="Image chaise jardin plastique noire" />
<?php include 'footer.php' ?>

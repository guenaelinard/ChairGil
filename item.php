<?php
$Nom = "Chaise de jardin"; //nom de l'objet
$Prix = 125; //Prix de l'objet
$photo = "library/chaise_jardin_black.jpg"; //chemin de la photo de l'objet
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LA Chaise de jardin.</title>
</head>

<body>
    <h1>Ceci est un test</h1>

    <?php echo $Nom; ?>
    <?php echo $Prix;
    echo "€"; ?>
    <img src="<?php echo $photo ?>" alt="Notre meilleur produit." />
</body>

</html>
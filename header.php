<!DOCTYPE html>
<html lang="fr">

<?php
// Souvent on identifie cet objet par la variable $conn ou $db
try {
    $mysqlConnection = new PDO(
        'mysql:host=localhost;dbname=ecommercedb;charset=utf8',
        'guena.ina',
        'Shiney-galopa-ponyta-38@'
    );
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>ChairGil™</title>
</head>

<body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
    <header class="header">
        <h1>ChairGil</h1>
        <ul class="nav nav-underline">
            <li class="nav-item">
                <a class="nav-link" style="color: black;" href="#">Accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: black;" href="shop.php">Nos Produits</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color : black;" href="cart.php">Panier</a>
            </li>
        </ul>
    </header>

    <div class="main">
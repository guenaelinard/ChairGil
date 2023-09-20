<?php
include 'my-functions.php';
include 'header.php';
include 'catalog.php'; 
?>

<form action="shop.php" method="POST">
    <label for="first_name">Prénom</label>
    <input type="text" id="first_name" name="first_name" placeholder="Entrez votre prénom..." required>
    <br>
    <label for="last_name">Nom</label>
    <input type="text" id="last_name" name="last_name" placeholder="Entrez votre nom..." required>
    <br>
    <label for="address">Adresse</label>
    <input type="text" id="address" name="address" placeholder="Entrez votre adresse..." required>
    <br>
    <label for="zipcode">Code postal</label>
    <input type="text" id="zipcode" name="zipcode" placeholder="Entrez votre code postal..." required>
    <br>
    <label for="city">Ville</label>
    <input type="text" id="city" name="city" placeholder="Entrez votre ville..." required>
    <br>
    <input type="submit" value="S'inscrire" name="inscription">
</form>

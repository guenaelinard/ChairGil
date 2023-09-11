<?php include 'my-functions.php';
include 'catalog.php';
include 'header.php' ?>

<!-- <?php var_dump($products) ?> -->
<table>
    <thead>
        <th>
            <p>Votre Panier</p>
            <tr>
                <th>Produit</th>
                <th>Prix unitaire</th>
                <th >Prix Après Réduction</th>
                <th>Quantité</th>
                <th>Total</th>
            </tr>
        </th>
    </thead>
    <tbody>
        <tr>
        <?php foreach ($products as $product) :
            if ((int)$_POST['productID'] === $product['id']){
                echo addTVA($product['name']);
                echo discountedPrice($product['price'], $product['discount']);
                echo $_POST('quantity');}
        ?>
            </tr>

        <?php endforeach; ?>
    </tbody>
</table>
<?php include 'footer.php' ?>
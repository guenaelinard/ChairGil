<?php include 'delivery.php';
include 'my-functions.php';
include 'header.php';
include 'catalog.php';

if(isset($_POST['id'])){
    extract($_POST);
$id = $_POST['id'];
$quantity = $_POST['quantity'];
$product_panier = getProduct($mysqlConnection);
$priceTTC = (float) addTVA($product_panier['price']);
$priceDiscount = (float) discountedPrice($product_panier['price'], $product_panier['discount']);
$fees = 0;
$total = (float)total(discountedPrice($product_panier['price'], $product_panier['discount']), $quantity);
$priceHT = priceExcludingVAT($total);
$TVA = $total - $priceHT;
// } else {
//     echo "Votre panier est vide.";
}

if (isset($_POST['deliveryID'])) {
    $deliveryID = $_POST['deliveryID'];
    $delivery = getDelivery($deliveryID);
    $fees = weightDelivery($delivery, $product_panier, $quantity, $total);
}
?>


<table class="cart">
    <thead>
        <tr>
            <th>Votre Panier</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>Produit</th>
            <th>Prix unitaire</th>
            <th>Prix Après Réduction</th>
            <th>Quantité</th>
            <th>Total</th>
        </tr>
        <td>
            <?php echo $product_panier['name'] ?>
        </td>
        <td>
            <?php echo formatPrice($priceTTC) . "€"; ?>
        </td>
        <td>
            <?php if ($product_panier['discount'] !== null) {
                echo formatPrice($priceDiscount) . "€";
            } else {
                echo "Aucune réduction disponible";
            }
            ?>
        </td>
        <td>
            <?php echo $quantity; ?>
        </td>
        <td>
            <?php echo formatPrice($total) . "€" ?>
        </td>
        <tr>
            <td colspan="3">Total HT</td>
            <td><?php echo formatPrice($priceHT) . "€" ?></td>
        </tr>
        <tr>
            <td colspan="3">TVA</td>
            <td><?php echo formatPrice($TVA) . "€" ?></td>
        </tr>
        <tr>
            <td colspan="3">Total TTC</td>
            <td><?php echo formatPrice($total) . "€" ?></td>
        </tr>
        <tr>
            <td>
                <form action="cart.php" method="POST">
                    <label for="delivery">Choix du transporteur</label>
            </td>
            <td>
                <select name="deliveryID">
                    <option disable selected hidden>Choix du transporteur</option>
                    <option value="0">Massimo Express</option>
                    <option value="1">JB Parcels</option>
                    <option value="2">Rayane Air</option>
                </select>
                <input type="hidden" name="id" value="<?php echo $_POST['id'] ?>">
                <input type="hidden" name="quantity" value="<?php echo $_POST['quantity'] ?>">
                <button class="buy_button" type="submit">Sélectionner</button>
                </form>

            </td>
            <td>Frais de port :</td>
            <td><?php echo formatPrice($fees, 2, ",", "") . " €" ?></td>
            <td><?php echo formatPrice($total + $fees) . " €" ?></td>
        </tr>
        <!-- <?php var_dump($_POST); ?> -->
    </tbody>
</table>
<?php include 'footer.php' ?>
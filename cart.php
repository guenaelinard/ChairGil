<?php include 'catalog.php';
include 'my-functions.php';
include 'header.php';

$id = $_POST['id'];
$quantity = $_POST['quantity'];


$product_panier = getProduct($id);

$priceTTC = (float) addTVA($product_panier['price']);
$priceDiscount = (float) discountedPrice($product_panier['price'], $product_panier['discount']);
// $priceHT = (float) priceExcludingVAT($product_panier['price']);
$total = (float)total(discountedPrice($product_panier['price'], $product_panier['discount']), $quantity);
$priceHT = priceExcludingVAT($total);
$TVA = $total - $priceHT;
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
            <?php if ($product_panier['discount'] !== null) :
                echo formatPrice($priceDiscount) . "€"; ?>
            <?php endif; ?>
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
                    <select name="delivery">
                        <option value="1"></option>
                    </select>
                </form>
            </td>
        </tr>

    </tbody>
</table>
<?php include 'footer.php' ?>
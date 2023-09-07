<?php include 'my-functions.php';

$products = ["Chaise de Jardin", "Chaise de Gaming", "Chaise de Bureau"];
sort($products);


include 'header.php';

foreach($products as $product){
    echo "Boucle For Each ". $product. "<br>";
}

$i = 0;
while ($i != count($products)) {
    if($i == 1){

    }
    echo "Boucle While ". reset($products). "<br>";
    echo "Boucle While ". end($products). "<br>";
    $i++;
}

for ($count = 0; $count < count($products) ; $count++){
    echo "Boucle For ". $products[$count]. "<br>";
}

do{
    echo "Boucle DoWhile ". $products[$i-1]. "<br>";
    $i++;
}
while($i < count($products));

include 'footer.php' ?>


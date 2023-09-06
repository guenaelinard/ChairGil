<?php $products = ["Chaise de Jardin", "Chaise de Gaming", "Chaise de Bureau"];
sort($products);


include 'header.php';

foreach($products as $product){
    echo $product, " ";
}

$i = 0;
while ($i <= 2) {
    echo $products[$i], " ";
    $i++;
}

for ($count = 0; $count <= 2 ; $count++){
    echo $products[$count], " ";
}

do{
    echo $products[$i], " ";
    $i++;
}
while($i <=2);

include 'footer.php' ?>
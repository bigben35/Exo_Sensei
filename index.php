<?php

require_once "Class/Panier.php";
require_once "Class/Pomme.php";
require_once "Class/Cerise.php";
require_once "Class/Poire.php";

include "common/header.php";
include "common/menu.php";
?>

<h1>Site e-commerce</h1>

<h2>Fruits :</h2>

<?php



$pomme = new Pomme();
// print_r($pomme)."<br>";
$cerise = new Cerise();
// print_r($cerise)."<br>";


$poire = new Poire();
// print_r($poire)."<br>";




$fruits = [$pomme, $cerise, $poire];

foreach($fruits as $fruit){
    echo $fruit;
    echo "<br>------------------------<br>";
}

?>

<?php

include "common/footer.php";


?>
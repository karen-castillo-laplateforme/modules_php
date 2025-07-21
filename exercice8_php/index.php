<?php
// EXERCICE 1
echo "EXERCICE 1 <br>";

$chaine = "12,5,abc,32,-7,42";

$chaineToArray = explode(",", $chaine);
echo is_array($chaineToArray) ? "array" : "not an array";
var_dump($chaineToArray);

$numbersArray = [];

foreach($chaineToArray as $value){
    if(is_numeric($value)){
        $numbersArray[] = intval($value);
    }
}

echo var_dump($numbersArray);
echo "Le plus petit nombre de la liste est : " .min($numbersArray) ." et le plus grand nombre est : " . max($numbersArray);

// EXERCICE 2
echo "<br><br> EXERCICE 2 <br>";

$form = [
  "nom" => "   ",
  "age" => "28",
  "email" => ""
];

if(isset($form["nom"]) && !empty(trim($form["nom"]))){
echo "Nom valide. ";
} else {
    echo "Nom non valide. ";
}

if(isset($form["age"]) && !empty(trim($form["age"])) && is_numeric($form["age"]) && $form["age"] > 0){
echo "Age valide. ";
} else {
    echo "Age non valide. ";
}

if(isset($form["email"]) && !empty(trim($form["nom"]))){
echo "Email valide. ";
} else {
    echo "Email non valide. ";
}

// EXERCICE 2
echo "<br><br> EXERCICE 3 <br>";

$panier = "Stylo:2.5, Cahier:4.25, gomme:abc, Table:42.99, chaise:14.9";
$panierArray = explode(",", $panier);
$panierTotal = 0;

foreach($panierArray as $item){
    $itemExplode = explode(":", $item);
    $name = trim(strtoLower($itemExplode[0]));
    $isNumeric = is_numeric($itemExplode[1]);
    $price = $itemExplode[1];
    if ($isNumeric){
        $newPanierArray[] = ["$name" =>"$price"];
        $numberValidProducts = count($newPanierArray);
        var_dump($newPanierArray);
        $panierTotal += $price;
        
        echo "Le nombre total des produits valides : $numberValidProducts. <br>";
        echo "Le prix total du panier est de : " . round($panierTotal, 2) . "€.";

    }
    
    

}


?>
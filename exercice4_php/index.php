<?php
// EXERCICE 1
$role = "admin";

if ($role == "admin") {
    echo "Accès complet autorisé <br>";
} elseif ($role == "éditeur"){
    echo "Accès limité aux modifications <br>";
  } elseif ($role == "visiteur") {
      echo "Accès lecture seule <br>";
} else {
    echo "Rôle inconnu";
};


switch($role){
    case "admin":
        echo "Accès complet autorisé <br>";
        break;
    case "éditeur":
        echo "Accès limité aux modifications <br>";
        break;
    case "visiteur":
        echo "Accès lecture seule <br>";
        break;
    default : "Rôle inconnu <br>";            
};

// EXERCICE 2
$jour = "lundi";

switch($jour){
    case "lundi":
    case  "mardi":
    case "mercredi":
    case "jeudi":
    case "vendredi":
      echo $jour ." est un jour ouvré <br>";
      break;
    case "samedi":
    case "dimanche":
      echo $jour ." c'est le weekend <br>";
      break;
    default:
      echo "Jour non reconnu <br>";                            
};

// EXERCICE 3
$status = "annulée";

$message = match($status){
    "en cours" => "Votre commande est en cours de traitement. <br>",
    "expédiée" => "Votre commande a été expédiée. <br>",
    "livrée" => "Votre commande a été livrée. <br>",
    "annulée" => "Votre commande a été annulée. <br>",
    default => "Statut inconnu <br>",
};
echo $message;

// EXERCICE 4
$temperature = 12;;

$message = $temperature < 10 ? "Froid <br>" : ($temperature > 20 ? "Chaud <br>" : "Doux <br>");
echo $message;

// EXERCICE 5
$size = "S";
const TVA = 0.20;
$prixHT = 0;


switch($size){
    
    case "S":
      $prixHT = 10;
    //   echo "Le prix du t-shirt de taille S est de " .(($prixHT * TVA) + $prixHT) ."€ TTC ($prixHT € HT + 20% TVA).<br>";
      break;
    case "M":
        $prixHT = 12;
        break;
    case "L":
        $prixHT = 14;
        break;
    case "XL":
        $prixHT = 16;
        break;
    default :
      echo "Taille inconnu <br>";
      exit(); 
}

$prixTTC = ($prixHT * TVA) + $prixHT;
    echo "Le prix du t-shirt de taille $size est de $prixTTC € TTC ($prixHT € HT + 20% TVA).<br>"; 

?>
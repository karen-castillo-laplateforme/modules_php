<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
//   EXERCICE 1
  echo "EXERCICE 1 <br>";

  $villes = ["Monaco", "Nantes", "Bordeaux", "Lille", "Marseille", "Lyon", "Paris", "Lens", "Montpellier", "Dieppe"];
  echo $villes[4];
  
  $villes[0] = "Nice";
  $villes[] = "Reims";

  echo "<br>" .count($villes) ."<br>";

  foreach ($villes as $ville) {
    echo $ville ."<br>";
  };

//   EXERCICE 2
  echo "<br>EXERCICE 2 <br>";

  $eleves = [
    "Alice"  => 15,
    "Benoît" => 9,
    "Claire" => 18,
    "David"  => 11
];

$ontMoyenne = 0;
foreach($eleves as $name => $note){
  echo "$name a obtenu $note/20. <br>";
  if($note >= 10){
    $ontMoyenne++;
  }
};
echo $ontMoyenne ." élèves ont la moyenne. <br>"; 

// EXERCICE 3
echo "<br>EXERCICE 3 <br>";

$produits = [
    ["nom" => "T-shirt", "prix" => 15, "stock" => 10],
    ["nom" => "Casquette", "prix" => 12, "stock" => 5],
    ["nom" => "Pull", "prix" => 25, "stock" => 8]
];

echo $produits[1]["stock"] ." casquettes en stock. <br>";

$produits[] = ["nom" => "Veste", "prix" => 40, "stock" => 25] ;
?>
<br>
<table>
    <thead>
      <tr>
      <th>Produit</th>
      <th>Prix</th>
      <th>Stock</th>
      <th>CA potentiel (prix*stock)</th>
      </tr>
    </thead>
 <?php
  foreach($produits as $produit){
    echo "
    <tr>
      <td>" . $produit["nom"] . "</td>
      <td>" . $produit["prix"] ." </td>
      <td>" . $produit["stock"] ." </td>
      <td>" . $produit["prix"]*$produit["stock"] ."</td>
     </tr>";
  }
  ?>
</table>

<!-- EXERCICE 4 -->
 <?php 
 echo "<br> EXERCICE 4<br>";
   $temperatures = [30, 32, 34, 30, 35, 34, 31];
   $result = 0;
   $moyenne = 0;

   foreach($temperatures as $temperature){
     $result += $temperature;
     
   }
   echo $result ."<br>";
   $moyenne = $result / count($temperatures);
   echo "La moyenne est de " .round($moyenne, 1). "°.<br>";


  //  EXERCICE 5
  echo "<br> EXERCICE 5<br>";
  const TVA = 0.2;
  
  $commandes = [
    ["client" => "Alice", "montant_ht" => 120, "statut" => "payée"],
    ["client" => "Bob", "montant_ht" => 75,  "statut" => "en attente"],
    ["client" => "Claire", "montant_ht" => 200, "statut" => "payée"],
    ["client" => "David", "montant_ht" => 50,  "statut" => "en attente"]
];

  $resultHT = 0;
  $resultTTC = 0;
  $notPayed = 0;

  foreach($commandes as $commande) {
    $client = $commande["client"];
    $montantHT = $commande["montant_ht"];
    $montantTTC = ($commande["montant_ht"]* TVA) + $commande["montant_ht"];
    $statut = mb_strtoupper($commande["statut"], "UTF-8") ;
    
    $resultHT += $montantHT;
    $resultTTC += $montantTTC;
    
    if($commande["statut"] === "en attente"){
      $notPayed += $montantHT;
    }

    echo "Commande de $client : $montantHT € HT, $montantTTC €TTC - $statut. <br>";
  }
    echo "Montant total HT : $resultHT €<br>";
    echo "Montant total TTC : $resultTTC €<br>";
    echo "Montant HT qui n'a pas encore été réglé : $notPayed €<br>";
    echo "Pourcentage du CA qui n'a pas encore été réglé : " .round(($notPayed*100)/$resultHT, 2) ."%.<br>";

     //  EXERCICE 6
  echo "<br> EXERCICE 6<br>";

  $eleves = [
    "Alice" => [
        "maths" => 15,
        "francais" => 14,
        "anglais" => 13
    ],
    "Bob" => [
        "maths" => 8,
        "francais" => 10,
        "anglais" => 11
    ],
    "Claire" => [
        "maths" => 18,
        "francais" => 17,
        "anglais" => 19
    ]
];

$sommeMath = 0;
$sommeFrançais = 0;
$sommeAnglais = 0;

foreach($eleves as $prénom => $eleveNotes){
  $moyenne = round(array_sum($eleveNotes)/count($eleveNotes),2);
  $appréciation = "";
  if($moyenne < 10){
    $appréciation = "Echec";
  }
  else if($moyenne >= 10 && $moyenne <12){
    $appréciation = "Peut mieux faire";
  }
  else if($moyenne >= 12 && $moyenne <15){
    $appréciation = "Bon travail";
  }
  else if($moyenne >= 15){
    $appréciation = "Excellent";
  }
  

  $sommeMath += $eleveNotes["maths"];
  $sommeFrançais += $eleveNotes["francais"];
  $sommeAnglais += $eleveNotes["anglais"];
  
  echo " $prénom a $moyenne de moyenne : $appréciation.<br>";

}

echo
  "
    La moyenne des notes en maths : " . round($sommeMath/count($eleves),2) ." <br>
    La moyenne des notes en français: " . round($sommeFrançais/count($eleves), 2) . "<br>
    La moyenne des notes en anglais :" . round($sommeAnglais/count($eleves), 2). "."
;
 ?>
</body>
</html>

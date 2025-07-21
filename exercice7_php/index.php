<?php 
// EXERCICE 1
echo "EXERCICE 1 <br>";

  function greeting(){
    echo "Hello world";
  }

  greeting();

//   EXERCICE 2
echo "<br><br>EXERCICE 2 <br>";

function afficherEtoile($nbr){
  for($i = 0; $i< $nbr; $i++){
    echo "*";
  };
  echo "<br>";
}

for($j = 9; $j <= 81; $j += 10) {
afficherEtoile($j);
} 

//EXERCICE 3

//TECHNIQUE 1
echo "<br><br>EXERCICE 3 <br>";

function calculImpots($revenu) {
    $impot = 0;

     if($revenu > 50000) { 
        $impot += ($revenu - 50000)*0.35;
        $revenu = 50000;
        }

      if($revenu > 35000){
        $impot += ($revenu - 35000)*0.25;
        $revenu = 35000;
        }

      if ($revenu > 20000){

        $impot += ($revenu - 20000)*0.18;
         $revenu = 20000;
          }  
                 
    if($revenu > 10000){
    
      $impot += ($revenu- 10000)*0.1;
        $revenu = 10000;
    }
       
        
     return $impot;
}

echo calculImpots(64000);

// TECHNIQUE 2
function calculImposable($revenu, $trancheMin, $trancheMax)
{
    // var_dump("execution fonction");
    return ($revenu > $trancheMax) ? ($trancheMax - $trancheMin) : ($revenu - $trancheMin);
}

function calculImpots2($revenu)
{
    $montant = 0;

    if ($revenu > 10000) {
        // 10%
        $imposable = calculImposable($revenu, 10000, 19999);
        $montant = $imposable * 0.1;
        // var_dump($montant);
    }

    if ($revenu > 20000) {
        // 18%
        $imposable = calculImposable($revenu, 20000, 34999);
        $montant += $imposable * 0.18;
        // var_dump($montant);


    }

    if ($revenu > 35000) {
        // 25%
        $imposable = calculImposable($revenu, 35000, 49999);
        $montant += $imposable * 0.25;
        // var_dump($montant);


    }

    if ($revenu > 50000) {
        // 35%
        $imposable = calculImposable($revenu, 50000, 9999999999999999999);
        $montant += $imposable * 0.35;
        // var_dump($montant);

    }

    return $montant;


}

// Calcul l’impôt si le revenu est de 16 000€

// Calcul l’impôt si le revenu est de 38 000€

// Calcul l’impôt si le revenu est de 64 000€
echo "l’impôt si le revenu est de 16 000€ et de "." ".calculImpots2(16000)."euro <br>";
echo "l’impôt si le revenu est de 38 000€ et de"." ". calculImpots2(38000)."euro <br>";
echo "l’impôt si le revenu est de 64 000€ et de"." ". calculImpots2(64000)."euro <br>";
echo "l’impôt si le revenu est de 70 000€ et de"." ". calculImpots2(70000)."euro <br>";
echo "l’impôt si le revenu est de 20 000€ et de "." ".calculImpots2(20000)."euro <br>";
echo "l’impôt si le revenu est de 24 000€ et de "." ".calculImpots2(24000)."euro <br>";

// EXERCICE 4
echo "<br> Exercice 4<br>";

$classe = [
    [
        "prenom" => "Lucie",
        "maths" => 12,
        "francais" => 14,
        "histoire" => 9
    ],
    [
        "prenom" => "Yann",
        "maths" => 8,
        "francais" => 10,
        "histoire" => 7
    ],
    [
        "prenom" => "Sophie",
        "maths" => 16,
        "francais" => 13,
        "histoire" => 15
    ]
];

function calculMoyenne($array){
    foreach($array as $key){
        $moyenneParEleve = ($key["maths"] + $key["francais"] + $key["histoire"])/count($key);
        $estAdmis = $moyenneParEleve >= 10 ? "est admis" : "n'est pas admis. <br>";
        echo $key["prenom"] ." a $moyenneParEleve de moyenne : $estAdmis";
        }
}

calculMoyenne($classe);

// EXERCICE 5
echo "<br><br> EXERCICE 5 <br>";
function affichePairOuImpair($nbrA, $nbrB, $pairOuImpair){
       
    for($i = $nbrA; $i<= $nbrB; $i++){
        if($i %2 === 0 && $pairOuImpair === "pair"){
            echo $i;
        }
        if($i %2 !== 0 && $pairOuImpair === "impair"){
          echo $i;
        }
    }
}
echo "Les chiffres pairs sont : ";
affichePairOuImpair(7,99, "pair");
echo "<br> Les chiffres impairs sont : ";
affichePairOuImpair(59,169, "impair");

// EXERCICE 6
echo "<br><br> EXERCICE 6 <br>";

function multiplication($nbr){
    for($i=1; $i<=10; $i++){
        echo "$nbr x $i = " .$nbr* $i ."<br>";
    }
}

multiplication(5);
?>
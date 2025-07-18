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

function calculImpots($revenu)
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
echo "l’impôt si le revenu est de 16 000€ et de "." ".calculImpots(16000)."euro <br>";
echo "l’impôt si le revenu est de 38 000€ et de"." ". calculImpots(38000)."euro <br>";
echo "l’impôt si le revenu est de 64 000€ et de"." ". calculImpots(64000)."euro <br>";
echo "l’impôt si le revenu est de 70 000€ et de"." ". calculImpots(70000)."euro <br>";
echo "l’impôt si le revenu est de 20 000€ et de "." ".calculImpots(20000)."euro <br>";
echo "l’impôt si le revenu est de 24 000€ et de "." ".calculImpots(24000)."euro <br>";

?>
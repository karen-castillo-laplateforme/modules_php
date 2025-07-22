<?php
$mdp = htmlspecialchars(trim($_POST["mdp"]), ENT_QUOTES);
$confirm_mdp = htmlspecialchars(trim($_POST["confirm_mdp"]), ENT_QUOTES);
$hash = password_hash($mdp, PASSWORD_DEFAULT).
var_dump($mdp);
var_dump($confirm_mdp);

if(empty($mdp) && empty($confirm_mdp)){
    echo "Mot de passe manquant.";
}
elseif($mdp !== $confirm_mdp){
 echo "Les deux mots de passe ne sont pas identiques.";
}
else {
  echo $hash;
}
// elseif($mdp === $confirm_mdp && strlen($mdp) <= 6){
//   echo "Mot de passe trop court.";
// } 
 
?>
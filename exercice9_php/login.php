<?php
$mdp = htmlspecialchars(trim($_POST["mdp"]), ENT_QUOTES);
$identifiant = htmlspecialchars(trim($_POST["identifiant"]), ENT_QUOTES);
var_dump($identifiant);
var_dump($mdp);
// Identifiants attendus
$identifiantEnregistre = 'admin';
// hash correspondant au mot de passe : "secret123"
$motdepasseHash = '$2y$10$8YJ7sUUnl.VUSfnQHzqmQOxvZkfm1ioni0VCK506dZvW3QWzeM6je';
$passwordVerified = password_verify($mdp,$motdepasseHash);

if($passwordVerified && $identifiant==="admin"){
  echo "Connexion réussie !";
}else {
  echo "Il y a une erreur dans l'identifiant ou le mot de passe.";
}
?>
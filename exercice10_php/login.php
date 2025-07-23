<?php
session_start();
$users = [
    'alice' => ['password' => '$2y$10$vf68y2j7JB3sz3OmFQe3vuxsoBrQuNBD9j59uIVnJqJ5TwX1xbPi2', 'role' => 'admin'],
    'bob'   => ['password' => '$2y$10$J/oJemQ34Non4rB3Gf6OeOSuFablci7XfXOXc3u1kS9c99u70.E2y', 'role' => 'editor'],
    'caroline' => ['password' => '$2y$10$S/YwX4j2U62ekgqpqOgZHOekkAqshyTnxS8gz3aejYe4OM35P4d2y', 'role' => 'user'],
];
// Identifiant alice  / Mot de passe : 123
// Identifiant bob / Mot de passe : 456
// Identifiant caroline / Mot de passe : 789

if($_SERVER["REQUEST_METHOD"] === "POST"){
  $identifiant = htmlspecialchars(trim($_POST["identifiant"]) ?? "",ENT_QUOTES);
  $mdp = htmlspecialchars(trim($_POST["mdp"]) ?? "", ENT_QUOTES);

 //Faire une boucle pour récupérer prénom + pswd
 foreach($users as $userName => $value){
  var_dump($userName);
  var_dump($value["password"]);
  var_dump($value["role"]);
  //Créer une variable qui va vérifier que $mdp === password du tableau
  $hashedPassword = $value["password"];
  $isPasswordValid = password_verify($mdp, $hashedPassword);
  $role = $value["role"];

  //Créer une condition si variable $isPasswordValid && $identifiant === prenom du tableau alors connexion réussi
  if($isPasswordValid && $identifiant === $userName){
    $_SESSION["utilisateur"] = $identifiant;
    $_SESSION["role"] = $role;
    header("Location: dashboard.php");
    exit;
  } else {
    header("Location: failed.php");
  }
}
 
 

}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form method="POST">
        <label for="identifiant">Identifiant : </label>
        <input type="text" id="identifiant" name="identifiant" required>
        <label for="mdp">Mot de passe</label>
        <input type="password" id="mdp" name="mdp" required>
        <button type="submit">Se connecter</button>
    </form>
</body>
</html>
<?php
session_start();
if(!isset($_SESSION["utilisateur"])){
    header("Location: login.php");
}
$firstname = $_SESSION["utilisateur"];
$role = $_SESSION["role"];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Bienvenue <?= $firstname?>, vous avez le rôle de : <?= $role?> </h1>
    <a href="logout.php">
        <button>Se déconnecter</button>
    </a>
</body>
</html>
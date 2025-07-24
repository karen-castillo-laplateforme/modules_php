<?php
$title= "Modules";
$css="modules.css";
require_once "./includes/header.php";

//variables
$modules = [
    "Module 1 : Introduction à PHP" => [ "Présentation de PHP", "Fonctionnement d’un serveur web", "Syntaxe de base","Variables et types","Insertion de PHP dans HTML" ],
    "Module 2 : Contrôle du flux" => ["Les conditions (if, else, switch)","Les boucles (for, while, foreach)","Les opérateurs de comparaison","Les opérateurs logiques","Les structures imbriquées"],
    "Module 3 : Fonctions et portée" => ["Déclaration de fonctions", "Arguments et valeurs par défaut", "Portée des variables (locale, globale)", "Fonctions anonymes", "Fichiers inclus (include, require)"],
    "Module 4 : Manipulation de formulaires" => ["Création de formulaires HTML", "Méthodes GET vs POST", "Récupération des données en PHP", "Validation des champs", "Sécurisation des entrées (htmlspecialchars, trim, etc.)"],
    "Module 5 : Sessions et cookies" => ["Utilisation de $ _SESSION", "Démarrer une session (session_start)", "Création et lecture de cookies", "Utilisation pratique (authentification)", "Destruction de session et de cookie"],
    "Module 6 : Introduction à la base de données (MySQL)" => ["Présentation de MySQL", "Connexion avec PDO", "Requêtes SELECT, INSERT, UPDATE, DELETE", "Sécurisation avec les requêtes préparées", "Affichage des résultats"],
];
?>

<main id="modules-main">
    
  <h1>Les modules</h1>
  <div>
  <?php foreach($modules as $module => $titles):  ?>
  <h2><?= $module ?></h2>
  <ul>
    <?php foreach($titles as $title): ?>
    <li><?= $title ?></li>
    <?php endforeach ?>
  </ul>
  <?php endforeach; ?>
  </div>
</main>

<?php
include "./includes/footer.php";
?>
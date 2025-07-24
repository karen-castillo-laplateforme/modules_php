<?php
$title= "Accueil";
$css= "index.css";
require_once "./includes/header.php";
?>

<main id="index-main">
  <h1>Bienvenue au programme PHP !</h1>
  <h2>Définition PHP</h2>
  <p>PHP: Hypertext Preprocessor, plus connu sous son sigle PHP (sigle auto-référentiel), est un langage de programmation libre, développé le 8 juin 1995 principalement utilisé pour produire des pages Web dynamiques via un serveur web, mais pouvant également fonctionner comme n'importe quel langage interprété de façon locale. PHP est un langage impératif orienté objet. <br><br> PHP a permis de créer un grand nombre de sites web célèbres, comme Facebook et Wikipédia. Il est considéré comme une des bases de la création de sites web dits dynamiques mais également des applications web.
  </p>
  <h2>A quoi ça sert ?</h2>
  <p>Comme mentionné précédemment, il s’agit d’un langage de script créé pour les communications côté serveur. Il peut donc gérer diverses fonctions côté serveur, telles que la collecte de données de formulaires, la gestion de fichiers sur le serveur, la modification de bases de données, et bien plus encore. <br><br>
Bien que le PHP soit considéré comme un langage de script à usage général, il est le plus largement utilisé pour le développement web. Cela est dû à l’une de ses caractéristiques exceptionnelles : la possibilité d’être intégré dans un fichier HTML.
</p>  
</main>

<?php
include "./includes/footer.php";
?>
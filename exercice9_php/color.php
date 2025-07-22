<?php
$color= trim($_POST["buttons"] ?? "");

  if($color === "rouge"){
// Autre façon de faire
// echo "<style>
//  h1 {
//  color : red;
//  }
// </style>";
    echo "<h1 style='color: red;'>" . "Vous avez choisi la couleur : $color" . "</h1>";
  }

    if($color === "vert"){
    echo "<h1 style='color: green;'>" . "Vous avez choisi la couleur : $color" . "</h1>";
  }
  if($color === "bleu"){
    echo "<h1 style='color: blue;'>" . "Vous avez choisi la couleur : $color" . "</h1>";
  }


  
?>
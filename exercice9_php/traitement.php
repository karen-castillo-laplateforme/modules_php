<?php

  $firstName = trim($_POST["firstName"] ?? "");
  $firstName = htmlspecialchars($firstName, ENT_QUOTES);
  var_dump($firstName) ;

  if($firstName === ""){
    echo "Le prénom est obligatoire !";
  } else {
    echo "Bonjour $firstName !";
  }
 ?>
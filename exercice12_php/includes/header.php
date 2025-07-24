<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? "Mon site" ?></title>
    <link rel="stylesheet" href="./assets/css/common.css">
    <?php if(!empty($css)): ?>
    <link rel="stylesheet" href="./assets/css/<?=htmlspecialchars($css) ?>">
    <?php endif; ?>
</head>
<body>
  <header>
    <div id="logoContainer">
    <h1>Mon mini-site</h1>
    <img src="./assets/images/new-php-logo.svg" alt="Logo PHP" >
    </div>
    
    <nav>
        <ul>
            <li><a href="./index.php">Accueil</a></li>
            <li><a href="./modules.php">Modules</a></li>
            <li><a href="./evaluation.php">Evaluation</a></li>
        </ul>
    </nav>
    
  </header> 
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="public/css/accueil.css">
  <link rel="shortcut icon" href="public/images/S-logo bière.webp" type="image/x-icon">
  <title><?= $page_title ?></title>
</head>

<body>
  <header>
    <nav>
      <ul>
        <a href="index.php?route=Boutique">
          <li>Bières</li>
        </a>
        <a href="index.php?route=Brasserie">
          <li>Brasserie</li>
        </a>
        <a id="Slogo" href="1-index.php"><img src="public/images/S-logo bière.webp" alt="logo" /></a>
        <a href="index.php?route=Apropos">
          <li>A propos</li>
        </a>
        <a href="index.php?route=Contact">
          <li>Contact</li>
        </a>
        <a href="index.php?route=Panier">
          <li> <img id="panier" src="public/images/paniers.png" alt="logo" /> Panier</li>
        </a>
      </ul>
    </nav>
  </header>

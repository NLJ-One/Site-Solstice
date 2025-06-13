<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>
  <link rel="stylesheet" href="css/accueil.css">
  <link rel="stylesheet" href="public/css/1Contact.css">
  <link rel="shortcut icon" href="public/images/S-logo bière.webp" type="image/x-icon">
</head>

<body>
  <main>
    <div id="Insta">
    <a href="https://www.instagram.com/solstice_beer/"><img src="public/images/instagram-logo-instagram-icon-transparent-free-png.webp" alt="Logo-Insta"></a>
    </div>
    <div class="main-contact">
<h1>Écrivez-nous !</h1>
<p>Un message, une idée, une question ? Par ici !</p>

<?php if (!empty($message)) echo $message; ?>

<form class="contact-form" method="post" action="index.php?route=Contact">
  <label for="nom">Nom</label>
  <input type="text" id="nom" name="nom">

  <label for="prenom">Prénom</label>
  <input type="text" id="prenom" name="prenom">

  <label for="email">Email</label>
  <input type="email" id="email" name="email">

  <label for="message">Message</label>
  <textarea id="message" name="message"></textarea>

  <button type="submit">Soumettre</button>
</form>
  </main>


<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>
  <link rel="stylesheet" href="css/accueil.css">
  <link rel="stylesheet" href="css/1Contact.css">
  <link rel="shortcut icon" href="images/S-logo bière.webp" type="image/x-icon">
</head>

<body>


  <nav>
    <ul>
      <a href="nosbieres.php">
        <li>Bières</li>
      </a>
      <a href="brasserie.php">
        <li>Brasserie</li>
      </a>
      <a id="Slogo" href="1-index.php"><img src="images/S-logo bière.webp" alt="logo" /></a>
      <a href="apropos.php">
        <li>A propos</li>
      </a>
      <a href="contact.php">
        <li>Contact</li>
      </a>
      <a href="Panier.php">
        <li> <img id="panier" src="images/paniers.png" alt="logo"/> Panier</li>
      </a>
    </ul>
  </nav>

  <main>
    <div id="Insta">
    <a href="https://www.instagram.com/solstice_beer/"><img src="/images/instagram-logo-instagram-icon-transparent-free-png.webp" alt="Logo-Insta"></a>
    </div>
    <div class="main-contact">
    <h1>Écrivez-nous !</h1>
    <p>Un message, une idée, une question ? Par ici !</p>
    <form class="contact-form">
      <label for="nom">Nom</label>
      <input type="text" id="nom" placeholder="Texte">

      <label for="prenom">Prénom</label>
      <input type="text" id="prenom" placeholder="Texte">

      <label for="email">Email</label>
      <input type="email" id="email" placeholder="Texte">

      <label for="message">Message</label>
      <textarea id="message" placeholder="Texte"></textarea>

      <button type="submit">Soumettre</button>
    </form>
    </div>
  </main>


  <footer class="footer">
    <div class="footer-content">
      <div class="footer-logo">
        <img src="images/S-logo bière.webp" alt="Logo Solstice">
      </div>
      <div class="footer-links">
        <div>
          <h3> <a href='nosbieres.php'>Nos bières</a></h3>
          <ul>
            <li>Nos coffrets</li>
            <li>Nos collaborations</li>
          </ul>
        </div>
        <div>
          <h3> <a href='brasserie.php'>Brasserie</a></h3>
          <ul>
            <li>L’histoire de notre brasserie</li>
            <li>Processus de fabrication</li>
            <li>Notre brasserie en images</li>
          </ul>
        </div>
        <div>
          <h3> <a href='apropos.php'>À propos</a></h3>
          <ul>
            <li>L’histoire de Solstice</li>
            <li>Nos valeurs</li>
            <li>Notre équipe</li>
            <li>Solstice en images</li>
          </ul>
        </div>
      </div>
      <div class="footer-bottom">
        <p>Conditions d'utilisation | Conditions générales de vente | Politique de confidentialité et de gestion des
          cookies</p>
      </div>
    </div>
  </footer>
</body>

</html>
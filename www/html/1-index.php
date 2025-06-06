<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Accueil</title>
  <link rel="stylesheet" href="css/accueil.css">
  <link rel="shortcut icon" href="images/S-logo bière.webp" type="image/x-icon">
</head>

<body>
  <header>
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
          <li> <img id="panier" src="images/paniers.png" alt="logo" /> Panier</li>
        </a>
      </ul>
    </nav>
  </header>
  <main>
      <div id="PI1">
        <img id="imgac" src="images/b orange.png" alt="bières" />
        <div id="PI1_1">
        <h1> Notre nouvelle bière Orangée</h1>
        <h2>Une bière avec un goût unique qui vous rappeleras l'été à chaque gorgée</h2>
        <h3 class="bouton"><a href="nosbieres.php">Acheter maintenant</h3></a>
      </div>
      </div>
    </div>

    <div id="PI2">
      <a href="nosbieres.php"><h1>Découvrez nos bières</h1></a>
      <img src="images/mockup-pack-orcopa.webp" alt="Bière-présentation" />
    </div>

    <div id="PI3">
      <div class="contact">
        <h1>Contactez-nous</h1>
        <form action="#" method="post">
          <label for="name">Nom</label>
          <input type="text" id="name" name="name" required>

          <label for="email">Email</label>
          <input type="email" id="email" name="email" required>

          <label for="message">Message</label>
          <textarea id="message" name="message" rows="5" required></textarea>

          <button type="submit">Envoyer</button>
        </form>
      </div>
      <img id="bf" src="images/B pomme.png" />
  </main>

  <footer class="footer">
    <div class="footer-content">
      <div class="footer-logo">
        <img src="images/S-logo bière.webp" alt="Logo Solstice">
      </div>
      <div class="footer-links">
        <div>
          <h3> <a href='nosbières.php'>Nos bières</a></h3>
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
            <li>Nos événements</li>
            <li>Visite de la brasserie</li>
            <li>Notre brasserie en images</li>
          </ul>
        </div>
        <div>
          <h3> <a href='apropos.php'>À propos</a></h3>
          <ul>
            <li>L’histoire de Solstice</li>
            <li>Nos valeurs</li>
            <li>Notre équipe</li>
            <li>Notre engagement environnemental</li>
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
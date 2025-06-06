<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <title>Notre Brasserie</title>
  <link rel="stylesheet" href="css/brasserie.css">
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

    <!-- Présentation -->
    <section id="presentation">
      <div class="text">
        <h1>Bienvenue dans notre brasserie artisanale</h1>
        <p>En collaboration avec le secteur de la biochimie nous avons observés attentivement la création de la
          bière et ce qu'elle donnait et représentait en tant que goût pour l'identité de la marque.
        </p>
        <p>Vous pourrez bientôt visiter nos locaux et découvrir le monde de Solstice.
        </p>
      </div>
      <img src="images/salle gb.png" alt="Salle de brassage" class="animated-img">
    </section>

    <section class="etape">
      <img src="images/E1.png" alt="Ingrédients" >
      <div class="texte-etape">
        <h2>1. Sélection des ingrédients</h2>
        <p>Tout commence avec des matières premières de qualité : orge, houblon, levures et eau. Nous sélectionnons
          uniquement des ingrédients naturels et locaux.</p>
      </div>
    </section>

    <section class="etape">
      <img src="images/E2.png" alt="Maltage" >
      <div class="texte-etape">
        <h2>2. Maltage</h2>
        <p>L'orge est humidifiée puis germée pour activer les enzymes. Ensuite, elle est séchée pour obtenir le malt,
          base aromatique de notre bière.</p>
      </div>
    </section>

    <section class="etape">
      <img src="images/E3.png" alt="Brassage" >
      <div class="texte-etape">
        <h2>3. Brassage</h2>
        <p>Le malt est concassé puis chauffé avec de l'eau pour extraire les sucres. On ajoute ensuite le houblon, pour
          l’amertume et les arômes.</p>
      </div>
    </section>

    <section class="etape">
      <img src="images/E4.png" alt="Fermentation" >
      <div class="texte-etape">
        <h2>4. Fermentation</h2>
        <p>Le moût est refroidi et les levures sont ajoutées. Pendant plusieurs jours, elles transforment les sucres en
          alcool et créent des arômes uniques.</p>
      </div>
    </section>


    <section id="galerie">
      <h2>Des infos en plus ?</h2>
      <div class="grid-galerie">
        <img src="images/cuves de fermentation.png" alt="Cuves de fermentation">
        <img src="images/blé.png" alt="Bar de dégustation">
        <img src="images/fruit.jpeg" alt="Ingrédients naturels">
      </div>
    </section>

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
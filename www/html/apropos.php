<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <title>A propos</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>À propos - Solstice </title>
  <link rel="stylesheet" href="css/accueil.css">
  <link rel="stylesheet" href="css/apropos.css">
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
        <li> <img id="panier" src="images/paniers.png" alt="logo" /> Panier</li>
      </a>
    </ul>
  </nav>
  <main class="about-section">
    <h1>À propos de Solstice Brasserie</h1>
    <div class="about-content">
      <img src="images/S-logo bière.webp" alt="Photo de la marque" class="about-image">
      <div class="about-text">
        <h2>Notre histoire</h2>
        <p>
          Solsice est une marque qui rassemble et saisonnière. L'histoire de la marque est parti sur un coup
          de tête entre deux amis qui voulait une marque pas comme les autres qui fait penser directement à
          l'été.

          C'est là qu'ils ont trouvé le nom de Solstice pour le pic de la journée avec le soleil qui reste le
          plus longtemps au soleil. De plus, ils se sont qu'une mascotte serait pas mal et elle même
          montrerait de la joie sans être trop sérieux.
        </p>
        <h2>Nos valeurs</h2>
        <p>
          Notre phrase qu'on dit tout le temps avec l'équipe est de profiter du moment présent que tu passes
          avec ton entourages ou les personnes.
          Nous voulons que chaque moment soit unique dans la joie et la détente.
        </p>
      </div>
    </div>

<div id="equipe">
  <section class="team-section">
    <h2>Notre Équipe</h2>

    <?php
    // Connexion à la base de données
    $host = 'mysql';
    $port = 3306;
    $dbname = 'Site_Solstice';
    $user = 'user';
    $pass = '';

    try {
      $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4";
      $pdo = new PDO($dsn, $user, $pass);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      // Récupération des membres de l'équipe
      $stmt = $pdo->query("SELECT nom, role, photo FROM equipe");

      $equipe_bio = [];
      $equipe_mmi = [];

      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        // Nettoyage des espaces ou caractères spéciaux
        $nom = trim($row['nom']);
        $role = trim($row['role']);
        $photo = trim($row['photo']);

        // Catégorisation
        if (
          str_contains(strtolower($role), 'fermentation') ||
          str_contains(strtolower($role), 'biochimie') ||
          str_contains(strtolower($role), 'brasserie') ||
          str_contains(strtolower($role), 'ingénieur')
        ) {
          $equipe_bio[] = ["nom" => $nom, "role" => $role, "photo" => $photo];
        } else {
          $equipe_mmi[] = ["nom" => $nom, "role" => $role, "photo" => $photo];
        }
      }

      // Fonction d'affichage
      function afficher_equipe($titre, $membres) {
        echo "<div class='team-category'>";
        echo "<h3>$titre</h3>";
        echo "<div class='team-list'>";
        foreach ($membres as $membre) {
          echo "<div class='team-member'>";
          echo "<img src='images/" . htmlspecialchars($membre['photo']) . "' alt='Photo de " . htmlspecialchars($membre['nom']) . "' class='team-photo'>";
          echo "<p><strong>Nom :</strong> " . htmlspecialchars($membre['nom']) . "</p>";
          echo "<p><strong>Rôle :</strong> " . htmlspecialchars($membre['role']) . "</p>";
          echo "</div>";
        }
        echo "</div></div>";
      }

      // Affichage des groupes
      afficher_equipe("Équipe Génie Biologique", $equipe_bio);
      afficher_equipe("Équipe Métiers du Multimédia et de l'Internet", $equipe_mmi);

    } catch (PDOException $e) {
      echo "<p>Erreur de connexion ou de requête : " . htmlspecialchars($e->getMessage()) . "</p>";
    }
    ?>
  </section>
</div>


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
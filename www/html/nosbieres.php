<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <title>Boutique</title>
  <link rel="stylesheet" href="css/accueil.css">
  <link rel="stylesheet" href="css/nosbieres.css">
  <link rel="shortcut icon" href="images/S-logo bière.webp" type="image/x-icon">
</head>

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
  <h2 id="titre">Nos bières</h2>
  <section id="beer">
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

      // Requête pour récupérer 5 bières uniques
      $stmt = $pdo->query("SELECT DISTINCT id, nom, prix, image, description FROM produit LIMIT 10");

      while ($biere = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $nomId = strtolower(str_replace(' ', '-', trim($biere['nom'])));
        ?>
        <section class="biere-section" id="biere-<?= htmlspecialchars($nomId) ?>">
          <img src="images/<?= htmlspecialchars($biere['image']) ?>" alt="<?= htmlspecialchars($biere['nom']) ?>">
          <h2><?= htmlspecialchars($biere['nom']) ?></h2>
          <p><?= htmlspecialchars($biere['description']) ?></p>
          <div class="price">Prix : <?= number_format($biere['prix'], 2) ?>€</div>
          <form action="Panier.php" method="post">
            <input type="hidden" name="id" value="<?= $biere['id'] ?>">
            <label for="quantite">Quantité :</label>
            <input type="number" name="quantite" value="1" min="1">
            <button type="submit">Ajouter au panier</button>
          </form>
        </section>
        <?php
      }

    } catch (PDOException $e) {
      echo "<p>Erreur de connexion ou de requête : " . htmlspecialchars($e->getMessage()) . "</p>";
    }
    ?>
  </section>
</main>






<?php
$coffrets = [
  ["id" => 101, "nom" => "Coffret Pococe", "prix" => 5.99, "image" => "mockup-pack-pococe.webp"],
  ["id" => 102, "nom" => "Coffret Orcopa", "prix" => 5.99, "image" => "mockup-pack-orcopa.webp"],
  ["id" => 103, "nom" => "Coffret Pacepo", "prix" => 5.99, "image" => "mockup-pack-pacepo.webp"],
];
?>

<section id="coffrets-beer">
  <h2>Nos Coffrets</h2>
  <div id="coffrets">
    <?php foreach ($coffrets as $coffret): ?>
      <div class="coffret">
        <img src="images/<?= $coffret['image'] ?>" alt="<?= htmlspecialchars($coffret['nom']) ?>">
        <div class="price">Prix : <?= number_format($coffret['prix'], 2) ?>€</div>
        <form action="Panier.php" method="post">
          <input type="hidden" name="id" value="<?= $coffret['id'] ?>">
          <input type="number" name="quantite" value="1" min="1">
          <button type="submit">Ajouter au panier</button>
        </form>
      </div>
    <?php endforeach; ?>
  </div>
</section>


<section id="collab">
  <h2>Nos collaborations</h2>
  <section id="collaborations">
    <p>Explorez nos collaborations exclusives avec des brasseries partenaires.</p>
    <img id="cci" src="images/collaboration.webp" alt="Collaborations" />
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
  </footer>
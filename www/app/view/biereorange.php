<<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <title><?= ($biere['nom']) ?></title>
  <link rel="stylesheet" href="public/css/accueil.css">
  <link rel="shortcut icon" href="public/images/S-logo bière.webp" type="image/x-icon">
  <link rel="stylesheet" href="public/css/page.css">
</head>

<body>
  <main>
    <section id="pagee">
        <div class="nombiere">
          <h1><?= ($biere['nom']) ?></h1>
          <img src="public/images/<?= ($biere['image']) ?>" alt="<?= ($biere['nom']) ?>" />
        </div>

        <div class="description">
            <h2>Description</h2>
            <p><?= nl2br(($biere['description'])) ?></p>
        </div>

        <!-- Exemple générique pour les caractéristiques techniques -->
        <div class="donneestechniques">
            <h2>Caractéristiques Techniques</h2>
            <ul>
                <li>Type : Blonde</li> <!-- Ici à adapter selon tes données si tu en as -->
                <li>Alcool : 5%</li>
                <li>Volume : 330ml</li>
                <li>Ingrédients : Eau, malt, houblon, levure, arômes naturels</li>
            </ul>
        </div>

        <div class="prix">
            <h2>Prix</h2>
            <p><?= number_format($biere['prix'], 2) ?> €</p>

            <!-- Formulaire d'ajout au panier -->
            <form action="index.php?route=Panier" method="post">
                <input type="hidden" name="id" value="<?= ($biere['id']) ?>">
                <label for="quantite">Quantité :</label>
                <input type="number" name="quantite" value="1" min="1">
                <button type="submit" class="panier">Ajouter au panier</button>
            </form>
        </div>
    </section>
  </main>
</body>

</html>

  <link rel="stylesheet" href="public/css/accueil.css">
    <link rel="stylesheet" href="public/css/pagesbieres.css">
      <link rel="shortcut icon" href="public/images/S-logo bière.webp" type="image/x-icon" />
<main>
  <section id="pagee">
    <img src="public/images/<?= ($biere['image']) ?>" alt="<?= ($biere['nom']) ?>" />

    <div class="infos-biere">
      <h1><?= ($biere['nom']) ?></h1>

      <p><?= nl2br(($biere['description'])) ?></p>

      <h2>Caractéristiques Techniques</h2>
      <ul>
        <?php foreach ($caracteristiques as $carac): ?>
          <li><?= ($carac['clef']) ?> : <?= ($carac['valeur']) ?></li>
        <?php endforeach; ?>
      </ul>

      <p class="prix">Prix : <?= number_format($biere['prix'], 2) ?> €</p>

      <form action="index.php?route=Panier" method="post">
        <input type="hidden" name="id" value="<?= ($biere['id']) ?>">
        <label for="quantite">Quantité :</label>
        <input type="number" name="quantite" value="1" min="1">
        <button type="submit" class="panier">Ajouter au panier</button>
      </form>
    </div>
  </section>
</main>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <title>Boutique</title>
  <link rel="stylesheet" href="public/css/accueil.css">
  <link rel="stylesheet" href="public/css/nosbieres.css">
  <link rel="shortcut icon" href="public/images/S-logo bière.webp" type="image/x-icon">
</head>

<main>
  <h2 id="titre">Nos bières</h2>
  <section id="beer">

    <?php if (isset($bieres['error'])): ?>
      <p>Erreur : <?= ($bieres['error']) ?></p>
    <?php elseif (!empty($bieres)): ?>
      <?php foreach ($bieres as $biere): 
        $nomId = strtolower(str_replace(' ', '-', trim($biere['nom'])));
      ?>
        <section class="biere-section" id="biere-<?= ($nomId) ?>">
          <img src="public/images/<?= ($biere['image']) ?>" alt="<?= ($biere['nom']) ?>">
          <h2><?= ($biere['nom']) ?></h2>
          <p><?= ($biere['description']) ?></p>
          <div class="price">Prix : <?= number_format($biere['prix'], 2) ?>€</div>

          <a href="index.php?route=Bieredetails&id=<?= urlencode($biere['id']) ?>" class="voir-plus">Voir plus</a>



          <form action="index.php?route=Panier" method="post">
            <input type="hidden" name="id" value="<?= ($biere['id']) ?>">
            <label for="quantite">Quantité :</label>
            <input type="number" name="quantite" value="1" min="1">
            <button type="submit">Ajouter au panier</button>
          </form>
        </section>
      <?php endforeach; ?>
    <?php else: ?>
      <p>Aucune bière disponible.</p>
    <?php endif; ?>

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
        <img src="public/images/<?= $coffret['image'] ?>" alt="<?= ($coffret['nom']) ?>">
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
    <img id="cci" src="public/images/collaboration.webp" alt="Collaborations" />
  </section>
  </main>

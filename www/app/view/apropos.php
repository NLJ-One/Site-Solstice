<link rel="stylesheet" href="public/css/apropos.css">
<link rel="stylesheet" href="public/css/accueil.css">
<main class="about-section">
  <h1>À propos de Solstice Brasserie</h1>
  <div class="about-content">
    <img src="public/images/S-logo bière.webp" alt="Photo de la marque" class="about-image">
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

  <!-- Ici commence l'affichage dynamique des équipes -->
  <?php if (isset($equipe['error'])): ?>
    <p>Erreur : <?= ($equipe['error']) ?></p>
  <?php else: ?>
    <section>
      <h2>Équipe Génie Biologique</h2>
      <div class="team-list">
        <?php foreach ($equipe['bio'] as $m): ?>
          <div class="team-member">
            <img src="public/images/<?= ($m['photo']) ?>" alt="Photo de <?= ($m['nom']) ?>" class="team-photo">
            <p><strong>Nom :</strong> <?= ($m['nom']) ?></p>
            <p><strong>Rôle :</strong> <?= ($m['role']) ?></p>
          </div>
        <?php endforeach; ?>
      </div>

      <h2>Équipe MMI</h2>
      <div class="team-list">
        <?php foreach ($equipe['mmi'] as $m): ?>
          <div class="team-member">
            <img src="public/images/<?= ($m['photo']) ?>" alt="Photo de <?= ($m['nom']) ?>" class="team-photo">
            <p><strong>Nom :</strong> <?= ($m['nom']) ?></p>
            <p><strong>Rôle :</strong> <?= ($m['role']) ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </section>
  <?php endif; ?>
</main>

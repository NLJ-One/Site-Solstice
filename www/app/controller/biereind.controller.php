<?php

require_once 'config.php';
function generateBierePage()
{
    if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
        die("Bière non spécifiée ou invalide.");
    }

    $id = (int) $_GET['id'];

    try {
        $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET;
        $pdo = new PDO($dsn, DB_USER, DB_PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $pdo->prepare("SELECT id, nom, prix, image, description FROM produit WHERE id = :id");
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $biere = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$biere) {
            die("Bière non trouvée.");
        }

        // Pour éviter l'erreur, initialise $caracteristiques
        $caracteristiques = []; 

    } catch (PDOException $e) {
        die("Erreur base de données : " . $e->getMessage());
    }

    $data = [
        'page_title' => $biere['nom'],
        'view' => 'app/view/biere-detail.php',
        'layout' => 'app/view/common/layout.php',
        'biere' => $biere,
        'caracteristiques' => $caracteristiques,
    ];

    generatePage($data);
}

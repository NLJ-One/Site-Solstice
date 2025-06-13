<?php
require_once 'config.php';

function getBieres(int $limit = 10): array {
    try {
        $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET;
        $pdo = new PDO($dsn, DB_USER, DB_PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $pdo->prepare("SELECT DISTINCT id, nom, prix, image, description FROM produit LIMIT :limit");
        $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
        $stmt->execute();

        $bieres = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $bieres;

    } catch (PDOException $e) {
        return ['error' => $e->getMessage()];
    }
}

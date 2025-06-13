<?php
require_once 'config.php';

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    // Si pas d'id ou id non valide, rediriger ou afficher une erreur
    die('Bière non spécifiée ou invalide.');
}


function getProduitParId(int $id): ?array
{
    try {
        $db = getDatabaseConnexion();
        $sql = "SELECT * FROM produit WHERE id = :id";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result === false ? null : $result;
    } catch (PDOException $e) {
        return null;
    }
}

$id = (int) $_GET['id'];

try {
    $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET;
    $pdo = new PDO($dsn, DB_USER, DB_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Récupérer la bière par son id
    $stmt = $pdo->prepare("SELECT id, nom, prix, image, description FROM produit WHERE id = :id");
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    $biere = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$biere) {
        die('Bière non trouvée.');
    }

} catch (PDOException $e) {
    die("Erreur base de données : " . ($e->getMessage()));
}

?>
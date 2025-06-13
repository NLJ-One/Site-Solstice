<?php
require_once 'config.php';

function getEquipe(): array {
    try {
        $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET;
        $pdo = new PDO($dsn, DB_USER, DB_PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $pdo->query("SELECT nom, role, photo FROM equipe");
        if ($stmt === false) {
            return ['error' => "Erreur lors de la requête SQL"];
        }

        $equipe_bio = [];
        $equipe_mmi = [];

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $nom = isset($row['nom']) ? trim($row['nom']) : 'Nom inconnu';
            $role = isset($row['role']) ? trim($row['role']) : 'Rôle non défini';
            $photo = isset($row['photo']) ? trim($row['photo']) : 'default.jpg';

            if (
                str_contains(strtolower($role), 'fermentation') ||
                str_contains(strtolower($role), 'biochimie') ||
                str_contains(strtolower($role), 'brasserie') ||
                str_contains(strtolower($role), 'ingénieur')
            ) {
                $equipe_bio[] = compact('nom', 'role', 'photo');
            } else {
                $equipe_mmi[] = compact('nom', 'role', 'photo');
            }
        }

        return [
            'bio' => $equipe_bio,
            'mmi' => $equipe_mmi
        ];

    } catch (PDOException $e) {
        return ['error' => $e->getMessage()];
    }
}



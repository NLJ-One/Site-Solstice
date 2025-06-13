<?php
require_once 'app/model/apropos.model.php';

function generateAproposPage() {
    $equipe = getEquipe(); // Appel du modèle

    $data = [
        'page_title' => 'Apropos',
        'view' => 'app/view/apropos.php', 
        'layout' => 'app/view/common/layout.php',
        'equipe' => $equipe
    ];

    generatePage($data);
}

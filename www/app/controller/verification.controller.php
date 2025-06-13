<?php

/**
 * controller en charge de la génération de la page d'accueil
 * @return void
 *
 */
function generateVerificationPage() {
    $data = [
        'page_title' => "Verification",
        'view' => 'app/view/verification.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}
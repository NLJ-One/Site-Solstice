<?php


function generatePanierPage() {

    $data = [
        'page_title' => "Panier",
        'view' => 'app/view/panier.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}

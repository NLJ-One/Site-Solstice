<?php
require_once 'app/model/biere.model.php';
require_once 'app/controller/biereind.controller.php';

function generateBoutiquePage() {
    $bieres = getBieres();

    $data = [
        'page_title' => "Boutique",
        'view' => 'app/view/nosbieres.php',
        'layout' => 'app/view/common/layout.php',
        'bieres' => $bieres
    ];

    generatePage($data);
}

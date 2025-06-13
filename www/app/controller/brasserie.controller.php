<?php


/**
 * controller en charge de la génération de la page d'accueil
 * @return void
 *
 */
function generateBrasseriePage()
{
    $data = [
        'page_title' => "Brasserie",
        'view' => 'app/view/brasserie.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}

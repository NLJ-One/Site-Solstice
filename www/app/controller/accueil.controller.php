<?php


/**
 * controller en charge de la génération de la page d'accueil
 * @return void
 *
 */
function generateAccueilPage()
{
    $data = [
        'page_title' => "Accueil",
        'view' => 'app/view/1-index.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}

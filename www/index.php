<?php

session_start();

require_once 'config.php';
require_once 'app/controller/controller.php';
require_once 'app/model/model.php';

$route = 'Accueil';
if (!empty($_GET['route'])) {
    $route = $_GET['route'];
}

switch ($route) {
    case 'Verif':
        require_once 'app/controller/verification.controller.php';
        generateVerificationPage();
        break;
    case 'Apropos':
        require_once 'app/controller/apropos.controller.php';
        generateAproposPage();
        break;
    case 'Brasserie':
        require_once 'app/controller/brasserie.controller.php';
        generateBrasseriePage();
        break;
    case 'Accueil':
        require_once 'app/controller/accueil.controller.php';
        generateAccueilPage();
        break;

    case 'Contact':
        require "app/controller/contact.controller.php";
        generateContactPage();
        break;
    case 'Boutique':
        require_once "app/controller/nosbieres.controller.php";
        generateBoutiquePage();
        break;
    case 'Panier':
        require_once "app/controller/Panier.controller.php";
        generatePanierPage();
        break;
    case 'Bieredetails':
        require_once "app/controller/biereind.controller.php";
        generateBierePage();
        break;
    default:
        exit();
}

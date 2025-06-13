
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['majeur'])) {
        if ($_POST['majeur'] === 'Oui') {

            header('Location: index.php?route=Accueil');
            exit;
        } else {

            header('Location: https://sante.gouv.fr/prevention-en-sante/addictions/article/alcool-cadre-legal');
            exit;
        }
    }
}
?>
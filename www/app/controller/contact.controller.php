<?php
function generateContactPage()
{
    $message = "";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nom = (trim($_POST['nom'] ?? ''));
        $prenom = (trim($_POST['prenom'] ?? ''));
        $email = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);
        $contenu = (trim($_POST['message'] ?? ''));

        if ($nom && $prenom && $email && $contenu) {
            
            $message = "<p style='color:green;'>Merci pour votre message, $prenom !</p>";
        } else {
            $message = "<p style='color:red;'>Merci de remplir tous les champs correctement.</p>";
        }
    }

    $data = [
        'page_title' => 'Contact',
        'view' => 'app/view/contact.php',
        'layout' => 'app/view/common/layout.php',
        'message' => $message
    ];

    generatePage($data); // fonction qui charge le layout + la vue avec les variables
}

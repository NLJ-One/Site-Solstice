<?php 
/*
    Layout composé d'un header, d'une partie centrale (contenu) et d'un footer
*/

// Inclusion du header
include 'app/view/common/header.php';
?>

<head>
  <link rel="stylesheet" href="public/css/accueil.css">
</head>
<body>
  <?= $content ?>
  
<?php
// Inclusion du footer à la fin du body
include 'app/view/common/footer.php';
?>
</body>
</html>

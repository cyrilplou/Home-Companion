<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hom-E</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="scripts/script.js" defer></script>
</head>
<body>
    <div class="connexion" id="connexion">
        <div class="btn-home" id="btn-home">
            <img src="/Home-Companion/images/home-btn.png" alt="">
            <p class="titre">Hom'E</p>
        </div>
        <div class="formconnexion" id="formconnexion" >
            <?php require_once(__DIR__.'/connexion.php'); ?>
        </div>
    </div>
</body>
</html>


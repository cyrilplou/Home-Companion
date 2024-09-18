<?php
session_start();
require_once(__DIR__.'/usersdata.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hom-E</title>
    <link rel="stylesheet" href="css/styleHP.css">
    <script src="scripts/script.js" defer></script>
</head>
<body>
    <section class="header">
        <a href="index.php"><img src="images\onoff.png" alt="bouton on off"></a>
    </section>
    <section class="main">
        <div class="menu">
            <a href=""><img src="images\agenda.png" alt="logo agenda" id="agenda"></a>
            <a href=""><img src="images\compte.png" alt="logo barre compte" id="compte"></a>
            <a href=""><img src="images\courses.png" alt="logo courses" id="shopping"></a>
        </div>
        <div class="btn-home" id="btn-home">
            <img src="/Home-Companion/images/home-btn.png" alt="">
             <p class="titre"><?php echo $_SESSION['LOGGED_USER']?></p> 
        </div>
    </section>
    <section class="fiches">

    </section>
    
</body>
</html>


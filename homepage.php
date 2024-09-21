<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hom-E</title>
    <link rel="stylesheet" href="css/style_HP.css">
    <script src="scripts/script.js" defer></script>
</head>
<body>
    <section class="header">
        <a href="index.php"><img src="images\on_off.png" alt="bouton on off"></a>
    </section>
    <section class="main">
        <div class="menu">
            <a href=""><img src="images\agenda.png" alt="logo agenda" id="agenda"></a>
            <a href="apps\finance_app\expenses.php"><img src="images\compte.png" alt="logo barre compte" id="compte"></a>
            <a href="apps\shopping_app\shopping.php"><img src="images\courses.png" alt="logo courses" id="shopping"></a>
        </div>
        <div class="btn-home" id="btn-home">
            <img src="/Home-Companion/images/home_btn.png" alt="">
             <p class="titre"><?php echo $_SESSION['LOGGED_USER']?></p> 
        </div>
    </section>
    <?php require_once(__DIR__.'/apps\shopping_app\lists_shopping.php');  ?>
</body>
</html>


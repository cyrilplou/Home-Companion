<?php
session_start();
require_once(__DIR__.'/apps/finance_app/total_calculated.php');  ?>

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
            <a href="apps\receipes_app\receipes.php"><p class="menu-desktop">Recettes</p><img src="images\burgers.png" alt="logo burgers" id="agenda"></a>
           <?php if($_SESSION["LOGGED_USER"] === "Cyril" ||$_SESSION["LOGGED_USER"] === "Mathilde" ) : ?> <a href="apps\finance_app\expenses.php"><p class="menu-desktop">Comptes</p><img src="images\compte.png" alt="logo barre compte" id="compte"></a> <?php endif ?>
            <a href="apps\shopping_app\shopping.php"><p class="menu-desktop">To do lists</p><img src="images\todo.png" alt="logo courses" id="shopping"></a>
        </div>
        <div class="btn-home" id="btn-home">
            <div class='imglogo' id="imglogo"></div>
            <!-- <img src="images/home_btn.png" alt=""> -->
             <p class="titre"><?php echo $_SESSION['LOGGED_USER']?></p> 
        </div>
    <!-- Display expenses from Expenses page -->
    <?php if($_SESSION["LOGGED_USER"] === "Cyril" ||$_SESSION["LOGGED_USER"] === "Mathilde" ) : ?>
        <section class="display_expenses_hp">
            <div class="expenses">
                <h3><?php  if ($sommeargent=== 0){echo 'Les comptes sont à jour.';} else { echo $redevable.' doit '.$sommeargent.' € à '.$nonredevable;} ?> </h3>
            </div>
        </section>
    </section>
    <?php endif ?>
    <!-- Display lists from Shopping page -->
    <a href="apps/shopping_app/shopping.php"><?php require_once(__DIR__.'/apps/shopping_app/homepage_lists_shopping.php');  ?></a>
</body>
</html>


<?php
require_once(__DIR__.'/total_calculated.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hom-E</title>
    <link rel="stylesheet" href="css\style_expenses.css">
    <script src="script_expenses.js" defer></script>
</head>
<body>
    <header class="header-apps">
        <?php require_once(__DIR__."../../header_pages.php"); ?>
    </header>
    <div class="nav-bar">
        <img src="../../images\compte.png" alt="logo shopping" class="logo-shop">
    </div>
    <form action="sum_creat_expense.php" class="form_expense" method="post">
        <input type="text" name="title_expense" id="title_expense" placeholder="Titre dépense">
        <input type="number"placeholder="Prix" name="price_expense">
        <select name="for_who" id="">
            <option value="tous">Pour tous</option>
            <option value="mathilde">Pour Mathilde</option>
            <option value="cyril">Pour Cyril</option>
        </select>
        <button type="submit">Ajouter la dépense</button>
    </form>
    <div><h1>Dépense Cyril :<?php echo $totalargentcyril?></h1></div>
    <div><h1>Dépense Mathilde :<?php echo $totalargentmathilde?></h1></div>
    <div><h2><?php echo $redevable.' doit '. $sommeargent. ' à ' . $nonredevable ?></h2></div>
</body>
</html>
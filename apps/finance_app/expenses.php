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
        <div class="grp_form">
            <input type="number"placeholder="Prix" name="price_expense" class="price">
            <select name="for_who" id="for_who" >
                <option value="tous">Pour...</option>
                <option value="tous">Tous</option>
                <option value="mathilde">Mathilde</option>
                <option value="cyril">Cyril</option>
            </select>
        </div>
        <button type="submit">Ajouter</button>
    </form>
    <div class="container_exp">
        <section class="display_expenses">
        <?php
            foreach($expenses as $expense): ?>
                <div class="fiches_expenses">
                     <h2><?php echo $expense['expense_name'] ?></h2>
                    <p><span style="font-weight: bold;"><?php echo $expense['users_name'] ?> </span>a dépensé <span style="font-weight: bold;"><?php echo $expense['price'] ?></span> € pour <?php echo $expense['for_who'] ?> </p>
                 </div>
            <?php
            endforeach ?>
        </section>
    </div>





</body>
</html>
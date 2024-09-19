<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hom-E</title>
    <link rel="stylesheet" href="css\styleShopping.css">
    <script src="scriptshopping.js" defer></script>
</head>
<body>
    <header class="headerApps">
        <?php require_once(__DIR__."../../header_pages.php"); ?>
    </header>
    <div class="navbar">
        <img src="../../images\courses.png" alt="logo shopping" class="logo-shop">
        <img src="../../images\add_BTN.png" alt="image ajout liste" id="btncreatList">
    </div>
    <div id="formnewList">
        <form action="sum-creatList.php"method="post" class="sumList" >
            <input type="text" name="newListName" placeholder="Créer une liste">
            <button id="btncreat" type="submit"><img src="../../images/pictoValide.png" alt=""></button>
        </form>
    </div>
   <?php require_once(__DIR__.'/lists_shopping.php');  ?>


</body>
</html>
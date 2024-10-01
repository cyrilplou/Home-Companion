<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hom-E</title>
    <link rel="stylesheet" href="css\style_shopping.css">
    <script src="script_shopping.js" defer></script>
</head>
<body>
    <header class="header-apps">
        <?php require_once(__DIR__."../../header_pages.php"); ?>
    </header>
    <div class="nav-bar">
        <img src="../../images\todo.png" alt="logo shopping" class="logo-shop">
    </div>
    <div id="formnewList">
    <form action="sum_creat_list.php"method="post" class="sum-list" >
            <input type="checkbox" name="private" id="private" value="1">
            <input type="text" name="newListName" placeholder="Créer une liste">
            <button id="btncreat" type="submit"><img src="../../images/picto_valide.png" alt=""></button>
        </form>
    </div>
   <?php require_once(__DIR__.'/lists_shopping.php');  ?>


</body>
</html>
<?php
require_once(__DIR__.'../../../databaseconnect.php');

$title = $_GET['title'];
$titleStatement = $mysqlClient->prepare('SELECT * FROM shopping WHERE title = :title');
$titleStatement->execute([
    'title'=> $title,
]
);
$list = $titleStatement->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste</title>
    <link rel="stylesheet" href="css\styleShopping.css">
</head>
<body>
    <header class="headerApps">
        <?php require_once(__DIR__."../../header_pages.php"); ?>
    </header>
    <div class="navbar">
        <img src="../../images\courses.png" alt="logo shopping" class="logo-shop">
    </div>
    <section class="fiches-full">
        <h2><?php echo $title ?></h2>
        <p><?php echo $list['list'] ?></p>
        <img class="editlist" src="../../images/pictoEdit2.png" alt="EditLogo">
        <a href="shopping.php"><img class="btnAdd" src="../../images/add_BTN.png" alt=""></a>
    </section>
    <section class="containerForm">
        <form action="sum-updateList.php" method="POST">
            
            <textarea name="updateList" class="updateList" id="updatesList" ><?php echo $list['list'] ?></textarea>
            <button id="btnEdit" type="submit">Editer la liste</button>
        </form>
    </section>
    
</body>
</html>
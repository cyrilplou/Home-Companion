<?php
require_once(__DIR__.'../../../data_base_connect.php');

$title = $_GET['title'];
$titleStatement = $mysqlClient->query("SELECT list FROM shopping WHERE title = '$title' ");
$lists = $titleStatement->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste</title>
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
    <section class="fiches-full" id="logoEdit">
        <h2><?php echo $title ?></h2>
        <?php foreach($lists as $list): ?>
        <p><?php echo nl2br($list['list']) ?></p>
        <?php
        endforeach ?>
       
    </section>
    <!-- Reset button to clear the list -->
    <div class="btns_note" id="btns_note">
        <a href="shopping.php" ><img class="btn-add" src="../../images/add_btn.png" alt=""></a>
        <button class='btn-reset'type="" id="reset"></button>
        <form class="formReset"action="sum_reset_list.php" method="POST" id="submit_reset">
            <input type="text" name="namelist" id="listname" value="<?php echo $title ?>">
            <p>Réinitialiser ?</p>
            <a href="shopping.php" ><img class="btn-add" src="../../images/add_btn.png" alt=""></a>
            <button class='btn-reset'type="submit" name="reset" value="" ></button>
        </form>
    </div>

    <section class="container-form" id="formEdit">
        <form action="sum_update_list.php" method="POST">
            <input type="text" name="namelist" id="listname" value="<?php echo $title ?>">
            <textarea name="update-list" class="update-list" id="updatesList" ><?php echo $list['list'] ?></textarea>
            <div class="valid-delete">
                <button id="btnEdit" type="submit"><img src="../../images/picto_valide.png" alt=""></button>
                <label for="">Supprimer la liste ?</label><input type="checkbox" name ="btn_delete"class="btn_delete_list" value="yes">
            </div>
        </form>
    </section>
    
</body>
</html>
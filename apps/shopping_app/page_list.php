<?php
require_once(__DIR__.'../../../data_base_connect.php');

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
    <link rel="stylesheet" href="css\style_shopping.css">
    <script src="script_shopping.js" defer></script>
</head>
<body>
    <header class="header-apps">
        <?php require_once(__DIR__."../../header_pages.php"); ?>
    </header>
    <div class="nav-bar">
        <img src="../../images\courses.png" alt="logo shopping" class="logo-shop">
    </div>
    <section class="fiches-full">
        <h2><?php echo $title ?></h2>
        <p><?php echo nl2br($list['list']) ?></p>
        <img class="edit-list" id="logoEdit" src="../../images/picto_edit2.png" alt="EditLogo">
        <a href="shopping.php"><img class="btn-add" src="../../images/add_btn.png" alt=""></a>
    </section>
    <section class="container-form" id="formEdit">
        <form action="sum_update_list.php" method="POST">
            <input type="text" name="namelist" id="listname" value="<?php echo $title ?>">
            <textarea name="update-list" class="update-list" id="updatesList" ><?php echo $list['list'] ?></textarea>
            <button id="btnEdit" type="submit"><img src="../../images/picto_valide.png" alt=""></button>  
        </form>
    </section>
    
</body>
</html>
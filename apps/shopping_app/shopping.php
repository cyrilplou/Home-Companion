<?php 
require_once(__DIR__.'/shoppingdata.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hom-E</title>
    <link rel="stylesheet" href="css\styleShopping.css">
</head>
<body>
    <header class="headerApps">
        <?php require_once(__DIR__."../../header_pages.php"); ?>
    </header>
    <div class="navbar">
        <img src="../../images\courses.png" alt="logo shopping" class="logo-shop">
        <a href=""><img src="../../images\add_BTN.png" alt=""></a>
    </div>
    
    <section class="articles">
        <?php
        foreach($lists as $list): ?>
            <div class="fiches" onclick="window.location.href='page_list.php?title=<?php echo $list['title']; ?>'">
                <h2><?php echo $list['title'] ?></h2>
                <p><?php echo $list['list'] ?></p>
                
            </div>

        <?php
        endforeach ?>
        
    </section>

</body>
</html>
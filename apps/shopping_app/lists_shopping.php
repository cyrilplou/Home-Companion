<?php 
require_once(__DIR__.'/shopping_data.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hom-E</title>
    <link rel="stylesheet" href="css\style_shopping.css">
</head>
<body>
<section class="articles">
        <?php
        foreach($lists as $list): if ( $list['author'] === $_SESSION['LOGGED_USER'] || ($_SESSION['LOGGED_USER'] === "Cyril" && ($list['author'] === "Mathilde" && $list['private'] === '0')) ||($_SESSION['LOGGED_USER'] === "Mathilde" && ($list['author'] === "Cyril" && $list['private'] === '0'))) : ?>
            <div class="fiches" onclick="window.location.href='page_list.php?title=<?php echo $list['title']; ?>'">
                <h2><?php echo $list['title'] ?></h2>
                <p><?php echo nl2br($list['list']) ?></p>
            </div>
        <?php
        endif ?>
      <?php  endforeach ?>
        
    </section>

</body>
    </html>
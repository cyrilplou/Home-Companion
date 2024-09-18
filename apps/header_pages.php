<?php session_start()   ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HeaderApps</title>
    <link rel="stylesheet" href="css\styleShopping.css">
</head>
<body>
    <section class="header-pages">
        <div class="btn-home" id="btn-home">
             <a href="../../homepage.php"><img src="/Home-Companion/images/home-btn.png" alt=""></a>
             <p class="titre"><?php echo $_SESSION['LOGGED_USER']?></p> 
        </div>
        <a href="../../index.php" class="link"><img src="../../images\onoff.png" alt="bouton on off"></a>
        
    </section>
</body>
</html>
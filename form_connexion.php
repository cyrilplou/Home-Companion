<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form action="sum_connexion.php" method="post" class="form" id="form">
        <input type="text" name="user_name" id="user_name" placeholder="Nom utilisateur" value="<?php if(isset($_COOKIE['LOGGED_USER'])) {echo $_COOKIE['LOGGED_USER'];} ?>">
        <input type="password" name="user_pwd" id="user_pwd" placeholder="Mot de passe" value="<?php if(isset($_COOKIE['pwd'])) {echo $_COOKIE['pwd'];} ?>">
        <div class="checkbox">
            <input type="checkbox" name="chkbox" class="chkbox" value="cookie"><label for="chkbox">Se souvenir de moi</label>
        </div>
        <button type="submit" id="btn-connexion">Connexion</button>
    </form>
</body>
</html>              

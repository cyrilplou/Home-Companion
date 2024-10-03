<?php
require_once(__DIR__ . '/variables.php');
require_once(__DIR__ . '/functions.php');
require_once(__DIR__ . '/search.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La cuisine du Panda</title>
    <link href="css/style_recipes.css" rel='stylesheet'>

    <script src="scriptIndex.js" defer></script>
</head>
<body >
    <a href="soumettre.php"><img class="add-recipe" src="../../images/add_btn.png" alt=""></a>
    <?php require_once(__DIR__ . '/../header_pages.php'); ?> 

        <div id="search" class="search-bar">
            <form action="" id="searchForm" class="search-form" method="POST">
            <input id="search" placeholder="'Chercher une recette, ingrédients." type="text"  name="search">
            <button id="searchButton">Rechercher</button>
            </form>
        </div>
    <?php 
    if (isset($_SESSION['LOGGED_USER'])
        && empty($searchRecipe)): ?>
        <div id="container-recipe" class="container-recipes">
      <?php  foreach ($recipes as $recipe) : 
    if ($recipe['is_enabled'] === 0 
        && empty($searchrec)): ?>
        <div id="fiche" class="fiches">
            <h1 class="h1"> <?php echo $recipe['title'] ; ?> </h1>
            <div class="img-recipe"><img  src="<?php echo $recipe['path_img']?>" alt=""></div>
            <div id="temps"><img src="images/chronometre.png" alt=""> <?php echo $recipe['time'].'min.'; ?>
            <img src="images/groupe.png" alt=""> <?php echo 'Pour '.$recipe['people'].' personnes'; ?>
            </div>
            <p id="textRecipe"> <?php echo $recipe['extrait']; ?></p>
            <button><a href="recette.php?id=<?php echo $recipe['recipes_id']; ?>">Découvrir</a></button>
        </div>
        

    <?php endif ?>
    <?php endforeach ?>

            </div>
        <?php endif; ?>
    </div>
    <?php 
    if (isset($_SESSION['LOGGED_USER'])
    && !empty($searchrec)): ?>
      <div id="lesrecettes"> 
        <div id="containerRecipe"class="container-recipes">
      <?php  foreach ($searchrecipes as $recipe) :  ?>
        <div id="fiche"class="fiches">
            <h1> <?php echo $recipe['title'] ; ?> </h1>
            <div class="img-recipe"><img  src="<?php echo $recipe['path_img']?>" alt=""></div>
            <div id="temps"><img src="images/chronometre.png" alt=""> <?php echo $recipe['time'].'min.'; ?>
            <img src="images/groupe.png" alt=""> <?php echo 'Pour '.$recipe['people'].' personnes'; ?></div>
            <p id="textRecipe"> <?php echo $recipe['extrait']; ?></p>
            <button><a href="recette.php?id=<?php echo $recipe['recipes_id']; ?>">Découvrir</a></button>
        </div>

    <?php endforeach ?>

            </div>
        <?php endif; ?>
        
    </div>
    </div> 
</body>
</html>
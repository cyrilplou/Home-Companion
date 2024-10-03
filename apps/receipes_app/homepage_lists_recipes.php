<?php 
require_once(__DIR__.'/variables.php');
require_once(__DIR__ . '/functions.php');
require_once(__DIR__ . '/search.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hom-E</title>
    <link rel="stylesheet" href="css\style_recipes.css">
</head>
<body>
<section class="articles">
        <?php
        foreach($recipes as $recipe): ?> 
        
        <div id="fiche" class="fiches-recipes">
            <h1 class="h1-recipes"> <?php echo $recipe['title'] ; ?> </h1>
            <div class="img-recipe"><img  src="apps/receipes_app/<?php echo $recipe['path_img']?>" alt=""></div>
            <div id="temps"><img src="images/chronometre.png" alt=""> <?php echo $recipe['time'].'min.'; ?>
            <img src="images/groupe.png" alt=""> <?php echo 'Pour '.$recipe['people'].' personnes'; ?>
            </div>
            <p id="textRecipe"> <?php echo $recipe['extrait']; ?></p>
            <button><a href="apps/receipes_app/recette.php?id=<?php echo $recipe['recipes_id']; ?>">Découvrir</a></button>
        </div>

       <?php endforeach ?>
        
    </section>

</body>
    </html>
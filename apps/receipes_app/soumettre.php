

<!DOCTYPE html>
<html>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de Recettes - Page d'accueil</title>
    <link href="css/style_recipes.css" rel='stylesheet'>

</head>


<body>
<?php require_once(__DIR__ . '/../header_pages.php'); ?> 
    <div id="mainsoum">
    <div id="container" class="container-sum">
        <form id="soumForm" action="post_create.php" method="POST" enctype="multipart/form-data" class="form-sum">
            <input id="nomplat" type="text"  name="title" placeholder="Nom du plat" class="input-sum">
            <div class="numbers-sum">
                <input type="number" id="people" name="people" placeholder="Personnes?"class="number-sum">
                <input type="number" id="time" name="time"placeholder="Durée ?"class="number-sum">
            </div>
            <textarea id="extrait"placeholder="Une courte description du plat ! Fais-nous saliver !" name="extrait"></textarea>
            <br>
            <textarea placeholder="Les ingrédients, séparés d'une virgule !"id="ingredients" name="ingredients"></textarea>
            <br>
            <textarea name="etape1" id="etape1" placeholder="Etape 1 ! Tu peux agrandir la zone de texte avec le coin inférieur droit."></textarea>
            <br>
            <textarea name="etape2" id="etape2" placeholder="Etape 2 !"></textarea>
            <br>
            <textarea name="etape3" id="etape3" placeholder="Etape 3 !"></textarea>
            <br>
            <textarea name="etape4" id="etape4" placeholder="Etape 4 !"></textarea>
            <br>
            <textarea name="etape5" id="etape5" placeholder="Etape 5 !"></textarea>
            <br>
            <textarea name="etape6" id="etape6" placeholder="Etape 6 !"></textarea>
            <br><br>
            <label> <span class="label-img">Fais-nous saliver avec une belle photo !</span></label>
            <input id="file"type="file" class="file" name="imgRecipe">
            <br>
            <button id="sumrecipe"type="submit">Envoyer la recette</button>
        </form>
        

    </div>
    </div>
</body>
</html>
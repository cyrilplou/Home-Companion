
<?php 

require_once(__DIR__.'/variables.php');
require_once(__DIR__.'/functions.php');
require_once(__DIR__.'../../../data_base_connect.php');

?>
<?php
$id = $_GET['id'];
$idStatement = $mysqlClient->prepare('SELECT * FROM recipes WHERE recipes_id = :id');
$idStatement->execute([
    'id'=> $id,
]
);
$recette = $idStatement->fetch();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $recette['title']; ?></title>
    <link href="css/style_unique_recipe.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="impression.css" media="print">
</head>
<header>
<?php require_once(__DIR__ . '/../header_pages.php'); ?> 

</header>
<body>
    <div class="fiche-recette">
        <div id="bandeauRecette"><img id="imgRecette" src="<?php echo ($recette['path_img']); ?>" alt="une image de la recette">
        <form action=""><h1 id="titreRecette"><?php echo ($recette['title']); ?> </h1>
        <h3 id="infosRecette">Prévue pour <?php echo ($recette['people']); ?> personnes.  Temps de préparation : <?php echo ($recette['time']); ?> minutes.</h3>
        <p id="ingredients"> <strong>Les ingrédients :</strong> <?php echo $recette['ingredients']; ?></p> </form>   
    </div>
        <p id="recetteRecette">
        <?php echo ($recette['recipe']); ?> <br><a id="impression" href="#" onclick="javascript:window.print()"><img src="images/imprimante.png" alt=""></a></p>
        
        </div>
    
</body>
</html>
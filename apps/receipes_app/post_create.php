<?php
require_once(__DIR__.'/variables.php');
require_once(__DIR__.'../../../data_base_connect.php');
require_once(__DIR__.'/functions.php');

?>
<?php 
if($_FILES['imgRecipe']['size'] > 1000000)
{
    echo 'Déso ton fichier est trop lourd !';
}
$fileInfo = pathinfo($_FILES['imgRecipe']['name']);
    $extension = $fileInfo['extension'];
    $allowedExtensions = ['jpg', 'jpeg', 'gif', 'png'];
    if (!in_array($extension, $allowedExtensions)) {
        echo "L'envoi n'a pas pu être effectué, l'extension {$extension} n'est pas autorisée";
        return;
    }


$pathimgs = __DIR__ . '/uploads/';

if(!is_dir($pathimgs)){
    echo "L'envoie du fichier n'a pas pu être effectué. Dossier de récupération absent." ;
    return ;
}


move_uploaded_file($_FILES['imgRecipe']['tmp_name'], $pathimgs . basename($_FILES['imgRecipe']['name']));
 ?>
<?php
$people = $_POST['people'];
$title = $_POST['title'];
$time = $_POST['time'];
$extrait = $_POST['extrait'];
$ingredients = $_POST['ingredients'];
$recipe = '<strong>Etape 1</strong><br><br>'.$_POST['etape1'].'<br><br>'.'<strong>Etape 2</strong><br><br>' .$_POST['etape2'].'<br><br>'.'<strong>Etape 3</strong><br><br>' .$_POST['etape3'].'<br><br>'.'<strong>Etape 4</strong><br><br>'.$_POST['etape4'].'<br><br>'.'<strong>Etape 5</strong><br><br>'.$_POST['etape5'].'<br><br>'.'<strong>Etape 6</strong><br><br>'.$_POST['etape6'];
$author = 'Cyril';
$imgpa = "uploads/".$_FILES["imgRecipe"]['name'];

$insertRecipe = $mysqlClient ->prepare ('INSERT INTO recipes (people, title, time, extrait, ingredients, recipe, author,is_enabled,path_img) VALUES (:people, :title, :time, :extrait, :ingredients, :recipe, :author, :is_enabled, :path_img1)');
$insertRecipe -> execute ([
    'people' => $people,
    'title' => $title,
    'time' => $time,
    'extrait' => $extrait,
    'ingredients' => $ingredients,
    'recipe' => $recipe,
    'author' => $author,
    'is_enabled' => 0,
    'path_img1' => $imgpa,
]);

    redirectToUrl('receipes.php');

    ?>
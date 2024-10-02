
<?php
session_start();

require_once(__DIR__.'../../../functions.php'); 
require_once(__DIR__.'../../../users_data.php'); 
require_once(__DIR__.'../../../data_base_connect.php');




$id = $_GET['id'];
$idStatement = $mysqlClient->prepare('SELECT * FROM recipes WHERE recipes_id = :id');
$idStatement->execute([
    'id'=> $id,
]
);
$recette = $idStatement->fetch();

// Request to creat a new Shopping List //
$namecreated = $recette['title'];
$author = $_SESSION['LOGGED_USER'];
$ingredients = $recette['ingredients'];

if(empty($_POST['private'])){
    $private = '0';
}
$createlist = $mysqlClient ->prepare ('INSERT INTO shopping (title,list,private,author) VALUES (:title, :list, :private, :author)');
$createlist -> execute ([
    'title'=> $namecreated,
    'list' => $ingredients,
    'private' => "0",
    'author'=> $author,
]);

    redirectToUrl('../shopping_app/shopping.php');

?>
          



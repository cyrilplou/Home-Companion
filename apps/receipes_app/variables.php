<?php
require_once(__DIR__.'../../../data_base_connect.php');
?>

<?php 
$sqlQuery = 'SELECT * FROM recipes';
$recipesStatement = $mysqlClient->prepare($sqlQuery);
$recipesStatement->execute();
$recipes = $recipesStatement->fetchAll();
?>
<?php 
$sqlQuery = 'SELECT * FROM users';
$usersStatement = $mysqlClient->prepare($sqlQuery);
$usersStatement->execute();
$users = $usersStatement->fetchAll();

 

if (!empty($searchrec)
&& isset($searchrec)){
$searchStatement = $mysqlClient->prepare("SELECT * FROM recipes WHERE recipe LIKE :search  ");
$searchStatement->execute([
    'search' => '%'.$search.'%' ,
]);
$searchrecipes = $searchStatement->fetchAll();
}
?>


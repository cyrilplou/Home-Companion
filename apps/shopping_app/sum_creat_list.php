
<?php
session_start();
require_once(__DIR__.'../../../functions.php'); 
require_once(__DIR__.'../../../users_data.php'); 
require_once(__DIR__.'../../../data_base_connect.php');

// Request to creat a new Shopping List //
$namecreated = $_POST['newListName'];
$private = $_POST['private'];
$author = $_SESSION['LOGGED_USER'];

if(empty($_POST['private'])){
    $private = '0';
}
$createlist = $mysqlClient ->prepare ('INSERT INTO shopping (title,private,author) VALUES (:title, :private, :author)');
$createlist -> execute ([
    'title'=> $namecreated,
    'author'=> $author,
    'private' => $private,
]);

    redirectToUrl('shopping.php');

?>
          



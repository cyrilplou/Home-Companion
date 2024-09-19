
<?php
session_start();
require_once(__DIR__.'../../../functions.php'); 
require_once(__DIR__.'../../../usersdata.php'); 
require_once(__DIR__.'../../../databaseconnect.php');


$namecreated = $_POST['newListName'];

$createlist = $mysqlClient ->prepare ('INSERT INTO shopping (title) VALUES (:title)');
$createtlist -> execute ([
    'title'=> $namecreated,
 
]);

    redirectToUrl('shopping.php');

?>
          



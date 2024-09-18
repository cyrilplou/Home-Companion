
<?php

session_start();
require_once(__DIR__.'../../../functions.php'); 
require_once(__DIR__.'../../../usersdata.php'); 
require_once(__DIR__.'../../../databaseconnect.php');


$newList = $_POST ['updateList'];
$nameupdate = "Boucher";

$insertlist = $mysqlClient ->prepare ("UPDATE `shopping` SET list=:list WHERE title=:title");
$insertlist -> execute ([
    'list' => $newList,
    'title'=> 'Boucher'
 
]);

    redirectToUrl('../../index.php');

?>
          



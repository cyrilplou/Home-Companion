
<?php
session_start();
require_once(__DIR__.'../../../functions.php'); 
require_once(__DIR__.'../../../users_data.php'); 
require_once(__DIR__.'../../../data_base_connect.php');

// Request to update existing shopping list //

$reset = $_POST['reset'];
$nameupdate = $_POST['namelist'];

$insertlist = $mysqlClient ->prepare ("UPDATE `shopping` SET list=:list WHERE title=:title");
$insertlist -> execute ([
    'list' => $reset,
    'title'=> $nameupdate,
]);
    redirectToUrl('shopping.php');

?>
          



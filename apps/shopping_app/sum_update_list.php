
<?php
session_start();
require_once(__DIR__.'../../../functions.php'); 
require_once(__DIR__.'../../../users_data.php'); 
require_once(__DIR__.'../../../data_base_connect.php');

// Request to update existing shopping list //

$newList = $_POST['update-list'];
$nameupdate = $_POST['namelist'];
$deleteListe= $_POST['btn_delete'];

if($deleteListe ==="yes")
{
    $deletlist = $mysqlClient ->prepare ("DELETE FROM `shopping` WHERE title=:title");
$deletlist -> execute ([
    'title'=> $nameupdate,
]);
    redirectToUrl('shopping.php');


}
else {
$insertlist = $mysqlClient ->prepare ("UPDATE `shopping` SET list=:list WHERE title=:title");
$insertlist -> execute ([
    'list' => $newList,
    'title'=> $nameupdate,
]);
    redirectToUrl('shopping.php');
}
?>
          



<?php
require_once(__DIR__.'/data_base_connect.php');

$username= $_POST['user_name'];

// Get Users informations
$sqlQuery = "SELECT * FROM users WHERE user_name = '$username'" ;
$usersStatement = $mysqlClient->prepare($sqlQuery);
$usersStatement->execute();
$users = $usersStatement->fetchAll();


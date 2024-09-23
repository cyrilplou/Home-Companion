<?php
require_once(__DIR__.'/data_base_connect.php');

$username= $_POST['user_name'];


// Get Users informations
$sqlQuery = $mysqlClient->query("SELECT * FROM users WHERE user_name = '$username'") ;
$users = $sqlQuery->fetchAll();



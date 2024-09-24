<?php
require_once(__DIR__.'/data_base_connect.php');
require_once(__DIR__.'/functions.php'); 

$username= $_POST['name_inscription'];
$userpwdinscription= $_POST['pwd_inscription'];
$userpwdhash = password_hash($userpwdinscription, PASSWORD_DEFAULT);

//User incripstion
$sqlQuery = $mysqlClient->prepare("INSERT INTO users (user_name, user_pwd) VALUES (:user_name, :user_pwd)") ;
$sqlQuery-> bindValue('user_name',$username);
$sqlQuery-> bindValue('user_pwd',$userpwdhash);
$usersinscription = $sqlQuery->execute();

redirectToUrl('index.php');





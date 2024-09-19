<?php

require_once(__DIR__.'/data_base_connect.php');

// Get Users informations
$sqlQuery = 'SELECT * FROM users';
$usersStatement = $mysqlClient->prepare($sqlQuery);
$usersStatement->execute();
$users = $usersStatement->fetchAll();


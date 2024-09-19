<?php
require_once(__DIR__.'../../../data_base_connect.php');

// Get Shopping Lists informations
$sqlQuery = 'SELECT * FROM shopping';
$listsStatement = $mysqlClient->prepare($sqlQuery);
$listsStatement->execute();
$lists = $listsStatement->fetchAll();

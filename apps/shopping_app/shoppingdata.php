<?php
require_once(__DIR__.'../../../databaseconnect.php');

// Get Shopping Lists informations
$sqlQuery = 'SELECT * FROM shopping';
$listsStatement = $mysqlClient->prepare($sqlQuery);
$listsStatement->execute();
$lists = $listsStatement->fetchAll();

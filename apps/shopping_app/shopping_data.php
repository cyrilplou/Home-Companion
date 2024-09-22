<?php
require_once(__DIR__.'../../../data_base_connect.php');

// Get Shopping Lists informations


$sqlQuery = $mysqlClient->query('SELECT * FROM shopping') ;

$lists = $sqlQuery->fetchAll();
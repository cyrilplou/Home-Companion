<?php
require_once(__DIR__.'../../../data_base_connect.php');

// Get all expenses
$sqlQuery = $mysqlClient->query("SELECT * FROM expenses ORDER BY id DESC");
$expenses = $sqlQuery->fetchAll();

// Get expense from Cyril
$sqlQuery = $mysqlClient->query("SELECT SUM(price) AS total_cy FROM expenses WHERE for_who = 'cyril'");
$totalcyril = $sqlQuery->fetch(PDO::FETCH_ASSOC);
$totalargentcyril = $totalcyril['total_cy'];
// Get expense from Mathilde
$sqlQuery = $mysqlClient->query("SELECT SUM(price) AS total_ma FROM expenses WHERE for_who = 'mathilde'");
$totalmathilde = $sqlQuery->fetch(PDO::FETCH_ASSOC);
$totalargentmathilde = $totalmathilde['total_ma'];

$sommeargent = $totalargentmathilde - $totalargentcyril;



if($sommeargent > 0){
    $redevable = 'Mathilde' ;
    $nonredevable = 'Cyril';
}
else {
    $redevable = 'Cyril' ;
    $nonredevable = 'Mathilde';
}
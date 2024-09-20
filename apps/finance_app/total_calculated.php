<?php
require_once(__DIR__.'../../../data_base_connect.php');



// Get expense from Cyril
$sqlQuery = "SELECT SUM(price) AS total_cy FROM expenses WHERE for_who = 'cyril'";
$totalcyrilStatement = $mysqlClient->prepare($sqlQuery);
$totalcyrilStatement->execute();
$totalcyril = $totalcyrilStatement->fetch(PDO::FETCH_ASSOC);
$totalargentcyril = $totalcyril['total_cy'];

// Get expense from Mathilde
$sqlQuery = "SELECT SUM(price) AS total_ma FROM expenses WHERE for_who = 'mathilde'";
$totalmathildeStatement = $mysqlClient->prepare($sqlQuery);
$totalmathildeStatement->execute();
$totalmathilde = $totalmathildeStatement->fetch(PDO::FETCH_ASSOC);
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
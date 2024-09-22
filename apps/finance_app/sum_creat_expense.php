
<?php
session_start();
require_once(__DIR__.'../../../functions.php'); 
require_once(__DIR__.'../../../users_data.php'); 
require_once(__DIR__.'../../../data_base_connect.php');

// Request to creat a new Shopping List //
$for = $_POST['for_who'];
$username = $_SESSION['LOGGED_USER'];
$expense_name = $_POST['title_expense'];

if($for === 'tous'){
    $expense_price= $_POST['price_expense'] / 2  ;
}
else {
    $expense_price= $_POST['price_expense'] ;
}

if ($username === 'Cyril' && $for === 'tous'){
    $for2 = 'mathilde';
}
else {
    $for2=$_POST['for_who'];
}
if ($username === 'Mathilde' && $for === 'tous'){
    $for2 = 'cyril';
}
else {
    $for2=$_POST['for_who'];
}
    
$createlist = $mysqlClient ->prepare ('INSERT INTO expenses (users_name,expense_name,price,for_who) VALUES (:username, :expense_name,:expense_price,:for_who)');
$createlist -> execute ([
    'username'=> $username,
    'expense_name' => $expense_name,
    'expense_price'=> $expense_price,
    'for_who'=> $for2
 
]);

    redirectToUrl('expenses.php');

?>
          



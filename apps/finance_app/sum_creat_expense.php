
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

$createlist = $mysqlClient ->prepare ('INSERT INTO expenses (users_name,expense_name,price,for_who) VALUES (:username, :expense_name,:expense_price,:for_who)');
$createlist -> execute ([
    'username'=> $username.' (tous)',
    'expense_name' => $expense_name,
    'expense_price'=> $expense_price,
    'for_who'=> 'mathilde'
 
]);

    redirectToUrl('expenses.php');


}
if ($username === 'Mathilde' && $for === 'tous'){

    $createlist = $mysqlClient ->prepare ('INSERT INTO expenses (users_name,expense_name,price,for_who) VALUES (:username, :expense_name,:expense_price,:for_who)');
    $createlist -> execute ([
        'username'=> $username.' (tous)',
        'expense_name' => $expense_name,
        'expense_price'=> $expense_price,
        'for_who'=> 'cyril'

    ]);
    
        redirectToUrl('expenses.php');
    
    
    }

    
$createlist = $mysqlClient ->prepare ('INSERT INTO expenses (users_name,expense_name,price,for_who) VALUES (:username, :expense_name,:expense_price,:for_who)');
$createlist -> execute ([
    'username'=> $username,
    'expense_name' => $expense_name,
    'expense_price'=> $expense_price,
    'for_who'=> $for,
 
]);

    redirectToUrl('expenses.php');

?>
          



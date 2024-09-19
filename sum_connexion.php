
<?php 
session_start();
require_once(__DIR__.'/functions.php'); 
require_once(__DIR__.'/users_data.php'); 

$dataUser = $_POST ;

if(!empty($_POST['chkbox'])){
    setcookie('LOGGED_USER',$dataUser['user_name']);
    setcookie('pwd',$dataUser['user_pwd']);
};
if(!isset($dataUser['user_name'])
  ||!isset($dataUser['user_pwd'])
  || empty($dataUser['user_pwd'])
  || empty($dataUser['user_name'])
)
{
    redirectToUrl('index.php');
}
else {
    foreach($users as $user){
        if(
            $user['user_name'] === $dataUser['user_name'] &&
            $user['user_pwd'] === $dataUser['user_pwd']
            
        )
        {
            $_SESSION['LOGGED_USER'] = $user['user_name'];
            redirectToUrl('homepage.php');

          
        }
        else {
            redirectToUrl('index.php');
        }
    }
    
    if (!isset($loggedUser)){
        $errormessage = sprintf('Les info sont mauvaise,');
    }

}




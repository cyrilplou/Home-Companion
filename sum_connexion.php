
<?php 
session_start();
require_once(__DIR__.'/functions.php'); 
require_once(__DIR__.'/users_data.php'); 

$username= $_POST['user_name'];
$userpwd = $_POST['user_pwd'];

if(!empty($_POST['chkbox'])){
    setcookie('LOGGED_USER',$username);
    setcookie('pwd',$userpwd);
};
if(!isset($username)
  ||!isset($userpwd)
  || empty($userpwd)
  || empty($username)
)
{
    redirectToUrl('index.php');
}
else {
    foreach($users as $user){
        if(
            $user['user_name']=== $username  &&
            $user['user_pwd']=== $userpwd
            
        )
        {
            $_SESSION['LOGGED_USER'] = $username;
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




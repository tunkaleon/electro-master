<?php
session_start();
include('config.php');
if(isset($_POST['submit'])){

$email= mysqli_real_escape_string($conn,$_POST['email']);
$password= mysqli_real_escape_string($conn,$_POST['password']);

$login_query="SELECT * FROM users WHERE email='$email' AND password='$password'";
$login_query_run = mysqli_query($conn, $login_query);
if(mysqli_num_rows($login_query_run) > 0 ){

    $_SESSION['autho'] = true;

    $userdata = mysqli_fetch_array($login_query_run );
    $username = $userdata['names'];
    $useremail = $userdata['email'];


    $_SESSION['autho_user'] = [
        'names'=>$username,
        'email'=>$useremail
    ];
    if($userdata['user_type'] == 1){
        header('location:dashboard/index.php');
    }
    elseif($userdata['user_type'] == 0 ){
        header('location:index.php');
    }
     else{
        echo'login fail';
     }   
    
}else {
echo'login fail try again';
}}
?>
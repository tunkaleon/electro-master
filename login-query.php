
<?php
session_start();
include('config.php');

if(isset($_POST['submit']))
{


    $username=$_POST['email'];
    $pass=$_POST['password'];
    
    $sql="select * from users where email='".$username."' AND password='".$pass."'";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($result);
    if(!empty($row))
    { 
    if($row['user_type']=="1"){
        $_SESSION['username']="$userame";
        header("location:dashboard/index.php");
    }
    elseif($row['user_type']=="client"){
        $_SESSION['username']="$username";
        header("location:index.php");
    }
    else{
        echo"username or password is incorrect";
        header('location:login.php');
    }
}
else{
    echo"username or password is incorrect";
    header('location:login.php');
 
}
}

?>
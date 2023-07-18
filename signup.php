<?php
session_start();
include('config.php');
if(isset($_POST['register'])){

    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $rpass=$_POST['cofirmpass'];
    
    //to see if password is mutch
    if($pass !==$rpass){
        header('location:login.php?error=password not march!!');
    }
    //check password length.
    elseif(strlen($pass) <6 ){
            header('location:login.php?error=password must be at least 6 characters');
    }else{
            //to chek whether there is user of this eamil or not?
            $stmt=$con->prepare("SELECT count(*) from users WHERE email=?");
            $stmt->bind_param('s',$email);
            $stmt->execute();
            $stmt->bind_result($num_rows);
            $stmt->store_result();
            $stmt->fetch();
        
            //if user is alread exist in database
            if($num_rows !=0){
                header('location:login.php?error=email is arleady exist!');
            }else{

                $query = $con->prepare("INSERT INTO users(names,email,password) VALUES(?,?,?)");
                $query->bind_param('sss',$name,$email,md5($pass));
                if($query->execute()){
                    $_SESSION['email'] = $email;
                    $_SESSION['names'] = $name;
                    $_SESSION['loged_in'] = true;
                    echo "<script>alert('Record order successfully');</script>";
                    echo "<script>window.location='login.php'</script>"; 
                

                }else{
                        header('location:login.php?error=fail to create account');
                }
            }
    }
}

?>
<?php
	require 'config.php';
if(isset($_POST['update'])){

    $id=$_POST['id'];
    $name=$_POST['name'];
    $desc=$_POST['desc'];
    $price=$_POST['price'];
    $qty=$_POST['qty'];
    $date=$_POST['date'];
    $update="UPDATE products set p_names='$name',description='$desc',price='$price',quantity='$qty',date='$date' WHERE id='$id'";
    $query=mysqli_query($conn, $update );
    if($query){
       header('location:product_view.php');
    }
    else{
        echo"<script> alert('samething went wrong')</script>";
        echo"<script>window.location.href='view_category.php'";

    }
   
}


?>
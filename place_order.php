<?php

include('config.php');
session_start();
if(isset($_POST['order'])){

// get user info and store in database
$name=$_POST['names'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$addrss = $_POST['address'];
$order_cost = $_SESSION['total'];
$order_stutus = "on_hold";
$user_id= 1;
$order_date = date('y-m-d H:i:s');

$stmt = $con->prepare("INSERT INTO orders(order_cost,order_stutus,user_id,client_names,user_phone,user_city,user_address,order_date)
                            VALUES(?,?,?,?,?,?,?,?);");
$stmt->bind_param('isisisss',$order_cost,$order_stutus,$user_id,$name,$phone,$city,$addrss,$order_date);

$stmt->execute();
  

$order_id = $stmt->insert_id;

//get product from cart(form cart)
$_SESSION['cart_item'];
foreach($_SESSION['cart_item'] as $key => $value)
{
    $product = $_SESSION['cart_item'][$key];
   
    $product_id = $product['id'];
    $product_name = $product['p_names'];
    $product_image = $product['image'];
    $product_price = $product['price'];
    $product_quantity = $product['quantity'];

    $stmt2 = $con->prepare("INSERT INTO order_items (order_id,product_id,product_name,product_image,product_price,product_quantity,user_id,order_date) 
                    VALUES(?,?,?,?,?,?,?,?)");
    $stmt2->bind_param('iissiiis',$order_id,$product_id, $product_name,$product_image,$product_price,$product_quantity,$user_id,$order_date);


    $stmt2->execute();
    // print_r($stmt2);
   
    if($stmt2){
         
        echo "<script>alert('thank you for shoping with us your order is recieved');</script>";
        
        unset($_SESSION['cart_item']);

        header('location:shopping_success.php'); 
    }


}
//store 


    
}









?>
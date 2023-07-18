<?php
	session_start();
	require 'config.php';

	// Add products into the cart table
	if (isset($_POST['submit'])) {
	  $pname = $_POST['name'];
	  $desc = $_POST['desc'];
	  $price = $_POST['price'];
	  $qty = $_POST['qty'];
	  $date= $_POST['date'];
    $category=$_POST['category'];

      $filename = $_FILES["uploadfile"]["name"];
      $tempname = $_FILES["uploadfile"]["tmp_name"];
      $folder = "./image/" . $filename;

          $query = $conn->prepare('INSERT INTO products (p_names,description,price,quantity,date,category,image) VALUES (?,?,?,?,?,?,?)');
          $query->bind_param('sssssss',$pname,$desc,$price,$qty,$date,$category,$filename);
          $query->execute();
        move_uploaded_file($tempname,$folder);
                // Message for successfull insertion
                echo "<script>alert('saved successfull');</script>";
                echo "<script>window.location.href='index.php'</script>";
                }
                else
                {
                // Message for unsuccessfull insertion
                echo "<script>alert('Something went wrong. Please try again');</script>";
                echo "<script>window.location.href='index.php'</script>";
                
                }

?>
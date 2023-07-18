<?php
session_start();
    include('config.php');
    if(isset($_GET['id'])){

        $product_id = $_GET['id'];

        $stmt = $con->prepare("select * from products where id = ?");
        $stmt->bind_param("i",$product_id);
        $stmt->execute();
        $product = $stmt->get_result();
        

    }
    else{
        header('location:index.php');
    }
	include("header.php");
?>
<br><br>


        <section class="container single-product my-5 pt-5">
            <div class="row mt-5">

                <?php while($row = $product->fetch_assoc()){ ?>    
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <img src="img/<?php echo $row['image']; ?>"class=" img-fluid w-100 pd-1"width="50%" id="mainImg">
                </div>

                   

                <div class="container col-lg-6 col-md-12 col-12">
                    <br>
                    <h4 class="py-4"><?php echo $row['p_names']; ?></h4>
                    <h4><?php echo $row['price']; ?></h4>
                    <form action="cart.php" method="POST">
                    <input type="hidden" name=" product_id" value="<?php echo $row['id']; ?>">
                    <input type="hidden" name=" product_image" value="<?php echo $row['image']; ?>">
                    <input type="hidden" name=" product_name" value="<?php echo $row['p_names']; ?>">
                    <input type="hidden" name=" product_price" value="<?php echo $row['price']; ?>">
                    <input type="number" name="product_quantity"value="1">
                    <button class="buy-btn btn-info" type="submit" name="add_to_cart">Add to cart</button><br><br>
                    </form>
						<br>
                    <span>  <b><?php echo $row['description']; ?></b></span>
                </div>
            
                <?php } ?>
            </div>
        </section><br><br>
                                <script>
                                    var mainImg = document.getElementById("mainImg");
                                    var smallImg = document.getElementsByClassName("small-img");
                                    for(let i=0; i<4; i++){
                                        smallImg[i].onclick = function(){
                                        mainImg.src = smallImg[i].src;
                                    }
                                    }

                                </script>



    <?php
		
		include('footer.php');
		?>
	</body>
</html>

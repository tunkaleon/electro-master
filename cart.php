
<?php
session_start();
if(isset($_POST['add_to_cart']))
{

	if(isset($_SESSION['cart_item']))
	{

		$products_array_ids = array_column($_SESSION['cart_item'],"product_id");

		if(!in_array($_POST['product_id'], $products_array_ids ))
			{		
				// $product_id = $_POST['id']; 
		

			$product_id = $_POST['product_id'];
			$product_name = $_POST['product_name'];
			$product_price = $_POST['product_price'];
			$product_image = $_POST['product_image'];
			$product_quantity = $_POST['product_quantity'];

			$product_array = array(

				'id'=> $product_id,
				'p_names'=> $product_name,
				'price'=> $product_price,
				'image'=> $product_image,
				'quantity'=> $product_quantity
			);
			$_SESSION['cart_item'][$product_id ] = $product_array;
		}
			else{
				echo'<script>alert("product was alreadto cart");</script>';
				echo'<script>window.location="index.php"';
			}
	}
	else
	{
		$product_id = $_POST['product_id'];
		$product_name = $_POST['product_name'];
		$product_price = $_POST['product_price'];
		$product_image = $_POST['product_image'];
		$product_quantity = $_POST['product_quantity'];

		$product_array = array(

			'id'=> $product_id,
			'p_names'=> $product_name,
			'price'=> $product_price,
			'image'=> $product_image,
			'quantity'=> $product_quantity
		);
		$_SESSION['cart_item'][$product_id ] = $product_array;
	}

	//calculation total

	calculationtotalcart();
	//remove product from cart
}
else if(isset($_POST['remove'])){
	$product_id = $_POST['id']; 
	unset($_SESSION['cart_item'][$product_id]);

	calculationtotalcart();

}
else if(isset($_POST['edit'])){
	// to get id and quantity from the form
	$product_id = $_POST['id'];
	$product_qty = $_POST['qty'];

	//to get the product array from the session
	$product_array = $_SESSION['cart_item'][$product_id];
	// update the product quantity
    $product_array['qty'] = $product_qty ;
	//return array back to its place
	$_SESSION['cart_item'][$product_id] = $product_array;

	calculationtotalcart();

}
else{
header('location:index.php');
}
function calculationtotalcart(){
	$total = 0;
	foreach($_SESSION['cart_item'] as $key => $value){
		$product= $_SESSION['cart_item'][$key];
		$price = $product['price'];
		$quantity=$product['quantity'];
		$total = $total + ($price * $quantity);
	}
	$_SESSION['total'] = $total;
}
include('header.php');
?>
<br><br>
                            <center><form method="post" action="checkout.php">
                                <table cellspacing="0" class="shop_table cart" id="customers">
                                    <thead>
                                        <tr>
                                            
                                            <th class="product-thumbnail">Image</th>
                                            <th class="product-name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="product-quantity">Quantity</th>
                                            <th class="product-subtotal">Total</th>
                                            <th class="product-subtotal text text-danger">Remove item</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php		
                                        foreach ($_SESSION['cart_item'] as $key => $value){
                                           
                                    ?>
                                        <tr class="cart_item">
                                            

                                            <td class="product-thumbnail">
                                                <a href="#single-product.html"><img width="80" height="90" alt="" class="shop_thumbnail" src="img/<?php echo $value["image"]; ?>"></a>
                                            </td>

                                            <td class="product-name">
                                                <a href="#single-product.html"><?php echo $value["p_names"]; ?></a> 
                                            </td>

                                            <td class="product-price">
                                                <span class="amount"><?php echo $value["price"]; ?> frw</span> 
                                            </td>

                                            <td class="product-quantity">
												<form method='post' action=''>
													
													<!-- <input type="hidden" name="id" value="<?php $value['id']; ?>"> -->
													<?php echo $value["quantity"]; ?>
													<!-- <input type="submit"name="edit" value="edit" class="btn btn-warning"> -->
                                                </form>
                                                </div>
                                            </td>

                                            <td class="product-subtotal">
                                            <b><span class="product_price"><?php echo  $value['quantity'] * $value['price'];?> frw</b>
                                            </td>
                                            <td>
                                            <form method='post' action=''>
                                                <input type='hidden' name='id' value="<?php echo $value["id"]; ?>" />
                                                <input type='hidden' name='action' value="remove" />
                                                <button type='submit' class="remove btn btn-danger" name="remove">Remove Item</button>
                                            </form>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                        <tr>
                                            <td class="actions" colspan="4">
                                                <div class="coupon text-right text-info" >
                                                    <h3><b>Total</h3>
                                                </div>
												<td colspan="2" >
													<b><?php echo $_SESSION['total'];?> Frw</b>
												</dt>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="actions" colspan="6">
                                                <div class="coupon">
                                                    
                                                </div>
												<form action="checkout.php" method="post">
													<input type="submit" name="checkout" value="Checkout" class="btn btn-info text-center">
												</form>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                               
                                        </center></form><br>
                                    <br>
			<!-- FOOTER -->
		<footer id="footer">
			
			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Birihomarket <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://biriho.rw" target="_blank">Biriho</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>

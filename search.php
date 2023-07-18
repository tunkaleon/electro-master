

<?php
session_start();
include('header.php');


?>

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
					</div>
				<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
                                    <?php
                                        include("config.php");
                                        if(isset($_POST['submit_search'])){
                                            $search=mysqli_real_escape_string($con,$_POST['search']);
                                            $sql="select * from products where p_names like '%$search%' or description like '%$search%' or price like '%$search%'or quantity like '%$search%' or date like '$search'";
                                            $result=mysqli_query($con,$sql);
                                            $queryresult=mysqli_num_rows($result);
                                            if ($queryresult > 0){
                                                while($row = mysqli_fetch_assoc($result)){
                                                  ?>
                                        	<div class="product text-center col-lg-3 col-md-4 col-sm-12 mb-2">
											<a href= "<?php echo "single_product.php?id=".$row['id']; ?>"><img class="img fuild mb-3" src="img/<?php echo $row['image'];?>"width="50%"></a>
												<h5 class="p-name"><?php echo $row['p_names']; ?></h5>
												<h4 class="p-price"><?php echo $row['price']; ?>rfrw</h4>
												<a href="<?php echo "single_product.php?id=".$row['id']; ?>"><button class="buy-btn btn btn-warning">buy now</button></a>
											</div>
											<?php }?>
										</div>
                                    <?php
									}
                                            
                                           
                                         else{
                                           echo"
										  <div class=text text-warning>
										  <h3 class=text text-danger>  no results found! </h3>";
                                        }}
                                    

                                    ?>

										<!-- /product -->
												
										</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
				<?php include('footer.php');?>

	</body>
</html>

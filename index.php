<?php
	session_start();
	include("header.php");
?>

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container-fluid style="cursor:pointer;  margin-bottom:2rem ;" >
				<!-- row -->
				<div id="slider">
					<figure>
					<img src="./img/11.jpg" alt=""width="18%">
					<img src="./img/p001.JPG" alt=""width="20%">
					<img src="./img/news-700x435-1.jpg" alt=""width="21%">
					<img src="./img/c002.jpg" alt=""width="21%">
					<img src="./img/12.jpg" alt=""width="19%" height="40%">
					<figure>
			</div>
			<!-- /container -->
			
			<hr>
		</div><br>
		<!-- /SECTION -->
				<!-- Products tab & slick -->
								<section id="featured" class=" my-5 py-5 badge-dark">
									<div class="container-fluid text-center mt-5 py-5 badge-secondary">
										
											<h2 class="text text-info"  style="font-family: Lucida Console;">Our featured products</h2>
									
										<hr ><br>
										<div class="row max-auto container-fluid ">

											<?php

												include('config.php');
												$stmt = $con->prepare("select * from products");
												$stmt->execute();
												$products = $stmt->get_result();
												while($row=$products->fetch_assoc()){


											?>

												<div class="product col-lg-2 col-md- 4 col-sm-12 mb-2">
												<a href= "<?php echo "single_product.php?id=".$row['id']; ?>"><img class="img fuild mb-3" src="img/<?php echo $row['image'];?>"width="75%"></a><br><br>
														<div class="star">
															<i class='fa fa-star' style='color:#ec3722'></i>                  
															<i class='fa fa-star' style='color:#ec3722'></i>
															<i class='fa fa-star' style='color:#ec3722'></i>
															<li class="fa fa-star"></li>
															<li class="fa fa-star"></li>
														</div><br>
													<h5 class="p-name"><?php echo $row['p_names']; ?></h5>
													<i><h5 class="p-price text-info"><?php echo $row['price']; ?>Frw</h5>
													<a href="<?php echo "single_product.php?id=".$row['id']; ?>"><button class="buy-btn btn btn-info text-center" >&nbsp; &nbsp; &nbsp;<b>buy now </b>&nbsp;&nbsp;&nbsp;</button></a>
												</div>
												<?php }?>
											</div>
											<nav aria-label="page navigation example">
												<ul class="pagination mt-5">
													<li class="page-item"><a class="page-link" href="index.php">previous</a></li>
													<li class="page-item"><a class="page-link" href="index.php">1</a></li>
													<li class="page-item"><a class="page-link" href="index.php">2</a></li>
													<li class="page-item"><a class="page-link" href="index.php">3</a></li>
													<li class="page-item"><a class="page-link" href="index.php">next</a></li>

												</ul>
											</nav>
										</div>

								</section>


		<!-- FOOTER -->
		<?php
		
		include('footer.php');
		?>
	</body>
</html>

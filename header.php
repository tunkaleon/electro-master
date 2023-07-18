


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>birihomarket</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>
		<link  rel="stylesheet" href="css/css.css">
		<!-- <link rel='stylesheet' href='css/style2.css' type='text/css' media='all' /> -->

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 60%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}


#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #cb410b;
  color: white;
}

</style>

    </head>
	<body>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> 0783779314/ 0788200521</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> anthobenon@gmail.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> kigali city tower</a></li>
					</ul>
					<ul class="header-links pull-right">
						<li><a href="login.php"><i class="fa fa-user-o"></i> My Account</a></li>
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="#" class="logo">
									<img src="./img/c12.png" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form action="search.php" method="Post">
									<input class="input" placeholder="Search here" name="search">
									<button class="search-btn" name="submit_search">Search</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
		
						<!-- ACCOUNT -->
							<div class="dropdown">
								<a href="cart.php">
										<i class="fa fa-shopping-cart"></i>
										<span>Your Cart</span>
										<div class="qty">
									
											<?php
											$count=0;
											if(isset($_SESSION['cart_item'])){
												$count=count($_SESSION['cart_item']);
												echo $count;
											}
											else{
												unset($_SESSION['cart_item']);
												echo $count;
											}
											?>
												
										</div>
								</a>
							</div>
						
								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
                    <h4>
					<ul class="main-nav nav navbar-nav text-info">
						<li class="active"><a href="index.php">Home</a></li>
						<li><a href="store.php">Store</a></li>
						<li><a href="view-category.php?id=TVS">Tvs</a></li>
						<li><a href="view-category.php?id=desktop">desktop</a></li>
						<li><a href="view-category.php?id=fridge">fridges</a></li>
						<li><a href="view-category.php?id=camera">cameras</a></li>
						<li><a href="view-category.php?id=accessory">Accessories</a></li>
						<li><a href="view-category.php?id=fashion">fashion</a></li>
					</ul></h4>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->
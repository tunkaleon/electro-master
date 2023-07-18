
<?php
session_start();
if(!empty($_SESSION['cart_item']) && isset($_POST['checkout'])){

//let user in
}else{
	header("location:index.php");
}
include('header.php');
?>



		<!-- /NAVIGATION --><br><br>
<!-- BREADCRUMB -->
<div id="breadcrumb" class="section">
  <!-- container -->
  <div class="container">
    <!-- row -->
    <div class="row">
      <div class="col-md-12">
        <h3 class="breadcrumb-header">Checkout</h3>
        <ul class="breadcrumb-tree">
          <li><a href="#">Home</a></li>
          <li class="active">Checkout</li>
        </ul>
      </div>
    </div>
    <!-- /row -->
  </div>
  <!-- /container -->
</div>
<!-- /BREADCRUMB -->

<!-- SECTION -->
<div class="section">
  <!-- container -->
  <div class="container">
    <!-- row -->
    <div class="row">

      <div class="col-md-7">
        <!-- Billing Details -->
        <div class="billing-details">
          <div class="section-title">
            <h3 class="title">Delivary address</h3>
          </div>
		<form action="place_order.php" method="POST">
          <div class="form-group">
            <input class="input" type="text" name="names" placeholder="Full Names" required>
          </div>
		 <div class="form-group">
            <input class="input" type="email" name="email" placeholder="your email" required>
          </div>
          <div class="form-group">
            <input class="input" type="text" name="phone" placeholder=" your phone " required>
          </div>
          <div class="form-group">
            <input class="input" type="text" name="city" placeholder="statecity"required>
          </div>
          <div class="form-group">
            <input class="input" type="tel" name="address" placeholder=" your address" required>
          </div>
          <div class="form-group">
    
          </div>
        </div>
      </div><br><br><br><br><br><br><br><br>
      <!-- Order Details -->
        </div><br>
		<h4><u><div><strong class="order-total text text-danger">Total: frw <?php echo $_SESSION['total'];?></strong></div></h4></u>
        <center><input type="submit" name="order"value="Place order" class="btn btn-danger" width="90%"></center>
      </div>
	</form>
      <!-- /Order Details -->
    </div>
	
    <!-- /row -->
  </div>
  <!-- /container -->
</div>
<!-- /SECTION -->

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

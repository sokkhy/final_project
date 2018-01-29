<header id="header"><!--header-->
		<div class="header_top" style="background: none repeat scroll 0 0 #eb0606;"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
							  <li><a href="javascript:" style="color: #fff"><i class="fa fa-phone"></i> +855 10 910 651</a></li>
							  <li><a href="javascript:" style="color: #fff"><i class="fa fa-envelope"></i> khy@4shop.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="javascript:"><i class="fa fa-facebook" style="color: #fff"></i></a></li>
								<li><a href="javascript:"><i class="fa fa-twitter" style="color: #fff"></i></a></li>
								<li><a href="javascript:"><i class="fa fa-linkedin" style="color: #fff"></i></a></li>
								<li><a href="javascript:"><i class="fa fa-dribbble" style="color: #fff"></i></a></li>
								<li><a href="javascript:"><i class="fa fa-google-plus" style="color: #fff"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
				<div class="col-md-8 clearfix">
						<div class="shop-menu clearfix pull-right">
							  <ul role="menu" class="sub-menu">
							  		<li><a href="index.php" class="active">Home</a></li>
	                                <li><a href="shop.php">Products</a></li>
									<li><a href="ViewCart.php">Cart</a></li>
									<li><a href="login.php">Login</a></li>
	                            </ul>
						</div>
					</div>
				<!-- </div> -->
	<!-- 		</div>
		</div>  -->
		<!--/header-middle-->

		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">

						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.php" class="active">Home</a></li>
                                <li><a href="shop.php">Products</a></li>
								<li><a href="checkout.php">Checkout</a></li>
								<li><a href="viewCart.php">Cart</a></li>
								<li><a href="login.php">Login</a></li>
								<li><a href="contact-us.php">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3" style="display:  inline-flex;position:  relative;">
						<div class="search_box pull-right" style="width: 200px;">
							<input style="color:black;margin-right: 200px;" id="keywords" placeholder="Search" onkeyup="searchFilter()"/>
<!-- 							   <select id="sortBy" onchange="searchFilter()">
							        <option value="">Sort By</option>
							        <option value="asc">Ascending</option>
							        <option value="desc">Descending</option>
							    </select> -->
						</div>
						<div style="width: 200px;display: -webkit-box;margin-left: 192px;margin-top: -45px;">
							<div style="margin-left:  -200px;margin-top: 51px;color: red;font-weight: bolder;">
								<span>Your Cart</span>
							</div>
							<div style="cursor:pointer;" id="cart">
								<p id="CartNm" style="margin-top: 33px;margin-left: 20px;padding-top: 8px;position:  absolute;font-size: 1em;font-weight: bolder;color: red;">0</p>
								<img src="cart.png" alt="" style="margin-top: 28px;width: 50px;height: 54px;">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header>

<script>
$(document).ready(function(){
  $("#cart").click(function(){
      window.location.href = "http://localhost:81/4Shop/viewCart.php";
  })
});
</script>

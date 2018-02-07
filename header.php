<?php
// ob_start();
//  $host = "localhost";
//   $user = "root";
//   $password = "";
//   $database = "dbkeybest";
//
//  $conn = new mysqli($host, $user, $password, $database);
//  // Check connection
//  if ($conn->connect_error) {
//      die("Connection failed: " . $conn->connect_error);
//
//  }
//  $query = $conn->query("SELECT * from customers");
//  $row = $query->fetch_assoc();
 ?>
<style>
nav ul {
margin: 5px;
padding: 0;
list-style: none;
position: relative;
float: right;
/* background: #eee; */
/* border-bottom: 1px solid #fff; */
border-radius: 3px;
}

nav li {
float: left;
}

nav #login {
border-right: 1px solid #ddd;
box-shadow: 1px 0 0 #fff;
}

nav #login-trigger,
nav #signup a {
display: inline-block;
*display: inline;
*zoom: 1;
height: 25px;
line-height: 25px;
font-weight: bold;
padding: 0 8px;
text-decoration: none;
color: #fff;

}

nav #signup a {
border-radius: 0 3px 3px 0;
}

nav #login-trigger {
border-radius: 3px 0 0 3px;
}

nav #login-trigger:hover,
nav #login .active,
nav #signup a:hover {
	text-shadow: 0 1px 0 #fff;
	color: #000;
}

nav #login-content {
	display: none;
	    position: fixed;
	    top: 44px;
	    /* right: 28px; */
	    z-index: 999;
	    background: #fff;
	    background-image: linear-gradient(top, #fff, #eee);
	    padding: 15px;
	    box-shadow: 0 2px 2px -1px rgba(0,0,0,.9);
	    border-radius: 3px 0 3px 3px;
	    height: 275px;
}

nav li #login-content {
	right: 65px;
	width: 330px;
}

/*--------------------*/

#inputs input {
background: #f1f1f1;
padding: 6px 5px;
margin: 0 0 5px 0;
width: 238px;
border: 1px solid #ccc;
border-radius: 3px;
box-shadow: 0 1px 1px #ccc inset;
}

#inputs input:focus {
background-color: #fff;
border-color: #e8c291;
outline: none;
box-shadow: 0 0 0 1px #e8c291 inset;
}

/*--------------------*/

#login #actions {
margin: 10px 0 0 0;
}

#login #submit {
background-color: #d14545;
background-image: linear-gradient(top, #e97171, #d14545);
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
border-radius: 3px;
text-shadow: 0 1px 0 rgba(0,0,0,.5);
box-shadow: 0 0 1px rgba(0, 0, 0, 0.3), 0 1px 0 rgba(255, 255, 255, 0.3) inset;
border: 1px solid #7e1515;
float: left;
height: 30px;
padding: 0;
width: 100px;
cursor: pointer;
font: bold 14px Arial, Helvetica;
color: #fff;
}

#login #submit:hover,
#login #submit:focus {
background-color: #e97171;
background-image: linear-gradient(top, #d14545, #e97171);
}

#login #submit:active {
outline: none;
box-shadow: 0 1px 4px rgba(0, 0, 0, 0.5) inset;
}

#login #submit::-moz-focus-inner {
border: none;
}

#login label {
float: right;
line-height: 30px;
}

#login label input {
position: relative;
top: 2px;
right: 2px;
}
.sign_up{
	    margin-top: 50px;
}
</style>

<header id="header"><!--header-->
		<div class="header_top" style="background: none repeat scroll 0 0 #eb0606; height: 85px;"><!--header_top-->
			<div class="container">
				<div class="row" style="margin-top: 24px;">
					<div class="col-sm-3">
						<div class="navbar-brand" style="margin-left: -31px; margin-top: -25px;">
						<a href="index.php"><img src="logo.png" alt=""></a>

						</div>
					</div>
					<div class="col-sm-3">
						<div class="contactinfo">
							<ul class="nav nav-pills">
							  <li><a href="javascript:" style="color: #fff">+855 10 910 651</a></li>
							  <li><a href="javascript:" style="color: #fff">khy@4shop.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
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
					<?php
					// if(isset($_POST["login"])) {
					// 		 if($row["customer_password"] == $_POST["pass"] && $row["customer_email"] == $_POST["mail"]){
					// 			header("Location:index.php");
					// 		}else {
					// 			echo "<h2 style='color: red;'> Invalide Email or Password</h2>";
					// 		}
					// }
					 ?>
					<div class="col-sm-3">
            <div class="" style="display:  inline-flex;position:  relative;">
              <div class="search_box pull-right" style="width: 180px;">
                <input style="color:black;margin-right: 200px;" id="keywords" placeholder="Search product here" onkeyup="searchFilter()"/>

              </div>
						<nav>
							  <ul>
							    <li id="login">
							      <a id="login-trigger" href="login.php">
							        Log in
							      </a>
							      <!-- <div id="login-content">
							        <form style="width:310px;margin-top: 4px;" id="form"  action="" method="post">
							          <div id="inputs">
							            <input id="username" type="email" name="mail" placeholder="Your email address" required>
							            <input id="password" type="password" name="pass" placeholder="Password" required>
							          </div>
							          <div id="actions">
							            <input type="submit" id="submit" value="Log in"  name="login" >

							          </div>
												<div class="sign_up">
													<span><i>Not have 4shop account?</i></span>
													<a href="login.php" class="btn btn-primary">Sign Up now!</a>
												</div>
							        </form>

							      </div> -->
							    </li>
							    <!-- <li id="signup">
							      <a href="">Sign up FREE</a>
							    </li> -->
							  </ul>
							</nav>
					</div>
				</div>
			</div>
		</div>
  <!--/header_top-->
				<!-- <div class="col-md-8 clearfix">
						<div class="shop-menu clearfix pull-right">
							  <ul role="menu" class="sub-menu">
							  		<li><a href="index.php" class="active">Home</a></li>
	                                <li><a href="shop.php">Products</a></li>
									<li><a href="ViewCart.php">Cart</a></li>
									<li><a href="login.php">Login</a></li>
	                            </ul>
						</div>
					</div> -->
				<!-- </div> -->
	<!-- 		</div>
		</div>  -->
		<!--/header-middle-->

		<!-- <div class="header-bottom">
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
		</div> -->
	</header>

<script>
$(document).ready(function(){
  $("#cart").click(function(){
      window.location.href = "http://localhost:81/4Shop/viewCart.php";
  })
});
// $(document).ready(function(){
//   $('#login-trigger').click(function(){
//     $(this).next('#login-content').slideToggle(200);
//     // $(this).toggleClass('active');
//
//     if ($(this).hasClass('active')) $(this).find('span').html('&#x25B2;')
//       else $(this).find('span').html('&#x25BC;')
//     })
// });
// $(document).ready(function(){
//   $('#login-content').mouseleave(function(){
// $(this).css("display", "none");
//
//     })
// });
</script>

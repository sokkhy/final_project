<?php
ob_start();
session_start();

 $host = "localhost";
  $user = "root";
  $password = "";
  $database = "dbkeybest";

 $conn = new mysqli($host, $user, $password, $database);
 // Check connection
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }
$stmt = $conn->prepare("INSERT INTO customers (customer_id,customer_name, customer_address, customer_phone, customer_email, customer_password) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $customer_id, $customer_name, $customer_address, $customer_phone, $customer_email, $customer_password);

//validate form
if(!empty($_POST['cusID']) && !empty($_POST['cusName']) && !empty($_POST['cusAddrr']) && !empty($_POST['cusPhn']) && !empty($_POST['email']) && !empty($_POST["cusPw"])){
  $customer_id = $_POST["cusID"];
  $customer_name = $_POST["cusName"];
  $customer_address=$_POST["cusAddrr"];
  $customer_phone = $_POST["cusPhn"];
  $customer_email= $_POST["email"];
  $customer_password = $_POST["cusPw"];
  $stmt->execute();
  }

  include('dbcon.php');
  $query = $db->query("SELECT * from customers");
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.themeum.com/html/eshopper/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Dec 2017 07:48:40 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | 4Shop</title>
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32"/>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.html">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.html">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.html">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.html">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.html">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head><!--/head-->

<body>
	<?php include 'header.php';?><!--/header-->

	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form">
            <?php
            if(isset($_POST["login"])) {
            while($row = $query->fetch_assoc()){
                 if($row["customer_email"] == $_POST["mail"]&&$row["customer_password"] == $_POST["pass"]){
                  header("Location:index.php");
                }
                else {
                  echo "<h2 style='color: red;'> Invalide Email or Password</h2>";
                }
              }
            }
             ?>
						<h2>Login to your account</h2>
						<form action="" method="post">
              <input type="email" placeholder="Email Address" name="mail"/>
							<input type="text" placeholder="Password" name="pass"/>
							<span>
								<input type="checkbox" class="checkbox">
								Keep me signed in
							</span>
							<button type="submit" name="login" class="btn btn-default">Login</button>
						</form>
					</div>
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form action="" method="post">
							<input type="text" placeholder="Full name" name="cusName"/>
              <input type="text" placeholder="Your Order code" name="cusID"/>
							<input type="text" placeholder="Address" name="cusAddrr"/>
							<input type="text" placeholder="Phone Number" name="cusPhn"/>
              <input type="email" placeholder="Email" name="email"/>
							<input type="password" placeholder="Password" name="cusPw"/>
							<button type="submit" class="btn btn-default">Signup</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->


<?php include 'footer.php';?>	<!--/Footer-->



    <script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
<?php



 ?>

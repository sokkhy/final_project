<?php
// include database configuration file
include 'dbConfig.php';
$query = $db->query('SELECT COUNT(*) as adidas_total FROM adidas');
$row = $query->fetch_assoc();
$query1 = $db->query('SELECT COUNT(*) as nike_total FROM nike');
$row1 = $query1->fetch_assoc();
$query2 = $db->query('SELECT COUNT(*) as diesel_total FROM diesel');
$row2 = $query2->fetch_assoc();
$query3 = $db->query('SELECT COUNT(*) as puma_total FROM puma');
$row3 = $query3->fetch_assoc();
$query4 = $db->query('SELECT COUNT(*) as prada_total FROM prada');
$row4 = $query4->fetch_assoc();
$query5 = $db->query('SELECT COUNT(*) as versace_total FROM versace');
$row5 = $query5->fetch_assoc();
$query6 = $db->query('SELECT COUNT(*) as tommyhilfiger_total FROM tommyhilfiger');
$row6 = $query6->fetch_assoc();
$query7 = $db->query('SELECT COUNT(*) as hugoboss_total FROM hugoboss');
$row7 = $query7->fetch_assoc();
$query8 = $db->query('SELECT COUNT(*) as underarmour_total FROM underarmour');
$row8 = $query8->fetch_assoc();
$query9 = $db->query('SELECT COUNT(*) as supreme_total FROM supreme');
$row9 = $query9->fetch_assoc();
$query10 = $db->query('SELECT COUNT(*) as gucci_total FROM gucci');
$row10 = $query10->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.themeum.com/html/eshopper/product-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Dec 2017 07:48:48 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>4Shop</title>
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

	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3" style="margin-left: -23px;">
					<div class="left-sidebar">
						<!-- <h2>Category</h2>
						<div class="panel-group category-products" id="accordian">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="javascript:accordian" href="javascript:sportswear">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Sportswear
										</a>
									</h4>
								</div>
								<div id="sportswear" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="javascript:">Nike </a></li>
											<li><a href="javascript:">Under Armour </a></li>
											<li><a href="javascript:">Adidas </a></li>
											<li><a href="javascript:">Puma</a></li>
											<li><a href="javascript:">ASICS </a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="javascript:accordian" href="javascript:mens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Mens
										</a>
									</h4>
								</div>
								<div id="mens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="javascript:">Fendi</a></li>
											<li><a href="javascript:">Guess</a></li>
											<li><a href="javascript:">Valentino</a></li>
											<li><a href="javascript:">Dior</a></li>
											<li><a href="javascript:">Versace</a></li>
											<li><a href="javascript:">Armani</a></li>
											<li><a href="javascript:">Prada</a></li>
											<li><a href="javascript:">Dolce and Gabbana</a></li>
											<li><a href="javascript:">Chanel</a></li>
											<li><a href="javascript:">Gucci</a></li>
										</ul>
									</div>
								</div>
							</div>

							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="javascript:accordian" href="javascript:womens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Womens
										</a>
									</h4>
								</div>
								<div id="womens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="javascript:">Fendi</a></li>
											<li><a href="javascript:">Guess</a></li>
											<li><a href="javascript:">Valentino</a></li>
											<li><a href="javascript:">Dior</a></li>
											<li><a href="javascript:">Versace</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="javascript:">Kids</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="javascript:">Fashion</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="javascript:">Households</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="javascript:">Interiors</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="javascript:">Clothing</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="javascript:">Bags</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="javascript:">Shoes</a></h4>
								</div>
							</div>
						</div> --><!--/category-products-->

									<div class="brands_products"><!--brands_products-->
						<h2>Brands</h2>
						<div class="brands-name">
							<ul class="nav nav-pills nav-stacked">
								<li><a href="adidas.php"> <span class="pull-right">(<?php echo $row['adidas_total'] ?>)</span>Adidas</a></li>
								<li><a href="diesel.php"> <span class="pull-right">(<?php echo $row2['diesel_total'] ?>)</span>Diesel</a></li>
								<li><a href="gucci.php"> <span class="pull-right">(<?php echo $row10['gucci_total'] ?>)</span>Gucci</a></li>
								<li><a href="hugo_boss.php"> <span class="pull-right">(<?php echo $row7['hugoboss_total'] ?>)</span>Hugo Boss</a></li>
								<li><a href="nike.php"> <span class="pull-right">(<?php echo $row1['nike_total'] ?>)</span>Nike</a></li>
								<li><a href="prada.php"> <span class="pull-right">(<?php echo $row4['prada_total'] ?>)</span>Prada</a></li>
								<li><a href="puma.php"> <span class="pull-right">(<?php echo $row3['puma_total'] ?>)</span>Puma</a></li>
								<li><a href="supreme.php"> <span class="pull-right">(<?php echo $row9['supreme_total'] ?>)</span>Supreme</a></li>
								<li><a href="tommy_hilfiger.php"> <span class="pull-right">(<?php echo $row6['tommyhilfiger_total'] ?>)</span>Tommy Hilfiger</a></li>
								<li><a href="under_armour.php"> <span class="pull-right">(<?php echo $row8['underarmour_total'] ?>)</span>Under Armour</a></li>
								<li><a href="versace.php"> <span class="pull-right">(<?php echo $row5['versace_total'] ?>)</span>Versace</a></li>
							</ul>
						</div>
					</div><!--/brands_products-->

						<!-- <div class="price-range">
							<h2>Price Range</h2>
							<div class="well">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b>$ 0</b> <b class="pull-right">$ 600</b>
							</div>
						</div> --><!--/price-range-->

						<div class="shipping text-center"><!--shipping-->
							<img src="images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->

					</div>
				</div>
				<?php
				$output="";
				 $spiltbrand = explode("_",$_GET['CD']);
				 $brand = $spiltbrand[0];
				 //echo $brand;
				 $link = str_replace(" ", '%20',$_GET['ID']);
				 $name = $_GET['ND'];
				 $price =$_GET['PD'];
				 $size = $_GET['SD'];
				 $code = $_GET['CD'];
				 $sid = $_GET['SID'];
				 $output.="<div class='col-sm-9 padding-right'>".
					"<div class='product-details'>".
						"<div class='col-sm-5'>".
							"<div class='view-product'>".
								"<div><img src=".$link." id='pic'></div>".
							"</div>".

						// <div id="similar-product" class="carousel slide" data-ride="carousel">


						// 		    <div class="carousel-inner">
						// 				<div class="item active">
						// 				  <a href="javascript:"><img src="images/product-details/similar1.jpg" alt=""></a>
						// 				  <a href="javascript:"><img src="images/product-details/similar2.jpg" alt=""></a>
						// 				  <a href="javascript:"><img src="images/product-details/similar3.jpg" alt=""></a>
						// 				</div>
						// 				<div class="item">
						// 				  <a href="javascript:"><img src="images/product-details/similar1.jpg" alt=""></a>
						// 				  <a href="javascript:"><img src="images/product-details/similar2.jpg" alt=""></a>
						// 				  <a href="javascript:"><img src="images/product-details/similar3.jpg" alt=""></a>
						// 				</div>
						// 				<div class="item">
						// 				  <a href="javascript:"><img src="images/product-details/similar1.jpg" alt=""></a>
						// 				  <a href="javascript:"><img src="images/product-details/similar2.jpg" alt=""></a>
						// 				  <a href="javascript:"><img src="images/product-details/similar3.jpg" alt=""></a>
						// 				</div>

						// 			</div>


						// 		  <a class="left item-control" href="javascript:similar-product" data-slide="prev">
						// 			<i class="fa fa-angle-left"></i>
						// 		  </a>
						// 		  <a class="right item-control" href="javascript:similar-product" data-slide="next">
						// 			<i class="fa fa-angle-right"></i>
						// 		  </a>
						// 	</div>

						"</div>".
						"<div class='col-sm-7'>".
							"<div class='product-information'>".
								"<img src='images/product-details/new.jpg' class='newarrival' alt='' />".
								"<h2>".$name."</h2>".
								"<p style='font-weight: bolder;'>Available ".$size."</p>".
								"<img src='images/product-details/rating.png' alt='' />".
								"<span>".
									"<span> US ".$price."</span>".
									"<label>Quantity:</label>".
									"<input type='text' value='1' />".
									"<a href='cartAction.php?action=addToCart&id=".$sid."&brand=".$code."' class='addToCart btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to Cart</a>".
								"</span>".
								"<p><b>Availability: </b><span>In Stock</span></p>".
								"<p><b>Condition: </b><span>New</span></p>".
								"<p><b>Brand: </b><span style='text-transform: uppercase;'>".$brand."</span></p>".
								"<a href='javascript:''><img src='images/product-details/share.png' class='share img-responsive'  alt='' /></a>".
							"</div>".
						"</div>".
					"</div>";
					print($output);
							?>
							<div class="tab">
							<div class="category-tab shop-details-tab">
								<div class="col-sm-12">
									<ul class="nav nav-tabs">
										<li><a href="javascript:" class="tablinks" onclick="eachbrand(event, 'detail')" value="detail">Details</a></li>
										<li><a href="javascript:" class="tablinks" onclick="eachbrand(event, 'Shipping')" value="Shipping">Shipping</a></li>
										<li><a href="javascript:" class="tablinks" onclick="eachbrand(event, 'image')" value="image">More Image</a></li>
										<li class="active"><a href="javascript:" class="tablinks" onclick="eachbrand(event, 'relatedProduct')" value="relatedProduct">Related Product</a></li>
									</ul>
								</div>
							</div>
							</div>

							<div id="detail" class="tabcontent" style="display: none">
								detail
							</div>
							<div id="Shipping" class="tabcontent" style="display: none">
								Shipping
							</div>
							<div id="image" class="tabcontent" style="display: none">
								image
							</div>
							<div id="relatedProduct" class="tabcontent">
								relatedProduct
							</div>

							<!--/product-details-->

					<!-- <div class="category-tab shop-details-tab">
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li><a href="javascript:details" data-toggle="tab">Details</a></li>
								<li><a href="javascript:companyprofile" data-toggle="tab">Company Profile</a></li>
								<li><a href="javascript:tag" data-toggle="tab">Tag</a></li>
								<li class="active"><a href="javascript:reviews" data-toggle="tab">Reviews (5)</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade" id="details" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery1.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery2.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery3.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery4.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="tab-pane fade" id="companyprofile" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery1.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery3.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery2.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery4.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="tab-pane fade" id="tag" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery1.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery2.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery3.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery4.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="tab-pane fade active in" id="reviews" >
								<div class="col-sm-12">
									<ul>
										<li><a href="javascript:"><i class="fa fa-user"></i>EUGEN</a></li>
										<li><a href="javascript:"><i class="fa fa-clock-o"></i>12:41 PM</a></li>
										<li><a href="javascript:"><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>
									</ul>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
									<p><b>Write Your Review</b></p>

									<form action="javascript:">
										<span>
											<input type="text" placeholder="Your Name"/>
											<input type="email" placeholder="Email Address"/>
										</span>
										<textarea name="" ></textarea>
										<b>Rating: </b> <img src="images/product-details/rating.png" alt="" />
										<button type="button" class="btn btn-default pull-right">
											Submit
										</button>
									</form>
								</div>
							</div>

						</div>
					</div> --><!--/category-tab-->

					<!-- <div class="recommended_items">
						<h2 class="title text-center">recommended items</h2>

						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend1.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend2.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend3.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend1.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend2.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend3.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							 <a class="left recommended-item-control" href="javascript:recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="javascript:recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>
						</div>
					</div>

				</div> -->
			</div>
		</div>
	</section>

	<?php include 'footer.php';?>	<!--/Footer-->



    <script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>

<script>
function eachbrand(evt, brancname) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
       document.getElementsByClassName("tabcontent").innerHTML = "Paragraph changed!";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(brancname).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
</body>

</html>

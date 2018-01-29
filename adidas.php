<?php
   //Include pagination class file
include('Pagination.php');
    //Include database configuration file
include('dbcon.php');
//Include number of product count
include 'productCount.php';
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.themeum.com/html/eshopper/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Dec 2017 07:48:39 GMT -->
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
</head><!--/head--><!--/head-->

<body>
	<?php include 'header.php';?><!--/header-->
	<script>
function searchFilter(page_num) {
    page_num = page_num?page_num:0;
    var keywords = $('#keywords').val();
    // var sortBy = $('#sortBy').val();
    $.ajax({
        type: 'POST',
        url: 'adidas_getData.php',
        data:'page='+page_num+'&keywords='+keywords,
        //+'&sortBy='+sortBy,
        beforeSend: function () {
            $('.loading-overlay').show();
        },
        success: function (html) {
            $('#posts_content').html(html);
            $('.loading-overlay').fadeOut("slow");
        }
    });
}
</script>
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
				</div>
			</div>
		</div>
	</section><!--/slider-->

	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3" style="margin-left: -23px;">
					<div class="left-sidebar">
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
						<!-- <div class="shipping text-center">
							<img src="images/home/shipping.jpg" alt="" />
						</div> -->

					</div>
				</div>
    <div id="posts_content">
    <?php


    $limit = 6;

    //get number of rows
    $queryNum = $db->query("SELECT COUNT(*) as postNum FROM adidas");
    $resultNum = $queryNum->fetch_assoc();
    $rowCount = $resultNum['postNum'];

    //initialize pagination class
    $pagConfig = array(
        'totalRows' => $rowCount,
        'perPage' => $limit,
        'link_func' => 'searchFilter'
    );
   $pagination =  new Pagination($pagConfig);

    //get rows
   $query = $db->query("SELECT * FROM adidas ORDER BY id DESC LIMIT $limit");
   $output ="";
   $i = 0;
   if($query->num_rows > 0){
   $output.="<div class='col-sm-9 padding-right'>
                    <div class='features_items'>
                        <h2 class='title text-center' style='color:#f40d0d; font-size:2em;'>Best Selling T-shirt</h2>";
    while($row = $query->fetch_assoc()){
        $postID = $row['id'];

        $i++;
        $output.="<div class='col-sm-4'>".
          "<div class='product-image-wrapper'>".
          "<div class='single-products'>";
        $output.= "<div class='productinfo text-center'>".
          "Code: <span style='color:#0063ff; font-size:1.2em;font-family:serif' id='shi_code".$i."'>". $row["shirtCode"]."</span></br>".
          "<span style='font-family:serif;color:#0063ff;' id='shi_name".$i."'>". $row["shirtName"]."</span></br>".
          "<span style='color:#0063ff;' id='shi_size".$i."'>Size: ". $row["shirtSize"]."</span></br>".
          "<img style='width:200px;height:200px;cursor: pointer;' class='shi_img".$i."' src='upload/".$row['image']."'/>".
          "<h2 id='shi_price".$i."'>". $row["Price"]."</h2>".
          "<h2 style='display: none;' id='sid".$i."'>". $row["id"]."</h2>".
          "<a href='cartAction.php?action=addToCart&id=". $row["id"]."&brand=". $row["shirtCode"]."' class='addToCart btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to Cart</a>";
        $output.="</div></div>";
        $output.="</div>";
        $output.="</div>";
        $output.="<script>".
                "$(document).ready(function(){
                    $('.shi_img".$i."').click(function(){
                       var codeDetail =  $('#shi_code".$i."').text();
                       var priceDetail = $('#shi_price".$i."').text();
                       var sizeDetail=  $('#shi_size".$i."').text();
                       var nameDetail =  $('#shi_name".$i."').text();
                       var imgDetail = $('.shi_img".$i."').attr('src');
                       var id = $('#sid".$i."').text();
                       window.location.href = 'http://localhost:81/4Shop/product-details.php?SID='+id+'&CD='+codeDetail+'&SD='+sizeDetail+'&ND='+nameDetail+'&ID='+imgDetail+'&PD='+priceDetail,'_blank';

                     });
                   })".
              "</script>";
 }
?>

<?php
$output.="</div>";
$output.="</div>";
print($output);
 }

?>
<?php echo $pagination->createLinks(); ?>

</div>
		</div>

	</section>
<?php include 'footer.php';?>
<!--/Footer-->
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>

</html>

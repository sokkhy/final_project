<?php
if(isset($_POST['page'])){
    //Include pagination class file
    include('Pagination.php');

    //Include database configuration file
    include('dbCon.php');

    $start = !empty($_POST['page'])?$_POST['page']:0;
    $limit = 6;

    //set conditions for search
    $whereSQL = '';
    // $orderSQL ='';
    $keywords = $_POST['keywords'];
    // $sortBy = $_POST['sortBy'];
    if(!empty($keywords)){
     $whereSQL = "WHERE shirtName LIKE '%".$keywords."%'";
    }
    // if(!empty($sortBy)){
    //     $orderSQL = " ORDER BY id ".$sortBy;
    // }else{
    //     $orderSQL = " ORDER BY id DESC ";
    // }

    //get number of rows
    $queryNum = $db->query("(SELECT COUNT(shirtName) as postNum FROM adidas $whereSQL) UNION (SELECT COUNT(shirtName) as postNum FROM diesel $whereSQL)  UNION (SELECT COUNT(shirtName) as postNum FROM gucci $whereSQL)  UNION (SELECT COUNT(shirtName) as postNum FROM hugoboss $whereSQL) UNION (SELECT COUNT(shirtName) as postNum FROM nike $whereSQL) UNION (SELECT COUNT(shirtName) as postNum FROM prada $whereSQL) UNION (SELECT COUNT(shirtName) as postNum FROM puma $whereSQL) UNION (SELECT COUNT(shirtName) as postNum FROM supreme $whereSQL) UNION (SELECT COUNT(shirtName) as postNum FROM tommyhilfiger $whereSQL) UNION (SELECT COUNT(shirtName) as postNum FROM underarmour $whereSQL) UNION (SELECT COUNT(shirtName) as postNum FROM versace $whereSQL)");
    //add (.$orderSQ) after .$whereSQL for sortin
    $resultNum = $queryNum->fetch_assoc();
    $rowCount = $resultNum['postNum'];

    //initialize pagination class
    $pagConfig = array(
        'currentPage' => $start,
        'totalRows' => $rowCount,
        'perPage' => $limit,
        'link_func' => 'searchFilter'
    );
    $pagination =  new Pagination($pagConfig);

    //get rows
    $query = $db->query("(SELECT * FROM adidas $whereSQL) UNION (SELECT * FROM diesel $whereSQL) UNION (SELECT * FROM nike $whereSQL) UNION (SELECT * FROM gucci $whereSQL) UNION (SELECT * FROM hugoboss $whereSQL) UNION (SELECT * FROM prada $whereSQL) UNION (SELECT * FROM puma $whereSQL) UNION (SELECT * FROM supreme $whereSQL) UNION (SELECT * FROM tommyhilfiger $whereSQL) UNION (SELECT * FROM underarmour $whereSQL) UNION (SELECT * FROM versace $whereSQL) LIMIT $start,$limit");
 //add ($orderSQL) after $whereSQL for sorting
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
                       window.location.href = 'http://localhost:81/4Shop/product-details.php?SID='+id+'&CD='+codeDetail+'&SD='+sizeDetail+'&ND='+nameDetail+'&ID='+imgDetail+'&PD='+priceDetail;

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
 else{
    echo "<img src='e.png' style='margin-left: 25%;margin-top: 10%;width: 25%'>";
 }
}
  ?>
  <?php echo $pagination->createLinks(); ?>

<?php
// include database configuration file
include 'dbConfig.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Shopping Cart Tutorial</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
    .container{padding: 50px;}
    .cart-link{width: 100%;text-align: right;display: block;font-size: 22px;}
    </style>
</head>
</head>
<body>
<div class="container">
    <h1>Products</h1>
    <a href="viewCart.php" class="cart-link" title="View Cart"><i class="glyphicon glyphicon-shopping-cart"></i></a>
    <div id="products" class="row list-group">
        <?php
        //get rows query
        $query = $db->query("(SELECT * FROM adidas limit 1) UNION (SELECT * FROM nike limit 1) UNION (SELECT * FROM diesel limit 1) UNION (SELECT * FROM gucci limit 1) UNION (SELECT * FROM prada limit 1) UNION (SELECT * FROM hugo_boss limit 1) UNION (SELECT * FROM puma limit 1) UNION (SELECT * FROM supreme limit 1) UNION (SELECT * FROM tommy_hilfiger limit 1) UNION (SELECT * FROM under_armour limit 1) UNION (SELECT * FROM versace limit 1) LIMIT 11");
        if($query->num_rows > 0){ 
            while($row = $query->fetch_assoc()){
        ?>
        <div class="item col-lg-4">
            <div class="thumbnail">
                <div class="caption">
                    <h4 class="list-group-item-heading"><?php echo $row["shirtName"]; ?></h4>
                    <p class="list-group-item-text"><?php echo $row["shirtSize"]; ?></p>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <p class="lead"><?php echo '$'.$row["Price"].' USD'; ?></p>
                        </div>
                        <div class="col-md-6">
                            <a class="btn btn-success" href="cartAction.php?action=addToCart&id=<?php echo $row["id"]; ?>&brand=<?php echo $row["shirtCode"]; ?>">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } }else{ ?>
        <p>Product(s) not found.....</p>
        <?php } ?>
    </div>
</div>
</body>
</html>
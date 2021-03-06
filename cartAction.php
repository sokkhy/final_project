<?php
// initialize shopping cart class
ob_start();
// session_start();
include 'Cart.php';
$cart = new Cart;

// include database configuration file
include 'dbConfig.php';
if(isset($_REQUEST['action']) && !empty($_REQUEST['action'])){
    if($_REQUEST['action'] == 'addToCart' && !empty($_REQUEST['id']) &&  !empty($_REQUEST['brand'])){
        $productID = $_REQUEST['id'];
        $shritbrand = $_GET['brand'];
        $a = explode ("_", $shritbrand);
         $brand = $a[0];

        if($brand =="adidas" || $brand =="diesel" || $brand =="gucci" || $brand =="hugoboss" || $brand =="nike" || $brand =="prada" || $brand =="puma" || $brand =="supreme" || $brand =="tommyhilfiger" || $brand =="underarmour" || $brand =="versace")
        {
        $query = $db->query('SELECT * FROM '.$brand.'  WHERE id =' .$productID);
          $row = $query->fetch_assoc();
          $itemData = array(
              'id' => $row['shirtCode'],
              'name' => $row['shirtName'],
              'price' => $row['Price'],
              'img' => $row['image'],
              'qty' => 1
          );

          $insertItem = $cart->insert($itemData);
          $redirectLoc = $insertItem?'viewCart.php':'index.php';
          header("Location:".$redirectLoc);
}else {
  echo "<div style='margin-left:600px;'><img src='404.png'></div>";
}



    }
    elseif($_REQUEST['action'] == 'updateCartItem' && !empty($_REQUEST['id'])){
        $itemData = array(
            'rowid' => $_REQUEST['id'],
            'qty' => $_REQUEST['qty']
        );
        $updateItem = $cart->update($itemData);
        echo $updateItem?'ok':'err';die;
    }
    elseif($_REQUEST['action'] == 'removeCartItem' && !empty($_REQUEST['id'])){
        $deleteItem = $cart->remove($_REQUEST['id']);
        header("Location:viewCart.php");
    }
    elseif($_REQUEST['action'] == 'placeOrder' && $cart->total_items() > 0 && !empty($_SESSION['sessCustomerID'])){
        // insert order details into database
        $insertOrder = $db->query("INSERT INTO orders (customer_id, total_price, created, modified) VALUES ('".$_SESSION['sessCustomerID']."', '".$cart->total()."', '".date("Y-m-d H:i:s")."', '".date("Y-m-d H:i:s")."')");

        if($insertOrder){
            $orderID = $db->insert_id;
            $sql = '';
            // get cart items
            $cartItems = $cart->contents();
            foreach($cartItems as $item){
                $sql .= "INSERT INTO order_items (order_id, product_id, quantity) VALUES ('".$orderID."', '".$item['id']."', '".$item['qty']."');";
            }
            // insert order items into database
            $insertOrderItems = $db->multi_query($sql);

            if($insertOrderItems){
                $cart->destroy();
                header("Location: orderSuccess.php?id=$orderID");
            }else{
                header("Location: checkout.php");
            }
        }else{
            header("Location: checkout.php");
        }
    }else{
        header("Location: index.php");
    }
}else{
    header("Location: index.php");
}

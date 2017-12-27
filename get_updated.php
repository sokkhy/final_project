
<?php
  session_start();

  $host = "localhost";
   $user = "root";
   $password = "";
   $database = "dbkeybest";

  $conn = new mysqli($host, $user, $password, $database);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

  	$_id = $_GET["idU"];
    $_code = $_GET["CU"];
    $_size=$_GET["SU"];
    $_name = $_GET["NU"];
    $_price=$_GET["PU"];
    $_img= $_GET["IU"];   
    $_brand=$_GET["brand"];
$sql = "UPDATE  $_brand SET shirtCode='$_code', shirtName ='$_name', shirtSize='$_size', Price ='$_price' where id = '$_id'";
  if(!empty($_POST['cname']) &&!empty($_POST['sname']) && !empty($_POST['size']) && !empty($_POST['price']) && !empty($_FILES["fileToUpload"]["name"])){
    $cName = $_POST["shirtcode"];
    $sName = $_POST["shirtname"];
    $sSize=$_POST["shirtsize"];
    $sPrice = $_POST["shirtprice"];

     $sql->execute();
    
    } 
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    header('Location:http://localhost:81/4Shop/admin.php');
} else {
    echo "Error updating record: " . $conn->error;
}
$conn->close();


?>
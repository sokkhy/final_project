<?php
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
$stmt = $conn->prepare("INSERT INTO customers (customer_id,ß customer_name, customer_address, customer_phone, customer_email, customer_password) VALUES (?, ?, ?, ?, ?, ?)");
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
  // header('Location:http://localhost:8082/4Shops/index.php');
  }
?>

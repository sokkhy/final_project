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
  $puma ='puma';
  $ins_brand = $_GET["sh_brand"];

  // use prepared statment to insert data
  $stmt = $conn->prepare("INSERT INTO $ins_brand (shirtCode, shirtName, shirtSize, Price, image) VALUES (?, ?, ?,?, ?)");
  $stmt->bind_param("sssss", $shirtCode, $shirtName, $shirtSize, $Price, $image);

  //validate form 
  if(!empty($_POST['shirtcode']) && !empty($_POST['shirtname']) && !empty($_POST['shirtsize']) && !empty($_POST['price']) && !empty($_FILES["fileToUpload"]["name"])){
    $shirtCode = $_POST["shirtcode"];
    $shirtName = $_POST["shirtname"];
    $shirtSize=$_POST["shirtsize"];
    $Price = $_POST["price"];
    $image= $_FILES["fileToUpload"]["name"];
    $stmt->execute();
    // header('Location:http://localhost:8082/4Shops/index.php');
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add New</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style><?php include 'css/style.css';?></style>
</head>
<body>

	
	   <div class="container" style="width: 60%;">
<?php
  echo "<h1>Add new shirt to <span style='text-transform: uppercase;'>$ins_brand</span></h1>";
?>

		  <form class="form-inline form" action="" method="post" enctype="multipart/form-data" style="display: inline-grid;">
        <div class="form-group">
        
          Shirt_Code: <input type="text" class="form-control" id="shirt_code"  name="shirtcode">
        </div>
		    <div class="form-group">
		    
		      Shirt_Name: <input type="text" class="form-control" id="shirt_name"  name="shirtname">
		    </div>
		    <div class="form-group">
		      
		      Shirt Size: <input type="text" class="form-control" name="shirtsize" id="shirt_size">
		    </div>
		    <div class="form-group">
		      
		      Price: <input type="text" class="form-control" id="shirt_price" name="price">
		    </div>
		    <div class="form-group">
		      <input type="file" name="fileToUpload" id="fileUpload">
			</div>
			  <input type="submit" value="Submit" style="width: 90px;
    margin-left: 10px;">
			<div id="image-holder">Display image</div>
		     
		   </form> 

		</div>
  <script src="js/addnew.js"></script>

</body>
</html>
 

</body>
</html>
<?php
if(isset($_POST["submit"])) {
$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

// Check if image file is a actual image or fake image

    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

// Check if file already exists
if (file_exists($target_file)) {
    //echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 3000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" && $imageFileType != "PNG" && $imageFileType != "JPG"  ) {
    //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    //echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
       header('Location: http://localhost:81/4Shop/Addnew.php');
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
}
?>
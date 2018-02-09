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
  <style media="screen">
.custom-file-input {
color: transparent;
width: 130px;
height: 52px;
}
.custom-file-input::-webkit-file-upload-button {
visibility: hidden;
}
.custom-file-input::before {
content: 'Choose Image';
color: black;
display: inline-block;
background: -webkit-linear-gradient(top, #f9f9f9, #e3e3e3);
border: 1px solid #999;
border-radius: 3px;
padding: 5px 8px;
outline: none;
white-space: nowrap;
-webkit-user-select: none;
cursor: pointer;
text-shadow: 1px 1px #fff;
font-weight: 700;
font-size: 10pt;
}
.custom-file-input:hover::before {
border-color: black;
}
.custom-file-input:active {
outline: 0;
}
.custom-file-input:active::before {
background: -webkit-linear-gradient(top, #e3e3e3, #f9f9f9);
}

body {
padding: 20px;
}
  </style>
</head>
<body>


	   <div class="container" style="width: 60%;">
<?php
  echo "<h1>Add New <span style='text-transform: uppercase;'>$ins_brand</span></h1>";
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
		    <div class="form-group" style="width: 200px;
        margin-left: 0px;">
		        <input type="file" name="fileToUpload" id="fileUpload" class="custom-file-input">
			  </div>
			  <input type="submit" value="Submit" style="width: 90px;
    margin-left: 10px;" class="btn btn-primary">
			<div id="image-holder">Display image</div>

		   </form>

		</div>

<script>
  $("#fileUpload").on('change', function () {

    var imgPath = $(this)[0].value;
    var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();

    if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg" || extn =="PNG" || extn =="JPG") {
        if (typeof (FileReader) != "undefined") {

            var image_holder = $("#image-holder");
            image_holder.empty();

            var reader = new FileReader();
            reader.onload = function (e) {
                $("<img />", {
                    "src": e.target.result,
                        "class": "thumb-image"
                }).appendTo(image_holder);

            }
            image_holder.show();
            reader.readAsDataURL($(this)[0].files[0]);
        } else {
            alert("This browser does not support FileReader.");
        }
    } else {
        alert("Pls select only images");
    }
});
</script>

</body>
</html>
<?php

if(isset($_POST["submit"])) {
$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
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
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
  } else {
      echo "Sorry, there was an error uploading your file.";
  }
}
}

?>

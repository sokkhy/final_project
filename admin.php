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
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>4Shop</title>
	<link rel="icon" href="logo.png" type="image/gif" sizes="16x16">
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body {font-family: Arial;}

/* Style the tab */
div.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #FFC032;
}

/* Style the buttons inside the tab */
div.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
div.tab button:hover {
    background-color: #4C86CC;
    color: white;
}

/* Create an active/current tablink class */
div.tab button.active {
    background-color: #FF2B12;
    color: white;

}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
    height: auto;
}
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: center;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #3D5F19;
    color: white;
    text-align: center;

}
</style>
</head>
<body>

<h1 style="color: red;">ADMIN</h1>

<div class="tab">
  <button class="tablinks" onclick="eachbrand(event, 'adidas')" value="adidas">Adidas</button>
  <button class="tablinks" onclick="eachbrand(event, 'nike')" value="nike">Nike</button>
  <button class="tablinks" onclick="eachbrand(event, 'gucci')" value="gucci">Gucci</button>
  <button class="tablinks" onclick="eachbrand(event, 'prada')" value="prada">Prada</button>
  <button class="tablinks" onclick="eachbrand(event, 'supreme')" value="supreme">Supreme</button>
  <button class="tablinks" onclick="eachbrand(event, 'tommy_hilfiger')" value="tommy_hilfiger">Tommy Hilfiger</button>
  <button class="tablinks" onclick="eachbrand(event, 'versace')" value="versace">Versace</button>
  <button class="tablinks" onclick="eachbrand(event, 'diesel')" value="diesel">Diesel</button>
  <button class="tablinks" onclick="eachbrand(event, 'hugo_boss')" value="hugo_boss">Hugo Boss</button>
  <button class="tablinks" onclick="eachbrand(event, 'under_armour')" value="under_armour">Under Armour</button>
  <button class="tablinks" onclick="eachbrand(event, 'puma')" value="puma">Puma SE</button>
</div>

<div id="adidas" class="tabcontent">
	<?php
$output ="";
$i = 0;
$sql = "SELECT * FROM adidas";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
   $output.= "<table id='customers'>".
		  "<tr>".
		  	"<th style='width:90px; text-align:center;'>Shirt Code</th>
		    <th style='width:300px;'>Shirt Name</th>
		    <th style='width:91px;'>Shirt Size</th>
		    <th style='width: 91px;'>Shirt Price</th>
		    <th style='width:390px;'>Shirt Image</th>
		    <th style='width:168px;'>Added Date</th>
		   	<th colspan='4'>Action </th>".
		 "</tr>";
 while($row = $result->fetch_assoc()) {
$i++;
		$output.= "<tr>".
				"<td id='shi_id".$i."'>". $row["id"]. "</td>".
        "<td id='shi_code".$i."'>". $row["shirtCode"]. "</td>".
				"<td id='shi_name".$i."'>". $row["shirtName"]."</td>".
				"<td id='shi_size".$i."'>". $row["shirtSize"]."</td>".
				"<td id='shi_price".$i."'>". $row["Price"]."</td>".
				"<td><img class='shi_img".$i."' src='upload/".$row['image']."'/></td>".
				"<td>". $row["RegisterDate"]."</td>".
				"<td style='width:'colspan='2'><button type='button' class='btn btn-danger btn_delete".$i."'>Delete</button></td>".
				"<td><button type='button' class='btn btn-warning btn_update".$i."'>Update</button></td>".
		  "</tr>";

 		$output.="<script>".
                        "$(document).ready(function(){
                            $('.btn_delete".$i."').click(function(){
                               var _id = $('#shi_id".$i."').text();
								window.location.href = 'http://localhost:81/4Shop/delete.php?src='+_id+'&brand='+'adidas';


                             });


                    })".
             "</script>";
          $output.="<script>".

 						"$(document).ready(function(){
                            $('.btn_update".$i."').click(function(){
                               var idUpdate = $('#shi_id".$i."').text();
                               var codeUpdate =  $('#shi_code".$i."').text();
                               var priceUpdate = $('#shi_price".$i."').text();
                               var sizeUpdate =  $('#shi_size".$i."').text();
                               var nameUpdate =  $('#shi_name".$i."').text();
                               var imgUpate = $('.shi_img".$i."').attr('src');
                               window.location.href = 'http://localhost:81/4Shop/update.php?idU='+idUpdate+'&CU='+codeUpdate+'&SU='+sizeUpdate+'&NU='+nameUpdate+'&IU='+imgUpate+'&PU='+priceUpdate+'&brand='+'adidas';
 													 });
                    })".
          "</script>";
   		}
	} else {
    echo "No Data";
}
$output.="</table>";
 print($output);
?>
</div>
<div id="nike" class="tabcontent">
<?php
	$output ="";
	$sql = "SELECT * FROM nike";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
   $output.= "<table id='customers'>".
		  "<tr>
		  	<th style='width:90px; text-align:center;'>Shirt Code</th>
		    <th style='width:300px;'>Shirt Name</th>
		    <th style='width:91px;'>Shirt Size</th>
		    <th style='width: 91px;'>Shirt Price</th>
		    <th style='width:390px;'>Shirt Image</th>
		    <th style='width:168px;'>Added Date</th>
		   	<th colspan='4'>Action </th>
		  </tr>";
 while($row = $result->fetch_assoc()) {
$i++;
		$output.= "<tr>".
				"<td id='shi_id".$i."'>". $row["id"]. "</td>".
				"<td id='shi_name".$i."'>". $row["shirtName"]."</td>".
				"<td id='shi_size".$i."'>". $row["shirtSize"]."</td>".
				"<td id='shi_price".$i."'>". $row["Price"]."</td>".
				"<td><img class='shi_img".$i."' src='upload/".$row['image']."'/></td>".
				"<td>". $row["RegisterDate"]."</td>".
				"<td style='width:'colspan='2'><button type='button' class='btn btn-danger btn_delete".$i."'>Delete</button></td>".
				"<td><button type='button' class='btn btn-warning btn_update".$i."'>Update</button></td>".
		  "</tr>";

    $output.="<script>".
                "$(document).ready(function(){
                    $('.btn_delete".$i."').click(function(){
                       var _id = $('#shi_id".$i."').text();
				window.location.href = 'http://localhost:81/4Shop/delete.php?src='+_id+'&brand='+'nike';

             });
                  })".
           "</script>";
   $output.="<script>".

				"$(document).ready(function(){
            $('.btn_update".$i."').click(function(){
               var idUpdate = $('#shi_id".$i."').text();
               var priceUpdate = $('#shi_price".$i."').text();
               var sizeUpdate =  $('#shi_size".$i."').text();
               var nameUpdate =  $('#shi_name".$i."').text();
               var imgUpate = $('.shi_img".$i."').attr('src');
               window.location.href = 'http://localhost:81/4Shop/update.php?idU='+idUpdate+'&brand='+'nike';
 					 		});
						})".
	  "</script>";
	}
} else {
    echo "No Data";
}
$output.="</table>";
 print($output);
?>
</div>
<div id="gucci" class="tabcontent">
<?php
	$output ="";
	$sql = "SELECT * FROM gucci";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
   $output.= "<table id='customers'>".
		  "<tr>
		  	<th style='width:90px; text-align:center;'>Shirt Code</th>
		    <th style='width:300px;'>Shirt Name</th>
		    <th style='width:91px;'>Shirt Size</th>
		    <th style='width: 91px;'>Shirt Price</th>
		    <th style='width:390px;'>Shirt Image</th>
		    <th style='width:168px;'>Added Date</th>
		   	<th colspan='4'>Action </th>
		  </tr>";
 while($row = $result->fetch_assoc()) {
$i++;
		$output.= "<tr>".
				"<td id='shi_id".$i."'>". $row["id"]. "</td>".
				"<td id='shi_name".$i."'>". $row["shirtName"]."</td>".
				"<td id='shi_size".$i."'>". $row["shirtSize"]."</td>".
				"<td id='shi_price".$i."'>". $row["Price"]."</td>".
				"<td><img class='shi_img".$i."' src='upload/".$row['image']."'/></td>".
				"<td>". $row["RegisterDate"]."</td>".
				"<td style='width:'colspan='2'><button type='button' class='btn btn-danger btn_delete".$i."'>Delete</button></td>".
				"<td><button type='button' class='btn btn-warning btn_update".$i."'>Update</button></td>".
		  "</tr>";
		$output.="<script>".
                        "$(document).ready(function(){
                            $('.btn_delete".$i."').click(function(){
                               var _id = $('#shi_id".$i."').text();
                               var _brand =$('.tablinks').val();
							window.location.href = 'http://localhost:81/4Shop/delete.php?src='+_id+'&brand='+'gucci';
                             });
                    })".
             "</script>";
        $output.="<script>".

 						"$(document).ready(function(){
                            $('.btn_update".$i."').click(function(){
                               var idUpdate = $('#shi_id".$i."').text();
                               var priceUpdate = $('#shi_price".$i."').text();
                               var sizeUpdate =  $('#shi_size".$i."').text();
                               var nameUpdate =  $('#shi_name".$i."').text();
                               var imgUpate = $('.shi_img".$i."').attr('src');
                               window.location.href = 'http://localhost:81/4Shop/update.php?idU='+idUpdate+'&SU='+sizeUpdate+'&NU='+nameUpdate+'&IU='+imgUpate+'&PU='+priceUpdate+'&brand='+'gucci';
                             });
                    })".
          "</script>";
   		}
	} else {
    echo "No Data";
}
$output.="</table>";
 print($output);
?>
</div>
<div id="prada" class="tabcontent">
<?php
	$output ="";
	$sql = "SELECT * FROM prada";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
   $output.= "<table id='customers'>".
		  "<tr>
		  	<th style='width:90px; text-align:center;'>Shirt Code</th>
		    <th style='width:300px;'>Shirt Name</th>
		    <th style='width:91px;'>Shirt Size</th>
		    <th style='width: 91px;'>Shirt Price</th>
		    <th style='width:390px;'>Shirt Image</th>
		    <th style='width:168px;'>Added Date</th>
		   	<th colspan='4'>Action </th>
		  </tr>";
 while($row = $result->fetch_assoc()) {
$i++;
		$output.= "<tr>".
				"<td id='shi_id".$i."'>". $row["id"]. "</td>".
				"<td id='shi_name".$i."'>". $row["shirtName"]."</td>".
				"<td id='shi_size".$i."'>". $row["shirtSize"]."</td>".
				"<td id='shi_price".$i."'>". $row["Price"]."</td>".
				"<td><img class='shi_img".$i."' src='upload/".$row['image']."'/></td>".
				"<td>". $row["RegisterDate"]."</td>".
				"<td style='width:'colspan='2'><button type='button' class='btn btn-danger btn_delete".$i."'>Delete</button></td>".
				"<td><button type='button' class='btn btn-warning btn_update".$i."'>Update</button></td>".
		  "</tr>";
		$output.="<script>".
                        "$(document).ready(function(){
                            $('.btn_delete".$i."').click(function(){
                               var _id = $('#shi_id".$i."').text();
                               var _brand =$('.tablinks').val();
							window.location.href = 'http://localhost:81/4Shop/delete.php?src='+_id+'&brand='+'prada';
                             });
                    })".
             "</script>";
        $output.="<script>".

 						"$(document).ready(function(){
                            $('.btn_update".$i."').click(function(){
                               var idUpdate = $('#shi_id".$i."').text();
                               var priceUpdate = $('#shi_price".$i."').text();
                               var sizeUpdate =  $('#shi_size".$i."').text();
                               var nameUpdate =  $('#shi_name".$i."').text();
                               var imgUpate = $('.shi_img".$i."').attr('src');
                               window.location.href = 'http://localhost:81/4Shop/update.php?idU='+idUpdate+'&SU='+sizeUpdate+'&NU='+nameUpdate+'&IU='+imgUpate+'&PU='+priceUpdate+'&brand='+'prada';

                             });
                    })".
          "</script>";
   		}

	} else {
    echo "No Data";
}
$output.="</table>";
 print($output);
?>
</div>
<div id="supreme" class="tabcontent">
<?php
	$output ="";
	$sql = "SELECT * FROM supreme";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
   $output.= "<table id='customers'>".
		  "<tr>
		  	<th style='width:90px; text-align:center;'>Shirt Code</th>
		    <th style='width:300px;'>Shirt Name</th>
		    <th style='width:91px;'>Shirt Size</th>
		    <th style='width: 91px;'>Shirt Price</th>
		    <th style='width:390px;'>Shirt Image</th>
		    <th style='width:168px;'>Added Date</th>
		   	<th colspan='4'>Action</th>
		  </tr>";
 while($row = $result->fetch_assoc()) {
$i++;
		$output.= "<tr>".
				"<td id='shi_id".$i."'>". $row["id"]. "</td>".
				"<td id='shi_name".$i."'>". $row["shirtName"]."</td>".
				"<td id='shi_size".$i."'>". $row["shirtSize"]."</td>".
				"<td id='shi_price".$i."'>". $row["Price"]."</td>".
				"<td><img class='shi_img".$i."' src='upload/".$row['image']."'/></td>".
				"<td>". $row["RegisterDate"]."</td>".
				"<td style='width:'colspan='2'><button type='button' class='btn btn-danger btn_delete".$i."'>Delete</button></td>".
				"<td><button type='button' class='btn btn-warning btn_update".$i."'>Update</button></td>".
		  "</tr>";
		$output.="<script>".
                        "$(document).ready(function(){
                            $('.btn_delete".$i."').click(function(){
                               var _id = $('#shi_id".$i."').text();
                               var _brand =$('.tablinks').val();
							window.location.href = 'http://localhost:81/4Shop/delete.php?src='+_id+'&brand='+'supreme';
                             });
                    })".
             "</script>";
        $output.="<script>".

 						"$(document).ready(function(){
                            $('.btn_update".$i."').click(function(){
                               var idUpdate = $('#shi_id".$i."').text();
                               var priceUpdate = $('#shi_price".$i."').text();
                               var sizeUpdate =  $('#shi_size".$i."').text();
                               var nameUpdate =  $('#shi_name".$i."').text();
                               var imgUpate = $('.shi_img".$i."').attr('src');
                               window.location.href = 'http://localhost:81/4Shop/update.php?idU='+idUpdate+'&SU='+sizeUpdate+'&NU='+nameUpdate+'&IU='+imgUpate+'&PU='+priceUpdate+'&brand='+'supreme';
                             });
                    })".
          "</script>";
   		}

	} else {
    echo "No Data";
}
$output.="</table>";
 print($output);
?>
</div>

<div id="tommy_hilfiger" class="tabcontent">
<?php
	$output ="";
	$sql = "SELECT * FROM tommyhilfiger";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
   $output.= "<table id='customers'>".
		  "<tr>
		  	<th style='width:90px; text-align:center;'>Shirt Code</th>
		    <th style='width:300px;'>Shirt Name</th>
		    <th style='width:91px;'>Shirt Size</th>
		    <th style='width: 91px;'>Shirt Price</th>
		    <th style='width:390px;'>Shirt Image</th>
		    <th style='width:168px;'>Added Date</th>
		   	<th colspan='4'>Action </th>
		  </tr>";
 while($row = $result->fetch_assoc()) {
$i++;
		$output.= "<tr>".
				"<td id='shi_id".$i."'>". $row["id"]. "</td>".
				"<td id='shi_name".$i."'>". $row["shirtName"]."</td>".
				"<td id='shi_size".$i."'>". $row["shirtSize"]."</td>".
				"<td id='shi_price".$i."'>". $row["Price"]."</td>".
				"<td><img class='shi_img".$i."' src='upload/".$row['image']."'/></td>".
				"<td>". $row["RegisterDate"]."</td>".
				"<td style='width:'colspan='2'><button type='button' class='btn btn-danger btn_delete".$i."'>Delete</button></td>".
				"<td><button type='button' class='btn btn-warning btn_update".$i."'>Update</button></td>".
		  "</tr>";
	$output.="<script>".
                        "$(document).ready(function(){
                            $('.btn_delete".$i."').click(function(){
                               var _id = $('#shi_id".$i."').text();
								window.location.href = 'http://localhost:81/4Shop/delete.php?src='+_id+'&brand='+'tommyhilfiger';

                             });
                    })".
             "</script>";
    $output.="<script>".

 						"$(document).ready(function(){
                            $('.btn_update".$i."').click(function(){
                               var idUpdate = $('#shi_id".$i."').text();
                               var priceUpdate = $('#shi_price".$i."').text();
                               var sizeUpdate =  $('#shi_size".$i."').text();
                               var nameUpdate =  $('#shi_name".$i."').text();
                               var imgUpate = $('.shi_img".$i."').attr('src');
                               window.location.href = 'http://localhost:81/4Shop/update.php?idU='+idUpdate+'&SU='+sizeUpdate+'&NU='+nameUpdate+'&IU='+imgUpate+'&PU='+priceUpdate+'&brand='+'tommyhilfiger';
                             });

                    })".
          "</script>";
   		}

	} else {
    echo "No Data";
}
$output.="</table>";
 print($output);
?>
</div>
<div id="versace" class="tabcontent">
<?php
	$output ="";
	$sql = "SELECT * FROM versace";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
   $output.= "<table id='customers'>".
		  "<tr>
		  	<th style='width:90px; text-align:center;'>Shirt Code</th>
		    <th style='width:300px;'>Shirt Name</th>
		    <th style='width:91px;'>Shirt Size</th>
		    <th style='width: 91px;'>Shirt Price</th>
		    <th style='width:390px;'>Shirt Image</th>
		    <th style='width:168px;'>Added Date</th>
		   	<th colspan='4'>Action </th>
		  </tr>";
 while($row = $result->fetch_assoc()) {
$i++;
		$output.= "<tr>".
				"<td id='shi_id".$i."'>". $row["id"]. "</td>".
				"<td id='shi_name".$i."'>". $row["shirtName"]."</td>".
				"<td id='shi_size".$i."'>". $row["shirtSize"]."</td>".
				"<td id='shi_price".$i."'>". $row["Price"]."</td>".
				"<td><img class='shi_img".$i."' src='upload/".$row['image']."'/></td>".
				"<td>". $row["RegisterDate"]."</td>".
				"<td style='width:'colspan='2'><button type='button' class='btn btn-danger btn_delete".$i."'>Delete</button></td>".
				"<td><button type='button' class='btn btn-warning btn_update".$i."'>Update</button></td>".
		  "</tr>";
		$output.="<script>".
                        "$(document).ready(function(){
                            $('.btn_delete".$i."').click(function(){
                               var _id = $('#shi_id".$i."').text();
                               var _brand =$('.tablinks').val();
							window.location.href = 'http://localhost:81/4Shop/delete.php?src='+_id+'&brand='+'versace';
                             });
                    })".
             "</script>";
        $output.="<script>".

 						"$(document).ready(function(){
                            $('.btn_update".$i."').click(function(){
                               var idUpdate = $('#shi_id".$i."').text();
                               var priceUpdate = $('#shi_price".$i."').text();
                               var sizeUpdate =  $('#shi_size".$i."').text();
                               var nameUpdate =  $('#shi_name".$i."').text();
                               var imgUpate = $('.shi_img".$i."').attr('src');
                               window.location.href = 'http://localhost:81/4Shop/update.php?idU='+idUpdate+'&SU='+sizeUpdate+'&NU='+nameUpdate+'&IU='+imgUpate+'&PU='+priceUpdate+'&brand='+'versace';


                             });


                    })".
          "</script>";
   		}

	} else {
    echo "No Data";
}
$output.="</table>";
 print($output);


?>
</div>

<div id="diesel" class="tabcontent">
<?php
	$output ="";
	$sql = "SELECT * FROM diesel";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
   $output.= "<table id='customers'>".
		  "<tr>
		  	<th style='width:90px; text-align:center;'>Shirt Code</th>
		    <th style='width:300px;'>Shirt Name</th>
		    <th style='width:91px;'>Shirt Size</th>
		    <th style='width: 91px;'>Shirt Price</th>
		    <th style='width:390px;'>Shirt Image</th>
		    <th style='width:168px;'>Added Date</th>
		   	<th colspan='4'>Action </th>
		  </tr>";
 while($row = $result->fetch_assoc()) {
$i++;
		$output.= "<tr>".
				"<td id='shi_id".$i."'>". $row["id"]. "</td>".
				"<td id='shi_name".$i."'>". $row["shirtName"]."</td>".
				"<td id='shi_size".$i."'>". $row["shirtSize"]."</td>".
				"<td id='shi_price".$i."'>". $row["Price"]."</td>".
				"<td><img class='shi_img".$i."' src='upload/".$row['image']."'/></td>".
				"<td>". $row["RegisterDate"]."</td>".
				"<td style='width:'colspan='2'><button type='button' class='btn btn-danger btn_delete".$i."'>Delete</button></td>".
				"<td><button type='button' class='btn btn-warning btn_update".$i."'>Update</button></td>".
		  "</tr>";

 		$output.="<script>".
                        "$(document).ready(function(){
                            $('.btn_delete".$i."').click(function(){
                               var _id = $('#shi_id".$i."').text();
								window.location.href = 'http://localhost:81/4Shop/delete.php?src='+_id+'&brand='+'diesel';

                             });
                    })".
             "</script>";
        $output.="<script>".

 						"$(document).ready(function(){
                            $('.btn_update".$i."').click(function(){
                               var idUpdate = $('#shi_id".$i."').text();
                               var priceUpdate = $('#shi_price".$i."').text();
                               var sizeUpdate =  $('#shi_size".$i."').text();
                               var nameUpdate =  $('#shi_name".$i."').text();
                               var imgUpate = $('.shi_img".$i."').attr('src');
                               window.location.href = 'http://localhost:81/4Shop/update.php?idU='+idUpdate+'&SU='+sizeUpdate+'&NU='+nameUpdate+'&IU='+imgUpate+'&PU='+priceUpdate+'&brand='+'diesel';
                             });
                    })".
          "</script>";
   		}
	} else {
    echo "No Data";
}
$output.="</table>";
 print($output);
?>
</div>

<div id="hugo_boss" class="tabcontent">
<?php
	$output ="";
	$sql = "SELECT * FROM hugoboss";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
   $output.= "<table id='customers'>".
		  "<tr>
		  	<th style='width:90px; text-align:center;'>Shirt Code</th>
		    <th style='width:300px;'>Shirt Name</th>
		    <th style='width:91px;'>Shirt Size</th>
		    <th style='width: 91px;'>Shirt Price</th>
		    <th style='width:390px;'>Shirt Image</th>
		    <th style='width:168px;'>Added Date</th>
		   	<th colspan='4'>Action </th>
		  </tr>";
 while($row = $result->fetch_assoc()) {
$i++;
		$output.= "<tr>".
				"<td id='shi_id".$i."'>". $row["id"]. "</td>".
				"<td id='shi_name".$i."'>". $row["shirtName"]."</td>".
				"<td id='shi_size".$i."'>". $row["shirtSize"]."</td>".
				"<td id='shi_price".$i."'>". $row["Price"]."</td>".
				"<td><img class='shi_img".$i."' src='upload/".$row['image']."'/></td>".
				"<td>". $row["RegisterDate"]."</td>".
				"<td style='width:'colspan='2'><button type='button' class='btn btn-danger btn_delete".$i."'>Delete</button></td>".
				"<td><button type='button' class='btn btn-warning btn_update".$i."'>Update</button></td>".
		  "</tr>";

 		$output.="<script>".
                        "$(document).ready(function(){
                            $('.btn_delete".$i."').click(function(){
                               var _id = $('#shi_id".$i."').text();
								window.location.href = 'http://localhost:81/4Shop/delete.php?src='+_id+'&brand='+'hugoboss';

                             });
                    })".
             "</script>";
        $output.="<script>".

 						"$(document).ready(function(){
                            $('.btn_update".$i."').click(function(){
                               var idUpdate = $('#shi_id".$i."').text();
                               var priceUpdate = $('#shi_price".$i."').text();
                               var sizeUpdate =  $('#shi_size".$i."').text();
                               var nameUpdate =  $('#shi_name".$i."').text();
                               var imgUpate = $('.shi_img".$i."').attr('src');
                               window.location.href = 'http://localhost:81/4Shop/update.php?idU='+idUpdate+'&SU='+sizeUpdate+'&NU='+nameUpdate+'&IU='+imgUpate+'&PU='+priceUpdate+'&brand='+'hugoboss';
                             });
                    })".
          "</script>";
   		}

	} else {
    echo "No Data";
}
$output.="</table>";
 print($output);


?>
</div>
<div id="under_armour" class="tabcontent">
<?php
	$output ="";
	$sql = "SELECT * FROM underarmour";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
   $output.= "<table id='customers'>".
		  "<tr>
		  	<th style='width:90px; text-align:center;'>Shirt Code</th>
		    <th style='width:300px;'>Shirt Name</th>
		    <th style='width:91px;'>Shirt Size</th>
		    <th style='width: 91px;'>Shirt Price</th>
		    <th style='width:390px;'>Shirt Image</th>
		    <th style='width:168px;'>Added Date</th>
		   	<th colspan='4'>Action </th>
		  </tr>";
 while($row = $result->fetch_assoc()) {
$i++;
		$output.= "<tr>".
				"<td id='shi_id".$i."'>". $row["id"]. "</td>".
				"<td id='shi_name".$i."'>". $row["shirtName"]."</td>".
				"<td id='shi_size".$i."'>". $row["shirtSize"]."</td>".
				"<td id='shi_price".$i."'>". $row["Price"]."</td>".
				"<td><img class='shi_img".$i."' src='upload/".$row['image']."'/></td>".
				"<td>". $row["RegisterDate"]."</td>".
				"<td style='width:'colspan='2'><button type='button' class='btn btn-danger btn_delete".$i."'>Delete</button></td>".
				"<td><button type='button' class='btn btn-warning btn_update".$i."'>Update</button></td>".
		  "</tr>";

 		$output.="<script>".
                        "$(document).ready(function(){
                            $('.btn_delete".$i."').click(function(){
                               var _id = $('#shi_id".$i."').text();
								window.location.href = 'http://localhost:81/4Shop/delete.php?src='+_id+'&brand='+'underarmour';

                             });
                    })".
             "</script>";
        $output.="<script>".

 						"$(document).ready(function(){
                            $('.btn_update".$i."').click(function(){
                               var idUpdate = $('#shi_id".$i."').text();
                               var priceUpdate = $('#shi_price".$i."').text();
                               var sizeUpdate =  $('#shi_size".$i."').text();
                               var nameUpdate =  $('#shi_name".$i."').text();
                               var imgUpate = $('.shi_img".$i."').attr('src');
                               window.location.href = 'http://localhost:81/4Shop/update.php?idU='+idUpdate+'&SU='+sizeUpdate+'&NU='+nameUpdate+'&IU='+imgUpate+'&PU='+priceUpdate+'&brand='+'underarmour';
                             });
                    })".
          "</script>";
   		}
	} else {
    echo "No Data";
}
$output.="</table>";
 print($output);
?>
</div>
<div id="puma" class="tabcontent">
<?php
	$output ="";
	$sql = "SELECT * FROM puma";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
   $output.= "<table id='customers'>".
		  "<tr>
		  	<th style='width:90px; text-align:center;'>Shirt Code</th>
		    <th style='width:300px;'>Shirt Name</th>
		    <th style='width:91px;'>Shirt Size</th>
		    <th style='width: 91px;'>Shirt Price</th>
		    <th style='width:390px;'>Shirt Image</th>
		    <th style='width:168px;'>Added Date</th>
		   	<th colspan='4'>Action </th>
		  </tr>";
 while($row = $result->fetch_assoc()) {
$i++;
	$output.= "<tr>".
				"<td id='shi_id".$i."'>". $row["id"]. "</td>".
				"<td id='shi_name".$i."'>". $row["shirtName"]."</td>".
				"<td id='shi_size".$i."'>". $row["shirtSize"]."</td>".
				"<td id='shi_price".$i."'>". $row["Price"]."</td>".
				"<td><img class='shi_img".$i."' src='upload/".$row['image']."'/></td>".
				"<td>". $row["RegisterDate"]."</td>".
				"<td style='width:'colspan='2'><button type='button' class='btn btn-danger btn_delete".$i."'>Delete</button></td>".
				"<td><button type='button' class='btn btn-warning btn_update".$i."'>Update</button></td>".
		  "</tr>";
		$output.="<script>".
                        "$(document).ready(function(){
                            $('.btn_delete".$i."').click(function(){
                               var _id = $('#shi_id".$i."').text();
                               var _brand =$('.tablinks').val();
							window.location.href = 'http://localhost:81/4Shop/delete.php?src='+_id+'&brand='+'puma';
                             });
                    })".
             "</script>";
        $output.="<script>".

 						"$(document).ready(function(){
                            $('.btn_update".$i."').click(function(){
                               var idUpdate = $('#shi_id".$i."').text();
                               var priceUpdate = $('#shi_price".$i."').text();
                               var sizeUpdate =  $('#shi_size".$i."').text();
                               var nameUpdate =  $('#shi_name".$i."').text();
                               var imgUpate = $('.shi_img".$i."').attr('src');
                               window.location.href = 'http://localhost:81/4Shop/update.php?idU='+idUpdate+'&SU='+sizeUpdate+'&NU='+nameUpdate+'&IU='+imgUpate+'&PU='+priceUpdate+'&brand='+'puma';
   });
})".
  "</script>";
   	}
} else {
  echo "No Data";
}
$output.="</table>";
 print($output);
?>
</div>
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

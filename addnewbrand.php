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
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="css/addnew.css" rel="stylesheet">
</head>
<body>
<h1>Please Select brand to add new shirt</h1>
<?php
  // use prepared statment to insert data
$sql = "SELECT * FROM category";
$result = $conn->query($sql);
$i =0;
$output ="";
$shirt_brand =['','adidas','nike','gucci','prada','supreme','tommy_hilfiger','versace','diesel','hugo_boss','under_armour','puma'];
if ($result->num_rows > 0) {
    // output data of each row
   $output.="<div class='main'>"; 
    while($row = $result->fetch_assoc()) {
      $i++;
        $output.="
              
            <a href='' class='brand' id='brand".$i."'>".$row['brand']." </a><br>
        ";
        $output.="
                                <script>
                                        $(document).ready(function(){
                                          $('#brand".$i."').click(function(){
                                              $('#brand".$i."').attr('href','http://localhost:81/4Shop/Addnew.php?sh_brand=".$shirt_brand[$i]."');
                                          })
                                        });
                                </script>
                              
        ";

    }
    $output.= "</div>";
} else {
    echo "0 results";
}
print($output);
$conn->close();
?>
</script>
</body>
</html>
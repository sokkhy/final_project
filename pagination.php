
<?php
include('dbConfig.php');
 
$limit = 2;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  
  
$sql = "SELECT * FROM adidas ORDER BY id ASC LIMIT $start_from, $limit";  
$rs_result = mysql_query ($sql);  
?>
<table class="table table-bordered table-striped">  
<thead>  
<tr>  
<th>title</th>  
<th>body</th>  
</tr>  
</thead>  
<tbody>  
<?php  
while ($row = mysql_fetch_assoc($rs_result)) {  
?>  
            <tr>  
            <td><? echo $row["shirtName"]; ?></td>  
            <td><? echo $row["shirtCode"]; ?></td>  
            </tr>  
<?php  
};  
?>  
</tbody>  
</table>  
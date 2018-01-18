<?php
include_once("config.php");
?>
<link rel="stylesheet" href="style.css" type="text/css" />
<table align="center" width="50%"  border="1">

<tr>
<td>

        <table align="center" border="1" width="100%" height="100%" id="data">
        <?php 
        $query = "SELECT * FROM adidas";       
		$records_per_page=2;
		$newquery = $paginate->paging($query,$records_per_page);
		$paginate->dataview($newquery);
		$paginate->paginglink($query,$records_per_page);		
		?>
        </table>
</td>
</tr>
</table>
<div id="footer">

</div>

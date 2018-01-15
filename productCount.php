<?php
$query = $db->query('SELECT COUNT(*) as adidas_total FROM adidas');
$row = $query->fetch_assoc();
$query1 = $db->query('SELECT COUNT(*) as nike_total FROM nike');
$row1 = $query1->fetch_assoc();
$query2 = $db->query('SELECT COUNT(*) as diesel_total FROM diesel');
$row2 = $query2->fetch_assoc();
$query3 = $db->query('SELECT COUNT(*) as puma_total FROM puma');
$row3 = $query3->fetch_assoc();
$query4 = $db->query('SELECT COUNT(*) as prada_total FROM prada');
$row4 = $query4->fetch_assoc();
$query5 = $db->query('SELECT COUNT(*) as versace_total FROM versace');
$row5 = $query5->fetch_assoc();
$query6 = $db->query('SELECT COUNT(*) as tommyhilfiger_total FROM tommyhilfiger');
$row6 = $query6->fetch_assoc();
$query7 = $db->query('SELECT COUNT(*) as hugoboss_total FROM hugoboss');
$row7 = $query7->fetch_assoc();
$query8 = $db->query('SELECT COUNT(*) as underarmour_total FROM underarmour');
$row8 = $query8->fetch_assoc();
$query9 = $db->query('SELECT COUNT(*) as supreme_total FROM supreme');
$row9 = $query9->fetch_assoc();
$query10 = $db->query('SELECT COUNT(*) as gucci_total FROM gucci');
$row10 = $query10->fetch_assoc();

?>
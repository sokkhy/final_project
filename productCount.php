<?php
// Database configuration
$dbHost = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "dbkeybest";

// Create database connection
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$query = $conn->query('SELECT COUNT(*) as adidas_total FROM adidas');
$row = $query->fetch_assoc();
$query1 = $conn->query('SELECT COUNT(*) as nike_total FROM nike');
$row1 = $query1->fetch_assoc();
$query2 = $conn->query('SELECT COUNT(*) as diesel_total FROM diesel');
$row2 = $query2->fetch_assoc();
$query3 = $conn->query('SELECT COUNT(*) as puma_total FROM puma');
$row3 = $query3->fetch_assoc();
$query4 = $conn->query('SELECT COUNT(*) as prada_total FROM prada');
$row4 = $query4->fetch_assoc();
$query5 = $conn->query('SELECT COUNT(*) as versace_total FROM versace');
$row5 = $query5->fetch_assoc();
$query6 = $conn->query('SELECT COUNT(*) as tommyhilfiger_total FROM tommyhilfiger');
$row6 = $query6->fetch_assoc();
$query7 = $conn->query('SELECT COUNT(*) as hugoboss_total FROM hugoboss');
$row7 = $query7->fetch_assoc();
$query8 = $conn->query('SELECT COUNT(*) as underarmour_total FROM underarmour');
$row8 = $query8->fetch_assoc();
$query9 = $conn->query('SELECT COUNT(*) as supreme_total FROM supreme');
$row9 = $query9->fetch_assoc();
$query10 = $conn->query('SELECT COUNT(*) as gucci_total FROM gucci');
$row10 = $query10->fetch_assoc();

?>

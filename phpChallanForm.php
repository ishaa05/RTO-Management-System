<?php

$cid = $_POST['cid'];
$vid = $_POST['vid'];
$type = $_POST['type'];
$amt = $_POST['amt'];
$issuedate = $_POST['issuedate'];

$servername = "localhost";
$username = "isha";
$password = "isha123";
$db = "echallan_system";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$sql = "insert into Challan(C_id, V_in,Violation_type,amount,issue_date) values($cid,$vid,'$type', $amt,'$issuedate' )";


if ($conn->query($sql) === TRUE) {
echo "<p style=\"color: green;\">","Challan generated successfully.","</p>\n\n";
} else {
echo "<p style=\"color: red;\">","Sorry! Challan generation failed.","</p>\n\n";
}

$conn->close();

?>

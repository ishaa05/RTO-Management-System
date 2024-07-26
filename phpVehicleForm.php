<?php

$id = $_POST['id'];
$type = $_POST['type'];
$regnum = $_POST['regnum'];
$mfgdate = $_POST['mfgdate'];
$regndate = $_POST['regndate'];
$mfr = $_POST['mfr'];

$servername = "localhost";
$username = "";
$password = "";
$db = "echallan_system";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$sql = "insert into Vehicle(V_in,type,reg_num,mfg_date,reg_date, manufacturers) values($id,'$type','$regnum','$mfgdate','$regndate','$mfr' )";



if ($conn->query($sql) === TRUE) {
echo "<p style=\"color: green;\">","Vehicle registered successfully.","</p>\n\n";
} else {
echo "<p style=\"color: red;\">","Sorry! Vehicle registration failed.","</p>\n\n";
}

$conn->close();

?>

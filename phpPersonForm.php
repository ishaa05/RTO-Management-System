<?php
session_start();
$id = $_POST['id'];
$name = $_POST['name'];
$dob = $_POST['dob'];
$address = $_POST['address'];

$servername = "localhost";
$username = "isha";
$password = "isha123";
$db = "echallan_system";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$sql = "insert into person(P_id,Name,DOB,Address) values($id,'$name','$dob','$address' )";


if ($conn->query($sql) === TRUE) {
echo "<p style=\"color: green;\">","Driver registered successfully.","</p>\n\n";
} else {
echo "<p style=\"color: red;\">","Sorry! Driver registration failed.","</p>\n\n";
}

$conn->close();

?>

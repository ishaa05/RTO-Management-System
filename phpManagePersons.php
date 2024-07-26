<?php
$servername = "localhost";
$username = "isha";
$password = "isha123";
$db = "echallan_system";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="form">
<header class="header">
   <img 
    src="./rto.png" class="header-image"
            />
<h1 class="header-title">RTO</h1>
<h3 class="header-project">Department Of Motor Vehicle</h3>
</header>
<div style="padding-left:12px;padding-top:5px;padding-bottom:5px;color: darkOrange;">
  <h2>Manage Drivers</h1>
</div>
<div style="margin-left:14px">
<table  width="99%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>Id</strong></th>
<th><strong>Name</strong></th>
<th><strong>Date Of Birth</strong></th>
<th><strong>Address</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from person ORDER BY P_id asc;";
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $row["P_id"]; ?></td>
<td align="center"><?php echo $row["Name"]; ?></td>
<td align="center"><?php echo $row["DOB"]; ?></td>
<td align="center"><?php echo $row["Address"]; ?></td>
<td align="center">
<a href="phpEditPerson.php?id=<?php echo $row["P_id"]; ?>">Edit</a>
</td>
<td align="center">
<a href="phpDeletePerson.php?id=<?php echo $row["P_id"]; ?>">Delete</a>
</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</div>
</body>
</html>



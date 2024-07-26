<?php
$servername = "localhost";
$username = "";
$password = "";
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
  <h2>Manage Vehicles</h1>
</div>
<div style="margin-left:14px">
<table  width="99%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>Id</strong></th>
<th><strong>Type</strong></th>
<th><strong>Date Of Manufacture</strong></th>
<th><strong>Registration Number</strong></th>
<th><strong>Registration Date</strong></th>
<th><strong>Manufacturer</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from vehicle ORDER BY V_in asc;";
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $row["V_in"]; ?></td>
<td align="center"><?php echo $row["type"]; ?></td>
<td align="center"><?php echo $row["mfg_date"]; ?></td>
<td align="center"><?php echo $row["reg_num"]; ?></td>
<td align="center"><?php echo $row["reg_date"]; ?></td>
<td align="center"><?php echo $row["manufacturers"]; ?></td>

<td align="center">
<a href="phpEditVehicle.php?id=<?php echo $row["V_in"]; ?>">Edit</a>
</td>
<td align="center">
<a href="phpDeleteVehicle.php?id=<?php echo $row["V_in"]; ?>">Delete</a>
</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</div>
</body>
</html>



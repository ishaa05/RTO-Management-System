<?php
$servername = "localhost";
$username = "isha";
$password = "isha123";
$db = "echallan_system";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
   $id=$_REQUEST['id'];
   $name =$_REQUEST['name'];
   $dob =$_REQUEST['dob'];
   $address =$_REQUEST['address'];
  
   $sql = "insert into person(P_id,Name,DOB,Address) values    ($id,'$name','$dob','$address' )";

  
   if ($conn->query($sql) === TRUE) {
 $status = "Driver registered successfully.
    </br></br><a href='./phpManagePersons.php'>View registered driver</a>";
   
   } else {
   $status = "Sorry! Driver registration failed.";
  
}

$conn->close();
}
?>


<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css"> <!-- Link to external CSS file -->
  <style> 
      .required::after {
        content: ' *';
        color: red;
      }
    </style>
</head>
<body>
<header class="header">
   <img 
    src="./rto.png" class="header-image"
            />
<h1 class="header-title">RTO</h1>
<h3 class="header-project">Department Of Motor Vehicle</h3>
</header>
<div style="padding-left:12px;padding-top:5px;padding-bottom:5px;color: darkOrange;">
  <h2>Register Driver</h1>
</div>

<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<label class="label-field required" for="Id">Id:</label>
    <input type="text" id="id" required name="id" class="input-field" value="">
    
    <label class="label-field required" for="fname">Name:</label><br>
    <input type="text" id="name" required name="name" class="input-field" value=""><br>
    
    <label class="label-field required" for="DOB">Date Of Birth:</label><br>
    <input type="date" class="input-field" required id="dob" name="dob" class="input-field" value=""><br>
    
    <label class="label-field required" for="address">Address:</label><br>
    <textarea class="input-field" id="address" name="address" required class="address-field"></textarea><br>
    
    <input type="submit" value="Submit" class="submit-button">
  </form>
<p style="padding-left:15px;padding-top:5px;padding-   bottom:5px;color:green;"><?php echo $status; ?></p>


</body>
</html>





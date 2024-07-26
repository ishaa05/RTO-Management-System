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
   $id = $_REQUEST['id'];
   $type = $_REQUEST['type'];
   $regnum = $_REQUEST['regnum'];
   $mfgdate = $_REQUEST['mfgdate'];
   $regndate = $_REQUEST['regndate'];
   $mfr = $_REQUEST['mfr'];
   $sql = "insert into vehicle(V_in,type,reg_num,mfg_date,reg_date, manufacturers) values($id,'$type','$regnum','$mfgdate','$regndate','$mfr' )";

 
   if ($conn->query($sql) === TRUE) {
 $status = "Vehicle registered successfully.
    </br></br><a href='./phpManageVehicles.php'>View registered vehicle</a>";
   
   } else {
   $status = "Sorry! Vehicle registration failed.";
  
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
  <h2>Register Vehicle</h1>
</div>

<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<label class="label-field required" for="id">Id:</label>
<input type="text" id="id" name="id" required class="input-field" value=""> 

<label class="label-field"  for="type">Vehicle Type:</label>
<select name="type" required class="select-field">
  <option value="">Select Type</option>
  <option value="Car">Car</option>
  <option value="MotorCycle">MotorCycle</option>
  <option value="Truck">Truck</option>
</select>
     
<label class="label-field required" for="regnum">Registration Number:</label>
<input type="text" id="regnum" name="regnum" class="input-field" required value="">
    
<label class="label-field required" for="mfgdate">Manufacturing Date:</label>
<input type="date" id="mfgdate" name="mfgdate" class="input-field" required value="">
      
<label class="label-field required" for="regndate">Registration Date:</label>
<input type="date" id="regndate" required name="regndate" class="input-field" value="">
  
<label class="label-field required" for="mfr">Manufacturer:</label>
        <select name="mfr" required class="select-field">
          <option value="">Select Manufacturer</option>
          <option value="Toyota">Toyota</option>
          <option value="Suzuki">Suzuki</option>
          <option value="Skoda">Skoda</option>
          <option value="Audi">Audi</option>
          <option value="Tesla">Tesla</option>
          <option value="Kia">Kia</option>
          <option value="Tata">Tata</option>
          <option value="Mahindra">Mahindra</option>
        </select>
    
<input type="submit" value="Submit" class="submit-button">
  </form>
<p style="padding-left:15px;padding-   bottom:5px;color:green;"><?php echo $status; ?></p>


</body>
</html>





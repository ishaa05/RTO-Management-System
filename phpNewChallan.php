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
  $cid = $_REQUEST['cid'];
  $vid = $_REQUEST['vid'];
  $type = $_REQUEST['type'];
  $amt = $_REQUEST['amt'];
  $issuedate = $_REQUEST['issuedate'];
  
$sql = "insert into challan(C_id, V_in,Violation_type,amount,issue_date) values($cid,$vid,'$type', $amt,'$issuedate' )";

  
   if ($conn->query($sql) === TRUE) {
 $status = "Challan generated successfully.
    </br></br><a href='./phpManageChallans.php'>View generated challan</a>";
   
   } else {
   $status = "Sorry! Challan generation failed.";
  
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
  <h2>Generate Challan</h1>
</div>

<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<label class="label-field required" for="cid">Id:</label>
 <input type="text" class="input-field" required  id="cid"  name="cid"  value="">

<label class="label-field required" for="vid">Vehicle Id:</label>
<input type="text" class="input-field" required  id="vid" name="vid"  value="">
<label class="label-field required" for="amt">Amount:</label><br>
<input type="text" class="input-field" required  id="amt" name="amt"  value="">

<label class="label-field required" for="type">Violation Type:</label><br>

<select class="select-field" required name="type" >
	<option value="">Select Violation Type </option>
	<option value="Overspeeding">Overspeeding</option>
	<option value="No seat belt">No seat belt</option>
	<option value="No licence">No licence</option>
</select><br>
<label class="label-field required" for="issuedate">Issue Date:</label>
<input type="date" required class="input-field" id="issuedate" name="issuedate" placeholder="yyyy-mm-dd" value="" >
<input type="submit" class="submit-button" value="Submit">
  </form>
<p style="padding-left:15px;padding-top:5px;padding-   bottom:5px;color:green;"><?php echo $status; ?></p>


</body>
</html>





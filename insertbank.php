<?php
require('db.php');
include("auth.php");
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
    $bank_id = $_REQUEST['bank_id'];
    $name = $_REQUEST['name'];
    $address = $_REQUEST['address'];
    $city = $_REQUEST['city'];
    $ins_query="insert into bank
    (`bank_id`,`name`,`address`,`city`)values
    ('$bank_id','$name','$address','$city')";
    mysqli_query($con,$ins_query)
    or die(mysqli_error());
    $status = "New Record Inserted Successfully.
    </br></br><a href='viewbank.php'>View Inserted Record</a>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>BANK</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<style>
body { 
     background-image: url('images/pic9.jfif');
     background-repeat: no-repeat;
     background-attachment: fixed;
     background-size: 100% 100%;
}
</style>
<body>
<div class="form">
<p><a href="dashboard.php">Dashboard</a> 
<p><a href="viewbank.php">View Records</a> 
<p><a href="logout.php">Logout</a></p>
<div>
<h1>Insert New Record</h1>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="bank_id" placeholder="Enter bank_id" required /></p>
<p><input type="text" name="name" placeholder="Enter Name" required /></p>
<p><input type="text" name="address" placeholder="Enter Address" required /></p>
<p><input type="text" name="city" placeholder="Enter City" required /></p>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
</div>
</body>
</html>

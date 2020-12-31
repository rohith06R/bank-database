<?php
require('db.php');
include("auth.php");
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
    $customer_id = $_REQUEST['customer_id'];
    $customer_name = $_REQUEST['customer_name'];
    $address = $_REQUEST['address'];
    $city = $_REQUEST['city'];
    $phone_no = $_REQUEST['phone_no'];
    $gender = $_REQUEST['gender'];
    $email = $_REQUEST['email'];
    $ins_query="insert into customer
    (`customer_id`,`customer_name`,`address`,`city`,`phone_no`,`gender`,`email`)values
    ('$customer_id','$customer_name','$address','$city','$phone_no','$gender','$email')";
    mysqli_query($con,$ins_query)
    or die(mysqli_error());
    $status = "New Record Inserted Successfully.
    </br></br><a href='viewcustomer.php'>View Inserted Record</a>";
}
?>
<!DOCTYPE html>
<html>
<head>
<style>
body { 
     background-image: url('images/pic9.jfif');
     background-repeat: no-repeat;
     background-attachment: fixed;
     background-size: 100% 100%;
}
</style>
<meta charset="utf-8">
<title>CUSTOMER</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p><a href="dashboard.php">Dashboard</a> 
<p><a href="viewcustomer.php">View Records</a> 
<p><a href="logout.php">Logout</a></p>
<div>
<h1>Insert New Record</h1>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="customer_id" placeholder="Enter customer_id" required /></p>
<p><input type="text" name="customer_name" placeholder="Enter Customer_Name" required /></p>
<p><input type="text" name="address" placeholder="Enter Address" required /></p>
<p><input type="text" name="city" placeholder="Enter City" required /></p>
<p><input type="text" name="phone_no" placeholder="Enter Phone_no" required /></p>
<p><input type="text" name="gender" placeholder="Enter Gender" required /></p>
<p><input type="text" name="email" placeholder="Enter Email" required /></p>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
</div>
</body>
</html>

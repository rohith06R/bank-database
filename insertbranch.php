<?php
require('db.php');
include("auth.php");
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
    $branch_id = $_REQUEST['branch_id'];
    $address = $_REQUEST['address'];
    $city = $_REQUEST['city'];
    $ifsc_code = $_REQUEST['ifsc_code'];
    $bank_id = $_REQUEST['bank_id'];
    $loan_no  = $_REQUEST['loan_no'];
    $ins_query="insert into branch
    (`branch_id`,`address`,`city`,`ifsc_code`,`bank_id`,`loan_no`)values
    ('$branch_id','$address','$city','$ifsc_code','$bank_id','$loan_no')";
    mysqli_query($con,$ins_query)
    or die(mysqli_error());
    $status = "New Record Inserted Successfully.
    </br></br><a href='viewbranch.php'>View Inserted Record</a>";
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
<title>BRANCH</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p><a href="dashboard.php">Dashboard</a> 
<p><a href="viewbranch.php">View Records</a> 
<p><a href="logout.php">Logout</a></p>
<div>
<h1>Insert New Record</h1>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="branch_id" placeholder="Enter Branch_id" required /></p>
<p><input type="text" name="address" placeholder="Enter Address" required /></p>
<p><input type="text" name="city" placeholder="Enter City" required /></p>
<p><input type="text" name="ifsc_code" placeholder="Enter ifsc_code" required /></p>
<p><input type="text" name="bank_id" placeholder="Enter Bank_id" required /></p>
<p><input type="text" name="loan_no" placeholder="Enter Loan_no" required /></p>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
</div>
</body>
</html>

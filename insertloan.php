<?php
require('db.php');
include("auth.php");
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
    $loan_no= $_REQUEST['loan_no'];
    $amount = $_REQUEST['amount'];
    $purpose = $_REQUEST['purpose'];
    $customer_id = $_REQUEST['customer_id'];
    $ins_query="insert into loan
    (`loan_no`,`amount`,`purpose`,`customer_id`)values
    ('$loan_no','$amount','$purpose','$customer_id')";
    mysqli_query($con,$ins_query)
    or die(mysqli_error());
    $status = "New Record Inserted Successfully.
    </br></br><a href='viewloan.php'>View Inserted Record</a>";
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
<p><a href="viewloan.php">View Records</a> 
<p><a href="logout.php">Logout</a></p>
<div>
<h1>Insert New Record</h1>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="loan_no" placeholder="Enter Loan_no" required /></p>
<p><input type="text" name="amount" placeholder="Enter Amount" required /></p>
<p><input type="text" name="purpose" placeholder="Enter Purpose" required /></p>
<p><input type="text" name="customer_id" placeholder="Enter Customer_id" required /></p>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
</div>
</body>
</html>

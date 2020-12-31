<?php
require('db.php');
include("auth.php");
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
    $account_id = $_REQUEST['account_id'];
    $balance = $_REQUEST['balance'];
    $account_type = $_REQUEST['account_type'];
    $branch_id = $_REQUEST['branch_id'];
    $ins_query="insert into account
    (`account_id`,`balance`,`account_type`,`branch_id`)values
    ('$account_id','$balance','$account_type','$branch_id')";
    mysqli_query($con,$ins_query)
    or die(mysqli_error());
    $status = "New Record Inserted Successfully.
    </br></br><a href='viewaccount.php'>View Inserted Record</a>";
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
<title>ACCOUNT</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p><a href="dashboard.php">Dashboard</a> 
<p><a href="viewaccount.php">View Records</a> 
<p><a href="logout.php">Logout</a></p>
<div>
<h1>Insert New Record</h1>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="account_id" placeholder="Enter Account_id" required /></p>
<p><input type="text" name="balance" placeholder="Enter Balance" required /></p>
<p><input type="text" name="account_type" placeholder="Enter Account_type" required /></p>
<p><input type="text" name="branch_id" placeholder="Enter branch_id" required /></p>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
</div>
</body>
</html>

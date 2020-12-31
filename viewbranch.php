<?php
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<style>
body { 
     background-image: url('images/pic10.jfif');
     background-repeat: no-repeat;
     background-attachment: fixed;
     background-size: 100% 100%;
}
</style>
<body>
<div class="form">
<p><a href="index.php">Home</a> 
<p> <a href="insertbranch.php">BRANCH</a> 
<p><a href="logout.php">Logout</a></p>
<h2>View Records</h2>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>S.No</strong></th>
<th><strong>Branch_id</strong></th>
<th><strong>Address</strong></th>
<th><strong>City</strong></th>
<th><strong>ifsc_code</strong></th>
<th><strong>Bank_id</strong></th>
<th><strong>Loan_no</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from branch ORDER BY branch_id desc;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["branch_id"]; ?></td>
<td align="center"><?php echo $row["address"]; ?></td>
<td align="center"><?php echo $row["city"]; ?></td>
<td align="center"><?php echo $row["ifsc_code"]; ?></td>
<td align="center"><?php echo $row["bank_id"]; ?></td>
<td align="center"><?php echo $row["loan_no"]; ?></td>
<td align="center">
<a href="deletebranch.php?branch_id=<?php echo $row["branch_id"]; ?>">Delete</a>
</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</body>
</html>
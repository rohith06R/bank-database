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
<p> <a href="insertcustomer.php">CUSTOMER</a> 
<p><a href="logout.php">Logout</a></p>
<h2>View Records</h2>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>S.No</strong></th>
<th><strong>customer_id</strong></th>
<th><strong>customer_name</strong></th>
<th><strong>Address</strong></th>
<th><strong>City</strong></th>
<th><strong>phone_no</strong></th>
<th><strong>gender</strong></th>
<th><strong>email</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from customer ORDER BY customer_id desc;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["customer_id"]; ?></td>
<td align="center"><?php echo $row["customer_name"]; ?></td>
<td align="center"><?php echo $row["address"]; ?></td>
<td align="center"><?php echo $row["city"]; ?></td>
<td align="center"><?php echo $row["phone_no"]; ?></td>
<td align="center"><?php echo $row["gender"]; ?></td>
<td align="center"><?php echo $row["email"]; ?></td>
<td align="center">
<a href="deletecustomer.php?customer_id=<?php echo $row["customer_id"]; ?>">Delete</a>
</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</body>
</html>
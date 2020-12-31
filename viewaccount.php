<?php
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<style>
body { 
     background-image: url('images/pic10.jfif');
     background-repeat: no-repeat;
     background-attachment: fixed;
     background-size: 100% 100%;
}
</style>
<meta charset="utf-8">
<title>View Records</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p><a href="index.php">Home</a> 
<p> <a href="insertaccount.php">ACCOUNT</a> 
<p><a href="logout.php">Logout</a></p>
<h2>View Records</h2>
<table width="100%"  border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>S.No</strong></th>
<th><strong>account_id</strong></th>
<th><strong>balance</strong></th>
<th><strong>account_type</strong></th>
<th><strong>branch_id</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from account ORDER BY account_id desc;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["account_id"]; ?></td>
<td align="center"><?php echo $row["balance"]; ?></td>
<td align="center"><?php echo $row["account_type"]; ?></td>
<td align="center"><?php echo $row["branch_id"]; ?></td>
<td align="center">
<a href="deleteaccount.php?account_id=<?php echo $row["account_id"]; ?>">Delete</a>
</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</body>
</html>
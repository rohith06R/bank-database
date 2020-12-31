<?php
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard - Secured Page</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body style="background-color: orange;margin-bottom:50px;">
<table width="900" border="0" align="center" cellpadding="0" cellspacing="1" class="graybox">
 <tr style="background-color: orange"> 
  <td><img src="images/p0.png" /></td>
 </tr>
 <tr> 
  <td valign="bottom"> 
  <table width="100%" border="0" cellspacing="0" cellpadding="20">
    <tr> 
<body>
<div class="form">
<p> welcome to Dashboard</p>
<p><a href="insertbank.php"> BANK </a></p>
<p><a href="viewbank.php">View Records</a><p>
<p><a href="insertbranch.php"> BRANCH </a></p>
<p><a href="viewbranch.php">View Records </a></p>
<p><a href="insertcustomer.php"> CUSTOMER</a></p>
<p><a href="viewcustomer.php">View Records </a></p>
<p><a href="insertloan.php"> LOAN</a></p>
<p><a href="viewloan.php">View Records </a></p>
<p><a href="insertaccount.php"> ACCOUNT</a></p>
<p><a href="viewaccount.php">View Records </a></p>
<p><a href="index.php">Home</a></p>
<a href="logout.php">Logout</a>
</div>
</body>
</html>

<?php
require('db.php');
$customer_id= $_REQUEST['customer_id'];
$query = "DELETE FROM customer WHERE customer_id=$customer_id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: viewcustomer.php"); 
?>
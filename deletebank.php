<?php
require('db.php');
$bank_id= $_REQUEST['bank_id'];
$query = "DELETE FROM bank WHERE bank_id=$bank_id"; 
$result = mysqli_query($con,$query) or die(mysqli_error());
header("Location: viewbank.php");
?>
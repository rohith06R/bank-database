<?php
require('db.php');
$account_id= $_REQUEST['account_id'];
$query = "DELETE FROM account WHERE account_id=$account_id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: viewaccount.php"); 
?>
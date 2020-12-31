<?php
require('db.php');
$branch_id= $_REQUEST['branch_id'];
$query = "DELETE FROM branch WHERE branch_id=$branch_id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: viewbranch.php"); 
?>
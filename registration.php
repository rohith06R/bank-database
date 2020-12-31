<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<style>
body { 
     background-image: url('images/reg.jpg');
     background-repeat: no-repeat;
     background-attachment: fixed;
     background-size: 100% 100%;
}
</style>
<body>
<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
 $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
 $username = mysqli_real_escape_string($con,$username); 
 $email = stripslashes($_REQUEST['email']);
 $email = mysqli_real_escape_string($con,$email);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);

 $age = stripslashes($_REQUEST['age']);

 $contact = stripslashes($_REQUEST['conatct']);

 $DOB = stripslashes($_REQUEST['DOB']);


 $trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `login` (username, password, email, trn_date,age,contact,DOB)
VALUES ('$username', '".md5($password)."', '$email', '$trn_date', '$age', '$contact', '$DOB')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>
<div class="form">
<h1>Registration</h1>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Username" required />
<input type="email" name="email" placeholder="Email" required />
<input type="password" name="password" placeholder="Password" required />
<input type="text" name="age" placeholder="Age" required />
<input type="text" name="contact" placeholder="Contact" required />
<input type="text" name="DOB" placeholder="Dob" required />
<input type="submit" name="submit" value="Register" />
</form>
</div>
<?php } ?>
</body>
</html>

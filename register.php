<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="css/me.css">
</head>
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
 $status = stripslashes($_REQUEST['status']);
 $status = mysqli_real_escape_string($con,$status);
 $phone = stripslashes($_REQUEST['phone']);
 $phone = mysqli_real_escape_string($con,$phone);
 $referral = stripslashes($_REQUEST['referral']);
 $referral = mysqli_real_escape_string($con,$referral);
 
        $query = "INSERT into `users` (username, password, email, status, phone, referral)
VALUES ('$username', '".md5($password)."', '$email', '$status', '$phone', '$referral')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>
<div class="form">
   <div class="card">
        <div class="card-header"><h1>Register to Portal</h1></div>
        <div class="card-body">
          <form name="registration" action="" method="post">
             <label for="username"><span style="font-weight: bold;">Username</spa><span style="color: #222; font-size: 25px;">*</span></label>       
             <input type="text" name="username" required />
             <label for="email"><span style="font-weight: bold;">Email</span><span style="color: #222; font-size: 25px;">*</span></label>
             <input type="email" name="email" required />
             <label for="password"><span style="font-weight: bold;">Password</span><span style="color: #222; font-size: 25px;">*</span></label>
             <input type="password" name="password" required />
             <label for="status"><span style="font-weight: bold;">Investor | Agent</span><span style="color: #222; font-size: 25px;">*</span></label>
             <input type="text" name="status" required />
             <label for="phone"><span style="font-weight: bold;">Phone</span><span style="color: #222; font-size: 25px;">*</span></label>
             <input type="tel" name="phone" required />
             <label for="referral"><span style="font-weight: bold;">Refferal</span><span style="color: #222; font-size: 25px;">*</span></label>
             <input type="text" name="referral" required />
             <input type="submit" name="submit" value="Register" />
          </form>  
        </div>
        <div class="card-footer"><p>Already a member?<a href='login.php'>Log in</a></p></div>
   </div>     


</div>

<?php } ?>


</body>
</html>
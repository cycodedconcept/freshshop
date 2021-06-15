<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="css/me.css" />
</head>
<body>
<?php
require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
 $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
 $username = mysqli_real_escape_string($con,$username);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);
 //Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username'
and password='".md5($password)."'";
 $result = mysqli_query($con,$query) or die(mysqli_error());
 $rows = mysqli_num_rows($result);
        if($rows==1){
     $_SESSION['username'] = $username;
            // Redirect user to index.php
     header("Location: welcome.php");
         }else{
 echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<p>Click here to <a href='login.php'>Login</a></p></div>";
 }
    }else{
?>
<div class="form">
       <div class="card">
              <div class="card-header"><h1>Log in to Portal</h1></div>
              <div class="card-body">
                  <form action="" method="post" name="login">
                  <label for="username"><span style="font-weight: bold;">Username</spa><span style="color: orange; font-size: 25px;">*</span></label>       
                  <input type="text" name="username" required />
                  <label for="password"><span style="font-weight: bold;">Password</span><span style="color: orange; font-size: 25px;">*</span></label>
                  <input type="password" name="password" required />
                  <input name="submit" type="submit" value="Login" />
                  </form>
              </div>
              <div class="card-footer"><p>Not registered yet? <a href='register.php'>Register Here</a></p></div>
       </div>
</div>
<?php } ?>
</body>
</html>
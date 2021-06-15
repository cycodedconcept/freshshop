<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Home</title>
<link rel="stylesheet" href="css/me.css" />
</head>
<body>
<div class="form">
<h1 style="color: #fff;">Welcome <?php echo $_SESSION['username']; ?>!</h1>
<h2 style="color: #fff;">This is secure area.</h2>
<h1><a href="dashboard.php"style="color: #fff;">Dashboard</a></h1>
<a href="logout.php" style="color: #fff;">Logout</a>
</div>
</body>
</html>
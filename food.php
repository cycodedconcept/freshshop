<?php
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/dash.css">
    <link rel="stylesheet" href="lineawesome/css/line-awesome.min.css">
    <link rel="stylesheet" href="cyril/css/bootstrap.min.css">
</head>
<body>

   <input type="checkbox" id="nav-toggle">
    <div class="sidebar bg-dark">
       <div class="sidebar-brand">
       <img src="images/logo.png" width="40%">
       </div>

       <div class="sidebar-menu">
       <ul>
            <li>
             <a href="dashboard.php" class="active" style="text-decoration: none;"><span class="las la-igloo"></span><span>Dashboard</span></a>
            </li>
            <li>
             <a href="logout.php" style="text-decoration: none;"><span class="las la-users"></span><span>New Partnership</span></a>
            </li>
            <li>
             <a href="food.php" style="text-decoration: none;"><span class="las la-shopping-cart"></span><span>Food Bundle</span></a>
            </li>
            <li>
             <a href="deposit.php" style="text-decoration: none;"><span class="las la-receipt"></span><span>Deposits</span></a>
            </li>
            <li>
             <a href="withdrawal.php" style="text-decoration: none;"><span class="las la-clipboard-list"></span><span>Withdrawals</span></a>
            </li>
            <li>
             <a href="profile.php" style="text-decoration: none;"><span class="las la-user-circle"></span><span>Profile</span></a>
            </li>
            <li>
             <a href="agent.php" style="text-decoration: none;"><span class="las la-user-circle"></span><span>Agent Portal</span></a>
            </li>
            <li>
             <a href="logout.php" style="text-decoration: none;"><span class="las la-lock"></span><span>Logout</span></a>
            </li>
       </ul>
    </div>
    </div>

    <div class="main-content">
       <header>
           <h2>
               <label for="nav-toggle">
                   <span class="las la-bars"></span>
               </label>
                Dashboard
           </h2>
       </header>

       <main>
           <div class="container">
           <div class="box1" style="width: 100%;">
             <img src="images/food.jpg" width="100%" class="cyril">
             <h3>Classic Bundle</h3>
             <p>N52,000</p>
             <button class="btn btn-success">Subscribe Now</button>
          </div>
          <div class="box2" style="width: 100%;">
             <img src="images/food2.jpg" width="100%" class="cyril">
             <h3>Family Bundle</h3>
             <p>N32,000</p>
             <button class="btn btn-success">Subscribe Now</button>
          </div>
          <div class="box1" style="width: 100%;">
             <img src="images/food3.jpg" width="100%" class="cyril">
             <h3>Family Plus Bundle</h3>
             <p>N40,000</p>
             <button class="btn btn-success">Subscribe Now</button>
          </div>
          <div class="box2" style="width: 100%;">
             <img src="images/food2.jpg" width="100%" class="cyril">
             <h3>Solo Bundle</h3>
             <p>N32,000</p>
             <button class="btn btn-success">Subscribe Now</button>
          </div>
           </div>
       </main>
    </div>
</body>
</html>
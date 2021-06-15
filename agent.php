<?php
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agent portal</title>
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
             <a href="logout.php" style="text-decoration: none;"><span class="las la-users"></span><span>Referrals</span></a>
            </li>
            <li>
             <a href="dashboard.php" style="text-decoration: none;"><span class="las la-user-circle"></span><span>Investor Portal</span></a>
            </li>
            <li>
             <a href="profile.php" style="text-decoration: none;"><span class="las la-user-circle"></span><span>Profile</span></a>
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

       <main class="p-5">
        <div class="row">
          <div class="col-md-6">
             <div class="card-single m-2" style="padding: 15px; border: 1px solid rgba(0,0,0,.125); border-radius: .35rem; width: 100%;">
              <div>
                <p style="color: #fff; font-weight: bold; width: 100%; font-size: 15px">Agent Wallet</p>
                <span style="font-size: 13px;">NO</span>
              </div>
              <div>
                <span class="las la-arrow-up"></span>
              </div>
             </div>
          </div>
          <div class="col-md-6">
          <div class="card-single m-2" style="padding: 15px; border: 1px solid rgba(0,0,0,.125); border-radius: .35rem; width: 100%;">
              <div>
                <p style="color: #fff; font-weight: bold; width: 100%; font-size: 15px;">Total Downliners</p>
                <span style="font-size: 13px;">NO</span>
              </div>
              <div>
                <span class="las la-briefcase"></span>
              </div>
           </div>
          </div>
        </div>

        <div class="card mt-5">
          <div class="card-header">
             <h4 style="color: rgba(0,0,0,0.4); width: 100%; font-size: 14px; font-weight: bold">Agent Code</h4>
          </div>
          <div class="card-body">
             <p style="color: rgba(0,0,0,0.4); width: 100%; font-size: 12px; font-weight: bold">You can share this code amongst your friends and recruits, you will get up to 5% of initial investments made by your recruits.</p>
          </div>
          <div class="card-footer">
            <button class="btn btn-warning" style="color: #fff; font-size: 14px;">View recruits</button>
          </div>
        </div>
       </main>
    </div>
</body>
</html>
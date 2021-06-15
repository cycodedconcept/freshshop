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

        <div class="cards">
           <div class="card-single" style="padding: 15px; border: 1px solid rgba(0,0,0,.125); border-radius: .35rem;">
              <div>
                <p style="color: green; font-weight: bold; width: 100%; font-size: 15px">Current Plan</p>
                <span style="font-size: 13px;">NO</span>
              </div>
              <div>
                <span class="las la-arrow-up"></span>
              </div>
           </div>

           <div class="card-single" style="padding: 15px; border: 1px solid rgba(0,0,0,.125); border-radius: .35rem;">
              <div>
                <p style="color: green; font-weight: bold; width: 100%; font-size: 15px;">Total Investments</p>
                <span style="font-size: 13px;">NO</span>
              </div>
              <div>
                <span class="las la-briefcase"></span>
              </div>
           </div>

           <div class="card-single" style="padding: 15px; border: 1px solid rgba(0,0,0,.125); border-radius: .35rem;">
              <div>
                <p style="color: #fff; font-weight: bold; width: 100%; font-size: 15px;">ROIs</p>
                <span style="font-size: 13px;">NO</span>
              </div>
              <div>
                <span class="lab la-google-wallet"></span>
              </div>
           </div>
        </div>

        <div class="recent-grid" style="width: 100%; margin-top: 20px; border: 1px solid rgba(0,0,0,.125); border-radius: .55rem;">
           <div class="projects">
              <div class="card">
                 <div class="card-header">
                    <h3>Current Plans</h3>
                 </div>
                 <div class="card-body">
                    <div class="table-responsive">
                    <table width="100%">
                       <thead>
                          <tr>
                             <td style="font-size: 13px;">No</td>
                             <td style="font-size: 13px;">Plan</td>
                             <td style="font-size: 13px;">Units</td>
                             <td style="font-size: 13px;">Amount</td>
                             <td style="font-size: 13px;">ROI</td>
                             <td style="font-size: 13px;">Start Date</td>
                             <td style="font-size: 13px;">End Date</td>
                             <td style="font-size: 13px;">Status</td>
                          </tr>
                       </thead>
                       <tbody>
                          <tr>
                             <td style="font-size: 13px;">1</td>
                             <td style="font-size: 13px;">Chiken Farm</td>
                             <td style="font-size: 13px;">1</td>
                             <td style="font-size: 13px;">N50,000</td>
                             <td style="font-size: 13px;">N7,500</td>
                             <td style="font-size: 13px;">04 Jan 2021 11:01:20</td>
                             <td style="font-size: 13px;">04 May 2021 11:01:20</td>
                             <td style="font-size: 13px;">pending</td>
                             <td><a href="pay_now.php"><button class="btn btn-sm btn-success">Pay N50,000 Now</button></a></td>
                             <td><button class="btn btn-sm btn-danger">Delete</button></td>
                          </tr>
                          <tr>
                          <td style="font-size: 13px;">2</td>
                             <td style="font-size: 13px;">Chiken Farm</td>
                             <td style="font-size: 13px;">1</td>
                             <td style="font-size: 13px;">N50,000</td>
                             <td style="font-size: 13px;">N7,500</td>
                             <td style="font-size: 13px;">04 Jan 2021 11:04:42</td>
                             <td style="font-size: 13px;">04 May 2021 11:04:42</td>
                             <td style="font-size: 13px;">pending</td>
                             <td><a href="pay_now.php"><button class="btn btn-sm btn-success">Pay N50,000 Now</button></a></td>
                             <td><button class="btn btn-sm btn-danger">Delete</button></td>
                          </tr>
                          <tr>
                          <td style="font-size: 13px;">3</td>
                             <td style="font-size: 13px;">Chiken Farm</td>
                             <td style="font-size: 13px;">1</td>
                             <td style="font-size: 13px;">N50,000</td>
                             <td style="font-size: 13px;">N7,500</td>
                             <td style="font-size: 13px;">04 Jan 2021 11:05:53</td>
                             <td style="font-size: 13px;">04 May 2021 11:05:53</td>
                             <td style="font-size: 13px;">pending</td>
                             <td><a href="pay_now.php"><button class="btn btn-sm btn-success">Pay N50,000 Now</button></a></td>
                             <td><button class="btn btn-sm btn-danger">Delete</button></td>
                          </tr>
                       </tbody>
                    </table>
                    </div>
                 </div>
              </div>
           </div>
        </div>

        <div class="recent-grid" style="width: 100%; margin-top: 20px; border: 1px solid rgba(0,0,0,.125); border-radius: .55rem;">
           <div class="projects">
              <div class="card">
                 <div class="card-header">
                    <h3>Food Bundle</h3>
                 </div>
                 <div class="card-body">
                    <div class="table-responsive">
                    <table width="100%">
                       <thead>
                          <tr>
                             <td style="font-size: 13px;">No</td>
                             <td style="font-size: 13px;">Plan</td>
                             <td style="font-size: 13px;">Amount</td>
                             <td style="font-size: 13px;">Date</td>
                             <td style="font-size: 13px;">Status</td>
                          </tr>
                       </thead>
                       <tbody>
                       </tbody>
                    </table>
                    </div>
                 </div>
              </div>
           </div>
        </div>
       </main>
    </div>
</body>
</html>
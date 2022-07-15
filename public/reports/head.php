<?php
require 'config.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>TCTI - Personnel, Payroll & Account </title>
    
    <!-- Plugins Core Css -->
    <link href="<?=$baseurl;?>/css/app.min.css" rel="stylesheet">
    <!-- Custom Css -->
    <link href="<?=$baseurl;?>/css/style.css" rel="stylesheet" />
    <!-- You can choose a theme from css/styles instead of get all themes -->
    <link href="<?=$baseurl;?>/css/styles/all-themes.css" rel="stylesheet" />
</head>

<body class="light">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30">
                <img class="loading-img-spin" src="<?=$baseurl;?>/images/loading.png" alt="admin">
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="#" onClick="return false;" class="navbar-toggle collapsed" data-bs-toggle="collapse"
                    data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="#" onClick="return false;" class="bars"></a>
                <a class="navbar-brand" href="<?=$baseurl;?>/welcome">
                    <img src="<?=$baseurl;?>/images/logo.png" alt="" />
                    <span class="logo-name">TCTI - PPA</span>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="pull-left">
                    <li>
                        <a href="#" onClick="return false;" class="sidemenu-collapse">
                            <i data-feather="menu"></i>
                        </a>
                    </li>
                    <li>
                       <strong style="font-size:35px">Personnel, Payroll & Account</strong>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <!-- Full Screen Button -->
                    <li class="fullscreen">
                        <a href="javascript:;" class="fullscreen-btn">
                            <i class="fas fa-expand"></i>
                        </a>
                    </li>
                     
                    
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <div>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="sidebar-user-panel active">
                        
                        <div class="profile-usertitle">
                            <div class="sidebar-userpic-name"> Administrator</div>
                            <div class="profile-usertitle-job ">  Tctadmin</div>
                        </div>
                    </li>
                    <li class="header">-- Menu</li>
                    <li class="active">
                        <a href="<?=$baseurl;?>/welcome" >
                            <i data-feather="monitor"></i>
                            <span>Dashboard</span>
                        </a>
                       
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i data-feather="settings"></i>
                            <span>Settings</span>
                        </a>
                        <ul class="ml-menu">
                        <li>
                                <a href="<?=$baseurl;?>/depts">Departments</a>
                            </li>
                            
                            
                            
                            <li>
                                <a href="<?=$baseurl;?>/grade">Salary Grade</a>
                            </li>
                            <li>
                                <a href="<?=$baseurl;?>/level">Salary Level</a>
                            </li>
                            <li>
                                <a href="<?=$baseurl;?>/position">Position</a>
                            </li>
                            <li>
                                <a href="<?=$baseurl;?>/structure">Salary Structure</a>
                            </li>
                        </ul>
                    </li>
                    
                                        <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i data-feather="users"></i>
                            <span>Norminal Roll</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?=$baseurl;?>/employee">All Employee</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i data-feather="user"></i>
                            <span>Paye Computation</span>
                        </a>
                        <ul class="ml-menu">
                        <li>
                                <a href="<?=$baseurl;?>/viewpayecomp">View All</a>
                            </li>
                            <li>
                                <a href="<?=$baseurl;?>/payecompmonth" target="_blank">View Monthly</a>
                            </li>
                            <li>
                                <a href="<?=$baseurl;?>/payecomp">Compute</a>
                            </li>
                             
                           
                        </ul>
                    </li>
                    
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i data-feather="dollar-sign"></i>
                            <span>Payroll</span>
                        </a>
                        <ul class="ml-menu">
                        <li>
                                <a href="<?=$baseurl;?>/genpayroll">View Payroll</a>
                            </li>
                            <li>
                                <a href="<?=$baseurl;?>/genpayslip">View Payslip</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                    
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i data-feather="dollar-sign"></i>
                            <span>Cash</span>
                        </a>
                        <ul class="ml-menu">
                           <li>
                                <a href="<?=$baseurl;?>/cashbook">Cash Book</a>
                            </li>
                            <li>
                                <a href="<?=$baseurl;?>/cashrecon">Cash Book Reconciliation</a>
                            </li>
                            <li>
                                <a href="<?=$baseurl;?>/cashreceipt">Cash Receipt</a>
                            </li>
                            <li>
                                <a href="<?=$baseurl;?>/weeklymandate">Weekly Mandate</a>
                            </li>
                                                   </ul>
                    </li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i data-feather="book"></i>
                            <span>Accounts</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?=$baseurl;?>/vregistrar">Voucher Registrar</a>
                            </li>
                            <li>
                                <a href="<?=$baseurl;?>/invprofile">Inventory Profile</a>
                            </li>
                            
                                                    
                            <li>
                                <a href="<?=$baseurl;?>/getbin">BIN</a>
                            </li>
                          
                            <li>
                                <a href="<?=$baseurl;?>/getvoting">Votting</a>
                            </li>
                            
                            <li>
                                <a href="<?=$baseurl;?>/revexp">Returns on Revenue & Expenditure</a>
                            </li>
                            
                            <li>
                                <a href="<?=$baseurl;?>/budrevexp">Returns Budget of Revenue & Expenditure</a>
                            </li>
                            
                             <li>
                                <a href="<?=$baseurl;?>/retire">Retirement</a>
                            </li>
                        </ul>
                    </li>
                    
                    
                  <li>
                        <a href="<?=$baseurl;?>/reports/index" >
                            <i data-feather="briefcase"></i>
                            <span>Reports</span>
                        </a>
                        
                    </li>
                    
                    
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i data-feather="user"></i>
                            <span>Users</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="#">Group</a>
                            </li>
                            <li>
                                <a href="#">All Users</a>
                            </li>
                             
                        </ul>
                    </li>
                   
                    
                    
                     <li class="active">
                        <a href="<?=$baseurl;?>/welcome" >
                            <i data-feather="log-out"></i>
                            <span>Logout</span>
                        </a>
                       
                    </li>
                  
                    
                    
                    
                   
                     
                    
                    
                </ul>
            </div>
            <!-- #Menu -->
        </aside>
        
    </div>
         
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>TCTI - Personnel, Payroll & Account </title>
    
    <!-- Plugins Core Css -->
    <link href="{{ asset('css/app.min.css') }}" rel="stylesheet">
    <!-- Custom Css -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <!-- You can choose a theme from css/styles instead of get all themes -->
    <link href="{{ asset('css/styles/all-themes.css') }}" rel="stylesheet" />
</head>

<body class="light">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30">
                <img class="loading-img-spin" src="{{ asset('images/loading.png') }}" alt="admin">
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
                <a class="navbar-brand" href="{{URL::to('/welcome') }}">
                    <img src="{{ asset('images/logo.png') }}" alt="" />
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
                        <a href="{{URL::to('/welcome') }}" >
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
                                <a href="{{URL::to('/depts') }}">Departments</a>
                            </li>
                            
                            
                            
                            <li>
                                <a href="{{URL::to('/grade') }}">Salary Grade</a>
                            </li>
                            <li>
                                <a href="{{URL::to('/level') }}">Salary Level</a>
                            </li>
                            <li>
                                <a href="{{URL::to('/position') }}">Position</a>
                            </li>
                            <li>
                                <a href="{{URL::to('/structure') }}">Salary Structure</a>
                            </li>
                            
                            <li>
                                <a href="{{URL::to('/stable') }}">Salary Table</a>
                            </li>
                        </ul>
                    </li>
                    
                    <?php /*
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i data-feather="trello"></i>
                            <span>Departments</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{URL::to('/depts') }}">All Departments</a>
                            </li>
                            <li>
                                <a href="{{URL::to('/adddept') }}">Add Department</a>
                            </li>
                            <li>
                                <a href="{{URL::to('/editdept') }}">Edit Departments</a>
                            </li>
                        </ul>
                    </li>
                     <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i data-feather="home"></i>
                            <span>Units</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{URL::to('/units') }}">All Units</a>
                            </li>
                            <li>
                                <a href="{{URL::to('/addunit') }}">Add Unit</a>
                            </li>
                            <li>
                                <a href="{{URL::to('/editunit') }}">Edit Units</a>
                            </li>
                        </ul>
                    </li>*/?>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i data-feather="users"></i>
                            <span>Norminal Roll</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{URL::to('/employee') }}">All Employee</a>
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
                                <a href="{{URL::to('/viewpayecomp') }}">View All</a>
                            </li>
                            <li>
                                <a href="{{URL::to('/payecomp') }}">Compute</a>
                            </li>
                             
                            <li>
                                <a href="{{URL::to('/payecompmonth') }}" target="_blank">View Monthly</a>
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
                                <a href="{{URL::to('/genpayroll') }}">View Payroll</a>
                            </li>
                            <li>
                                <a href="{{URL::to('/genpayslip') }}">View Payslip</a>
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
                                <a href="{{URL::to('/cashbook') }}">Cash Book</a>
                            </li>
                            <li>
                                <a href="{{URL::to('/cashrecon') }}">Cash Book Reconciliation</a>
                            </li>
                            <li>
                                <a href="{{URL::to('/cashreceipt') }}">Cash Receipt</a>
                            </li>
                            <li>
                                <a href="{{URL::to('/weeklymandate') }}">Weekly Mandate</a>
                            </li>
                           <?php /* <li>
                                <a href="{{URL::to('/cashflow') }}">Cash Flow</a>
                            </li>*/?>
                        </ul>
                    </li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i data-feather="book"></i>
                            <span>Accounts</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{URL::to('/vregistrar') }}">Voucher Registrar</a>
                            </li>
                            <li>
                                <a href="{{URL::to('/invprofile') }}">Inventory Profile</a>
                            </li>
                            
                        <?php /*     <li>
                                <a href="{{URL::to('/req') }}">Requisition</a>
                            </li>*/?>
                            
                            <li>
                                <a href="{{URL::to('/getbin') }}">BIN</a>
                            </li>
                          
                            <li>
                                <a href="{{URL::to('/getvoting') }}">Votting</a>
                            </li>
                            
                            <li>
                                <a href="{{URL::to('/revexp') }}">Returns on Revenue & Expenditure</a>
                            </li>
                            
                            <li>
                                <a href="{{URL::to('/budrevexp') }}">Returns Budget of Revenue & Expenditure</a>
                            </li>
                            
                             <li>
                                <a href="{{URL::to('/retire') }}">Retirement</a>
                            </li>
                        </ul>
                    </li>
                    
                    
                  <li>
                        <a href="{{ URL::to('/') }}/reports/" >
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
                        <a href="{{URL::to('/') }}" >
                            <i data-feather="log-out"></i>
                            <span>Logout</span>
                        </a>
                       
                    </li>
                  
                    
                    
                    
                   
                     
                    
                    
                </ul>
            </div>
            <!-- #Menu -->
        </aside>
        
    </div>
     @yield('contents')
    <script src="{{ asset('js/app.min.js') }}"></script>
    <script src="{{ asset('js/chart.min.js') }}"></script>
    
     <script src="{{ asset('js/table.min.js') }}"></script>
    <!-- Custom Js -->
    <script src="{{ asset('js/admin.js') }}"></script>
    <script src="{{ asset('js/bundles/echart/echarts.js') }}"></script>
    <script src="{{ asset('js/bundles/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('js/pages/index.js') }}"></script>
    <script src="{{ asset('js/pages/todo/todo.js') }}"></script>
    
      <script src="{{ asset('js/pages/tables/jquery-datatable.js') }}"></script>
</body>
  

</html>
<?php include_once('../headers/nav-dash.php');    ?>

<nav class="navbar navbar-expand-lg fixed-top navbar-light" id="mainNav">

<!--brand name-->
<a class="navbar-brand" href="#" data-jq-dropdown="#jq-dropdown-1">
    <img class="pr-3 float-left" src="assets/img/logo-icon.png" srcset="assets/img/logo-icon@2x.png 2x"  alt=""/>
    <div class="float-left">
        <div>SUN & MOON BG (PVT) LTD. </i></div>
    </div>
</a>


<!--responsive nav toggle-->
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<!--/responsive nav toggle-->

<!--responsive rightside toogle-->
<a href="javascript:;" class="nav-link right_side_toggle responsive-right-side-toggle">
    <i class="icon-options-vertical"> </i>
</a>
<!--/responsive rightside toogle-->

<div class="collapse navbar-collapse" id="navbarResponsive">

    <!--left side nav-->
    <ul class="navbar-nav left-side-nav" id="accordion">

        <li class="nav-item-search" data-toggle="tooltip" data-placement="right" title="Search">
            <div class="nav-link nav-link-collapse collapsed" data-toggle="collapse">
                <i class="vl_search"></i>
                <span class="nav-link-text">
                    <input type="text" class="search-form" placeholder="Search Report"/>
                </span>
            </div>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="dashboard">
            <a class="nav-link" href="../dashboard/dashboard.php">
                <i class="vl_dashboard"></i>
                <span class="nav-link-text">Dashboard</span>
            </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="UI Elements">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#ui_elements">
                        <i class="vl_file"></i>
                        <span class="nav-link-text">Job Registration</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="ui_elements" data-parent="#accordion">
                        <li> <a href="../job/inquiry-sheet-create.php">Create inquiry sheet</a> </li>
                        <li> <a href="../job/inquiry-sheet-manage.php">Manage inquiry sheet</a> </li>
                        <li> <a href="../job/job-create.php">Create Job</a> </li>
                        <li> <a href="../job/job-reg-mange.php">Manage Job</a></li>
                    </ul>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Widgets">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#widgets">
                        <i class="vl_cube"></i>
                        <span class="nav-link-text">Products</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="widgets" data-parent="#accordion">
                        <li> <a href="../product/product-create.php">Create Products</a> </li>
                        <li> <a href="widget-chart.html">Manage Products</a> </li>
                        <li> <a href="../product/metirial-create.php">Add Material</a> </li>
                        <li> <a href="widget-chart.html">Manage Material</a> </li>
                    </ul>
                </li>

                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Calendar">
                    <a class="nav-link" href="../calendar/calender.php">
                        <i class="vl_calendar"></i>
                        <span class="nav-link-text">Calendar</span>
                    </a>
                </li>

                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Icons">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#icons">
                        <i class="vl_list"></i>
                        <span class="nav-link-text">Customers</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="icons" data-parent="#accordion">
                        <li> <a href="icon-fontawesome.html">Add Customer</a> </li>
                        <li> <a href="icon-simple-line.html">List Customer</a> </li>
                    </ul>
                </li>

                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Forms">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#forms">
                        <i class="vl_form"></i>
                        <span class="nav-link-text">Employee</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="forms" data-parent="#accordion">
                        <li> <a href="form-basic.html">Add Employee</a> </li>
                        <li> <a href="form-checkbox-radio.html">List Employee</a> </li>
                      
                    </ul>
                </li>

                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Data Tables">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#d_tables">
                        <i class="vl_grid-even"></i>
                        <span class="nav-link-text">Sales</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="d_tables" data-parent="#accordion">
                        <li> <a href="../invoice/job-manage.php">Quotes </a> </li>
                        <li> <a href="../quot/invoice-create.php">Create New Quotes </a> </li>
                        <li> <a href="table-ajax-datatable.html">Payments</a> </li>
                    </ul>
                </li>

                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#charts">
                        <i class="vl_graph-bar"></i>
                        <span class="nav-link-text">Reports</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="charts" data-parent="#accordion">
                        <li> <a href="chartjs.html">Job Reports</a> </li>
                        <li> <a href="chartjs.html">Income Reports</a> </li>
                    </ul>
                </li>

                
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Layouts">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#layouts">
                        <i class="vl_sitemap1"></i>
                        <span class="nav-link-text">Users</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="layouts" >
                        <li> <a href="">Add Users </a></li>
                        <li> <a href="{{ route('register') }}">List Users</a> </li>
                        
                    </ul>
                </li>

    </ul>
    <!--/left side nav-->

    <!--nav push link-->
    <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
            <a class="nav-link text-center" id="left-nav-toggler">
                <i class="fa fa-angle-left"></i>
            </a>
        </li>
    </ul>
    <!--/nav push link-->

    <!--header leftside links-->
    <ul class="navbar-nav header-links">
        <li class="nav-item dropdown">
            <a class="nav  mr-lg-2" id="actionNav" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                7/3/2023,  
            </a>
         
        </li>

        <li class="nav-item dropdown">
            <a class="nav  mr-lg-2" id="actionNav" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                5.24 PM
            </a>
         
        </li>
        
        
    </ul>
    <!--/header leftside links-->

    <!--header rightside links-->
    <ul class="navbar-nav header-links ml-auto hide-arrow">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle mr-lg-3" id="messagesDropdown" href="#" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                <i class="vl_chat-bubble"></i>
                <span class="d-lg-none">Messages
                    <span class="badge badge-pill badge-primary">9 New</span>
                </span>
                <div class="notification-alarm">
                    <span class="wave wave-danger"></span>
                    <span class="dot"></span>
                </div>
            </a>

            <div class="dropdown-menu dropdown-menu-right header-right-dropdown-width pb-0" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header weight500 ">Messages</h6>
                <div class="dropdown-divider mb-0"></div>
                <a class="dropdown-item border-bottom msg-unread" href="#">
                    <div class="float-left notificaton-thumb">
                        <img class="rounded-circle" src="assets/img/avatar/avatar4.jpg" alt=""/>
                    </div>
                    <span class="weight500">Andrew Flinton</span>
                    <span class="small float-right text-muted">08:30 AM</span>

                    <div class="dropdown-message">
                        I hope that you will be there in time. See you then
                    </div>
                </a>

                <a class="dropdown-item small" href="#">View all messages</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle mr-lg-3" id="alertsDropdown" href="#" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                <i class="vl_bell"></i>
                <span class="d-lg-none">Notification
                    <span class="badge badge-pill badge-warning">5 New</span>
                </span>
                <div class="notification-alarm">
                    <span class="wave wave-warning"></span>
                    <span class="dot bg-warning"></span>
                </div>
            </a>

            <div class="dropdown-menu dropdown-menu-right header-right-dropdown-width pb-0" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header weight500">Notification</h6>

                <div class="dropdown-divider mb-0"></div>
                <a class="dropdown-item border-bottom" href="#">
                    <span class="text-primary">
                    <span class="weight500">
                        <i class="vl_bell weight600 pr-2"></i>Weekly Update</span>
                    </span>
                    <span class="small float-right text-muted">03:14 AM</span>

                    <div class="dropdown-message f12">
                        This week project update report generated. All team members are requested to check the updates
                    </div>
                </a>

                <a class="dropdown-item small" href="#">View all notification</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle mr-lg-3" id="userNav" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="user-thumb">
                    <img class="rounded-circle" src="../assets/img/avatar/avatar1.jpg" alt=""/>
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userNav">
                <a class="dropdown-item" href="#">My Profile</a>
                <a class="dropdown-item" href="#">Account Settings</a>
                <a class="dropdown-item" href="#">Inbox <span class="badge badge-primary">3</span></a>
                <a class="dropdown-item" href="#">Message <span class="badge badge-success">5</span></a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="../auth/logout-user.php">Sign Out</a>
            </div>
        </li>
        
    </ul>
    <!--/header rightside links-->

</div>
</nav>
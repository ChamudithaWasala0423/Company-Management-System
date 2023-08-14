<?php require_once "../controller/auth/controllerUserData.php"; ?>


<?php include_once('../headers/nav-dash.php');    ?>

<body class="fixed-nav">
<?php include_once('../headers/nav-side.php');    ?>
<div class="content-wrapper">


<div class="creative-state-area">
        <div class="row">
            <div class="col-lg-7 col-12">
                <h4 class="creative-state-title">Dashboard</h4>
            </div>
            <div class="col-lg-5  col-12 text-lg-right">
                <div class="row short-states mb-lg-0 mb-4">
                    <div class="col-6">
                        <span class="pr-2">unique visitors</span>
                        <span id="unique_visitors"></span>
                    </div>
                    <div class="col-6">
                        <span class="pr-2">total visitors</span>
                        <span id="total_visitors"></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="creative-state-icon bg-danger text-center pull-left">
                    <i class="vl_clip-board"></i>
                </div>
                <div class="creative-state-info text-center pull-left">
                    <h3 class="mt-4">9808</h3>
                    <p class="mb-0">order received</p>
                    <div class=" widget-action-link ">
                        <small class="text-danger weight700">5% <i class="fa fa-long-arrow-down"></i></small>
                    </div>

                    <div class="">
                        <canvas id="state_order_chart" height="80"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="creative-state-icon bg-warning text-center pull-left">
                    <i class="vl_cart-full"></i>
                </div>
                <div class="creative-state-info text-center pull-left">
                    <h3 class="mt-4">1231</h3>
                    <p class="mb-0">total sales</p>
                    <div class=" widget-action-link">
                        <small class="text-success weight700">5% <i class="fa fa-long-arrow-up"></i></small>
                    </div>
                    <div class="">
                        <canvas id="state_sale_chart" height="80"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="creative-state-icon bg-purple text-center pull-left">
                    <i class="vl_dollar-on-hand"></i>
                </div>
                <div class="creative-state-info text-center pull-left">
                    <h3 class="mt-4">23214</h3>
                    <p class="mb-0">total profit</p>
                    <div class=" widget-action-link">
                        <small class="text-success weight700">5% <i class="fa fa-long-arrow-up"></i></small>
                    </div>
                    <div class="">
                        <canvas id="state_profit_chart" height="80"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/creative states-->

    <div class="container-fluid">

        <!--sales report & active user-->
        <div class="row">
            <div class="col-xl-8 col-md-7">
                <div class="card card-shadow mb-4">
                    <div class="card-header border-0">
                        <div class="custom-title-wrap bar-primary">
                            <div class="custom-title">Sales Report</div>
                            <div class=" widget-action-link">
                                <div class="dropdown">
                                    <a href="#" class="btn btn-transparent text-secondary dropdown-hover p-0" data-toggle="dropdown">
                                        <i class=" vl_ellipsis-fill-h"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right vl-dropdown">
                                        <a class="dropdown-item" href="#"> Edit</a>
                                        <a class="dropdown-item" href="#"> Delete</a>
                                        <a class="dropdown-item" href="#"> Settings</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row text-center mb-4">
                            <div class="col-4">
                                <h4 class="mb-0">$120 <i class="fa fa-long-arrow-up text-success f14"></i></h4>
                                <small class="text-muted text-uppercase">Today's Sales</small>
                            </div>
                            <div class="col-4">
                                <h4 class="mb-0">$740 <i class="fa fa-long-arrow-down text-danger f14"></i></h4>
                                <small class="text-muted text-uppercase">This Week Sales</small>
                            </div>
                            <div class="col-4">
                                <h4 class="mb-0">$3740 <i class="fa fa-long-arrow-up text-success f14"></i></h4>
                                <small class="text-muted text-uppercase">This Month Sales</small>
                            </div>
                        </div>
                        <div>
                            <canvas id="sales_report_chart" height="320"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-5">
                <div class="card text-light mb-4 basic-gradient bubble-shadow">
                    <div class="widget-action-link">
                        <div class="dropdown">
                            <a href="#" class="btn btn-transparent text-white dropdown-hover p-0" data-toggle="dropdown">
                                <i class=" vl_ellipsis-fill-h"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right vl-dropdown">
                                <a class="dropdown-item" href="#"> Edit</a>
                                <a class="dropdown-item" href="#"> Delete</a>
                                <a class="dropdown-item" href="#"> Settings</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="widget-active-user">
                            <h5 class="mt-3 b-b1 mb-4">Active user right now</h5>
                            <h1 class="mb-4">13</h1>
                            <h5 class="mt-3 b-b1 mb-5">Page view per minutes</h5>
                            <div id="active_users" class="text-center"></div>
                            <h5 class="mt-5 mb-0">Top active pages</h5>
                            <ul class="list-unstyled active-page-link">
                                <li><small>/product/dashlab/sample-one.html</small> <span>1</span></li>
                                <li><small>/product/flatlab/ui-components.php</small> <span>3</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/sales report & active user-->

        <!--sales monitor-->
        <div class="row">
            <div class="col-12">
                <div class="card card-shadow mb-4">
                    <div class="card-header border-0">
                        <div class="custom-title-wrap bar-turquoise">
                            <div class="custom-title">Sales Monitor</div>

                            <div class=" widget-action-link">
                                <div class="dropdown">
                                    <a href="#" class="btn btn-transparent text-secondary dropdown-hover p-0" data-toggle="dropdown">
                                        <i class=" vl_ellipsis-fill-h"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right vl-dropdown">
                                        <a class="dropdown-item" href="#"> Edit</a>
                                        <a class="dropdown-item" href="#"> Delete</a>
                                        <a class="dropdown-item" href="#"> Settings</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-5 col-md-5">
                                <p class="text-muted mb-5">Proper sell monitoring through the world map to plan <br/>
                                    for the next marketing attempt</p>

                                <div class="mb-4">
                                    <div class="progress-title">
                                        <span>Europe</span>
                                        <span class="float-right">35%</span>
                                    </div>
                                    <div class="progress" style="height: 1px;">
                                        <div class="progress-bar bg-turquoise" role="progressbar" style="width: 35%;"  aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="progress-title">
                                        <span>Latin America </span>
                                        <span class="float-right">55%</span>
                                    </div>
                                    <div class="progress" style="height: 1px;">
                                        <div class="progress-bar bg-purple" role="progressbar" style="width: 55%;"  aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="progress-title">
                                        <span>Australia</span>
                                        <span class="float-right">85%</span>
                                    </div>
                                    <div class="progress" style="height: 1px;">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 85%;"  aria-valuemax="100"></div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="map-wrapper" id="world-map"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/sales monitor-->

        <!--member performance & support ticket-->
        <div class="row">
            <div class="col-xl-6">
                <div class="card card-shadow mb-4 ">
                    <div class="card-header border-0">
                        <div class="custom-title-wrap bar-danger">
                            <div class="custom-title">
                                Member's Performance
                                <a href="javascript:;" class="btn-ordering btn-primary float-right ml-2">
                                    <i class="fa fa-sort-alpha-asc"></i>
                                </a>
                                <ul class="nav nav-pills nav-pill-turquoise nav-pill-custom nav-pills-sm float-right " id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-today-tab" data-toggle="pill" href="#pills-today" role="tab" aria-controls="pills-today" aria-selected="true">Today</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-month-tab" data-toggle="pill" href="#pills-month" role="tab" aria-controls="pills-month" aria-selected="false">Month</a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-today" role="tabpanel" aria-labelledby="pills-today-tab">
                                <ul class="list-unstyled mb-0 list-widget">
                                    <li>
                                        <div class="media mb-4">
                                            <img class="mr-3 rounded-circle" src="assets/img/avatar/avatar1.jpg" alt=" ">
                                            <div class="media-body list-widget-border">
                                                <div class="float-left">
                                                    <h6 class="text-uppercase mb-0">shirley hoe</h6>
                                                    <span class="text-muted">Sales Executive, NY</span>
                                                </div>
                                                <div class=" float-right">
                                                    <strong>$780.00 <i class="fa fa-level-up text-success pl-2"></i></strong>
                                                </div>
                                            </div>

                                        </div>
                                    </li>
                                    <li>
                                        <div class="media mb-4">
                                            <img class="mr-3 rounded-circle" src="assets/img/avatar/avatar2.jpg" alt=" ">
                                            <div class="media-body list-widget-border">
                                                <div class="float-left">
                                                    <h6 class="text-uppercase mb-0">james alexender</h6>
                                                    <span class="text-muted">Sales Executive, FL</span>
                                                </div>
                                                <div class=" float-right">
                                                    <strong>$480.00 <i class="fa fa-level-up text-success pl-2"></i></strong>
                                                </div>
                                            </div>

                                        </div>
                                    </li>
                                    <li>
                                        <div class="media mb-4">
                                            <img class="mr-3 rounded-circle" src="assets/img/avatar/avatar3.jpg" alt=" ">
                                            <div class="media-body list-widget-border">
                                                <div class="float-left">
                                                    <h6 class="text-uppercase mb-0">ursula sitorus</h6>
                                                    <span class="text-muted">Sales Executive, CA</span>
                                                </div>
                                                <div class=" float-right">
                                                    <strong>$360.00 <i class="fa fa-level-down text-danger pl-2"></i></strong>
                                                </div>
                                            </div>

                                        </div>
                                    </li>
                                    <li>
                                        <div class="media mb-3">
                                            <img class="mr-3 rounded-circle" src="assets/img/avatar/avatar4.jpg" alt=" ">
                                            <div class="media-body list-widget-border">
                                                <div class="float-left">
                                                    <h6 class="text-uppercase mb-0">jonna pinedda</h6>
                                                    <span class="text-muted">Sales Executive, MI</span>
                                                </div>
                                                <div class=" float-right">
                                                    <strong>$180.00 <i class="fa fa-level-up text-success pl-2"></i></strong>
                                                </div>
                                            </div>

                                        </div>
                                    </li>
                                    <li class="text-center">
                                        <a href="javascript:;" class="more-list">
                                            <i class=" vl_ellipsis-fill-h"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="pills-month" role="tabpanel" aria-labelledby="pills-month-tab">
                                <ul class="list-unstyled mb-0 list-widget">
                                    <li>
                                        <div class="media mb-4">
                                            <img class="mr-3 rounded-circle" src="assets/img/avatar/avatar2.jpg" alt=" ">
                                            <div class="media-body list-widget-border">
                                                <div class="float-left">
                                                    <h6 class="text-uppercase mb-0">james alexender</h6>
                                                    <span class="text-muted">Sales Executive, FL</span>
                                                </div>
                                                <div class=" float-right">
                                                    <strong>$480.00 <i class="fa fa-level-up text-success pl-2"></i></strong>
                                                </div>
                                            </div>

                                        </div>
                                    </li>
                                    <li>
                                        <div class="media mb-3">
                                            <img class="mr-3 rounded-circle" src="assets/img/avatar/avatar4.jpg" alt=" ">
                                            <div class="media-body list-widget-border">
                                                <div class="float-left">
                                                    <h6 class="text-uppercase mb-0">jonna pinedda</h6>
                                                    <span class="text-muted">Sales Executive, MI</span>
                                                </div>
                                                <div class=" float-right">
                                                    <strong>$180.00 <i class="fa fa-level-up text-success pl-2"></i></strong>
                                                </div>
                                            </div>

                                        </div>
                                    </li>
                                    <li>
                                        <div class="media mb-4">
                                            <img class="mr-3 rounded-circle" src="assets/img/avatar/avatar3.jpg" alt=" ">
                                            <div class="media-body list-widget-border">
                                                <div class="float-left">
                                                    <h6 class="text-uppercase mb-0">ursula sitorus</h6>
                                                    <span class="text-muted">Sales Executive, CA</span>
                                                </div>
                                                <div class=" float-right">
                                                    <strong>$360.00 <i class="fa fa-level-down text-danger pl-2"></i></strong>
                                                </div>
                                            </div>

                                        </div>
                                    </li>
                                    <li>
                                        <div class="media mb-4">
                                            <img class="mr-3 rounded-circle" src="assets/img/avatar/avatar1.jpg" alt=" ">
                                            <div class="media-body list-widget-border">
                                                <div class="float-left">
                                                    <h6 class="text-uppercase mb-0">shirley hoe</h6>
                                                    <span class="text-muted">Sales Executive, NY</span>
                                                </div>
                                                <div class=" float-right">
                                                    <strong>$780.00 <i class="fa fa-level-up text-success pl-2"></i></strong>
                                                </div>
                                            </div>

                                        </div>
                                    </li>
                                    <li class="text-center">
                                        <a href="javascript:;" class="more-list">
                                            <i class="vl_ellipsis-fill-h"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card card-shadow mb-4 ">
                    <div class="card-header border-0">
                        <div class="custom-title-wrap bar-warning">
                            <div class="custom-title">Support Tickets</div>
                            <div class=" widget-action-link">
                                <div class="dropdown">
                                    <a href="#" class="btn btn-transparent text-secondary dropdown-hover p-0" data-toggle="dropdown">
                                        Filter <i class="fa fa-caret-down pl-2"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right vl-dropdown">
                                        <a class="dropdown-item" href="#"> Edit</a>
                                        <a class="dropdown-item" href="#"> Delete</a>
                                        <a class="dropdown-item" href="#"> Settings</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled mb-0 list-widget">
                            <li>
                                <div class="media mb-4">
                                    <div class="mr-3 rounded-circle bg-turquoise st-alphabet">
                                        J
                                        <span class="status bg-success"></span>
                                    </div>
                                    <div class="media-body list-widget-border">
                                        <div class="float-left">
                                            <h6 class="text-uppercase mb-0">Joseph Farnandez <span class="text-warning pl-3">pending</span></h6>
                                            <span class="text-muted">I am facing some trouble with my viewport. When i start my</span>
                                        </div>
                                        <div class=" float-right">
                                            <small class="text-muted">8:40 PM</small>
                                        </div>
                                    </div>

                                </div>
                            </li>
                            <li>
                                <div class="media mb-4">
                                    <div class="mr-3 rounded-circle bg-purple st-alphabet">
                                        M
                                        <span class="status bg-secondary"></span>
                                    </div>
                                    <div class="media-body list-widget-border">
                                        <div class="float-left">
                                            <h6 class="text-uppercase mb-0">martin anderson  <span class="text-success pl-3">open</span></h6>
                                            <span class="text-muted">I have some query regarding the license issue.</span>
                                        </div>
                                        <div class=" float-right">
                                            <small class="text-muted">1 Day Ago</small>
                                        </div>
                                    </div>

                                </div>
                            </li>
                            <li>
                                <div class="media mb-4">
                                    <div class="mr-3 rounded-circle bg-primary st-alphabet">
                                        L
                                        <span class="status bg-warning"></span>
                                    </div>
                                    <div class="media-body list-widget-border">
                                        <div class="float-left">
                                            <h6 class="text-uppercase mb-0">libson james <span class="text-secondary pl-3">closed</span></h6>
                                            <span class="text-muted">Is there any update plan for RTL version near future?</span>
                                        </div>
                                        <div class=" float-right">
                                            <small class="text-muted">2 Days Ago</small>
                                        </div>
                                    </div>

                                </div>
                            </li>
                            <li>
                                <div class="media mb-3">
                                    <div class="mr-3 rounded-circle bg-pink st-alphabet">
                                        A
                                        <span class="status bg-success"></span>
                                    </div>
                                    <div class="media-body list-widget-border">
                                        <div class="float-left">
                                            <h6 class="text-uppercase mb-0">alex voxy <span class="text-warning pl-3">open</span></h6>
                                            <span class="text-muted">My client site is broken in most of the windows browser</span>
                                        </div>
                                        <div class=" float-right">
                                            <small class="text-muted">4 Days Ago</small>
                                        </div>
                                    </div>

                                </div>
                            </li>
                            <li class="text-center">
                                <a href="javascript:;" class=" more-list">
                                    <i class=" vl_ellipsis-fill-h"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--/member performance & support ticket-->

        <div class="row">
            <div class="col-xl-4 col-md-6">
                <div class="card card-shadow mb-4">
                    <div class="card-header border-0">
                        <div class="custom-title-wrap bar-primary">
                            <div class="custom-title">Donut Chart</div>
                            <div class="custom-post-title">Outstanding pie chart example is given bellow</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-7">
                                <div id="d_profit" style="height:130px; width:100%;"></div>
                            </div>
                            <div class="col-5">
                                <h5 class="mb-3">Legend</h5>
                                <ul class="list-unstyled f12 text-muted">
                                    <li class="mb-2">
                                        <i class="fa fa-circle pr-2 text-warning "></i>
                                        <span>Data A: 33%</span>
                                    </li>
                                    <li class="mb-2">
                                        <i class="fa fa-circle pr-2 text-purple"></i>
                                        <span>Data B: 33%</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-circle pr-2 text-info"></i>
                                        <span>Data C: 33%</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card card-shadow mb-4">
                    <div class="card-header border-0">
                        <div class="custom-title-wrap bar-turquoise">
                            <div class="custom-title">Bar Chart</div>
                            <div class="custom-post-title">Awesome bar chart example is given bellow</div>
                        </div>
                    </div>
                    <div class="card-body text-center">
                        <span id="bar_widget"></span>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card card-shadow mb-4">
                    <div class="card-header border-0">
                        <div class="custom-title-wrap bar-pink">
                            <div class="custom-title">Bubble Chart</div>
                            <div class="custom-post-title">Excellent bubble chart example is given bellow</div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <canvas id="bubble_chart" height="170"></canvas>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6">
                <div class="card card-shadow mb-4">
                    <div class="card-header border-0">
                        <div class="custom-title-wrap bar-success">
                            <div class="custom-title">Area Chart</div>
                            <div class="custom-post-title">Outstanding area chart example is given bellow</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <canvas id="area_chart" height="150"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card card-shadow mb-4">
                    <div class="card-header border-0">
                        <div class="custom-title-wrap bar-warning">
                            <div class="custom-title">Line Chart</div>
                            <div class="custom-post-title">Awesome line chart example is given bellow</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <canvas id="line_chart" height="150"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card card-shadow mb-4">
                    <div class="card-header border-0">
                        <div class="custom-title-wrap bar-info">
                            <div class="custom-title">Stacked Chart</div>
                            <div class="custom-post-title">Excellent stacked chart example is given bellow</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="hbar-placeholder" class="fchart-height"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-6 col-md-6">
                <div class="card card-shadow mb-4">
                    <div class="card-header border-0">
                        <div class="custom-title-wrap bar-danger">
                            <div class="custom-title">
                                Issue Fixing
                                <ul class="nav nav-pills nav-pill-primary nav-pill-custom nav-pills-sm float-right " id="pills-tab2" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-today-tab2" data-toggle="pill" href="#pills-weekly2" role="tab" aria-selected="true">Weekly</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-month-tab2" data-toggle="pill" href="#pills-month2" role="tab" aria-selected="false">Month</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="custom-post-title">Graphical view of this week issue solving status</div>
                        </div>
                    </div>
                    <div class="card-body pt-5 pb-4">
                        <div class="tab-content" id="pills-tabContent2">
                            <div class="tab-pane fade show active" id="pills-weekly2" role="tabpanel" aria-labelledby="pills-today-tab">
                                <div class="row">
                                    <div class="col-12 col-xl-7 col-md-6 text-center">
                                        <canvas id="doughnut_chart" class="mb-4" ></canvas>
                                        <small class="text-muted">Realtime data update instantly</small>
                                    </div>
                                    <div class="col-12 col-xl-4 col-md-6 text-muted mt-xl-4">
                                        <ul class="list-unstyled f12">
                                            <li class="list-widget-border mb-3 pb-3">
                                                <i class="fa fa-circle pr-2" style="color: #cae59b"></i> 40%
                                                <span class="float-right">Solved</span>
                                            </li>
                                            <li class="list-widget-border mb-3 pb-3">
                                                <i class="fa fa-circle pr-2" style="color: #fcdd82"></i> 10%
                                                <span class="float-right">Pending</span>
                                            </li>
                                            <li class="list-widget-border mb-3 pb-3">
                                                <i class="fa fa-circle pr-2 " style="color: #f79490"></i> 10%
                                                <span class="float-right">Declain</span>
                                            </li>
                                            <li class="list-widget-border mb-3 pb-3">
                                                <i class="fa fa-circle pr-2 " style="color: #acf5fe"></i> 40%
                                                <span class="float-right">Reopen</span>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-month2" role="tabpanel" aria-labelledby="pills-month-tab">
                                <div class="row">
                                    <div class="col-12 col-xl-7 col-md-6 text-center">
                                        <canvas id="doughnut_chart2" class="mb-4"></canvas>
                                        <small class="text-muted">Realtime data update instantly</small>
                                    </div>
                                    <div class="col-12 col-xl-4 col-md-6 text-muted mt-xl-4">
                                        <ul class="list-unstyled f12">
                                            <li class="list-widget-border mb-3 pb-3">
                                                <i class="fa fa-circle pr-2" style="color: #cae59b"></i> 30%
                                                <span class="float-right">Solved</span>
                                            </li>
                                            <li class="list-widget-border mb-3 pb-3">
                                                <i class="fa fa-circle pr-2" style="color: #fcdd82"></i> 20%
                                                <span class="float-right">Pending</span>
                                            </li>
                                            <li class="list-widget-border mb-3 pb-3">
                                                <i class="fa fa-circle pr-2 " style="color: #f79490"></i> 25%
                                                <span class="float-right">Declain</span>
                                            </li>
                                            <li class="list-widget-border mb-3 pb-3">
                                                <i class="fa fa-circle pr-2 " style="color: #acf5fe"></i> 25%
                                                <span class="float-right">Reopen</span>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-6">
                <div class="card card-shadow mb-4">
                    <div class="card-body">
                        <div class=" widget-action-link">
                            <div class="dropdown">
                                <a href="#" class="btn btn-transparent text-secondary dropdown-hover p-0" data-toggle="dropdown">
                                    <i class=" vl_ellipsis-fill-h"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right vl-dropdown">
                                    <a class="dropdown-item" href="#"> Edit</a>
                                    <a class="dropdown-item" href="#"> Delete</a>
                                    <a class="dropdown-item" href="#"> Settings</a>
                                </div>
                            </div>
                        </div>

                        <div class="text-center">
                            <strong>405</strong>
                            <span class="text-muted">Following</span>
                            <span class="pl-2 pr-2 text-muted weight800">.</span>
                            <strong>1690</strong>
                            <span class="text-muted">Follower</span>
                        </div>

                        <div class="text-center">
                            <div class="mt-4 mb-3">
                                <img class="rounded-circle" src="assets/img/avatar/avatar-large3.jpg" width="85" alt=""/>
                            </div>
                            <h5 class="text-uppercase mb-0">Jane Doe</h5>
                            <p class="text-muted mb-0">Sr. Marketing Executive </p>
                            <div class="rattings mb-4">
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star-o text-warning"></i>
                            </div>
                            <div class="badge-icon mb-4">
                                <img src="assets/img/badge/level.svg" width="50" alt="Level" data-toggle="tooltip" data-placement="top" title="Level 5"/>
                                <img src="assets/img/badge/status.svg" width="50" alt="Status" data-toggle="tooltip" data-placement="top" title="Status"/>
                                <img src="assets/img/badge/disable.svg" width="50" alt="Disable" data-toggle="tooltip" data-placement="top" title="Disable"/>
                                <img src="assets/img/badge/trendy.svg" width="50" alt="Trendy" data-toggle="tooltip" data-placement="top" title="Trendy"/>
                                <img src="assets/img/badge/monthly-top-seller.svg" width="50" alt="Monthly Top Seller" data-toggle="tooltip" data-placement="top" title="Monthly Top Seller"/>
                            </div>
                            <div class="mb-2">
                                <a href="#" class="btn btn-sm btn-pill btn-primary pl-4 pr-4">Follow</a>
                                <a href="#" class="btn btn-sm btn-pill btn-purple  pl-4 pr-4">Message</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <!--footer-->
    <footer class="sticky-footer">
        <div class="container">
            <div class="text-center">
                <small>Copyright &copy; Calsquare 2023</small>
            </div>
        </div>
    </footer>
    <!--/footer-->
</div>
<!--/main content wrapper-->

<!--right sidebar-->


        </div>
    </div>

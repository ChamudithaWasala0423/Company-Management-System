<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from thevectorlab.net/dashlab-v1.3/calendar-external-events.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Feb 2019 05:39:41 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">

    <!--favicon icon-->
    <link rel="icon" type="image/png" href="assets/img/favicon.html">

    <title>Calendar</title>

    <!--web fonts-->
    <link href="http://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <!--bootstrap styles-->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!--icon font-->
    <link href="../assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../assets/vendor/dashlab-icon/dashlab-icon.css" rel="stylesheet">
    <link href="../assets/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <link href="../assets/vendor/themify-icons/css/themify-icons.css" rel="stylesheet">
    <link href="../assets/vendor/weather-icons/css/weather-icons.min.css" rel="stylesheet">

    <!--custom scrollbar-->
    <link href="../assets/vendor/m-custom-scrollbar/jquery.mCustomScrollbar.css" rel="stylesheet">

    <!--jquery dropdown-->
    <link href="../assets/vendor/jquery-dropdown-master/jquery.dropdown.css" rel="stylesheet">

    <!--jquery ui-->
    <link href="../assets/vendor/jquery-ui/jquery-ui.min.css" rel="stylesheet">

    <!--iCheck-->
    <link href="../assets/vendor/icheck/skins/all.css" rel="stylesheet">

    <!--fullcalendar-->
    <link href='../assets/vendor/fullcalendar-3.7.0/fullcalendar.css'  rel='stylesheet' />

    <!--custom styles-->
    <link href="../assets/css/main.css" rel="stylesheet">

</head>

<body class="fixed-nav">

<?php include_once('../headers/nav-side.php');    ?>
    <!--main content wrapper-->
    <div class="content-wrapper">

        <div class="container-fluid">
            <!--page title-->
            <div class="page-title mb-4 d-flex align-items-center">
                <div class="mr-auto">
                    <h4 class="weight500 d-inline-block pr-3 mr-3 border-right">Events Calendar</h4>
                    <nav aria-label="breadcrumb" class="d-inline-block ">
                        <ol class="breadcrumb p-0">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Events Calendar</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--/page title-->

            <!--calendar-->
            <div class="row">
                <div class=" col-md-3">
                    <div class="card card-shadow mb-4">
                        <div class="card-header border-0">
                            <div class="custom-title-wrap bar-primary">
                                <div class="custom-title">Draggable Events</div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="external-events" class="calendar-event-list fc-unthemed">
                                <div class='fc-event fc-event-external fc-start' data-color=" ">
                                    <div class="fc-title">
                                        <div class="fc-content">
                                            Vectorlab Monthly Meeting
                                        </div>
                                    </div>
                                </div>

                                <div class='fc-event fc-event-external fc-start d-fc-event-primary' data-color="d-fc-event-primary">
                                    <div class="fc-title">
                                        <div class="fc-content">
                                            DashLab Launching
                                        </div>
                                    </div>
                                </div>

                                <div class='fc-event fc-event-external fc-start d-fc-event-info' data-color="d-fc-event-info">
                                    <div class="fc-title">
                                        <div class="fc-content">
                                            Requirement Analysis
                                        </div>
                                    </div>
                                </div>

                                <div class='fc-event fc-event-external fc-start d-fc-event-danger' data-color="d-fc-event-danger">
                                    <div class="fc-title">
                                        <div class="fc-content">
                                            Evening Party
                                        </div>
                                    </div>
                                </div>

                                <div class='fc-event fc-event-external fc-start d-fc-event-warning' data-color="d-fc-event-warning">
                                    <div class="fc-title">
                                        <div class="fc-content">
                                            Admin Panel Events
                                        </div>
                                    </div>
                                </div>

                                <div class='fc-event fc-event-external fc-start d-fc-event-success' data-color="d-fc-event-success">
                                    <div class="fc-title">
                                        <div class="fc-content">
                                            Bootstrap Meeting
                                        </div>
                                    </div>
                                </div>

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="drop-remove">
                                    <label class="custom-control-label" for="drop-remove">remove after drop</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=" col-md-9">
                    <div class="card card-shadow mb-4">
                        <div class="card-header border-0">
                            <div class="custom-title-wrap bar-warning">
                                <div class="custom-title">Full Calendar</div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id='calendar-external-events'></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/calendar-->

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
    <div class="right-sidebar" id="right_side_bar">
        <div class="card border-0">
            <div class="card-body pb-0">
                <!--close toggle-->
                <a href="javascript:;" class="right_side_toggle float-right close-sidebar-icon">
                    <i class=" ti-shift-right"> </i>
                </a>
                <!--/close toggle-->
            </div>
            <div class="card-body pt-2">

                <div class="right-widget">
                    <div class="custom-title-wrap bar-primary mb-4">
                        <div class="custom-title">Today's Activity</div>
                    </div>

                    <ul class="list-unstyled base-timeline">
                        <li class="time-dot-primary">
                            <div class="base-timeline-info">
                                <a href="#">John123</a> Successfully purchased item#26
                            </div>
                            <small class="text-muted">
                                28 mins ago
                            </small>
                        </li>
                        <li class="time-dot-danger">
                            <div class="base-timeline-info">
                                <a href="#" class="text-danger">Farnandez</a> placed the order for accessories
                            </div>
                            <small class="text-muted">
                                2 days ago
                            </small>
                        </li>
                        <li class="time-dot-purple">
                            <div class="base-timeline-info">
                                User <a href="#" class="text-purple">Lisa Maria</a> checked out from the market
                            </div>
                            <small class="text-muted">
                                12 mins ago
                            </small>
                        </li>
                    </ul>
                </div>

                <div class="right-widget">
                    <div class="custom-title-wrap bar-danger mb-4">
                        <div class="custom-title">Active Users</div>
                    </div>

                    <ul class="list-unstyled mb-0 list-widget">
                        <li class="cursor">
                            <div class="media mb-4">
                                <div class="st-alphabet mr-3">
                                    <img class="rounded-circle" src="assets/img/avatar/avatar1.jpg" alt=" ">
                                    <span class="status bg-success"></span>
                                </div>
                                <div class="media-body ">
                                    <div class="float-left">
                                        <h6 class="text-uppercase mb-0">shirley hoe</h6>
                                        <span class="text-muted">Online</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="cursor">
                            <div class="media mb-4">
                                <div class="st-alphabet mr-3">
                                    <img class="rounded-circle" src="assets/img/avatar/avatar2.jpg" alt=" ">
                                    <span class="status bg-warning"></span>
                                </div>
                                <div class="media-body ">
                                    <div class="float-left">
                                        <h6 class="text-uppercase mb-0">james alexender</h6>
                                        <span class="text-muted">Screaming...</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="cursor">
                            <div class="media mb-4">
                                <div class="st-alphabet mr-3">
                                    <img class="rounded-circle" src="assets/img/avatar/avatar3.jpg" alt=" ">
                                    <span class="status bg-info"></span>
                                </div>
                                <div class="media-body">
                                    <div class="float-left">
                                        <h6 class="text-uppercase mb-0">ursula sitorus</h6>
                                        <span class="text-muted">Start Exploring</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="cursor">
                            <div class="media mb-3">
                                <div class="st-alphabet mr-3">
                                    <img class="rounded-circle" src="assets/img/avatar/avatar4.jpg" alt=" ">
                                    <span class="status bg-danger"></span>
                                </div>
                                <div class="media-body">
                                    <div class="float-left">
                                        <h6 class="text-uppercase mb-0">jonna pinedda</h6>
                                        <span class="text-muted">Busy</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="right-widget">

                    <div class="custom-title-wrap bar-success mb-4">
                        <div class="custom-title">Notification</div>
                    </div>

                    <div >
                        <div class="dropdown-divider mb-0"></div>
                        <a class="nav-link border-bottom px-0 py-3" href="#">
                            <span class="text-primary">
                            <span class="weight700 f12">
                                <i class="vl_bell weight600 pr-2"></i>Weekly Update</span>
                            </span>
                            <span class="small float-right text-muted">03:14 AM</span>

                            <div class="text-dark f12">
                                This week project update report generated. All team members are requested to check the updates
                            </div>
                        </a>

                        <a class="nav-link border-bottom px-0 py-3" href="#">
                            <span class="text-danger">
                            <span class="weight700 f12">
                                <i class="vl_Download-circle weight600 pr-2"></i>Server Error</span>
                            </span>
                            <span class="small float-right text-muted">10:34 AM</span>

                            <div class="text-dark f12">
                                Unexpectedly server response stop. Responsible members are requested to fix it soon
                            </div>
                        </a>

                        <a class="nav-link border-bottom px-0 py-3" href="#">
                            <span class="text-success">
                            <span class="weight700 f12">
                                <i class="vl_screen weight600 pr-2"></i>Monthly Meeting</span>
                            </span>
                            <span class="small float-right text-muted">12:30 AM</span>

                            <div class="text-dark f12">
                                Our monthly meeting will be held on tomorrow sharp 12:30. All members are requested to attend this meeting.
                            </div>
                        </a>

                        <div class="text-center mt-3">
                            <a class="nav-link px-0" href="#">View all notification</a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!--/right sidebar-->

    <!--basic scripts-->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/jquery-ui/jquery-ui.min.js"></script>
    <script src="../assets/vendor/popper.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/vendor/jquery-dropdown-master/jquery.dropdown.js"></script>
    <script src="../assets/vendor/m-custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="../assets/vendor/icheck/skins/icheck.min.js"></script>

    <!--calender-->
    <script src='../assets/vendor/fullcalendar-3.7.0/lib/moment.min.js'></script>
    <script src='../assets/vendor/fullcalendar-3.7.0/fullcalendar.js'></script>
    <!--init calendar-->
    <script src='../assets/vendor/js-init/init-calendar-external-events.js'></script>

    <script src="../assets/js/scripts.js"></script>
</body>


</html>


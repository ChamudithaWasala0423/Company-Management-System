<?php require_once "../controller/quot/quot-controller.php"; ?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from thevectorlab.net/dashlab-v1.3/invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Feb 2019 05:41:34 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">

    <!--favicon icon-->
    <link rel="icon" type="image/png" href="assets/img/favicon.html">

    <title>Invoice</title>

    <!--web fonts-->
    <link href="http://fonts.googleapis.com/css?family=Montserrat:100,300,400,500,600,700,800" rel="stylesheet">
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

    <!--custom styles-->
    <link href="../assets/css/main.css" rel="stylesheet">

 
</head>

<body class="fixed-nav">

<?php include_once('../headers/nav-side.php');    ?>
<?php
        require "../config/connection.php";

        $JC_ID = $_GET['JC_ID'];

        $sql_one = "SELECT * FROM inquiry ORDER BY inqury_id  DESC";
        $result = mysqli_query($con, $sql_one);

        $sql_two = "SELECT * 
		FROM job_registration i
		JOIN  inquiry c
		ON c.inqury_id  = i.inqury_id 
		WHERE  i.job_number = '".$JC_ID."' ";


        $result_two = mysqli_query($con, $sql_two);


       $sql_three = " SELECT * 
        FROM job_products i
        JOIN metirial_light c ON c.metirial_light_id = i.metirial_light_id
        JOIN meterial_structure d ON d.Metirial_structure_id = i.Metirial_structure_id
        JOIN metirial_print e ON e.Metirial_print_id = i.Metirial_print_id
        JOIN metirial_cut f ON f.Metirial_cut_id = i.Metirial_cut_id
        JOIN metirial_fixing g ON g.metirial_Fixing_id = i.metirial_fixing 
        JOIN product h ON h.product_id = i.product_id
        JOIN job_registration j ON j.job_number  = i.job_number 
        WHERE i.job_number = '".$JC_ID."'";
        

        $result_three = mysqli_query($con, $sql_three);
        if (!$result_three) {
            die('Query Error: ' . mysqli_error($con));
        }
        

?>


    <!--main content wrapper-->
    <div class="content-wrapper">

        <div class="container-fluid">

            <!--page title-->
            <div class="page-title mb-4 d-flex align-items-center">
                <div class="mr-auto">
                    <h4 class="weight500 d-inline-block pr-3 mr-3 border-right">Invoice</h4>
                    <nav aria-label="breadcrumb" class="d-inline-block ">
                        <ol class="breadcrumb p-0">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Extra Pages</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Quotation</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--/page title-->

            <div class="row">
                <div class="col-12">
                    <div class="card card-shadow mb-4 p-5">
                        <div class="card-body">
                             <div class="row py-4">
                                 <div class="col-sm-8">
                                     <img src="../assets/img/invoice-logo.jpg" srcset="assets/img/invoice-logo@2x.jpg 2x" alt=""/>

                                     <h1 class="text-info weight300 my-5">Quotation</h1>
                                 </div>
                                 <div class="col-sm-4">
                                     <address class="mb-5">
                                         <strong>Head Quarter</strong>
                                         <br> <span class="text-muted">Sun & Moon Business Generation (PVT) LTD</span>
                                         <br> <span class="text-muted">125 / 1, Old Road , Pannipitiya,Sri Lanka.</span>
                                         <br> <span class="text-muted">contact@sunandmoonglobal.com</span>
                                         <br> <span class="text-muted">+94 113 437 672</span>
                                     </address>

                                     <address>
                                         <strong>Billing Address</strong>
                                         <br> <span class="text-muted">PO Box 16122 Collins Street West</span>
                                         <br> <span class="text-muted">Victoria 8007 Australia</span>
                                     </address>
                                 </div>
                             </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row mb-5">
                                      
                                        <div class="col-4">
                                            <small class="text-muted text-uppercase weight600">date</small>
                                            <h5 class="mb-0">29 January 2018</h5>
                                        </div>
                                        <div class="col-4">
                                            <small class="text-muted text-uppercase weight600">Quotation #</small>
                                            <h5 class="mb-0">DL01960</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th scope="col">SERIAL</th>
                                                <th scope="col">ITEM DESCRITPION</th>
                                                <th scope="col">PRICE</th>
                                                <th scope="col">QUANTITY</th>
                                                <th scope="col">TOTAL</th>
                                            </tr>
                                            </thead>
                                            <tbody class="text-muted">
                                            <?php 
                                            $sub_total = 0.00;
                                            while ($row_one = $result_three->fetch_assoc()){
                                            $main_total = ($row_one['light_price']  + $row_one['structure_price'] + $row_one['print_price']
                                                          + $row_one['cut_price'] + $row_one['fixing_price'])*$row_one['quntity'];

                                            echo'
                                            <tr>
                                                <td>' . $row_one['job_number'] . '/' . $row_one['job_product_id'] . '</td>
                                                <td>' . $row_one['job_type'] . ' with ' . $row_one['product_name'] . 
                                                ' with ' . $row_one['lit_or_not'] . ' with ' . $row_one['light_name'] . ' with ' . $row_one['color'] . 
                                                ' with ' . $row_one['Structure_name'] .  ' with ' . $row_one['Print_Metirial_name'] .
                                                ' with ' . $row_one['Cut_name'] . ' with ' . $row_one['Fixing_name'] . ' with height ' . $row_one['Height'] . ' '.
                                                $row_one['uom'] . ' with width ' . $row_one['Width'] .  ' '.
                                                $row_one['uom'] . ' with Length ' . $row_one['Length'] . ' '.
                                                $row_one['uom'] . '</td>
                                                <td>'.$row_one['light_price']  + $row_one['structure_price'] + $row_one['print_price']
                                                + $row_one['cut_price'] + $row_one['fixing_price'].'</td>
                                                <td>' . $row_one['quntity'] . '</td>
                                                <td>'.$main_total.'</td>
                                            </tr>';
                                            $sub_total += $main_total;
                                                }
                                               
                                                
                                         

                                          echo'  </tbody>
                                        </table>

                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="mt-4 mb-5">
                                        <strong class="text-uppercase f12">Payment Policy</strong>
                                        <br> <span class="text-muted">* Thank you for choosing Sun & Moon </span>
                                        <br> <span class="text-muted">* Please call us for any Questions</span>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <table class="table invoice-table text-muted" style="margin-top: -1.01rem">
                                        <thead>
                                        <tr>
                                            <th scope="col">Sub Total</th>
                                            <th scope="col">'.$sub_total.' LKR</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            
                                        </tr>
                                        <tr>
                                            <th class="text-dark">Total</th>
                                            <th><span class="f24 text-dark">'.$sub_total.' LKR</span></th>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>';

                                // <td>Discount (10%)</td>
                                            // <td>- $215</td>
                            ?>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mb-5">
                        <strong>System Generated Quotation and Invoices</strong>
                        <p class="text-muted">From Calsquare( <a href="#">Chamuditha Wasala</a> ) on <a href="https://sunandmoonglobal.com" target="_blank">Sun and Moon Bussiness Generation (PVT) LTD</a>. All amounts shown on this invoice are in Sri lankan Rupees.</p>
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

 
    <script src="../assets/js/scripts.js"></script>
</body>

</html>


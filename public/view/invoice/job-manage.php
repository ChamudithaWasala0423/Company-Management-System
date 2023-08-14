<?php require_once "../controller/job/inquiry-controller.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">

    <!--favicon icon-->
    <link rel="icon" type="image/png" href="assets/img/favicon.html">

    <title>Job registration</title>

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

    <!--data table-->
    <link href="../assets/vendor/data-tables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!--custom styles-->
    <link href="../assets/css/main.css" rel="stylesheet">

   
</head>

<body class="fixed-nav">
<?php include_once('../headers/nav-side.php');    ?>

<?php



$sql_one = "SELECT * FROM job_registration ORDER BY job_number DESC";

$result = mysqli_query($con, $sql_one);


echo'
<div class="content-wrapper">

<div class="container-fluid">

    <!--page title-->
    <div class="page-title mb-4 d-flex align-items-center">
        <div class="mr-auto">
            <h4 class="weight500 d-inline-block pr-3 mr-3 border-right">Manage Job</h4>
            <nav aria-label="breadcrumb" class="d-inline-block ">
                <ol class="breadcrumb p-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Job registration</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Manage Job</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--/page title-->

    <div class="row">
        <div class="col-xl-12">
            <div class="card card-shadow mb-4">
                <div class="card-header border-0">
                    <div class="custom-title-wrap bar-primary">
                        <div class="custom-title">Manage Job</div>
                    </div>
                </div>
                <div class="card-body- pt-3 pb-4">
                    <div class="table-responsive">
                        <table id="data_table" class="table table-bordered table-striped" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Jumber Number</th>
                                <th>Inquiry Number</th>
                                <th>Job Type</th>
                                <th>Job Name</th>
                                <th>Date </th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Jumber Number</th>
                                <th>Inquiry Number</th>
                                <th>Job Type</th>
                                <th>Job Name</th>
                                <th>Date </th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                            <tbody>';
                            while($fetch_result = mysqli_fetch_assoc($result)){
                            echo'
                            <tr>
                                <td>#'.$fetch_result['job_number'].'</td>
                                <td>#'.$fetch_result['inqury_id'].'</td>
                                <td>'.$fetch_result['job_type'].'</td>
                                <td>'.$fetch_result['job_name'].'</td>
                                <td>'.$fetch_result['add_date_time'].'</td>
                                <td>
                                <a href="inquiry-sheet-edit.php?JC_ID='.$fetch_result['inqury_id'].'"><button type="button" class="btn btn-primary rounded-0" name="product_create">Edit</button></a>
                                <a href="inquiry-sheet-edit.php?JC_ID='.$fetch_result['inqury_id'].'"><button type="button" class="btn btn-danger rounded-0" name="product_create">Job Card</button></a>
                                <a href="inquiry-sheet-edit.php?JC_ID='.$fetch_result['inqury_id'].'"><button type="button" class="btn btn-success rounded-0" name="product_create">Quotation</button></a>
                            </tr>';
                            }
                            echo'
                           
                            </tbody>
                        </table>
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

    </div>';

    ?>
    <!--/main content wrapper-->

    <!--right sidebar-->
    

                
    <!--/right sidebar-->

    <!--basic scripts-->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/jquery-ui/jquery-ui.min.js"></script>
    <script src="../assets/vendor/popper.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/vendor/jquery-dropdown-master/jquery.dropdown.js"></script>
    <script src="../assets/vendor/m-custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="../assets/vendor/icheck/skins/icheck.min.js"></script>

    <!--datatables-->
    <script src="../assets/vendor/data-tables/jquery.dataTables.min.js"></script>
    <script src="../assets/vendor/data-tables/dataTables.bootstrap4.min.js"></script>
    <!--init datatable-->
    <script src="../assets/vendor/js-init/init-datatable.js"></script>
    
    <!--basic scripts initialization-->
    <script src="../assets/js/scripts.js"></script>
</body>

</html>


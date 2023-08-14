<?php require_once "../controller/job/inqury-update-control.php"; ?>


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

    <!--jqery steps-->
    <link href="../assets/vendor/jquery-steps/jquery.steps.css" rel="stylesheet">

    <!--custom styles-->
    <link href="../assets/css/main.css" rel="stylesheet">

   
</head>

<body class="fixed-nav">
<?php include_once('../headers/nav-side.php');    

$JC_ID = $_GET['JC_ID'];

$sql_one = "SELECT * FROM inquiry WHERE inqury_id = '".$JC_ID."' ";
$sql_two = "SELECT * FROM inquiry WHERE inqury_id = '".$JC_ID."' ";
$sql_three = "SELECT * FROM inquiry WHERE inqury_id = '".$JC_ID."' ";

$result = mysqli_query($con, $sql_one);
$result_two = mysqli_query($con, $sql_two);
$result_three = mysqli_query($con, $sql_three);

?>

    <div class="content-wrapper">

        <div class="container-fluid">

            <!--page title-->
            <div class="page-title mb-4 d-flex align-items-center">
                <div class="mr-auto">
                    <h4 class="weight500 d-inline-block pr-3 mr-3 border-right">Job Registration</h4>
                    <nav aria-label="breadcrumb" class="d-inline-block ">
                        <ol class="breadcrumb p-0">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Job registration</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Create inquiry sheet</li>
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
                                <div class="custom-title">Edit inquiry sheet</div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="stepy-tab">
                                <ul id="default-titles" class="stepy-titles">
                                    <li id="default-title-0" class="current-step">
                                        <div>Step 1</div>
                                    </li>
                                    <li id="default-title-1" class="">
                                        <div>Step 2</div>
                                    </li>
                                    <li id="default-title-2" class="">
                                        <div>Step 3</div>
                                    </li>
                                </ul>
                            </div>
                            <?php
                            while($row =  $result ->fetch_assoc()){
                            echo'
                            <form class="" id="default" method="post" action="inquiry-sheet-edit.php?JC_ID='.$row['inqury_id'].'">
                                <fieldset title="Step1" class="step" id="default-step-0">
                                    <legend> </legend>
                                 
                                    <h5 class="mb-3">Step Title</h5>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label col-form-label-sm">Customer Name *</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control"  name="customer_name" required value='.$row['Customer_name'].'>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label col-form-label-sm">Location *</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="location" value='.$row['location'].' required >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label col-form-label-sm">Contact Person Name *</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control"  name="contact_person"  value='.$row['contact_person_name'].'  required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label col-form-label-sm">Contact Number *</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control"  name="contact_number" value='.$row['contact_number'].' required>
                                        </div>
                                    </div>';

                                }
                                echo'
                                </fieldset>
                                <fieldset title="Step 2" class="step" id="default-step-1" >
                                    <legend> </legend>';
                                    while($row =  $result_two ->fetch_assoc()){
                                    echo'
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label col-form-label-sm">Priority level</label>
                                        <div class="col-sm-8">
                                            <select name="priority_level"  class="form-control">
                                                <option value='.$row['Priority_level'].'>'.$row['Priority_level'].'</option>
                                                <optgroup label="-----------------"></optgroup>
                                                <option value="Top_urgent"> Top urgent</option>
                                                <option value="Urgent">Urgent</option>
                                                <option value="Medium">Medium</option>
                                                <option value="Low">Low</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label col-form-label-sm">Description *</label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" cols="60" rows="5" name="Description" required>'.$row['description'].'</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label col-form-label-sm">Job Select Company *</label>
                                        <div class="col-sm-8">
                                            <select name="job_select_company"  class="form-control" required>
                                                <option value='.$row['Job_Select_Company'].'>'.$row['Job_Select_Company'].'</option>
                                                <optgroup label="-----------------"></optgroup>
                                                <option value="LEXCO"> LEXCO</option>
                                                <option value="Doit">Doit</option>
                                                <option value="Calsquare">Calsquare</option>
                                                <option value="Zero777">Zero777</option>
                                            </select>
                                        </div>
                                    </div>';
                                    }
                                echo'

                                </fieldset>
                                <fieldset title="Step 3" class="step" id="default-step-2" >
                                    <legend> </legend>';
                                    while($row =  $result_three ->fetch_assoc()){
                                        echo'
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label col-form-label-sm">Job Getting user *</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control"  name="job_getting_user" value='.$row['Job_Getting_user'].' required>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control"  name="inquary_update_id" value='.$row['inqury_id'].' readonly>';
                                    }
                                echo'  
                                </fieldset>

                                <input type="submit" class="finish btn btn-danger" value="UPDATE" name="inquiry-update" />
                              
                            </form>';
                                    
                            ?>
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
    

                
    <!--/right sidebar-->

    <!--basic scripts-->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/jquery-ui/jquery-ui.min.js"></script>
    <script src="../assets/vendor/popper.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/vendor/jquery-dropdown-master/jquery.dropdown.js"></script>
    <script src="../assets/vendor/m-custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="../assets/vendor/icheck/skins/icheck.min.js"></script>

    <!--jquery validate-->
    <script src="../assets/vendor/jquery-validation/jquery.validate.min.js"></script>

    <!--jquery steps-->
    <script src="../assets/vendor/jquery-steps/jquery.steps.min.js"></script>
    <!--init steps-->
    <script src="../assets/vendor/js-init/init-form-wizard.js"></script>

    <!--jquery stepy-->
    <script src="../assets/vendor/jquery-steps/jquery.stepy.js"></script>

    <!--basic scripts initialization-->
    <script src="../assets/js/scripts.js"></script>
</body>

</html>


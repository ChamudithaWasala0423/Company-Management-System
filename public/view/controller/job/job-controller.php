<!DOCTYPE html>
<html>
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

    
    <link href="../assets/vendor/select2/css/select2.css" rel="stylesheet">

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

    <!--select2-->
    <script src="../assets/vendor/select2/js/select2.min.js"></script>
    <!--init select2-->
    <script src="../assets/vendor/js-init/init-select2.js"></script>


</head>
<body>


<?php


$email = "";
$errors = array();

$q = intval($_GET['q']);


$con = mysqli_connect('localhost', 'root', '', 'sm_system');


if (!$con) {
  die('Could not connect: ');
}

mysqli_select_db($con,"ajax_demo");
$sql="SELECT * FROM inquiry  WHERE inqury_id= '".$q."'";
$result = mysqli_query($con,$sql);



while($row = mysqli_fetch_array($result)) {

echo'

                                            
        <div class="form-group row">
            <label class="col-sm-4 col-form-label col-form-label-sm">Customer Name *</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" placeholder="Customer Name" name="customer_name" required value="' . $row['Customer_name'] . '">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-4 col-form-label col-form-label-sm">Location *</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" placeholder="Location" name="location" value="' . $row['location'] . '">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-4 col-form-label col-form-label-sm">Contact Person Name *</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" placeholder="Contact Person Name" name="contact_person" required value="' . $row['contact_person_name'] . '">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-4 col-form-label col-form-label-sm">Contact Number *</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" placeholder="Contact Number" name="contact_number" required value="' . $row['contact_number'] . '">
            </div>
        </div>



        <div class="form-group row">
            <label class="col-sm-4 col-form-label col-form-label-sm">Priority level</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" placeholder="Contact Number" name="priority_level"  required value="' . $row['Priority_level'] . '">
            </div>
        </div>
        
        <div class="form-group row">
            <label class="col-sm-4 col-form-label col-form-label-sm">Description *</label>
            <div class="col-sm-8">
                <textarea class="form-control" cols="60" rows="5" name="Description" required>' . $row['description'] . '</textarea>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-4 col-form-label col-form-label-sm">Job Select Company *</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" placeholder="Contact Number" name="job_select_company" required value="' . $row['Job_Select_Company'] . '">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-4 col-form-label col-form-label-sm">Job Getting user *</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" placeholder="Job Getting user" name="job_getting_user" required value="' . $row['Job_Getting_user'] . '">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-4 col-form-label col-form-label-sm">Date *</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" placeholder="Job Getting user" name="add_date" required value="' . $row['add_date'] . '">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-4 col-form-label col-form-label-sm">Due Date *</label>
            <div class="col-sm-8">
                <input type="date" name="due_date" class="form-control" required>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-4 col-form-label col-form-label-sm">Job Type *</label>
            <div class="col-sm-8">
                <select name="job_type" id="job_type" class="form-control" >
                    <option value="Fabricating">Fabricating</option>
                    <option value="Replacing">Replacing</option>
                    <option value="Reparing">Reparing</option>
                </select>
            </div>
        </div>


        <div class="form-group row">
            <label class="col-sm-4 col-form-label col-form-label-sm">Job Name*</label>
            <div class="col-sm-8">
                <input type="text" name="job_name" class="form-control" required>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-4 col-form-label col-form-label-sm">Remark *</label>
            <div class="col-sm-8">
                <textarea class="form-control" cols="60" rows="5" name="remark" required> </textarea>
            </div>
        </div>

        

        
        ';



}


?>

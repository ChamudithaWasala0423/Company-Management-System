<?php require_once "../controller/products/metirial-create-control.php"; ?>



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
        WHERE i.job_number = '".$JC_ID."'";
        

        $result_three = mysqli_query($con, $sql_three);
        if (!$result_three) {
            die('Query Error: ' . mysqli_error($con));
        }
        

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
                <li class="breadcrumb-item"><a href="#">Products</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Job</li>
            </ol>
        </nav>
    </div>

    
</div>
<!--/page title-->


    <div class="col-xl-12 col-md-6">
        <div class="card card-shadow mb-4">
            <div class="card-header border-0">
                <div class="custom-title-wrap bar-warning">
                    <div class="custom-title">Step 01 - Edit</div>
                </div>
            </div>
            <div class="card-body">
                <form action="metirial-create.php" method="post">
                <div class="form-group row">
                    <?php 
                        while($row =  $result_two->fetch_assoc()){
                        echo'
                    <label class="col-sm-4 col-form-label col-form-label-sm">Job Number *</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" placeholder="Customer Name" name="customer_name" readonly value="' . $row['job_number'] . '">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label col-form-label-sm">Customer Name *</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" placeholder="Customer Name" name="customer_name" readonly value="' . $row['Customer_name'] . '">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label col-form-label-sm">Location *</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" placeholder="Location" name="location" readonly value="' . $row['location'] . '">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label col-form-label-sm">Contact Person Name *</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" placeholder="Contact Person Name" name="contact_person" readonly value="' . $row['contact_person_name'] . '">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label col-form-label-sm">Contact Number *</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" placeholder="Contact Number" name="contact_number" readonly value="' . $row['contact_number'] . '">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label col-form-label-sm">Priority level</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="Contact Number" name="priority_level"  readonly value="' . $row['Priority_level'] . '">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label col-form-label-sm">Description *</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" cols="60" rows="5" name="Description" readonly`
                        o>' . $row['description'] . '</textarea>
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
                    <label class="col-sm-4 col-form-label col-form-label-sm">Job Type *</label>
                    <div class="col-sm-8">
                        <select name="job_type" id="job_type" class="form-control" >
                            <option value="' . $row['job_type'] . '">' . $row['job_type'] . '</option>
                            <option value="Fabricating">Fabricating</option>
                            <option value="Replacing">Replacing</option>
                            <option value="Reparing">Reparing</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label col-form-label-sm">Job Name*</label>
                    <div class="col-sm-8">
                        <input type="text" name="job_name" class="form-control" value="' . $row['job_name'] . '"   required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label col-form-label-sm">Remark *</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" cols="60" rows="5" name="remark" required>' . $row['remark'] . ' </textarea>
                    </div>
                </div>

                ';}?>
 
                </form>
            </div>
        </div>

        <div class="card card-shadow mb-4">
            <div class="card-header border-0">
                <div class="custom-title-wrap bar-warning">
                    <div class="custom-title">Add Metirial - Structure</div>
                </div>
            </div>
            <div class="card-body">
            <div class="card-body">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th scope="col">#Job Product Number</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Lit Type</th>
                                    <th scope="col">light Type</th>
                                    <th scope="col">Colour</th>
                                    <th scope="col">Structure</th>
                                    <th scope="col">Print material</th>
                                    <th scope="col">Cut</th>
                                    <th scope="col">Fixing</th>
                                    <th scope="col">Height</th>
                                    <th scope="col">Width</th>
                                    <th scope="col">Length</th>
                                    <th scope="col">UOM</th>
                                    <th scope="col">Quon</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php 
                                while ($row_one = $result_three->fetch_assoc()){
                                echo'
                                <tr>
                                    <th scope="row">' . $row_one['job_number'] . '/' . $row_one['job_product_id'] . '</th>
                                    <td>' . $row_one['product_name'] . ' </td>
                                    <td>' . $row_one['lit_or_not'] . ' </td>
                                    <td>' . $row_one['light_name'] . ' </td>
                                    <td>' . $row_one['color'] . ' </td>
                                    <td>' . $row_one['Structure_name'] . ' </td>
                                    <td>' . $row_one['Print_Metirial_name'] . ' </td>
                                    <td>' . $row_one['Cut_name'] . '</td>
                                    <td>' . $row_one['Fixing_name'] . ' </td>
                                    <td>' . $row_one['Height'] . ' </td>
                                    <td>' . $row_one['Width'] . ' </td>
                                    <td>' . $row_one['Length'] . ' </td>
                                    <td>' . $row_one['uom'] . ' </td>
                                    <td>' . $row_one['quntity'] . ' </td>
                                    
                                   
                                   
                                </tr>';
                            }?>
                                </tbody>
                            </table>
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


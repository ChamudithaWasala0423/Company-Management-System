<?php require_once "../controller/job/job-main-controller.php"; ?>

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

    
    <link href="../assets/vendor/select2/css/select2.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.0.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>


    <script>
            function showUser(str) {
            if (str == "") {
                document.getElementById("txtHint").innerHTML = "";
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("txtHint").innerHTML = this.responseText;
                }
                };
                xmlhttp.open("GET","../controller/job/job-controller.php?q="+str,true);
                xmlhttp.send();
            }
            }



    </script>


   
</head>

<body class="fixed-nav">
<?php include_once('../headers/nav-side.php');    ?>

<?php
        require "../config/connection.php";
        $sql_one = "SELECT * FROM inquiry ORDER BY inqury_id  DESC";
        $result = mysqli_query($con, $sql_one);

        $sql_two = "SELECT * FROM `product`";
        $result_two = mysqli_query($con, $sql_two);


        $sql_three = "SELECT * FROM metirial_light";
        $sql_four = "SELECT * FROM meterial_structure";
        $sql_five = "SELECT * FROM metirial_print";
        $sql_six = "SELECT * FROM metirial_cut";
        $sql_seven = "SELECT * FROM metirial_fixing";


        $result_three = mysqli_query($con, $sql_three);
        $result_four = mysqli_query($con, $sql_four);
        $result_five = mysqli_query($con, $sql_five);
        $result_six = mysqli_query($con, $sql_six);
        $result_seven = mysqli_query($con, $sql_seven);
        

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
                            <li class="breadcrumb-item active" aria-current="page">Create Job</li>
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
                                <div class="custom-title">Create Job</div>
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
                            <form class="" id="default" method="post" action="job-create.php">
                                <fieldset title="Step1" class="step" id="default-step-0">
                                    <legend> </legend>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label col-form-label-sm">Job Number*</label>
                                        <div class="col-sm-8">
                                        <input type="text" name="job_number" class="form-control" value="<?php getJobNumber();?>" readonly>
                                        </div>
                                    </div>
                                    <h5 class="mb-3">Select Inquiry</h5>

                                    <div class="form-group row">
                                    
                                   
                                    <label class="col-sm-4 col-form-label col-form-label-sm">Select Inquiry</label>
                                    <div class="col-sm-4">
                                        <select class="form-control" id="option_s1" name="param" onchange="showUser(this.value)">
                                        <option value="" >Select Inauiry Number and Customer</option>';
                                        <?php
                                            while($row_one =  $result->fetch_assoc()){
                                                echo'
                                                
                                                <option value="'.$row_one['inqury_id'].'">#'.$row_one['inqury_id'].'-'.$row_one['Customer_name'].'-'.$row_one['location'].'-'.$row_one['add_date'].'</option>';
                                            }
                                        ?>
                                        </select>
                                    </div>
                                </div>

                            <div id="txtHint">


                            </div>       

                                </fieldset>
                                <fieldset title="Step 2" class="step" id="default-step-1" >
                                    <legend> </legend>
 
                                    <div class="card mt-4">
                                        <div class="card-header">
                                            <h4>
                                                <a href="javascript:void(0)" class="add-more-form float-end btn btn-primary">ADD MORE PRODUCTS</a>
                                            </h4>
                                        </div>
                                        <div class="card-body">

                                            
                                                <div class="main-form mt-3 border-bottom">
                                                    <!-- -------------------1------------------ -->
                                                    <div class="row">
                                                       
                                                        <input type="hidden" value="JOB_REG" name="name[]" readonly>
                                                   
                                                        <div class="col-md-2">
                                                            <div class="form-group mb-2">
                                                                <label for="">Product Name</label>
                                                                <select  name="product[]" class="form-control" >
                                                                <option value="">Select</option>
                                                                ';
                                                                <?php
                                                                    while($row_one =  $result_two->fetch_assoc()){
                                                                        echo'
                                                                        
                                                                        <option value="'.$row_one['product_id'].'">'.$row_one['product_name'].'</option>';
                                                                    }
                                                                ?>

                                                                </select>

                                                            </div>
                                                        </div>
                                                        <!-- -------------------2------------------ -->
                                                        <div class="col-md-1">
                                                            <div class="form-group mb-4">
                                                                <label for="">lit or Not</label>
                                                                <select class="form-control"  name="lit_type[]">
                                                                <option value=""> </option>
                                                                    <optgroup label="Lit">
                                                                        <option value="Front_lit">Front lit</option>
                                                                        <option value="Back lit">Back lit</option>
                                                                    </optgroup>
                                                                    <optgroup label="Not">
                                                                        <option value="Not">Not</option>
                                                                    </optgroup>
                                                                </select>
                                                            </div>
                                                        </div>

                                                    <!-- -------------------3------------------ -->
                                                        <div class="col-md-2">
                                                            <div class="form-group mb-4">
                                                                <label for="">Light type</label>
                                                                
                                                                <select class="form-control"  name="light_name[]">
                                                                <option value=""> </option>';
                                                                    <?php
                                                                    while($row_one =  $result_three->fetch_assoc()){
                                                                        echo'
                                                                        <option value="'.$row_one['metirial_light_id'].'">'.$row_one['light_name'].'</option>';
                                                                    }
                                                                    ?>
                                                                   
                                                                </select>
                                                            </div>
                                                        </div>


                                                        <!-- -------------------4------------------ -->
                                                        <div class="col-md-1">
                                                            <div class="form-group mb-2">
                                                                <label for="">Colours</label>
                                                                <input type="text" name="colours[]" class="form-control"  required >
                                                            </div>
                                                        </div>


                                                         <!-- -------------------5------------------ -->

                                                        <div class="col-md-2">
                                                            <div class="form-group mb-4">
                                                                <label for="">Structure</label>
                                                                
                                                                <select class="form-control"  name="Structure_name[]">
                                                                <option value=""> </option>';
                                                                    <?php
                                                                    while($row_one =  $result_four->fetch_assoc()){
                                                                        echo'
                                                                        <option value="'.$row_one['Metirial_structure_id'].'">'.$row_one['Structure_name'].'</option>';
                                                                    }
                                                                    ?>
                                                                   
                                                                </select>
                                                            </div>
                                                        </div>


                                                        <!-- -------------------6------------------ -->

                                                        <div class="col-md-2">
                                                            <div class="form-group mb-4">
                                                                <label for="">Print material</label>
                                                                
                                                                <select class="form-control"  name="Print_Metirial_name[]">
                                                                <option value=""> </option>';
                                                                    <?php
                                                                    while($row_one =  $result_five->fetch_assoc()){
                                                                        echo'
                                                                        <option value="'.$row_one['Metirial_print_id'].'">'.$row_one['Print_Metirial_name'].'</option>';
                                                                    }
                                                                    ?>
                                                                   
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <!-- -------------------7------------------ -->

                                                        <div class="col-md-2">
                                                            <div class="form-group mb-4">
                                                                <label for="">Cut</label>
                                                                
                                                                <select class="form-control"  name="Cut_name[]">
                                                                <option value=""> </option>';
                                                                    <?php
                                                                    while($row_one =  $result_six->fetch_assoc()){
                                                                        echo'
                                                                        <option value="'.$row_one['Metirial_cut_id'].'">'.$row_one['Cut_name'].'</option>';
                                                                    }
                                                                    ?>
                                                                   
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <!-- -------------------8------------------ -->
                                                        <div class="col-md-2">
                                                            <div class="form-group mb-4">
                                                                <label for="">Fixing</label>
                                                                
                                                                <select class="form-control"  name="Fixing_name[]">
                                                                <option value=""> </option>';
                                                                    <?php
                                                                    while($row_one =  $result_seven->fetch_assoc()){
                                                                        echo'
                                                                        <option value="'.$row_one['metirial_Fixing_id'].'">'.$row_one['Fixing_name'].'</option>';
                                                                    }
                                                                    ?>
                                                                   
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <!-- -------------------8------------------ -->
                                                        <div class="col-md-1">
                                                            <div class="form-group mb-2">
                                                                <label for="">Height</label>
                                                                <input type="text" name="Height[]"  class="form-control"  required >
                                                            </div>
                                                        </div>

                                                        

                                                        <div class="col-md-1">
                                                            <div class="form-group mb-2">
                                                                <label for="">Width</label>
                                                                <input type="text" name="Width[]" class="form-control"  required >
                                                            </div>
                                                        </div>

                                                        <div class="col-md-1">
                                                            <div class="form-group mb-2">
                                                                <label for="">Length</label>
                                                                <input type="text" name="Length[]" class="form-control"  required >
                                                            </div>
                                                        </div>

                                                        <div class="col-md-1">
                                                            <div class="form-group mb-2">
                                                                <label for="">UOM</label>
                                                      
                                                                <select name="uom" id="uom" class="form-control" >
                                                                    <option value="cm">cm</option>
                                                                    <option value="m">m</option>
                                                                    <option value="mm">mm</option>
                                                                    <option value="inch">inch</option>
                                                                    <option value="feet">feet</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-1">
                                                            <div class="form-group mb-2">
                                                                <label for="">Quantity</label>
                                                                <input type="number" name="Quantity[]" class="form-control"  required >
                                                               
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>

                                                <div class="paste-new-forms"></div>

                                        </div>
                                    

                                </fieldset>
                                <fieldset title="Step 3" class="step" id="default-step-2" >
                                    <legend> </legend>
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


                                    
                                </fieldset>

                                <input type="submit" class="finish btn btn-danger" value="Finish" name="job-registration-save"/>
                            </form>
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
        
    </div>';

    

    ?>
    <!--/main content wrapper-->

    <!--right sidebar-->
    

 
    <script src="https://code.jquery.com/jquery-3.6.0.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        <?php  
        $sql_two = "SELECT * FROM `product`";
        $result_two = mysqli_query($con, $sql_two);

        $sql_three = "SELECT * FROM metirial_light";
        $sql_four = "SELECT * FROM meterial_structure";
        $sql_five = "SELECT * FROM metirial_print";
        $sql_six = "SELECT * FROM metirial_cut";
        $sql_seven = "SELECT * FROM metirial_fixing";


        $result_three = mysqli_query($con, $sql_three);
        $result_four = mysqli_query($con, $sql_four);
        $result_five = mysqli_query($con, $sql_five);
        $result_six = mysqli_query($con, $sql_six);
        $result_seven = mysqli_query($con, $sql_seven);

?>

        $(document).ready(function () {

            $(document).on('click', '.remove-btn', function () {
                $(this).closest('.main-form').remove();
            });
            
            $(document).on('click', '.add-more-form', function () {
                $('.paste-new-forms').append('<div class="main-form mt-3 border-bottom">\
                                <div class="row">\
                                <input type="hidden" value="JOB_REG" name="name[]" readonly>\
                                    <div class="col-md-2">\
                                    <div class="form-group mb-1">\
                                        <label for="">Product Name</label>\
                                        <select  name="product[]" class="form-control" >\
                                        <?php while ($row_one = mysqli_fetch_assoc($result_two)) { ?>\
                                                <option value="<?php echo $row_one['product_id']; ?>"><?php echo $row_one['product_name']; ?></option>\
                                            <?php } ?>\
                                        </select>\
                                    </div>\
                                    </div>\
                                    <div class="col-md-1">\
                                        <div class="form-group mb-4">\
                                            <label for="">lit or Not</label>\
                                            <select class="form-control"  name="lit_type[]">\
                                            <option value=""> </option>\
                                                <optgroup label="Lit">\
                                                    <option value="Front_lit">Front lit</option>\
                                                    <option value="Back lit">Back lit</option>\
                                                </optgroup>\
                                                <optgroup label="Not">\
                                                    <option value="Not">Not</option>\
                                                </optgroup>\
                                            </select>\
                                        </div>\
                                    </div>\
                                    <div class="col-md-2">\
                                        <div class="form-group mb-2">\
                                            <label for="">Light type</label>\
                                            <select  name="light_name[]" class="form-control" >\
                                            <?php while ($row_one = mysqli_fetch_assoc($result_three)) { ?>\
                                                    <option value="<?php echo $row_one['metirial_light_id']; ?>"><?php echo $row_one['light_name']; ?></option>\
                                                <?php } ?>\
                                            </select>\
                                        </div>\
                                    </div>\
                                    <div class="col-md-1">\
                                        <div class="form-group mb-2">\
                                            <label for="">Colours</label>\
                                            <input type="text" name="colours[]" class="form-control"  required >\
                                        </div>\
                                    </div>\
                                    <div class="col-md-2">\
                                    <div class="form-group mb-2">\
                                        <label for="">Structure</label>\
                                        <select  name="Structure_name[]" class="form-control" >\
                                        <?php while ($row_one = mysqli_fetch_assoc($result_four)) { ?>\
                                                <option value="<?php echo $row_one['Metirial_structure_id']; ?>"><?php echo $row_one['Structure_name']; ?></option>\
                                            <?php } ?>\
                                        </select>\
                                    </div>\
                                    </div>\
                                    <div class="col-md-2">\
                                        <div class="form-group mb-2">\
                                            <label for="">Print material</label>\
                                            <select  name="Print_Metirial_name[]" class="form-control" >\
                                            <?php while ($row_one = mysqli_fetch_assoc($result_five)) { ?>\
                                                    <option value="<?php echo $row_one['Metirial_print_id']; ?>"><?php echo $row_one['Print_Metirial_name']; ?></option>\
                                                <?php } ?>\
                                            </select>\
                                        </div>\
                                    </div>\
                                    <div class="col-md-2">\
                                        <div class="form-group mb-2">\
                                            <label for="">Cut</label>\
                                            <select  name="Cut_name[]" class="form-control" >\
                                            <?php while ($row_one = mysqli_fetch_assoc($result_six)) { ?>\
                                                    <option value="<?php echo $row_one['Metirial_cut_id']; ?>"><?php echo $row_one['Cut_name']; ?></option>\
                                                <?php } ?>\
                                            </select>\
                                        </div>\
                                    </div>\
                                    <div class="col-md-2">\
                                        <div class="form-group mb-2">\
                                            <label for="">Fixing</label>\
                                            <select  name="Fixing_name[]" class="form-control" >\
                                            <?php while ($row_one = mysqli_fetch_assoc($result_seven)) { ?>\
                                                    <option value="<?php echo $row_one['metirial_Fixing_id']; ?>"><?php echo $row_one['Fixing_name']; ?></option>\
                                                <?php } ?>\
                                            </select>\
                                        </div>\
                                    </div>\
                                    <div class="col-md-1">\
                                        <div class="form-group mb-2">\
                                            <label for="">Height</label>\
                                            <input type="text" name="Height[]" class="form-control" required >\
                                        </div>\
                                    </div>\
                                    <div class="col-md-1">\
                                        <div class="form-group mb-2">\
                                            <label for="">Width</label>\
                                            <input type="text" name="Width[]" class="form-control" required>\
                                        </div>\
                                    </div>\
                                    <div class="col-md-1">\
                                        <div class="form-group mb-2">\
                                            <label for="">Length</label>\
                                            <input type="text" name="Length[]" class="form-control" required>\
                                        </div>\
                                    </div>\
                                    <div class="col-md-1">\
                                        <div class="form-group mb-2">\
                                            <label for="">UOM</label>\
                                            <select name="uom" id="" class="form-control">\
                                                <option value="cm">cm</option>\
                                                <option value="m">m</option>\
                                                <option value="mm">mm</option>\
                                                <option value="inch">inch</option>\
                                                <option value="feet">feet</option>\
                                            </select>\
                                        </div>\
                                    </div>\
                                    <div class="col-md-1">\
                                        <div class="form-group mb-2">\
                                            <label for="">Quantity</label>\
                                            <input type="text" name="Quantity[]" class="form-control" required>\
                                        </div>\
                                    </div>\
                                    <div class="col-md-4">\
                                        <div class="form-group mb-2">\
                                            <br>\
                                            <button type="button" class="remove-btn btn btn-danger">Remove</button>\
                                        </div>\
                                    </div>\
                                </div>\
                            </div>');
            });

        });
    </script>

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

    <!--select2-->
    <script src="../assets/vendor/select2/js/select2.min.js"></script>
    <!--init select2-->
    <script src="../assets/vendor/js-init/init-select2.js"></script>

</body>

</html>


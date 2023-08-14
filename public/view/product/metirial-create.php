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

    <div class="content-wrapper">


    <div class="container-fluid">

<!--page title-->
<div class="page-title mb-4 d-flex align-items-center">
    <div class="mr-auto">
        <h4 class="weight500 d-inline-block pr-3 mr-3 border-right">Basic Form</h4>
        <nav aria-label="breadcrumb" class="d-inline-block ">
            <ol class="breadcrumb p-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Products</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add New Metirial</li>
            </ol>
        </nav>
    </div>

    
</div>
<!--/page title-->


    <div class="col-xl-9 col-md-6">
        <div class="card card-shadow mb-4">
            <div class="card-header border-0">
                <div class="custom-title-wrap bar-warning">
                    <div class="custom-title">Add Metirial - Light</div>
                </div>
            </div>
            <div class="card-body">
                <form action="metirial-create.php" method="post">
                    <div class="form-group row">
                        <label for="inputEmail31" class="col-sm-3 col-form-label">Light Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control rounded-0" id="inputEmail31"  name="light_name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail31" class="col-sm-3 col-form-label">Light type</label>
                        <div class="col-sm-9">
                            <select class="form-control rounded-0" name="Light_type">
                                <option value="LED_tube_light ">LED tube light </option>
                                <option value="LED_modules">LED modules</option>
                                <option value="LED_strips">LED strips</option>
                                <option value="TV_lights">TV lights</option>
                                <option value="Flood_lights">Flood lights</option>
                                <option value="Neon_light_strips ">Neon light strips </option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail31" class="col-sm-3 col-form-label">Unit of measurement</label>
                        <div class="col-sm-9">
                            <select class="form-control rounded-0" name="uom">
                                <option value="sqaure_feet">sqaure feet</option>
                                <option value="minutes<">minutes</option>
                                
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail31" class="col-sm-3 col-form-label">Price</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control rounded-0" id="inputEmail31"  name="price">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 text-center">
                            <button type="submit" class="btn btn-primary rounded-0" name="metirial_light_create">Submit</button>
                        </div>
                    </div>
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
                <form action="metirial-create.php" method="post">
                    <div class="form-group row">
                        <label for="inputEmail31" class="col-sm-3 col-form-label">Structure Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control rounded-0" id="inputEmail31"  name="Structure_name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail31" class="col-sm-3 col-form-label">Structure type</label>
                        <div class="col-sm-9">
                            <select class="form-control rounded-0" name="Structure_type">
                                <option value="GI_box_bar">GI box bar</option>
                                <option value="GI_Pipe">GI Pipe </option>
                                <option value="L_angle">L angle</option>
                                <option value="Flat_iorn">Flat iorn</option>
                                <option value="Aluminium_box_bar">Aluminium box bar</option>
                                <option value="Aluminium_thick_angle">Aluminium thick angle</option>
                                <option value="Aluminium_beading">Aluminium beading</option>
                                <option value="Aluminium_wall_angle">Aluminium wall angle</option>
                                <option value="Aluminium_U_beading ">Aluminium U beading </option>
                                <option value="Aluminium_UV_profile ">Aluminium UV profile</option>
                                <option value="MDF_boards ">MDF boards </option>
                                <option value="Form_bords">Form bords</option>
                                <option value="Stainless_steel">Stainless steel</option>
                                <option value="Cladding_sheet">Cladding sheet </option>
                                <option value="Acrylic_sheet<">Acrylic sheet</option>
                                
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail31" class="col-sm-3 col-form-label">Unit of measurement</label>
                        <div class="col-sm-9">
                            <select class="form-control rounded-0" name="uom">
                                <option value="sqaure_feet">sqaure feet</option>
                                <option value="minutes<">minutes</option>
                                
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail31" class="col-sm-3 col-form-label">Price</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control rounded-0" id="inputEmail31"  name="price">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 text-center">
                            <button type="submit" class="btn btn-primary rounded-0" name="metirial_structure_create">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


            <div class="card card-shadow mb-4">
            <div class="card-header border-0">
                <div class="custom-title-wrap bar-warning">
                    <div class="custom-title">Add Metirial - Print</div>
                </div>
            </div>
            <div class="card-body">
                <form action="metirial-create.php" method="post">
                    <div class="form-group row">
                        <label for="inputEmail31" class="col-sm-3 col-form-label">Print Metirial Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control rounded-0" id="inputEmail31"  name="Print_Metirial_name">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="inputEmail31" class="col-sm-3 col-form-label">Unit of measurement</label>
                        <div class="col-sm-9">
                            <select class="form-control rounded-0" name="uom">
                                <option value="sqaure_feet">sqaure feet</option>
                                <option value="minutes">minutes</option>
                                
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail31" class="col-sm-3 col-form-label">Price</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control rounded-0" id="inputEmail31"  name="price">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 text-center">
                            <button type="submit" class="btn btn-primary rounded-0" name="metirial_print_create">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


        <div class="card card-shadow mb-4">
            <div class="card-header border-0">
                <div class="custom-title-wrap bar-warning">
                    <div class="custom-title">Add Metirial - Cut</div>
                </div>
            </div>
            <div class="card-body">
                <form action="metirial-create.php" method="post">
                    <div class="form-group row">
                        <label for="inputEmail31" class="col-sm-3 col-form-label">Cut Name</label>
                        <div class="col-sm-9">
                        <select class="form-control rounded-0" name="Cut_name">
                                <option value="CNC_Cut">CNC Cut</option>
                                <option value="Lazer_Cut">Lazer Cut</option>
                                
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail31" class="col-sm-3 col-form-label">Unit of measurement</label>
                        <div class="col-sm-9">
                            <select class="form-control rounded-0" name="uom">
                                <option value="sqaure_feet">sqaure feet</option>
                                <option value="minutes<">minutes</option>
                                
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail31" class="col-sm-3 col-form-label">Price</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control rounded-0" id="inputEmail31"  name="price">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 text-center">
                            <button type="submit" class="btn btn-primary rounded-0" name="metirial_cut_create">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>



        <div class="card card-shadow mb-4">
            <div class="card-header border-0">
                <div class="custom-title-wrap bar-warning">
                    <div class="custom-title">Add Metirial - Fixing</div>
                </div>
            </div>
            <div class="card-body">
                <form action="metirial-create.php" method="post">
                    <div class="form-group row">
                        <label for="inputEmail31" class="col-sm-3 col-form-label">Fixing Name</label>
                        <div class="col-sm-9">
                        <select class="form-control rounded-0" name="Fixing_name">
                                <option value="Man_Lift">Man Lift</option>
                                <option value="Boom">Boom</option>
                                
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail31" class="col-sm-3 col-form-label">Unit of measurement</label>
                        <div class="col-sm-9">
                            <select class="form-control rounded-0" name="uom">
                                <option value="sqaure_feet">sqaure feet</option>
                                <option value="minutes">minutes</option>
                                
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail31" class="col-sm-3 col-form-label">Price</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control rounded-0" id="inputEmail31"  name="price">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 text-center">
                            <button type="submit" class="btn btn-primary rounded-0" name="metirial_fixing_create">Submit</button>
                        </div>
                    </div>
                </form>
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


<?php require_once "controllerUserData.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">

    <!--favicon icon-->
    <link rel="icon" type="image/png" href="assets/img/favicon.html">

    <title>Login</title>

    <!--web fonts-->
    <link href="http://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <!--bootstrap styles-->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!--icon font-->
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/vendor/dashlab-icon/dashlab-icon.css" rel="stylesheet">
    <link href="assets/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <link href="assets/vendor/themify-icons/css/themify-icons.css" rel="stylesheet">
    <link href="assets/vendor/weather-icons/css/weather-icons.min.css" rel="stylesheet">

    <!--custom scrollbar-->
    <link href="assets/vendor/m-custom-scrollbar/jquery.mCustomScrollbar.css" rel="stylesheet">

    <!--jquery dropdown-->
    <link href="assets/vendor/jquery-dropdown-master/jquery.dropdown.css" rel="stylesheet">

    <!--jquery ui-->
    <link href="assets/vendor/jquery-ui/jquery-ui.min.css" rel="stylesheet">

    <!--iCheck-->
    <link href="assets/vendor/icheck/skins/all.css" rel="stylesheet">

    <!--custom styles-->
    <link href="assets/css/main.css" rel="stylesheet">

</head>


<body class="login-bg">

<?php

echo'

    <div class="container">
        <div class="row">
            <div class="col-xl-12 d-lg-flex align-items-center">
                <!--login form-->
                <div class="login-form">
                    <h4 class="text-uppercase text-purple text-center mb-5">Login</h4>
                    ';
           
                        if(count($errors) > 0){
                            
                          echo" <div class='alert alert-danger text-center'>";
                                
                                foreach($errors as $showerror){
                                    echo $showerror;
                                }
                            
                            echo "</div>";
                            
                        }
                  echo'
                    <form action="index.php" method="POST">
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email">
                        </div>
                        <div class="form-group mb-4">
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password" name="password">
                        </div>

                        <div class="form-group clearfix">
                            <a href="#" class="float-left forgot-link my-2">Forgot Password ?</a>
                            <button type="submit" class="btn btn-purple float-right" name="login">LOGIN</button>
                        </div>

                        <div class="form-divider"></div>

                        <div class="text-center mt-4">
                            <a href="./public/view/auth/signup-user.php" class="btn-link text-capitalize f12">Create New Account</a>
                        </div>
                    </form>
                </div>
                <!--/login form-->

                <!--login promo-->
                <div class="login-promo basic-gradient  text-white position-relative">
                    <div class="login-promo-content text-center">
                        <a href="#" class="mb-4 d-block">
                            <img class="pr-3" src="assets/img/logo-icon.png" srcset="assets/img/logo-icon@2x.png 2x" alt="logo" style="width: 400px;">
                        </a>
                        <h1 class="text-white">WELCOME!</h1>
                        <p>COMPANY MANAGEMENT SYSTEM</p>
                    </div>
                </div> 
                <!--/login promo-->

            </div>
        </div>
    </div>';

    ?>

    <!--basic scripts-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/jquery-ui/jquery-ui.min.js"></script>
    <script src="assets/vendor/popper.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendor/jquery-dropdown-master/jquery.dropdown.js"></script>
    <script src="assets/vendor/m-custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/vendor/icheck/skins/icheck.min.js"></script>


    <script src="assets/js/scripts.js"></script>
</body>



</html>



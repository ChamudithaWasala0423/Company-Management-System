<html>

<head>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>


<?php 

require "../config/connection.php";
$email = "";
$errors = array();




if(isset($_POST['metirial_light_create'])){
    
    $light_name = $_POST['light_name'];
    $Light_type = $_POST['Light_type'];
    $uom = $_POST['uom'];
    $price = $_POST['price'];
  

    $sql = " INSERT INTO `metirial_light`( `light_name`, `Light_type`, `uom`, `light_price`) 
    VALUES ('$light_name', '$Light_type', '$uom', '$price')";

         
    $data_check = mysqli_query($con, $sql);
  
    if ($data_check) { 
        
        ?>
        <script>
  
      swal({
         title: "Success",
         text: "Metirial Light Data insertd",
         icon: "success",
         });
  
      </script>;
      <?php
        
    } else {
  
        ?>
        <script>
  
      swal({
         title: "Failed",
         text: "Data not insertd",
         icon: "error",
         });
  
  
  
      </script>
        <?php
    }
    

}


if(isset($_POST['metirial_structure_create'])){
    
    $Structure_name = $_POST['Structure_name'];
    $Structure_type = $_POST['Structure_type'];
    $uom = $_POST['uom'];
    $price = $_POST['price'];

    $sql = "INSERT INTO `meterial_structure`( `Structure_name`, `Structure_type`, `uom`, `structure_price`)
     VALUES ('$Structure_name', '$Structure_type', '$uom', '$price')";

         
    $data_check = mysqli_query($con, $sql);
  
    if ($data_check) { 
        
        ?>
        <script>
  
      swal({
         title: "Success",
         text: "Metirial Structure Data insertd",
         icon: "success",
         });
  
      </script>;
      <?php
        
    } else {
  
        ?>
        <script>
  
      swal({
         title: "Failed",
         text: "Data not insertd",
         icon: "error",
         });
  
  
  
      </script>
        <?php
    }
    

}

if(isset($_POST['metirial_print_create'])){
    
    $Print_Metirial_name = $_POST['Print_Metirial_name'];
    $uom = $_POST['uom'];
    $price = $_POST['price'];

    $sql = "INSERT INTO `metirial_print`(`Print_Metirial_name`, `uom`, `print_price`)
    VALUES ('$Print_Metirial_name', '$uom', '$price')";

         
    $data_check = mysqli_query($con, $sql);
  
    if ($data_check) { 
        
        ?>
        <script>
  
      swal({
         title: "Success",
         text: "Metirial Print Data insertd",
         icon: "success",
         });
  
      </script>;
      <?php
        
    } else {
  
        ?>
        <script>
  
      swal({
         title: "Failed",
         text: "Data not insertd",
         icon: "error",
         });
  
  
  
      </script>
        <?php
    }
    

}

if(isset($_POST['metirial_cut_create'])){
    
    $Cut_name = $_POST['Cut_name'];
    $uom = $_POST['uom'];
    $price = $_POST['price'];

    $sql = "INSERT INTO `metirial_cut`( `Cut_name`, `uom`, `cut_price`) VALUE ('$Cut_name', '$uom', '$price')";

         
    $data_check = mysqli_query($con, $sql);
  
    if ($data_check) { 
        
        ?>
        <script>
  
      swal({
         title: "Success",
         text: "Metirial Cut Data insertd",
         icon: "success",
         });
  
      </script>;
      <?php
        
    } else {
  
        ?>
        <script>
  
      swal({
         title: "Failed",
         text: "Data not insertd",
         icon: "error",
         });
  
  
  
      </script>
        <?php
    }
    

}


if(isset($_POST['metirial_fixing_create'])){
    
    $Fixing_name = $_POST['Fixing_name'];
    $uom = $_POST['uom'];
    $price = $_POST['price'];

    $sql = "INSERT INTO `metirial_fixing`( `Fixing_name`, `uom`, `fixing_price`) VALUE ('$Fixing_name', '$uom', '$price')";

         
    $data_check = mysqli_query($con, $sql);
  
    if ($data_check) { 
        
        ?>
        <script>
  
      swal({
         title: "Success",
         text: "Metirial Fixing Data insertd",
         icon: "success",
         });
  
      </script>;
      <?php
        
    } else {
  
        ?>
        <script>
  
      swal({
         title: "Failed",
         text: "Data not insertd",
         icon: "error",
         });
  
  
  
      </script>
        <?php
    }
    

}



?>

</body>
</html>
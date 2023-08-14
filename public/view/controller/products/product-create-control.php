<html>

<head>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>


<?php 

require "../config/connection.php";
$email = "";
$errors = array();




if(isset($_POST['product_create'])){
    
    $product_name = $_POST['product_name'];
  

    $sql = " INSERT INTO `product`( `product_name`) VALUES ('$product_name')";

         
    $data_check = mysqli_query($con, $sql);
  
    if ($data_check) { 
        
        ?>
        <script>
  
      swal({
         title: "Success",
         text: "Data insertd",
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
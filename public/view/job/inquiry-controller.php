<html>

<head>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>


<?php 

require "../config/connection.php";
$email = "";
$errors = array();




if(isset($_POST['inquiry-save'])){
    
    $customer_name = $_POST['customer_name'];
    $location = $_POST['location'];
    $contact_person = $_POST['contact_person'];
    $contact_number = $_POST['contact_number'];
    $priority_level = $_POST['priority_level'];
    $Description= $_POST['Description'];
    $job_select_company = $_POST['job_select_company'];
    $job_getting_user = $_POST['job_getting_user'];
  

    $sql = "INSERT INTO `inquiry`( `Customer_name`, `location`, `contact_person_name`, `contact_number`, 
    `Priority_level`, `description`, `Job_Select_Company`, `Job_Getting_user`) 
    VALUES ('$customer_name', '$location', '$contact_person', '$contact_number', '$priority_level', '$Description', '$job_select_company', '$job_getting_user' )";

         
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
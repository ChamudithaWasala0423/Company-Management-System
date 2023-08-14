<html>

<head>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>


<?php 

require "../config/connection.php";
$email = "";
$errors = array();




if(isset($_POST['inquiry-update'])){

    $inquary_update_id = $_POST['inquary_update_id'];
    
    $customer_name = $_POST['customer_name'];
    $location = $_POST['location'];
    $contact_person = $_POST['contact_person'];
    $contact_number = $_POST['contact_number'];
    $priority_level = $_POST['priority_level'];
    $Description = $_POST['Description'];
    $job_select_company = $_POST['job_select_company'];
    $job_getting_user = $_POST['job_getting_user'];
  

    $sql = "UPDATE `inquiry` SET `Customer_name`='$customer_name',`location`='$location',
    `contact_person_name`='$contact_person',`contact_number`='$contact_number',`Priority_level`='$priority_level',
    `description`='$Description',`Job_Select_Company`='$job_select_company',
    `Job_Getting_user`='$job_getting_user'
    WHERE inqury_id = '".$inquary_update_id."'";

         
    $data_check = mysqli_query($con, $sql);
  
    if ($data_check) { 
        
        ?>
        <script>
  
      swal({
         title: "Success",
         text: "Upadat Data",
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
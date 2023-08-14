<html>

<head>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>


<?php
require "../config/connection.php";
function getJobNumber() {

    // Connect to the database
    $mysqli = new mysqli('localhost', 'root', '', 'sm_system');

    // output any connection error
    if ($mysqli->connect_error) {
        die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
    }

    $query = "SELECT * FROM `job_registration`  ORDER BY job_number DESC LIMIT 1";

    if ($result = $mysqli->query($query)) {

        $row_cnt = $result->num_rows;

        $row = mysqli_fetch_assoc($result);

        //var_dump($row);

        if($row_cnt == 0){
            echo " 1000 ";
        } else {
            echo $row['job_number']; 
        }

        // Frees the memory associated with a result
        $result->free();

        // close connection 
        $mysqli->close();
    }
}


if(isset($_POST['save-job-data'])){
    $inquary_id = $_POST['param'];
    $job_type = $_POST['job_type'];
    $job_name = $_POST['job_name'];
    $remark = $_POST['remark'];
    $due_date = $_POST['due_date'];

     $sql = "INSERT INTO `job_registration`( `inqury_id`, `job_type`, `job_name`, `remark`, `due_date`) VALUES ('$inquary_id', '$job_type', '$job_name','$remark', '$due_date')";

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
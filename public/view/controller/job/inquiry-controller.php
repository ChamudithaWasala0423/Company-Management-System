<html>

<head>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>





<?php 

require "../config/connection.php";
$email = "";
$errors = array();



function getInqNumber() {

  // Connect to the database
  $mysqli = new mysqli('localhost', 'root', '', 'sm_system');

  // output any connection error
  if ($mysqli->connect_error) {
      die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
  }

  $query = "SELECT * FROM `inquiry`  ORDER BY inqury_id DESC LIMIT 1";

  if ($result = $mysqli->query($query)) {

      $row_cnt = $result->num_rows;

      $row = mysqli_fetch_assoc($result);

      //var_dump($row);

      if($row_cnt == 0){
          echo " 100 ";
      } else {
          echo $row['inqury_id']+ 1; 
      }

      // Frees the memory associated with a result
      $result->free();

      // close connection 
      $mysqli->close();
  }
}




if(isset($_POST['inquiry-save'])){
    

    $inq_id = $_POST['inq_id'];
    $customer_name = $_POST['customer_name'];
    $location = $_POST['location'];
    $contact_person = $_POST['contact_person'];
    $contact_number = $_POST['contact_number'];
    $priority_level = $_POST['priority_level'];
    $Description= $_POST['Description'];
    $job_select_company = $_POST['job_select_company'];
    $job_getting_user = $_POST['job_getting_user'];


    $images = $_FILES['images'];

    $num_of_imgs = count($images['name']);


    for ($i=0; $i < $num_of_imgs; $i++) { 
    	
    	# get the image info and store them in var
    	$image_name = $images['name'][$i];
    	$tmp_name   = $images['tmp_name'][$i];
    	$error      = $images['error'][$i];

    	# if there is not error occurred while uploading
    	if ($error === 0) {
    		
    		# get image extension store it in var
    		$img_ex = pathinfo($image_name, PATHINFO_EXTENSION);

    		/** 
			convert the image extension into lower case 
			and store it in var 
			**/
			$img_ex_lc = strtolower($img_ex);
            
            /** 
			crating array that stores allowed
			to upload image extensions.
			**/
			$allowed_exs = array('jpg', 'jpeg', 'png');


			/** 
			check if the the image extension 
			is present in $allowed_exs array
			**/

			if (in_array($img_ex_lc, $allowed_exs)) {
				/** 
				 renaming the image name with 
				 with random string
				**/
				$new_img_name = uniqid('IMG-', true).'.'.$img_ex_lc;
                
                # crating upload path on root directory
                $img_upload_path = 'uploads/'.$new_img_name;

                # inserting imge name into database
                
                $sql  = "INSERT INTO images (img_name)
                         VALUES (?)";
                $stmt = $con->prepare($sql);
                $stmt->execute([$new_img_name]);

                # move uploaded image to 'uploads' folder
                move_uploaded_file($tmp_name, $img_upload_path);

		    	# redirect to 'index.php'
	            header("Location: index.php");


			}else {
				    # error message
    	     	$em = "You can't upload files of this type";

	        header("Location: index.php?error=$em");
			}

   
    	}else {
    		# error message
    		$em = "Unknown Error Occurred while uploading";

    		/*
	    	redirect to 'index.php' and 
	    	passing the error message
	        */

	        header("Location: index.php?error=$em");
    	}
    } 

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
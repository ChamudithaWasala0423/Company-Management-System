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



function getProductTotal(){
    require "../config/connection.php";

    $sql_three = " SELECT * 
    FROM job_products i
    JOIN metirial_light c ON c.metirial_light_id = i.metirial_light_id
    JOIN meterial_structure d ON d.Metirial_structure_id = i.Metirial_structure_id
    JOIN metirial_print e ON e.Metirial_print_id = i.Metirial_print_id
    JOIN metirial_cut f ON f.Metirial_cut_id = i.Metirial_cut_id
    JOIN metirial_fixing g ON g.metirial_Fixing_id = i.metirial_fixing 
    JOIN product h ON h.product_id = i.product_id
    JOIN job_registration j ON j.job_number  = i.job_number 
    WHERE i.job_number = '".$JC_ID."'";
    

    $result_three = mysqli_query($con, $sql_three);
    if (!$result_three) {
        die('Query Error: ' . mysqli_error($con));
    }


    while ($row_one = $result_three->fetch_assoc()){
        $total = 0;
        $product_price =  $row_one['light_price']  + $row_one['structure_price'] + $row_one['print_price']
        + $row_one['cut_price'] + $row_one['fixing_price'];

        echo " $product_price ";

    }






    
}

?>

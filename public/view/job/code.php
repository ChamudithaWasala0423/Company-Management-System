<?php
session_start();
$con = new mysqli('localhost', 'root', '', 'sm_system');

if(isset($_POST['save_multiple_data']))
{

    $product = $_POST['product'];
    $Job_number = $_POST['Job_number'];
    $lit_type = $_POST['lit_type'];
    $light_name = $_POST['light_name'];
    $colours = $_POST['colours'];
    $Structure_name = $_POST['Structure_name'];
    $Print_Metirial_name = $_POST['Print_Metirial_name'];
    $Cut_name = $_POST['Cut_name'];
    $Fixing_name = $_POST['Fixing_name'];
    $Height = $_POST['Height'];
    $Width = $_POST['Width'];
    $Length = $_POST['Length'];
    $uom = $_POST['uom'];
    $Quantity = $_POST['Quantity'];
    



    foreach($product as $index => $products)
    {
        
        $s_product  = $products;
        $s_Job_number = $Job_number[$index];
        $s_lit_type = $lit_type[$index];
        $s_light_name = $light_name[$index];
        $s_colours = $colours[$index];
        $s_Structure_name = $Structure_name[$index];
        $s_Print_Metirial_name = $Print_Metirial_name[$index];
        $s_Cut_name = $Cut_name[$index];
        $s_Fixing_name = $Fixing_name[$index];
        $s_Height = $Height[$index];
        $s_Width = $Width[$index]; 
        $s_Length = $Length[$index];
        $s_uom = $uom[$index];
        $s_Quantity = $Quantity[$index];




        $query = "INSERT INTO `job_products`(`job_number`,`product_id`,`lit_or_not`, `metirial_light_id`,`Metirial_structure_id`,`Metirial_print_id`,
        `Metirial_cut_id`,`metirial_fixing`,`Height`,`Width`,`Length`,`uom`,`quntity`,`color`) 
        VALUES ('$s_Job_number','$s_product', '$s_lit_type', '$s_light_name', '$s_Structure_name','$s_Print_Metirial_name',
        '$s_Cut_name','$s_Fixing_name ','$s_Height','$s_Width','$s_Length','$s_uom','$s_Quantity','$s_colours')";
        
        $query_run = mysqli_query($con, $query);
    }

    if($query_run)
    {
        $_SESSION['status'] = "Multiple Data Inserted Successfully";
        header("Location: job-create.php");
        exit(0);
    }
    else
    {
        $_SESSION['status'] = "Data Not Inserted";
        header("Location: job-create.php");
        exit(0);
    }
}
?>
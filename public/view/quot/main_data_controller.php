<?php 
session_start();
require "../connection/connection.php";
$email = "";
$errors = array();


if(isset($_POST['upload_employee_main_data'])){


    $fullName = $_POST['fullName'];
    $permanantAddress = $_POST['permanantAddress'];
    $Personal_contact_number = $_POST['Personal_contact_number'];
    $temporary_address = $_POST['temporary_address'];
    $mobile_number = $_POST['mobile_number'];
    $marriage = $_POST['marriage'];
    $election_district = $_POST['election_district'];
    $Polling_Division = $_POST['Polling_Division'];
    $nation = $_POST['nation'];
    $religion = $_POST['religion'];
    $NIC = $_POST['NIC'];
    $Gender = $_POST['Gender'];
    $DOB = $_POST['DOB'];
    $age = $_POST['age'];
    $last_passed_class = $_POST['last_passed_class'];
    $Position = $_POST['Position'];



    $sql = "INSERT INTO `employee_basic`(`full_name`, `permanant_address`, `personal_contact_number`,
     `temporary_address`, `mobile_number`, `marriage`, `election_district`, `polling_division`, `nation`, `religion`, 
    `NIC`, `gender`, `DOB`, `age`, `last_passed_class`,position) 
    VALUES ('$fullName', '$permanantAddress','$Personal_contact_number', '$temporary_address', '$mobile_number', '$marriage', '$election_district',
    '$Polling_Division', '$nation', '$religion', '$NIC','$Gender', '$DOB', '$age',  '$last_passed_class','$Position')";

    $data_check = mysqli_query($con, $sql);

    if ($data_check) {    
        $_SESSION['info']   = "Successfully Add Cusromer data";
        header("location: all_employee_data.php");

        
    } else {
        $errors['db-error'] = "Failed while inserting data into database!";
    }

}





if(isset($_POST['upload_employee_ol_edu_main_data'])){

    $sub_one_name = $_POST['Sub_one_name'];
    $sub_one_marks = $_POST['Sub_one_marks'];
    $sub_two_name = $_POST['Sub_two_name'];
    $sub_two_marks = $_POST['Sub_two_marks'];
    $sub_three_name = $_POST['Sub_three_name'];
    $sub_three_marks = $_POST['Sub_three_marks'];
    $sub_four_name = $_POST['Sub_four_name'];
    $sub_four_marks = $_POST['Sub_four_marks'];
    $sub_five_name = $_POST['Sub_five_name'];
    $sub_five_marks = $_POST['Sub_five_marks'];
    $sub_six_name = $_POST['Sub_six_name'];
    $sub_six_marks = $_POST['Sub_six_marks'];
    $sub_seven_name = $_POST['Sub_seven_name'];
    $sub_seven_marks = $_POST['Sub_seven_marks'];
    $sub_eight_name = $_POST['Sub_eight_name'];
    $sub_eight_marks = $_POST['Sub_eight_marks'];
    $sub_nine_name = $_POST['Sub_nine_name'];
    $sub_nine_marks = $_POST['Sub_nine_marks'];
    $employee_id = $_POST['employee_id'];


    $sql = "INSERT INTO `employee_ol_edu`(
    `employee_id`, `subject_one_name`, `subject_one_marks`, `subject_two_name`, `subject_two_marks`, `subject_three_name`, `subject_three_marks`, 
    `subject_four_name`, `subject_four_marks`, `subject_five_name`, `subject_five_marks`, `subject_six_name`, `subject_six_marks`, `subject_seven_name`, `subject_seven_marks`,
     `subject_eight_name`,`subject_eight_marks`, `subject_nine_name`, `subject_nine_marks`) 
     VALUES ('$employee_id','$sub_one_name', '$sub_one_marks','$sub_two_name','$sub_two_marks','$sub_three_name', '$sub_three_marks',
        '$sub_four_name', '$sub_four_marks','$sub_five_name','$sub_five_marks','$sub_six_name','$sub_six_marks','$sub_seven_name','$sub_seven_marks','$sub_eight_name, '$sub_eight_marks',
        '$sub_nine_name', '$sub_nine_marks')";

    $data_check = mysqli_query($con, $sql);

    if ($data_check) {    
        $errors['db-error']   = "Successfully Add Education data";
        header("location: all_employee_data.php");
    } else {
        $errors['db-error'] = "Failed while inserting data into database!";
    }

}


if(isset($_POST['upload_employee_al_edu_main_data'])){

    $sub_one_name = $_POST['Sub_one_name'];
    $sub_one_marks = $_POST['Sub_one_marks'];
    $sub_two_name = $_POST['Sub_two_name'];
    $sub_two_marks = $_POST['Sub_two_marks'];
    $sub_three_name = $_POST['Sub_three_name'];
    $sub_three_marks = $_POST['Sub_three_marks'];
    $sub_four_name = $_POST['Sub_four_name'];
    $sub_four_marks = $_POST['Sub_four_marks'];
    $employee_id = $_POST['employee_id'];

    $sql = "INSERT INTO `employee_al_edu`( `employee_id`, `subject_one_name`, `subject_one_marks`, `subject_two_name`, 
    `subject_two_marks`, `subject_three_name`, `subject_three_marks`, `subject_four_name`, `subject_four_marks`) 
    VALUES ('$employee_id','$sub_one_name', '$sub_one_marks', '$sub_two_name', '$sub_two_marks', '$sub_three_name', '$sub_three_marks',
    '$sub_four_name', '$sub_four_marks')";

    $data_check = mysqli_query($con, $sql);

    if ($data_check) {    
        $errors['db-error'] = "Successfully Add Education data";
        header("location: all_employee_data.php");

        
    } else {
        $errors['db-error'] = "Failed while inserting data into database!";
    }

}


if(isset($_POST['upload_employee_Outher_profetional_qulification'])){

    $Cource_name_one = $_POST['Cource_name_one'];
    $Course_one_time = $_POST['Course_one_time'];
    $course_one_start_year = $_POST['course_one_start_year'];
    $course_one_end_year = $_POST['course_one_end_year'];
    $Course_One_Received_status = $_POST['Course_One_Received_status'];
    $Course_One_Outhe = $_POST['Course_One_Outhe'];

    $Cource_name_two = $_POST['Cource_name_two'];
    $Course_two_time = $_POST['Course_two_time'];
    $course_two_start_year = $_POST['course_two_start_year'];
    $course_two_end_year = $_POST['course_two_end_year'];
    $Course_two_Received_status = $_POST['Course_two_Received_status'];
    $Course_two_Outher = $_POST['Course_two_Outher'];

    $employee_id = $_POST['employee_id'];


    $sql = "INSERT INTO `other_professional_qualification`(`employee_id`, `course_one_name`, `course_one_time`, `course_one_start_year`,
     `course_one_end_year`, `Course_One_Received_status`, `Course_One_Outher`, `Cource_name_two`, `Course_two_time`,
     `course_two_start_year`, `course_two_end_year`, `Course_two_Received_status`, `Course_two_Outher`) 
     VALUES (' $employee_id', '$Cource_name_one', '$Course_one_time', '$course_one_start_year', '$course_one_end_year', '$Course_One_Received_status',
     '$Course_One_Outhe', '$Cource_name_two', '$Course_two_time', '$course_two_start_year', '$course_two_end_year','$Course_two_Received_status',
     '$Course_two_Outher' )";

    $data_check = mysqli_query($con, $sql);

    if ($data_check) {    
        $errors['db-error'] = "Successfully Add Education data";
        header("location: all_employee_data.php");

        
    } else {
        $errors['db-error'] = "Failed while inserting data into database!";
    }

}



if(isset($_POST['upload_Professional_experience'])){

    
    $company_name = $_POST['company_name'];
    $position = $_POST['position'];
    $start_year = $_POST['start_year'];
    $end_year = $_POST['end_year'];
    $Reason_for_resignation = $_POST['Reason_for_resignation'];

    $employee_id = $_POST['employee_id'];


    $sql = "INSERT INTO `professional_experience`( `employee_id`, `company_name`, `position`, `start_year`, `end_year`, `Reason_for_resignation`) 
    VALUES ('$employee_id', '$company_name', '$position', '$start_year', '$end_year', '$Reason_for_resignation')";

    $data_check = mysqli_query($con, $sql);

    if ($data_check) {    
        $errors['db-error'] = "Successfully Add Education data";
        header("location: all_employee_data.php");

        
    } else {
        $errors['db-error'] = "Failed while inserting data into database!";
    }

}


if(isset($_POST['upload_emergency_contact_number'])){

    $Name_one = $_POST['Name_one'];
    $relation_one = $_POST['relation_one'];
    $contact_one = $_POST['contact_one'];
    $address_one = $_POST['address_one'];

    $Name_two = $_POST['Name_two'];
    $relation_two = $_POST['relation_two'];
    $contact_two = $_POST['contact_two'];
    $address_two = $_POST['address_two'];

    $employee_id = $_POST['employee_id'];


    $sql = "INSERT INTO `employee_emergency_contact_number`( `employee_id`, `Name_one`,
     `relation_one`, `contact_one`, `address_one`, `Name_two`, `relation_two`, `contact_two`, `address_two`)
      VALUES ('$employee_id ', '$Name_one', '$relation_one', '$contact_one', '$address_one', '$Name_two',
      '$relation_two', '$contact_two','$address_two' )";

    $data_check = mysqli_query($con, $sql);

    if ($data_check) {    
        $errors['db-error'] = "Successfully Add Education data";
        header("location: all_employee_data.php");

        
    } else {
        $errors['db-error'] = "Failed while inserting data into database!";
    }

}








?>
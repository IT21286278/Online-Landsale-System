<?php
    require 'config.php';

if(isset($_POST["submit"]))
{   
     //assign input values to variables    
    $Title = $_POST['titles'];
    $name_with_initials = $_POST["nameinitials"];
    $full_name = $_POST["fullname"];
    $NIC = $_POST["nic"];
    $address = $_POST['address'];
    $occupation = $_POST['occupation'];
    $nationality = $_POST['nationality'];
    $gender = $_POST['gender'];
    $mobleNo = $_POST['mobile'];
    $homeNo = $_POST['home'];
    $email = $_POST['email'];
    $landID = $_POST['landID'];
    $income = $_POST['income'];
    $taxp = $_POST['tax'];

   //Input data to the database
    $sql = "INSERT INTO reservation_request (Title, Name_with_initials, Full_name, NIC, Address,
     Occupation, Nationality, Gender, Mobile_No, Home_No, Email, Land_ID, Monthly_income, Tax_payer)
     VALUES ('$Title', '$name_with_initials', '$full_name', '$NIC', '$address', '$occupation', '$nationality', 
     '$gender', '$mobleNo', '$homeNo', '$email', '$landID', '$income', '$taxp')";

     if($con->query($sql))
     {
        $y = 1; 
     }
     else
     {
        echo "Submission fail".$con->error;  
     }

       require 'file-upload.php';

     if($x = 1 && $y = 1)
     {
        echo '<script>alert("Reservation Request Made Successfully!!")</script> ';
        //display succesfull message
     }
     else
     {
        echo '<script>alert("Reservation Request failed!!.Please try again.")</script>';
        //display error message
     }

}
$con->close();

?>
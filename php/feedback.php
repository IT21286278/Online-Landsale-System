<?php
   $full_name = $_POST['full_name'];
   $email = $_POST['email'];
   $age = $_POST['age'];
   $phone = $_POST['phone'];
   $message = $_POST['message'];

 //Database Connection 
 

 $conn = new mysqli('localhost','root','','gl');
 if ($conn->connect_error){

      die('Connection Failed :'.$conn->connect_error);

 } else {

     $stmt = $conn->prepare("insert into feedback(full_name,email,age,phone,message)
     values(?,?,?,?,?)");
     $stmt->bind_param("ssiis",$full_name,$email,$age,$phone,$message);
     $stmt->execute();
     echo "Succesfully Submited.....";
     $stmt->close();
     $conn->close();
 }

?>

   
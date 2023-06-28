<?php
 
 $full_name = $_POST['full_name'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 $cpassword = $_POST['cpassword'];

  
 $conn = new mysqli('localhost','root','','gl');
 if ($conn->connect_error){

      die('Connection Failed :'.$conn->connect_error);

 } else {

  $stmt = $conn->prepare("insert into profile(full_name,email,password,cpassword)
  values(?,?,?,?)");
  $stmt->bind_param("ssss",$full_name,$email,$password,$cpassword);
  $stmt->execute();
  echo "Succesfully Submited.....";
  $stmt->close();
  $conn->close();
}

?>

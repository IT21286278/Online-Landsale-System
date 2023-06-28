<?php

@include 'dbconfig.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $contact_no = mysqli_real_escape_string($conn, $_POST['contact_no']);
   $district = $_POST['district'];
   $dob=$_POST['dob'];
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type =$_POST['user_type'];

   $select = " SELECT * FROM user_details WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0)
   {

      $error[] = 'user already exist!';

   }
   else
	   {

		  if($pass != $cpass)
		  {
			 $error[] = 'password not matched!';
		  }
		  
		  else
		  {
			 $insert = "INSERT INTO user_details (name,email,contact_no,district,dob,password,user_type) VALUES('$name','$email','$contact_no','$district','$dob','$pass','$user_type')";
			 mysqli_query($conn, $insert);
			 header('location:login_olss.php');
		  }
	   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/stylemy.css">
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online land sales system</title>
    <link rel="stylesheet" href="../css/hfstyle.css">
    <script src="https://kit.fontawesome.com/5b37819dfa.js" crossorigin="anonymous"></script>

</head>

<body>

<div class="header">
        <nav>
        <a href="../php/home.php"><img src="../images/logo.png" class="logo"></a>
            
            <ul class="nav-links">
            <li><a href="land advertisements.php"><b>LANDS</b></a></li>
                <li><a href="SellYourLand.php"><b>SELL YOUR LANDS</b></a></li>
                <li><a href="contactus.php"><b>CONTACT US</b></a></li>
                <li><a href="../html/about.html"><b>ABOUT US</b></a></li>
                <li><a href="login_olss.php"><b>LOGIN</b></a></li>
                <li><a href="#"><b>REGISTER</b></a></li>
                <li><a href="../html/profile.html"><b>PROFILE</b></a></li>
            </ul>
        </nav>
    </div>
    
    <!header deshagra>
   
<div class="form-container">

   <form action="" method="post">
      <h3><center>Welcome To goldenlands.lk</center></h3>
	  <h2><B><center>Create A New Account</center> </B> </H2>
      <?php 
	  if(isset($error)){
         foreach($error as $error)
		 {
            echo '<span class="error-msg">'.$error.'</span>';
         };
	  };
      ?>
      <input type="text" name="name" required placeholder="Enter your Full name">
      <input type="email" name="email" required placeholder="Enter your email">
      <input type="contact_no" name="contact_no" required placeholder="Enter your Contact number">
      
      
      <label for="district">Select your district:</label>
      <select name="district">
        <option value="Colombo">Colombo</option>
        <option value="Kandy">Kandy</option>
        <option value="Kalutara">Kalutara</option>
        <option value="Galle">Galle</option>
        <option value="Jaffna">Jaffna</option>
        <option value="Trinclomalee">Trinclomalee</option>
        </select><br>
        
      <label for="dob">DOB :</label><br>
  	  <input type="datetime-local" id="dob" name="dob">
        
      <input type="password" name="password" required placeholder="enter your password">
      <input type="password" name="cpassword" required placeholder="confirm your password">
      
      Select Account type:
      <select name="user_type">
         <option value="Customer">Customer</option>
         <option value="Estate agent">Estate agent</option>
         <option value="Manager">Manager</option>
         <option value="System admin">System admin</option>


         
         
      </select>
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>already have an account? <a href="login_olss.php">login now</a></p>
   </form>

</div>
	
			<!-- footer -->
		 <footer class="footer">
				<div class="ccontainer">
					 <div class="row">
						 <div class="footer-col">
							 <h4>quick links</h4>
							 <ul>
                      <li><a href="home.php">Home</a></li>
  	 				      <li><a href="../html/about.html">about us</a></li>
  	 				      <li><a href="../html/feedback.html">feedback</a></li>
  	 				      <li><a href="../html/new privacy.html">privacy policy</a></li>
                     <li><a href="../html/TC.html">Terms & Conditions</a></li>
                    
							 </ul>
						 </div>
						 <div class="footer-col">
							 <h4>get help</h4>
							 <ul>
								 <li><a href="../../html/faq.html">FAQ</a></li>
								 <li><a href="#">contact us</a></li>
							 </ul>
						 </div>
						 <div class="footer-col">
							 <h4>follow us</h4>
							 <div class="social-links">
								 <a href="#"><i class="fab fa-facebook-f"></i></a>
								 <a href="#"><i class="fab fa-twitter"></i></a>
								 <a href="#"><i class="fab fa-instagram"></i></a>
								 <a href="#"><i class="fab fa-linkedin-in"></i></a>
							 </div>
						 </div>
					 </div>
				</div>
		   </footer>

</body>
</html>
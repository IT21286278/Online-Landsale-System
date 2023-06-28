<?php

@include 'dbconfig.php';

session_start();

if(isset($_POST['submit'])){

   
   $email = mysqli_real_escape_string($conn, $_POST['email']);
  
   $pass = md5($_POST['password']);
  

   $select = " SELECT * FROM user_details WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);
	  

      if($row['user_type'] == 'System admin'){

         $_SESSION['user_name'] = $row['name'];
         header('location:admin_olss.php');

      }elseif($row['user_type'] == 'Customer'){

         $_SESSION['user_name'] = $row['name'];
         header('location:admin_olss.php');
	
	  }elseif($row['user_type'] == 'Manager'){

         $_SESSION['user_name'] = $row['name'];
         header('location:admin_olss.php');
		 
	  }elseif($row['user_type'] == 'Estate agent'){

         $_SESSION['user_name'] = $row['name'];
         header('location:admin_olss.php');

      }
   }else{
      $error[] = 'incorrect email or password!';
   }

};
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online land sales system</title>
    <link rel="stylesheet" href="../css/hfstyle.css">
	
    <script src="https://kit.fontawesome.com/5b37819dfa.js" crossorigin="anonymous"></script>
	
	
	<meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/stylemy.css">

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
                <li><a href="#"><b>LOGIN</b></a></li>
                <li><a href="signup_olss.php"><b>REGISTER</b></a></li>
                <li><a href="../html/profile.html"><b>PROFILE</b></a></li>
            </ul>
        </nav>
    </div>
	<!-- header-end -->
	
	<div class="form-container">

   <form action="" method="post">
      <h3>login now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="submit" name="submit" value="login now" class="form-btn">
      <p>don't have an account? <a href="signup_olss.php">register now</a></p>
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
                      <li><a href="../html/faq.html">FAQ</a></li>
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
<?php

@include 'dbconfig.php';


session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_olss.php');
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>profile page</title>

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
            <img src="../images/logo.png" class="logo">
            <ul class="nav-links">
            <li><a href="land advertisements.php"><b>LANDS</b></a></li>
                <li><a href="SellYourLand.php"><b>SELL YOUR LANDS</b></a></li>
                <li><a href="contactus.php"><b>CONTACT US</b></a></li>
                <li><a href="../html/about.html"><b>ABOUT US</b></a></li>
                <li><a href="login_olss.php"><b>LOGIN</b></a></li>
                <li><a href="signup_olss.php"><b>REGISTER</b></a></li>
                <li><a href="../html/profile.html"><b>PROFILE</b></a></li>
            </ul>
        </nav>
    </div>
   
<div class="container">

   <div class="content">
      <h3>Hi  <span><?php echo $_SESSION['user_name'] ?></span></h3>
      <h1>welcome <span> To goldenlands.lk</span></h1>
      <a href="login_olss.php" class="btn">login</a>
      <a href="signup_olss.php" class="btn">register</a>
      <a href="logout_olss.php" class="btn">logout</a>
	  <a href="../html/profile.html" class="btn">Profile </a>
   </div>

</div>

  <footer class="footer">
				<div class="ccontainer">
					 <div class="row">
						 <div class="footer-col">
							 <h4>quick links</h4>
							 <ul>
								 <li><a href="#">about us</a></li>
								 <li><a href="#">feedback</a></li>
								 <li><a href="#">privacy policy</a></li>
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
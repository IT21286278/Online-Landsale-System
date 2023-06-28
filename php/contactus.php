<?php
    include 'homeConn.php';
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Contact Us</title>
     <link rel="stylesheet" href="../css/contactUS.css">
     <link rel="stylesheet" href="../css/style.css">
    <script src="https://kit.fontawesome.com/5b37819dfa.js" crossorigin="anonymous"></script>
</head>
 </head>
 <body>
 <div class="header">
        <nav>
        <a href="../php/home.php"><img class="logo" src="../images/logo/logo.png" ></a>
            
            <ul class="nav-links">
            <li><a href="land advertisements.php"><b>LANDS</b></a></li>
                <li><a href="SellYourLand.php"><b>SELL YOUR LANDS</b></a></li>
                <li><a href="#"><b>CONTACT US</b></a></li>
                <li><a href="../html/about.html"><b>ABOUT US</b></a></li>
                <li><a href="login_olss.php"><b>LOGIN</b></a></li>
                <li><a href="signup_olss.php"><b>REGISTER</b></a></li>
                <li><a href="../html/profile.html"><b>PROFILE</b></a></li>
            </ul>
        </nav>
    </div>
    <br><br><br>
     <div>
         <center>
         <form class="form" action="" method="POST">
            <p>Contact Us</p>
            <input type="text" name="Username" placeholder="Type your name">
            <input type="email" name="email" placeholder="Type your email">
            <input type="text" name="subjet" placeholder="Subject">
            <textarea name="msg" cols="3" rows="10" placeholder="Type your message"></textarea>
            <button class="submit" type="submit" name="sub">Send</button>
            
         </form>
         </center>
     </div>
 </body>
 </html>
 
 <?php 
    if(isset($_POST['sub']))
    {
        $name = $_POST['Username'];
        $email = $_POST['email'];
        $sub = $_POST['subjet'];
        $msg = $_POST['msg'];


        $sql= "INSERT INTO contactus(username, email, sub, msg) VALUES('$name', '$email', '$sub', '$msg')";

        if(mysqli_query($conn, $sql))
        {
            echo "<script>alert(\"your message successfully recived\")</script>";
        }
    }

   
    
 ?> 
     <footer class="footer">
  	    <div class="container">
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

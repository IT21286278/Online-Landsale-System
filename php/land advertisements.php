<!DOCTYPE html>
<html>
    <head>
        
        <title>Land Advertisements</title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/land advertisements.css">
        <script src="../js/land advertisements.js"></script>
        <script src="https://kit.fontawesome.com/5b37819dfa.js" crossorigin="anonymous"></script>


    </head>

    <!--header-->
    <body>
        <div class="header">
            <nav>
            <a href="../php/home.php"><img src="../images/logo.png" class="logo"></a>
                
                <ul class="nav-links">
                <li><a href="#"><b>LANDS</b></a></li>
                <li><a href="SellYourLand.php"><b>SELL YOUR LANDS</b></a></li>
                <li><a href="contactus.php"><b>CONTACT US</b></a></li>
                <li><a href="../html/about.html"><b>ABOUT US</b></a></li>
                <li><a href="login_olss.php"><b>LOGIN</b></a></li>
                <li><a href="signup_olss.php"><b>REGISTER</b></a></li>
                <li><a href="../html/profile.html"><b>PROFILE</b></a></li>
                </ul>
            </nav>
        </div>

        <!--slideshow-->
        <div class="slideshow-container">

            <div class="adSlides">
            <a href = "land advertisement details.php?id=LO1001">
              <img src="../images/elinor-battaramulla.jpg" class="imgSlides"></a>
              <div class="text">ELINOR-BATTARAMULLA</div>
            </div>
            
            <div class="adSlides">
            <a href = "land advertisement details.php?id=LO1002">
              <img src="../images/prime serene-galle.jpg" class="imgSlides"></a>
              <div class="text">PRIME SERENE-GALLE</div>
            </div>
            
            <div class="adSlides">
            <a href = "land advertisement details.php?id=LO1003">
              <img src="../images/eternity-panadura.jpg" class="imgSlides"></a>
              <div class="text">ETERNITY-PANADURA</div>
            </div>

            <div class="adSlides">
            <a href = "land advertisement details.php?id=LO1004">
              <img src="../images/glimmer-waragoda.jpg" class="imgSlides"></a>
              <div class="text">GLIMMER-WARAGODA</div>
            </div>
            
        </div>
            <br>
            
            <div style="text-align:center">
              <span class="dot"></span> 
              <span class="dot"></span> 
              <span class="dot"></span>
              <span class="dot"></span>  
            </div>

            <!--call slideshow function-->
            <script> slidesShow();</script>
            <br/>
            
            <h2 class="lhead"><center>LANDS</center></h2>

        <div class=" main_align">
        <section class="lands">

        <?php

            require 'config.php';

            //retrive data from database
            $sql = "SELECT * FROM land_details";
            $result = $con->query($sql);
        
        //iterate the loop untill all data rows are read    
        while($row=$result->fetch_assoc())
        {
        ?>
            <!--create land cards-->
            <div class="land_card">
                <a href='land advertisement details.php?id=<?php echo $row["Land_ID"]?> '>
                <img src="<?php echo $row["Image"]?>" ><br><br>
                <h3> <?php echo $row["Land_Name"]?> </h3>

                <h3><?php echo $row["Land_City"]?></h3>
                <h4><?php echo $row["Land_Price"]?> PER PERCH UPWARDS</h4>
            </a>
            </div>

        <?php 
        }

        $con->close();
        ?>
        </section>
        </div>

        <!--footer-->
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
  	 				    <li><a href="contactus.php">contact us</a></li>
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
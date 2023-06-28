<!DOCTYPE html>
<html>
    <head>
        <title>ELINOR BATTARAMULLA</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="../css/land advertisement details.css">
        <script src="https://kit.fontawesome.com/5b37819dfa.js" crossorigin="anonymous"></script>

    </head>

    <body>
        
    <!--header-->
        <div class="header">
            <nav>
              <a href="../php/home.php"><img src="../images/logo.png" class="logo"></a>
                
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

        <?php

        require 'config.php';

        //get the land id of the clicked advetisement
        if(isset($_GET['id']))
        {
            $LandID = $_GET["id"];

            //retrieve data from the database where land id equal to the selected advertisement land id
            $sql = "SELECT * FROM land_details WHERE Land_ID = '$LandID'";
            $result = $con->query($sql);

            $row=$result->fetch_assoc();
            
            //assign data row data to variables
            $landName = $row['Land_Name'];
            $landCity = $row['Land_City'];
            $landPrice= $row['Land_Price'];
            $landDescription = $row['Land_Description'];
            $mainLandImage = $row['Image'];
            $reservationFee = $row['Reservation_Fee'];
            $contactNo = $row['Contact_No'];

            //retrieve images from database
            $sql = "SELECT * FROM land_images WHERE Land_ID = '$LandID'";
            $result = $con->query($sql);

            $row=$result->fetch_assoc();

            $landImage1 = $row['Image1'];
            $landImage2 = $row['Image2'];
            $landImage3 = $row['Image3'];
            $landImage4 = $row['Image4'];
            $landImage5 = $row['Image5'];
        }

        $con->close();
        
    ?>
    <!--display land details-->
    <h1 class="land_head"><?php echo $landName.' - '.$landCity?></h1>
    <div class="detail_container">
      <div class="land-description"><?php echo $landDescription?>
      </div>
       
      <!--display land images-->
      <div class="land_images_container">
        <img src="<?php echo $mainLandImage?>" class="land_image">
        <img src="<?php echo $landImage1?>" class="land_image">
        <img src="<?php echo $landImage2?>" class="land_image">
        <img src="<?php echo $landImage3?>" class="land_image">
        <img src="<?php echo $landImage4?>" class="land_image">
        <img src="<?php echo $landImage5?>" class="land_image">
      </div>

      <div class="details_section">
        <div class="land_info">
        <h3>Location : <?php echo $landCity?></h3>
        <h3>Land ID : <?php echo $LandID?></h3>
        <h3>Price : <?php echo $landPrice?> Per Perch Upwards</h3>
        <h3>Contact No : <?php echo $contactNo?></h3>
        <center>
          <!--reserve button-->
          <button class="resbtn"><a href="../html/reservation form.html">Reserve Land</a></button>
        </center>  
        </div>
        
        <div class="facilities">
          <h2>Facilities</h2>
          <h3 class="facility_content">
          <?php 

            //open file to read data
            $fileHandler = fopen("../docs/facilities.txt","r") or die("Error!");

             while(!feof($fileHandler))
              {
                echo fgets($fileHandler)."<br><br>";
                //read data line by line
              }
          ?>
          </h3>
        </div>
      </div>
      
      <!--reserve button-->
      <center><button class="paymentbtn"><a href="payment.php">Make a Payment</a></button></center>
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
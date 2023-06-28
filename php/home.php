<?php
    include 'homeConn.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online land sales system</title>
    <link rel="stylesheet" href="../css/home.css">
    <script src="https://kit.fontawesome.com/5b37819dfa.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="header">
        <nav>
        <a href="../php/home.php"><img src="../images/homeImg/logo.png" class="logo"></a>
            
            <ul class="nav_links">
                <li><a href="land advertisements.php"><b>LANDS</b></a></li>
                <li><a href="SellYourLand.php"><b>SELL YOUR LANDS</b></a></li>
                <li><a href="contactus.php"><b>CONTACT US</b></a></li>
                <li><a href="../html/about.html"><b>ABOUT US</b></a></li>
                <li><a href="login_olss.php"><b>LOGIN</b></a></li>
                <li><a href="signup_olss.php"><b>REGISTER</b></a></li>
                <li><a href="../html/profile.html"><b>PROFILE</b></a></li>
            </ul>
        </nav>
        <div class="content">
            <h1>FIND YOUR DREAM LAND</h1>
            <div class="search_box">
                <form>
                    <div>
                        <input class="search_txt" type="text" placeholder="Type here...">
                        <a class="search_btn" href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="content_1">
        <h2 class="sub_title"><b>FEATURED LANDS</b></h2>
        <div class="featured">
            <div class="img1">
                <a href="land advertisement details.php?id=LO1001"><img src="../images/homeImg/kandy.jpg"></a>
                <span>
                    <h3>BATTARAMULLA</h3>
                    <p>Starts @ Rs.12000000</p>
                </span>
            </div>
            <div class="img2">
                <a href="land advertisement details.php?id=LO1002"><img src="../images/homeImg/ella.jpg"></a>
                <span>
                    <h3>GALLE</h3>
                    <p>Starts @ Rs.14000000</p>
                </span>
            </div>
            <div class="img3">
                <a href="land advertisement details.php?id=LO1003"><img src="../images/homeImg/unawatuna.jpg"></a>
                <span>
                    <h3>PANADURA</h3>
                    <p>Starts @ Rs.17000000</p>
                </span>
            </div>
        </div>
    </div>
    <section class="choose">
        <div class="parts">
            <img src="../images/homeImg/choose.jpg">
            <div class="choose-text">
                <h2>WHY CHOOSE US</h2>
                <p>Branching out under the unfaltering trademark ‘GoldenLAnds’, 
                    we as Golden Lands have ventured into the industry of selling
                     lands and property in Sri Lanka as a leading and trustworthy
                      land sale company. As a tough and strategic competitor, we 
                      thrive with a history of eminence and expertise, in assisting
                       you in finding the ideal land located in the most efficient 
                       location to suit your expectations and lifestyle. With standardized 
                       professionalism and experience in complementing your ideal dreams with
                        the best lands with minimum inconveniences caused, being time and
                        cost effective in bringing your cherished dreams into reality.
                </p>
            </div>
        </div>
    </section>
    <div class="content_1">
      <h2 class="sub_title"><b>LATEST LOCATIONS</b></h2>
      <div class="featured">
          <div class="img1">
              <img src="../images/homeImg/kurunagala.jpg">
              <span>
                  <h3>Kurunagala</h3>
                  <p>Starts @ Rs.15300000</p>
              </span>
          </div>
          <div class="img2">
              <img src="../images/homeImg/badulla.jpg">
              <span>
                  <h3>Badulla</h3>
                  <p>Starts @ Rs.14500000</p>
              </span>
          </div>
          <div class="img3">
              <img src="../images/homeImg/rathnapura.jpg">
              <span>
                  <h3>Rathnapura</h3>
                  <p>Starts @ Rs.12600000</p>
              </span>
          </div>
      </div>
    </div>
    <br><br>
    <div class="testimonials">
        <div class="inner">
          <h1>Testimonials</h1>
          <div class="border"></div>
  
          <div class="row">
            <div class="col">
              <div class="testimonial">
                <img src="../images/homeImg/girl (1).jpg" alt="">
                <div class="name">Stephy Fonseka</div>
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
  
                <p>
                 Had a very good experience overall...
                </p>
              </div>
            </div>
  
            <div class="col">
              <div class="testimonial">
                <img src="../images/homeImg/man.jpg" alt="">
                <div class="name">Dinesh Vithanage</div>
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
                  <i class="far fa-star"></i>
                </div>
  
                <p>
                    Best land sale company to purchase a land to build your dream house.
                </p>
              </div>
            </div>
  
            <div class="col">
              <div class="testimonial">
                <img src="../images/homeImg/man2.jpg" alt="">
                <div class="name">Anil Katubedda</div>
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
                </div>
  
                <p>
                  Good customer service and pleasant environment
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br><br>
    <center>
        <div class="news">
            <h3><b>Subscribe to our newsletter For exclusive updates</b></h3>
            <form method="POST" action="home.php">
                <input class="formtext" type="email" placeholder="Your Email Address" name ="email" required>
                <br>
                <button type="submit" name="submit">SUBSCRIBE NOW</button>
            </form>
        </div>
    </center>
    <script>
        let btnShow = document.querySelector('button');

        btnShow.addEventListener('click', () =>{
        alert('Successfully Subscribed');
        });
    </script>

    <br><hr><br>
    <center>
        <div class="news">
            <h3><b>Quick Inquirs</b></h3>
            <form method="POST" action="home.php">
                <textarea class="formtext2" rows="8" cols="50" name="inq"></textarea>>
                <br>
                <button type="submit" name="btnsubmit">SUBMIT</button>
            </form>
        </div>
    </center>
    <?php
    if(isset($_POST['submit']))
    {
        $email = $_POST['email'];

        $sql = "INSERT INTO email(email) VALUES('$email')";

        if(mysqli_query($conn, $sql))
        {
            echo"Success";
        }
    } 
    if(isset($_POST['btnsubmit']))
    {
        $inq = $_POST['inq'];

        $sql = "INSERT INTO inquiries(details) VALUES('$inq')";

        if(mysqli_query($conn, $sql))
        {
            echo"Success";
        }
    }
    ?>

    <br><br>
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
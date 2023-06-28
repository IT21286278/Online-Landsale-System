<?php
    include 'paymentConn.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="../css/payment.css">
    <script src="https://kit.fontawesome.com/5b37819dfa.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="header">
        <nav>
            <a href="../php/home.php"><img src="../images/paymentImg/logo.png" class="logo"></a>
            
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
    <br><br>
    <center>
        <form method="POST" action="payment.php">
            <div class="content">
                <h1>Confirm Your Payment</h1>
                <div class="first-row">
                    <div class="owner">
                        <h3>Owner</h3>
                        <div class="inputs">
                            <input type="text" name="name" required>
                        </div>
                    </div>
                    <div class="cvv">
                        <h3>CVV</h3>
                        <div class="inputs">
                            <input type="text" name="cvv" required>
                        </div>
                    </div>
                </div>
                <div class="second-row">
                    <div class="card-no">
                        <h3>Card Number</h3>
                        <div class="inputs">
                            <input type="text" name="cardNumber" required>
                        </div>
                    </div>
                </div>
                <div class="third-row">
                    <h3>Card Number</h3>
                    <div class="selects">
                        <div class="dates">
                            <select name="month" id="month" required>
                                <option value="Jan">Jan</option>
                                <option value="Feb">Feb</option>
                                <option value="Mar">Mar</option>
                                <option value="Apr">Apr</option>
                                <option value="May">May</option>
                                <option value="Jun">Jun</option>
                                <option value="Jul">Jul</option>
                                <option value="Aug">Aug</option>
                                <option value="Sep">Sep</option>
                                <option value="Oct">Oct</option>
                                <option value="Nov">Nov</option>
                                <option value="Dec">Dec</option>
                            </select>
                            <select name="year" id="year" required>
                                <option value="2020">2023</option>
                                <option value="2019">2022</option>
                                <option value="2018">2021</option>
                                <option value="2017">2020</option>
                                <option value="2016">2019</option>
                                <option value="2015">2018</option>
                            </select>
                        </div>
                        <div class="card">
                            <img src="../images/paymentImg/mc.png" alt="">
                            <img src="../images/paymentImg/pp.png" alt="">
                            <img src="../images/paymentImg/vi.png" alt="">
                        </div>
                    </div>    
                </div>
                <!--<a href="">Confirm</a>--> 
                <button type="submit" name="submit">Confirm</button>
            </div>
        </form> 
    </center>
    <?php
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $cvv = $_POST['cvv'];
        $cardNumber = $_POST['cardNumber'];
        $month = $_POST['month'];
        $year = $_POST['year'];

        $sql = "INSERT INTO payment(name, cvv, cardno, month, year) VALUES('$name', '$cvv', '$cardNumber', '$month', '$year')";

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
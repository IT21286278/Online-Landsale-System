
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/SellYourLand.css"> 
	<link rel="stylesheet" href="../css/style.css">
    <script src="https://kit.fontawesome.com/5b37819dfa.js" crossorigin="anonymous"></script>
	<title>Document</title>
</head>
<body class="body">

<div class="header">
        <nav>
		<a href="../php/home.php"><img src="../images/logo/logo.png" class="logo"></a>
            <ul class="nav-links">
				<li><a href="land advertisements.php"><b>LANDS</b></a></li>
                <li><a href="#"><b>SELL YOUR LANDS</b></a></li>
                <li><a href="contactus.php"><b>CONTACT US</b></a></li>
                <li><a href="../html/about.html"><b>ABOUT US</b></a></li>
                <li><a href="login_olss.php"><b>LOGIN</b></a></li>
                <li><a href="signup_olss.php"><b>REGISTER</b></a></li>
                <li><a href="../html/profile.html"><b>PROFILE</b></a></li>
            </ul>
        </nav>
    </div>

	<h1 class="Syl"> SELL YOUR LAND</h1>
    <center><h4 class="para" >Fill this form </h4></center>
	
<div class="container">	
	<div class="full-form">

	<form action="" method="POST">

	<div class="gg">
		<div class="labels">
			  <label for="lType">Land Type : </label>
		</div>
		<div class="input">
			<input type="radio" id="agri " name="Ltype" value="Agricultural">
				<label for="agri">Agricultural  </label> 

				<input type="radio" id="resi " name="Ltype" value="Residential">
				<label for="resi">  Residential</label>  

				<input type="radio" id="com" name="Ltype" value="Commercial">
				<label for="com">Commercial</label>  

				<input type="radio" id="other" name="Ltype" value="Other">
				<label for="other">Other</label><br><br>
			</div>
	</div>

	<div class="gg">
			<div class ="labels">
				<label for="Lsize">Landsize :</label>
			</div>

			<div class="inputs">
				<input type="text" name="lsize" placeholder="Enter your land size"> <br>
			</div>

	</div>

	<div class="gg">
		<div class="labels">
			<label for="Units">Units :</label>
		</div>

		<div class="inputs">
			<select name="units" id="Landunits" >
			  <option value="Purches">purches</option>
			  <option value="meters">m^2</option>
			  <option value="kilometers">km^2</option>
			</select>
		</div>

	</div>

		<div class="gg">
			<div class="labels">
				<label for="Address">Address :</label>
			</div>
			<div class="inputs">
				<input type="text" name="address" placeholder="Enter Land Address">
			</div>
		</div>	
	
	
		<div class="gg">
			<div class="labels">
				<label for="des">Description :</label>
			</div>
			<div class="inputs">
				<textarea name="des" id="description" rows="10" cols="60" > </textarea> 
			</div>
		</div>

		<div class="gg">
			<div class="labels">
				<label for="price">Price(Rs) :</label>
			</div>
			<div class="inputs">
				<input type="text" name="price" placeholder="Price of land">
			</div>
		</div>

	
		<div class="gg">	
			<div class="labels">
				<label for="Lname">Name :</label>
			</div>
			<div class="inputs">
				<input type="text" name="Lname" placeholder="Type your name">
			</div>
		</div>

		<div class="gg">
			<div class="labels">
				<label for="Lemail">Email :</label>
			</div>
			<div class="inputs">
				<input type="text" name="Lemail" placeholder="Type your email">
			</div>

 		</div>

		<div class="gg">
			<div class="labels">
				<label for="num">MobileNo:</label>
			</div>
			<div class="inputs">
				<input type="text" name="num" placeholder="Mobile number">
			</div>
		</div>
		<br>

		
 		<div class="gg">
				<input type="submit" name="sub" value="Submit">
  		</div>
  
		</form>

	</div>
	

	<hr>


	<div class="new">

		<h4 >You can Add photos after the submitting your details</h4>
		
		<div class="up">
			<a href="../php/fileupload.php">
			<button type="submit" name="file" class="pay">GO!</button>
			</a>
		</div>
	</div>	
	

		<div class="new">

		<h4 >You can Make payment after the upload photos ! </h4>
		
		<div class="pay">
			<a href="payment.php">
			<button type="submit" name="payment" class="pay">Pay !</button>
			</a>
		</div>
</div>



		
	


 <?php 



    
    
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "GL";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['sub']))
{
	$lType = $_POST['Ltype'];
	$lSize = $_POST['lsize'];
	$lUnit = $_POST['units'];
	$lAddress = $_POST['address'];
	$lDes = $_POST['des'];
	$lPrize = $_POST['price'];
	$lName = $_POST['Lname'];
	$lEmail = $_POST['Lemail'];
	$lOnum = $_POST['num'];

    $sql = "INSERT INTO landowner (landType,landSize,units,lAddress,descptn,Price,LOname,LOemail,mobileNo)
        VALUES ('$lType','$lSize','$lUnit','$lAddress','$lDes','$lPrize','$lName','$lEmail','$lOnum')";

    if ($conn->query($sql) === TRUE) {
    
    echo "<script>alert(\" your record successfully added!\")</script>";
    } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

?>

<footer class="footer">
  	    <div class="container1">
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
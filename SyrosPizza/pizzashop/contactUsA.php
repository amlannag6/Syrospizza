<?php
	session_start();
	require '../dbconfig/config.php';
?>

<html>
	
	<head>
		<title>Account Contact Us</title>
		<link href="../css/style.css" rel="stylesheet" text="text/css" />
	</head>

	<body>
		<nav>
			<a href = "myAccount.php">MY ACCOUNT</a>
			<a href="menuLogin.php">MENU</a>
			<a href="offersAccount.php">OFFERS</a>
			<a href="howItWorksA.php">HOW IT WORKS</a>
			<a href="contactUsA.php">CONTACT US</a>
			<a href = "#"><form class = "myCartForm" method = "post" action = "menuLogin.php" >			
				<input name = "myCart" type = "submit" class = "myCart" value = "My Cart" />
				<input name = "logout" type = "submit" class = "logoutButton" value="Logout" method="post" /></form></a>
		</nav>
		
		<?php
			if($_SESSION['username']==NULL)
			{
				header("location:index.php");
			}
			if(isset($_POST['myCart']))
			{
				header('location:myCart.php');
			}
			if(isset($_POST['logout']))
			{
				session_destroy();
				header("location:index.php");
			}		
		?>
		
		<div class = "adminHello">
			<br><br><br><br><br><br><br>
			<center><h1>CONTACT US</h1></center>
			<br><br>
		</div><br><br><br><br>
		
		<div id="contactUs">
		
			<h2><center>Please contact us for technical support</center></h2>
			<br><br><hr><br>
			<h4>Address (You can also pick your order up here):</h4>
			<br>SYROS PIZZA<br>133 Palm St, Kamloops, BC V2B 8J8<br>Kamloops, British Columbia<br><br><br>
			<h4>Phone No.</h4>
                         <b><a href="tel:250-574-3351" class="contact-link">250-574-3351</a> </b>
			<h4>Email:</h4>
                         <a href="mailto:hello@company.com" class="contact-link"><b>syrospizza@gmail.com</b></a></p>
			<h4>We are open:</h4>
			Monday to Friday - 11:00 AM to 12:00 PM <br>Saturday/Sunday - 11:00 am to 8:00 pm<br><br>
			
		</div>
		
		<br><br><br><br><br><br><br><br><br>
		<div class = "#">
			<br><br><center>
			<p class = "imageHead">Connect with us on social media:</p><br>
			<a href = "https://www.facebook.com/"><img src = "../resources/social/facebook.jpg" class = "social" /></a> &nbsp;
			<a href = "https://twitter.com/"><img src = "../resources/social/twitter.png" class = "social" /></a> &nbsp;
			<a href = "https://www.instagram.com/"><img src = "../resources/social/instagram.jpg" class = "social" /></a> &nbsp;
			<a href = "https://m.youtube.com/"><img src = "../resources/social/youtube.jpg" class = "social" /></a> &nbsp;
			<br><br><br><br>
			<p class = "imageHead"><a class = "terms" href = "termsofuse.php">Terms of Use</a><br><br><a class = "terms" href = "privacystatements.php">Privacy Statement</a><br><br><a class = "terms" href = "feedbackform.php">Leave Feedback</a><br><br><a class = "terms" href = "aboutus.php">About Us</a></p>
			</center>
			
		</div>
	</body>
</html>

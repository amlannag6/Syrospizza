<?php
	session_start();
	require '../dbconfig/config.php';
?>

<html>
	
	<head>
		<title>Order Confirmation</title>
		<link href="../css/style.css" rel="stylesheet" text="text/css" />
	</head>

	<body>
		<nav>
			<a href = "myAccount.php">MY ACCOUNT</a>
			<a href="menuLogin.php">MENU</a>
			<a href="offersAccount.php">OFFERS</a>
			<a href="howItWorksA.php">HOW IT WORKS</a>
			<a href="contactUsA.php">CONTACT US</a>
			<a href = "#"><form class = "myCartForm" method = "post" action = "orderConfirmation.php" >			
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
			<center><h1>ORDER CONFIRMATION</h1></center>
			<br><br>
		</div><br><br><br><br>
		
		<div class = "ordConf">
			<center><h2>Your Order has been received successfully.</h2><center>
			<br><br><center><p>Please visit the "MY ACCOUNT" page to see your Order Status and History.</p></center>
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
			</center>s			
		</div>
	</body>
</html>















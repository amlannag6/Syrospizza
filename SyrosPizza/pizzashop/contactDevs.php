
<?php
	session_start();
	require '../dbconfig/config.php';	
?>

<html>
	<head>
		<title>Post Offers</title>
		<link href="../css/style.css" rel="stylesheet" text="text/css" />
	</head>

	<body>
		
		<nav>
			<a href="adminAcc.php">ACCOUNT DETAILS</a> 
			<a href="adminCustInfo.php">CUSTOMER INFO / ORDERS</a>
			<a href="adminPostOffers.php">POST OFFERS</a>
			<a href="#">CONTACT DEVELOPERS</a>
			<a href = "#"><form class = "myCartForm" method = "post" action = "menuLogin.php" >			
				<input name = "logout" type = "submit" class = "logoutButton" value="Logout" method="post" /></form></a>
		</nav>
		
		<?php
			if($_SESSION['aUsername']==NULL)
			{
				header("location:index.php");
			}
			if(isset($_POST['logout']))
			{
				session_destroy();
				header("location:index.php");
			}		
		?>
		
		
		<div class = "adminHello">
			<br><br><br><br><br><br><br>
			<center><h2>Administrator Account - <?php echo $_SESSION['aUsername']; ?></h2></center>
			<br><br>
		</div><br><br><br><br>
		
		<div id="contactUs">
		<center><h2>Developer Contact Information</h2></center><br><br><br>
			Please contact the developers with the information provided below :
			<br><br><hr><br>
			<h3>Amlan Nag</h3><br>
			<h4>Email</h4>
                       <a href="mailto:hello@company.com" class="contact-link"><b>amlannag6@gmail.com</b></a></p>
                         <br><br><hr><br>
                       <h4>Phone: </h4>
                       <b><a href="tel:250-574-3351" class="contact-link">250-574-3351</a> </b>
                         <br><br><hr><br>
                         <h3>See all other projects of developer and Connect with :  </h3>
                        <a href = "https://github.com/amlannag6"><img src = "../resources/social/Git.png" class = "social" /></a> &nbsp;
                        <a href = "https://www.linkedin.com/in/amlan-nag-a923b6135"><img src = "../resources/social/link.png" class = "social" /></a> &nbsp;
			<a href = "https://www.facebook.com/amlan.nag.5/"><img src = "../resources/social/facebook.jpg" class = "social" /></a> &nbsp;

		</div>
		
		<br><br><br><br><br><br><br><br><br>
		<div class = "#">
			<br><br><center>
			<p class = "imageHead">Connect with us on social media:</p><br>
			<a href = "https://www.facebook.com/"><img src = "../resources/social/facebook.jpg" class = "social" /></a> &nbsp;
			<a href = "https://twitter.com/"><img src = "../resources/social/twitter.png" class = "social" /></a> &nbsp;
			<a href = "https://www.instagram.com/"><img src = "../resources/social/instagram.jpg" class = "social" /></a> &nbsp;
			<a href = "https://m.youtube.com/"><img src = "../resources/social/youtube.jpg" class = "social" /></a> &nbsp;
                        <a href = "https://github.com/amlannag6"><img src = "../resources/social/Git.png" class = "social" /></a> &nbsp;
			<br><br><br><br>
			<p class = "imageHead"><a class = "terms" href = "termsofuse.php">Terms of Use</a><br><br><a class = "terms" href = "privacystatements.php">Privacy Statement</a><br><br><a class = "terms" href = "feedbackform.php">Leave Feedback</a><br><br><a class = "terms" href = "aboutus.php">About Us</a></p>
			</center>
		
		</div>
		
	</body>
</html>	
		
		
		
		
		
		
		
		
		
		
		
		
		
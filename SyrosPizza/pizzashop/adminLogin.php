
<?php
	require '../dbconfig/config.php';
?>

<html>
	<head>
		<title><i>SYROS Pizza</i></title>
		<title><i>TRADITIONAL PIZZERIA</i></title>
			<title><i>SINCE 1969</i></title>
		<link href="../css/style.css" rel="stylesheet" text="text/css" />
	</head>

	<body>
		
		<nav>
			<a href="index.php">HOME</a>
			<a href="menu.php">MENU</a>
			<a href="howItWorks.php">HOW IT WORKS</a>
			<a href="contactUs.php">CONTACT US</a>
		</nav>
		
		<div class = "adminHello">
			<br><br><br><br><br><br><br>
			<center><h1>SYROS PIZZA</h1></center>
			<center><h3><i>TRADITIONAL PIZZERIA</i></h3></center>
			<center><h4>SINCE 1969</h4></center>
			<br><br>
		</div>
		
		<br><br><br><br><br>
		
		<div id="mainLogin">
			<center><h2>Administrator Login</h2></center>
			<center><img src="../resources/login/Lpizza.jpg" class="LoginImg" /></center>
			
			<form class="lForm" action="adminLogin.php" method="post"><br>
				<Label><b>Admin Username</b></Label><br>
				<input name="aUsername" type="text" class="userPass" placeholder="Enter your Username" required /><br><br>
				
				<Label><b>Admin Password</b></Label><br>
				<input name="aPassword" type="password" class="userPass" placeholder="Enter your Password" required /><br><br><br>
			
				<input name="aSignIn" type="submit" id="lButton" value="Login" /><br><br>
				<a href="index.php"><input type="button" id="rButton" value="Back to Home" /></a><br><br>
				
			<?php
				if(isset($_POST['aSignIn']))
				{
					$aUsername = $_POST['aUsername'];
					$aPassword = md5($_POST['aPassword']);
					
					$querry = "SELECT aUsername,aPassword FROM adminTable WHERE aUsername = '$aUsername' AND aPassword = '$aPassword'";
					$querry_run = mysqli_query($connect,$querry);
					
					if(mysqli_num_rows($querry_run) == 1)
					{
						session_start();
						$_SESSION['aUsername'] = $aUsername;
						header('location:adminAcc.php');
					}
					else
					{
						echo'<script type="text/javascript">alert("Invalid Credentials, Please check your Username and Password")</script>';
					}
				}
			?>
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
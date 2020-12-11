<?php
	require '../dbconfig/config.php';	
?>

<html>
	<head>
		<title>Admin Registration Page</title>
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
			<center><h2>SYROS PIZZA</h2></center>
			<br><br>
		</div>
		
		<br><br><br><br><br>		
		
		<div id="mainLogin">
		
			<center><h2>Admin Register Now!</h2></center>
			
			<center><img src="../resources/login/Lpizza.jpg" class="LoginImg" /></center>
			
			<form class="lForm" action="adminreg.php" method="post"><br>
				
				<Label><b>Username</b></Label><br>
				<input name="aUsername" type="text" class="userPass" placeholder="Enter your Username" required/><br><br>
				
				<Label><b>Password</b></Label><br>
				<input name="nPassword" type="password" class="userPass" placeholder="Enter your Password" required/><br><br>
				
				<Label><b>Confirm Password</b></Label><br>
				<input name="cPassword" type="password" class="userPass" placeholder="Re-Enter your Password" required/><br><br>
				
				<Label><b>Phone Number</b></Label><br>
				<input  name="phNumber" type="text" class="userPass" placeholder="Enter your Phone Number" required/><br><br>

				<Label><b>First Name</b></Label><br>
				<input name="fName" type="text" class="userPass" placeholder="Enter your First Name" required/><br><br>
				
				<Label><b>Last Name</b></Label><br>
				<input name="LName" type="text" class="userPass" placeholder="Enter your Last Name" required/><br><br>

				<Label><b>ID-Number</b></Label><br>
				<input name="idNUMBER" type="text" class="userPass" placeholder="Enter your ID-Number" required/><br><br>
			
				<Label><b>Designation</b></Label><br>
				<input name="designation" type="text" class="userPass" placeholder="Enter your designation" required/><br><br>
						
				<input name="signUp" type="submit" id="lButton" value="Sign-Up" /><br><br>
			
				<a href="index.php"><input type="button" id="backToLogin" value="Back to Login" /></a></form><br><br>
			
		</div>
				
		<?php
			if(isset($_POST['signUp']))
			{
				
				$aUsername = $_POST['aUsername'];
				$nPassword = md5($_POST['nPassword']);
				$cPassword = md5($_POST['cPassword']);
				$phNumber = $_POST['phNumber'];
				$fName = $_POST['fName'];
				$LName = $_POST['LName'];
				$idNUMBER = $_POST['idNUMBER'];
				$designation = $_POST['designation'];				
				if($nPassword==$cPassword)
				{
					$querry = "SELECT aUsername FROM adminTable WHERE aUsername = '$aUsername'";
					$querry_run = mysqli_query($connect,$querry);
					if(mysqli_num_rows($querry_run) > 0)
					{
						echo '<script type="text/javascript">alert("Username already exists, Please Enter another username")</script>';
					}
					else if(is_numeric($fName))
					{
						echo '<script type="text/javascript">alert("Please enter a valid First Name")</script>';
					}
					else if(is_numeric($LName))
					{
						echo '<script type="text/javascript">alert("Please enter a valid Last Name")</script>';
					}
					else if(!is_numeric($phNumber))
					{
						echo '<script type="text/javascript">alert("Please enter a valid Phone Number")</script>';
					}
					else
					{
						$querry = "INSERT INTO adminTable VALUES('$idNUMBER', '$aUsername', '$nPassword', $phNumber, '$fName', '$LName', '$designation')" ;
						$querry_run = mysqli_query($connect,$querry);
					
					
						if($querry_run)
						{
							echo'<script text="text/javascript">alert("Registered Successfully, You can now Login!")</script>';
						}
						else
						{
							echo'<script text="text/javascript">alert("Error while registering, Please contact us!")</script>';
						}	
					}
				}
				else
				{
					echo'<script type="text/javascript"> alert("Please make sure that the passwords match")</script>';
				}
			}
		?>
		
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



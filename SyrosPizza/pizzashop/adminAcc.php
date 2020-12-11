
<?php
	session_start();
	require '../dbconfig/config.php';	
?>

<html>
	<head>
		<title>Administrator Account</title>
		<link href="../css/style.css" rel="stylesheet" text="text/css" />
	</head>

	<body>
		
		<nav>
			<a href="#">ACCOUNT DETAILS</a> 
			<a href="adminCustInfo.php">CUSTOMER INFO / ORDERS</a>
			<a href="adminPostOffers.php">POST OFFERS</a>
			<a href="contactDevs.php">CONTACT DEVELOPERS</a>
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
		
		
		<div class = "adminHome">
			
			<?php
				$username = $_SESSION['aUsername'];
				$attribute = array('ID Number','Phone Number','First Name','Last Name','Designation');
				$qry = "SELECT idNumber, phNumber, fName, lName, designation FROM adminTable WHERE aUsername = '$username'";
				$qry_run = mysqli_query($connect,$qry);
				if($qry_run && mysqli_num_rows($qry_run) == 1)
				{
					echo '<h2><center>Account Details</center></h2><br><br>';
					while($row = mysqli_fetch_row($qry_run))
					{
						echo '<h3>';
						echo $attribute[0];
						echo '</h3><br>';
						echo $row[0];
						echo '<br><br><br>';
						
						echo '<h3>';
						echo $attribute[1];
						echo '</h3><br>';
						echo $row[1];
						echo '<br><br><br>';
						
						echo '<h3>';
						echo $attribute[2];
						echo '</h3><br>';
						echo $row[2];
						echo '<br><br><br>';
						
						echo '<h3>';
						echo $attribute[3];
						echo '</h3><br>';
						echo $row[3];
						echo '<br><br><br>';
						
						echo '<h3>';
						echo $attribute[4];
						echo '</h3><br>';
						echo $row[4];
						echo '<br><br><br>';
						
					}
				}
			?>
			
		</div>
		
		<br><br><br><br><br><br><br><br><br>
		<div class = "#">
			<br><br><center>
			<p class = "imageHead"><b>Connect with us on social media:</b></p><br>
			<a href = "https://www.facebook.com/"><img src = "../resources/social/facebook.jpg" class = "social" /></a> &nbsp;
			<a href = "https://twitter.com/"><img src = "../resources/social/twitter.png" class = "social" /></a> &nbsp;
			<a href = "https://www.instagram.com/"><img src = "../resources/social/instagram.jpg" class = "social" /></a> &nbsp;
			<a href = "https://m.youtube.com/"><img src = "../resources/social/youtube.jpg" class = "social" /></a> &nbsp;
			<br><br>
			<p class = "imageHead"><a class = "terms" href = "termsofuse.php">Terms of Use</a><br><br><a class = "terms" href = "privacystatements.php">Privacy Statement</a><br><br><a class = "terms" href = "feedbackform.php">Leave Feedback</a><br><br><a class = "terms" href = "aboutus.php">About Us</a></p>
			</center>
		
		</div>
	</body>

</html>
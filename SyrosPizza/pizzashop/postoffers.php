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
			<a href="index.php">HOME</a>
			<a href="menu.php">MENU</a>
			<a href="howItWorks.php">HOW IT WORKS</a>
			<a href="contactUs.php">CONTACT US</a>
			<a href="postoffers.php">VIEW OFFERS</a>
		</nav>
		
		<div class = "adminHello">
			<br><br><br><br><br><br><br>
			<center><h2>SYROS PIZZA</h2></center>
			<br><br>
		</div>
      <div class = "postOfferDiv">
      <?php
                    $qry1 = "SELECT * FROM offersTable";
					$qry1_run = mysqli_query($connect,$qry1);
					$parameters = array('Offer ID No.','Offer Heading','Offer Description');
					echo '<center><h2>All Offers</h2></center><br>';
					if(mysqli_num_rows($qry1_run) >= 1)
					{
						    while($row = mysqli_fetch_row($qry1_run))
							{
								echo '<br><hr><br>';
								echo '<div class = "displayOfferWhile">';

								echo '<h3>';
								echo $parameters[0];
								echo '</h3>';
								echo '<br>';
								echo $row[0];
								echo '<br><br>';
								
								echo '<h3>';
								echo $parameters[1];
								echo '</h3>';
								echo '<br>';
								echo $row[1];
								echo '<br><br>';
								
								echo '<h3>';
								echo $parameters[2];
								echo '</h3>';
								echo '<br>';
								echo $row[2];
								echo '<br><br>';
								
								echo '</div>';
					        }
				    }
					else
					{					
						echo '<br><br><center>No current offers posted</center>';
					}	

	    ?>
	<br><br><br><br><br><br><br><br><br>
		<div class = "#">
		    <br><br><center>
			<b><p id="contactUs">Connect with us on social media:</p></b><br>
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

<?php
	$connect = mysqli_connect("localhost",'username','password') or die("Error connecting to SQL Server, Please contact Administrator.");
	mysqli_select_db($connect,"database tabel name");
?> 

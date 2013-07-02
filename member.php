<?php
	session_start();  //session_start needs to be in every member page

	if($_SESSION['username'])
		echo "Welcome, ".$_SESSION['username']."!<br><a href='logout.php'>Logout</a>";
	else
		die("Please log back in!");

?>
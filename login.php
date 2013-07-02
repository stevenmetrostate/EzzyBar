<?php
	session_start();

	$username = $_POST['username'];
	$password = $_POST['password'];
	$error = $_POST['error'];
	
	if($username&&$password){
		$connect = mysql_connect("localhost","root","password") or die("Cannot connect to database.");
		mysql_select_db("ezzybar") or die("Cannot find database.");
		
		$query = mysql_query("SELECT * FROM users WHERE username='$username'"); //searches for what is in username field
		$numrows = mysql_num_rows($query);	//gets # of results where $username is in the DB
		
		if($numrows!=0){
			while ($row = mysql_fetch_assoc($query)){	//gets all usernames and stores into an array
				$dbusername = $row['username'];	
				$dbpassword = $row['password'];
			}
			//check to see if they match
			if($username==$dbusername&&$password==$dbpassword){
				("Login successful! <a href='member.php'>Click</a> here to enter page!");				//successful if username and password matches
				$_SESSION['username'] = $dbusername;
			}
			else
				echo("Bad username or password.");		//fails if username and password does not match
			
		}
		else
			die("Bad username or password");			//fails if username does not exist in db
		
	}
	else
		die("Please enter a username and password.");	//fails if no username/password is entered

?>
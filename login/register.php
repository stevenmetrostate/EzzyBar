<?php
error_reporting (E_ALL ^ E_NOTICE);
session_start();
$userid=$_SESSION['userid'];
$username=$_SESSION['username'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<meta content="en" name="language">
<link media="screen, projection" href="./screen.css" type="text/css" rel="stylesheet">
<link media="print" href="./print.css" type="text/css" rel="stylesheet">
<link href="./main.css" type="text/css" rel="stylesheet">
<link href="./form.css" type="text/css" rel="stylesheet">
<title>My Web Application - Register</title>
</head>
<body>
<div id="page" class="container">
<div id="header">
<div id="logo">EZZYBAR</div>
</div>
<div id="mainmenu">
<ul id="yw0">
<li>
<a href="http://localhost/login/index.php">Login</a>
</li>
</ul>
</div>
<div id="content">
<h1>
Register
</h1>
<?php

	if ($username && $userid) {
		if($_POST['registerbtn']){
			$getfname=$_POST['fname'];
			$getlname=$_POST['lname'];
			$getuser=$_POST['user'];
			$getpass=$_POST['pass'];
			$getconfirmpass=$_POST['confirmpass'];
			$getrole = $_POST['role'];
			
			if($getfname){
				if($getlname){
					if($getuser){
						if($getpass){
							if($getconfirmpass){	
								if($getpass === $getconfirmpass){
									if($getrole){
										require("connect.php");
										$query = mysql_query("SELECT * FROM tbl_employee WHERE username='$getuser'");
										$numrows = mysql_num_rows($query);
										echo"$numrows";
											if($numrows == 0){
													//$password = md5(md5("dkkdakdjfl".$password."dlfkdlfdsl"));
													mysql_query("INSERT INTO tbl_employee(username,firstName,lastName,role,password) VALUES(
														'$getuser','$getfname','$getlname','$getrole','$getpass'
													)");
													$query = mysql_query ("SELECT * FROM tbl_employee WHERE username='$getuser'");
													$numrows =mysql_num_rows($query);
														if($numrows == 1){
															$getfname='';
															$getlname='';
															$getuser='';
															$getpass='';
															$getrole='';
															
															echo "You are registered. You may <a href='./index.php'>log in</a>";
														}
														else 
															$errormsg = "An error has occured. The account is not created"; 
											
											}		
											else
												$errormsg ="There is already a user with that username";
										
										mysql_close();
									}
									else
										$error = "You must enter your role to register";
										
								}
								else
									$errormsg = "Your password did not match.";
							}
							else
								$errormsg = "You must retype your password to register";
						}
						else
							$errormsg = "You must enter your password to register";
					}
					else
						$errormsg = "You must enter your user name to register";
				}
				else
					$errormsg = "You must enter your last name to register";
			}
			else
				$errormsg = "You must enter you first name to register";
		}
		
		$form = "<form action='./register.php' method='post'>
		<table>
		<tr>
			<td></td>
			<td><font color='red'>$errormsg</font></td>
		</tr>
		<tr>
			<td>First Name:</td>
			<td><input type='text' name='fname' value='$getfname'/></td>
		</tr>
		<tr>
			<td>Last Name:</td>
			<td><input type='text' name='lname' value='$getlname'/></td>
		</tr>
		<tr>
			<td>Username:</td>
			<td><input type='text' name='user' value='$getuser'/></td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input type='password' name='pass' value='$getpass'/></td>
		</tr>
		<tr>
			<td>Confirm Password:</td>
			<td><input type='password' name='confirmpass' value=''/></td>
		</tr>
		<tr>
			<td>Role:</td>
			<td><input type='text' name='role' value='$getrole'/></td>
		</tr>
		<tr>
			<td></td>
			<td><input type='submit' name='registerbtn' value='register'/></td>
		</tr>
		
		</table>
		</form>";
		
		echo "$form";
		
	} else {
		$login_page='./index.php';
		header('Location:' .$login_page);
	}
	?>
		
</div>
<div class="clear"></div>
<div id="footer">
Copyright © 2013 by My Company.
<br>
All Rights Reserved.
<br>
Powered by
<a rel="external" href="http://www.yiiframework.com/">Yii Framework</a>
.
</div>
</div>
</body>
</html>
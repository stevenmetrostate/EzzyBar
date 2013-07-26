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
<title>My Web Application - Reset Password</title>
</head>
<body>
<div id="page" class="container">
<div id="header">
<div id="logo">EZZYBAR</div>
</div>
<div id="mainmenu">
<ul id="yw0">
<li>
<a href="/index.php?r=site/login">Login</a>
</li>
</ul>
</div>
<div id="content">
<h1>
Reset Password
</h1>
<?php
		
		if($username && $userid){
			if($_POST['resetpass']){
				//get the form data
				$pass = $_POST['pass'];
				$newpass = $_POST['newpass'];
				$confirmpass = $_POST['confirmpass'];
				if($pass){
					if($newpass){
						if($confirmpass){
							if($newpass === $confirmpass){
								require("connect.php");
								
								//make sure the password is correct
								$query = mysql_query("SELECT * FROM tbl_employee WHERE username='$username' AND password='$pass'");
								$numrows = mysql_num_rows($query);
								if($numrows == 1){
									
									//update the db with new password
									mysql_query("UPDATE tbl_employee SET password='$newpass' WHERE username='$username'");
									
									//make sure the password was changed
									$query = mysql_query("SELECT * FROM tbl_employee WHERE username='$username' AND password='$newpass'");
									$numrows = mysql_num_rows($query);
									if($numrows == 1){
										echo"The password has been reset, Click here to <a href='./logout.php'>Logout </a>";
									}
									else
										echo"An error has occured and your password was not reset";
								}
								else
									echo"Your current password is incorrect";
								mysql_close();
							}
							else
								echo"";
						}
						else 
							echo"You must confirm password";
					}
					else
						echo"You must enter your new password";
				
				}
				else
					echo"You must enter you current password";
			
			}
			echo"<form action='./resetpass.php' method='post'>
			<table>
				<tr>
					<td>Password:</td>
					<td><input type='password' name='pass'/></td>
				</tr>
				<tr>
					<td>New Password:</td>
					<td><input type='password' name='newpass'/></td>
				</tr>
				<tr>
					<td>Confirm Password:</td>
					<td><input type='password' name='confirmpass'/></td>
				</tr>
				<tr>
					<td> </td>
					<td><input type='submit' name='resetpass' value='Reset Password'/></td>
				</tr>
			</table>	
			</form>";
		}
		else
			echo"Please login to access this page.<a href='./index.php'>Login here</a>";
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
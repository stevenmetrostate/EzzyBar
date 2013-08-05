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
<link href="CRISPY.CSS" rel="stylesheet" type="text/css" />
<title>My Web Application - Log in</title>
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
Log in

</h1>
<?php
			if($username && $userid){
				echo "You are already logged in as <b>$username</b>. <a href='./manager.php'>Click here </a> to go to the manager page";
			}
			else{
				
				$form = "<form action='./index.php' method='post'>
				<table id=gradient-style>
				<tr>
					<td>Username:</td>
					<td><input type='text' name='user' /></td>
				</tr>
					<tr>
					<td>Password:</td>
					<td><input type='password' name='password' /></td>
				</tr>
				<tr>
					<td></td>
					<td><input type='submit' name='loginbtn' value='Login' /></td>
				</tr>
				</table>
				</form>";
				
				if($_POST['loginbtn']){
					$user = $_POST['user'];
					$password = $_POST['password'];
					if($user){
						if($password){
							require("connect.php");
							//$password = md5(md5("dkkdakdjfl".$password."dlfkdlfdsl"));
							$query=mysql_query("SELECT * FROM tbl_employee WHERE username='$user' ");
							$numrows=mysql_num_rows($query);
							if($numrows==1){
							   $row=mysql_fetch_assoc($query);
								$dbid=$row['employeeID'];
								$dbuser=$row['username'];
								$dbpass=$row['password'];
								$dbstatus=$row['status'];
								
								if($password == $dbpass){
									if($dbstatus==1){
										//set session info
										$_SESSION['username']=$dbuser;
										$_SESSION['userid']=$dbid;
										echo"You have been logged in as <b>$dbuser</b>. <a href='./manager.php' style='text-decoration:none';>Click here </a> to go to the manager page</br>";
										
									}
									else
										echo "You need to activate account to login.$form";
								}
								else
									echo"You did not enter the correct password.$form";
							}
							else
								echo"The username you entered was not found.$form";
							mysql_close();
						}
						else
							echo "You must enter your password. $form";
					}
					else
						echo"You must enter you username.$form";
				}
				else
					echo $form;
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
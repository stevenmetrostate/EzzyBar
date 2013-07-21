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
<link href ="crispy.css" type="text/css" rel="stylesheet">
<title>My Web Application - Manager Page</title>
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
Welcome To
<i>The Manager Page</i>
</h1>
<?php

		if($username && $userid){
			echo"Welcome <b>$username</b>, <a href='./logout.php'style='text-decoration:none;'> Log out</a></br>";
			echo"</br>Click here to <a href='./register.php' style='text-decoration:none;'>Register</a></br>";
			echo"</br>Click here to <a href='./resetpass.php' style='text-decoration:none;'>Reset Password</a>";
			echo"</br>Click here to <a href='./viewEmployee.php' style='text-decoration:none;'>Access Employee Records</a>";
            
            echo"</br>Click here to <a href='./view.php' style='text-decoration:none;'>Access StaffList Records</a>";
		}
		else
			echo"Please login to access this page.<a href='./index.php'style='text-decoration:none;'> Login here</a>";
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
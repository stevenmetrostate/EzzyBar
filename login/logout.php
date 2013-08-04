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
<title>My Web Application - Log out</title>
</head>
<body>
<div id="page" class="container">
<div id="header">
<div id="logo">EZZYBAR</div>
</div>
<div id="mainmenu">
<ul id="yw0">
<li>
<a href="http://localhost/login/index.php">Log in</a>
</li>
</ul>
</div>
<div id="content">
<h1>
Welcome to
<i>My Web Application</i>
</h1>
<?php
		
		if($username && $userid){
			session_destroy();
			echo"You have been logged out. <a href='./manager.php' style='text-decoration:none;'>Click here</a> to go to the manager page";
		}
		else
			echo"You are not logged in";
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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
	<head>
		<?php
			require "orderqueue.php";
			error_reporting (E_ALL ^ E_NOTICE);
			session_start();
			$userid=$_SESSION['userid'];
			$username=$_SESSION['username'];
		?>
	
		<link rel="shortcut icon" href="usa.ico" > <!--adds icon to browser tab-->
		<title>EzzyBar - Bartender Screen</title>
		
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/ezzybarTheme/jquery-ui-1.10.3.custom.css" />
		
	</head>
	
	<body >
		<h1 align="center" >EzzyBar</h1>
		<h2 align="center" >Bartender Screen</h2>
		
		<div align="right">
			<a href="../employee/manager.php">Settings</a>
			<a href="logout.php">Logout</a>
		</div>
		
		<!--Current Drink Order-->
		<fieldset>
		<div align="center" id="serving">
			<h2>Currently Serving</h2>
				<div align="right" id="status">
					<span class="word">Ready to Serve</span><input type="radio" name="state" id="ready" /><br/>
					<span class="word">Idle</span><input type="radio" name="state" id="idle" checked /><br/>
				</div>
				<div id="cServing"><?php topinqueue(); ?></div>
			
			<input type="button" id="finishOrder" name="finishOrder" value="Finish Serving" />
		</div>
		</fieldset>
		
		<!--Queue-->
		<fieldset>
		<div align="center" id="queue">
			<h2>Order Queue</h2>
				<div id="orderqueue"><?php getqueue(); ?></div>
		</div>
		</fieldset>
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script type="text/javascript" src="../js/jquery-1.9.1.js"></script>
		<script type="text/javascript" src="../js/jquery-ui-1.10.3.custom.js"></script>
		<script type="text/javascript" src="../js/bartender.js"></script>
	</body>

</html>
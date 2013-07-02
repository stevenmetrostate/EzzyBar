<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
	<head>
		<link rel="shortcut icon" href="usa.ico" > <!--adds icon to browser tab-->
		<title>EzzyBar - Bartender Screen</title>
		<script type="text/javascript" src="js/bartender.js"></script>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
	</head>
	
	<body>
	<a href="settings.php">Settings</a>
	<a href="logout.php">Logout</a>
		
		<!--Current Drink Order-->
		<fieldset>
			<h2>Currently Serving</h2>
			<input type="checkbox" name="idle" />Idle<br/>
			<textarea readonly>
				<!--TODO: get current drink order from Queue-->
			</textarea>
		</fieldset>
		
		<!--Queue-->
		<fieldset>
			<h2>Order Queue</h2>
				<!--TODO: get Queue information-->
		</fieldset>
		
	</body>

</html>
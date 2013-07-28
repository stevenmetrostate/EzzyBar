<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
	<head>
		<link rel="shortcut icon" href="usa.ico" > <!--adds icon to browser tab-->
		<title>EzzyBar - Bartender Screen</title>
		
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/ezzybarTheme/jquery-ui-1.10.3.custom.css" />
		
	</head>
	
	<body>
		
	
	<div align="right">
		<a href="manager.php">Settings</a>
		<a href="logout.php">Logout</a>
	</div>
		
		<!--Current Drink Order-->
		<fieldset>
		<div align="center" id="serving">
			<h2>Currently Serving</h2>
				<div id="cServing">
					
				</div>
			<div align="right" id="status">
				Ready to Serve<input type="radio" name="state" value="ready"/><br/>
				Idle<input type="radio" name="state" value="idle"/><br/>
			</div>
			<input type="button" name="finishDrink" value="Finish Serving" />
		</div>
		</fieldset>
		
		<!--Queue-->
		<fieldset>
		<div align="center" id="queue">
			<h2>Order Queue</h2>
				<textarea readonly>
					<!--TODO: get Queue-->
				</textarea>
		</div>
		</fieldset>
		
		<script type="text/javascript" src="js/bartender.js"></script>
		<script type="text/javascript" src="js/jquery-1.9.1.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.10.3.custom.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.10.3.custom.min.js"></script>
	</body>

</html>
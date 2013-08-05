<!DOCTYPE html>
<html>
	<head>
		<title>EzzyBar - Order Here</title>
		
		<?php
			include "getDrinks.php";
		?>
		
		<link rel="stylesheet" type="text/css" href="../css/ezzybarTheme/jquery-ui-1.10.3.custom.css">
		<link rel="stylesheet" type="text/css" href="../css/global.css">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
	</head>
	<body>
	<div id="wrapper">
		<header><h1>EzzyBar</h1></header>
			<div id="tabs">
				<ul>
					<li><a href="#domestic">Domestic Beer</a></li>
					<li><a href="#imported">Imported Beer</a></li>
					<li><a href="#tap">Beer on Tap</a></li>
					<li><a href="#liquor">Liquor</a></li>
					<li><a href="#mixed">Mixed Drinks</a></li>
					<li><a href="#wine">Wine</a></li>
					<li><a href="#non-alcoholic">Non-Alcoholic</a></li>
				</ul>
				
				<div id="domestic">
					<fieldset id="screen" name="screen">
						<?php getDom(); ?>
					</fieldset>

				</div>
				<div id="imported">
					<fieldset id="screen" name="screen">
						<?php getImp(); ?>
					</fieldset>

				</div>
				<div id="tap">
					<fieldset id="screen" name="screen">
						<?php getTap(); ?>
					</fieldset>					

				</div>
				<div id="liquor">
					<fieldset id="screen" name="screen">
						<?php getLiq(); ?>
					</fieldset>					

				</div>
				<div id="mixed">
					<fieldset id="screen" name="screen">
						<?php getMix(); ?>
					</fieldset>					
					
				</div>
				<div id="wine">
					<fieldset id="screen" name="screen">
						<?php getWin(); ?>
					</fieldset>					

				</div>
				<div id="non-alcoholic">
					<fieldset id="screen" name="screen">
						<?php getNon(); ?>
					</fieldset>
		
				</div>
				<fieldset id="cart" name="cart">
					<div id="carts" >
						<?php getCart(); ?>
					</div>
					<div id="addtocart"></div>
				</fieldset>
				<form action="Payment.php" method="POST" id="payment" >
					<input type="submit" id="pay" value="Pay Now" />
					<input type="button" id="resetAll" value="Reset Cart" />
				</form>
			</div>

		<footer>
			<p>EzzyBar Inc. | CopyNotRighted</p>
		</footer>
		
	</div>
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script type="text/javascript" src="../js/jquery-1.9.1.js"></script>
		<script type="text/javascript" src="../js/jquery-ui-1.10.3.custom.js"></script>
		<script type="text/javascript" src="../js/customerJS.js"></script>
		<script type="text/javascript" src="../js/customer.js"></script>
	</body>

</html>
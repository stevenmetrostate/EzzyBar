<?php
	require "database.php";
	$checkoutID = 1;
	$cartID = 1;
	
	$query = mysql_query("SELECT * FROM tbl_cart WHERE Cart_ID = '$cartID'");
	while($row = mysql_fetch_array($query)){
		$id = $row["Drink_ID"];
		$qty = $row["QTY"];
		$cid = $row["Cart_ID"];
		
		$sql = "INSERT INTO tbl_checkout (Checkout_ID, Drink_ID, QTY, Cart_ID)
		VALUES ('$checkoutID','$id','$qty','$cid')";
		
		mysql_query($sql);
	}
	
	//$query1 = mysql_query("SELECT * FROM tbl_totalprice WHERE Cart_ID = '$cartID'");
?>
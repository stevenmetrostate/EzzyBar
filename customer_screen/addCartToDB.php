<?php
	require "database.php";
	
	$query = mysql_query("SELECT Checkout_ID FROM tbl_checkout ORDER BY Checkout_ID DESC LIMIT 1");
	$num = mysql_num_rows($query);
	
	if($num == 0){
	$checkoutID = 1;
	}
	else{
		$row = mysql_fetch_array($query);
		$checkoutID = $row["Checkout_ID"] + 1;
	}
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
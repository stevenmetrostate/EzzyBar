<?php
	require "database.php";
	
	$drinkID = $_POST['drinkID'];
	$cartID = 1;
	
	$query = mysql_query("SELECT * FROM tbl_cart WHERE Drink_ID = '$drinkID' AND Cart_ID = '$cartID'");
	$row = mysql_fetch_array($query);
	$qty = $row["QTY"];
	$qty = $qty - 1;
	
	$query = mysql_query("SELECT Drink_Price FROM tbl_drinks WHERE Drink_ID = '$drinkID'");
	$row = mysql_fetch_array($query);
	$drinkPrice = $row["Drink_Price"];
	
	$drinkPrice = $drinkPrice * $qty;
	
	if($qty == 0){
		$sql1 = "DELETE FROM tbl_cart WHERE Drink_ID = '$drinkID'";
		mysql_query($sql1);
		
	}
	else{
		$sql2 = "UPDATE tbl_cart SET QTY=$qty, Drink_Price=$drinkPrice WHERE Drink_ID = '$drinkID' and Cart_ID = '$cartID'";
		mysql_query($sql2);
	}

?>
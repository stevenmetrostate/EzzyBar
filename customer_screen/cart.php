<?php
	require "database.php";
	
	$drinkID = $_POST['drinkID'];
	$cartID = 1;
	
	$query = mysql_query("SELECT QTY FROM tbl_cart WHERE Drink_ID = '$drinkID' AND Cart_ID = '$cartID'");
	$row = mysql_fetch_array($query);
	$qty = $row["QTY"];
	$qty = $qty + 1;
	
	//checks to make sure there are any drink_id in table and saves row
	$query = mysql_query("SELECT Drink_ID FROM tbl_cart WHERE Drink_ID = '$drinkID' AND Cart_ID = '$cartID'");
	$num = mysql_num_rows($query);
	
	$query1 = mysql_query("SELECT * FROM tbl_drinks WHERE Drink_ID = '$drinkID' ");
	$row2 = mysql_fetch_array($query1);
	$drinkName = $row2["Drink_Name"];
	$drinkPrice = $row2["Drink_Price"];
	
	$drinkPrice = $drinkPrice * $qty;
	
	if($num == 0){
		$sql1 = "INSERT INTO tbl_cart (Cart_ID, Drink_ID, Drink_Name, Drink_Price, QTY)
		VALUES ('$cartID', '$drinkID', '$drinkName', '$drinkPrice', '$qty')";
		mysql_query($sql1);
		
	}
	else{
		$sql2 = "UPDATE tbl_cart SET QTY=$qty, Drink_Price=$drinkPrice WHERE Drink_ID = '$drinkID' and Cart_ID = '$cartID'";
		mysql_query($sql2);
	}

?>
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
	
	$total = 0;
		
	$sql3 = mysql_query("SELECT Drink_Price FROM tbl_cart");
	while($row=mysql_fetch_array($sql3)){
		$total = $total + $row["Drink_Price"];
	}
	
	mysql_query("UPDATE tbl_totalprice SET Total_Price=$total WHERE Cart_ID = '$cartID'");
		
	$sql4 = mysql_query("SELECT Total_Price FROM tbl_totalprice WHERE Cart_ID='$cartID'");
	$row12 = mysql_fetch_array($sql4);
	$totalprice = $row12["Total_Price"];
	
	echo $totalprice;

?>
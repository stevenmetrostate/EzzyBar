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
	
	$query2 = mysql_query("Select * FROM tbl_cart");
	$num1 = mysql_num_rows($query2);
	
	if($num == 0){
		mysql_query("INSERT INTO tbl_totalprice (Cart_ID, Total_Price)
		VALUES ('$cartID', '0.00')");
	}
	
	//if none of the added drink is in cart yet, do this.
	if($num == 0){
		$sql1 = "INSERT INTO tbl_cart (Cart_ID, Drink_ID, Drink_Name, Drink_Price, QTY)
		VALUES ('$cartID', '$drinkID', '$drinkName', '$drinkPrice', '$qty')";
		mysql_query($sql1);

	}
	else{ //if the added drink exists in cart, do this.
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
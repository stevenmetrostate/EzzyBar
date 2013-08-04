<?php 
	require "database.php";
	
	$query = mysql_query("SELECT Checkout_ID FROM tbl_customerorder");
	$row = mysql_fetch_array($query);
	mysql_data_seek($query,0);
	$cID = $row["Checkout_ID"];
	
	$query1 = mysql_query("select Drink_Name, tbl_checkout.Drink_ID, tbl_checkout.QTY 
		FROM tbl_checkout, tbl_customerorder, tbl_drinks 
		WHERE tbl_customerorder.Checkout_ID=$cID
		AND tbl_checkout.Checkout_ID=$cID
		AND tbl_checkout.Drink_ID = tbl_drinks.Drink_ID");
	$num = mysql_num_rows($query1);
	
	if($num != 0){
		while($row1 = mysql_fetch_array($query1)){
			$qty = $row1["QTY"];
			$drinkName = $row1["Drink_Name"];
			
			//insert into current queue
			$sql1 = "INSERT INTO tbl_currentorder (Drink_Name, Drink_Qty)
				VALUES ('$drinkName', '$qty')";
			mysql_query($sql1);
		}
	}
	
	//remove off order queue
	$sql1 = "DELETE FROM tbl_customerorder WHERE Checkout_ID = $cID";
	mysql_query($sql1);
	
	$sql2 = "DELETE FROM tbl_checkout WHERE Checkout_ID = $cID";
	mysql_query($sql2);

?>
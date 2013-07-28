<?php
	require "database.php";
	
	$drinkID = $_POST['drinkID'];
	$drinkName = $_POST['drinkName'];
	$drinkPrice = $_POST['drinkPrice'];
	$cartID = 1;
	
	$query = mysql_query("SELECT QTY FROM tbl_cart WHERE Drink_ID = '$drinkID' AND Cart_ID = '$cartID'");
	$row = mysql_fetch_array($query);
	$qty = $row["QTY"];
	$qty = $qty + 1;
	
	$query = mysql_query("SELECT Drink_ID FROM tbl_cart WHERE Drink_ID = '$drinkID' AND Cart_ID = '$cartID'");
	$num = mysql_num_rows($query);
	
	if($num == 0){
		$sql1 = "INSERT INTO tbl_cart (Cart_ID, Drink_ID, Drink_Name, Drink_Price, QTY)
		VALUES ('$cartID', '$drinkID', '$drinkName', '$drinkPrice', '$qty')";
		
		mysql_query($sql1);
		
	}
	else{
	//$qty=5;
		$sql2 = "UPDATE tbl_cart SET QTY=$qty WHERE Drink_ID = '$drinkID' and Cart_ID = '$cartID'";
		
		mysql_query($sql2);
	}
	
	/*$getCart = mysql_query("SELECT * FROM tbl_cart");

		echo "<table>";
		while($row = mysql_fetch_array($getCart)){
				echo "<tr>";
					echo "<td align='left'>";
					echo $row["QTY"];
					echo"</td>";
					echo "<td align='center'>";
					echo $row["Drink_Name"];
					echo "</td>";
					echo "<td align='right'>";
					echo "<input type='button' id='reset' name='reset' value='Reset'>";
					echo "</td>";
				echo "</tr>";
		}
		echo "</table>";*/
	
	/*if(isset($_POST['functionName'])){
	   if($_POST['functionName'] == "getCart"){
		  getCart();
	   }
	}*/

	/*function getCart(){
		$getCart = mysql_query("SELECT * FROM tbl_cart");
		$data = "";

		$data = "<table>";
		while($row = mysql_fetch_array($getCart)){
				$data = "<tr>";
					$data = $data . "<td align='left'>";
					$data = $data . $row["QTY"];
					$data = $data . "</td>";
					$data = $data . "<td align='center'>";
					$data = $data . $row["Drink_Name"];
					$data = $data . "</td>";
					$data = $data . "<td align='right'>";
					$data = $data . "<input type='button' id='reset' name='reset' value='Reset'>";
					$data = $data . "</td>";
				$data = $data . "</tr>";
		}
		$data = "</table>";
	}*/

?>
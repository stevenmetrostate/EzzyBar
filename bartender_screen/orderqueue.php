<?php 
	include "database.php";
	
	function getqueue(){

		$checkout = mysql_query("SELECT DISTINCT Checkout_ID FROM tbl_customerorder");
		
		while($cNum = mysql_fetch_array($checkout)){
			$cID = $cNum["Checkout_ID"];
		
			$query = mysql_query("select Drink_Name, tbl_checkout.Drink_ID, tbl_checkout.QTY 
			FROM tbl_checkout, tbl_customerorder, tbl_drinks 
			WHERE tbl_customerorder.Checkout_ID=$cID 
			AND tbl_checkout.Checkout_ID=$cID
			AND tbl_checkout.Drink_ID = tbl_drinks.Drink_ID");
			
			if($query === FALSE) {
				die(mysql_error()); // TODO: better error handling
			}
		
			echo "<fieldset>";
			echo "<table>";
			while($row = mysql_fetch_array($query)){
					echo "<tr>";
						echo "<td align='left' id='$row[Drink_ID]' width='20%'>";
						echo $row["QTY"];
						echo "</td>";
						echo "<td align='center' width='50%'>";
						echo $row["Drink_Name"];
						echo "</td>";
					echo "</tr>";
			}
			echo "</table>";
			echo "</fieldset>";
		}
		
	}
	
	function topinqueue(){
		$query = mysql_query("SELECT * FROM tbl_currentorder");
	
		echo "<fieldset>";
		echo "<table>";
		while($row = mysql_fetch_array($query)){
				echo "<tr>";
					echo "<td align='left' id='$row[Drink_ID]' width='20%'>";
					echo $row["Drink_Qty"];
					echo "</td>";
					echo "<td align='center' width='50%'>";
					echo $row["Drink_Name"];
					echo "</td>";
				echo "</tr>";
		}
		echo "</table>";
		echo "</fieldset>";
	
	}
	
?>
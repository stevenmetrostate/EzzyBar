<?php
	$getCart = mysql_query("SELECT * FROM tbl_cart");

	echo "<table>";
	while($row = mysql_fetch_array($getCart)){
			echo "<tr>";
				echo "<td align='left' id='$row[Drink_ID]' width='20%'>";
				echo $row["QTY"];
				echo "</td>";
				echo "<td align='center' width='50%'>";
				echo $row["Drink_Name"];
				echo "</td>";
				echo "<td align='center' width='20%'>";
				echo $row["Drink_Price"];
				echo "</td>";
				echo "<td align='right' width='10%'>";
				echo "<input type='image' src='../images/Minus.png' id='reset' name='reset'>";
				echo "</td>";
			echo "</tr>";
	}
	echo "</table>";

?>
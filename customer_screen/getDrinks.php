<?php 
	include "database.php";
	
	function getDom(){	
		
		$getDrink = mysql_query("SELECT * FROM tbl_drinks WHERE Drink_Type='Domestic'");
		
		while($row = mysql_fetch_array($getDrink)){
			echo "Name: ";
			echo $row["Drink_Name"];
			echo "<br />";
			echo "Description: ";
			echo $row["Drink_Description"];
			echo "<br />";
			echo "<div class='hi'>1</div>";
			echo "Alcohol: ";
			echo $row["Alcohol_Content"]."%";
			echo "<br />";
			echo "Price: ";
			echo "$".$row["Drink_Price"];
			echo "<br />";
			echo "<input type='button' class='drink' id='$row[Drink_ID]' name='drink' value='Add' />";
			echo "<hr />";
		}
	}
	
	function getImp(){	
		
		$getDrink = mysql_query("SELECT * FROM tbl_drinks WHERE Drink_Type='Import'");
		while($row = mysql_fetch_array($getDrink)){
			echo 'Name: ';
			echo $row["Drink_Name"];
			echo '<br />';
			echo 'Description: ';
			echo $row["Drink_Description"];
			echo '<br />';
			echo 'Alcohol: ';
			echo $row["Alcohol_Content"]."%";
			echo '<br />';
			echo 'Price: ';
			echo "$".$row["Drink_Price"];
			echo '<br />';
			echo "<input type='button' class='drink' id='$row[Drink_ID]' name='drink' value='Add' />";
			echo '<hr />';
		}
	}
	
	function getTap(){	
		
		$getDrink = mysql_query("SELECT * FROM tbl_drinks WHERE Drink_Type='Tap'");
		while($row = mysql_fetch_array($getDrink)){
			echo 'Name: ';
			echo $row["Drink_Name"];
			echo '<br />';
			echo 'Description: ';
			echo $row["Drink_Description"];
			echo '<br />';
			echo 'Alcohol: ';
			echo $row["Alcohol_Content"]."%";
			echo '<br />';
			echo 'Price: ';
			echo "$".$row["Drink_Price"];
			echo '<br />';
			echo "<input type='button' class='drink' id='$row[Drink_ID]' name='drink' value='Add' />";
			echo '<hr />';
		}
	}
	
	function getLiq(){	
		
		$getDrink = mysql_query("SELECT * FROM tbl_drinks WHERE Drink_Type='Liquor'");
		while($row = mysql_fetch_array($getDrink)){
			echo 'Name: ';
			echo $row["Drink_Name"];
			echo '<br />';
			echo 'Description: ';
			echo $row["Drink_Description"];
			echo '<br />';
			echo 'Alcohol: ';
			echo $row["Alcohol_Content"]."%";
			echo '<br />';
			echo 'Price: ';
			echo "$".$row["Drink_Price"];
			echo '<br />';
			echo "<input type='button' class='drink' id='$row[Drink_ID]' name='drink' value='Add' />";
			echo '<hr />';
		}
	}
	
	function getWin(){	
		
		$getDrink = mysql_query("SELECT * FROM tbl_drinks WHERE Drink_Type='Wine'");
		while($row = mysql_fetch_array($getDrink)){
			echo 'Name: ';
			echo $row["Drink_Name"];
			echo '<br />';
			echo 'Description: ';
			echo $row["Drink_Description"];
			echo '<br />';
			echo 'Alcohol: ';
			echo $row["Alcohol_Content"]."%";
			echo '<br />';
			echo 'Price: ';
			echo "$".$row["Drink_Price"];
			echo '<br />';
			echo "<input type='button' class='drink' id='$row[Drink_ID]' name='drink' value='Add' />";
			echo '<hr />';
		}
	}
	
	function getMix(){	
		
		$getDrink = mysql_query("SELECT * FROM tbl_drinks WHERE Drink_Type='Mixed'");
		while($row = mysql_fetch_array($getDrink)){
			echo 'Name: ';
			echo $row["Drink_Name"];
			echo '<br />';
			echo 'Description: ';
			echo $row["Drink_Description"];
			echo '<br />';
			echo 'Alcohol: ';
			echo $row["Alcohol_Content"]."%";
			echo '<br />';
			echo 'Price: ';
			echo "$".$row["Drink_Price"];
			echo '<br />';
			echo "<input type='button' class='drink' id='$row[Drink_ID]' name='drink' value='Add' />";
			echo '<hr />';
		}
	}
	
	function getNon(){	
		
		$getDrink = mysql_query("SELECT * FROM tbl_drinks WHERE Drink_Type='Non-Alcoholic'");
		while($row = mysql_fetch_array($getDrink)){
			echo 'Name: ';
			echo $row["Drink_Name"];
			echo '<br />';
			echo 'Description: ';
			echo $row["Drink_Description"];
			echo '<br />';
			echo 'Alcohol: ';
			echo $row["Alcohol_Content"]."%";
			echo '<br />';
			echo 'Price: ';
			echo "$".$row["Drink_Price"];
			echo '<br />';
			echo "<input type='button' class='drink' id='$row[Drink_ID]' name='drink' value='Add' />";
			echo '<hr />';
		}
	}
	
	function getCart(){
		$getCart = mysql_query("SELECT * FROM tbl_cart");
		$getPrice = mysql_query("SELECT * FROM tbl_totalprice WHERE Cart_ID=1");
		$row1 = mysql_fetch_array($getPrice);

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
					echo "<input type='image' src='../images/Minus.png' class='reset' id='$row[Drink_ID]' name='reset'>";
					echo "</td>";
				echo "</tr>";
		}
		echo "</table>";
		echo "<hr />";
		echo "<p align='right' id='total'>$0.00</p>";
	}
	
?>
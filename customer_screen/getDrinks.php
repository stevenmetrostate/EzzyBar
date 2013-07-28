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
			echo "Alcohol: ";
			echo $row["Alcohol_Content"]."%";
			echo "<br />";
			echo "Price: ";
			echo "$".$row["Drink_Price"];
			echo "<br />";
			echo "<input type='hidden' class='drinkID' id='drinkID' name='drinkID' value='$row[Drink_ID]' />";
			echo "<input type='hidden' class='drinkName' id='drinkName' name='drinkName' value='$row[Drink_Name]' />";
			echo "<input type='hidden' class='drinkPrice' id='drinkPrice' name='drinkPrice' value='$row[Drink_Price]' />";
			echo "<input type='button' class='drink' name='drink' value='Add' />";
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
			echo "<input type='hidden' id='drinkID' name='drinkID' value='$row[Drink_ID]' />";
			echo "<input type='hidden' id='drinkName' name='drinkName' value='$row[Drink_Name]' />";
			echo "<input type='hidden' id='quantity' name='quantity' value='1' />";
			echo "<input type='hidden' id='drinkPrice' name='drinkPrice' value='$row[Drink_Price]' />";
			echo "<input type='button' class='drink' name='drink' value='Add' />";
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
			echo "<input type='hidden' id='drinkID' name='drinkID' value='$row[Drink_ID]' />";
			echo "<input type='hidden' id='drinkName' name='drinkName' value='$row[Drink_Name]' />";
			echo "<input type='hidden' id='quantity' name='quantity' value='1' />";
			echo "<input type='hidden' id='drinkPrice' name='drinkPrice' value='$row[Drink_Price]' />";
			echo "<input type='button' class='drink' name='drink' value='Add' />";
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
			echo "<input type='hidden' id='drinkID' name='drinkID' value='$row[Drink_ID]' />";
			echo "<input type='hidden' id='drinkName' name='drinkName' value='$row[Drink_Name]' />";
			echo "<input type='hidden' id='quantity' name='quantity' value='1' />";
			echo "<input type='hidden' id='drinkPrice' name='drinkPrice' value='$row[Drink_Price]' />";
			echo "<input type='button' class='drink' name='drink' value='Add' />";
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
			echo "<input type='hidden' id='drinkID' name='drinkID' value='$row[Drink_ID]' />";
			echo "<input type='hidden' id='drinkName' name='drinkName' value='$row[Drink_Name]' />";
			echo "<input type='hidden' id='quantity' name='quantity' value='1' />";
			echo "<input type='hidden' id='drinkPrice' name='drinkPrice' value='$row[Drink_Price]' />";
			echo "<input type='button' class='drink' name='drink' value='Add' />";
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
			echo "<input type='hidden' id='drinkID' name='drinkID' value='$row[Drink_ID]' />";
			echo "<input type='hidden' id='drinkName' name='drinkName' value='$row[Drink_Name]' />";
			echo "<input type='hidden' id='quantity' name='quantity' value='1' />";
			echo "<input type='hidden' id='drinkPrice' name='drinkPrice' value='$row[Drink_Price]' />";
			echo "<input type='button' class='drink' name='drink' value='Add' />";
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
			echo "<input type='hidden' id='drinkID' name='drinkID' value='$row[Drink_ID]' />";
			echo "<input type='hidden' id='drinkName' name='drinkName' value='$row[Drink_Name]' />";
			echo "<input type='hidden' id='quantity' name='quantity' value='1' />";
			echo "<input type='hidden' id='drinkPrice' name='drinkPrice' value='$row[Drink_Price]' />";
			echo "<input type='button' class='drink' name='drink' value='Add' />";
			echo '<hr />';
		}
	}
	
	function getCart(){
		$getCart = mysql_query("SELECT * FROM tbl_cart");

		echo "<table>";
		while($row = mysql_fetch_array($getCart)){
				echo "<tr>";
					echo "<td align='left'>";
					echo $row["QTY"];
					echo"</td>";
					echo "<td align='center'>";
					echo $row["Drink_Name"];
					echo "</td>";
					echo "<td align='center'>";
					echo $row["Drink_Price"];
					echo "</td>";
					echo "<td align='right'>";
					echo "<input type='button' id='reset' name='reset' value='Reset'>";
					echo "</td>";
				echo "</tr>";
		}
		echo "</table>";
	}
	
?>
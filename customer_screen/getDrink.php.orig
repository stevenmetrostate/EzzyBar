<?php 
<<<<<<< HEAD
	include "database.php";
=======
	include_once("database.php");
>>>>>>> origin/Customer-Branch
	
	function getDom(){	
		$i=1;

		$getDrink = mysql_query("SELECT Dom_ID FROM tbl_domestic;");
		while($row = mysql_fetch_array($getDrink)){
			for ($j = 1; $j= $row["Dom_ID"]; $j++){

				$drinkList = mysql_query("SELECT 
					Dom_ID, Dom_Name, Dom_Description, Alcohol_Content, Drink_Price
					FROM tbl_domestic
					WHERE Dom_ID=$i;
				");
				while($row = mysql_fetch_array($drinkList)){
					$dom = $row["Dom_ID"];
					echo 'Name: ';
					echo $row["Dom_Name"];
					echo '<br />';
					echo 'Description: ';
					echo $row["Dom_Description"];
					echo '<br />';
					echo 'Alcohol: ';
					echo $row["Alcohol_Content"];
					echo '<br />';
					echo 'Price: ';
					echo $row["Drink_Price"];
					echo '<br />';
<<<<<<< HEAD
					echo '<input type="button" id="Dom" name="Dom" value="Add" />';
					//echo '<input type="button" class="add" name="Dom" id="Dom" value="Add" onclick="addToCart(';
					//echo $row['Dom_ID'];
					//echo ');"/>';
=======
					echo "<input type='button' id='Dom' name='Dom' value='Add' />";
>>>>>>> origin/Customer-Branch
					echo '<hr />';
				}
				$i++;
			}
		}
	}
	
	function getImp(){
		$i=1;

		$getDrink = mysql_query("SELECT Imp_ID FROM tbl_import;");
		while($row = mysql_fetch_array($getDrink)){
			for ($j = 1; $j= $row["Imp_ID"]; $j++){//Uses OrderID to loop

				$drinkList = mysql_query("SELECT 
					Imp_ID, Imp_Name, Imp_Description, Alcohol_Content, Drink_Price
					FROM tbl_import
					WHERE Imp_ID=$i;
				");
				while($row = mysql_fetch_array($drinkList)){
					$dom = $row["Imp_ID"];
					echo 'Name: ';
					echo $row["Imp_Name"];
					echo '<br />';
					echo 'Description: ';
					echo $row["Imp_Description"];
					echo '<br />';
					echo 'Alcohol: ';
					echo $row["Alcohol_Content"];
					echo '<br />';
					echo 'Price: ';
					echo $row["Drink_Price"];
					echo '<br />';
<<<<<<< HEAD
					echo '<input type="button" id="Imp" name="Imp" value="Add" />';
=======
					echo "<input type='button' id='Dom' name='Dom' value='Add' />";
>>>>>>> origin/Customer-Branch
					//echo '<input type="button" class="add" name="Imp" id="Imp" value="Add" onclick="addToCart(';
					//echo $dom;
					//echo ');"/>';
					echo '<hr />';					
				}
				$i++;
			}
		}
	
	}
	
	function getTap(){
		$i=1;

		$getDrink = mysql_query("SELECT Tap_ID FROM tbl_tap;");
		while($row = mysql_fetch_array($getDrink)){
			for ($j = 1; $j= $row["Tap_ID"]; $j++){//Uses OrderID to loop

				$drinkList = mysql_query("SELECT 
					Tap_ID, Tap_Name, Tap_Description, Alcohol_Content, Drink_Price
					FROM tbl_tap
					WHERE Tap_ID=$i;
				");
				while($row = mysql_fetch_array($drinkList)){
					$dom = $row["Tap_ID"];
					echo 'Name: ';
					echo $row["Tap_Name"];
					echo '<br />';
					echo 'Description: ';
					echo $row["Tap_Description"];
					echo '<br />';
					echo 'Alcohol: ';
					echo $row["Alcohol_Content"];
					echo '<br />';
					echo 'Price: ';
					echo $row["Drink_Price"];
					echo '<br />';
					echo '<input type="button" id="Tap" name="Tap" value="Add" />';
					echo '<hr />';
				}
				$i++;
			}
		}
	
	}
	
	function getLiq(){
		$i=1;

		$getDrink = mysql_query("SELECT Liq_ID FROM tbl_liquor;");
		while($row = mysql_fetch_array($getDrink)){
			for ($j = 1; $j= $row["Liq_ID"]; $j++){//Uses OrderID to loop

				$drinkList = mysql_query("SELECT 
					Liq_ID, Liq_Name, Liq_Description, Alcohol_Content, Drink_Price
					FROM tbl_liquor
					WHERE Liq_ID=$i;
				");
				while($row = mysql_fetch_array($drinkList)){
					$dom = $row["Liq_ID"];
					echo 'Name: ';
					echo $row["Liq_Name"];
					echo '<br />';
					echo 'Description: ';
					echo $row["Liq_Description"];
					echo '<br />';
					echo 'Alcohol: ';
					echo $row["Alcohol_Content"];
					echo '<br />';
					echo 'Price: ';
					echo $row["Drink_Price"];
					echo '<br />';
<<<<<<< HEAD
					echo '<input type="button" id="Liq" name="Liq" value="Liq" />';
=======
					echo '<input type="button" id="Liq" name="Liq" value="Add" />';
>>>>>>> origin/Customer-Branch
					echo '<hr />';
				}
				$i++;
			}
		}
	
	}
	
	function getMix(){
		$i=1;

		$getDrink = mysql_query("SELECT Mix_ID FROM tbl_mixed;");
		while($row = mysql_fetch_array($getDrink)){
			for ($j = 1; $j= $row["Mix_ID"]; $j++){//Uses OrderID to loop

				$drinkList = mysql_query("SELECT 
					Mix_ID, Mix_Name, Mix_Description, Alcohol_Content, Drink_Price
					FROM tbl_mixed
					WHERE Mix_ID=$i;
				");
				while($row = mysql_fetch_array($drinkList)){
					$dom = $row["Mix_ID"];
					echo 'Name: ';
					echo $row["Mix_Name"];
					echo '<br />';
					echo 'Description: ';
					echo $row["Mix_Description"];
					echo '<br />';
					echo 'Alcohol: ';
					echo $row["Alcohol_Content"];
					echo '<br />';
					echo 'Price: ';
					echo $row["Drink_Price"];
					echo '<br />';
					echo '<input type="button" id="Mix" name="Mix" value="Add" />';
					echo '<hr />';
				}
				$i++;
			}
		}
	
	}
	
	function getWin(){
		$i=1;

		$getDrink = mysql_query("SELECT Win_ID FROM tbl_wine;");
		while($row = mysql_fetch_array($getDrink)){
			for ($j = 1; $j= $row["Win_ID"]; $j++){//Uses OrderID to loop

				$drinkList = mysql_query("SELECT 
					Win_ID, Win_Name, Win_Description, Alcohol_Content, Drink_Price
					FROM tbl_wine
					WHERE Win_ID=$i;
				");
				while($row = mysql_fetch_array($drinkList)){
					$dom = $row["Win_ID"];
					echo 'Name: ';
					echo $row["Win_Name"];
					echo '<br />';
					echo 'Description: ';
					echo $row["Win_Description"];
					echo '<br />';
					echo 'Alcohol: ';
					echo $row["Alcohol_Content"];
					echo '<br />';
					echo 'Price: ';
					echo $row["Drink_Price"];
					echo '<br />';
					echo '<input type="button" id="Win" name="Win" value="Add" />';
					echo '<hr />';
				}
				$i++;
			}
		}
	
	}
	
	function getNon(){
		$i=1;

		$getDrink = mysql_query("SELECT Non_ID FROM tbl_nonalcoholic;");
		while($row = mysql_fetch_array($getDrink)){
			for ($j = 1; $j= $row["Non_ID"]; $j++){//Uses OrderID to loop

				$drinkList = mysql_query("SELECT 
					Non_ID, Non_Name, Non_Description, Alcohol_Content, Drink_Price
					FROM tbl_nonalcoholic
					WHERE Non_ID=$i;
				");
				while($row = mysql_fetch_array($drinkList)){
					$dom = $row["Non_ID"];
					echo 'Name: ';
					echo $row["Non_Name"];
					echo '<br />';
					echo 'Description: ';
					echo $row["Non_Description"];
					echo '<br />';
					echo 'Alcohol: ';
					echo $row["Alcohol_Content"];
					echo '<br />';
					echo 'Price: ';
					echo $row["Drink_Price"];
					echo '<br />';
					echo '<input type="button" id="Non" name="Non" value="Add" />';
					echo '<hr />';	
				}
				$i++;
			}
		}
	
	}
<<<<<<< HEAD
=======
	
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
	
	/*function addToDom($item){
		echo "<script type='text/javascript'>alert('Really annoying pop-up!');</script>";
		$items = $item;
		$getTable("SELECT Cart_ID FROM tbl_cart;");
		mysql_query("INSERT INTO tbl_cart (Cart_ID, Dom_ID, qty)
		VALUES (1, '$items', 1)") or die(mysql_error());
		
		mysql_close();
	}*/
>>>>>>> origin/Customer-Branch


?>
<?php ob_start(); ?>
<?php
include 'connect.php';
$id=$_GET['drinkID'] or die("unable to get id");
?>
<html>
<head>
<title>Drink Information System</title>

</head>

<body>


<form method="post">
<table>
<?php $drinks_query=mysql_query("select * from tbl_drink where drinkID='$id'");
$drinks_rows=mysql_fetch_array($drinks_query);
?>
<tr><td> Name:  </td>
<td><input type="text" name="name" size=50 value="<?php echo  $drinks_rows['name'];  ?>"></td></tr>
<tr><td> Type: </td>
<td><input type="text" name="type" size=50 value="<?php echo $drinks_rows['type'];  ?>"></td></tr>
<tr><td> Description:</td>
<td><input type="text" name="description" size=50 value="<?php echo $drinks_rows['description'];  ?>"></td></tr>
<tr><td> Quantity:</td>
<td><input type="text" name="quantity" size=50 value="<?php echo $drinks_rows['quantity'];  ?>"></td></tr>
<tr><td> Alcohol Content:</td>
<td><input type="text" name="alcoholContent" size=50 value="<?php echo $drinks_rows['alcoholContent']; ?>" ></td></tr>
<tr><td> Unit Price:</td>
<td><input type="text" name="unitPrice" size=50 value="<?php echo $drinks_rows['unitPrice']; ?>" ></td></tr>
<tr><td></td><td><input type="submit" name="submit" title="Click here to save the record in the database"
 value="Save Record"></td></tr>
</table>
</form>
<div><li><a href="manager.php"><span>Manager Settings</span></a></li></div>
</body>
</html>
<?php
if (isset($_POST['submit']))
{
$name=$_POST['name'];
$type=$_POST['type'];
$description=$_POST['description'];
$quantity=$_POST['quantity'];
$alcoholContent=$_POST['alcoholContent'];
$unitPrice=$_POST['unitPrice'];

mysql_query("update tbl_drink set name='$name',type='$type',description='$description',quantity='$quantity',alcoholContent='$alcoholContent', unitPrice ='$unitPrice' where drinkID='$id'");
header('location:viewDrink.php');
}
?>
<?php ob_flush(); ?>

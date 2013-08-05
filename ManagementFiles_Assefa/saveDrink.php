<html>
<head><title>Drink Inventory System</title>

</head>
<body>
<?php

//connect to the database
	$con = include('connect.php');

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

//mysql_select_db("inventory", $con);

$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];
$d=$_POST['d'];
$e=$_POST['e'];
$f=$_POST['f'];


//Writes the information to the database

	$sql="INSERT INTO tbl_drink (name, type, description,quantity,alcoholContent,unitPrice)
VALUES ('$a', '$b', '$c', '$d','$e','$f')";



if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }
  header("location: viewDrink.php");
			exit();


mysql_close($con)


?>
<div><li><a href="manager.php"><span>Manager Settings</span></a></li></div>
</body>
</html>
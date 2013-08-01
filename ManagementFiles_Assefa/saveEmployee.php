<html>
<head><title>Employee Inventory System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="./style/css/bootstrap.css" rel="stylesheet" media="screen">
    
</head>
<body > 
    <script src="./style/js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./style/js/bootstrap.js"></script>

    <!-- Optionally enable responsive features in IE8 -->
    <script src="./style/js/respond.js"></script>
<?php

//connect to the database
	$con = include('connect.php');

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

//mysql_select_db("ezzybar", $con);
if(is_numeric($id=''||$a=''||$b=''||$c=''||$d=''||$a=''))
{
    echo("please Fill all the required information!");
    header("location: addEmployee.php");
}
$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];
$d=$_POST['d'];
$e=$_POST['e'];
//$f=$_POST['f'];


//Writes the information to the database

	$sql="INSERT INTO tbl_employee (firstName, lastName, role,username,password)
VALUES ('$a', '$b', '$c', '$d','$e')";



if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }
  header("location: viewEmployee.php");
			exit();


mysql_close($con)


?>
</body>
</html>
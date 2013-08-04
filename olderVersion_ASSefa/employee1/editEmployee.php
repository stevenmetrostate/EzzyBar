<?php ob_start(); ?>
<?php
include 'connect.php';
$id=$_GET['employeeID'];
?>
<html>
<head>
<title>Employee Information System</title>
<link href="CRISPY.CSS" rel="stylesheet" type="text/css" />
</head>

<body>


<form method="post">
<table id=gradient-style >
<?php $books_query=mysql_query("select * from tbl_employee where employeeID='$id'");
$books_rows=mysql_fetch_array($books_query);
?>
<tr><td> First Name:  </td>
<td><input type="text" name="firstName" size=50 value="<?php echo  $books_rows['firstName'];  ?>"></td></tr>
<tr><td> Last Name: </td>
<td><input type="text" name="lastName" size=50 value="<?php echo $books_rows['lastName'];  ?>"></td></tr>
<tr><td> Role:</td>
<td><input type="text" name="role" size=50 value="<?php echo $books_rows['role'];  ?>"></td></tr>
<tr><td> Username:</td>
<td><input type="text" name="username" size=50 value="<?php echo $books_rows['username'];  ?>" ></td></tr>
<tr><td> Password:</td>
<td><input type="text" name="password" size=50 value="<?php echo $books_rows['password'];  ?>" ></td></tr>

<tr><td></td><td><input type="submit" name="submit" title="Click here to save the record in the database"
 value="Save Record"></td></tr>
</table>
</form>

</body>
</html>
<?php
if (isset($_POST['submit']))
{
$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$role=$_POST['role'];
$username=$_POST['username'];
$password=$_POST['password'];

mysql_query("update tbl_employee set firstName='$firstName',lastName='$lastName',role='$role',username='$username',password='$password' where employeeID='$id'");
header('location:viewEmployee.php');
}
?>
<?php ob_flush(); ?>

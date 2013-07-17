<html>
<head>
<title></title>
<link href ="crispy.css" type="text/css" rel="stylesheet">
</head>
<body>

<?php
/*
 deleteEmployee.PHP
 Deletes a specific entry from the 'Employees' table
*/

 // connect to the database
 include('connect.php');

 // check if the 'employeeID' variable is set in URL, and check that it is valid
 if (isset($_GET['employeeID']) && is_numeric($_GET['employeeID']))
 {
 // get id value
 $employeeID = $_GET['employeeID'];

 // delete the entry
 $result = mysql_query("DELETE FROM tbl_employee WHERE employeeID=$employeeID")
 or die(mysql_error());

 // redirect back to the view page
 header("Location: viewEmployee.php");
 }
 else
 // if id isn't set, or isn't valid, redirect back to view page
 {
 header("Location: viewEmployee.php");
 }

?>
</body>
</html>
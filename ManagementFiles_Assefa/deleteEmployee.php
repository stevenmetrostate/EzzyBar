<html>
<head>
<title></title>
<head><title>Employee Records</title>

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


<script type="text/javascript">
function confirmDelete(id)
{
	if(confirm('Are you SURE you want to delete this employee ?'))
		window.location = 'deleteEmplyee.php';
	
	return false;
}
</script>
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
  if($response ='yes')
  {
 // get id value
 $employeeID = $_GET['employeeID'];

 // delete the entry
 $result = mysql_query("DELETE FROM tbl_employee WHERE employeeID=$employeeID")
 or die(mysql_error());

 // redirect back to the view page
 header("Location: viewEmployee.php");
 }
 else {
     header("Location: viewEmployee.php");
 }
 }
 else
 // if id isn't set, or isn't valid, redirect back to view page
 {
 header("Location: viewEmployee.php");
 }

?>
</body>
</html>
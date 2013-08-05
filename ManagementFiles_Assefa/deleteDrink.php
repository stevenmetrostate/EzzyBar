<html>
<head>
<title> Drink Inventory System</title>

</head>
<body>

<?php
/*
 DELETE.PHP
 Deletes a specific entry from the 'Employees' table
*/

 // connect to the database
 include('connect.php');

 // check if the 'drinkID' variable is set in URL, and check that it is valid
 if (isset($_GET['drinkID']) && is_numeric($_GET['drinkID']))
 {
 // get id value
 $drinkID = $_GET['drinkID'];

 // delete the entry
 $result = mysql_query("DELETE FROM tbl_drink WHERE drinkID=$drinkID")
 or die(mysql_error());

 // redirect back to the view page
 header("Location: viewDrink.php");
 }
 else
 // if id isn't set, or isn't valid, redirect back to view page
 {
 header("Location: view-paginated.php");
 }

?>
</body>
</html>
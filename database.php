<?php
//This is a sample of how you can connect to your database using PHP.  The variables may need changing depending on how you set up your database.  Then, on another php page where you want connection from the database, simply use: include('database.php');  -- holla if you need explanation. Cheers!
$host="localhost";
$username="root";
$password="";
$db_name="ezzybar";

mysql_connect("$host", "$username", "")or die ("cannot connect to server");
mysql_select_db("$db_name")or die("cannot select database");

?>
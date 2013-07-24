<?php
$host="localhost";
$username="root";
$password="";
$db_name="ezzybar";

mysql_connect("$host", "$username", "")or die ("cannot connect to server");
mysql_select_db("$db_name")or die("cannot select database");

?>
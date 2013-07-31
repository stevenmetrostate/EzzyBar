<?php
	require "database.php";
	
	mysql_query("TRUNCATE TABLE tbl_cart");
	mysql_query("TRUNCATE TABLE tbl_totalprice");
	

?>
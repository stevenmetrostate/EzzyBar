<?php
include('connect.php');

if (isset($_POST['submit'])){

$name=$_POST['name'];
$type=$_POST['type'];
$description=$_POST['description'];
$alcoholContent=$_POST['alcoholContent'];
$unitPrice=$_POST['unitPrice'];


mysql_query("insert into tbl_drink (name,type,description,alcoholContent,unitPrice)
			values('$name','$type','$description','$alcoholContent','$unitPrice')");
			header('location:viewDrink.php');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<?php
include('connect.php');
?>
<head>
<title>Dynamic Drive DHTML Scripts- DD Tab Menu Demos</title>
<script type="text/javascript" src="ddtabmenu.js">
</script>


<!-- CSS for Tab Menu
<link rel="stylesheet" type="text/css" href="ddcolortabs.css" />-->
<!-- CSS for Body -->
<link rel="stylesheet" type="text/css" href="crispy.css"/>



<script type="text/javascript">
//SYNTAX: ddtabmenu.definemenu("tab_menu_id", integer OR "auto")

ddtabmenu.definemenu("ddtabs4", 0) //initialize Tab Menu #4 with 3rd tab selected


</script>

<body>





<H2>WELCOME TO THE MANAGEMENT SCREEN </H2>
</p>
<div  id="ddtabs4" class="ddcolortabs">
<ul>
<li><a href="home.php" rel="ct1"><span>Home</span></a></li>
<li><a href="viewDrink.php" rel="ct2"><span>Product Inventory</span></span></a></li>
<li><a href="./order/viewOrder.php" rel="ct3"><span>Order</span></a></li>
<li><a href="./sales/saleReport.php"><span>Sales Report</span></a></li>
<li><a href="./employee/viewEmployee.php"><span>Employees Record</span></a></li>
</ul>
</div>
<div class="ddcolortabsline">&nbsp;</div>

<DIV class="tabcontainer">

  <div id="ct1" class="tabcontent"> EzzyBar is an easy applicationn dynamic web
    application that enables to buy drinks.</div>

</DIV>



<div id="ddtabs4" class="ddcolortabsline">
<ul>
<li><a href="./manager.php"><span>Settings</span></a></li>
<li><a href="./logout.php"><span>Logout</span></a></li>
</ul>
</div>
</body>

</html>

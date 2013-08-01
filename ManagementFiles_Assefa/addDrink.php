<html>
<head><title>Product Records</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="./style/css/bootstrap.css" rel="stylesheet" media="screen">
    
</head>
<body > 
    <script src="./style/js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./style/js/bootstrap.js"></script>

    <!-- Optionally enable responsive features in IE8 -->
    <script src="./style/js/respond.js"></script>>
<h2 >Please Enter product information </h2>
<form action="saveDrink.php" method="post" enctype="multipart/form-data">
<table id="gradient-style"><th id="gradient-style" colspan="2">Enter Employee Infromation</th>

<tr><td>Name:</td>
<td><input name="a" type="text" /></td></tr>

<tr><td>Type:</td>
<td><select name="b" type="text" >
<option >Domestic</option>
<option >Import</option>
<option >Liquor</option>
<option >Tap</option>
<option >Wine</option>
<option >Non-Alcoholic</option>
<option >Mixed</option>
</select></td></tr>

</tr><td>Description:</td>
<td><input name="c" type="text" /></td></tr>
<tr>
<td>Quantity:</td>
<td><input name="d" type="text" /></td></tr>

<tr><td>Alcohol Content : </td>
<td><input name="e" type="text"/></td></tr>
<tr><td>Price : </td>
<td><input name="f" type="text"/></td></tr>
</table>


<input name="submit" type="submit" value="Add Product" title="Add data to the Database.">
</form>
<div><li><a href="manager.php"><span>Manager Settings</span></a></li></div>
<div><li><a href="viewDrink.php"><span>Drink Records</span></a></li></div>
</body>
</html>
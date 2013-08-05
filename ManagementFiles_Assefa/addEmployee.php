<html>
<head><title>Employee Records</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="./style/css/bootstrap.css" rel="stylesheet" media="screen">
    
</head>
<body > 
   
<h2 >Please Enter Employee Information </h2>
<div class ="main-content">
  <div class="col-lg-4>
    <div class= "well">
    <form   action="saveEmployee.php" method="post" class="form-inline" enctype="multipart/form-data">
    
    <br>First Name: *
    <input name="a" type="text" class="form-control" placeholder="First Name" />
    
    <br> Last Name: *
    <input name="b" type="text" class="form-control" placeholder="Last Name" />
    <br> Position : *
                <select name="c" class="form-control"> 
                <option>Manager</option>
                <option >Server</option>
                <option >Bartender</option>
                </select>
    <br>username: *
    <input name="d" type="text" class="form-control" placeholder="Username" />
    <br>password : *
    <input name="e" type="password" class="form-control" placeholder="Password"/>
    <p>* required</p>
    <input class="btn btn-default" name="submit" type="submit" value="Add Employee" title="Add data to the Database." />
    </form>
    </div> 
   </div>
</div>
<div>
<footer><li><a href="manager.php"><span>Manager Settings</span></a></li></footer>
</div>
    <script src="./style/js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./style/js/bootstrap.js"></script>

    <!-- Optionally enable responsive features in IE8 -->
    <script src="./style/js/respond.js"></script>
</body>

</html>
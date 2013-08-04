<?php
error_reporting (E_ALL ^ E_NOTICE);
session_start();
$userid=$_SESSION['userid'];
$username=$_SESSION['username'];
?>
<html>
  
  <head>
    <title>EzzyBar Application</title>
    <meta name="viewport" content="width=device-width">
    <!-- Bootstrap -->
    <link href="./style/css/bootstrap.css" rel="stylesheet" media="screen">
    
  </head>
    <banner>
      <header>MANAGER</header>
    </banner>

  <body>
   
    <div class="tabbable tabs-center">
      <ul class="nav nav-tabs" id="myTab">
        <li class="active"><a href="#manager"data-toggle="tab">Home</a></li>
        <li> <a href="#employees" data-toggle="tab">Employee Settings</a></li>
        <li> <a href="#products" data-toggle="tab">Product Settings</a></li>
        <li> <a href="#events" data-toggle="tab">Events Settings</a></li>
      </ul>
    </div>
    <!-- body content starts here-->

<div class="container"> 
  <div class = "tab-content" > 
 
    <div class="tab-pane" id="manager"></div>
    <div class="tab-pane" id="employees"> </div>
    <div class="tab-pane" id="products"></div>
    <div class="tab-pane" id="events"></div>
  </div>
</div>
<!-- body content ends here-->


<!-- Scripts -->
   <script src="./style/js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./style/js/bootstrap.js"></script>

    <!-- Optionally enable responsive features in IE8 -->
    <script src="./style/js/respond.js"></script>

    <!-- load pages on the same page 

<script> 
  $(function () {
     $('#myTab a[href="#manager"]').tab('show');
    $('#myTab a[href="#employees"]').tab('show');
    $('#myTab a[href="#products"]').tab('show');
    $('#myTab a[href="#events"]').tab('show');
  })
</script>--> 
<script type="text/javascript">
$('#manager').load('/managerView.php');
$('#employees').load('/viewEmployee.php');
$('#products').load('/viewDrink.php');
$('#events').load('/viewEvent.php');
   </script>
  </body>

</html>
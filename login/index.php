<?php
error_reporting (E_ALL ^ E_NOTICE);
session_start();
$userid=$_SESSION['userid'];
$username=$_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sign in &middot; Twitter Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
        text-decoration: none;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
      <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
      <link rel="shortcut icon" href="ico/favicon.png">
  </head>

  <body>
   <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
      <a class="navbar-brand" style="text-decoration:none"><h3 style="margin-left:550px;color:#CCC">EZZYBAR</h3</a>
    </div>
   </div>
    <div class="container" style="margin-top:30px">
       <?php  
                  if($username && $userid){
                     // echo "<p class='navbar-text pull-right'>
                     //         Logged in as <a href='#'' class='navbar-link'>Username</a>
                     //       </p>";
                  }else{
                   $form="<form action='./index.php' method='post' class='form-signin'>
			              <h2 class='form-signin-heading'>Please sign in</h2>
			              <input type='text' class='input-block-level' name='username' placeholder='Username'>
			              <input type='password' class='input-block-level' name='password' placeholder='Password'>
			              <label class='checkbox'>
			                <input type='checkbox' value='remember-me'> Remember me
			              </label>
			               <button class='btn btn-large btn-primary' name='loginbtn' type='submit'>Sign in</button>
			               </form>";
			                  
		                   if(isset($_POST['loginbtn'])){
		                       $username=$_POST['username'];
		                       $password=$_POST['password'];
		                       if ($username) {
		                          if ($password) {
		                                require("connect.php");
		                                $query=mysql_query("SELECT * FROM tbl_employee WHERE username='$username' ");
                   						 $numrows=mysql_num_rows($query);
		                               if($numrows==1){
						                      $row=mysql_fetch_assoc($query);
						                      $dbid=$row['employeeID'];
						                      $dbuser=$row['username'];
						                      $dbpass=$row['password'];
						                      $dbstatus=$row['status'];
						                      $dbrole=$row['role'];
		                                   if ($password==$dbpass) {
		                                       $_SESSION['username']=$dbuser;
                         						 $_SESSION['userid']=$dbid;
		                                        if ($dbrole=='Manager') {
						                            $manager_page='./manager.php';
						                            header('Location:' .$manager_page);
						                          } 
						                          elseif ($dbrole=='Bartender') {
						                            $bartender_page='./bartender.php';
						                            header('Location:' .$bartender_page);
						                          }        
		                                        
		                                   } else {
		                                      $error="Incorrect Username/Password";
		                                      echo "$form";
		                                   }
		                                   
		                                  
		                                } else {
		                                    $error="Incorrect Username/Password";
		                                    echo "$form";
		                                }
		                                
		                                mysql_close();
		                          } else {
		                           $error= "Missing password";
		                           echo "$form";
		                          }
		                          
		                       } else {
		                         $error="Missing username";
		                         echo "$form";
		                       }
		                       
		                   } else{

		                    echo"$form";
		                  }
		                }
              ?>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
 		<script src="js/jquery-1.7.1.min.js"></script>
     	<script src="js/bootstrap.min.js"></script>
        <script language='javascript'>
            <?php if ($error) { ?>
            window.onload = function() {
                alert('<?php echo $error?>');
            }        
           <?php } ?>
        </script>

  </body>
</html>

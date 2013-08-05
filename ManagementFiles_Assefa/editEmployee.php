<?php

/**
 * @author assefa abay
 * @copyright 2013
 */



?>
<?php
/* 
 EDIT.PHP
 Allows user to edit specific entry in database
*/

 // creates the edit record form
 // since this form is used multiple times in this file, I have made it a function that is easily reusable
 function renderForm($id, $firstName, $lastName,$role,$username,$password, $error)
 {
 ?>
 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
 <html>
 <head>
 <title>Edit Record</title>
 </head>
 <body>
 <?php 
 // if there are any errors, display them
 if ($error != '')
 {
 echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
 }
 ?> 
 
 <form action="" method="post">
 <input type="hidden" name="employeeID" value="<?php echo $id; ?>"/>
 <div>
 <p><strong>ID:</strong> <?php echo $id; ?></p>
 <strong>First Name: *</strong> <input type="text" name="firstName" value="<?php echo $firstName; ?>"/><br/>
 <strong>Last Name: *</strong> <input type="text" name="lastName" value="<?php echo $lastName; ?>"/><br/>
 <strong>Position: *</strong> <input type="text" name="role" value="<?php echo $role; ?>"/><br/>
 <strong>Username: *</strong> <input type="text" name="username" value="<?php echo $username; ?>"/><br/>
 <strong>Password: *</strong> <input type="text" name="password" value="<?php echo $password; ?>"/><br/>
 
 <p>* Required</p>
 <input type="submit" name="submit" value="Submit">
 </div>
 </form> 
 </body>
 </html> 
 <?php
 }



 // connect to the database
 include('connect.php');
 
 // check if the form has been submitted. If it has, process the form and save it to the database
 if (isset($_POST['submit']))
 { 
 // confirm that the 'id' value is a valid integer before getting the form data
 if (is_numeric($_POST['employeeID']))
 {
 // get form data, making sure it is valid
 $id = $_POST['employeeID'];
 
 $firstName = mysql_real_escape_string(htmlspecialchars($_POST['firstName']));
 $lastName = mysql_real_escape_string(htmlspecialchars($_POST['lastName']));
 $role = mysql_real_escape_string(htmlspecialchars($_POST['role']));
 $username = mysql_real_escape_string(htmlspecialchars($_POST['username']));
 $password = mysql_real_escape_string(htmlspecialchars($_POST['password']));
 
 // check that firstname/lastname fields are both filled in
 if ($firstName == '' || $lastName == ''|| $role == ''|| $username == ''|| $password == '')
 {
 // generate error message
 $error = 'ERROR: Please fill in all required fields!';
 
 //error, display form
 renderForm($id, $firstName, $lastName,$role,$username,$password, $error);
 //renderForm($id, $firstname, $lastname, $error);
 }
 else
 {
 // save the data to the database
 $result=("update tbl_employee set employeeID='$id',firstName='$firstName',lastName='$lastName',role='$role',username='$username',password='$password', where employeeID='$id'")
// mysql_query("UPDATE players SET firstname='$firstName', lastname='$lastname' WHERE id='$id'")
 or die(mysql_error()); 
 
 // once saved, redirect back to the view page
 header("Location: viewEmployee.php"); 
 }
 }
 else
 {
 // if the 'id' isn't valid, display an error
 echo 'Error!';
 }
 }
 else
 // if the form hasn't been submitted, get the data from the db and display the form
 {
 
 // get the 'id' value from the URL (if it exists), making sure that it is valid (checing that it is numeric/larger than 0)
 if (isset($_GET['employeeID']) && is_numeric($_GET['employeeID']) && $_GET['employeeID'] > 0)
 {
 // query db
 $id = $_GET['employeeID'];
 $result = mysql_query("SELECT * FROM tbl_employee WHERE employeeID=$id")
 or die(mysql_error()); 
 $row = mysql_fetch_array($result);
 
 // check that the 'id' matches up with a row in the databse
 if($row)
 {
 
 // get data from db
 
$firstName=$row['firstName'];
$lastName=$row['lastName'];
$role=$row['role'];
$username=$row['username'];
$password=$row['password'];
 // show form
 renderForm($id, $firstName, $lastName,$role,$username,$password, '');
 //renderForm($id, $firstname, $lastname, '');
 }
 else
 // if no match, display result
 {
 echo "No results!";
 }
 }
 else
 // if the 'id' in the URL isn't valid, or if there is no 'id' value, display an error
 {
 echo 'Error!';
 }
 }
?>
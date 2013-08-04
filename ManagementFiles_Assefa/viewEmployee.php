<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
        <title>View Records</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="./style/css/bootstrap.css" rel="stylesheet" media="screen">
</head>
<body id="#employees">
    
    <div class="page-header well">
    
         <h2>Employee Information System</h2>
   
    </div>
<?php
/*
        viewEmployee.PHP
        Displays all data from 'tbl_employee' table
        
*/

        // connect to the database
        include('connect.php');

        // number of pages per page
        $per_page = 5;

        // figure out the total pages in the database
        $result = mysql_query("SELECT * FROM tbl_employee")  or die(mysql_error());
        $total_results = mysql_num_rows($result);
    //    $content = $row['photo'];
        $total_pages = ceil($total_results / $per_page);

        // check if the 'page' variable is set in the URL (ex: view-paginated.php?page=1)
        if (isset($_GET['page']) && is_numeric($_GET['page']))
        {
                $show_page = $_GET['page'];

                // is show_page valid
                if ($show_page > 0 && $show_page <= $total_pages)
                {
                        $start = ($show_page -1) * $per_page;
                        $end = $start + $per_page;
                }
                else
                {
                        // error - show first set of results
                        $start = 0;
                        $end = $per_page;
                }
        }
        else
        {
                // if page isn't set, show first set of results
                $start = 0;
                $end = $per_page;
        }
 echo "<div class =container>";
        echo "<div class =row>";
          // display data in table
        echo "<table class=table>";
        echo "<tr> <th>ID</th> <th>First Name</th> <th>Last Name</th> <th>Role</th> <th>UserName</th><th>Password</th><th colspan=2>Action</th></tr>";

        // loop through results of database query, displaying them in the table
        for ($i = $start; $i < $end; $i++)
        {
                // make sure that PHP doesn't try to show results that don't exist
                if ($i == $total_results) { break; }

                // echo out the contents of each row into a table
                echo "<tr>";
                echo '<td>' . mysql_result($result, $i, 'employeeID') . '</td>';
                echo '<td>' . mysql_result($result, $i, 'firstName') . '</td>';
                echo '<td>' . mysql_result($result, $i, 'lastName') . '</td>';
                echo '<td>' . mysql_result($result, $i, 'role') . '</td>';
                echo '<td>' . mysql_result($result, $i, 'username') . '</td>';
                echo '<td>' . mysql_result($result, $i, 'password') . '</td>';
                
               // echo '<td>' . mysql_result($result, $i, 'photo') . '</td>';

               // echo '<td><a href="edit1.php?employeeID=' . mysql_result($result, $i, 'employeeID') . '">Edit</a></td>';
                echo '<td><a href="editEmployee.php?employeeID=' . mysql_result($result, $i, 'employeeID') . '">Edit</a></td>';
                echo '<td><a href="deleteEmployee.php?employeeID=' . mysql_result($result, $i, 'employeeID') . '">Delete</a></td>';
                echo "</tr>";
        }
		
        // close table>
        echo "</table>";
        echo "</div>";
        echo "</div>";
		
		
            for ($i = 1; $i <= $total_pages; $i++)
        {
            echo "<ul class=pagination >";
                   echo   "<li><a href='#'>&laquo;</a></li>";
                     echo "<li><a href='viewEmployee.php?page=$i'>$i</a></li> ";
                     echo "<li><a href='#'>&raquo;</a></li>";
        }            echo  "</ul>";
                //echo "<a href='viewEmployee.php?page=$i' >$i</a> ";
        
        // pagination

?>
<!-- footer here-->
<div class="container">
    <div class="row well" >
      <ul class="nav nav-tabs">
        <li><a href="addEmployee.php">Add new employee record</a>
        <li><a href="manager.php"><span>Manager Settings</span></a></li>
       </ul>
    </div>
</div>
<div><footer>
    <p> EzzyBar Application</p>
    <br class="icon-copyright"> Copy right 2013
</footer></div>
<script src="./style/js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./style/js/bootstrap.js"></script>

    <!-- Optionally enable responsive features in IE8 -->
    <script src="./style/js/respond.js"></script>
</body>
</html>
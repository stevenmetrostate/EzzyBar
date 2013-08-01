<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
        <title>View Records</title>
		<link href ="crispy.css" type="text/css" rel="stylesheet">
</head>
<body>

<?php
/*
        VIEW-PAGINATED.PHP
        Displays all data from 'tbl_employee' table
        This is a modified version of view.php that includes pagination
*/

        // connect to the database
        include('connect.php');

        // number of results to show per page
        $per_page = 5;

        // figure out the total pages in the database
        $result = mysql_query("SELECT * FROM tbl_employee")  or die(mysql_error());
        $total_results = mysql_num_rows($result);
        $total_pages = ceil($total_results / $per_page);

        // check if the 'page' variable is set in the URL (ex: view-paginated.php?page=1)
        if (isset($_GET['page']) && is_numeric($_GET['page']))
        {
                $show_page = $_GET['page'];

                // make sure the $show_page value is valid
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

        // display pagination

       // echo "<p><a href='view.php'>View All</a> | <b>View Page:</b> ";
        //for ($i = 1; $i <= $total_pages; $i++)
        //{
        //        echo "<a href='viewEmployee.php?page=$i'>$i</a> ";
       // }
          // display data in table
        echo "<table id =gradient-style>";
        echo "<tr> <th>ID</th> <th>First Name</th> <th>Last Name</th> <th>Role</th> <th>UserName</th><th>Password</th><th>Status</th><th colspan=2>Action</th></tr>";

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
                echo '<td>' . mysql_result($result, $i, 'status') . '</td>';

                echo '<td><a href="editEmployee.php?employeeID=' . mysql_result($result, $i, 'employeeID') . '">Edit</a></td>';
                echo '<td><a href="deleteEmployee.php?employeeID=' . mysql_result($result, $i, 'employeeID') . '">Delete</a></td>';
                echo "</tr>";
        }
		
        // close table>
        echo "</table>";
		echo "<br> PAGES</br>";
		for ($i = 1; $i <= $total_pages; $i++)
        {
                echo "<a href='viewEmployee.php?page=$i'>$i</a> ";
        }
        // pagination

?>
<p><a href="register.php">Add a new Employee record</a></p>

</body>
</html>
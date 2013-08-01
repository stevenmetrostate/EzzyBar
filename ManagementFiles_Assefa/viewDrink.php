<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
        <title>Drink Inventory System</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="./style/css/bootstrap.css" rel="stylesheet" media="screen">
</head>
<body>
<div class="page-header well">
    
   <h2>Drink Inentory</h2>
   
</div>
<?php
/*
        VIEW-PAGINATED.PHP
        Displays all data from 'tbl_drink' table
        This is a modified version of view.php that includes pagination
*/

        // connect to the database
        include('connect.php');

        // number of results to show per page
        $per_page = 10;

        // figure out the total pages in the database
        $result = mysql_query("SELECT * FROM tbl_drink");
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

        
          // display data in table
        echo "<table class=table>";
        echo "<tr> <th>ID</th> <th>Name</th> <th>Type</th> <th>Description</th> <th>Quantity</th><th>Alcohol Content</th><th>Unit Price</th><th colspan=2>Action</th></tr>";

        // loop through results of database query, displaying them in the table
        for ($i = $start; $i < $end; $i++)
        {
                // make sure that PHP doesn't try to show results that don't exist
                if ($i == $total_results) { break; }

                // echo out the contents of each row into a table
                echo "<tr>";
                echo '<td>' . mysql_result($result, $i, 'drinkID') . '</td>';
                echo '<td>' . mysql_result($result, $i, 'Name') . '</td>';
                echo '<td>' . mysql_result($result, $i, 'type') . '</td>';
                echo '<td>' . mysql_result($result, $i, 'description') . '</td>';
				echo '<td>' . mysql_result($result, $i, 'quantity') . '</td>';
                echo '<td>' .mysql_result($result, $i, 'alcoholContent') . '</td>';
                echo '<td>' .mysql_result($result, $i, 'unitPrice') . '</td>';
                

                echo '<td><a href="editDrink.php?drinkID=' . mysql_result($result, $i, 'drinkID') . '">Edit</a></td>';
                echo '<td><a href="deleteDrink.php?drinkID=' . mysql_result($result, $i, 'drinkID') . '">Delete</a></td>';
                echo "</tr>";
        }
        // close table>
        echo "</table>";

        
        // display pagination

        
         for ($i = 1; $i <= $total_pages; $i++)
        {
            echo "<ul class=pagination>";
                     echo   "<li class=disabled><a href='#'>&laquo;</a></li>";
                     echo   "<li><a href='viewDrink.php?page=$i'>$i</a></li> ";
                     echo   "<li class=disabled><a href='#'>&raquo;</a></li>";
        }            echo   "</ul>";
                
        
        // pagination ends here

?>

<div class="container">
    <div class="row well" >
      <ul class="nav nav-tabs">
        <li><a href="addDrink.php">Add a new Item record</a>
        <li><a href="manager.php"><span>Manager Settings</span></a></li>
       </ul>
    </div>
</div>
<div><footer>
    <p> EzzyBar Application</p>
    <br class="icon-copyright"> Copy right 2013
</footer></div>
<!-- bootstrap scripts here-->
<script src="./style/js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./style/js/bootstrap.js"></script>

    <!-- Optionally enable responsive features in IE8 -->
    <script src="./style/js/respond.js"></script>
<script>
</body>
</html>
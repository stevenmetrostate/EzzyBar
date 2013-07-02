<?php
	session_start();
	
	session_destroy();  //ends session and logs user out
	
	echo "You've been logged out. <a href='index.php'>Click</a> here to return.";

?>
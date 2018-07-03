<?php  
session_start();
	if(isset($_SESSION['Loggedin'])) {
		session_unset();
		session_destroy();
		header("Location: index.php?user=loggedout");
	} else {
		header("Location: index.php?sessionNotFound");
	}
?>
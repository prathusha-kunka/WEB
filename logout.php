<?php
	session_start();
	header('location: front.php');
	session_destroy();
	
	// Redirect to the login page:
	?>
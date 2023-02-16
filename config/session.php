<?php
session_start();
 
// Function to check if the session variable member_id is on set
function logged_in() {
	return isset($_SESSION['MEMBER_ID']);
}

// Check user already logged in or not
function confirm_logged_in() {
	$_SESSION['last_activity'] = time();
	if(time() - $_SESSION['last_activity'] > 600) { // 10 minutes but you could use 480 for 8 minutes
		unset($_SESSION['MEMBER_ID']);
		unset($_SESSION['FIRST_NAME']);
		unset($_SESSION['LAST_NAME']);
	}

	if (!logged_in()) {
		header( "Location: index.php" ); die;
	}
}
?>
<?php
	
	/*
		This script checks if there is an active session. If not, the user is redirected to the public index page.
		
		Any page or script which requires the user to be logged in must include this script before any other script and before any HTML.
	*/
	
	session_start();
		
	//Check if there's an active session.
	if( !isset( $_SESSION[ 'user_id' ])) {
		
		session_destroy();
		
		header( 'HTTP/1.1 403 Forbidden' );
		header( 'Location: ../index.php' );
		
		exit();
		}

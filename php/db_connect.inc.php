<?php

 /**
 	*
	* This script creates a new connection to the HouseScanner DB.
	* 
	* N.B. that the connection must be closed manually.
	*
	*/

include_once 'db_credentials.inc.php';

$mysqli = new mysqli( $host, $user, $pwd, $schema, $port );

// Handle connection errors
if ( $mysqli->connect_errno ) {
	header( "HTTP/1.1 502 Bad Gateway" );
	echo json_encode( array( "Error connecting to DB: " . $mysqli->connect_errno . " " . $mysqli->connect_error ));
	
	$mysqli->close();
	exit();
}


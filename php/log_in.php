<?php

include_once 'db_connect.inc.php';

// Prepare query to get user data given the user's email adress
$stmt = $mysqli->prepare("
	SELECT *
	FROM User
	WHERE email = ?
");

$stmt->bind_param( "s", $email );

// Sanitize parameters
$email = $_POST[ 'user_email' ];
$email = trim( $email );

$stmt->execute();

// Handle SQL errors
$errno = $stmt->errno;
$error = $stmt->error;
if( $errno != 0 ){
	header( "HTTP/1.1 502 Bad Gateway" );
	echo json_encode( array( 'error' => $errno . " " . $error ));
	
	$stmt->close();
	$mysqli->close();
	
	exit();
}

// Verify password
$result = $stmt->get_result();
$row = $result->fetch_assoc();

$pwd = $_POST[ 'user_password' ];
$pwd = trim( $pwd );
$pwd_hash = $row[ 'pwdhash' ];
$pwd_verify = password_verify( $pwd, $pwd_hash );

// Handle incorrect password
if( !$pwd_verify ){
	header( "HTTP/1.1 403 Forbidden" );
	echo json_encode( array( 'Error' => 'Incorrect e-mail or password.' ));
	
	$stmt->close();
	$mysqli->close();
	
	exit();
}

// Log-in successful

// Remove any pre-existing session
require_once 'session_end.php';
endSession();

// Start a new session
session_start();

// Set session variables
$_SESSION[ 'user_id' ] = $row[ 'user_id' ];

// Close the query and DB connection
$stmt->close();
$mysqli->close();

// Redirect on success
header( "HTTP/1.1 200 OK" );
header( 'Location: ../users/user-landing.php' );

exit();

<?php

include_once 'db_connect.inc.php';

// Prepare an SQL statement
$stmt = $mysqli->prepare("
	INSERT INTO User (email, fname, lname, pwdhash)
	VALUES (?, ?, ?, ?)
");

$stmt->bind_param( "ssss", $email, $fname, $lname, $pwdhash );

// Sanitize parameters
$email = $_POST[ 'user_email' ];
$email = trim( $email );
$email = stripslashes( $email );
$email = mysqli_real_escape_string( $mysqli, $email );

$fname = $_POST[ 'user_first_name' ];
$fname = trim( $fname );
$fname = stripslashes( $fname );
$fname = mysqli_real_escape_string( $mysqli, $fname );

$lname = $_POST[ 'user_last_name' ];
$lname = trim( $lname );
$lname = stripslashes( $lname );
$lname = mysqli_real_escape_string( $mysqli, $lname );

$pwdhash = $_POST[ 'user_password' ];
$pwdhash = stripslashes( $pwdhash );
$pwdhash = mysqli_real_escape_string( $mysqli, $pwdhash );
$pwdhash = password_hash( $pwdhash, PASSWORD_DEFAULT );

$stmt->execute();

// Handle SQL errors
if( $errno != 0 ){
	// Handle SQL errors
	header( "HTTP/1.1 502 Bad Gateway" );
	echo json_encode( array( 'error' => $stmt->errno . " " . $stmt->error ));
	
	$stmt->close();
	$mysqli->close();

	exit();
} 

// Close the query and connection
$stmt->close();
$mysqli->close();

// Success response
header( "HTTP/1.1 200 OK" );
header( 'Location: ../index.php' );
console.log( 'Sign-up successful.' );
	
exit();

<?php

include_once 'session.php';
include_once 'db_connect.inc.php';

// Show errors; for user_retrieve
ini_set('display_errors', 1);
error_reporting(~0);

// Prepare a statement
$stmt = $mysqli->prepare("
	UPDATE User
	SET email = ?,
			fname = ?,
			lname = ?,
			sex = ?,
			birthday = ?,
			phone = ?,
			location = ?,
			country = ?,
			introduction = ?
	WHERE user_id = ?
");

$stmt->bind_param( "sssssssssi", $email, $fname, $lname, $sex, $birthday, $phone, $location, $country, $introduction, $user_id );

// Sanitize form data
$email = $_POST[ 'email' ];
$email = trim( $email );

$fname = $_POST[ 'first_name' ];
$fname = trim( $fname );
$fname = stripslashes( $fname );
$fname = mysqli_real_escape_string( $mysqli, $fname );

$lname = $_POST[ 'last_name' ];
$lname = trim( $lname );

$sex = $_POST[ 'sex' ];
$sex = trim( $sex );

$birthday = $_POST[ 'birthday' ];
$birthday = trim( $birthday );

$phone = $_POST[ 'mobile' ];
$phone = trim( $phone );

$location = $_POST[ 'location' ];
$location = trim( $location );

$country = $_POST[ 'country' ];
$country = trim( $country );

$introduction = $_POST[ 'introduction' ];

$user_id = $_SESSION[ 'user_id' ];

$stmt->execute();

// Debug variables
$rows = $stmt->affected_rows;
$error = strval( $stmt->errno ) . " " . strval( $stmt->error );
$error = "error<br>user_id: " . $_SESSION[ 'user_id' ]. "<br>affected rows: " . $rows . "<br>error: " . $error;

// Handle SQL errors

// MySql error 1062 Duplicate entry (i.e. violated UNIQUE constraint)
if( $stmt->errno == 1062 ){
	header( "HTTP/1.1 403 Forbidden" );
	echo $error;
	
	$stmt->close();
	$mysqli->close();

	exit();
}

// Unspecified SQL errors
if( $stmt->errno != 0 ){
	header( "HTTP/1.1 502 Bad Gateway" );
	echo $error;
	
	$stmt->close();
	$mysqli->close();

	exit();
}

// Close the query and connection
$stmt->close();
$mysqli->close();

// Success response
header( "HTTP/1.1 200 OK" );
//header( 'Location: ../users/user-landing.php' );
echo "success<br>user_id: " . $_SESSION[ 'user_id' ]. "<br>affected rows: " . $rows;

exit();

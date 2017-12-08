<?php

/*
	This script provides a function to retrieve data from the DB table User and store it in session variables.
	If user is not found, the script returns without making changes.
	
	The session variable $_SESSION[ 'user_id' ] is used for User PID.
	Session variables are named as Sql table names.
*/

function user_retrieve() {
	
	include_once 'session.php';
	include_once 'db_connect.inc.php';
	
	// Show errors; for debugging
	ini_set('display_errors', 1);
	error_reporting(~0);
	
	$query = "
		SELECT user_id, email, fname, lname, sex, birthday, phone, location, country, introduction, picture_url
		FROM User
		WHERE user_id = ?
	";
	
	if( !$stmt = $mysqli->prepare( $query )) {
		header( "HTTP/1.1 500 Internal Server Error" );
		echo "Error while preparing statement.";
		
		$stmt->close();
		$mysqli->close();
		
		exit();
	}
	
	$stmt->bind_param( "i", $user_id );
	
	$user_id = $_SESSION[ 'user_id' ];
	
	if( !$stmt->execute()) {
		header( "HTTP/1.1 502 Bad Gateway" );
		echo "Error while executing query.";
		
		$stmt->close();
		$mysqli->close();
		
		exit();
	}
	
	$stmt->bind_result( $user_id, $email, $fname, $lname, $sex, $birthday, $phone, $location, $country, $introduction, $picture_url );
	
	if( !$stmt->fetch()) {
		echo "User not found.";
		
		$stmt->close();
		$mysqli->close();
		
		return;
	}
	
	$_SESSION[ 'email' ] = $email;
	$_SESSION[ 'fname' ] = $fname;
	$_SESSION[ 'lname' ] = $lname;
	$_SESSION[ 'sex' ] = $sex;
	$_SESSION[ 'birthday' ] = $birthday;
	$_SESSION[ 'phone' ] = $phone;
	$_SESSION[ 'location' ] = $location;
	$_SESSION[ 'country' ] = $country;
	$_SESSION[ 'introduction' ] = $introduction;
	$_SESSION[ 'picture_url' ] = $picture_url;
	
	$stmt->close();
	$mysqli->close();
	
	return;
}

/*
// Debug. Run this script separately for testing.
session_start();
user_retrieve();
echo "user data:";
echo "<br>" . $user_id = $_SESSION[ 'user_id' ];
echo "<br>" . $_SESSION[ 'email' ];
echo "<br>" . $_SESSION[ 'fname' ];
echo "<br>" . $_SESSION[ 'lname' ];
echo "<br>" . $_SESSION[ 'sex' ];
echo "<br>" . $_SESSION[ 'birthday' ];
echo "<br>" . $_SESSION[ 'phone' ];
echo "<br>" . $_SESSION[ 'location' ];
echo "<br>" . $_SESSION[ 'country' ];
echo "<br>" . $_SESSION[ 'introduction' ];

exit();
*/
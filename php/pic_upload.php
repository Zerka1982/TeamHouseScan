<?php
include_once "../php/session.php";

// Show errors; for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);
error_reporting(~0);

// Check that there was actually something uploaded
if( empty( $_FILES ) || !isset( $_FILES['picture']['error'] )){
	header( 'HTTP/1.1 400 Bad Request' );
	
	echo "Nothing uploaded.";
	
	exit();
}

// Check for upload errors
if( $_FILES['picture']['error'] || $_FILES['picture']['error'] != UPLOAD_ERR_OK ){
	header( 'HTTP/1.1 500 Internal Server Error' );
	
	echo "Error: " . $_FILES['picture']['error'];
	
	exit();
}

// Determine file name for storage; i.e. profilepic123.jpg for user_id 123
//$filename = trim( $_FILES['picture']['tmp_name'] );




// Move uploaded file to permanent storage
$filename = 'profile-picture' . $_SESSION[ 'user_id' ];
$filepath = '../users/user-pictures/' . $filename . pathinfo($_FILES["picture"]["name"])['extension'];

if( !move_uploaded_file( $_FILES['picture']['tmp_name'], $filepath ) ){
	header( 'HTTP/1.1 500 Internal Server Error' );
	
	echo "Could not move the uploaded file.";
	
	exit();
}

// Handle success
header( "HTTP/1.1 200 OK" );
header( 'Location: ../users/user-profile.php' );

echo "File successfully uploaded.";

echo "<br><br>";
echo $filepath . "<br><br>";
var_dump( $_FILES );

exit();

<?php

require_once 'session_end.php';
endSession();

header( "HTTP/1.1 200 OK" );
header( 'Location: ../index.php' );

exit();

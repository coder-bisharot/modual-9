<?php
// Connect to MySQL database
$servername = "localhost";
$username   = "root";
$password   = "bishatot@123";
$dbname     = "myblog";

$conn = mysqli_connect( $servername, $username, $password, $dbname );

// Check connection
if ( !$conn ) {
 die( "Connection failed: " . mysqli_connect_error() );
}

?>
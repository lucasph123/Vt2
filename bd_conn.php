<?php
$server = "127.0.0.1";
$user = "root"; 
$password = ""; 
$database = "vt"; 
$hostname = "localhost"; 
$conn = mysqli_connect( $server, $user, $password, $database ); 

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
<?php
$servername = "localhost";
$username = "root";
$password = "password";
$db ="letzget2gether";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
    
}
?>
<?php
// db_config.php
$host = "localhost";
$user = "Admin";
$pass = "Admin@123";
$dbname = "bajrang_manas";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error); 
}

// Global domain setting
$folder = 'bajrang_manas';
$domain = '/'. $folder .'/';
?>
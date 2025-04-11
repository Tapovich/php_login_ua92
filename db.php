<?php
$host = 'localhost';
$user = 'root';
$pass = 'root';
$db_name = 'test_db';

$conn = new mysqli($host, $user, $pass, $db_name);

if($conn->connect_error){
    die("Connection Failed: " . $conn->connect_error);
}
?>
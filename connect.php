<?php
$host = "localhost";
$username = "root"; // or your DB username
$password = "";     // or your DB password
$database = "ITB";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

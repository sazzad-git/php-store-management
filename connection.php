<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "store_db";

$conn = new mysqli($hostname, $username, $password, $database);

if ($conn->connect_error) {
    die("connection failed" . $conn->connect_error);
}
?>
<?php
ob_start();

$servername = "localhost";
$username = "";
$password = "";
$db = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

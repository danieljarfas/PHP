<?php

$servername = "localhost";
$username = "username2";
$password = "T8zeHNRcEJ0o7Ua7";
$db = "ulesrend";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$conn->set_charset("utf8");

?> 
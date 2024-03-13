<?php
// Establish a connection to your database
$server = "localhost";
$user = "root";
$password = "";
$dbname = "fashions";
$conn = new mysqli($server, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

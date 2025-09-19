<?php
// Define database parameters
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'todolist';

// Connect database
$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
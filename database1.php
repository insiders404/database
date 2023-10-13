<?php
$servername = "localhost";
$username = "root";
$password = ""; // <-- Put your actual database password here
$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    $sql = "CREATE DATABASE shree";
    if ($conn->query($sql) === TRUE) {
        echo "Database created successfully";
    } else {
        echo "Error creating database: " . $conn->error;
    }
}

$conn->close();
?>

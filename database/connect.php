<?php
$servername = "localhost";
$username = "sheriff";
$password = "Adetunji12#";
$dbname = "contactdb";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// $conn->close();

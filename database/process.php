<?php

require_once './connect.php';

$fname = $_POST["fullname"];
$email = $_POST["email"];
$tel = $_POST["telephone"];
$message = $_POST["message"];


// Prepare statement to avoid SQL injection
$stmt = $conn->prepare("INSERT INTO contacts (fullname, email, telephone, message)
 VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $fname, $email, $tel, $message);

if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();

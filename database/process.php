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
    echo "New record created successfully.<br>";
    echo "Thank you $fname for the message: $message, we will get back to you @ $email.<br>";
} else {
    echo "Error: " . $stmt->error;
    echo "<br>";
    echo "Something went wrong. Please try again!";
}

$stmt->close();
$conn->close();

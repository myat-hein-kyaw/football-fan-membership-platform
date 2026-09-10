<?php
session_start();
include('dbconfig.php');

// Get user input
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Hash the password for security
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Prepare and execute the SQL query to insert a new user
$sql = "INSERT INTO `admin_table` (`username`, `email`, `password`) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);

if ($stmt) {
    $stmt->bind_param("sss", $username, $email, $hashedPassword);

    if ($stmt->execute()) {
        // Registration successful, redirect to thank you page
        header('location: index.php');
        exit();
    } else {
        // Registration failed, display the error
        echo "Error executing SQL query: " . $stmt->error;
    }

    $stmt->close();
} else {
    // Display an error if the prepare statement fails
    echo "Error preparing SQL statement: " . $conn->error;
}

$conn->close();
?>

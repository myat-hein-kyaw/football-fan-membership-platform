<?php
session_start();
include('./dbconfig.php');

// Check if form is submitted
if(isset($_POST['register'])) {
    // Get form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Use prepared statement to prevent SQL injection
    $sql = "INSERT INTO `user` (`username`, `usergmail`, `userpassword`) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $username, $email, $hashedPassword);
    $stmt->execute();

    // Redirect to login page after successful registration
    header('location:login.php');
    
    $stmt->close();
    $conn->close();
}
?>

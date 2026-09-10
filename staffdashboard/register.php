<?php
session_start();
include('./dbconfig.php');

if (
    isset($_POST['staffName']) &&
    isset($_POST['staffAge']) &&
    isset($_POST['staffEmail']) &&
    isset($_POST['staffPassword'])
) {

    $staffName = $_POST['staffName'];
    $staffAge = $_POST['staffAge'];
    $staffEmail = $_POST['staffEmail'];
    $staffPassword = $_POST['staffPassword'];


    $hashedPassword = password_hash($staffPassword, PASSWORD_DEFAULT);

 
    $sql = "INSERT INTO `staff` (`staffname`, `staffage`, `staffemail`, `staffpassword`) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $staffName, $staffAge, $staffEmail, $hashedPassword);

    if ($stmt->execute()) {
  
        $_SESSION['staffEmail'] = $staffEmail;
        $_SESSION['staffName'] = $staffName;
        header('location: indexlogin.php');
    } else {

        header('location: register.php?register_error=true');
    }

    $stmt->close();
    $conn->close();
} else {
    // If fields are not set, redirect to the registration form
    header('location: indexregister.php');
    // You can echo an error message or perform additional actions as needed
}
?>

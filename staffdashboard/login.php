<?php
session_start();
include('./dbconfig.php');

if (isset($_POST['staffEmail']) && isset($_POST['staffPassword'])) {
    $staffEmail = $_POST['staffEmail'];
    $staffPassword = $_POST['staffPassword'];

    $sql = "SELECT * FROM `staff` WHERE `staffemail`=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $staffEmail);
    $stmt->execute();

    $result = $stmt->get_result();

    if (!$result) {
        die('Error in execute statement: ' . htmlspecialchars($stmt->error));
    }

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        if (password_verify($staffPassword, $row['staffpassword'])) {
            $_SESSION['staffEmail'] = $row['staffemail'];
            $_SESSION['staffName'] = $row['staffname'];

            header('location: ../staffdashboard/staff_dashboard.php');
            exit();
        } else {
            header('location: ../staffdashboard/indexlogin.php?login_error=invalid_password');
            exit();
        }
    } else {
        header('location: ../staffdashboard/indexlogin.php?login_error=user_not_found');
        exit();
    }

    $stmt->close();
    $conn->close();
} else {
    header('location: ../staffdashboard/indexlogin.php');
}
?>

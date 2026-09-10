<?php
session_start();
include('dbconfig.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['useremail']) && isset($_POST['userpassword'])) {
        $useremail = $_POST['useremail'];
        $userpassword = $_POST['userpassword'];

        // Use prepared statement to prevent SQL injection
        $sql = "SELECT * FROM user WHERE `usergmail`=?";
        $stmt = $conn->prepare($sql);

        if (!$stmt) {
            trigger_error('Error in preparing the statement: ' . $conn->error, E_USER_ERROR);
        }

        $stmt->bind_param("s", $useremail);
        $stmt->execute();

        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $hashedPassword = $row['userpassword'];

            // Verify password
            if (password_verify($userpassword, $hashedPassword)) {
                $_SESSION['userEmail'] = $row['usergmail'];
                $_SESSION['userName'] = $row['username'];
                header('location: index.php');
                exit(); // Ensure script stops execution after redirect
            } else {
                header('location: login.php?login_error=invalid_password');
                exit();
            }
        } else {
            header('location: login.php?login_error=user_not_found');
            exit();
        }

        $stmt->close();
    } else {
        header('location: login.php?login_error=invalid_request');
        exit();
    }
} else {
    header('location: login.php?login_error=invalid_request');
    exit();
}
?>

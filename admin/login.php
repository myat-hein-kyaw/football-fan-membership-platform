<?php
session_start();
include('./dbconfig.php');

if(isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `admin_table` WHERE `email`=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();

    $result = $stmt->get_result();

    if($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Verify the entered password with the hashed password from the database
        if (password_verify($password, $row['password'])) {
            $_SESSION['email'] = $row['email'];
            header('location: ../dashboard/index.php');
        } else {
            header('location: ../admin/index.php?login_error=true');
        }
    } else {
        header('location: ../admin/index.php?login_error=true');
    }

    $stmt->close();
    $conn->close();
} else {
    header('location: ./index.php');
}
?>

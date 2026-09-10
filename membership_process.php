<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include('dbconfig.php');

session_start(); // Start the session

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and validate input
    $paymentType = $conn->real_escape_string($_POST['paymentType']);
    $accountNo = $conn->real_escape_string($_POST['accountNo']);
    $accountName = $conn->real_escape_string($_POST['accountName']);

    // File upload handling
    $uploadDir = 'uploads/';
    $uploadFile = $uploadDir . basename($_FILES['paymentImage']['name']);

    if (move_uploaded_file($_FILES['paymentImage']['tmp_name'], $uploadFile)) {

        // Prepare and execute SQL query
        $sql = "INSERT INTO payment_type (paymenttype, accountno, accountname, image) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ssss', $paymentType, $accountNo, $accountName, $uploadFile);

        if ($stmt->execute()) {
            // Assuming the payment was successful, set session variables
            $_SESSION['payment_success'] = true;
            $_SESSION['user_id'] = $accountName;  // You can use the actual user's name or ID

            // Set Membership Status to "paid"
            $_SESSION['membershipStatus'] = 'paid';

            // Redirect back to referring page with a success message
            $referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'index.php';
            header("Location: $referer?payment_success=true");
            exit();
        } else {
            // Handle SQL execution error
            echo "Error executing SQL query: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        // Handle file upload error
        echo "Error uploading file.";
    }
} else {
    // Redirect to an error page if the request method is not POST
    header("Location: /error.php");
    exit();
}

// Close the database connection
$conn->close();
?>

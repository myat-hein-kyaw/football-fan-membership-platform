<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "grouped_epl_fans";

// Create a function to establish a database connection
function connectToDatabase($servername, $username, $password, $dbname) {
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

// Check the session status
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Extract payment ID and action from the form
    $paymentId = $_POST['payment_id'];
    $action = isset($_POST['accept']) ? 'accept' : (isset($_POST['reject']) ? 'reject' : null);

    if ($action) {
        // Perform the action based on the form submission
        $status = ($action === 'accept') ? 'accepted' : 'rejected';
        $message = ($action === 'accept') ? 'Your membership has been approved.' : 'Your payment has been rejected.';

        // Create a function to update payment status
        function updatePaymentStatus($conn, $paymentId, $status, $message) {
            $updateSql = "UPDATE payment_type SET status = ?, message = ? WHERE paymenttypeid = ?";
            $stmt = $conn->prepare($updateSql);

            if (!$stmt) {
                die("Error preparing the update statement: " . $conn->error);
            }

            $stmt->bind_param('ssi', $status, $message, $paymentId);

            if (!$stmt->execute()) {
                die("Error updating payment status: " . $stmt->error);
            }

            // Close the prepared statement
            $stmt->close();
        }

        // Use the database connection function and update function
        $conn = connectToDatabase($servername, $username, $password, $dbname);
        updatePaymentStatus($conn, $paymentId, $status, $message);

        // Close the database connection
        $conn->close();

        // Redirect to the confirmation_customer_membership.php after processing
        header("Location: /new_grouped_epl_fans/staffdashboard/app/pages/membershippayments/confirmation_customer_membership.php");
        exit();
    } else {
        // Handle the case where neither 'accept' nor 'reject' is set in the form
        header("Location: /error.php");
        exit();
    }
} else {
    // Redirect to an error page for invalid request method
    header("Location: /error.php");
    exit();
}
?>

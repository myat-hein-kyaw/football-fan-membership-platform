<?php
// Include your database connection file
include('../admin/dbconfig.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['confirm'])) {
        // Process confirmation
        $membershipId = $_POST['membershipId'];
        $sql = "UPDATE payment_type SET confirmed = 1 WHERE id = $membershipId"; // Assuming 'id' is the primary key
        $conn->query($sql);
    } elseif (isset($_POST['reject'])) {
        // Process rejection
        $membershipId = $_POST['membershipId'];
        $sql = "DELETE FROM payment_type WHERE id = $membershipId"; // Assuming 'id' is the primary key
        $conn->query($sql);
    }

    // Redirect back to confirmation_customer_membership.php
    header('Location: confirmation_customer_membership.php');
    exit();
} else {
    // Redirect to an error page for invalid request method
    header('Location: error.php');
    exit();
}

// Close the database connection
$conn->close();
?>

<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['confirm'])) {
        // Process confirmation
        // Retrieve paymentId from $_POST['paymentId'] and perform necessary actions
        $paymentId = $_POST['paymentId'];
        // ... (your confirmation logic)
    } elseif (isset($_POST['reject'])) {
        // Process rejection
        // Retrieve paymentId from $_POST['paymentId'] and perform necessary actions
        $paymentId = $_POST['paymentId'];
        // ... (your rejection logic)
    }

    // After processing, you might want to redirect to another page or display a message.
    // For example:
    header("Location: success_page.php");
    exit();
} else {
    // Redirect to error page for invalid request method
    header("Location: error.php");
    exit();
}

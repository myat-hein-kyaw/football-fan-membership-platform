<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($membershipStatus)) {
    $membershipStatus = 'unpaid';
}

if (!isset($loggedInUser)) {
    $loggedInUser = null;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Grouped EPL Fans Website</title>

<link rel="stylesheet" href="./header,footerandcss/style.css">
<link rel="stylesheet" href="./Vendor/Bootstrap.css">
<link rel="stylesheet" href="./Vendor/fontawesome/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
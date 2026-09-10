<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Include your database connection file
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "grouped_epl_fans";

// Check the connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the payment_type table
$sql = "SELECT * FROM payment_type ORDER BY paymenttypeid DESC";
$result = $conn->query($sql);

if (!$result) {
    die("Error executing the query: " . $conn->error);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - Staff</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="<?php echo $_SESSION['project-path']?>/staffdashboard/vendors/sb-admin/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body class="sb-nav-fixed">
    <?php include '../../pages/template/topbar.php'; ?>
    <?php include '../../session/app.php'; ?>
    <div id="layoutSidenav">
        <?php include '../template/sidebar.php'; ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h3 class="mt-4">Confirmation Customer Membership</h3> 

                    <?php
                    if ($result->num_rows > 0) {
                        ?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Payment Type</th>
                                    <th scope="col">Account Number</th>
                                    <th scope="col">Account Name</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $rowNumber = 1;
                                while ($row = $result->fetch_assoc()) {
                                    // Build the full URL for the image
                                    $fullImagePath = $row['image'];
                                ?>
                                    <tr>
                                        <th scope="row"><?php echo $rowNumber; ?></th>
                                        <td><?php echo $row['paymenttype']; ?></td>
                                        <td><?php echo $row['accountno']; ?></td>
                                        <td><?php echo $row['accountname']; ?></td>
                                        <td>
                                            <!-- Display the image -->
                                            <img src="<?php echo $fullImagePath; ?>" alt="Payment Image" style="width: 100px;">
                                        </td>
                                        <td>
                                            <!-- Add your accept/reject buttons or form here -->
                                            <form method="post" action="process_payment.php">
                                                <input type="hidden" name="payment_id" value="<?php echo $row['paymenttypeid']; ?>">
                                                <button type="submit" name="accept" class="btn btn-success">Accept</button>
                                                <button type="submit" name="reject" class="btn btn-danger">Reject</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php
                                    $rowNumber++;
                                }
                                ?>
                            </tbody>
                        </table>
                        <?php
                    } else {
                        echo "<p>No data found.</p>";
                    }
                    ?>

                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Designs & Developed By Myat Hein Kyaw</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script>
    function removeRow(paymentId) {
        // Make an AJAX request to delete the row from the database
        // ...

        // Assuming you have a PHP script to handle the deletion, e.g., delete_row.php
        fetch('/path/to/delete_row.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ paymentId: paymentId }),
        })
        .then(response => response.json())
        .then(data => {
            // If the deletion is successful, remove the row from the HTML
            if (data.success) {
                document.getElementById('row_' + paymentId).remove();

                // Show alert to the customer in index.php
                showAlert(data.membership);
            } else {
                console.error('Error deleting row from the database.');
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    }

    function showAlert(membership) {
        // Customize the alert message based on the customer's membership
        alert('You are the ' + membership + ' membership customer.');
    }
</script>
</body>
</html>

<?php
// Close the database connection
$conn->close();
?>

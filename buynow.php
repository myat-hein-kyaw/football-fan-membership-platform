
<?php include('header,footerandcss/header.php');
  include('header,footerandcss/navbar.php');  
  
  
  
  
  ?>
<style>
    body {
        margin: 0;
        padding: 0;
        background-image: url('https://dailypost.ng/wp-content/uploads/2022/09/Premier-League.jpg'); /* Replace with your image path */
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
    }

    .transparent-form {
        background-color: rgba(0, 0, 0, 0.7); /* Adjust the alpha value for transparency */
        padding: 20px;
        border-radius: 10px;
        margin: 50px 0px;
    }

    .transparent-form label,
    .transparent-form input,
    .transparent-form select {
        color: #fff;
    }

    .transparent-form button {
        background-color: #007bff;
        color: #fff;
    }
</style>

<!-- Your existing HTML and CSS code -->

<div class="container-fluid transparent-form">
    <div class="row">
        <div class="title col-md-12 pt-2 pb-2 text-center w-header">
            <h1>Payment Details</h1>
        </div>
        <div class="col-md-6 offset-md-3">
            <!-- Form for payment details -->
            <form action="membership_process.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="paymentType" class="form-label">Payment Type</label>
                    <select class="form-select text-dark" id="paymentType" name="paymentType" required>
                        <option class="text-dark" value="credit_card">Credit Card</option>
                        <option class="text-dark" value="debit_card">Debit Card</option>
                        <option class="text-dark" value="bank_transfer">Bank Transfer</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="accountNo" class="form-label">Account Number</label>
                    <input type="text" class="form-control text-dark" id="accountNo" name="accountNo" required>
                </div>
                <div class="mb-3">
                    <label for="accountName" class="form-label">Account Name</label>
                    <input type="text" class="form-control text-dark" id="accountName" name="accountName" required>
                </div>
                <div class="mb-3">
                    <label for="membershipDuration" class="form-label">Membership Duration</label>
                    <select class="form-select text-dark" id="membershipDuration" name="membershipDuration" required>
                        <option value="oneday">One Day</option>
                        <option value="onemonth">One Month</option>
                        <option value="oneyear">One Year</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="paymentImage" class="form-label">Upload Payment Image</label>
                    <input type="file" name="paymentImage" id="paymentImage">
                </div>
                <button type="submit" class="btn btn-primary">Submit Payment</button>
            </form>
        </div>
    </div>
</div>

<!-- Include the footer -->
<?php include('header,footerandcss/footer.php'); ?>

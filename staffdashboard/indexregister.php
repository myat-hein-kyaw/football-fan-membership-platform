<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grouped EPL Website Staff Registration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
</head>
<body>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-attachment: fixed;
            background-image:url("https://static.dezeen.com/uploads/2018/08/nike-merlin-offical-match-ball-football-premier-league-la-liga-design_dezeen_2364_col_6.jpg");
            background-size: 100% 100%;
            background-repeat: no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            max-width: 440px;
            padding: 60px;
            background-color: rgba(130, 62, 62, 0.8);
            border-radius: 4px;
            color: bisque;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 10px;
        }

        .form-control{
            color: #000000;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group input[type="text"],
        .form-group input[type="number"],
        .form-group input[type="email"],
        .form-group input[type="password"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-group button {
            width: 100%;
            padding: 8px;
            background-color: #8f2926;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: #a3972e;
        }

        a {
            text-decoration: none;
        }
    </style>
    <div class="container">
        <h2>Grouped EPL Fans Staff Registration</h2>
        <form action="./register.php" method="post">
            <div class="form-group">
                <label for="staffName">Staff Name:</label>
                <input class="form-control" type="text" id="staffName" name="staffName" required>
            </div>
            <div class="form-group">
                <label for="staffAge">Staff Age:</label>
                <input class="form-control" type="number" id="staffAge" name="staffAge" required>
            </div>
            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" name="staffEmail" id="email" placeholder="Enter your email address" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" value="" name="staffPassword" id="staffPassword" placeholder="Password" required>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" onclick="myFunction()">
                <label class="form-check-label">Show Password</label>
            </div>
            <div class="form-group">
                <button type="submit">Register</button>
                <?php
                if (isset($_GET['registration_error']) && $_GET['registration_error'] == 'true') {
                    echo '<p class="text-center">Error during registration. Please try again.</p>';
                }
                ?>
            </div>
        </form>
        <div class="row mt-3">
            <div class="col-md-12">
                <a href="./index.php">
                    <p class="text-info">
                        Already have an account? Login here!
                    </p>
                </a>
            </div>
        </div>
    </div>

    <script src="./Vendor/bootstrap.bundle.min.js"></script>
    <script src="./Vendor/jquery.js"></script>
    <script>
        function myFunction() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
    </script>
</body>
</html>

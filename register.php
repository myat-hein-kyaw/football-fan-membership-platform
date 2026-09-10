<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grouped EPL Website Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url("img/c.jpg");
            background-size: 100% 100%;
            background-repeat: no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            max-width: 400px;
            padding: 40px;
            color:#fff;
            background-color: #343737;
            border-radius: 4px;
            box-shadow: 0 0 10px rgba(91, 67, 67, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group input[type="text"],
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
            background-color: #52c752;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: #45a049;
        }

        .form-group .form-footer {
            text-align: center;
            margin-top: 20px;
        }

        .form-group .form-footer a {
            text-decoration: none;
        }
    </style>
    <div class="container">
        <h2>Grouped EPL Fans Registeration</h2>
        <!-- Your form in register.php -->
            <form action="registerinfo.php" method="post">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" name="username" id="username" placeholder="Enter your username" required>
                </div>
                <div class="form-group">
                    <label for="email">Email Address:</label>
                    <input type="email" name="email" id="email" placeholder="Enter your email address" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" placeholder="Enter your password" required>
                </div>
                <div class="form-group">
                    <button type="submit" name="register">Register</button>
                </div>
            </form>

        <div class="form-footer">
            <p>Already have an account? <a href="login.php">Login</a></p>
        </div>
    </div>
</body>
</html>

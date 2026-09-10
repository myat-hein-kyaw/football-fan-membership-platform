<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grouped EPL Website Registration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-attachment: fixed;
            background-image: url("https://e00-marca.uecdn.es/assets/multimedia/imagenes/2023/11/26/17010266131185.jpg");
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

        .form-control {
            color: #000000;
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
</head>
<body>
    <div class="container mt-5">
        <h2>Admin Registration</h2>
        <form action="register.php" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="Enter your username" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email address" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password" required>
            </div>
            <div class="form-group">
                <button type="submit">Register</button>
                <?php
                if (isset($_GET['login_error']) && $_GET['login_error'] == 'true') {
                    echo '<p class="text-center">Invalid email or password.</p>';
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

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wjflJDE4DlFOJZn5me4AHqnXDAzZBkRxK+CAW+8FZDHxJUnQlmh/jF5dQ8FNOd5f" crossorigin="anonymous"></script>
</body>
</html>

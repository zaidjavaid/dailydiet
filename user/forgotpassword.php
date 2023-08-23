<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <script src="../assets/jquery.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <?php include('../validation.php'); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500;700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- Custom CSS for the page -->
    <style>
        body {
            font-family: Arial, sans-serif;
            /* background-color: #f8f9fa; */
            background-color: #a5f5f2;
        }

        .forgot-form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #a5f5f2;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            margin-top: 100px;
        }

        .form-group label {
            font-weight: bold;
        }

        .form-group input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .form-group button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form-group button:hover {
            /* background-color: #0056b3; */
            background-color: #ff8000;
        }
    </style>
    <script>
        function validatePassword() {
            let newPassword = document.getElementById("newPassword").value;
            let confirmPassword = document.getElementById("confirmPassword").value;

            if (newPassword !== confirmPassword) {
                alert("Passwords do not match. Please make sure the passwords match.");
                return false;
            }

            return true;
        }
    </script>
</head>

<body>


    <div class="container">
        <div class="forgot-form">
            <h2 class="text-center">Forgot Password</h2>
            <p class="text-center">Please enter your email address below and a new password.</p>
            <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>" onsubmit="return validatePassword()">
                <div class="form-group">
                    <input type="email" placeholder="user@gmail.com" id="email" name="email" required>


                    <input type="password" placeholder="New Password" id="newPassword" name="new_password" maxlength="20" minlength="6" required>

                    <input type="password" placeholder="Confirm Password" id="confirmPassword" name="confirm_password" maxlength="20" minlength="6" required><br>
                </div>
                <div class="form-group">
                    <button type="submit">Reset Password</button>
                </div>
            </form>
            <p class="text-center">Remember your password? <a href="login.php">Log in</a></p>
        </div>
    </div>


    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $new_password = $_POST['new_password'];
        include('../admin/db.php');
        $sql = "UPDATE users set pass='$new_password' WHERE email='$email'";
        $result = mysqli_query($con, $sql);
        if ($result) {
            // header('location:login.php');
            echo "<script>window.location.href='login.php';</script>";
            exit;
        } else {
            echo "<script>alert('Invalid Username or Password');</script>";
        }
    }

    ?>

</body>

</html>
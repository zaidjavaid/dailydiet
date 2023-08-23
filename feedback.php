<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include('../dm/admin/db.php');
    // Sanitize user inputs to prevent SQL injection
    $name = ucwords(mysqli_real_escape_string($con, $_POST['name']));
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $message = mysqli_real_escape_string($con, $_POST['message']);

    // Include db.php after sanitizing inputs

    // Prepare and execute the SQL query
    $sql = "INSERT INTO feedback(name, email, message) VALUES ('$name', '$email', '$message')";
    $result = mysqli_query($con, $sql);

    // Check if the query was successful
    if ($result) {
        echo "<script>alert('Thank You for your Feedback');</script>";
    } else {
        echo "<script>alert('Feedback Not Submitted');</script>";
    }

    // Close the database connection
    mysqli_close($con);

    // Redirect user after processing
    echo "<script>window.location.href='index.php';</script>";
}

<?php


session_start();
unset($_SESSION['loggedInUser']);
unset($_SESSION['$name']);
unset($_SESSION['loggedInUserId']);
header('location:login.php');
exit;

<?php


session_start();
unset($_SESSION['loggedAdmin']);
header('location:login.php');

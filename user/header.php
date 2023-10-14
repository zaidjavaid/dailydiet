<?php
ob_start();
include('../admin/db.php');

session_start();
if (!isset($_SESSION['loggedInUser'])) {
	header('location:login.php');
}

?>

<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500;700&display=swap" rel="stylesheet">
</head>

<body>

	<div class="header">
		<div style="float: left ; font-size: 30px;"><span style="color: #a60385">USER</span> Panel &nbsp; &nbsp;&nbsp; <b> <span style="font-size: 20px"> </b> </span>&nbsp; &nbsp;&nbsp;<span style="font-size: 13px">Health is wealth</span></div>
		<div style="float: right; "><a href="logout.php" style="text-decoration: none; color: tomato">Logout</a></div>
	</div>

</body>

</html>



<style type="text/css">
	body {
		margin: 0;
		background-color: white;
		font-family: 'Ubuntu', sans-serif;
	}

	.header {
		background-color: #343434;
		padding: 20px;
		color: #f2f2f2;
		position: fixed;
		top: 0;
		left: 0;
		right: 0;
	}
</style>
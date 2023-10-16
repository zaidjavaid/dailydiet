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

	<!-- <div class="header">
		<div style="float: left ; font-size: 30px;"><span style="color: #a60385">USER</span> Panel &nbsp; &nbsp;&nbsp; <b> <span style="font-size: 20px"> </b> </span>&nbsp; &nbsp;&nbsp;<span style="font-size: 13px">Health is wealth</span></div>
		<div style="float: right; "><a href="logout.php" style="text-decoration: none; color: tomato">Logout</a></div>
	</div> -->

	<div class="header">
		<div class="header-left">
			<h1>User Panel</h1>
			<span>Health is Wealth</span>
		</div>
		<div class="header-right">
			<a href="logout.php">Logout</a>
		</div>
	</div>


</body>

</html>



<!-- <style type="text/css">
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
</style> -->
<style type="text/css">
	.header {
		background-color: #34495e;
		color: #ffffff;
		padding: 14px;
		display: flex;
		position: fixed;
		top: 0;
		left: 0;
		right: 0;
		justify-content: space-between;
		align-items: center;
		box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);

	}

	.header-left {
		margin-left: 20px;
	}

	.header-left h1 {
		font-size: 35px;
		margin: 0;
	}

	.header-left span {
		font-size: 14px;
		opacity: 0.8;
		margin-left: 20px;
		float: right;
	}

	.header-right {
		margin-right: 20px;
	}

	.header-right a {
		text-decoration: none;
		color: #ffffff;
		font-size: 16px;
		border: 2px solid #ffffff;
		padding: 8px 20px;
		border-radius: 20px;
		transition: background-color 0.3s, color 0.3s;
	}

	.header-right a:hover {
		background-color: #ffffff;
		color: #34495e;

	}
</style>
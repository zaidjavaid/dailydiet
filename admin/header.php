<?php
ob_start();
include('db.php');
include('../validation.php');

session_start();
if (!isset($_SESSION['loggedAdmin'])) {
	header('location:login.php');
}
?>

<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<script src="../assets/jquery.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
	<?php include('../validation.php'); ?>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@1,300&family=Ubuntu:wght@500;700&display=swap" rel="stylesheet">
	<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
</head>

<body>

	<div class="header">
		<div style="float: left ; font-size: 35px;">Admin Panel&nbsp; &nbsp;&nbsp;<span style="font-size: 13px">Health is Wealth</span></div>
		<div style="float: right; "><a href="logout.php" style="text-decoration: none; color: white">Logout</a></div>
	</div>

</body>

</html>



<style type="text/css">
	body {
		margin: 0;
		font-family: 'Kanit', sans-serif;
		font-family: 'Ubuntu', sans-serif;
	}

	.header {
		background-color: #453;
		padding: 20px;
		color: whitesmoke;
		position: fixed;
		top: 0;
		left: 0;
		right: 0;
	}
</style>
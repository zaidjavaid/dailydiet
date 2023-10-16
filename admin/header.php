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

	<!-- <div class="header">
		<div style="float: left ; font-size: 35px;">Admin Panel&nbsp; &nbsp;&nbsp;<span style="font-size: 13px">Health is Wealth</span></div>
		<div style="float: right; "><a href="logout.php" style="text-decoration: none; color: white">Logout</a></div>
	</div> -->
	<div class="header">
		<div class="header-left">
			<h1>Admin Panel</h1>
			<span>Health is Wealth</span>
		</div>
		<div class="header-right">
			<a href="logout.php">Logout</a>
		</div>
	</div>


</body>

</html>



<style type="text/css">
	/* body {
		margin: 0;
		/* font-family: 'Kanit', sans-serif; */
	/* background-color: white;
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
	} */
</style>
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
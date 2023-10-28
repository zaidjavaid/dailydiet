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
</head>

<body>


	<ul>
		<li style="color: tomato; font-size: 20px; text-align: center;">Welcome<br />
			<?php echo $_SESSION['$name']; ?>
		</li>
		<li><a href="profile.php">My Profile</a></li>
		<li><a href="dashboard.php">Dashboard</a></li>
		<li> <a href="recommendations.php"> Dietary Recommendations</a>

		<li><a href="BMR.php">Calculate Basal Metabolic Rate (BMR) </a></li>


		<li><a href="diet_plan.php">Generate Diet Plan </a></li>


		<li><a href="log-food.php">Add Food Log</a></li>
		<li><a href="my-food-log.php">My Food Log</a></li>
		<li> <a href="progress.php">Today's Progress</a>
		<li><a href="activityLevel.php">My Activity Level</a></li>

		<li><a href="goal.php">My Goal </a></li>


		</li>


	</ul>

</body>

</html>

<style type="text/css">
	ul {
		padding: 0;
		margin: 0;
		background-color: #343434;
		width: 200px;
		position: fixed;
		top: 83px;
		left: 0;
		bottom: 0;
	}

	ul>li {

		padding: 5px;
		border-bottom: 1px solid whitesmoke;
	}

	ul>li>a {
		text-decoration: none;
		color: #f2f2f2;
		font-size: 17px;
	}

	ul>li>a:hover {


		color: orange;
	}
</style>
<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
	<title></title>
</head>

<body>

	<?php include('header.php');
	include('menu.php');
	include("../admin/db.php");
	$res = mysqli_query($con, "SELECT * from foodlog JOIN fooditems on foodlog.foodid= fooditems.foodid where userid='" . $_SESSION['loggedInUserId'] . "'  ");
	?>
	<div class="restsection">
		<div class="container" style="width: 90%; margin-left: 5%">
			<h1> My Food Diary</h1>
			<?php
			if (mysqli_num_rows($res) > 0) {
				echo "<table  style='margin:30px;' class='table table-bordered table-striped' >";
				echo "<tr class='info'>";
				echo "<th> Food Name </th>";
				echo "<th> Calories </th>";
				echo "<th> Protein </th>";
				echo "<th> Fats </th>";
				echo "<th> Carbohydrates</th>";
				echo "<th> Intake quantity(gm)</th>";
				echo "<th> Date/time</th>";
				echo "<th> Meal Type</th>";
				echo "</tr>";
				while ($record = mysqli_fetch_assoc($res)) {
					echo "<tr>";

					echo "<td> " .  $record["foodname"] . "</td>";
					echo "<td>" . $record['calories'] . "</td>";
					echo "<td>" . $record["protein"] . "</td>";
					echo "<td>" . $record["fats"] . "</td>";
					echo "<td>" . $record["carbohydrates"] . "</td>";
					echo "<td>" . $record["qnty"] . "</td>";
					echo "<td>" . $record["logdatetime"] . "</td>";
					echo "<td>" . $record["meal_typee"] . "</td>";

					echo "</tr>";
				}
				echo "</table>";
			} ?>
			<!-- Deleting user food diary -->
			<form method="post">
				<input type="submit" name="btn" value="Delete Food Diary" class="btn btn-danger">
			</form>

			<?php
			if (isset($_POST['btn'])) {
				include('../admin/db.php');
				// Get the user ID from the session.
				$userId = $_SESSION['loggedInUserId'];


				// SQL query to delete food items for the current logged-in user.
				$sql = "DELETE FROM foodlog WHERE userid = ?"; // Replace "food_logs" with your actual table name.
				// Prepare and execute the SQL query.
				if ($stmt = $con->prepare($sql)) {
					$stmt->bind_param("i", $userId); // Assuming "user_id" is an integer.

					if ($stmt->execute()) {
						// Deletion was successful.
						echo "</br>";
						echo "<hr>";
						echo "All food items have been deleted.";
					} else {
						// Handle deletion error.
						echo "Error: " . $stmt->error;
					}

					$stmt->close();
				} else {
					// Handle SQL statement preparation error.
					echo "Error: " . $con->error;
				}

				// Close the database connection.
				mysqli_close($con);
			}


			?>

		</div>
	</div>
</body>

</html>
<style type="text/css">
	.restsection {
		background-color: white;
		padding: 40px;
		margin-left: 200px;
		margin-top: 70px;
		height: 1000px;
	}
</style>
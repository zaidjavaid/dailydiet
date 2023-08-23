<!DOCTYPE html>
<html>

<head>
	<title></title>
</head>

<body>

	<?php include('header.php'); ?>
	<?php include('menu.php');



	include("../admin/db.php");

	$res = mysqli_query($con, "SELECT * from foodlog JOIN fooditems on foodlog.foodid= fooditems.foodid where userid='" . $_SESSION['loggedInUserId'] . "'  ");





	?>

	<div class="restsection">

		<div class="container" style="width: 90%; margin-left: 5%">
			<h1> My Food Log</h1>

			<?php


			if (mysqli_num_rows($res) > 0) {
				echo "<table  style='margin:30px;' class='table table-bordered table-striped' >";
				echo "<tr class='info'>";
				echo "<td> Food Name </td>";
				echo "<td> Calories </td>";
				echo "<td> Protein </td>";
				echo "<td> Fats </td>";
				echo "<td> Carbohydrates</td>";
				echo "<td> Intake quantity</td>";
				echo "<td> Date/time</td>";
				echo "<td> Meal Type</td>";

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
<?php
include 'db.php';
// Delete user if ID is provided in the URL
if (isset($_GET['delete_id'])) {
	$deleteId = $_GET['delete_id'];


	// SQL query to delete from the "fooditems" table.
	$sql = "DELETE FROM fooditems WHERE foodid = ?";
	$stmt = $con->prepare($sql);
	$stmt->bind_param("i", $deleteId); // 'i' indicates integer parameter
	if ($stmt->execute()) {
		echo "User with ID $deleteId has been removed successfully.";
	} else {
		echo "Error removing user: " . $stmt->error;
	}

	$stmt->close();
}


if (isset($_GET['delete_id'])) {
	$deleteId = $_GET['delete_id'];

	// SQL query to delete from the "foodlog" table.
	$sql = "DELETE FROM foodlog WHERE foodid = ?";
	$stmt = $con->prepare($sql);
	$stmt->bind_param("i", $deleteId); // 'i' indicates integer parameter
	if ($stmt->execute()) {
		echo "User with ID $deleteId has been removed successfully.";
	} else {
		echo "Error removing user: " . $stmt->error;
	}

	$stmt->close();
}

?>



<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
</head>

<body>

	<?php include('header.php'); ?>
	<?php include('menu.php'); ?>
	<div class="restsection">
		<h1 style="text-align: center; color: #333">All Food Items </h1>


		<?php
		$res = mysqli_query($con, "select * from fooditems ");
		if (mysqli_num_rows($res) > 0) {
			echo "<table  style='margin:30px;' class='table table-bordered table-striped' >";
			echo "<tr class='info'>";
			echo "<td> Food Name </td>";
			echo "<td> Calories </td>";
			echo "<td> Protein </td>";
			echo "<td> Fats </td>";
			echo "<td> Carbohydrates</td>";
			echo "<td> Meal Type</td>";
			echo "<td> Operation </td>";
			echo "</tr>";
			while ($record = mysqli_fetch_assoc($res)) {
				echo "<tr>";
				echo "<td> " .  $record["foodname"] . "</td>";
				echo "<td>" . $record['calories'] . "</td>";
				echo "<td>" . $record["protein"] . "</td>";
				echo "<td>" . $record["fats"] . "</td>";
				echo "<td>" . $record["carbohydrates"] . "</td>";
				echo "<td>" . $record["meal_type"] . "</td>";
				echo " <td><a href='?delete_id=" . $record['foodid'] . "'>Delete</a></td>";
				echo "</tr>";
			}
			echo "</table>";
		}
		echo "</br>";
		echo "</br>";
		?>
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
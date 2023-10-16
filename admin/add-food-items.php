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

		<div class="container" style="width: 80%; margin-left: 10%">
			<h1> Add Food Items</h1>
			<form method="post">

				<div class="form-group">
					<label>Food Name</label>
					<input type="text" id="inputTextBox" required name="foodname" class="form-control">
				</div>

				<div class="form-group">
					<label>Calories</label>
					<input type="text" id="Num2" required name="calories" class="form-control" maxlength="4" minlength="1">
				</div>


				<div class="form-group">
					<label>Protein</label>
					<input type="text" id="Num3" required name="protein" class="form-control" maxlength="4" minlength="1">
				</div>

				<div class="form-group">
					<label>Fats</label>
					<input type="text" id="Num4" required name="fats" class="form-control" maxlength="4" minlength="1">
				</div>


				<div class="form-group">
					<label>Carbohydrates</label>
					<input type="text" id="Num5" name="carbohydrates" required class="form-control" maxlength="4" minlength="1">
				</div>
				<div class="form-group">
					<label for="meal">Meal Type</label>
					<select name="meal_type" id="meal" class="form-control" required>
						<option value="" required>Select Meal Type</option>
						<option value="Breakfast">Breakfast</option>
						<option value="Lunch">Lunch</option>
						<option value="Dinner">Dinner</option>
						<option value="Snacks">Snacks</option>
					</select>
				</div>


				<input type="submit" name="btn" class="btn-danger btn form-control" value="Add Food Items">
			</form>
		</div>

		<?php
		if (isset($_POST['btn'])) {
			include('../admin/db.php');

			mysqli_query($con, "insert into fooditems (foodname,calories,protein, fats, carbohydrates,meal_type) value('" . $_POST['foodname'] . "','" . $_POST['calories'] . "', '" . $_POST['protein'] . "', '" . $_POST['fats'] . "', '" . $_POST['carbohydrates'] . "','" . $_POST['meal_type'] . "')");

			echo "<div style='text-align:center; padding:10px; color:black'> Item Added! </div>";
		}


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
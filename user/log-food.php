<!DOCTYPE html>
<html>

<head>
	<?php include('../validation.php'); ?>
	<title></title>
</head>

<body>

	<?php include('header.php'); ?>
	<?php include('menu.php');



	include("../admin/db.php");

	$res = mysqli_query($con, "select * from fooditems ");
	?>

	<div class="restsection">

		<div class="container" style="width: 40%; margin-left: 30%">
			<h1> Add Food Log</h1>

			<form method="post">

				<div class="form-group">
					<label>Food Item</label>
					<select class="form-control" name="foodid" required>
						<option value="">----Select-----</option>
						<?php
						while ($r = mysqli_fetch_assoc($res)) {
							echo "<option value='$r[foodid]' >" . $r['foodname'] . " " . $r['calories'] . " Calories " . "</option>";
						}

						?>


					</select>
				</div>


				<div class="form-group">
					<label for="meal">Meal Time</label>
					<select name="meal_type" id="meal" class="form-control" required>
						<option value="" required>Select Meal Time</option>
						<option value="Breakfast">Breakfast</option>
						<option value="Lunch">Lunch</option>
						<option value="Dinner">Dinner</option>
						<option value="Snacks">Snacks</option>
					</select>
				</div>


				<div class="form-group">
					<label>Food Log Date Time</label>
					<input name="logdatetime" type="date" name="date-time" class="form-control" required>
				</div>



				<div class="form-group">
					<label>Food Quantity</label>
					<input placeholder="100 gram" name="qnty" type="text" maxlength="4" minlength="1" id="Num1" class="form-control" required>
				</div>



				<input type="submit" name="btn" class="btn-info btn form-control" value="Add Log">
			</form>
		</div>


		<?php
		if (isset($_POST['btn'])) {
			include('../admin/db.php');

			mysqli_query($con, "INSERT INTO foodlog (foodid,logdatetime,qnty,userid,meal_typee) VALUES('" . $_POST['foodid'] . "','" . $_POST['logdatetime'] . "', '" . $_POST['qnty'] . "', '" . $_SESSION['loggedInUserId'] . "', '" . $_POST['meal_type'] . "')");

			echo "<div style='text-align:center; padding:10px; color:black'> Food Item Logged! </div>";
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
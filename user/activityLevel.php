<!DOCTYPE html>
<html>

<head>
	<title></title>
</head>

<body>

	<?php include('header.php'); ?>
	<?php include('menu.php');

	include("../admin/db.php");


	?>

	<div class="restsection">

		<div class="container" style="width: 40%; margin-left: 30%">
			<h1> My Activity Level</h1>
			<p> <small>In the context of a nutrition algorithm, the "activity level" is a factor used to estimate a person's total daily energy expenditure (TDEE) based on their physical activity level. It's often used in formulas to calculate the number of calories a person needs to consume each day.</small> </p>
			<form method="post">

				<div class="form-group">
					<label>Activity level</label>
					<select class="form-control" name="activityLevel">
						<option> ----select activity level----</option>
						<option value="1.2">sedentary: 1.2 </option>
						<option value="1.375"> lightly active: 1.375</option>
						<option value="1.55"> moderately active: 1.55</option>
						<option value="1.725"> very active: 1.725</option>


					</select>
				</div>




				<input type="submit" name="btn" class="btn-danger btn form-control" value="Add ">
			</form>
		</div>


		<?php
		if (isset($_POST['btn'])) {
			include('../admin/db.php');

			mysqli_query($con, "update users set activityLevel='" . $_POST['activityLevel'] . "' where email='" . $_SESSION['loggedInUser'] . "'");
			echo "<div style='text-align:center; padding:10px; color:black'> activityLevel added! </div>";
		}


		?>
		<ol>
			<li><b> Note:</b></li>
			<li>Sedentary (Little to No Exercise): Multiplying BMR by 1.2

				Examples: Desk job, minimal exercise or physical activity
			</li>
			<li>

				Lightly Active (Light Exercise/Sports 1-3 Days/Week): Multiplying BMR by 1.375

				Examples: Walking, light jogging, casual sports a few times a week

			</li>
			<li>
				Moderately Active (Moderate Exercise/Sports 3-5 Days/Week): Multiplying BMR by 1.55

				Examples: Regular exercise, fitness classes, moderate sports several times a week

			</li>
			<li>
				Very Active (Hard Exercise/Sports 6-7 Days a Week): Multiplying BMR by 1.725

				Examples: Intense workouts, training, competitive sports almost daily

			</li>
			<li>
				Super Active (Very Hard Exercise, Physical Job, or Training): Multiplying BMR by 1.9

				Examples: Athletes, labor-intensive jobs, heavy training</li>
			</li>
		</ol>
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
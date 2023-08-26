<!DOCTYPE html>
<html>

<head>
	<title></title>
</head>

<body>
	<?php include('header.php'); ?>
	<?php include('menu.php'); ?>

	<div class="restsection">
		<h1>Basal metabolic rate (BMR) </h1>

		<?php
		include('../admin/db.php');

		$res = mysqli_query($con, "select * from users where email='" . $_SESSION['loggedInUser'] . "'");

		$r = mysqli_fetch_assoc($res);

		$age = $r['age'];
		$weight = $r['weight']; // in kilograms
		$height = $r['height']; // in centimeters
		$activityLevel = $r['activityLevel']; // Activity level (sedentary: 1.2, lightly active: 1.375, moderately active: 1.55, very active: 1.725)

		// Calculate BMR using Harris-Benedict equation
		if ($age >= 18) {
			$bmr = 88.362 + (13.397 * $weight) + (4.799 * $height) - (5.677 * $age);
		} else {
			// Handle BMR calculation for users under 18 differently if needed
			$bmr = 0;
		}
		echo "<div class='alert alert-success'>Your estimated BMR: <b>" . number_format($bmr, 3) . "</b> calories</div>";
		// Calculate daily caloric needs based on BMR and activity level
		$dailyCalories = $bmr * $activityLevel;

		echo "<form method='post'>";

		echo "<input type='submit' name='btn' class='btn-danger btn form-control' value='Calculate TDEE' >";

		echo "</form>";



		if (isset($_POST['btn'])) {
			include('../admin/db.php');
			echo "<div class='alert alert-success'>Your estimated TDEE(Total Daily Energy Expenditure) daily caloric needs: <b>" . number_format($dailyCalories, 3) . "</b> calories</div>";

			mysqli_query($con, "UPDATE users SET TDEE='" . $dailyCalories . "' where email='" . $_SESSION['loggedInUser'] . "'");
		}

		?>

		<!-- basal metabolic rate (BMR)  -->

		<p> <b>Note: </b> <small> Basal Metabolic Rate (BMR) is the amount of energy (measured in calories) that your body requires to maintain basic physiological functions while at rest. These functions include breathing, circulation, cell production, and other processes that keep your body alive. In other words, BMR represents the energy your body needs to function even if you were just lying in bed all day without any physical activity. <i> Calculating BMR is often done using various formulas, with one of the most commonly used being the Harris-Benedict Equation. The basic version of this equation is:

					BMR = 88.362 + (13.397 × weight in kg) + (4.799 × height in cm) - (5.677 × age in years)
				</i></small>
		</p>

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

	b {
		font-size: 18px;
	}
</style>
<!DOCTYPE html>
<html>

<head>
	<title></title>
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

</head>

<body>
	<?php include('header.php'); ?>
	<?php include('menu.php'); ?>

	<div class="restsection">
		<h1>Dietary Recommendations </h1>

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

		// Calculate daily caloric needs based on BMR and activity level
		$dailyCalories = $bmr * $activityLevel;


		// Input data (you can replace these values with your actual data)
		$age = $r['age']; // Age in years
		$height_cm =  $r['height']; // Height in centimeters
		$weight_kg = $r['weight']; // Weight in kilograms
		// $gender = 'male'; // 'male' or 'female'

		// Calculate BMI (Body Mass Index)
		$height_m = $height_cm / 100;
		$bmi = $weight_kg / ($height_m * $height_m);
		// echo $bmi;

		// Define BMI categories
		$bmi_categories = [
			'underweight' => 18.5,
			'normal' => 24.9,
			'overweight' => 29.9,
			'obese' => 9999, // Set a high value for obese category
		];

		// Determine the BMI category

		foreach ($bmi_categories as $cat => $upper_limit) {
			if ($bmi <= $upper_limit) {
				$category = $cat;
				break;
			}
		}

		// Provide dietary recommendations based on BMI category and gender
		$diet_recommendations = [];


		if ($category === 'underweight') {
			$diet_recommendations[] = "Increase calorie intake with nutrient-dense foods.";
			$diet_recommendations[] = "Include protein-rich foods like lean meats, fish, and dairy.";
		} elseif ($category === 'normal') {
			$diet_recommendations[] = "Maintain a balanced diet with a variety of foods.";
			$diet_recommendations[] = "Include lean protein sources, whole grains, and plenty of fruits and vegetables.";
		} elseif ($category === 'overweight') {
			$diet_recommendations[] = "Focus on portion control and reduce calorie intake.";
			$diet_recommendations[] = "Choose low-fat and low-sugar options, and increase physical activity.";
		} elseif ($category === 'obese') {
			$diet_recommendations[] = "Seek guidance from a healthcare professional or dietitian for a personalized plan.";
		}


		// Display dietary recommendations
		echo "<br>";
		echo "<p style='font-size:18px'><strong>BMI Category:</strong> <i>$category</i></p>";
		echo "<br>";
		foreach ($diet_recommendations as $recommendation) {
			echo "<li>$recommendation</li>";
			echo "<br>";
		}
		$today = date("d-m-Y");
		// echo $today;

		echo "</br>";
		echo "<hr>";
		echo "<div >Your estimated daily caloric needs are: <b >" . number_format($dailyCalories, 3) . "</b> calories</div>";
		echo "<hr>";


		?>

	</div>

</body>

</html>



<!-- Body mass index, or BMI, is a measure of body size. It combines a person’s weight with their height. The results of a BMI measurement can give an idea about whether a person has the correct weight for their height. -->
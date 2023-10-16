<!DOCTYPE html>
<html>

<head>
	<title></title>
</head>

<body>

	<?php include('header.php'); ?>
	<?php include('menu.php'); ?>

	<div class="restsection">

		<h1>Total Nutrients Consumed</h1>


		<?php
		include('../admin/db.php');
		$today = date("Y-m-d");

		$res2 = mysqli_query($con, "SELECT * from foodlog JOIN fooditems on foodlog.foodid= fooditems.foodid where userid='" . $_SESSION['loggedInUserId'] . "'   ");


		$totalNutrients = ['calories' => 0, 'carbohydrates' => 0, 'protein' => 0, 'fats' => 0];

		while ($loggedFood = mysqli_fetch_assoc($res2)) {
			$foodName = $loggedFood['foodname'];
			// echo $loggedFood['foodname'];
			$quantity = $loggedFood['qnty'];

			foreach ($totalNutrients as $nutrient => $value) {
				$res1 = mysqli_query($con, "select * from fooditems ");

				while ($foodDatabase = mysqli_fetch_assoc($res1)) {
					if ($foodDatabase['foodname'] == $foodName) {
						// echo $foodName . $foodDatabase[$nutrient] . "<br>";
						// echo "nn " . $foodDatabase[$nutrient];
						// echo "qq " . $quantity;

						$totalNutrients[$nutrient] +=
							(($foodDatabase[$nutrient] / 100) *  $quantity);
						// echo "$nutrient" . $totalNutrients[$nutrient] . "<br>";
					}
				}
			}
		}



		// echo "<div class='alert alert-success'>Calories: <b >" . $totalNutrients['calories'] . "</b> </div>";

		// echo "<div class='alert alert-info'>Carbohydrates: <b >" . $totalNutrients['carbohydrates'] . "</b> </div>";

		// echo "<div class='alert alert-danger'>Protein: <b >" . $totalNutrients['protein'] . "</b> </div>";
		// echo "<div class='alert alert-warning'>Fats: <b >" . $totalNutrients['fats'] . "</b> </div>";

		?>

		<h1>My Dashboard</h1>

		<div class="dashboard">
			<div class="card">
				<h2>Calories</h2>
				<p> <?php echo $totalNutrients['calories'] ?> </p>
			</div>

			<div class="card">
				<h2>Carbohydrates</h2>
				<p><?php echo $totalNutrients['carbohydrates'] ?></p>
			</div>

			<div class="card">
				<h2>Protein</h2>
				<p> <?php echo  $totalNutrients['protein'] ?></p>
			</div>

			<div class="card">
				<h2>Fats</h2>
				<p> <?php echo  $totalNutrients['fats'] ?></p>
			</div>

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

	.restsection h1 {
		display: flex;
		text-align: center;
		justify-content: center;
		align-items: center;
	}

	/* styles.css */

	.dashboard {
		display: flex;
		justify-content: space-around;
		align-items: center;
		padding: 20px;
		background-color: #44b09e;
		background-color: #d7d7d7;
		background-image: linear-gradient(147deg, #d7d7d7 0%, #353535 74%);
		/* background-color: #f0f0f0; */
		box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
	}

	.card {
		flex: 1;
		text-align: center;
		padding: 20px;
		/* background-color: #fff; */
		background-color: #44b09e;
		background-image: linear-gradient(315deg, #44b09e 0%, #e0d2c7 74%);
		border-radius: 5px;
		box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
	}

	.card h2 {
		font-size: 24px;
		margin-bottom: 10px;
	}

	.card p {
		font-size: 18px;
		color: #333;
	}
</style>



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
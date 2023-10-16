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
			<h1> My Goal </h1>

			<form method="post">

				<div class="form-group">
					<label>Goal </label>
					<select class="form-control" name="goal" required>
						<option value="" required> ----select Goal level----</option>
						<option>weight loss </option>
						<option> muscle gain</option>
					</select>
				</div>

				<input type="submit" name="btn" class="btn-danger btn form-control" value="Add ">
			</form>
		</div>


		<?php
		if (isset($_POST['btn'])) {
			include('../admin/db.php');

			mysqli_query($con, "update users set goal='" . $_POST['goal'] . "' where email='" . $_SESSION['loggedInUser'] . "'");
			echo "<div style='text-align:center; padding:10px; color:black'> goal added! </div>";
			header("location:recommendations.php");
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
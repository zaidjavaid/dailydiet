<!DOCTYPE html>
<html>

<head>
	<title></title>
</head>

<body>

	<?php include('header.php'); ?>
	<?php include('menu.php'); ?>

	<div class="restsection">

		<?php
		include('../admin/db.php');
		$res = mysqli_query($con, "SELECT * FROM users WHERE email='" . $_SESSION['loggedInUser'] . "'");
		$r = mysqli_fetch_assoc($res);

		?>

		<div class="container">
			<h1> Update Details</h1>
			<form method="post">

				<div class="form-group">
					<label>Name</label>
					<input type="text" name="name" class="form-control" value="<?php echo  $r['name']; ?>" readonly>
				</div>

				<div class="form-group">
					<label>Email</label>
					<input type="text" name="email" class="form-control" value="<?php echo $r['email']; ?>" readonly>
				</div>


				<div class="form-group">
					<label>Height</label>
					<input type="text" name="height" class="form-control" value="<?php echo  $r['height']; ?>" placeholder="in cm">
				</div>

				<div class="form-group">
					<label>Weight</label>
					<input type="text" name="weight" class="form-control" value="<?php echo  $r['weight']; ?>" placeholder="in kg">
				</div>

				<!--     <div class="form-group">
	             	<label>BMI</label>
	             	<input type="text" name="bmi" class="form-control"
	             	 value="
	             	 <?php //echo  $r['bmi']; 
						?> 
	             	 ">
	            </div>  -->

				<input type="submit" name="btn" value="Update" class="btn-success btn">
			</form>
		</div>



	</div>
</body>

</html>

<?php
if (isset($_POST['btn'])) {

	include("../admin/db.php");



	mysqli_query($con, "UPDATE users SET name='" . $_POST['name'] . "', email='" . $_POST['email'] . "', height='" . $_POST['height'] . "', weight='" . $_POST['weight'] . "' 
	WHERE email='" . $_SESSION['loggedInUser'] . "'");
	header("Location:add-details.php");
	exit;
}
?>
<style type="text/css">
	.restsection {
		background-color: white;
		padding: 40px;
		margin-left: 200px;
		margin-top: 70px;
		height: 1000px;
	}
</style>
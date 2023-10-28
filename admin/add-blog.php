<!DOCTYPE html>
<html>

<head>
	<title>Blogs</title>
	<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
	<style type="text/css">
		.restsection {
			background-color: white;
			padding: 40px;
			margin-left: 200px;
			margin-top: 70px;
			height: 1000px;
		}
	</style>
</head>

<body>

	<?php include('header.php'); ?>
	<?php include('menu.php'); ?>

	<div class="restsection">

		<div class="container" style="width: 80%; margin-left: 10%">
			<h1> Add Blog </h1>
			<form method="post" enctype="multipart/form-data">

				<div class="form-group">
					<label>Blog Title</label>
					<input type="text" name="title" class="form-control">
				</div>

				<div class="form-group">
					<label>Add Image </label>
					<input type="file" name="filename" class="form-control" accept=".jpg, .jpeg">
				</div>
				<div class="form-group">
					<label>Description</label>
					<textarea rows="10" class="form-control" name="des"></textarea>
				</div>


				<input type="submit" name="btn" class=" btn btn-info form-control" value="Post Blog">
			</form>
		</div>

		<?php
		if (isset($_POST['btn'])) {
			include('../admin/db.php');

			// Escape user inputs to prevent SQL injection
			$title = mysqli_real_escape_string($con, $_POST['title']);
			$description = mysqli_real_escape_string($con, $_POST['des']);

			$name = $_FILES['filename']['name'];
			$destination = 'images/' . rand(1, 100) . $name;
			$source = $_FILES['filename']['tmp_name'];
			move_uploaded_file($source, $destination);

			//  single quotes for string values in the SQL query
			$sql = "INSERT INTO blogs (title, des, img) VALUES ('$title', '$description', '$destination')";

			// Check if the query executed successfully
			if (mysqli_query($con, $sql)) {
				echo "<div style='text-align:center; padding:10px; color:black'>Blog Added!</div>";
			} else {
				echo "<div style='text-align:center; padding:10px; color:red'>Error: " . mysqli_error($con) . "</div>";
			}

			// Close the database connection
			mysqli_close($con);
		}





		// 1. `$name = $_FILES['filename']['name'];`
		//    - This line retrieves the original name of the uploaded file. `$_FILES['filename']` refers to the file input field named "filename" in the HTML form, and `['name']` retrieves the original name of the file.

		// 2. `$destination = 'images/' . rand(1, 100) . $name;`
		//    - Here, we are defining the destination path where we want to save the uploaded file. we're concatenating a folder path `'images/'`, followed by a randomly generated number between 1 and 100 (created using `rand(1, 100)`), and then appending the original filename (`$name`) to create a unique filename in the destination directory.

		// 3. `$source = $_FILES['filename']['tmp_name'];`
		//    - This line retrieves the temporary location of the uploaded file on the server. The uploaded file is temporarily stored in a temporary directory on the server before we move it to our desired location.

		// 4. `move_uploaded_file($source, $destination);`
		//    - The `move_uploaded_file()` function is used to move the uploaded file from its temporary location to the desired destination. The first argument (`$source`) is the temporary location of the uploaded file, and the second argument (`$destination`) is the new location where we want to save the file.

		// In summary, these statements handle the process of moving the uploaded file from its temporary location to a specific directory on the server.


		// => mysqli_real_escape_string

		// - escape special characters in a string to make it safe for use in SQL queries.
		// -prevent SQL injection, which is a common security vulnerability that occurs when untrusted data is inserted into SQL queries without proper sanitization.
		// -It ensures that single quotes, double quotes, backslashes, and other special characters are properly escaped, making the string safe to be included in an SQL query.
		?>



	</div>
</body>

</html>
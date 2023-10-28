<!DOCTYPE html>
<html>

<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<style>
		.feedback-form {
			display: flex;
			flex-direction: column;
			max-width: 400px;
			margin: 15px auto;
			padding: 10px;

		}

		#feedback {
			align-items: center;
			text-align: center;
			margin: 15px auto;
			padding: 10px;
		}

		.feedback-form label {
			margin-bottom: 5px;
		}

		.feedback-form input,
		.feedback-form textarea {
			margin-bottom: 10px;
			padding: 5px;
		}

		.feedback-form button {
			padding: 10px;
			background-color: #333;
			color: #fff;
			border: none;
			cursor: pointer;
		}

		.feedback-form button:hover {
			background-color: #555;
		}
	</style>
</head>

<body>

	<?php
	include 'header.php';
	?>
	<?php
	include 'carousel.php';
	?>
	<?php
	include('validation.php');
	?>
	<hr>



	<hr>
	<?php
	include 'card_section.php';
	?>

	<br>
	<br>
	<hr>



	<div style=" width: 50%; margin-left: 25%" id="">

		<iframe width="660" height="415" src="https://www.youtube.com/embed/XMcab1MFaLc" frameborder="0" allowfullscreen></iframe>
	</div>

	<hr>
	<section id="feedback">
		<h2>Feedback</h2>
		<form class="feedback-form" method="post" action="feedback.php">
			<label for="name">Name:</label>
			<input type="text" name="name" id="inputTextBox1" required />

			<label for="email">Email:</label>
			<input type="email" id="email" name='email' required />

			<label for="message">Message:</label>
			<textarea id="message" name="message" required></textarea>

			<button type="submit">Submit Feedback</button>
		</form>
	</section>

	<?php
	include 'footer.php';
	?>

</body>

</html>
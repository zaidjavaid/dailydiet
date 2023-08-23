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



	<!-- <img src="images/1.jpg" style="width: 100%; height: 600px;"> -->
	<!-- <div style="font-size: 40px;position: absolute;top: 60%; left: 30%;font-weight: bold; color:#fff "> Diet Management
	</div> -->
	<hr>
	<?php
	include 'card_section.php';
	?>
	<hr>

	<!-- <div style="padding: 50px;" id="about">
		<h1 style="text-align: center; color:#5F8125 ">About Us</h1>
		<p style="color: #323232; line-height: 36px; word-spacing: 5px; text-align: center;">

			Diet management refers to the practice of making conscious and informed choices about one's eating habits in order to achieve specific health goals or address certain dietary needs. It involves monitoring and controlling the types and quantities of food consumed, as well as considering factors such as nutritional content, calorie intake, portion sizes, and meal timings.

			The main objectives of diet management can vary depending on individual needs and circumstances. Some common goals include weight loss or maintenance, managing chronic conditions like diabetes or heart disease, improving overall health and vitality, enhancing athletic performance, or addressing specific dietary restrictions or allergies.

		</p>
	</div> -->


	<div style=" width: 50%; margin-left: 25%" id="">

		<!-- <iframe width="560" height="315" src="https://www.youtube.com/watch?v=XMcab1MFaLc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->

		<iframe width="660" height="415" src="https://www.youtube.com/embed/XMcab1MFaLc" frameborder="0" allowfullscreen></iframe>
	</div>
	<hr>
	<section id="feedback">
		<h2>Feedback</h2>
		<form class="feedback-form" method="post" action="feedback.php">
			<label for="name">Name:</label>
			<input type="text" name="name" id="inputTextBox" required />

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
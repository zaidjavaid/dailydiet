<?php
ob_start();

?>
<!DOCTYPE html>
<html>

<head>
  <title>User Sign up</title>
  <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
  <script src="../assets/jquery.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
  <?php include('../validation.php'); ?>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500;700&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

  <style>
    h2 {
      text-align: center;
      justify-content: center;
      align-items: center;
    }
  </style>

</head>

<body>
  <?php
  require_once('..\validation.php');
  ?>
  <div class="title">
  </div>

  <div class="module form-module">
    <div class="form">
      <h1></h1>
      <h2>User Sign Up</h2>
      <form method='post'>
        <input type="text" placeholder="Enter Your Name" name='name' id="inputTextBox3" required/ class="all">
        <input type="email" placeholder="Enter Your Email" name='email' required/ class="all">
        <input type="number" placeholder="Enter Your Age" name='age' required/ class="all">
        <input type="number" placeholder="Enter Your Weight(kg)" name='weight' required/ class="all">
        <input type="number" placeholder="Enter Your Height(cm)" name='height' required/ class="all">

        Male <input type="radio" name="gender" value="male" checked>
        Female <input type="radio" name="gender" value="female">
        <br><br>
        <input type="password" minlength="6" maxlength="20" placeholder="Password (minimum 6 characters)" name='pass' required/ class="all">

        <button type='submit' name='btn'>Sign Up</button>
        <br>
        <hr>
        <p class="text-center">Do You Want to: <a href="login.php">Log in</a></p>
        <p id="para"></p>
      </form>
    </div>

  </div>
</body>

</html>

<?php
if (isset($_POST['btn'])) {

  $email = $_POST['email'];

  // Regular expression pattern for email validation
  $pattern = "/^[A-Za-z0-9._%+-]+@([A-Za-z0-9-]+\.)+com$/";

  if (preg_match($pattern, $email)) {

    include('../admin/db.php');

    mysqli_query($con, "INSERT into users (name,email, age, gender,pass,height,weight) value('" . ucwords($_POST['name']) . "', '" . $_POST['email'] . "', '" . $_POST['age'] . "', '" . $_POST['gender'] . "', '" . $_POST['pass'] . "', '" . $_POST['height'] . "', '" . $_POST['weight'] . "')");

    echo "<div style='text-align:center; padding:10px; color:black'> Account Created! Please Login! </div>";
    header('location:login.php');
  } else {

    echo "<script>
        let para = document.getElementById('para');
        para.innerHTML = '<div style=\"text-align:center; padding:10px; color:red\">Invalid Email.(Email should end with .com) Please try again</div>';
    </script>";
  }
}


?>


<style type="text/css">
  @import url('https://fonts.googleapis.com/css?family=Charmonman');

  body {
    background: #e9e9e9;
    color: #666666;
    font-family: 'Ubuntu', sans-serif;
    font-size: 14px;
    background-image: url('../images/5.jpg');


  }

  .title {
    padding: 50px 0;
    text-align: center;
    letter-spacing: 2px;
    color: white;
  }

  .title h1 {
    margin: 0 0 20px;
    font-size: 48px;
    font-weight: 900;

  }

  .title span {
    font-size: 14px;
    color: #33b5e5;
  }

  /* Form Module */
  .form {
    padding: 30px;
  }

  .form-module {
    position: relative;
    background: #ffffff;
    max-width: 820px;
    width: 100%;
    border-top: 5px solid #17788e;
    box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
    margin: 0 auto;
    padding: 40px;
  }


  .form-module h2 {
    margin: 0 0 20px;
    color: #17788e;
    font-size: 25px;
    font-weight: 400;
    line-height: 1;
  }

  .form-module .all {
    outline: none;
    display: block;
    width: 100%;
    border: 1px solid #17788e;
    margin: 0 0 20px;
    padding: 10px 15px;
    font-weight: 400;
    transition: 0.3s ease;
  }

  .form-module button {
    cursor: pointer;
    background: #17788e;
    width: 100%;
    border: 0;
    padding: 10px 15px;
    color: #ffffff;
    -webkit-transition: 0.3s ease;
    transition: 0.3s ease;
  }

  .form-module button:hover {
    background: #178ab4;
  }

  .form-module .cta {
    background: #17788e;
    width: 100%;
    padding: 15px 40px;
    box-sizing: border-box;
    color: #666666;
    font-size: 13px;
    text-align: center;
  }

  .form-module .cta a {
    color: #33b5e5;
    text-decoration: none;
  }

  .form-module .cta a:hover {
    text-decoration: underline;
  }
</style>
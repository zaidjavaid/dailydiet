<?php
ob_start();


?>
<!DOCTYPE html>
<html>

<head>


  <title>User Login</title>
  <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <?php include('../validation.php'); ?>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500;700&display=swap" rel="stylesheet">

</head>

<body>
  <?php
  require_once('..\validation.php');
  // include('..\validation.php');
  ?>
  <div class="title">
    <!-- <h1>User Login</h1> -->
  </div>


  <div class="module form-module">
    <div class="form">
      <h2>User Login</h2>
      <form method='post'>
        <input type="email" placeholder="Enter Your Email" id="email" minlength="10" maxlength="50" name='email' required />
        <input id="password" type="password" minlength="6" maxlength="10" placeholder="Password (minimum 6 characters)" placeholder="Password" name='pass' required />


        <!-- <div class="form-group">
          <span><label>
              <span><input style="display:inline-block" type="checkbox" id="showPassword" onclick="togglePasswordVisibility()"></span>
              <span>Show Password</span>
            </label></span>
        </div> -->

        <br>

        <button type='submit' name='btn'>Login</button>
      </form>

    </div>



    <div class="row justify-content-center mt-3">
      <a class="btn btn-link" href="forgotpassword.php" style="color: #17788e; text-decoration: none; transition: color 0.3s;">Forgot Password</a>
    </div>
    <div class="row justify-content-center mt-2">
      <a class="btn btn-link" href="../index.php" style="color: #17788e; text-decoration: none; transition: color 0.3s;">Back to Home</a>
    </div>



    <p id="para"></p>

  </div>

  <script>
    function togglePasswordVisibility() {
      var passwordInput = document.getElementById("password");
      var showPasswordCheckbox = document.getElementById("showPassword");

      if (showPasswordCheckbox.checked) {
        passwordInput.type = "text";
      } else {
        passwordInput.type = "password";
      }
    }
  </script>

</body>

</html>

<?php
if (isset($_POST['btn'])) {
  include('../admin/db.php');

  $result = mysqli_query($con, "SELECT * FROM users WHERE email ='" . $_POST['email'] . "' and pass = '" . $_POST['pass'] . "'");

  $r = mysqli_num_rows($result);
  $d = mysqli_fetch_array($result);
  if ($r) {
    session_start();
    $_SESSION['loggedInUser'] = $_POST['email'];
    $_SESSION['$name'] = $d['name'];
    $_SESSION['loggedInUserId'] = $d['id'];
    if (!empty($r['activityLevel'])) {
      header('location:dashboard.php');
      exit;
    } else {
      header('location:activityLevel.php');
      exit;
    }
  } else {
    echo "<script>
        let para = document.getElementById('para');
        para.innerHTML = '<div style=\"text-align:center; padding:10px; color:red\">Invalid Email/Password. Please try again</div>';
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
    background-image: url('../images/2.jpg');


  }

  h2 {
    text-align: center;
    justify-content: center;
    align-items: center;
  }

  .title {
    padding: 50px 0px 10px 0px;
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

  .form-module input {
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

  button[type="submit"]:hover {
    background-color: #ff002b;
    /* background-color: #0056b3; */
  }
</style>


<!-- <style type="text/css">
  @import url('https://fonts.googleapis.com/css?family=Charmonman');

  body {
    background: #e9e9e9;
    color: #666666;
    font-family: 'Ubuntu', sans-serif;
    font-size: 14px;
    /* background-image: url('../images/2.jpg'); */
    /* background-image: url(' https://cdn.pixabay.com/photo/2021/08/02/16/21/dna-6517209_1280.jpg'); */
    /* background-image: url(' https://cdn.pixabay.com/photo/2020/03/29/18/33/girl-4981766_1280.jpg'); */
    background-image: url('../images/2.jpg');

    background-repeat: no-repeat;
    background-size: cover;



  }

  h2 {
    text-align: center;
    justify-content: center;
    align-items: center;
  }

  .title {
    padding: 50px 0px 10px 0px;
    text-align: center;
    letter-spacing: 2px;
    color: white;
  }

  .title h2 {
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
    /* background: #ffffff; */
    background-color: rgba(255, 255, 255, 0.4);
    max-width: 820px;
    width: 100%;
    border-top: 5px solid #17788e;
    box-shadow: inset -5px -5px rgba(65, 142, 183, 0.7);
    margin: 0 auto;
    padding: 40px;
  }


  .form-module h2 {
    margin: 0 0 20px;
    color: #17788e;
    font-size: 25px;
    font-weight: 600;
    line-height: 1;
  }

  .form-module input {
    outline: none;
    display: block;
    width: 100%;
    /* border: 1px solid #17788e; */
    border: none;
    border-bottom: 2px solid black;
    margin: 0 0 20px;
    padding: 10px 15px;
    font-weight: 400;
    transition: 0.3s ease;
    background: transparent;
    color: white;

  }

  .form-module button {
    cursor: pointer;
    background: rgba(65, 142, 183, 0.6);
    width: 100%;
    border: 0;
    padding: 10px 15px;
    color: #ffffff;
    -webkit-transition: 0.3s ease;
    transition: 0.3s ease;
    margin-left: 15px;
  }

  .form-module button:hover {
    background: #00e9a7;
  }

  .form-module .cta {
    background: #17788e;
    width: 100%;
    padding: 15px 15px;
    box-sizing: border-box;
    color: green;
    font-size: 13px;
    text-align: center;
  }

  .form-module .cta a {
    color: red;
    text-decoration: none;



  }

  .form-module .cta a:hover {
    text-decoration: underline;

  }

  button[type="submit"]:hover {
    background-color: #17788e;
    /* background-color: #0056b3; */
  }
</style> -->
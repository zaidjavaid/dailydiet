<!DOCTYPE html>
<html>

<head>
  <title></title>
</head>

<body>

  <?php include('header.php'); ?>
  <?php include('menu.php'); ?>

  <div class="restsection">
    <div class="text-right"> <a class="btn btn-success" href="add-details.php">Update Details</a></div>
    <!-- update profile  -->

    <h1>My Profile </h1>
    <form method="post" enctype="multipart/form-data">

      <h4>Update Profile Pic</h4>
      <input type="file" name="filename" accept=".jpg, .jpeg"><br />

      <input type="submit" name="btn" class="btn btn-info" value="Upload">
    </form>
    <?php
    include("../admin/db.php");
    // echo $_SESSION['loggedInUser'];
    $res = mysqli_query($con, "select * from users where email='" . $_SESSION['loggedInUser'] . "'");


    $r = mysqli_fetch_assoc($res);
    if (empty($r['img'])) {
      $img = 'images/111.png';
    } else {
      $img = $r['img'];
    }

    ?>
    <br><br>
    <img src="<?php echo $img; ?> " style="width: 140px;" class="img-circle">
    <br><br>

    <table class="table table-striped ">

      <tr>
        <th>Name</th>
        <td> <?php echo $r['name']; ?></td>
      </tr>
      <tr>
        <th>Email</th>
        <td> <?php echo $r['email']; ?></td>
      </tr>
      <tr>
        <th>Gender</th>
        <td> <?php echo $r['gender']; ?></td>
      </tr>




      <tr>
        <th>Age</th>
        <td> <?php echo $r['age']; ?></td>
      </tr>
      <tr>
        <th>Height</th>
        <td> <?php echo $r['height']; ?></td>
      </tr>

      <tr>
        <th>Weight</th>
        <td> <?php echo $r['weight']; ?></td>
      </tr>
      <tr>

        <?php
        $weight = $r['weight'];
        $height = $r['height'];
        $height = ($height / 100);
        $BMI = number_format($weight / ($height * $height), 3);
        ?>
        <th>BMI</th>
        <td> <?php echo $BMI; ?></td>
      </tr>
      <tr>
        <th>Activity Level</th>
        <td> <?php echo $r['activityLevel']; ?></td>
      </tr>
      <tr>
        <th>Goal</th>
        <td> <?php echo $r['goal']; ?></td>
      </tr>





    </table>

  </div>
</body>

</html>


<style type="text/css">
  .restsection {
    background-color: whitesmoke;
    padding: 55px;
    margin-left: 200px;
    margin-top: 70px;
    height: 1000px;
  }
</style>

<?php
if (isset($_POST['btn'])) {

  include("../admin/db.php");

  $name = $_FILES['filename']['name'];
  $destination = 'images/' . rand(1, 100) . $name;
  $source = $_FILES['filename']['tmp_name'];
  move_uploaded_file($source, $destination);

  mysqli_query($con, "UPDATE users set img='$destination' where email='" . $_SESSION['loggedInUser'] . "'");
  header("Location: profile.php");
}


?>
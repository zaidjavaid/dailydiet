<!DOCTYPE html>
<html>

<head>
  <title></title>
</head>

<body>

  <?php include('header.php'); ?>
  <?php include('menu.php'); ?>

  <div class="restsection">
    <h1>Today's Progress </h1>
    <p>Nutritional content of Yours food intake</p>

    <?php

    include('../admin/db.php');
    $today = date("Y-m-d");
    $t = date("d-m-Y");
    echo "<hr>";
    echo "<p style='font-size:18px'><strong>Date:</strong> <i>$t</i></p>";
    echo "<hr>";

    $res2 = mysqli_query($con, "SELECT * from foodlog JOIN fooditems on foodlog.foodid= fooditems.foodid where userid='" . $_SESSION['loggedInUserId'] . "' && logdatetime='$today'  ");


    $totalNutrients = ['calories' => 0, 'carbohydrates' => 0, 'protein' => 0, 'fats' => 0];

    while ($loggedFood = mysqli_fetch_assoc($res2)) {
      $foodName = $loggedFood['foodname'];
      $quantity = $loggedFood['qnty'];

      foreach ($totalNutrients as $nutrient => $value) {
        $res1 = mysqli_query($con, "select * from fooditems ");

        while ($foodDatabase = mysqli_fetch_assoc($res1)) {
          if ($foodDatabase['foodname'] == $foodName) {
            // echo $foodName.$foodDatabase[$nutrient]."<br>";
            // echo "nn". $foodDatabase[$nutrient];
            // echo "qq". $quantity;

            $totalNutrients[$nutrient] +=
              ($foodDatabase[$nutrient] / 100) *  $quantity;
          }
        }
      }
    }

    echo "<div class='alert alert-success'>Calories: <b >" . $totalNutrients['calories'] . "</b> </div>";

    echo "<div class='alert alert-info'>Carbohydrates: <b >" . $totalNutrients['carbohydrates'] . "</b> </div>";

    echo "<div class='alert alert-danger'>Protein: <b >" . $totalNutrients['protein'] . "</b> </div>";
    echo "<div class='alert alert-warning'>Fats: <b >" . $totalNutrients['fats'] . "</b> </div>";




    //  The SQL query to get the TDEE value
    $query = "SELECT TDEE FROM users WHERE id = '" . $_SESSION['loggedInUserId'] . "'";
    $result = mysqli_query($con, $query);

    if ($result) {
      $row = mysqli_fetch_assoc($result);
      $TDEE = $row['TDEE'];
      echo "<br>";
      echo "You need to consume approx <b>" . $TDEE . "</b> calories per day";

      if ($totalNutrients['calories'] >= $TDEE) {
        echo "</br>";
        echo "<hr>";
        echo "<div class='alert alert-success'><b>Congratulation <i>Target ACHIEVED</i></b></div>";
        echo "<hr>";
      } else {
        echo "</br>";
        echo "<hr>";
        echo "<div class='alert alert-danger'><strong><i>Today's Target Yet NOT ACHIEVED</i></strong></div>";
        echo "<hr>";
      }
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
<?php
session_start();
// Connect to your MySQL database
include('header.php');
include('menu.php');
include('../admin/db.php');


// Function to query food items based on TDEE
function getFoodItemsForTDEE($tdee)
{
    global $con;

    // Query food items with calories that fit within user's TDEE range
    $query = "SELECT * FROM fooditems WHERE calories <= $tdee";
    $result = mysqli_query($con, $query);
    $foodItems = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $foodItems;
}

if (isset($_POST['generate'])) {


    $tdee = 0;

    $sql = "SELECT TDEE FROM users WHERE email='" . $_SESSION['loggedInUser'] . "' && id='" . $_SESSION['loggedInUserId'] . "'";
    $result = mysqli_query($con, $sql);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $tdee = $row['TDEE'];
        // while ($row = mysqli_fetch_assoc($result)) {
        //     // Process each row in the result set
        //     $tdee = $row['TDEE'];
        // }
    }

    // Get food items based on TDEE
    $foodItems = getFoodItemsForTDEE($tdee);

    // Generate diet plan with at least 3 food items for each meal type
    $dietPlan = array();
    $mealTypes = array('Breakfast', 'Lunch', 'Dinner');

    foreach ($mealTypes as $mealType) {
        // Select three random food items for the meal
        $randomFoodItems = array_rand($foodItems, 3);

        // Add the selected food items to the diet plan
        $dietPlan[$mealType] = array();
        foreach ($randomFoodItems as $foodIndex) {
            $dietPlan[$mealType][] = $foodItems[$foodIndex];
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diet Plan Generator</title>
    <!--  Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Custom styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin-left: 120px;
        }

        /* .restsection {
            padding: 20px;
            margin: 20px auto;
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            max-width: 800px;
        } */

        .restsection {
            padding: 20px;
            margin: 20px 10px;
            background-color: #44b09e;
            background-color: white;
            /* background-image: linear-gradient(315deg, #44b09e 0%, #e0d2c7 74%); */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            max-width: 800px;
        }

        h1,
        h2 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        input[type="submit"] {
            display: block;
            margin: 0 auto;
            font-size: large;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #3498db;
        }
    </style>
</head>

<body>
    <div class="restsection">
        <?php
        include('../admin/db.php'); ?>
        <h1>Diet Plan Generator</h1>
        <form method="post">
            <input type="submit" name="generate" value="Generate Diet Plan">
        </form>

        <?php if (isset($dietPlan)) : ?>

            <h2>Your Diet Plan:</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Meal Type</th>
                        <th>Food Name</th>
                        <th>Calories</th>
                        <th>Proteins</th>
                        <th>Fats</th>
                        <th>Carbs</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($dietPlan as $mealType => $foodItems) : ?>
                        <?php foreach ($foodItems as $foodItem) : ?>
                            <tr>
                                <td><?php echo $mealType; ?></td>
                                <td><?php echo $foodItem['foodname']; ?></td>
                                <td><?php echo $foodItem['calories']; ?></td>
                                <td><?php echo $foodItem['protein']; ?></td>
                                <td><?php echo $foodItem['fats']; ?></td>
                                <td><?php echo $foodItem['carbohydrates']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>

</body>

</html>


<?php
// Close the database connection
mysqli_close($con);
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
<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
</head>

<body>

    <?php include('header.php'); ?>
    <?php include('menu.php'); ?>
    <?php include('db.php'); ?>

    <div class="restsection">
        <h1 style="text-align: center; color: #333">My Details</h1>

        <?php
        $res = mysqli_query($con, "SELECT * from admin ");

        if (mysqli_num_rows($res) > 0) {
            echo "<table  style='margin:30px;' class='table table-bordered table-striped' >";
            echo "<tr class='info'>";
            echo "<td> Name </td>";
            echo "<td> Email </td>";
            echo "<td> Password </td>";


            echo "</tr>";

            while ($record = mysqli_fetch_assoc($res)) {
                echo "<tr>";

                echo "<td> " .  $record["username"] . "</td>";
                echo "<td>" . $record['email'] . "</td>";
                echo "<td>" . $record['password'] . "</td>";


                echo "</tr>";
            }
            echo "</table>";
        } ?>


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
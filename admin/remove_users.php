<?php

include 'db.php';
// Delete user if ID is provided in the URL
if (isset($_GET['delete_id'])) {
    $deleteId = $_GET['delete_id'];

    // Prepare and execute the DELETE query
    $sql = "DELETE FROM users WHERE id = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("i", $deleteId); // 'i' indicates integer parameter
    if ($stmt->execute()) {
        echo "User with ID $deleteId has been removed successfully.";
    } else {
        echo "Error removing user: " . $stmt->error;
    }

    $stmt->close();
}
if (isset($_GET['delete_id'])) {
    $deleteId = $_GET['delete_id'];
    // Prepare and execute the DELETE query
    $sql = "DELETE FROM foodlog WHERE userid = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("i", $deleteId); // 'i' indicates integer parameter
    if ($stmt->execute()) {
        echo "User with ID $deleteId has been removed successfully.";
    } else {
        echo "Error removing user: " . $stmt->error;
    }

    $stmt->close();
}

// Retrieve user data
$sql = "SELECT id, name, email,status FROM users";
$result = $con->query($sql);

?>
<!DOCTYPE html>
<html>

<head>
    <title>User Management</title>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <?php include('header.php'); ?>
    <?php include('menu.php'); ?>
    <?php include('db.php'); ?>
    <div class="restsection">
        <h1 style="text-align: center; color: #333">Current Active Users</h1>
        <?php
        if (mysqli_num_rows($result) > 0) {
            echo "<table  style='margin:30px;' class='table table-bordered table-striped' >";
            echo "<tr class='info'>";
            echo "<td> Name </td>";
            echo "<td> Email </td>";
            echo "<td> Status </td>";
            echo "<td> Operation </td>";


            echo "</tr>";
        }

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>" . $row['name'] . "</td>
                        <td>" . $row['email'] . "</td>
                        <td>" . $row['status'] . "</td>
                        <td><a href='?delete_id=" . $row['id'] . "'>Delete</a></td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No users found.</td></tr>";
        }
        echo "</table>";


        ?>
        <!-- </table> -->
    </div>
</body>

</html>

<?php
// Close the database connection
$con->close();
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
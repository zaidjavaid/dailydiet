<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #35424a;
            color: white;
            text-align: center;
            padding: 1rem;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .post {
            background-color: white;
            padding: 20px;
            margin: 20px 0;
            border-radius: 5px;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .post img {
            max-width: 100%;
            height: auto;
        }

        .post h2 {
            color: #35424a;
        }

        .post p {
            color: #555;
            line-height: 1.6;
            text-align: justify;
        }

        .post .date {
            font-size: 0.8rem;
            color: #888;
        }

        footer {
            text-align: center;
            padding: 1rem;
            background-color: #35424a;
            color: white;
        }
    </style>
</head>

<body>
    <?php
    include 'header.php';
    include 'admin/db.php';
    $res = mysqli_query($con, "select * from blogs where id='" . $_GET['id'] . "' ");

    $r = mysqli_fetch_assoc($res);


    $url = 'admin/' . $r['img'];
    ?>


    <div class="container">
        <div class="post">

            <img src="<?php echo $url; ?>" alt="Blog Image" class="blog-image">
            <h2><?php echo $r['title']; ?></h2>
            <p><?php echo $r['des']; ?></p>
            <p class="date">Published on <?php echo $r['dop']; ?></p>
        </div>


    </div>

    <?php

    include 'footer.php';
    ?>
</body>

</html>
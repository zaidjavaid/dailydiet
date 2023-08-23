<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }

    .blog-container {
      max-width: 800px;
      margin: 20px auto;
      background-color: #ffffff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      padding: 20px;
    }

    .blog-image {
      max-width: 100%;
      height: auto;
    }

    .blog-title {
      font-size: 24px;
      margin: 10px 0;
    }

    .blog-date {
      font-size: 14px;
      color: #888;
    }
  </style>
  <title>Blogs</title>
</head>

<body>

  <?php
  include 'header.php';
  include 'admin/db.php';
  $res = mysqli_query($con, "select * from blogs ");

  while ($r = mysqli_fetch_assoc($res)) {

    $url = 'admin/' . $r['img'];
  ?>



    <div class="blog-container">
      <img src="<?php echo $url; ?>" alt="Blog Image" class="blog-image">
      <h2 class="blog-title"><?php echo $r['title']; ?></h2>
      <p class="blog-date">Published on <?php echo $r['dop']; ?></p>
      <!--  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in turpis at justo efficitur rhoncus.</p> -->
      <a href="blog-details.php?id=<?php echo $r['id'] ?>" class="read-more">Read more</a>
    </div>

  <?php
  }
  include 'footer.php';
  ?>

</body>

</html>
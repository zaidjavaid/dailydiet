<!DOCTYPE html>
<html>

<head>
  <title></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <div class="top1">
    “ Daily Diet”
    <div style="float: right; font-size: 15px;"><i class="fa fa-phone" aria-hidden="true"></i>+919541800475 &nbsp;&nbsp;&nbsp; <i class="fa fa-envelope" aria-hidden="true"></i> info@diet.com</div>
  </div>
  <div class='header'>
    <div class="both">
      <img src="images/lgo.png" style="margin-left: 70PX;  height: 40px; width:auto">
    </div>
    <div class='both'>
      <ul class='all_link'>
        <li><a href="index.php">Home</a> </li>
        <li><a href="about.php">About Us</a> </li>
        <li><a href="blogs.php">Blogs</a> </li>

        <li><a href="user/signup.php">Sign Up</a> </li>
        <li><a href="user/login.php">Login</a> </li>
        <li><a href="admin/login.php">Admin</a> </li>
      </ul>
    </div>
  </div>

</body>

</html>

<style type="text/css">
  body {
    margin: 0;
    font-family: 'Ubuntu', sans-serif;

  }

  .header {

    background: white;
    color: #fff;
    color: #fff;
    padding-top: 12px;
    padding-bottom: 10px;
    position: sticky;
    top: 0;
    z-index: 989898;
    border-bottom: 7px solid #fff;
  }

  .both {
    display: inline-block;
  }

  .all_link {
    margin-left: 30px;
  }

  .all_link>li {
    display: inline-block;
    margin-left: 30px;

  }

  .all_link>li>a {
    margin-right: 7px;
    font-weight: 400;
    letter-spacing: 1px;
    color: #333;
    text-decoration: none;
    font-size: 16px;
  }

  .all_link>li>a:hover {
    text-decoration: underline;
  }

  .top1 {
    /* background: rgb(38, 100, 112) !important; */
    background: #3eb448 !important;
    color: #fff;
    padding: 10px;
    font-size: 20px;
    text-align: center;
    border-bottom: 1px solid #fff;
    z-index: 8989898;

  }

  .footer1 {
    background: rgb(38, 100, 112) !important;
    padding-top: 15px;
    padding-bottom: 15px;
    opacity: .8;
    border-top: 2px solid #5F8125;
  }

  .footer {
    background: rgb(38, 100, 112) !important;
    color: #fff;
    height: auto;
    margin-top: auto;
    right: 0;
    left: 0;
    z-index: 9999;
    clear: both;
    padding-bottom: 27px;
    opacity: .9;

  }

  .all_info {
    display: inline-block;
    vertical-align: top;
    margin-top: 25px;
    margin-left: 10%;
    color: white;
    padding: 12px;
  }


  .all_info>h4 {
    margin: 0px;
    font-size: 12.1pt;
    color: #fff;

  }

  .all_info>ul {

    padding: 0;
    margin: 0;

  }

  .all_info>ul>li {
    cursor: pointer;

    list-style: none;
    font-size: 14px;
    margin-top: 12px;
    transition: all .2s;
    text-decoration: none;

  }

  .all_info>ul>li>a {
    color: #fff;
    transition: all .2s;
    text-decoration: none;
  }

  .all_info>ul>li>a:hover {
    color: #5F8125;
    text-decoration: underline;

  }
</style>
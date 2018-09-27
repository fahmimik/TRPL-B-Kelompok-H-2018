<?php require_once('views/layoutawal.php') ?>

<!DOCTYPE html>
<html>
  <head>

    <title></title>
    <link rel="stylesheet" href="resources/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="resources/mycss/my.css">
    <link rel="stylesheet" href="resources/mycss/owl.carousel.min.css">
    <script src="resources/bootstrap/js/bootstrap.min.js"></script>
    <script src="resources/jquery/jquery.min.js"></script>
    <script src="resources/owl.carousel.min.js"></script>

  </head>
  <body>

<header class="header-image-login">
  <div class="padding-login">

      <div class="container">
        <div class="">
          <h2>-----------------------------------------
            <br>Selebew Login<br>
            -------------------------------------------</h2>

      <form class="" action="?controller=login&action=authen" method="post">
        <div class="col-sm-12">
          <label for="">Username</label><br>
        <input type="text" placeholder="Username" name="username" required><br>
        <label for="">Password</label><br>
        <input type="password" placeholder="Password" name="password" required ><br>

</div>
<button class="btn btn-default " type="submit" id="login-button">Let me in.</button>
    </form>
  </div>
  </div>
    </div>
</header>


  </body>
</html>

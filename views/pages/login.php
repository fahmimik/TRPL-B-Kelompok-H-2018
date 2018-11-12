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

  <div class="header-image-login">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <form class="form-login-container" action="?controller=login&action=authen" method="post">
            <h3 style="color:white;"><b>L O G I N</h3></b>
            <div class="form-group">
              <label style="color:white;">Username</label><br>
              <input type="text" placeholder="Username" name="username" required>
            </div>
            <div class="form-group">
              <label style="color:white;">Password</label><br>
              <input type="password" placeholder="Password" name="password" required>

            </div>
            <button class="btn btn-default " type="submit" id="login-button">Let me in.</button>
          </form>

        </div>

      </div>

    </div>
  </div>


</body>
</html>

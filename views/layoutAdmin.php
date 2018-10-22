<nav class="navbar navbar-inverse navbar-fixed-top nav-background">
  <div class="container-fluid ">
    <div class="navbar-header"><a class="navbar-brand" href=#>SELEBEW-<?php echo $_SESSION['username'] ?></a>
      <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1">
        <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span>
        <span class="icon-bar"></span><span class="icon-bar"></span></button></div>
        <div class="collapse navbar-collapse " id="navcol-1">
          <ul class="nav navbar-nav">
            <li><a class="" href="index.php?controller=home&action=home">Home</a></li>
            <li><a class="" href="index.php?controller=poli&action=poli">Poli</a></li>
            <li><a class="" href="index.php?controller=admin&action=showAllPatient">Pasien</a></li>
            <li><a class="" href="index.php?controller=admin&action=showAllJadwalDoctor">Jadwal</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>

          </ul>
        </div>
      </div>
    </nav>

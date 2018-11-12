<?php
class HomeController{


public function home(){
  if (!isset($_SESSION['username'])) {
    header("location:index.php?controller=login&action=login");
    exit;
  }
  $posts = Admin::showAllDoctor();
  require_once("views/pages/adminHome.php");
}

public function doctorHome(){
  if (!isset($_SESSION['username'])) {
    header("location:index.php?controller=login&action=login");
    exit;
  }
  $posts= Home::showDoctorJadwalHome();
  require_once("views/pages/doctorHome.php");
}

public function patientHome(){
  if (!isset($_SESSION['username'])) {
    header("location:index.php?controller=login&action=login");
    exit;
  }
  $posts=Patient::patientAppointment();
  require_once("views/pages/patientHome.php");
}

public function error(){
  require_once("views/pages/error.php");
}

public function about()
{
    require_once("views/pages/about.php");
}





}


 ?>

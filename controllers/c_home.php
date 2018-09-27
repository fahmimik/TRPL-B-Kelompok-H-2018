<?php
class HomeController{


public function home(){
  if (!isset($_SESSION['username'])) {
    header("location:index.php?controller=login&action=login");
    exit;
  }
  $posts = Admin::showAllDoctor();
  // require_once("views/pages/homeAdmin.php");
  require_once("views/pages/adminHome.php");
}

public function doctorHome(){
  if (!isset($_SESSION['username'])) {
    header("location:index.php?controller=login&action=login");
    exit;
  }
  // $posts= Doctor::showJadwal();
  require_once("views/pages/doctorHome.php");
}

public function patientHome(){
  if (!isset($_SESSION['username'])) {
    header("location:index.php?controller=login&action=login");
    exit;
  }
  // $post=Pasien::showAppointment();
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

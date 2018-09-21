<?php
class HomeController{


public function home(){
  // if (!isset($_SESSION['username'])) {
  //   header("location:index.php?controller=login&action=login");
  //   exit;
  // }
  // $posts = Admin::homeAllDoctor();
  // require_once("views/pages/homeAdmin.php");
  require_once("views/pages/homeAdmin.php");
}

public function homeDoctor(){
  // $posts= Doctor::showJadwal();
  require_once("views/pages/homeDoctor.php");
}

public function homePatient(){
  // $post=Pasien::showAppointment();
  require_once("views/pages/homePatient.php");
}

public function error(){
  require_once("views/pages/error.php");
}





}


 ?>

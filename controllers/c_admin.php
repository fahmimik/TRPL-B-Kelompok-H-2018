<?php
class AdminController{


  public function showAllDoctor()
  {
    require_once ('views/pages/adminHome.php');
  }

  public function tampilAddDoctor()
  {
    require_once ('views/pages/adminAddDoctor.php');
  }

  public function addDoctor()
  {
    $posts = Admin::addDoctor($_GET["username"], $_GET["password"], $_GET["nama"], $_GET["alamat"]);
    header("location:index.php?controller=home&action=home");
  }

  public function editDoctor()
  {
    $posts = Admin::editDoctor($_GET["id"]);
    require_once('views/pages/adminEditDoctor.php');
  }

  public function editDataDoctor()
  {
    $posts = Admin::editDataDoctor($_GET["id"], $_GET["password"], $_GET["nama"], $_GET["alamat"]);
    header("location:index.php?controller=home&action=home");
  }

  public function deleteDoctor()
  {
    $posts = Admin::deleteDoctor($_GET["id"]);
    header("location:index.php?controller=home&action=home");
  }

  public function showAllPatient()
  {
    $posts = Admin::showAllPatient();
    require_once("views/pages/adminAllPatient.php");
  }



  public function showAllJadwalDoctor()
  {
    $posts = Admin::showAllJadwalDoctor();
    require_once("views/pages/adminJadwalDoctor.php");
  }

  public function addJadwalDoctor()
  {
    // $posts = Admin::addDoctor($_GET["username"], $_GET["password"], $_GET["nama"], $_GET["alamat"]);
    $posts = Admin::showAllDoctor();
    $posts2 = poli::showAllPoli();
    $posts3 = Admin::getWaktu();
    require_once("views/pages/adminAddJadwalDoctor.php");
  }

  public function addDataJadwalDoctor()
  {
    $posts = Admin::addDataJadwalDoctor($_GET["nama"], $_GET["nama_poli"], $_GET["hari"], $_GET["waktu"]);
    header("location:index.php?controller=admin&action=showAllJadwalDoctor");
  }
  public function deleteJadwalDoctor()
  {
    $posts = Admin::deleteJadwalDoctor($_GET["id"]);
    header("location:index.php?controller=admin&action=showAllJadwalDoctor");
  }

  public function editJadwalDoctor(){
    $posts = Admin::editJadwalDoctor($_GET["id"]);
    $postsw = Admin::getWaktu();
    require_once('views/pages/adminEditJadwalDoctor.php');
  }

  public function editDataJadwalDoctor(){
    $posts = Admin::editDataJadwalDoctor($_GET["id_jadwal"], $_GET["hari"], $_GET["waktu"]);
    header("location:index.php?controller=admin&action=showAllJadwalDoctor");

  }

  public function adminShowAppointment(){
    $posts=Admin::adminShowAppointment();
    require_once("views/pages/adminShowAppointment.php");
  }
  public function adminShowAppointmentCanceled(){
    $posts=Admin::adminShowAppointmentCanceled();
    require_once("views/pages/adminShowAppointmentCanceled.php");
  }
  // public function editJadwalDoctor(){
  //
  // }


}
?>

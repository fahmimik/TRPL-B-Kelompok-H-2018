<?php
class DoctorController{

  public function showDoctorAppointment(){
    // $posts = Doctor::showDoctorAppointment();
    require_once("views/pages/doctorHome.php");

  }

  public function showDoctorProfile()
  {
    $posts = Doctor::showDoctorProfile();
    require_once("views/pages/doctorProfile.php");
  }

  public function editDoctorProfile()
  {
    $posts = Doctor::editDoctorProfile($_GET["id"]);
    require_once('views/pages/doctorEditProfile.php');
  }

  public function editDataDoctor(){
    $posts = Doctor::editDataDoctor($_GET["id"], $_GET["password"], $_GET["nama"], $_GET["alamat"]);
    header("location:index.php?controller=doctor&action=showDoctorProfile");
  }

  public function doctorAppointment()
  {
    $posts = Doctor::doctorAppointment();
    require_once("views/pages/doctorShowAppointment.php");
  }

  public function doctorAppointmentDone()
  {
    $posts = Doctor::doctorAppointmentDone();
    require_once("views/pages/doctorShowAppointmentDone.php");
  }

  public function editAppointmentDoctor()
  {
    $posts = Doctor::editAppointmentDoctor($_GET["id"]);
    header("location:index.php?controller=doctor&action=doctorAppointment");
  }

  public function editAppointmentDoctorDone()
  {
    $posts = Doctor::editAppointmentDoctorDone($_GET["id"]);
    header("location:index.php?controller=doctor&action=doctorAppointment");
  }












}


 ?>

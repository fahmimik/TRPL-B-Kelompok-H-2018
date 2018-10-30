<?php
class PatientController{

  public function showPatientAppointment(){
    $posts = Patient::showPatientAppointment();
    require_once("views/pages/patientHome.php");

  }

public function showPatientProfile()
{
  $posts = Patient::showPatientProfile();
  require_once("views/pages/patientProfile.php");
}

public function editPatientProfile()
{
  $posts = Patient::editPatientProfile($_GET["id"]);
  require_once('views/pages/patientEditProfile.php');
}

public function editDataPatient(){
  $posts = Patient::editDataPatient($_POST["id"], $_POST["password"], $_POST["nama"], $_POST["alamat"]);
  header("location:index.php?controller=patient&action=showPatientProfile");
}

public function tampilAddAppointment(){
  require_once('views/pages/patientAppointment.php');

}











}


 ?>

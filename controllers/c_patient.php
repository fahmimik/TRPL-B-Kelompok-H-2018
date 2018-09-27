<?php
class PatientController{

  public function showPatientAppointment(){
    $posts = Patient::showPatientAppointment();
    require_once("views/pages/patientHome.php");

  }











}


 ?>

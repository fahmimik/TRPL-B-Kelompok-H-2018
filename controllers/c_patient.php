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
  $postPatient = Patient::getPoli();
  require_once('views/pages/patientAppointment.php');

}

public function patientAddAppointment(){
  $tanggal = $_GET["tanggal"];
  $day = date('D', strtotime($tanggal));
  $dayList = array(
  	'Sun' => 'minggu',
  	'Mon' => 'senin',
  	'Tue' => 'selasa',
  	'Wed' => 'rabu',
  	'Thu' => 'kamis',
  	'Fri' => 'jumat',
  	'Sat' => 'sabtu'
  );
  $poli=$_GET["nama_poli"];
  $hari=$dayList[$day];
  $postPatient2 = Patient::ShowDoctorPatient($hari,$poli);
  $postPatient3 = Patient::ShowWaktuDokter($hari,$poli);
  // $posts = Patient::addAppointment($hari,$_GET["alamat"];);

  require_once('views/pages/patientAddAppointment.php');

}

public function addAppointment(){
  $posts = Patient::addAppointment($_GET['nama'], $_GET['nama_poli'], $_GET['tanggal'],$_GET['detail_waktu']);
  header("location:index.php?controller=home&action=patientHome");
}











}


 ?>

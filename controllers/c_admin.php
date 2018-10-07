<?php
class AdminController{


  public function showAllDoctor(){
    require_once ('views/pages/adminHome.php');
  }


  public function tampilAddDoctor(){
    require_once ('views/pages/adminAddDoctor.php');
  }

  public function addDoctor(){

    $posts = Admin::addDoctor($_GET["username"], $_GET["password"], $_GET["nama"], $_GET["alamat"]);
    header("location:index.php?controller=home&action=home");
  }

  public function editDoctor()
  {
    $posts = Admin::editDoctor($_GET["id"]);
    require_once('views/pages/adminEditDoctor.php');
  }

  public function editDataDoctor(){

    $posts = Admin::editDataDoctor($_GET["id"], $_GET["password"], $_GET["nama"], $_GET["alamat"]);
    header("location:index.php?controller=home&action=home");

  }

  public function deleteDoctor(){
    $posts = Admin::deleteDoctor($_GET["id"]);
    header("location:index.php?controller=home&action=home");
  }


}
 ?>

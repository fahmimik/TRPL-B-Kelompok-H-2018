<?php
class AdminController{


  public function showAllDoctor(){
    $posts = Admin::showAllDoctor();
    require_once("views/pages/homeAdmin.php");
  }
}

 ?>

<?php

class PoliController{

  public function poli(){
    if (!isset($_SESSION['username'])) {
      header("location:index.php?controller=login&action=login");
      exit;
    }
    $posts = poli::showAllPoli();
    // require_once("views/pages/homeAdmin.php");
    require_once("views/pages/poli.php");
  }

public function poliAddPoli(){
  require_once ('views/pages/poliAddPoli.php');
}

public function addPoli(){
  $posts = poli::addPoli($_GET["nama_poli"]);
  header("location:index.php?controller=poli&action=poli");
}

public function editPoli()
{
  $posts = poli::editPoli($_GET["id"]);
  require_once('views/pages/poliEditPoli.php');
}

public function editDataPoli(){
  $posts = poli::editDataPoli($_GET["id"], $_GET["nama_poli"]);
  header("location:index.php?controller=poli&action=poli");
}

public function deletePoli(){
  $posts = poli::deletePoli($_GET["id"]);
  header("location:index.php?controller=poli&action=poli");
}



}

 ?>

<?php
class RegisterController{
  public function register()
  {
    require_once ("views/pages/register.php");
  }
  public function error(){
    require_once('views/pages/error.php');
  }
  public function addRegister()
  {
    $posts=Register::addRegister($_GET["username"],$_GET["password"],$_GET["nama"],$_GET["alamat"],$_GET["telpon"]);

    header("location:index.php");
  }
}


 ?>

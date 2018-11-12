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
    $posts=Register::addRegister($_GET["username"],$_GET["password"],$_GET["nama"],$_GET["alamat"],$_GET["no_ktp"]);
    if ($posts == 0){
      ?>
      <script>
      alert("nama pengguna atau nomor ktp telah ada");
      </script>
      <?php
      require_once('views/pages/register.php');
    } elseif ($posts == 1) {
      header("location:index.php");
    }

  }
}


?>

<?php

// include('./models/m_login.php');

class LoginController{

  public function login(){
     $error='';

    require_once('views/pages/login.php');

  }

public function error(){
  require_once('views/pages/login.php');
}

public function authen()
    {
        if (!isset($_POST['username']) || !isset($_POST['password'])) {

}
        else {

            if (Login::authen($_POST['username'], $_POST['password']) == null) {
                // require_once('views/pages/login.php');

            }
             else {
                $result = Login::authen($_POST['username'], $_POST['password']);
                $result = $result->fetchAll();
                if (count($result) > 0) {
                    $_SESSION['id_user'] = $result[0]['id_user'];
                    $_SESSION['username'] = $result[0]['username'];
                    $_SESSION['level'] = $result[0]['level'];
                    if (isset($_SESSION['level'])) {
                        if ($_SESSION['level'] == 1) {
                            header("location:index.php?controller=home&action=home");
                        } else if ($_SESSION['level'] == 2) {
                            header("location:index.php?controller=home&action=doctorHome");
                        } else if ($_SESSION['level'] == 3) {
                            header("location:index.php?controller=home&action=patientHome");
                        }
                    }
                }
                else {
                    header("location:index.php?controller=home&action=login");
                }
            }
        }
    }
  }

 ?>

<?php
class Register{
	public $username;
	public $password;
	public $nama;
	public $alamat;
  public $telpon;

  function __construct($username,$password,$nama,$alamat,$telpon){
    $this->username=$username;
    $this->password=$password;
    $this->nama=$nama;
    $this->alamat=$alamat;
    $this->telpon=$telpon;
  }
public static function addRegister($username,$password,$nama,$alamat,$telpon){
  $db = DB::getInstance();
  $req =
  $db->query("INSERT INTO users (id_user, username, password, nama, alamat, telpon , level)
  VALUES (null, '".$username."','".$password."','".$nama."','".$alamat."','".$telpon."', '".'3'."') ");
  return $req;
}

}
 ?>

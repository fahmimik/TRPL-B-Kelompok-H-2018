<?php
class Register{
	public $username;
	public $password;
	public $nama;
	public $alamat;


  function __construct($username,$password,$nama,$alamat){
    $this->username=$username;
    $this->password=$password;
    $this->nama=$nama;
    $this->alamat=$alamat;

  }
public static function addRegister($username,$password,$nama,$alamat){
  $db = DB::getInstance();
  $req =
  $db->query("INSERT INTO users (id_user, username, password, nama, alamat , level)
  VALUES (null, '".$username."','".$password."','".$nama."','".$alamat."' , '".'3'."') ");
  return $req;
}

}
 ?>

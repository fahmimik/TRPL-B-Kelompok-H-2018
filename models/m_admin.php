<?php
class Admin{
  public $id;
  public $username;
  public $password;
  public $nama;
  public $alamat;
  public $telepon;

function __construct($id,$username,$password,$nama,$alamat,$telepon){
  $this->id=$id;
  $this->username=$username;
  $this->password=$password;
  $this->nama=$nama;
  $this->alamat=$alamat;
  $this->telepon=$telepon;
}

public static function showAllDoctor(){
$list=[];
$db = DB::getInstance();
$req = $db->query("SELECT *FROM users where level=2");
foreach ($req->fetchAll() as $post) {
  $list[] = new Admin($post['id_user'],$post['username'],$post['password'],$post['nama'],$post['alamat'], $post['telepon']
  );
}
return $list;

}










}

 ?>

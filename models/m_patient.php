<?php
class Patient{
public $id;
public $username;
public $password;
public $nama;
public $alamat;

function __construct($id,$username,$password,$nama,$alamat){
  $this->id=$id;
  $this->username=$username;
  $this->password=$password;
  $this->nama=$nama;
  $this->alamat=$alamat;
}
public static function showPatientProfile(){
  $list=[];
  $db = DB::getInstance();
  $req = $db->query("SELECT * from users where id_user=".$_SESSION['id_user']."");
  foreach ($req->fetchAll() as $post) {
    $list[] = new Patient($post['id_user'],$post['username'],$post['password'],$post['nama'],$post['alamat']
    );
  }
  return $list;
}

public static function editPatientProfile($id){
  $list =[];
  $db = DB::getInstance();

  $req = $db->query("SELECT * FROM users where id_user=$id");
  foreach ($req -> fetchAll() as $post) {
    $list[] = new Patient($post['id_user'],$post['username'],$post['password'],$post['nama'],$post['alamat']
      );

  }
  return $list;
}

public static function editDataPatient($id,$password,$nama,$alamat){
  $db = DB::getInstance();
  $req = $db->query("UPDATE users set password='$password', nama='$nama', alamat='$alamat'
    where id_user='$id'
    ");
  return $req;
}
}

 ?>

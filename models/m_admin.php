<?php
class Admin{
  public $id;
  public $username;
  public $password;
  public $nama;
  public $alamat;
  public $telepon;

function __construct($id,$username,$password,$nama,$alamat){
  $this->id=$id;
  $this->username=$username;
  $this->password=$password;
  $this->nama=$nama;
  $this->alamat=$alamat;

}

public static function addDoctor($username, $password, $nama, $alamat){
  $db= DB::getInstance();
  $req = $db -> query("INSERT INTO users (id_user, username, password, nama, alamat, level)
  VALUES(null, '".$username."','".$password."','".$nama."','".$alamat."', 2)");
  return $req;
}

public static function showAllDoctor(){
$list=[];
$db = DB::getInstance();
$req = $db->query("SELECT *FROM users where level=2");
foreach ($req->fetchAll() as $post) {
  $list[] = new Admin($post['id_user'],$post['username'],$post['password'],$post['nama'],$post['alamat']
  );
}
return $list;
}

public static function editDoctor($id){
  $list =[];
  $db = DB::getInstance();

  $req = $db->query("SELECT * FROM users where id_user=$id");
  foreach ($req -> fetchAll() as $post) {
    $list[] = new Admin($post['id_user'],$post['username'],$post['password'],$post['nama'],$post['alamat']
      );

  }
  return $list;
}

public static function editDataDoctor($id,$password,$nama,$alamat){
  $db=DB::getInstance();
  // $pass='pass';
  $req = $db->query("UPDATE users set password='$password', nama='$nama', alamat='$alamat'
   where id_user='$id'
  ");
  return $req;

}

public static function deleteDoctor($id){
  $db = DB::getInstance();
  $req= $db->query("DELETE from users where id_user=$id");
  return $req;
}






}
 ?>

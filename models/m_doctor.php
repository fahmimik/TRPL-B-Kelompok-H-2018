<?php
class Doctor{
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


public static function showDoctorJadwal(){
$list=[];
$db = DB::getInstance();
$req = $db->query("SELECT *FROM jadwal ");
foreach ($req->fetchAll() as $post) {
  $list[] = array(
    'id_jadwal' => $post['id_jadwal'],
    'nama' => $post['nama'],
    'id_poli' => $post['id_poli'],
    'hari' => $post['hari'],
    'waktu' => $post['waktu']

  // new Doctor($post['id_user'],$post['id_user'],$post['id_poli'],$post['id_hari'],$post['id_jam']
  );
}
return $list;
}

public static function showDoctorProfile(){
  $list=[];
  $db = DB::getInstance();
  $req = $db->query("SELECT * from users where id_user=".$_SESSION['id_user']."");
  foreach ($req->fetchAll() as $post) {
    $list[] = array(
      'id_user' => $post['id_user'],
      'username' => $post['username'],
      'password' => $post['password'],
      'nama' => $post['nama'],
      'alamat' => $post['alamat'],

    // new Doctor($post['id_user'],$post['username'],$post['password'],$post['nama'],$post['alamat']
    );
  }
  return $list;
}

public static function editDoctorProfile($id){
  $list =[];
  $db = DB::getInstance();

  $req = $db->query("SELECT * FROM users where id_user=$id");
  foreach ($req -> fetchAll() as $post) {
    $list[] = array (
      'id_user' => $post['id_user'],
      'username' => $post['username'],
      'password' => $post['password'],
      'nama' => $post['nama'],
      'alamat' => $post['alamat'],

    // new Doctor($post['id_user'],$post['username'],$post['password'],$post['nama'],$post['alamat']
      );

  }
  return $list;
}

public static function editDataDoctor($id,$password,$nama,$alamat){
  $db = DB::getInstance();
  $req = $db->query("UPDATE users set password='$password', nama='$nama', alamat='$alamat'
    where id_user='$id'
    ");
  return $req;
}


}



 ?>

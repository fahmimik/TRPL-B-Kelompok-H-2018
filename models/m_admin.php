<?php
class Admin{
  // public $id;
  // public $username;
  // public $password;
  // public $nama;
  // public $alamat;
  // public $telepon;
  // public $waktu;

function __construct(/*$id,$username,$password,$level,$nama,$alamat,$waktu*/){
    // $this->id=$id;
    // $this->username=$username;
    // $this->password=$password;
    // $this->level=$level;
    // $this->nama=$nama;
    // $this->alamat=$alamat;
    // $this->waktu=$waktu;

  }

  public static function addDoctor($username,$password,$nama,$alamat){
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
      $list[] = array(
        'id_user' => $post['id_user'],
        'username' => $post['username'],
        'password' => $post['password'],
        'level' => $post['level'],
        'nama' => $post['nama'],
        'alamat' => $post['alamat'],

      // new Admin($post['id_user'],$post['username'],$post['password'],$post['level'],$post['nama'],$post['alamat'],0
    );
  }
  return $list;
}

public static function editDoctor($id){
  $list =[];
  $db = DB::getInstance();

  $req = $db->query("SELECT * FROM users where id_user=$id");
  foreach ($req -> fetchAll() as $post) {
  $list[] = array (
    'id_user' => $post['id_user'],
    'username' => $post['username'],
    'password' => $post['password'],
    'level' => $post['level'],
    'nama' => $post['nama'],
    'alamat' => $post['alamat'],
  // new Admin($post['id_user'],$post['username'],$post['password'],$post['level'],$post['nama'],$post['alamat'],0
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

  public static function showAllPatient(){
    $list=[];
    $db = DB::getInstance();
    $req = $db->query("SELECT *FROM users where level=3");
    foreach ($req->fetchAll() as $post) {
      $list[] = array(
        'id_user' => $post['id_user'],
        'username' => $post['username'],
        'password' => $post['password'],
        'nama' => $post['nama'],
        'alamat' => $post['alamat']

      // new Admin($post['id_user'],$post['username'],$post['password'],0,$post['nama'],$post['alamat'],0
    );
  }
  return $list;
}

public static function showAllJadwalDoctor(){
  $list=[];
  $db = DB::getInstance();
  $req = $db->query("SELECT j.id_jadwal, u.nama, p.nama_poli, j.hari, w.waktu  FROM jadwal j join users u on j.id_user=u.id_user join poli p on j.id_poli=p.id_poli join waktu w on j.id_waktu=w.id_waktu");
  foreach ($req->fetchAll() as $post) {
    $list[] = array(
      'id_jadwal' => $post['id_jadwal'],
      'nama' => $post['nama'],
      'nama_poli' => $post['nama_poli'],
      'hari' => $post['hari'],
      'waktu' => $post['waktu']

  );
  }
  return $list;
}

public static function addDataJadwalDoctor($nama,$nama_poli,$hari,$waktu){
  // echo $nama;
  $db = DB::getInstance();
  $req =
  $db->query("INSERT INTO jadwal (id_jadwal, id_user, id_poli, hari, id_waktu)
  VALUES (null, (select id_user from users where nama='$nama'),(select id_poli from poli where nama_poli='$nama_poli'),'".$hari."',(select id_waktu from waktu where waktu='$waktu'))");
  return $req;
}

public static function deleteJadwalDoctor($id){
  $db = DB::getInstance();
  $req= $db->query("DELETE from jadwal where id_jadwal=$id");
  return $req;
}

public static function editJadwalDoctor($id){
  $list =[];
  $db = DB::getInstance();

  $req = $db->query("SELECT j.id_jadwal, u.nama, p.nama_poli, j.hari, w.waktu  FROM jadwal j join users u on j.id_user=u.id_user join poli p on j.id_poli=p.id_poli join waktu w on j.id_waktu=w.id_waktu where j.id_jadwal=$id");
  foreach ($req -> fetchAll() as $post) {
  $list[] = array(
    'id_jadwal' => $post['id_jadwal'],
    'nama' => $post['nama'],
    'nama_poli' => $post['nama_poli'],
    'hari' => $post['hari'],
    'waktu' => $post['waktu']

  // new Admin($post['id_jadwal'],$post['nama'],$post['nama_poli'],$post['hari'],$post['waktu'],0,0
  );
}
return $list;
}

public static function getWaktu(){
  $list = [];
  $db = DB::getInstance();

  $req = $db->query("SELECT * from waktu ");
  foreach ($req -> fetchAll() as $post){
    $list[] = array(
      'id_waktu' => $post['id_waktu'],
      'waktu' => $post['waktu']
    );
  }
  return $list;
}


public static function editDataJadwalDoctor($id,$hari,$waktu){
  $db=DB::getInstance();
  $req = $db->query("UPDATE jadwal set  hari='$hari', id_waktu=(select id_waktu from waktu where waktu='$waktu')
    where id_jadwal='$id'
    ");
    return $req;
  }






}
?>

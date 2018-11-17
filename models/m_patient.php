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
    $list[] = array(
      'id_user' => $post['id_user'],
      'username' => $post['username'],
      'password' => $post['password'],
      'nama' => $post['nama'],
      'alamat' => $post['alamat'],
    );
  }
  return $list;
}

public static function editPatientProfile($id){
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


    // new Patient($post['id_user'],$post['username'],$post['password'],$post['nama'],$post['alamat']
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

public static function patientAppointment(){
  $db = DB::getInstance();
      $req = $db->query("SELECT a.id_appointment, j.id_user,u.nama, p.nama_poli, j.hari, a.tanggal, dw.detail_waktu
         from jadwal j join users u on j.id_user=u.id_user
         join appointment a on j.id_jadwal=a.id_jadwal
         join poli p on j.id_poli=p.id_poli
         join detail_waktu dw on a.id_detail_waktu=dw.id_detail_waktu where a.id_user=".$_SESSION['id_user']."");
 foreach ($req -> fetchAll() as $post) {
   $list[] = array(
     'id_appointment' => $post['id_appointment'],
     'nama' => $post['nama'],
     'nama_poli' => $post['nama_poli'],
     'hari' => $post['hari'],
     'tanggal' => $post['tanggal'],
     'detail_waktu' => $post['detail_waktu']

   );
 }
 return $list;
}

public static function getPoli(){
  $db = DB::getInstance();
  $req = $db->query("SELECT * from poli");
  foreach ($req -> fetchAll() as $post) {
    $list[] = array(
      'id_poli' => $post['id_poli'],
      'nama_poli' => $post['nama_poli']
    );

  }
  return $list;
}

public static function ShowDoctorPatient($hari,$poli){

  $db = DB::getInstance();
  $list = array();
  $req = $db->query("SELECT * from jadwal j
    join poli p on j.id_poli=p.id_poli
    join users u on j.id_user=u.id_user
    where j.hari='$hari' and p.nama_poli='$poli'
    group by u.nama"
    );
  foreach ($req -> fetchAll() as $post) {
    $list[] = array(
      // 'id_poli' => $post['id_poli'],
      'nama' => $post['nama']
    );
  }
  return $list;
}

public static function ShowWaktuDokter($hari,$poli,$nama){
  $db = DB::getInstance();
  $list = array();
  $req = $db->query("SELECT * from jadwal j
    join poli p on j.id_poli=p.id_poli
    join detail_waktu dw on j.id_waktu=dw.id_waktu
    join users u on j.id_user=u.id_user
    where j.hari='$hari' and p.nama_poli='$poli' and u.nama='$nama'");
  foreach ($req -> fetchAll() as $post) {
    $list[] = array(
      // 'id_poli' => $post['id_poli'],
      'detail_waktu' => $post['detail_waktu']
    );
  }
  return $list;
}

// public static function addJanji($nama,$waktu){
//   $db = DB::getInstance();
//   $req =
//   $db->query("INSERT INTO appointment(id_appointment,id_user,id_jadwal,tanggal)
//   VALUES (null,$_SESSION['id_user'],(select id_poli from poli where nama_poli='$nama_poli'),'".$hari."',(select id_waktu from waktu where waktu='$waktu'))");
//   return $req;
// }


// public static function getJadwal(){
//   $db = DB::getInstance();
//   $req = $db->query("SELECT * from jadwal where hari=[]");
//   foreach ($req -> fetchAll() as $post) {
//     $list[] = array(
//       'id_poli' => $post['id_poli'],
//       'nama_poli' => $post['nama_poli']
//     );
//
//   }
//   return $list;
// }

public static function addAppointment($nama,$nama_poli,$hari,$waktu){
  $db = DB::getInstance();
  $req =
  $db -> query("INSERT INTO appointment (id_appointment, id_user, id_jadwal, tanggal, id_detail_waktu)
    VALUES (null, ".$_SESSION['id_user'].",(select j.id_jadwal from waktu w join detail_waktu dw on w.id_waktu=dw.id_waktu
      join jadwal j on w.id_waktu=j.id_waktu join poli p on j.id_poli=p.id_poli join users u on j.id_user=u.id_user
       where p.nama_poli='$nama_poli' and dw.detail_waktu='$waktu' and u.nama='$nama' ),'".$hari."',
       (select id_detail_waktu from detail_waktu where detail_waktu='$waktu'))");
  return $req;
  // ,(select dw.id_waktu from waktu w join detail_waktu dw on w.id_waktu=dw.id_waktu where dw.detail_waktu='$waktu')
}



}
 ?>

 <!-- SELECT a.id_appointment, u.nama, p.nama_poli, j.hari, dw.detail_waktu
from appointment a join users u on a.id_user=u.id_user
join jadwal j on j.id_jadwal=a.id_jadwal
join waktu w on w.id_waktu=j.id_waktu
join detail_waktu dw on dw.id_waktu=w.waktu
join poli p on p.id_poli=j.id_poli -->

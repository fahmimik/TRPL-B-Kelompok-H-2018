<?php
class Patient{

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
      $list=[];
      $req = $db->query("SELECT a.id_appointment,a.id_user, us.nama as nama_pasien, j.id_user,u.nama, p.nama_poli, j.hari, a.tanggal, dw.detail_waktu, a.status
        from jadwal j
        join users u on j.id_user=u.id_user
        join appointment a on j.id_jadwal=a.id_jadwal
        join poli p on j.id_poli=p.id_poli
        join users us on us.id_user=a.id_user

        join detail_waktu dw on a.id_detail_waktu=dw.id_detail_waktu where status='Booked' and a.id_user=".$_SESSION['id_user']."");
        foreach ($req -> fetchAll() as $post) {
          $list[] = array(
            'id_appointment' => $post['id_appointment'],
            'nama' => $post['nama'],
            'nama_pasien' => $post['nama_pasien'],
            'nama_poli' => $post['nama_poli'],
            'hari' => $post['hari'],
            'tanggal' => $post['tanggal'],
            'detail_waktu' => $post['detail_waktu'],
            'status' => $post['status']

          );
        }
        return $list;
      }

      public static function patientAppointmentDone(){
        $db = DB::getInstance();
        $list=[];
        $req = $db->query("SELECT a.id_appointment,a.id_user, us.nama as nama_pasien, j.id_user,u.nama, p.nama_poli, j.hari, a.tanggal, dw.detail_waktu, a.status
          from jadwal j
          join users u on j.id_user=u.id_user
          join appointment a on j.id_jadwal=a.id_jadwal
          join poli p on j.id_poli=p.id_poli
          join users us on us.id_user=a.id_user

          join detail_waktu dw on a.id_detail_waktu=dw.id_detail_waktu where status='Done' and a.id_user=".$_SESSION['id_user']."");
          foreach ($req -> fetchAll() as $post) {
            $list[] = array(
              'id_appointment' => $post['id_appointment'],
              'nama' => $post['nama'],
              'nama_pasien' => $post['nama_pasien'],
              'nama_poli' => $post['nama_poli'],
              'hari' => $post['hari'],
              'tanggal' => $post['tanggal'],
              'detail_waktu' => $post['detail_waktu'],
              'status' => $post['status']

            );
          }
          return $list;
        }

        public static function cek($tanggal,$waktu){
          $db = DB::getInstance();
          $req = $db->query("SELECT count(*) from appointment a JOIN detail_waktu dw on a.id_detail_waktu=dw.id_detail_waktu where  a.tanggal='$tanggal' and dw.detail_waktu=$waktu and status='Booked'");
          foreach ($req -> fetchAll() as $post) {
            $list[] = array(
              'count(*)' => $post['count(*)'],
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
                'detail_waktu' => $post['detail_waktu']
              );
            }
            return $list;
          }

          public static function addAppointment($nama,$nama_poli,$tanggal,$waktu,$hari){
            $db = DB::getInstance();
            $req =
            $db -> query("INSERT INTO appointment (id_appointment, id_user, id_jadwal, tanggal, id_detail_waktu, status)
            VALUES (null, ".$_SESSION['id_user'].",(select j.id_jadwal from waktu w join detail_waktu dw on w.id_waktu=dw.id_waktu
              join jadwal j on w.id_waktu=j.id_waktu join poli p on j.id_poli=p.id_poli join users u on j.id_user=u.id_user
              where p.nama_poli='$nama_poli' and dw.detail_waktu='$waktu' and u.nama='$nama' and j.hari='$hari' ),'".$tanggal."',
              (select id_detail_waktu from detail_waktu where detail_waktu='$waktu'), 'Booked') " );
              return $req;
            }

            public static function editAppointment($id){
              $db = DB::getInstance();
              $req =
              $db -> query("UPDATE appointment set status = 'Canceled' where id_appointment='$id'");
              return $req;
            }

          }
          ?>

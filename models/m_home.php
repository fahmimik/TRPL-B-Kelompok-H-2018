<?php
class Home{

  public static function showDoctorJadwalHome(){
    $db = DB::getInstance();
    $list = [];
    $req = $db->query("SELECT j.id_jadwal, u.nama, p.nama_poli, j.hari, w.waktu  FROM jadwal j join users u on j.id_user=u.id_user join poli p on j.id_poli=p.id_poli join waktu w on j.id_waktu=w.id_waktu where u.id_user=".$_SESSION['id_user']."");
    foreach ($req->fetchAll() as $post) {
      $list[] = array (
        'id_jadwal' => $post['id_jadwal'],
        'nama' => $post['nama'],
        'nama_poli' => $post['nama_poli'],
        'hari' => $post['hari'],
        'waktu' => $post['waktu']
      );

    }
    return $list;
  }

}
?>

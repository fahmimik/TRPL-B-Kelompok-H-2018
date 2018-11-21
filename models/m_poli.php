<?php
class poli{

  public static function addPoli($nama_poli){
    $db = DB::getInstance();
    $req =
    $db->query("INSERT INTO poli (id_poli, nama_poli)
    VALUES (null, '".$nama_poli."') ");
    return $req;
  }

  public static function showAllPoli(){
    $list=[];
    $db = DB::getInstance();
    $req = $db->query("SELECT *FROM poli ");
    foreach ($req->fetchAll() as $post) {
      $list[] = array(
        'id_poli' => $post['id_poli'],
        'nama_poli' => $post['nama_poli'],

      );
    }
    return $list;
  }

  public static function editPoli($id){
    $list =[];
    $db = DB::getInstance();

    $req = $db->query("SELECT * FROM poli where id_poli=$id");
    foreach ($req -> fetchAll() as $post) {
      $list[] = array (
        'id_poli' => $post['id_poli'],
        'nama_poli' => $post['nama_poli'],
        
      );

    }
    return $list;
  }

  public static function editDataPoli($id,$nama_poli){
    $db=DB::getInstance();
    $req = $db->query("UPDATE poli set nama_poli='$nama_poli'
      where id_poli='$id' ");
      return $req;

    }

    public static function deletePoli($id){
      $db = DB::getInstance();
      $req= $db->query("DELETE from poli where id_poli=$id");
      return $req;
    }


  }

  ?>

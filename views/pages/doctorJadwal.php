<?php
require_once('views/layoutDoctor.php')?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="padding-about">
        <h1 align="center">JADWAL DOKTER</h1>

        <div class="container">
          <a href="?controller=&action="><button type="button" class="btn btn-info">Tambah Jadwal</button></a>
    <br><br>

    <table class="table table-hover">
      <th>No</th>
      <th>id user</th>
      <th>poli</th>
      <th>hari</th>
      <th>jam</th>
      <th>action</th>
      <?php $i=1; ?>
      <?php foreach ($posts as $post) { ?>
        <tr>
          <td><?php echo $i; ?></td> <!-- mencetak data $post->nim dll berasal dari variabel yang berada di m_pegawai -->
          <td><?php echo $post->id;  ?></td>
          <td><?php echo $post->id_user; ?></td>
          <td><?php echo $post->id_poli; ?></td>
          <td><?php echo $post->id_hari;  ?></td>
          <td><?php echo $post->id_jam;  ?></td>
          <td>
            <a href="?controller=&action=&id=<?php echo $post->id ?>"><span class="glyphicon glyphicon-edit"></span></a>
            <a href="?controller=&action=&id=<?php echo $post->id ?>"><span class="glyphicon glyphicon-trash"></span></a>
          </td>

        </tr><?php $i++;} ?>

    </table>
        </div>

    </div>

  </body>
</html>

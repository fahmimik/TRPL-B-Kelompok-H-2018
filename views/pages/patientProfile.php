<?php require_once('views/layoutPatient.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <title></title>
  </head>
  <body>
    <div class="padding-about">
        <h1 align="center">Profil</h1>

        <div class="container">
          <!-- <a href="?controller=admin&action=tampilAddDoctor"><button type="button" class="btn btn-info">Tambah Dokter</button></a> -->
    <br><br>

    <table class="table table-hover">
      <!-- <th>No</th> -->
      <th>id user</th>
      <th>username</th>
      <th>password</th>
      <th>nama</th>
      <th>alamat</th>
      <th>action</th>
      <?php $i=1; ?>
      <?php foreach ($posts as $post) { ?>
        <tr>
          
          <td><?php echo $post->id;  ?></td>
          <td><?php echo $post->username; ?></td>
          <td><?php echo $post->password; ?></td>
          <td><?php echo $post->nama;  ?></td>
          <td><?php echo $post->alamat;  ?></td>
          <td>
            <a href="?controller=patient&action=editPatientProfile&id=<?php echo $post->id ?>"><span class="glyphicon glyphicon-edit"></span></a>
          </td>

        </tr><?php $i++;} ?>

    </table>
        </div>

    </div>


  </body>
</html>

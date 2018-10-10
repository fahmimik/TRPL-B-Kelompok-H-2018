<?php require_once('views/layoutAdmin.php')?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <div class="padding-about">
    <h1 align="center">PASIEN</h1>

    <div class="container">
      <br><br>
      <table class="table table-hover">
        <th>No</th>
        <th>id user</th>
        <th>username</th>
        <th>password</th>
        <th>nama</th>
        <th>alamat</th>
        <?php $i=1; ?>
        <?php foreach ($posts as $post) { ?>
          <tr>
            <td><?php echo $i; ?></td> <!-- mencetak data $post->nim dll berasal dari variabel yang berada di m_pegawai -->
            <td><?php echo $post->id;  ?></td>
            <td><?php echo $post->username; ?></td>
            <td><?php echo $post->password; ?></td>
            <td><?php echo $post->nama;  ?></td>
            <td><?php echo $post->alamat;  ?></td>

          </tr><?php $i++;} ?>

        </table>
      </div>

    </div>
  </body>
  </html>

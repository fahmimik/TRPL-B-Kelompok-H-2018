<?php require_once('views/layoutDoctor.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <script src="resources/bootstrap/js/bootstrap.min.js"></script>
    <script src="resources/jquery/jquery.min.js"></script>
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
      <?php foreach ($posts as $post) { ?>
        <tr>

          <td><?php echo $post['id_user'];  ?></td>
          <td><?php echo $post['username']; ?></td>
          <td><?php echo $post['password']; ?></td>
          <td><?php echo $post['nama'];  ?></td>
          <td><?php echo $post['alamat'];  ?></td>
          <td><a href="?controller=doctor&action=editDoctorProfile&id=<?php echo $post['id_user'] ?>"><button class="btn btn-primary">Edit</button></a>
          </td>

        </tr><?php } ?>

    </table>
        </div>

    </div>


  </body>
</html>

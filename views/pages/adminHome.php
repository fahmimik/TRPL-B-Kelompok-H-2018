<?php require_once('views/layoutAdmin.php')?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
  <script src="resources/bootstrap/js/bootstrap.min.js"></script>
  <script src="resources/jquery/jquery.min.js"></script>
</head>
<body>
  <div class="padding-about">
    <h1 align="center">CRUD DOKTER</h1>

    <div class="container">
      <a href="?controller=admin&action=tampilAddDoctor"><button type="button" class="btn btn-info">Tambah Dokter</button></a>
      <br><br>

      <div class="row">
        <div class="col-lg-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title"><i class="fa fa-money fa-fw"></i>List Dokter</h3>
            </div>
            <div class="panel-body">
              <div class="table-responsive">

      <table class="table table-bordered table-hover table-striped">

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
            <td>
              <a href="?controller=admin&action=editDoctor&id=<?php echo $post['id_user'] ?>"><span class="glyphicon glyphicon-edit"></span></a>
              <a href="?controller=admin&action=deleteDoctor&id=<?php echo $post['id_user'] ?>"><span class="glyphicon glyphicon-trash"></span></a>
            </td>

          </tr><?php } ?>

        </table>
      </div>

    </div>
  </div>
</div>
</div>
</div>
  </body>
  </html>

<?php require_once('views/layoutAdmin.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <script src="resources/bootstrap/js/bootstrap.min.js"></script>
  <script src="resources/jquery/jquery.min.js"></script>
</head>
<body class=padding-about>
  <h1 align="center">SPESIALIS</h1>

  <div class="container">
    <a href="?controller=poli&action=poliAddPoli"><button type="button" class="btn btn-info">Tambah Spesialis</button></a>
    <br><br>

    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-money fa-fw"></i>List Spesialis</h3>
          </div>
          <div class="panel-body">
            <div class="table-responsive">

    <table class="table table-bordered table-hover table-striped">

      <th>id Spesialis</th>
      <th>Nama Spesialis</th>
      <th>Action</th>

      <?php foreach ($posts as $post) { ?>
        <tr>

          <td><?php echo $post['id_poli'];  ?></td>
          <td><?php echo $post['nama_poli']; ?></td>
          <td>
            <a href="?controller=poli&action=editPoli&id=<?php echo $post['id_poli'] ?>"><span class="glyphicon glyphicon-edit"></span></a>
            <a href="?controller=poli&action=deletePoli&id=<?php echo $post['id_poli'] ?>"><span class="glyphicon glyphicon-trash"></span></a>
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

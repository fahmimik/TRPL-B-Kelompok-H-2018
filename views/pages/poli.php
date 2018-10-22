<?php require_once('views/layoutAdmin.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <link rel="stylesheet" href="resources/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="resources/mycss/my.css">
  <script src="resources/bootstrap/js/bootstrap.min.js"></script>
  <script src="resources/jquery/jquery.min.js"></script>
  </head>
  <body class=padding-about>
    <h1 align="center">POLI</h1>

    <div class="container">
      <a href="?controller=poli&action=poliAddPoli"><button type="button" class="btn btn-info">Tambah Poli</button></a>
  <br><br>

  <table class="table table-hover">
  <th>No</th>
  <th>id Poli</th>
  <th>Nama Poli</th>
  <th>Action</th>
  <?php $i=1; ?>
  <?php foreach ($posts as $post) { ?>
    <tr>
      <td><?php echo $i; ?></td> <!-- mencetak data $post->nim dll berasal dari variabel yang berada di m_pegawai -->
      <td><?php echo $post->id;  ?></td>
      <td><?php echo $post->nama_poli; ?></td>
      <td>
        <a href="?controller=poli&action=editPoli&id=<?php echo $post->id ?>"><span class="glyphicon glyphicon-edit"></span></a>
        <a href="?controller=poli&action=deletePoli&id=<?php echo $post->id ?>"><span class="glyphicon glyphicon-trash"></span></a>
      </td>

    </tr><?php $i++;} ?>

  </table>
    </div>


  </body>
</html>

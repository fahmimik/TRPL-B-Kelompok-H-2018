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
    <h1 align="center">PASIEN APPOINTMENT</h1>

    <div class="container">
      <a type="button" name="button" class="btn btn-success" href="?controller=admin&action=adminShowAppointment">Booked or Done</a>
      <br><br>
      <div class="row">
        <div class="col-lg-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title"><i class="fa fa-money fa-fw"></i>List Appointment</h3>
            </div>
            <div class="panel-body">
              <div class="table-responsive">

      <table class="table table-bordered table-hover table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nama Dokter</th>
            <th>Nama Pasien</th>
            <th>Poli</th>
            <th>Hari</th>
            <th>Tanggal</th>
            <th>Jam</th>
            <th>Status</th>


            <?php foreach ((array) $posts as $post) { ?>
              <tr>
                <td><?php echo $post['id_appointment']  ?></td>
                <td><?php echo $post['nama'] ?></td>
                <td><?php echo $post['nama_pasien'] ?></td>
                <td><?php echo $post['nama_poli'] ?></td>
                <td><?php echo $post['hari']  ?></td>
                <td><?php echo $post['tanggal']  ?></td>
                <td><?php echo $post['detail_waktu']  ?></td>
                <td><?php echo $post['status'] ?></td>



              </tr><?php } ?>

          </tr>
        </thead>

        </table>
      </div>

    </div>
  </div>
</div>
</div>
</div>
  </body>
  </html>

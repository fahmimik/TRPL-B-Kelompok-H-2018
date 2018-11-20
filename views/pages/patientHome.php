<?php require_once('views/layoutPatient.php')?>
<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <script src="resources/bootstrap/js/bootstrap.min.js"></script>
    <script src="resources/jquery/jquery.min.js"></script>
  </head>
  <body class="padding-about">
    <h1 align="center">Jadwal Janji Temu</h1>
    <div class="container">
      <a href="?controller=patient&action=tampilAddAppointment" class="btn btn-primary">Tambah</a>
      <a href="?controller=patient&action=patientAppointmentDone" class="btn btn-success">Appointment Done</a>
      <br><br>

      <div class="row">
        <div class="col-lg-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title"><i></i>Janji Temu</h3>
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
                      <th>Action</th>

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
                          <td>
                            <a class="btn btn-danger" name="button"  href="?controller=patient&action=editAppointment&id=<?php echo $post['id_appointment'] ?>">Cancel</a>
                          </td>


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

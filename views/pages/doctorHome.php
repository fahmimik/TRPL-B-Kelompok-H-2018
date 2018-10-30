<?php require_once('views/layoutDoctor.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <title></title>
  <script src="resources/bootstrap/js/bootstrap.min.js"></script>
  <script src="resources/jquery/jquery.min.js"></script>
  </head>
  <body class="padding-about">
    <h1 align="center">Jadwal Dokter</h1>

    <div class="container">
      <!-- <a href="?controller=admin&action=addJadwalDoctor"><button type="button" class="btn btn-info">Tambah</button></a> -->
      <br><br>
      <!-- <table class="table">

      </table> -->
      <div class="row">
        <div class="col-lg-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Jadwal Dokter</h3>
            </div>
            <div class="panel-body">
              <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nama Dokter</th>
                      <th>Poli</th>
                      <th>Hari</th>
                      <th>Jam</th>

                      <?php foreach ($posts as $post) { ?>
                        <tr>
                          <td><?php echo $post['id_jadwal']  ?></td>
                          <td><?php echo $post['nama'] ?></td>
                          <td><?php echo $post['nama_poli'] ?></td>
                          <td><?php echo $post['hari']  ?></td>
                          <td><?php echo $post['waktu']  ?></td>


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

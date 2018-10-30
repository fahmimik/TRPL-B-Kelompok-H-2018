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
      <a href="?controller=patient&action=tampilAddAppointment"><button type="button" class="btn btn-primary">Tambah</button></a>
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
                      <th>Poli</th>
                      <th>Hari</th>
                      <th>Jam</th>
                      <th>Action</th>
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

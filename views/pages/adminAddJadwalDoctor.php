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

  <h1 class="padding-about" align="center">TAMBAH Jadwal DOKTER</h1>
  <br><br>
  <!-- <div class=""> -->
    <div align="center" class="container">

      <div class="col-md-8">

        <form class="form-horizontal" method="get">
        <input type="hidden" name="controller" value="admin">
        <input type="hidden" name="action" value="addDataJadwalDoctor">

          <div class="form-group">
            <label class="col-sm-4 control-label" style="text-align:left">Nama Dokter</label>
              <select name="nama" class="col-sm-4 btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"> <span class="caret"></span>
                <?php foreach ($posts as $post) { ?>
                <option><?php echo $post['nama']; ?> </option>
              <?php } ?>
              </select>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label" style="text-align:left">Spesialis</label>
              <select name="nama_poli" class="col-sm-4 btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"> <span class="caret"></span>
                <?php foreach ($posts2 as $post) { ?>
                <option><?php echo $post['nama_poli']; ?> </option>
              <?php } ?>
              </select>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label" style="text-align:left">hari</label>
              <select class="col-sm-4 btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" name="hari"><span class="caret"></span>
                <option value="senin">Senin</option>
                <option value="selasa">Selasa</option>
                <option value="rabu">Rabu</option>
                <option value="kamis">Kamis</option>
                <option value="jumat">Jumat</option>
                <option value="sabtu">Sabtu</option>
                <option value="minggu">Minggu</option>
              </select>
          </div>

          <div class="form-group">
            <label class="col-sm-4 control-label" style="text-align:left">Jam Kerja</label>
              <select name="waktu" class="col-sm-4 btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"><span class="caret"></span>
                <?php foreach ($posts3 as $post) {?>
                  <option> <?php echo $post['waktu']; ?> </option>
              <?php } ?>

              </select>
          </div>
<br><br>

              <button type="submit" class="btn btn-success">Simpan</button>
              <a href="index.php?controller=admin&action=showAllJadwalDoctor">
                <button type="button" class="btn btn-success">Kembali</button>


            </div>

          </div>
  <!-- </div> -->


        </form>

      </div>

</body>
</html>

<?php require_once('views/layoutAdmin.php')?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="resources/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="resources/mycss/my.css">
  <script src="resources/bootstrap/js/bootstrap.min.js"></script>
  <script src="resources/jquery/jquery.min.js"></script>
</head>
<body>

  <h1 class="padding-about" align="center">TAMBAH Jadwal DOKTER</h1>
  <br><br>
  <!-- <div class=""> -->
    <div align="center" class="container">

      <div class="col-md-5">

        <form class="form-horizontal" method="get">
        <input type="hidden" name="controller" value="admin">
        <input type="hidden" name="action" value="addDataJadwalDoctor">

          <div class="form-group">
            <label class="col-sm-2 control-label">Nama Dokter</label>
            <div class="col-sm-10">
              <select name="nama">
                <?php foreach ($posts as $post) { ?>
                <option><?php echo $post->nama; ?> </option>
              <?php } ?>


              </select><!-- <input type="text" class="form-control" name="username" placeholder="Masukan Username" required> -->
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Nama Poli</label>
            <div class="col-sm-10">
              <select name="nama_poli">
                <?php foreach ($posts2 as $post) { ?>
                <option><?php echo $post->nama_poli; ?> </option>
              <?php } ?>


              </select><!-- <input type="text" class="form-control" name="username" placeholder="Masukan Username" required> -->
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">hari</label>
            <div class="col-sm-10">
              <select class="" name="hari">
                <option value="senin">Senin</option>
                <option value="selasa">Selasa</option>
                <option value="rabu">Rabu</option>
                <option value="kamis">Kamis</option>
                <option value="jumat">Jumat</option>
                <option value="sabtu">Sabtu</option>
                <option value="minggu">Minggu</option>
              </select>
              <!-- <input type="text" class="form-control" name="nama" placeholder="Masukan Nama" required> -->
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Jam Kerja</label>
            <div class="col-sm-10">
              <select class="" name="waktu">
                <?php foreach ($posts3 as $post) {?>
                  <option> <?php echo $post['waktu']; ?> </option>
              <?php } ?>

              </select>
              <!-- <input type="text" class="form-control" name="alamat" placeholder="Masukan Alamat" required> -->
            </div>
          </div>


          <div class="form-group">
              <button type="submit" class="btn btn-success">Simpan</button>
              <a href="index.php?controller=admin&action=showAllJadwalDoctor">
                <button type="button" class="btn btn-success">Kembali</button>

          </div>
            </div>

          </div>
  <!-- </div> -->


        </form>

      </div>

</body>
</html>

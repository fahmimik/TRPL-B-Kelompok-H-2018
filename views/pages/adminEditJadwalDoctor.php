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

  <h1 class="padding-about" align="center">EDIT Jadwal DOKTER</h1>
  <br><br>
  <!-- <div class=""> -->
    <div align="center" class="container">

      <div class="col-md-8">

        <form class="form-horizontal" method="get">
          <?php foreach ($posts as $post) { ?>
        <input type="hidden" name="controller" value="admin">
        <input type="hidden" name="action" value="editDataJadwalDoctor">
        <input type="hidden" name="id_jadwal" value="<?php echo $post['id_jadwal'];?>">

          <div class="form-group">
            <label class="col-sm-4 control-label" style="text-align:left">Nama Dokter</label>
            <div class="col-sm-4">
              <label class="col-sm-4 control-label"><?php echo $post['nama']  ?></label>
    <!-- <input type="text" class="form-control" name="username" placeholder="Masukan Username" required> -->
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label" style="text-align:left">Nama Poli</label>
            <div class="col-sm-4">
<label class="col-sm-2 control-label"><?php echo $post['nama_poli']  ?></label>
              <!-- <input type="text" class="form-control" name="username" placeholder="Masukan Username" required> -->
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label" style="text-align:left">hari</label>
            <!-- <div class="col-sm-4"> -->
              <select class="col-sm-4 btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" name="hari"><span class="caret"></span>
                <option> <?php echo $post['hari']  ?></option>
                <option value="senin">Senin</option>
                <option value="selasa">Selasa</option>
                <option value="rabu">Rabu</option>
                <option value="kamis">Kamis</option>
                <option value="jumat">Jumat</option>
                <option value="sabtu">Sabtu</option>
                <option value="minggu">Minggu</option>
              </select>
              <!-- <input type="text" class="form-control" name="nama" placeholder="Masukan Nama" required> -->
            <!-- </div> -->
          </div>

          <div class="form-group">
            <label class="col-sm-4 control-label" style="text-align:left">Jam Kerja</label>
              <select name="waktu" class="col-sm-4 btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"><span class="caret"></span>
                <?php foreach ($postsw as $post ){ ?>

                  <option value="<?php echo $post['waktu'] ?>"> <?php echo $post['waktu'] ?> </option>

                <?php } ?>
              </select>

          </div>


          <div class="form-group">
              <button type="submit" class="btn btn-success">Simpan</button>
              <a href="index.php?controller=admin&action=showAllJadwalDoctor">
                <button type="button" class="btn btn-success">Kembali</button>

          </div>
            </div>

          </div>
  <!-- </div> -->

<?php } ?>
        </form>

      </div>

</body>
</html>

<?php require_once('views/layoutAdmin.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <script src="resources/bootstrap/js/bootstrap.min.js"></script>
    <script src="resources/jquery/jquery.min.js"></script>
  </head>
  <body>

    <h1 class="padding-about" align="center">EDIT DOKTER</h1>
    <br><br>
    <div class="container">
      <div class="col-md-6">
        <form class="form-horizontal" method="get">
        <?php foreach ($posts as $post) { ?>


        <input type="hidden" name="controller" value="admin">
        <input type="hidden" name="action" value="editDataDoctor">
        <input type="hidden" name="id" value="<?php echo $post['id_user']; ?>">
          <div class="form-group">
            <label class="col-sm-2 control-label">username</label>
            <div class="col-sm-10">
              <label class="col-sm-2 control-label"><?php echo $post['username'] ?></label>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">password</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="password" placeholder="Masukan Password" value="<?php echo $post['password'] ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">nama</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nama" placeholder="Masukan Nama" value="<?php echo $post['nama'] ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">alamat</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="alamat" placeholder="Masukan Alamat" value="<?php echo $post['alamat'] ?>">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-success">Simpan</button>
              <a href="index.php?controller=home&action=home"><button type="button" class="btn btn-success">Back </button>
            </div>
          </div>
          <?php } ?>
        </form>
      </div>

    </div>

  </body>
</html>

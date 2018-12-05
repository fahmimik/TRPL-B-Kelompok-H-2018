<?php require_once('views/layoutAdmin.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <script src="resources/bootstrap/js/bootstrap.min.js"></script>
    <script src="resources/jquery/jquery.min.js"></script>
  </head>
  <body>

    <h1 class="padding-about" align="center">EDIT SPESIALIS</h1>
    <br><br>
    <div class="container">
      <div class="col-md-6">
        <form class="form-horizontal" method="get">
        <?php foreach ($posts as $post) { ?>


        <input type="hidden" name="controller" value="poli">
        <input type="hidden" name="action" value="editDataPoli">
        <input type="hidden" name="id" value="<?php echo $post['id_poli']; ?>">
          <div class="form-group">
            <label class="col-sm-2 control-label">Nama Spesialis</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nama_poli" placeholder="Masukan Nama Spesialis" value="<?php echo $post['nama_poli'] ?>">
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-success">Simpan</button>
              <a href="index.php?controller=poli&action=poli"><button type="button" class="btn btn-success">Back </button>
            </div>
          </div>
          <?php } ?>
        </form>
      </div>

    </div>

  </body>
</html>

<?php require_once('views/layoutPatient.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body class="padding-about">
    <h1 align="center">Tambah Jadwal Janji Temu</h1>
      <div class="col-lg-8">
        <input class="form-control" type="date" name="tanggal" value="" min="<?php echo date('Y-m-d',strtotime('+0 day')); ?>" max="<?php echo date('Y-m-d',strtotime('+7 day'));?>" required>

      </div>





  </body>
</html>

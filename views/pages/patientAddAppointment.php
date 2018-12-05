<?php require_once('views/layoutPatient.php') ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body class="padding-about">
    <h1>Pilih Dokter</h1>
    <div class="container">
      <div class="col-md-8">
        <form class="form-horizontal" method="get">
          <input type="hidden" name="controller" value="patient">
          <input type="hidden" name="action" value="tampilAddWaktuApppointment">

          <div class="form-group">
            <label class="col-md-4"> Pilih Dokter</label>
            <select class="col-md-4 btn btn-default dropdown-toggle" name="nama" type="button" data-toggle="dropdown"><span class="caret"></span>
              <?php foreach ($postPatient2 as $post) { ?>
                <option><?php echo $post['nama'] ?></option>
              <?php } ?>
            </select>
          </div>

          <div class="form-group">

          <label class="col-sm-4 control-label" style="text-align:left">Tanggal : </label>
          <!-- <div class="col-sm-4"> -->
            <select class="col-sm-4 btn btn-default dropdown-toggle" name="tanggal" type="button"  data-toggle="dropdown" ><span class="caret"></span>

              <option><?php echo $_GET['tanggal']?></option>
            </select>
          <!-- </div> -->

        </div>

        <div class="form-group">
          <label class="col-sm-4 control-label" style="text-align:left">Spesialis : </label>
          <!-- <div class="col-sm-4"> -->
            <select class="col-sm-4 btn btn-default dropdown-toggle" name="nama_poli"  type="button"  data-toggle="dropdown" ><span class="caret"></span>

              <option><?php echo $_GET['nama_poli']?></option>

            </select>

        </div>







              <button type="submit" class="btn btn-success">Submit</button>
        </form>

      </div>

    </div>


  </body>
</html>

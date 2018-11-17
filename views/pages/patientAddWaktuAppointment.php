<?php require_once('views/layoutPatient.php') ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body class="padding-about">
    <h1>Pilih Waktu</h1>
    <div class="container">
      <div class="col-md-8">
        <form class="form-horizontal" method="get">
          <input type="hidden" name="controller" value="patient">
          <input type="hidden" name="action" value="addAppointment">

          <div class="form-group">
            <label class="col-md-4"> Pilih Dokter</label>
            <select class="col-md-4 btn btn-default dropdown-toggle" name="nama" type="button" data-toggle="dropdown"><span class="caret"></span>
              <option><?php echo $_GET['nama']?></option>
            </select>
          </div>

          <div class="form-group">
            <label class="col-md-4"> Pilih Waktu</label>
            <select class="col-md-4 btn btn-default dropdown-toggle" name="detail_waktu" type="button" data-toggle="dropdown"><span class="caret"></span>
                <?php foreach ($postPatient3 as $post) { ?>
                <option><?php echo $post['detail_waktu'];
                  ?></option>
              <?php } ?>
            </select>

          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label" style="text-align:left">Tanggal : </label>
            <!-- <div class="col-sm-4"> -->
              <select class="col-sm-4 btn btn-default dropdown-toggle" name="tanggal" type="button"  data-toggle="dropdown" ><span class="caret"></span>

                <option><?php echo $_GET['tanggal']?></option>

              </select>

          </div>

          <div class="form-group">
            <label class="col-sm-4 control-label" style="text-align:left">Nama Poli : </label>
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

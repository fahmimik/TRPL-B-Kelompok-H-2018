<?php require_once('views/layoutPatient.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body class="padding-about">
    <h1 align="center">Tambah Jadwal Janji Temu</h1>

    <div class="container">
      <div class="col-md-8">

        <form class="form-horizontal" method="get">
          <input type="hidden" name="controller" value="patient">
          <input type="hidden" name="action" value="patientAddAppointment">

          <div class="form-group">

            <label class="col-md-4">Lihat tanggal</label>
            <div class="col-md-4">
              <input class="form-control" type="date" name="tanggal" value="" min="<?php echo date('Y-m-d',strtotime('+1 day')); ?>" max="<?php echo date('Y-m-d',strtotime('+30 day'));?>" required>
            </div>
          </div>

          <div class="form-group">
          <label class="col-sm-4 control-label" style="text-align:left"> Pilih Poli</label>
          <!-- <div class="col-md-4"> -->
            <select class="col-sm-4 btn btn-default dropdown-toggle" name="nama_poli"  type="button"  data-toggle="dropdown" > <span class="caret"></span>
              <?php foreach ($postPatient as $post) { ?>
              <option><?php echo $post['nama_poli']; ?> </option>
            <?php } ?>
            </select>
          <!-- </div> -->
        </div>

          <button type="submit" class="btn btn-success">Submit</button>
        <!-- </form> -->


        </form>


      </div>
    </div>






  </body>
</html>

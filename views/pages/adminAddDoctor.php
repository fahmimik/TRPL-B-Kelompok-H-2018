<?php require_once('views/layoutAdmin.php'); ?>

<!DOCTYPE html>
<html>
  <head>
    <title></title>
  </head>
  <body>
    <h1 class="padding-about" align="center">TAMBAH DOKTER</h1>
    <br><br>
    <!-- <div class=""> -->
    	<div align="center" class="container">

    		<div class="col-md-5">

    			<form class="form-horizontal" method="get">
    			<input type="hidden" name="controller" value="admin">
    			<input type="hidden" name="action" value="addDoctor">
    				<div class="form-group">
    					<label class="col-sm-2 control-label">Username</label>
    					<div class="col-sm-10">
    						<input type="text" class="form-control" name="username" placeholder="Masukan Username" required>
    					</div>
    				</div>
    				<div class="form-group">
    					<label class="col-sm-2 control-label">Password</label>
    					<div class="col-sm-10">
    						<input type="password" class="form-control" name="password" placeholder="Masukan Password" required>
    					</div>
    				</div>
    				<div class="form-group">
    					<label class="col-sm-2 control-label">Nama</label>
    					<div class="col-sm-10">
    						<input type="text" class="form-control" name="nama" placeholder="Masukan Nama" required>
    					</div>
    				</div>
    				<div class="form-group">
    					<label class="col-sm-2 control-label">Alamat</label>
    					<div class="col-sm-10">
    						<input type="text" class="form-control" name="alamat" placeholder="Masukan Alamat" required>
    					</div>
    				</div>


    				<div class="form-group">
    						<button type="submit" class="btn btn-success">Simpan</button>
    						<a href="index.php?controller=home&action=home">
                  <button type="button" class="btn btn-success">Kembali</button>

    				</div>
    					</div>

    				</div>
    <!-- </div> -->


    			</form>

    		</div>
    	</div>

  </body>
</html>

<?php require_once('views/layoutAdmin.php'); ?>

<!DOCTYPE html>
<html>
  <head>
    <title></title>
  </head>
  <body>
    <h1 class="padding-about" align="center">TAMBAH POLI</h1>
    <br><br>
    	<div align="center" class="container">

    		<div class="col-md-5">

    			<form class="form-horizontal" method="get">
    			<input type="hidden" name="controller" value="poli">
    			<input type="hidden" name="action" value="addPoli">
    				<div class="form-group">
    					<label class="col-sm-2 control-label">Poli</label>
    					<div class="col-sm-10">
    						<input type="text" class="form-control" name="nama_poli" placeholder="Masukan Nama Poli" required>
    					</div>
    				</div>
    				<div class="form-group">
    						<button type="submit" class="btn btn-success">Simpan</button>
    						<a href="index.php?controller=poli&action=poli">
                  <button type="button" class="btn btn-success">Kembali</button>

    				</div>
    				</div>
    				</div>

    			</form>

    		</div>
    	</div>

  </body>
</html>

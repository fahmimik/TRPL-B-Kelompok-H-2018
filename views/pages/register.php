<?php require_once('views/layoutawal.php'); ?>
<!DOCTYPE HTML>
<html>
<head>
	<title>REGISTER</title>
<link rel="stylesheet" href="resources/my.css">
</head>
<body>
<h1 align="center">REGISTER</h1>
<br><br>

	<div class="container">

		<div class="col-md-5">

			<form class="form-horizontal" method="get">
			<input type="hidden" name="controller" value="register">
			<input type="hidden" name="action" value="addRegister">
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
					<label class="col-sm-2 control-label">Telpon</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="telpon" placeholder="Masukan Telpon" required>
					</div>
				</div>


				<div class="form-group">
					<!-- <div class="col-sm-offset-2 col-sm-10"> -->
						<button type="submit" class="btn btn-success">Simpan</button>
						<a href="index.php?controller=login&action=login"><button type="button" class="btn btn-success">Kembali</button>
					<!-- </div> -->
				</div>
					</div>

				</div>

				</div>

			</form>

		</div>
	</div>
</body>
</html>

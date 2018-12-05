<?php require_once('views/layoutawal.php'); ?>
<!DOCTYPE HTML>
<html>
<head>
	<title>REGISTER</title>
<script src="resources/bootstrap/js/bootstrap.min.js"></script>
<script src="resources/jquery/jquery.min.js"></script>
</head>
<body class="padding-about">
<h1 align="center">REGISTER</h1>
<br><br><br>
<div class="">
	<div class="container">

		<div class="col-md-8">

			<form class="form-horizontal" method="get">
			<input type="hidden" name="controller" value="register">
			<input type="hidden" name="action" value="addRegister">
				<div class="form-group">
					<label class="col-sm-6 control-label">Username</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" name="username" placeholder="Masukan Username" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-6 control-label">Password</label>
					<div class="col-sm-6">
						<input type="password" class="form-control" name="password" placeholder="Masukan Password" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-6 control-label">Nama</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" name="nama" placeholder="Masukan Nama" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-6 control-label">Alamat</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" name="alamat" placeholder="Masukan Alamat" required>
					</div>
				</div>

        <div class="form-group">
					<label class="col-sm-6 control-label">Nomor KTP</label>
					<div class="col-sm-6">
						<input oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" class="form-control" name="no_ktp" placeholder="Masukan Nomor KTP" maxlength="16" required>
						<small ><i>masukkan 16 digit angka</small></i>
					</div>
				</div>


				<div class="form-group">
					<div class="col-sm-offset-6 col-sm-6">
						<button type="submit" class="btn btn-success">Simpan</button>
						<a href="index.php?controller=login&action=login"><button type="button" class="btn btn-success">Kembali</button>
					</div>
				</div>
					</div>

				</div>
</div>


			</form>

		</div>
	</div>
</body>
</html>

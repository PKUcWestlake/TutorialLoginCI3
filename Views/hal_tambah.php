<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Halaman Registrasi</title>
	<link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?= base_url('assets/style.css') ?>">
</head>
<body>
	<div class="login">
		<div class="left">
			<h3>-- Tambah Anggota Baru --</h3>

			<form action="<?= base_url('welcome/add_user') ?>" method="post">
				<div class="group">
					<label>Username</label>
					<input type="text" name="username" placeholder="Masukkan Username">
					<i class="fa fa-envelope"></i>
				</div>
				<div class="group">
					<label>Password</label>
					<input type="password" name="password" placeholder="Masukkan Password">
					<i class="fa fa-key"></i>
				</div>
				<div class="group">
					<label>Nama Lengkap</label>
					<input type="text" name="nama" placeholder="Masukkan Nama Lengkap">
					<i class="fa fa-user"></i>
				</div>

				<button><i class="fa fa-send"></i> Tambah</button>
			</form>
		</div>

		<div class="right">
			<img src="<?= base_url('assets/logo.png') ?>">
			<h1>Dashboard Kecoak Sakti Official</h1>
		</div>
	</div>
	
</body>
</html>
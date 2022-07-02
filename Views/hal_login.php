<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Halaman Login</title>
	<link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?= base_url('assets/style.css') ?>">
</head>
<body>
	<div class="login">
		<div class="left">
			<h1>LOGIN</h1>
			<span>(Kecoak Sakti Official)</span>
			<h3>-- Sign in Your Account --</h3>

			<form action="<?= base_url('welcome/cekLoginUser') ?>" method="post">
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

				<button><i class="fa fa-send"></i> Masuk</button>
			</form>
			<h3>Atau</h3>
			<a href="<?= base_url('welcome/hal_tambah') ?>">Daftar Anggota Baru</a>
		</div>

		<div class="right">
			<img src="<?= base_url('assets/logo.png') ?>">
			<h1>Dashboard Kecoak Sakti Official</h1>
		</div>
	</div>

	<script>
		<?php if ($this->session->flashdata('msg') == '1') { ?>
			alert('Username / Password Salah!!!');
		<?php } ?>

		<?php if ($this->session->flashdata('msg') == '2') { ?>
			alert('Data Berhasil Ditambahkan');
		<?php } ?>
	</script>
	
</body>
</html>
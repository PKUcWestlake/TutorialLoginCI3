<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Halaman Home</title>
	<style>
		body {
			min-height: 90vh;
			display: flex;
			justify-content: center;
			align-items: center;
		}

		h2 {
			text-align: center;
			text-transform: uppercase;
		}

		.center {
			padding: 10px;
			width: 500px;
			text-align: center;
			border-radius: 5px;
			box-shadow: 0 4px 10px rgb(0 0 0 / 0.2);
		}

		button {
			background-color: #4caf50;
			font-weight: bold;
			border: none;
			color: white;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			font-size: 16px;
			cursor: pointer;
		}
	</style>
</head>
<body>
	<div class="center">
		<h2> == Selamat Datang == <br>(<?= $DATA->nama ?>)</h2>
		<button onclick="window.location.href='<?php echo base_url('welcome/logout') ?>'">LOGOUT</button>
	</div>	
</body>
</html>
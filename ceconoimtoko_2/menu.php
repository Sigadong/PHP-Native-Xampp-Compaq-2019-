<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Toko Pelajar</title>

	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="fontawesome/css/all.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
	<link rel="stylesheet" href="dist/css/style.css">
	<link rel="stylesheet" href="dist/js/style.js">
</head>
<body>
	<!--navbar -->
	<nav class="navbar navbar-default">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="index.php""><img src="foto_produk/belajar.gif" style="width: auto; max-height: 40px;"></a>
		</div>

		<div class="containers">
			<ul class="nav navbar-nav">
				<li><a href="index.php" class="active"><i class="fa fa-home"></i>Home</a></li>
				<li><a href="keranjang.php" class="menus"><i class="fa fa-shopping-cart"></i> Keranjang</a></li>
				<!-- jika sudah login (ada session pelanggan) -->
				<?php if (isset($_SESSION["pelanggan"])): ?>
					<li><a href="riwayat.php" class="menus"><i class="fa fa-history"></i>Riwayat Belanja</a></li>
					<li><a href="logout.php" class="menus"><i class="fa fa-sign-out-alt"></i>Logout</a></li>
					<?php else: ?>
						<li><a href="login.php" class="menus"><i class="fa fa-sign-in-alt"></i>Login</a></li>
						<li><a href="daftar.php" class="menus"><i class="fa fa-cube"></i>Daftar</a></li>
					<?php endif ?>
					<li><a href="checkout.php" class="menus"><i class="fa fa-handshake"></i> Checkout</a></li>
				</ul> 
			</div>
		</nav>

		<!-- jquery.min.js wajib disertakan agar bootstrap.min.js dapat bekerja -->
		<!-- <script src="dist/js/jquery.min.js"></script> -->
		<!-- <script src="bootstrap/js/bootstrap.min.js"></script> -->
	</body>
	</html>
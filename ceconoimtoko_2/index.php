<?php 
session_start();
// koneksi ke database
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Online Shop</title>

	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="fontawesome/css/all.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
	<link rel="stylesheet" href="dist/css/style.css">
</head>
<body>
	<?php include 'menu.php'; ?>

	<!-- Konten -->
	<section class="konten">
		<div class="container">
			<h1>Selamat Berbelanja</h1>

			<div class="row">
				
				<?php $ambil = $koneksi->query("SELECT * FROM produk"); ?>
				<?php while($perproduk = $ambil->fetch_assoc()){ ?>
					<div class="col-md-3">
						<div class="thumbnail">
							<img src="foto_produk/<?php echo $perproduk['foto_produk']; ?>" alt="Produk">
							<div class="caption">
								<center>
									<h3><?php echo $perproduk['nama_produk']; ?></h3>
									<h5>Rp. <?php echo number_format($perproduk['harga_produk']); ?></h5>
									<a href="beli.php?id=<?php echo $perproduk['id_produk']; ?>" id="beli" class="btn btn-primary">Beli</a>
									<a href="detail.php?id=<?php echo $perproduk["id_produk"]; ?>" id="beli" class="btn btn-default">Detail</a>
								</center>
							</div>
						</div>
					</div>			
				<?php } ?>	

			</div>

		</div>
	</section>
	<?php include 'footer.php'; ?>

	<!-- jquery.min.js wajib disertakan agar bootstrap.min.js dapat bekerja -->
	<script src="dist/js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
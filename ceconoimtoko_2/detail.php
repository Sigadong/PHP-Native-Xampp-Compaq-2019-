<?php 
session_start();
// koneksi ke database
include 'koneksi.php';
 ?>
<?php 
// mendapatkan id produk dari url
$id_produk = $_GET["id"];
  
// query ambil data
$ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
$detail = $ambil->fetch_assoc();

 ?>
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
<?php include 'menu.php'; ?>

<!-- Konten -->
<section class="konten">
	<div class="container">
		<div class="row">	
			<div class="col-md-6">
				<img src="foto_produk/<?php echo $detail['foto_produk']; ?>" alt="" class="img-responsive">
			</div>
			<div class="col-md-6"> 
				<h2><?php echo $detail["nama_produk"]; ?></h2>
				<h4>Rp. <?php echo number_format($detail["harga_produk"]); ?></h4>
					<form method="post">
						<div class="form-group">
							<div class="input-group">
								<input type="number" min="1" class="form-control" name="jumlah">
								<div class="input-group-btn">
									<button class="btn btn-primary" name="beli">Beli</button>
								</div>
							</div>
						</div>
					</form>
						<?php 
							// jika ada tombol beli
							if (isset($_POST["beli"]))
							{
								// mendapatkan jumlah yang diinputkan
								$jumlah= $_POST["jumlah"];
								// masukkan di keranjang belanja
								$_SESSION["keranjang"][$id_produk]= $jumlah;
							// larikan ke halaman keranjang
								echo "<script>alert('Produk Anda telah masuk ke keranjang belanja');</script>";
								echo "<script>location='keranjang.php';</script>";
							}
							 ?>
				<p><?php echo $detail["deskripsi_produk"]; ?></p>	
			</div>
		</div>
	</div>
</section>
	<?php include 'footer.php'; ?>
	<!-- jquery.min.js wajib disertakan agar bootstrap.min.js dapat bekerja -->
	<script src="dist/js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

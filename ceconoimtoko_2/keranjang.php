<?php 
session_start();
// koneksi ke database

// echo "<pre>";
// print_r($_SESSION['keranjang']);
// echo "</pre>";
include 'koneksi.php';

if (empty($_SESSION["keranjang"]) OR !isset($_SESSION["keranjang"]))
{
	echo "<script>alert('Keranjang Anda Kosong, Silahkan Belanja dahulu');</script>";
	echo "<script>location='index.php';</script>";
}
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

<section class="konten">
	<div class="container">
		<h1>Keranjang Belanja</h1>
		<hr>  
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>Produk</th>
						<th>Harga</th>
						<th>Jumlah</th>
						<th>Subharga</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $nomor=1; ?>
					<?php foreach ($_SESSION["keranjang"] as $id_produk => $jumlah): ?>
					<!-- menampilkan produk yang sedang di perulangkan berdasarkan id_produk -->
					<?php $ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
						$pecah = $ambil->fetch_assoc();
						$subharga = $pecah["harga_produk"]*$jumlah;
					 ?>
					<tr>
						<td><?php echo $nomor; ?></td>
						<td><?php echo $pecah["nama_produk"]; ?></td>
						<td>Rp. <?php echo number_format($pecah["harga_produk"]); ?></td>
						<td><?php echo $jumlah;?></td>
						<td>Rp. <?php echo number_format($subharga); ?></td>
						<td>
							<a href="hapuskeranjang.php?id=<?php echo $id_produk ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-alt"></i><span class="del"> Hapus</span></a>
						</td>
					</tr>
				<?php $nomor++; ?>
				<?php endforeach ?>
				</tbody>
			</table>
			<a href="index.php" class="btn btn-default"><i class="fa fa-angle-double-left"></i> Lanjutkan Belanja</a>
			<a href="checkout.php" class="btn btn-primary"><i class="fa fa-chevron-right"></i> Checkout</a>
	</div>
</section>
	<?php include 'footer.php'; ?>
	<!-- jquery.min.js wajib disertakan agar bootstrap.min.js dapat bekerja -->
	<script src="dist/js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
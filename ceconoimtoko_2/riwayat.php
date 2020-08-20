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
<section class="riwayat">
	<div class="container">
		<h3>Riwayat Belanja <?php echo $_SESSION["pelanggan"]["nama_pelanggan"]; ?></h3>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>Tanggal</th>
						<th>Status</th>
						<th>Total</th>
						<th>Opsi</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$nomor=1;
					// mendapatkan id_pelanggan yang login dari session
					$id_pelanggan = $_SESSION["pelanggan"]['id_pelanggan'];

					$ambil = $koneksi->query("SELECT * FROM pembelian WHERE id_pelanggan='$id_pelanggan'");
					while($pecah = $ambil->fetch_assoc()){
					 ?>
					<tr>
						<td><?php echo $nomor; ?></td>
						<td><?php echo $pecah["tanggal_pembelian"]; ?></td>
						<td><?php echo $pecah["status_pembelian"]; ?></td>
						<td>Rp. <?php echo number_format($pecah["total_pembelian"]); ?></td>
						<td>
							<a href="nota.php?id=<?php echo $pecah["id_pembelian"]; ?>" class="btn btn-info"><i class="fa fa-sticky-note"></i> Nota</a>
							<a href="" class="btn btn-success">Pembayaran</a>
						</td>
					</tr>
				<?php $nomor++; ?>
			<?php } ?>
				</tbody>
			</table>
	</div>
</section>
	<?php include 'footer.php'; ?>
	<!-- jquery.min.js wajib disertakan agar bootstrap.min.js dapat bekerja -->
	<script src="dist/js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
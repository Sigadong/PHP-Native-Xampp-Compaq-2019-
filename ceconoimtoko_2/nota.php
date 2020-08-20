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

	<section class="konten">
		<div class="container">
			<!-- Nota disini copas saja dari nota yang di coding admin -->
			<h2>Nota Pembelian</h2>

			<?php
			$ambil = $koneksi->query("SELECT * FROM pembelian JOIN pelanggan ON pembelian.id_pelanggan=pelanggan.id_pelanggan WHERE pembelian.id_pembelian='$_GET[id]'");
			$detail = $ambil->fetch_assoc();
			?>

			<div class="row">
				<div class="col-md-4">
					<h3>Pembelian</h3>
					<strong>No.Pembelian: <?php echo $detail['id_pembelian']; ?></strong> <br>
					Tanggal :<?php echo $detail['tanggal_pembelian']; ?> <br>
					Total : Rp.<?php echo number_format($detail['total_pembelian']); ?>
				</div>
				<div class="col-md-4">
					<h3>Pelanggan</h3>
					<strong><?php echo $detail['nama_pelanggan']; ?></strong> <br> 
					<p>
						<?php echo $detail ['telepon_pelanggan']; ?> <br>
						<?php echo $detail ['email_pelanggan']; ?>
					</p>
				</div>
				<div class="col-md-4">
					<h3>Pengiriman</h3>
					<strong><?php echo $detail['nama_kota']; ?></strong> <br>
					Ongkos Kirim: Rp.<?php echo number_format($detail ['tarif']); ?><br>
					Alamat: <?php echo $detail['alamat_pengiriman']; ?>
				</div>
			</div>

			<form action="">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Produk</th>
							<th>Harga</th>
							<th>Berat</th>
							<th>Jumlah</th>
							<th>Subberat</th>
							<th>Subtotal</th>
						</tr>
					</thead>	
					<tbody>
						<?php $nomor=1; ?>
						<?php $ambil=$koneksi->query("SELECT * FROM pembelian_produk WHERE id_pembelian='$_GET[id]'"); ?>
						<?php while($pecah = $ambil->fetch_assoc()){ ?>
							<tr> 
								<td><?php echo $nomor; ?></td> 
								<td><?php echo $pecah['nama']; ?></td>
								<td>Rp. <?php echo number_format($pecah['harga']); ?></td>
								<td><?php echo $pecah['berat'];?> Gr.</td>
								<td><?php echo $pecah['jumlah'];?></td>
								<td><?php echo $pecah['subberat'] ?> Gr.</td>
								<td>Rp.<?php echo number_format($pecah['subharga']); ?></td>
							</tr>
							<?php $nomor++;  ?>
						<?php } ?>
					</tbody>
				</table>
			</form>
			<div class="row">
				<div class="col-md-7">
					<div class="alert alert-info">
						<p>
							Silahkan Melakukan Pembayaran <strong>Rp. <?php echo number_format($detail['total_pembelian']);?></strong> ke <strong>Bank Mandiri :<br>No.Rek 223-001554-9220<br> an. gadong | Pt.cocenoim</strong><br><i class="fa fa-credit-card"></i> 
						</p>
						<div class="bank">
							<img src="foto_produk/bank.jpg" style="max-width: 300px; max-height: 250px;">
						</div>
					</div>
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
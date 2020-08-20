<?php 
// session_start();
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

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">

				<div class="panel-heading">
					<h3 class="panel-title">Daftar Pelanggan</h3>
				</div>

				<div class="panel-body">
					<form method="post" class="form-horizontal">
						<div class="form-group">
							<label for="" class="control-label col-md-3">Nama</label>
							<div class="col-md-7">
								<input type="text" class="form-control" name="nama" required>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="control-label col-md-3">Email</label>
							<div class="col-md-7">
								<input type="email" class="form-control" name="email" required>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="control-label col-md-3">Password</label>
							<div class="col-md-7">
								<input type="text" class="form-control" name="password" required>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="control-label col-md-3">Alamat</label>
							<div class="col-md-7">
								<textarea class="form-control" name="alamat" required></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="control-label col-md-3">Telp/HP</label>
							<div class="col-md-7">
								<input type="text" class="form-control" name="telepon" required>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-7 col-md-offset-3">
								<button class="btn btn-primary" name="daftar">Daftar</button>
							</div>
						</div>
					</form>
						<?php 
						// jika ada tombol daftar(ditekan tombol daftar)
			            if (isset($_POST['daftar']))
			            {
			            	// mengambil isian nama,email,password,alamat,telepon
			            	$nama = $_POST["nama"];
			            	$email = $_POST["email"];
			            	$password = $_POST["password"];
			            	$alamat = $_POST["alamat"];
			            	$telepon = $_POST["telepon"];

			            	// cek apakah email sudah digunakan
			              $ambil = $koneksi->query("SELECT * FROM pelanggan WHERE email_pelanggan='$email'");
			              $cocok = $ambil->num_rows;
			              if ($cocok==1) 
			               {
			                echo "<script>alert('Pendaftaran gagal, Email sudah digunakan');</script>";
							echo "<script>location='daftar.php';</script>";
			              }
			              else
			              { 
			              	// query insert ke tabel pelanggan
			              	$koneksi->query("INSERT INTO pelanggan(email_pelanggan,password_pelanggan,nama_pelanggan,telepon_pelanggan,alamat_pelanggan) VALUES('$email','$password','$nama','$telepon','$alamat') ");

			            	echo "<script>alert('Pendaftaran Sukses, Silahkan Login');</script>";
							echo "<script>location='login.php';</script>";
			              }
			            }
			          ?>

				</div>
			</div>
		</div>
	</div>
</div>
	<?php include 'footer.php'; ?>
	<!-- jquery.min.js wajib disertakan agar bootstrap.min.js dapat bekerja -->
	<script src="dist/js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
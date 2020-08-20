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

<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-6">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Login Pelanggan</h3>
				</div>
				<div class="panel-body">
					<form method="post">
						<div class="form-group">
							<label>Email</label>
								<input type="email" class="form-control" name="email">
						</div>
						<div class="form-group">
							<label>Password</label>
								<input type="password" class="form-control" name="password">
						</div>
						<button class="btn btn-primary" name="login">Login</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php 
	// jika ada tombol login(tombol login ditekan )
   if (isset($_POST['login']))
   { 

   		$email = $_POST["email"];
   		$password = $_POST["password"];
   		//lakukan query pengecekan akun di tabel pelanggan db
     $ambil = $koneksi->query("SELECT * FROM pelanggan WHERE email_pelanggan='$email' AND password_pelanggan='$password'");
     //menghitung akun tang terambil
              $cocok = $ambil->num_rows;

     // jika ada 1 akun yang cocok, maka di loginkan
     if ($cocok==1) {
     	// anda sukses login
     	// mendapatkan akun dalam bentuk arrray
     	$akun = $ambil->fetch_assoc();
     	// simpan di session pelanggan
     	$_SESSION["pelanggan"] = $akun;
		echo "<script>alert('Anda Berhasil Login');</script>";

		// jika sudah belanja 
		if (isset($_SESSION["keranjang"]) OR !empty($_SESSION["keranjang"])) 
		{
			echo "<script>location='checkout.php';</script>";	
		}
		else
		{
			echo "<script>location='riwayat.php';</script>";		
		}
	}
	else
		// anda gagal login
      {
		echo "<script>alert('Anda gagal Login');</script>";
		echo "<script>location='login.php';</script>";
     }
   }
 ?>
 	<?php include 'footer.php'; ?>
 	<!-- jquery.min.js wajib disertakan agar bootstrap.min.js dapat bekerja -->
	<script src="dist/js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
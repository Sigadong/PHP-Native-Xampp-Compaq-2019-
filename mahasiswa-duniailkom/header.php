<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Aplikasi Mahasiswa</title>
	<link rel="icon" href="" type="image/png">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<div class="header">
			<h1 id="logo">Mahasiswa<span> STMIK BudiDarma</span></h1>
			<p id="tanggal"><?php echo date("d M Y"); ?></p>
		</div>
		<nav>
			<ul>
				<li>
					<a href="tampil_mhs.php">Tampil</a>
					<a href="tambah_mhs.php">Tambah</a>
					<a href="edit_mhs.php">Edit</a>
					<a href="hapus_mhs.php">Hapus</a>
					<a href="logout.php">Logout</a>
				</li>
			</ul>
		</nav>
		<form action="tampil_mhs.php" method="get" id="search">
			<p>
				<label for="nama">Nama :</label>
				<input type="text" name="nama" id="nama" placeholder="cari...">
				<input type="submit" name="submit" value="Cari">
			</p>
		</form>


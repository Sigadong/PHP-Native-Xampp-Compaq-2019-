<?php 
require_once "../_config/config.php";
require "../_assets/libs/vendor/autoload.php";

// ini adalah uuid dari packagist.org
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

	if (isset($_POST['add'])) {
		// ini adalah uuid dari packagist.org
		// ======================================
		$uuid = Uuid::uuid4()->toString();
		// ======================================
		$pasien = trim(mysqli_real_escape_string($con, $_POST['pasien']));
		$keluhan = trim(mysqli_real_escape_string($con, $_POST['keluhan']));
		$dokter = trim(mysqli_real_escape_string($con, $_POST['dokter']));
		$diagnosa = trim(mysqli_real_escape_string($con, $_POST['diagnosa']));
		$poli = trim(mysqli_real_escape_string($con, $_POST['poli']));
		$tgl = trim(mysqli_real_escape_string($con, $_POST['tgl']));
		// dibawah ini script untuk menginput data rekam medis menggunakn fungsi relasi antar tabel yg ada pda database
		mysqli_query($con, "INSERT INTO tb_rekammedis (id_rm, id_pasien, keluhan, id_dokter, diagnosa, id_poli, tgl_periksa) VALUES ('$uuid', '$pasien', '$keluhan', '$dokter', '$diagnosa', '$poli', '$tgl')") or die(mysqli_error($con));
		// untuk menginput obat ke dalam tb_rm_obat berdasarkan id relasi
		$obat = $_POST['obat'];
		foreach ($obat as $ob) {
		mysqli_query($con, "INSERT INTO tb_rm_obat (id_rm, id_obat) VALUES ('$uuid', '$ob')") or die(mysqli_error($con));
		}
		echo "<script>window.location='data.php';</script>";
	}
?>
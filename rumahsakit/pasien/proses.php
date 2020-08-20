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
	$identitas = trim(mysqli_real_escape_string($con, $_POST['identitas']));
	$nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
	$jk = trim(mysqli_real_escape_string($con, $_POST['jk']));
	$alamat = trim(mysqli_real_escape_string($con, $_POST['alamat']));
	$telp = trim(mysqli_real_escape_string($con, $_POST['telp']));
	// untuk mengecek apakah nomor identitas sudah ada data yg sama yg diinput sebelumnya, maka no.ident tidak bisa diinput
	$sql_cek_identitas = mysqli_query($con, "SELECT * FROM tb_pasien WHERE nomor_identitas = '$identitas'") or die (mysql_error($con));
	if (mysqli_num_rows($sql_cek_identitas) > 0) {
		echo "<script>alert('Nomor identitas sudah pernah diinput!'); window.location='add.php';</script>";
	} else {
		mysqli_query($con, "INSERT INTO tb_pasien (id_pasien, nomor_identitas, nama_pasien, jenis_kelamin, alamat, no_telp) VALUES ('$uuid', '$identitas', '$nama', '$jk', '$alamat', '$telp')") or die(mysqli_error($con));
		echo "<script>window.location='data.php';</script>";
	}
} elseif (isset($_POST['edit'])) {
	$id = $_POST['id'];
	$identitas = trim(mysqli_real_escape_string($con, $_POST['identitas']));
	$nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
	$jk = trim(mysqli_real_escape_string($con, $_POST['jk']));
	$alamat = trim(mysqli_real_escape_string($con, $_POST['alamat']));
	$telp = trim(mysqli_real_escape_string($con, $_POST['telp']));
	// untuk mengecek apakah nomor identitas sudah ada data yg sama yg diinput sebelumnya, maka no.ident tidak bisa diedit
	$sql_cek_identitas = mysqli_query($con, "SELECT * FROM tb_pasien WHERE nomor_identitas = '$identitas' AND id_pasien != '$id'") or die (mysql_error($con));
	if (mysqli_num_rows($sql_cek_identitas) > 0) {
		echo "<script>alert('Nomor identitas sudah pernah diinput!'); window.location='edit.php?id=$id';</script>";
	} else {
		mysqli_query($con, "UPDATE tb_pasien SET nomor_identitas = '$identitas', nama_pasien = '$nama', jenis_kelamin = '$jk', alamat = '$alamat', no_telp = '$telp' WHERE id_pasien = '$id'") or die(mysqli_error($con));
		echo "<script>window.location='data.php';</script>";
	}
} elseif (isset($_POST['import'])) {
	// script untuk import data file excel ke database.
	$file = $_FILES['file']['name'];
	$ekstensi = explode(".", $file);
	$file_name = "file-".round(microtime(true)).".".end($ekstensi);
	$sumber = $_FILES['file']['tmp_name'];
	$target_dir = "../_file/";
	$target_file = $target_dir.$file_name;
	$upload = move_uploaded_file( $sumber, $target_file);
	// dibawah ini adalah library phpoffice/phpexcel dari packgist.org
	$obj = PHPExcel_IOFactory::load($target_file);
	$all_data = $obj->getActiveSheet()->toArray(null, true, true, true);
	// proses memasukkan/mengimport data kedalam database
	$sql = "INSERT INTO tb_pasien (id_pasien, nomor_identitas, nama_pasien, jenis_kelamin, alamat, no_telp) VALUES";
	for ($i=3; $i <= count($all_data); $i++) { 
		$uuid = Uuid::uuid4()->toString();
		$no_id = $all_data[$i]['A'];
		$nama = $all_data[$i]['B'];
		$jk = $all_data[$i]['C'];
		$alamat = $all_data[$i]['D'];
		$telp = $all_data[$i]['E'];
		$sql .= "('$uuid', '$no_id', '$nama', '$jk', '$alamat', '$telp'),";
	}
	$sql = substr($sql, 0, -1);
	// echo $sql;
	mysqli_query($con, $sql) or die (mysqli_error($con));

	unlink($target_file);
	echo "<script>window.location='data.php';</script>";
}
?>
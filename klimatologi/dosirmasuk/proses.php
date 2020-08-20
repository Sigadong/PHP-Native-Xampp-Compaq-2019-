<?php 
require_once "../_config/config.php";
require "../_assets/libs/vendor/autoload.php";

// ini adalah uuid dari packagist
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

if (isset($_POST['add'])) {
	$uuid = Uuid::uuid4()->toString();
	$no_dosir = trim(mysqli_real_escape_string($con, $_POST['no_dosir']));
	$tanggal = trim(mysqli_real_escape_string($con, $_POST['tanggal']));
	$no_surat = trim(mysqli_real_escape_string($con, $_POST['no_surat']));
	$dari = trim(mysqli_real_escape_string($con, $_POST['dari']));
	$perihal = trim(mysqli_real_escape_string($con, $_POST['perihal']));

	$foto = $_FILES['foto']['name'];
	$ekstensi = explode(".", $foto);
	$foto_name = "foto-".round(microtime(true)).".".end($ekstensi);
	$sumber = $_FILES['foto']['tmp_name'];
	$upload = move_uploaded_file( $sumber, "../_file/foto_suratmsk/".$foto_name);

	if ($upload) {
		mysqli_query($con, "INSERT INTO dosir_masuk (id_dosirmsk, no_dosir, tanggal, nomor_surat, dari, perihal, foto_surat) VALUES ('$uuid', '$no_dosir', '$tanggal', '$no_surat', '$dari', '$perihal', '$foto_name')") or die(mysqli_error($con));	
		echo "<script>window.location='data.php';</script>";
	} else {	
		mysqli_query($con, "INSERT INTO dosir_masuk (id_dosirmsk, no_dosir, tanggal, nomor_surat, dari, perihal) VALUES ('$uuid', '$no_dosir', '$tanggal', '$no_surat', '$dari', '$perihal')") or die(mysqli_error($con));	
		echo "<script>window.location='data.php';</script>";
	}

} elseif (isset($_POST['edit'])) {
	$id = $_POST['id'];
	$no_dosir = trim(mysqli_real_escape_string($con, $_POST['no_dosir']));
	$tanggal = trim(mysqli_real_escape_string($con, $_POST['tanggal']));
	$no_surat = trim(mysqli_real_escape_string($con, $_POST['no_surat']));
	$dari = trim(mysqli_real_escape_string($con, $_POST['dari']));
	$perihal = trim(mysqli_real_escape_string($con, $_POST['perihal']));
	$fotoLama = trim(mysqli_real_escape_string($con, $_POST['fotoLama']));

		$foto = $_FILES['foto']['name'];
		$error = $_FILES['foto']['error'];
		$ekstensi = explode(".", $foto);
		$foto_name = "foto-".round(microtime(true)).".".end($ekstensi);
		$sumber = $_FILES['foto']['tmp_name'];

	if ($error === 4) {
		$foto_name = $fotoLama;
		mysqli_query($con, "UPDATE dosir_masuk SET tanggal = '$tanggal', no_dosir = '$no_dosir', nomor_surat = '$no_surat', dari = '$dari', perihal = '$perihal', foto_surat = '$foto_name' WHERE id_dosirmsk = '$id'") or die(mysqli_error($con));
		echo "<script>window.location='data.php';</script>";
	} else {
		$upload = move_uploaded_file( $sumber, "../_file/foto_suratmsk/".$foto_name);
		if ($upload) {
			mysqli_query($con, "UPDATE dosir_masuk SET tanggal = '$tanggal', no_dosir = '$no_dosir', nomor_surat = '$no_surat', dari = '$dari', perihal = '$perihal', foto_surat = '$foto_name' WHERE id_dosirmsk = '$id'") or die(mysqli_error($con));
			echo "<script>window.location='data.php';</script>";
			} 
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
	$sql = "INSERT INTO dosir_masuk (id_dosirmsk, no_dosir, tanggal, nomor_surat, dari, perihal) VALUES";
	for ($i=3; $i <= count($all_data); $i++) { 
		$uuid = Uuid::uuid4()->toString();
		$no_dosir = $all_data[$i]['A'];
		$tanggal = $all_data[$i]['B'];
		$no_surat = $all_data[$i]['C'];
		$dari = $all_data[$i]['D'];
		$perihal = $all_data[$i]['E'];
		$sql .= "('$uuid','$no_dosir', '$tanggal', '$no_surat', '$dari', '$perihal'),";
	}
	$sql = substr($sql, 0, -1);
	// echo $sql;
	mysqli_query($con, $sql) or die (mysqli_error($con));

	unlink($target_file);
	echo "<script>window.location='data.php';</script>";
}
?>
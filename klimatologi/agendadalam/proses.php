<?php 
require_once "../_config/config.php";
require "../_assets/libs/vendor/autoload.php";

// ini adalah uuid dari packagist
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

if (isset($_POST['add'])) {
	$uuid = Uuid::uuid4()->toString();
	$tanggal = trim(mysqli_real_escape_string($con, $_POST['tanggal']));
	$no_tuldinas = trim(mysqli_real_escape_string($con, $_POST['no_tuldinas']));
	$perihal = trim(mysqli_real_escape_string($con, $_POST['perihal']));
	$pejabat_pel = trim(mysqli_real_escape_string($con, $_POST['pejabat_pel']));
	$kepada = trim(mysqli_real_escape_string($con, $_POST['kepada']));

	$sql_cek_notuldinas = mysqli_query($con, "SELECT * FROM agenda_dalam WHERE no_tulisandinas = '$no_tuldinas'") or die (mysql_error($con));
	if (mysqli_num_rows($sql_cek_notuldinas) > 0) {
		echo "<script>alert('Nomor Surat sudah pernah diinput!'); window.location='add.php';</script>";
	} else {
		mysqli_query($con, "INSERT INTO agenda_dalam (id_agendadlm, tanggal, no_tulisandinas, perihal, pejabat_pengelola, kepada) VALUES ('$uuid', '$tanggal', '$no_tuldinas', '$perihal', '$pejabat_pel', '$kepada')") or die(mysqli_error($con));
		echo "<script>window.location='data.php';</script>";
	}
} elseif (isset($_POST['edit'])) {
	$id = $_POST['id'];
	$tanggal = trim(mysqli_real_escape_string($con, $_POST['tanggal']));
	$no_tuldinas = trim(mysqli_real_escape_string($con, $_POST['no_tuldinas']));
	$perihal = trim(mysqli_real_escape_string($con, $_POST['perihal']));
	$pejabat_pel = trim(mysqli_real_escape_string($con, $_POST['pejabat_pel']));
	$kepada = trim(mysqli_real_escape_string($con, $_POST['kepada']));

	$sql_cek_nosurat = mysqli_query($con, "SELECT * FROM agenda_dalam WHERE no_tulisandinas = '$no_tuldinas' AND id_agendadlm != '$id'") or die (mysql_error($con));
	if (mysqli_num_rows($sql_cek_nosurat) > 0) {
		echo "<script>alert('Nomor Surat sudah pernah diinput!'); window.location='edit.php?id=$id';</script>";
	} else {
		mysqli_query($con, "UPDATE agenda_dalam SET tanggal = '$tanggal', no_tulisandinas = '$no_tuldinas', perihal = '$perihal', pejabat_pengelola = '$pejabat_pel', kepada = '$kepada' WHERE id_agendadlm = '$id'") or die(mysqli_error($con));
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
	$sql = "INSERT INTO agenda_dalam (id_agendadlm, tanggal, no_tulisandinas, perihal, pejabat_pengelola, kepada) VALUES";
	for ($i=3; $i <= count($all_data); $i++) { 
		$uuid = Uuid::uuid4()->toString();
		$tanggal = $all_data[$i]['A'];
		$no_tuldinas = $all_data[$i]['B'];
		$perihal = $all_data[$i]['C'];
		$pejabat_pel = $all_data[$i]['D'];
		$kepada = $all_data[$i]['E'];
		$sql .= "('$uuid', '$tanggal', '$no_tuldinas', '$perihal', '$pejabat_pel', '$kepada'),";
	}
	$sql = substr($sql, 0, -1);
	// echo $sql;
	mysqli_query($con, $sql) or die (mysqli_error($con));

	unlink($target_file);
	echo "<script>window.location='data.php';</script>";
}
?>
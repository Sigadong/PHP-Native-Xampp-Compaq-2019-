<?php 
require_once "../_config/config.php";
require "../_assets/libs/vendor/autoload.php";

// ini adalah uuid dari packagist
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

if (isset($_POST['add'])) {
	$uuid = Uuid::uuid4()->toString();
	$tanggal = trim(mysqli_real_escape_string($con, $_POST['tanggal']));
	
	$bulan = date('m');
	switch ($bulan)
	{
	case 1 : $romawi="I"; break;
	case 2 : $romawi="II"; break;
	case 3 : $romawi="III"; break;
	case 4 : $romawi="IV"; break;
	case 5 : $romawi="V"; break;
	case 6 : $romawi="VI"; break;
	case 7 : $romawi="VII"; break;
	case 8 : $romawi="VIII"; break;
	case 9 : $romawi="IX"; break;
	case 10 : $romawi="X"; break;
	case 11 : $romawi="XI"; break;
	case 12 : $romawi="XII"; break;
	default : $romawi= "Not Found"; break;
	}

	// tangkap id_klas, lalu alihkan ke nama_klas utk di inputkan
	$klasifikasi = $_POST['klasifikasi'];
		$tampil1 = mysqli_query($con, "SELECT * FROM klasifikasi_primbon WHERE id_klas = '$klasifikasi'");
		$rows1 = mysqli_num_rows($tampil1);
		if ($rows1 > 0){
	      while($data1 = mysqli_fetch_array($tampil1)) {
	         $klas = substr($data1['nama_klas'], 0, 2);
	      }
	  }

	// tangkap id_ank, lalu alihkan ke nama_anak utk di inputkan
	$ank = $_POST['anak'];
		$tampil2 = mysqli_query($con, "SELECT * FROM anak_primbon WHERE id_ank = '$ank'");
		$rows2 = mysqli_num_rows($tampil2);
		if ($rows2 > 0){
	      while($data2 = mysqli_fetch_array($tampil2)) {
	         $anak = substr($data2['nama_anak'], 0, 3);
	      }
	  }

	$gab1 = $klas.'/'.$anak.'/';
	$kdls = "KDLS/";
	$tgl = $romawi.'/'.date('Y');
	$gab2 = $gab1.$kdls.$tgl;
	$no_surat = trim(mysqli_real_escape_string($con, $gab2));
	$perihal = trim(mysqli_real_escape_string($con, $_POST['perihal']));
	$kepada = trim(mysqli_real_escape_string($con, $_POST['kepada']));

	$foto = $_FILES['foto']['name'];
	$ekstensi = explode(".", $foto);
	$foto_name = "foto-".round(microtime(true)).".".end($ekstensi);
	$sumber = $_FILES['foto']['tmp_name'];
	$upload = move_uploaded_file( $sumber, "../_file/foto_suratkel/".$foto_name);

	// Memecah seluruh kode nomor surat yg sama dan menyimpan ke dlm array
 	$tampil3 = mysqli_query($con, "SELECT * FROM dosir_keluar");
	$array = array();
      while($data3 = mysqli_fetch_array($tampil3)) {
      	$nosurat = substr($data3['nomor_surat'], 0, 2);
      	// $data = $data3['nomor_surat'];
		if ($klas == $nosurat) {
			$array[] = ($klas == $nosurat);
        } 
      }
      //Menghitung total jumlah data yg sama dlm array, lalu menambahkan dgn 1 
     $count = count($array);
      if ($count >0) {
      	$no_dosir = $count + 1;
      } else {
      	$no_dosir = 1;
      }


	if ($upload) {
		mysqli_query($con, "INSERT INTO dosir_keluar (id_dosirkel, no_dosir, tanggal, nomor_surat, perihal, kepada, foto_surat) VALUES ('$uuid', '$no_dosir', '$tanggal', '$no_surat', '$perihal', '$kepada', '$foto_name')") or die(mysqli_error($con));	
		echo "<script>window.location='data.php';</script>";
	} else {	
		mysqli_query($con, "INSERT INTO dosir_keluar (id_dosirkel, no_dosir, tanggal, nomor_surat, perihal, kepada) VALUES ('$uuid', '$no_dosir', '$tanggal', '$no_surat', '$perihal', '$kepada')") or die(mysqli_error($con));	
		echo "<script>window.location='data.php';</script>";
		}

} elseif (isset($_POST['edit'])) { 
	$id = $_POST['id'];
	$no_dosir = trim(mysqli_real_escape_string($con, $_POST['no_dosir']));
	$tanggal = trim(mysqli_real_escape_string($con, $_POST['tanggal']));
	$no_surat = trim(mysqli_real_escape_string($con, $_POST['no_surat']));
	$perihal = trim(mysqli_real_escape_string($con, $_POST['perihal']));
	$kepada = trim(mysqli_real_escape_string($con, $_POST['kepada']));
	$fotoLama = trim(mysqli_real_escape_string($con, $_POST['fotoLama']));

		$foto = $_FILES['foto']['name'];
		$error = $_FILES['foto']['error'];
		$ekstensi = explode(".", $foto);
		$foto_name = "foto-".round(microtime(true)).".".end($ekstensi);
		$sumber = $_FILES['foto']['tmp_name'];

	if ($error === 4) {
		$foto_name = $fotoLama;
		mysqli_query($con, "UPDATE dosir_keluar SET no_dosir = '$no_dosir', tanggal = '$tanggal', nomor_surat = '$no_surat', perihal = '$perihal', kepada = '$kepada', foto_surat= '$foto_name' WHERE id_dosirkel = '$id'") or die(mysqli_error($con));
			echo "<script>window.location='data.php';</script>";
	} else {
		$upload = move_uploaded_file( $sumber, "../_file/foto_suratkel/".$foto_name);
		if ($upload) {
			mysqli_query($con, "UPDATE dosir_keluar SET no_dosir = '$no_dosir', tanggal = '$tanggal', nomor_surat = '$no_surat', perihal = '$perihal', kepada = '$kepada', foto_surat= '$foto_name' WHERE id_dosirkel = '$id'") or die(mysqli_error($con));
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
	$sql = "INSERT INTO dosir_keluar (id_dosirkel, tanggal, nomor_surat, perihal, kepada) VALUES";
	for ($i=3; $i <= count($all_data); $i++) { 
		$uuid = Uuid::uuid4()->toString();
		$no_dosir = $all_data[$i]['A'];
		$tanggal = $all_data[$i]['B'];
		$no_surat = $all_data[$i]['C'];
		$perihal = $all_data[$i]['D'];
		$kepada = $all_data[$i]['E'];
		$sql .= "('$uuid', $no_dosir, '$tanggal', '$no_surat', '$dari', '$perihal'),";
	}
	$sql = substr($sql, 0, -1);
	// echo $sql;
	mysqli_query($con, $sql) or die (mysqli_error($con));

	unlink($target_file);
	echo "<script>window.location='data.php';</script>";
}
?>
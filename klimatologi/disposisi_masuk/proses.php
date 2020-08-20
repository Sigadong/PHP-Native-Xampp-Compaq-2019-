<?php 
require_once "../_config/config.php";
require "../_assets/libs/vendor/autoload.php";

// ini adalah uuid dari packagist
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

if (isset($_POST['add'])) {
	$uuid = Uuid::uuid4()->toString();
	$dari = trim(mysqli_real_escape_string($con, $_POST['dari']));
	$lampiran = trim(mysqli_real_escape_string($con, $_POST['lampiran']));
	$tanggal = trim(mysqli_real_escape_string($con, $_POST['tanggal']));
	// $kodesimpan = trim(mysqli_real_escape_string($con, $_POST['kodesimpan']));

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

	if (!empty($anak)) {
		$gab1 = $klas.'/'.$anak;
		$kodesimpan = trim(mysqli_real_escape_string($con, $gab1));

		$diteruskan = trim(mysqli_real_escape_string($con, $_POST['diteruskan']));
		// $no_dosir = trim(mysqli_real_escape_string($con, $_POST['no_dosir']));
		$isi_dispo = trim(mysqli_real_escape_string($con, $_POST['isi_dispo']));
		$catatan = trim(mysqli_real_escape_string($con, $_POST['catatan']));


		// Memecah seluruh kode nomor surat yg sama dan menyimpan ke dlm array
	 	$tampil3 = mysqli_query($con, "SELECT * FROM disposisi_masuk");
		$array = array();
	      while($data3 = mysqli_fetch_array($tampil3)) {
	      	$Kdsimpan = substr($data3['kode_simpan'], 0, 2);
			if ($klas == $Kdsimpan) {
				$array[] = ($klas == $Kdsimpan);
	        } 
	      }
	      //Menghitung total jumlah data yg sama dlm array, lalu menambahkan dgn 1 
	     $count = count($array);
	      if ($count >0) {
	      	$no_dosir = $count + 1;
	      } else {
	      	$no_dosir = 1;
	      }


		if (!empty($kodesimpan)) {
			mysqli_query($con, "INSERT INTO disposisi_masuk (id_dispo, dari, lampiran, diterima_tgl, kode_simpan, diteruskan_kpd, nomor_dosirmsk, isi_disposisi, catatan) VALUES ('$uuid', '$dari', '$lampiran', '$tanggal', '$kodesimpan', '$diteruskan', '$no_dosir', '$isi_dispo', '$catatan')") or die(mysqli_error($con));
			// Input ke tabel dosir masuk
			mysqli_query($con, "INSERT INTO dosir_masuk (id_dosirmsk, no_dosir, tanggal, dari) VALUES ('$uuid', '$no_dosir', '$tanggal', '$dari')") or die(mysqli_error($con));	

			echo "<script>window.location='data.php';</script>";
		} else {
			echo "<script>alert('Gagal Input Data!'); window.location='add.php';</script>";
		} 
	} else {
		echo "<script>alert('Kode Penyimpanan belum dipilih!'); window.location='add.php';</script>";	 
	}
} elseif (isset($_POST['edit'])) {
	$id = $_POST['id'];
	$dari = trim(mysqli_real_escape_string($con, $_POST['dari']));
	$lampiran = trim(mysqli_real_escape_string($con, $_POST['lampiran']));
	$tanggal = trim(mysqli_real_escape_string($con, $_POST['tanggal']));
	$kodesimpan = trim(mysqli_real_escape_string($con, $_POST['kodesimpan']));
	$diteruskan = trim(mysqli_real_escape_string($con, $_POST['diteruskan']));
	$no_dosir = trim(mysqli_real_escape_string($con, $_POST['no_dosir']));
	$isi_dispo = trim(mysqli_real_escape_string($con, $_POST['isi_dispo']));
	$catatan = trim(mysqli_real_escape_string($con, $_POST['catatan']));

	$sql_cek_nodosir = mysqli_query($con, "SELECT * FROM disposisi_masuk WHERE nomor_dosirmsk = '$no_dosir' AND id_dispo = '$id'") or die (mysql_error($con));
	if (mysqli_num_rows($sql_cek_nodosir)) {
		mysqli_query($con, "UPDATE disposisi_masuk SET dari = '$dari ', lampiran = '$lampiran', diterima_tgl = '$tanggal', kode_simpan = '$kodesimpan', diteruskan_kpd = '$diteruskan', nomor_dosirmsk = '$no_dosir', isi_disposisi = '$isi_dispo', catatan = '$catatan' WHERE id_dispo = '$id'") or die(mysqli_error($con));
		echo "<script>window.location='data.php';</script>";
	} else {
		echo "<script>alert('Nomor Dosir Surat tidak dapat diubah!'); window.location='edit.php?id=$id';</script>";
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
	$sql = "INSERT INTO disposisi_masuk (id_dispo, dari, lampiran, diterima_tgl, kode_simpan, diteruskan_kpd, nomor_dosirmsk, isi_disposisi, catatan) VALUES";
	for ($i=3; $i <= count($all_data); $i++) { 
		$uuid = Uuid::uuid4()->toString();
		$dari = $all_data[$i]['A'];
		$lampiran = $all_data[$i]['B'];
		$tgl = $all_data[$i]['C'];
		$kodesimpan = $all_data[$i]['D'];
		$diteruskan = $all_data[$i]['E'];
		$no_dosir = $all_data[$i]['F'];
		$isi_dispo = $all_data[$i]['G'];
		$catatan = $all_data[$i]['H'];
		$sql .= "('$uuid', '$dari', '$lampiran', '$tgl', '$kodesimpan', '$diteruskan', '$no_dosir', '$isi_dispo', '$catatan'),";
	}
	$sql = substr($sql, 0, -1);
	// echo $sql;
	mysqli_query($con, $sql) or die (mysqli_error($con));

	unlink($target_file);
	echo "<script>window.location='data.php';</script>";
}
?>
<?php 
require_once "../_config/config.php";
	$tampil = mysqli_query($con, "SELECT * FROM dosir_keluar WHERE id_dosirkel = '$_GET[id]'");
	$data = mysqli_fetch_array($tampil); 
    $foto = $data['foto_surat'];

    if (file_exists("../_file/foto_suratkel/$foto")){
		unlink("../_file/foto_suratkel/$foto");
	}

	mysqli_query($con, "DELETE FROM dosir_keluar WHERE id_dosirkel = '$_GET[id]'") or die(mysqli_error($con));
	echo "<script>window.location='data.php';</script>";
?>
<?php 
require_once "../_config/config.php";
	$tampil = mysqli_query($con, "SELECT * FROM dosir_masuk WHERE id_dosirmsk = '$_GET[id]'");
	$data = mysqli_fetch_array($tampil); 
    $foto = $data['foto_surat'];

    if (file_exists("../_file/foto_suratmsk/$foto")){
		unlink("../_file/foto_suratmsk/$foto");
	}

	mysqli_query($con, "DELETE FROM dosir_masuk WHERE id_dosirmsk = '$_GET[id]'") or die(mysqli_error($con));
	echo "<script>window.location='data.php';</script>";
?>